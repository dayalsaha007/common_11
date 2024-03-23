
@extends('backend.dashboard.master_dashboard')


        @section('head_title')
                Admin | Advance Setting
        @endsection

        @section('content')


        <div class="content">

            <div class="content-page">
                <!-- Start Content-->
                <div class="container-fluid">

                   <div class="row">

                            <div class="col-md-12">

                                <style>
                                    img.p_image.mb-3 {
                                        {{--  border: 8px solid #6b9190;
                                        border-radius: 50%;
                                        line-height: 150px;  --}}
                                        height: 150px;
                                        width: 150px;
                                    }
                                </style>


                                <div class="card mt-3">

                                    <div class="card-header" style="background:#6b9190; color:#fff;">
                                        <h4>Advance Setting</h4>
                                    </div>

                                    <div class="card-body">


                                        <div class="row">

                                            <div class="col-md-12">

                                                <form action="" method="POST" enctype="multipart/form-data" >
                                                    @csrf
                                                    <input type="hidden" name="up_id" value="{{ $seo->id }}">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3">
                                                                <label for="exmple-text-input" class="form-label">Meta Title *</label>
                                                                <div class="input-group add_data">
                                                                    <input type="text" id="meta_title" name="meta_title" value="{{ $seo->meta_title }}" class="form-control" placeholder="Title" data-bs-toggle="tooltip"  title="Title">

                                                                </div>

                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <label for="exmple-text-input" class="form-label">Meta Keyword *</label>
                                                                <div class="input-group add_data">
                                                                    <input type="text" id="meta_keyword" name="meta_keyword" value="{{ $seo->meta_keyword }}" class="form-control" placeholder="Meta Keyword" data-bs-toggle="tooltip"  title="Meta Keyword">

                                                                </div>

                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <label for="exmple-text-input" class="form-label">Meta Description *</label>
                                                                <div class="input-group add_data">
                                                                    <textarea id="meta_description" name="meta_description" class="form-control" style="height: 150px;">{!! $seo->meta_description !!}</textarea>

                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3">
                                                                <label for="exmple-text-input" class="form-label">Facebook *</label>
                                                                <div class="input-group add_data">
                                                                    <input type="text" id="facebook" name="facebook" value="{{ $seo->facebook }}" class="form-control" placeholder="Facebook" data-bs-toggle="tooltip"  title="Facebook">

                                                                </div>

                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <label for="exmple-text-input" class="form-label">Twitter *</label>
                                                                <div class="input-group add_data">
                                                                    <input type="text" id="twitter" name="twitter" value="{{ $seo->twitter }}" class="form-control" placeholder="Twitter" data-bs-toggle="tooltip"  title="Twitter">

                                                                </div>

                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <label for="exmple-text-input" class="form-label">Google *</label>
                                                                <div class="input-group add_data">
                                                                    <input type="text" id="google" name="google" value="{{ $seo->google }}" class="form-control" placeholder="Google" data-bs-toggle="tooltip"  title="Google">

                                                                </div>

                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <label for="exmple-text-input" class="form-label">Linkedin *</label>
                                                                <div class="input-group add_data">
                                                                    <input type="text" id="linkedin" name="linkedin" value="{{ $seo->linkedin }}" class="form-control" placeholder="Linkedin" data-bs-toggle="tooltip"  title="Linkedin">

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>






                                                    <div class="row">

                                                        <div class="col-md-6 mb-3">
                                                            <label for="exmple-text-input" class="form-label">Footer Logo *</label>
                                                            <div class="input-group img_n">
                                                                <input type="file" class="form-control"  id="footer_logo" name="footer_logo" data-bs-toggle="tooltip"  title="Footer Logo" placeholder="Footer Logo">

                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 mt-3 " id="photo_r">
                                                            <label for="exampleInputEmail1" class="form-label">    </label>
                                                            <img id="showImage" style="width: 200px; height:80px;" src="{{ (!empty($seo->footer_logo)) ? url($seo->footer_logo) : url('upload/no_image.jpg') }}" alt="slide">

                                                        </div>

                                                    </div>

                                                    <button type="button" id="update_profile_btn" class="btn btn-sm btn-info" >Update Advance Setting</button>

                                                </form>

                                            </div>


                                        </div>

                                    </div>

                                </div>


                            </div>
                            <div class="col-md-6"></div>

                   </div>

                </div>
                <!-- container -->

            </div>
        </div>
        <!-- content -->
@endsection

@section('footer_script')

            <script>

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

            </script>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#footer_logo').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#showImage').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });
            </script>

           <script>

                    $(document).ready(function(){

                            $('#update_profile_btn').on('click', function(e){
                                e.preventDefault();

                                let up_id = $('#up_id').val();
                                let meta_title = $('#meta_title').val();
                                let meta_keyword = $('#meta_keyword').val();
                                let meta_description = $('#meta_description').val();
                                let facebook = $('#facebook').val();
                                let twitter = $('#twitter').val();
                                let google = $('#google').val();
                                let linkedin = $('#linkedin').val();
                                let footer_logo=document.getElementById('footer_logo').files;

                                let formData= new FormData();
                                 formData.append('meta_title',meta_title);
                                 formData.append('meta_keyword',meta_keyword);
                                 formData.append('meta_description',meta_description);
                                 formData.append('facebook',facebook);
                                 formData.append('twitter',twitter);
                                 formData.append('google',google);
                                 formData.append('linkedin',linkedin);
                                 if(footer_logo[0]!=null){
                                    formData.append('footer_logo',footer_logo[0]);
                                }


                                axios.post("{{ route('update_advance_setting', ['up_id' => $seo->id]) }}", formData)
                                    .then(function (res){
                                        console.log(res);

                                        if(res.data.status == 'success'){
                                            $('.img_n input').val('');
                                            $('.table').load(location.href + ' .table');
                                            toastr.success(res.data.message);


                                        }


                                })


                            })

                    });


           </script>


@endsection
