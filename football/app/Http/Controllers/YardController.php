<?php

namespace App\Http\Controllers;

use App\Models\Yard;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class YardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yards = Yard::get()->where('users_id', Auth::id());
        $sizes = Config::get('app.app-football.size');

        return view('yard.index',[
            'yards' => $yards,
            'sizes' => $sizes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Config::get('app.app-football.size');
        $is_active = Config::get('app.app-football.is_active');
        return view('yard.create', [
            'sizes' => $sizes,
            'is_active' => $is_active
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
            $validated = Validator::make($request->all(), [
                //                'img' => 'required|mimes:jpg,png,jpeg|max:2048',
                'name'  => 'required',
                'price' => 'required',
            ]);
            if ($validated->fails()) {
                return redirect('yards/create')
                    ->withErrors($validated)
                    ->withInput();
            }
            $yardData = [
                'user_id' => Auth::id(),
                'name' => $request->name,
                'price' => $request->price,
                'is_active' => $request->is_active,
                'size' => $request->size,
                'status' => 0
            ];
            $data = Yard::create($yardData);
            return redirect('/yards');
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
        $sizes = Config::get('app.app-football.size');
        $is_active = Config::get('app.app-football.is_active');
        $yard = Yard::find($id);
        return view('yard.edit', [
            'sizes' => $sizes,
            'is_active' => $is_active,
            'yard' => $yard
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
        try {
            $validated = Validator::make($request->all(), [
                //                'img' => 'required|mimes:jpg,png,jpeg|max:2048',
                'name'  => 'required',
                'price' => 'required',
            ]);
            if ($validated->fails()) {
                return redirect('yards/create')
                    ->withErrors($validated)
                    ->withInput();
            }
            $yardData = [
                'user_id' => Auth::id(),
                'name' => $request->name,
                'price' => $request->price,
                'is_active' => $request->is_active,
                'size' => $request->size,
                'status' => 0
            ];
            $yard = Yard::find( $id);
            $data = $yard->update($yardData);
            return redirect('/yards');
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yard = Yard::find( $id)->delete();
        return back();

    }
}
