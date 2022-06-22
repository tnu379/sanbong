<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Dotenv\Validator;
use Exception;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Users::where('role', 2)->get();
        $countActiveUser = Users::where('role', 2)->where('status', 1)->get()->count();
        $count = $data->count();
        $district = Config::get('app.app-football.district');

        return view('user.index', ['users' => $data, 'count' => $count, 'countActiveMember' => $countActiveUser, 'district' => $district]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district = Config::get('app.app-football.district');
        $role = Config::get('app.app-football.role');
        return view('user.create', [
            'roles' => $role,
            'districts' => $district
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $validated = FacadesValidator::make($request->all(), [
                //                'img' => 'required|mimes:jpg,png,jpeg|max:2048',
                'password'         => 'required|min:6',
                'confirm_password' => 'min:6|same:confirm_password',
                'email' => 'required|email'
            ]);
            if ($validated->fails()) {
                return redirect('users/create')
                    ->withErrors($validated)
                    ->withInput();
            }
            $username = explode('@', $request['email']);
            $userData = [
                'user_name' => $username[0] ?? 0,
                'email' => $request['email'],
                'password' =>  Hash::make($request['password']),
                'full_name' => $request['firstName'] . " " . $request['lastName'] ?? 0,
                'phone' => $request['phone'] ?? 0,
                'district' => $request['district'] ?? 0,
                'ward' => $request['ward'] ?? 0,
                'street' => $request['Street'] ?? 0,
                'role' => $request['role'] ?? 0
            ];

            $data = Users::create($userData);
            if ($request->hasFile('avatarUploader')) {
                $image      = $request->file('avatarUploader');
                $fileName   = time() . '.' . $image->getClientOriginalExtension();
                $path = $request->file('avatarUploader')->storeAs('uploads/avatar/', $fileName, 'public');
                $data->img = '/storage/' . $path;
                $data->save();
                return redirect('users/');
            }
            return redirect('users/');
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = Users::find($id);
        $districts = Config::get('app.app-football.district');
        $role = Config::get('app.app-football.role');
        return view('user.edit', [
            'user' => $user,
            'roles' => $role,
            'districts' => $districts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = FacadesValidator::make($request->all(), [
            //                'img' => 'required|mimes:jpg,png,jpeg|max:2048',
            'confirm_password' => 'same:confirm_password',
        ]);
        if ($validated->fails()) {
            return redirect('users/edit')
                ->withErrors($validated)
                ->withInput();
        }
        $user = Users::find($id);
        $username = explode('@', $request['email']);
        $userData = [
            'user_name' => $username[0] ?? 0,
            'email' => $request['email'],
            'full_name' => $request['firstName'] . " " . $request['lastName'] ?? 0,
            'phone' => $request['phone'] ?? 0,
            'district' => $request['district'] ?? 0,
            'ward' => $request['ward'] ?? 0,
            'street' => $request['Street'] ?? 0,
            'role' => $request['role'] ?? 0
        ];
        $data = $user->update($userData);
        if ($request->hasFile('avatarUploader')) {
            $image      = $request->file('avatarUploader');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('avatarUploader')->storeAs('uploads/avatar/', $fileName, 'public');
            $user->img = '/storage/' . $path;
            $user->save();
        }
        if ($request['password'] !== null) {
            $user->password = Hash::make($request['password']);
            $user->save();
        }

        return redirect('users/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();
        return back();
    }

    public function login(Request $request)
    {
        $username = $request['Username'];
        $password = $request['Password'];
        $credentials = [
            'email' => $username,
            'password' => $password,
        ];
        if (Auth::attempt($credentials)) {
            $user = Users::find(Auth::id());
            $request->session()->put('user_name', $user->full_name);
            $request->session()->put('user_email', $user->email);
            $request->session()->put('img', $user->img != '' ?$user->img  : '');
            $request->session()->put('role', $user->role);

           if($user->role == 2){
            return redirect('admin');
           }
           return redirect('payments');

        }
        return back()->with('msg', 'username or password wrong');
    }
    public function registerStore(Request $request){
        $userData = [
            'email' => $request['email'],
            'password' =>  Hash::make($request['Password']),
            'full_name' => $request['full_name'] ?? "",
            'phone' => $request['phone'] ?? 0,
            'role' => 3
        ];
        $data = Users::create($userData);
        return redirect('login');
    }
}
