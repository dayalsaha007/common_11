@extends('backend.dashboard.master_dashboard')


@section('head_title')
Admin | Advance Setting
@endsection

@section('content')



<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">

            <style>
                img.p_image.mb-3 {
                    border: 8px solid #6b9190;
                    border-radius: 50%;
                    line-height: 150px;
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

                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="up_id" value="{{ $seo->id }}">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <label for="exmple-text-input" class="form-label">Meta Title *</label>
                                            <div class="input-group add_data">
                                                <input type="text" id="meta_title" name="meta_title"
                                                    value="{{ $seo->meta_title }}" class="form-control"
                                                    placeholder="Title" data-bs-toggle="tooltip" title="Title">

                                            </div>

                                        </div>

                                        <div class="input-group mb-3">
                                            <label for="exmple-text-input" class="form-label">Meta Keyword *</label>
                                            <div class="input-group add_data">
                                                <input type="text" id="meta_keyword" name="meta_keyword"
                                                    value="{{ $seo->meta_keyword }}" class="form-control"
                                                    placeholder="Meta Keyword" data-bs-toggle="tooltip"
                                                    title="Meta Keyword">

                                            </div>

                                        </div>

                                        <div class="input-group mb-3">
                                            <label for="exmple-text-input" class="form-label">Meta Description *</label>
                                            <div class="input-group add_data">
                                                <textarea id="meta_description" name="meta_description"
                                                    class="form-control"
                                                    style="height: 50px;">{!! $seo->meta_description !!}</textarea>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <label for="exmple-text-input" class="form-label">Facebook *</label>
                                            <div class="input-group add_data">
                                                <input type="text" id="facebook" name="facebook"
                                                    value="{{ $seo->facebook }}" class="form-control"
                                                    placeholder="Facebook" data-bs-toggle="tooltip" title="Facebook">

                                            </div>

                                        </div>

                                        <div class="input-group mb-3">
                                            <label for="exmple-text-input" class="form-label">Twitter *</label>
                                            <div class="input-group add_data">
                                                <input type="text" id="twitter" name="twitter"
                                                    value="{{ $seo->twitter }}" class="form-control"
                                                    placeholder="Twitter" data-bs-toggle="tooltip" title="Twitter">

                                            </div>

                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="exmple-text-input" class="form-label">Google *</label>
                                            <div class="input-group add_data">
                                                <input type="text" id="google" name="google" value="{{ $seo->google }}"
                                                    class="form-control" placeholder="Google" data-bs-toggle="tooltip"
                                                    title="Google">

                                            </div>

                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="exmple-text-input" class="form-label">Linkedin *</label>
                                            <div class="input-group add_data">
                                                <input type="text" id="linkedin" name="linkedin"
                                                    value="{{ $seo->linkedin }}" class="form-control"
                                                    placeholder="Linkedin" data-bs-toggle="tooltip" title="Linkedin">

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 add_r">
                                            <label for="exampleInputEmail1" class="form-label">Top Bar Phone</label>
                                            <input class="form-control" type="text" name="top_bar_phone" id="top_bar_phone" value="{{ $seo->top_bar_phone }}">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 add_r">
                                            <label for="exampleInputEmail1" class="form-label">Top Bar Email</label>
                                            <input class="form-control" type="email" name="top_bar_email" id="top_bar_email" value="{{ $seo->top_bar_email }}">
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 add_r">
                                            <label for="exampleInputEmail1" class="form-label"> Footer Address</label>
                                            <input class="form-control" type="text" name="footer_address" id="footer_address" value="{{ $seo->footer_address }}">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 add_r">
                                            <label for="exampleInputEmail1" class="form-label"> Footer Phone</label>
                                            <input class="form-control" type="text" name="footer_phone" id="footer_phone" value="{{ $seo->footer_phone }}">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 add_r">
                                            <label for="exampleInputEmail1" class="form-label"> Footer Email</label>
                                            <input class="form-control" type="text" name="footer_email" id="footer_email" value="{{ $seo->footer_email }}">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 add_r">
                                            <label for="exampleInputEmail1" class="form-label"> Copyright Text</label>
                                            <input class="form-control" type="text" name="copyright" id="copyright" value="{{ $seo->copyright }}">
                                        </div>

                                    </div>


                                </div>



                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <label for="exmple-text-input" class="form-label">Footer Logo *</label>
                                        <div class="input-group img_n">
                                            <input type="file" class="form-control" id="footer_logo" name="footer_logo"
                                                data-bs-toggle="tooltip" title="Footer Logo" placeholder="Footer Logo">

                                        </div>

                                    </div>
                                    <div class="col-md-6 mt-3 " id="photo_r">
                                        <label for="exampleInputEmail1" class="form-label"> </label>
                                        <img id="showImage" style="width: 200px; height:80px;"
                                            src="{{ (!empty($seo->footer_logo)) ? url($seo->footer_logo) : url('upload/no_image.jpg') }}"
                                            alt="slide">

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6 mb-3">

                                        <div class="mb-3 add">
                                            <label for="exampleInputEmail1" class="form-label">Change favicon</label>
                                        <input class="form-control" name="favicon" type="file" id="favicon" value="{{ $seo->favicon }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">  </label>
                                        <img id="showFavicon" style="width: 100px; height:100px;"  class="form-control" src="{{ (!empty($seo->favicon)) ? url($seo->favicon) : url('upload/no_image.jpg') }}" alt="favicon">
                                    </div>


                                </div>

                                <button type="button" id="update_profile_btn" class="btn btn-sm btn-info">Update Advance
                                    Setting</button>

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

                    $('#favicon').change(function(e){
                            var reader = new FileReader();
                            reader.onload = function(e){
                                $('#showFavicon').attr('src',e.target.result);
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
                                    let favicon = document.getElementById('favicon').files;
                                    let top_bar_phone = $('#top_bar_phone').val();
                                    let top_bar_email = $('#top_bar_email').val();
                                    let footer_address = $('#footer_address').val();
                                    let footer_phone = $('#footer_phone').val();
                                    let footer_email = $('#footer_email').val();
                                    let copyright = $('#copyright').val();

                                    let formData= new FormData();
                                    formData.append('meta_title',meta_title);
                                    formData.append('meta_keyword',meta_keyword);
                                    formData.append('meta_description',meta_description);
                                    formData.append('top_bar_phone',top_bar_phone);
                                    formData.append('top_bar_email',top_bar_email);
                                    formData.append('footer_address',footer_address);
                                    formData.append('footer_phone',footer_phone);
                                    formData.append('footer_email',footer_email);
                                    formData.append('copyright',copyright);
                                    formData.append('facebook',facebook);
                                    formData.append('twitter',twitter);
                                    formData.append('google',google);
                                    formData.append('linkedin',linkedin);
                                    if(footer_logo[0]!=null){
                                        formData.append('footer_logo',footer_logo[0]);
                                    }
                                    if(favicon[0] !== null){
                                        formData.append('favicon',favicon[0]);
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
