<!-----------User Profile Change/update Code for Dashboard----------->
    <script>

        @if(Auth::check())
            let userId = {{ Auth::user()->id }};
        @endif
        $(document).ready(function() {

            $('#update_user_btn').on('click', function(e) {
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


                axios.post("{{ url('/update/user/data/') }}/" + user_id, formData)
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
<!-----------User Profile Change/update Code for Dashboard----------->
