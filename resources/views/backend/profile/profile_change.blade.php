@extends('backend.dashboard.master_dashboard')


@section('head_title')
    Admin | Change Profile
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">


                <div class="card mt-3">

                    <div class="card-header" style="background:#6b9190; color:#fff;">
                        <h4>Change Your Profile</h4>
                    </div>



                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
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
                                                <input type="text" id="name" name="name"
                                                    value="{{ $user->name }}" class="form-control" placeholder="Your Name"
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
                                                    data-bs-placement="top" value="{{ $user->phone }}" title="Your Phone">
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
                                                    data-bs-placement="top" value="{{ $user->address }}" title="Address">
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
                                                    data-bs-placement="top" value="{{ $user->city }}"
                                                    title="Your City">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fa fa-envelope"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" id="zip" class="form-control"
                                                    placeholder="Zip Code" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" value="{{ $user->zip }}" title="Zip Code">
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

                                    <button type="button" id="update_profile_btn" class="btn btn-sm btn-info">Update
                                        Profile</button>


                                </div>


                            </div>
                    </form>

                </div>

            </div>


        </div>


    </div>

    </div>
    <!-- container -->
@endsection

@section('footer_script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        var userId = {{ Auth::user()->id }};
    </script>

    <script>
        $(document).ready(function() {

            $('#update_profile_btn').on('click', function(e) {
                e.preventDefault();

                let user_id = userId;
                let name = $('#name').val();
                let email = $('#email').val();
                let phone = $('#phone').val();
                let country = $('#country').val();
                let address = $('#address').val();
                let state = $('#state').val();
                let city = $('#city').val();
                let zip = $('#zip').val();
                let old_pass = $('#old_password').val();
                let new_pass = $('#new_password').val();
                let confirm_pass = $('#confirm_password').val();
                let image = document.getElementById('image').files;

                let formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('phone', phone);
                formData.append('country', country);
                formData.append('address', address);
                formData.append('state', state);
                formData.append('city', city);
                formData.append('zip', zip);
                formData.append('old_pass', old_pass);
                formData.append('new_pass', new_pass);
                formData.append('confirm_pass', confirm_pass);
                if (image[0] != null) {
                    formData.append('image', image[0]);
                }


                axios.post("{{ url('/update/profile/change/') }}/" + user_id, formData)
                    .then(function(res) {
                        console.log(res);

                        if (res.data.status == 'success') {
                            toastr.success(res.data.message);
                            datatable.ajax.reload();
                            $('#update_active_user_modal').modal('hide');

                        }

                    })

            })

        });
    </script>
@endsection
