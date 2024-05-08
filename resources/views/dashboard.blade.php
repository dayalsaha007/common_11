<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>


    <!----Bootstrap Min css--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('backend.dashboard.upper_script')


</head>

<body>

    @php
    $id = Auth::id();
    $user = \App\Models\User::findOrFail($id);
    @endphp

    <!--------------Dahboard Code Start------------------------>
        <div class="container-fluid">

            <!--------------First Row Customer-------------------->
            <div class="row">
                <div class="col-md-3">

                    <div class="card mt-3">

                        <div class="card-body">
                            <h5 class="my-4">Customer Dashboard</h5>
                            <a href="{{ route('dashboard') }}" style="color:#fff; background:#003087;"
                                class="btn  btn-sm btn-block  w-100 mt-2">Dashboard</a>

                            <a href="{{ route('logout') }}" style="color:#fff; background:#003087;"
                                class="btn  btn-sm btn-block  w-100 mt-2">Logout</a>

                        </div>

                    </div>

                </div>


                <div class="col-md-9">


                    <div class="card mt-3">


                        <style>
                            img.p_image {
                                border: 8px solid #003087;
                                /* border-radius: 50%; */
                                line-height: 250px;
                                height: 250px;
                                widt: 250px;
                            }
                        </style>

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <h5 class="my-4">Customer Profile</h5>
                                <div class="row">
                                    <div class="col-md-4">

                                        <img src="{{ !empty($user->image) ? url($user->image) : url('backend/uploads/no_image.jpg') }}"
                                            class="p_image mb-3" alt="profile-image" width="300px">

                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-camera"
                                                    aria-hidden="true"></i></span>
                                            <input type="file" id="image" name="image" class="form-control"
                                                placeholder="Your Name" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Profile Image">
                                        </div>


                                    </div>

                                    <div class="col-md-8">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-user-circle-o"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="name" name="name" value="{{ $user->name }}"
                                                        class="form-control" placeholder="Your Name"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-envelope"
                                                            aria-hidden="true"></i></span>
                                                    <input type="email" id="email" class="form-control"
                                                        placeholder="Your Email" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" value="{{ $user->email }}" title="Email">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-envelope"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="phone" class="form-control"
                                                        placeholder="Your Phone" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" value="{{ $user->phone }}"
                                                        title="Your Phone">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-envelope"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="country" class="form-control"
                                                        placeholder="Your Country" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" value="{{ $user->country }}"
                                                        title="Your Country">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-envelope"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="address" class="form-control"
                                                        placeholder="Your Address" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" value="{{ $user->address }}"
                                                        title="Address">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-envelope"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="state" class="form-control"
                                                        placeholder="Your State" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" value="{{ $user->state }}" title="State">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-envelope"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="city" class="form-control"
                                                        placeholder="Your City" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" value="{{ $user->city }}" title="Your City">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-envelope"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="zip" class="form-control" placeholder="Zip Code"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        value="{{ $user->zip }}" title="Zip Code">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="old_password" name="old_password"
                                                        class="form-control" placeholder="Your Old Password"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Old Password">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="new_password" name="new_password"
                                                        class="form-control" placeholder="Your New Password"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="New Password">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" id="confirm_password" name="confirm_password"
                                                        class="form-control" placeholder="Confirm Password"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Confirm Password">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" id="update_user_btn" style="color:#fff; background:#003087;"
                                            class="btn btn-sm ">Update
                                            Profile</button>


                                    </div>


                                </div>
                        </form>

                    </div>

                </div>
            </div>


        </div>

        </div>
    <!--------------Dahboard Code close------------------------>


    <!-- Bootstrap Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    @include('backend.dashboard.lower_script')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @include('backend.script.index_js')

</body>

</html>
