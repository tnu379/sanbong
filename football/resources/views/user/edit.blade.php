@extends('layout')
@section('title', 'User')
@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Step Form -->
        <form class="js-step-form py-md-5" action="{{ route('user_update', $user->id) }}" method="POST"
            enctype="multipart/form-data" data-hs-step-form-options='{
                                                        "progressSelector": "#addUserStepFormProgress",
                                                        "stepsSelector": "#addUserStepFormContent",
                                                        "endSelector": "#addUserFinishBtn",
                                                        "isValidate": false
                                                        }'>
            @csrf
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                    <!-- Content Step Form -->
                    <div id="addUserStepFormContent">
                        <!-- Card -->
                        <div id="addUserStepProfile" class="card card-lg active">
                            <!-- Body -->
                            <div class="card-body">
                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label class="col-sm-3 col-form-label input-label">Avatar</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center">
                                            <!-- Avatar -->
                                            <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5"
                                                for="avatarUploader">
                                                <img id="avatarImg" class="avatar-img" src="{{ asset($user->img) }}"
                                                    alt="Image Description">

                                                <input id="avatarUploader" type="file" name="avatarUploader"
                                                    class="js-file-attach avatar-uploader-input"
                                                    data-hs-file-attach-options='{
                                                                                            "mode": "image",
                                                                                            "targetAttr": "src",
                                                                                            "resetTarget": ".js-file-attach-reset-img",
                                                                                            "resetImg": "./assets/img/160x160/img1.jpg",
                                                                                            "allowTypes": [".png", ".jpeg", ".jpg"]
                                                                                            }'>

                                                <span class="avatar-uploader-trigger">
                                                    <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                                </span>
                                            </label>
                                            <!-- End Avatar -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i
                                            class="tio-help-outlined text-body ml-1" data-toggle="tooltip"
                                            data-placement="top"
                                            title="Displayed on public forums, such as Front."></i></label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-down-break">
                                            <?php
                                            $a = explode(' ', $user->full_name);
                                            $firstName = $a[0] ?? '';
                                            $lastName = $a[1] ?? '';
                                            ?>
                                            <input type="text" class="form-control" name="firstName" id="firstNameLabel"
                                                value="{{ $firstName }}" placeholder="Clarice" aria-label="Clarice">
                                            <input type="text" class="form-control" name="lastName" id="lastNameLabel"
                                                value="{{ $lastName }}" placeholder="Boone" aria-label="Boone">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="emailLabel"
                                            value="{{ $user->email }}" placeholder="clarice@example.com"
                                            aria-label="clarice@example.com">
                                        @if ($errors->first('email'))
                                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>

                                </div>

                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="js-add-field row form-group" data-hs-add-field-options='{
                                                                        "template": "#addPhoneFieldTemplate",
                                                                        "container": "#addPhoneFieldContainer",
                                                                        "defaultCreated": 0
                                                                    }'>
                                    <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span
                                            class="input-label-secondary">(Optional)</span></label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-down-break align-items-center">
                                            <input type="text" class="js-masked-input form-control" name="phone"
                                                value="{{ $user->phone ?? '' }}" id="phoneLabel"
                                                placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx"
                                                data-hs-mask-options='{
                                                                                "template": "+0(000)000-00-00"
                                                                            }'>
                                        </div>

                                        <!-- Container For Input Field -->
                                        <div id="addPhoneFieldContainer"></div>


                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Add Phone Input Field -->
                                <div id="addAddressFieldTemplate" style="display: none;">
                                    <div class="input-group-add-field">
                                        <input type="text" class="form-control" data-name="addressLine"
                                            placeholder="Your address" aria-label="Your address">

                                        <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                                            <i class="tio-clear"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Add Phone Input Field -->
                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="departmentLabel"
                                        class="col-sm-3 col-form-label input-label">Password</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password" aria-label="Password">
                                        @if ($errors->first('password'))
                                            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>

                                </div> <!-- Form Group -->

                                <div class="row form-group">
                                    <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Confirm
                                        password</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="ward" id="confirm_password"
                                            placeholder="Confirm password" aria-label="Confirm password">
                                        @if ($errors->first('confirm_password'))
                                            <div class="alert alert-danger">{{ $errors->first('confirm_password') }}</div>
                                        @endif
                                        <span id='message'></span>

                                    </div>

                                </div>

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="organizationLabel"
                                        class="col-sm-3 col-form-label input-label">Address</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address" id="organizationLabel"
                                            value="{{ $user->address }}" placeholder="1127/5" aria-label="1127/5">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Ward</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="ward" id="departmentLabel"
                                            placeholder="Vạn Thạnh" aria-label="Vạn Thạnh" value="{{ $user->ward }}">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Street</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="Street" id="departmentLabel"
                                            value="{{ $user->street }}" placeholder="2/4" aria-label="2/4">
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <div class="row form-group">
                                    <label for="departmentLabel"
                                        class="col-sm-3 col-form-label input-label">District</label>
                                    <div class="col-sm-9">
                                        <select class="js-select2-custom custom-select" size="1" style="opacity: 0;"
                                            name="district">
                                            <option selected value="{{ $user->district }}">
                                                {{ $districts[$user->district] }}</option>
                                            @foreach ($districts as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <!-- End Select -->
                                </div>

                                <div class="row form-group">
                                    <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Role</label>
                                    <div class="col-sm-9">
                                        <select class="js-select2-custom custom-select" size="1" style="opacity: 0;"
                                            name="role">
                                            <option selected value="{{ $user->role }}">
                                                {{ $roles[$user->role] }}</option>

                                            @foreach ($roles as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- End Select -->
                                </div>
                                <div class="card-footer d-flex justify-content-end align-items-center">
                                    <button type="submit" class="btn btn-primary" data-hs-step-form-next-options='{
                                                                                    "targetSelector": "#addUserStepBillingAddress"
                                                                                }'>
                                        Sửa <i class="tio-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Body -->
                <div id="successMessageContent" style="display:none;">
                    <div class="text-center">
                        <img class="img-fluid mb-3" src="{{ asset('assets\svg\illustrations\hi-five.svg') }}"
                            alt="Image Description" style="max-width: 15rem;">

                        <div class="mb-4">
                            <h2>Successful!</h2>
                            <p>New <span class="font-weight-bold text-dark">Ella Lauda</span> user has been
                                successfully created.</p>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a class="btn btn-white mr-3" href="users.html">
                                <i class="tio-chevron-left ml-1"></i> Back to users
                            </a>
                            <a class="btn btn-primary" href="users-add-user.html">
                                <i class="tio-user-add mr-1"></i> Add new user
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Message Body -->
            </div>
    </div>
    </form>
    <!-- End Step Form -->
    </div>
    <!-- Footer -->

    <div class="footer">
        <div class="row justify-content-between align-items-center">
            <div class="col">
            </div>
            <div class="col-auto">
                <div class="d-flex justify-content-end">
                    <!-- List Dot -->
                    <ul class="list-inline list-separator">
                        <li class="list-inline-item">
                            <a class="list-separator-link" href="#">FAQ</a>
                        </li>

                        <li class="list-inline-item">
                            <a class="list-separator-link" href="#">License</a>
                        </li>

                        <li class="list-inline-item">
                            <!-- Keyboard Shortcuts Toggle -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                    href="javascript:;" data-hs-unfold-options='{
                                                                        "target": "#keyboardShortcutsSidebar",
                                                                        "type": "css-animation",
                                                                        "animationIn": "fadeInRight",
                                                                        "animationOut": "fadeOutRight",
                                                                        "hasOverlay": true,
                                                                        "smartPositionOff": true
                                                                       }'>
                                    <i class="tio-command-key"></i>
                                </a>
                            </div>
                            <!-- End Keyboard Shortcuts Toggle -->
                        </li>
                    </ul>
                    <!-- End List Dot -->
                </div>
            </div>
        </div>
    </div>



    <!-- End Footer -->
@endsection
