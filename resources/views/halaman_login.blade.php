<!DOCTYPE html>
<html class="h-100" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Fast Clean Laundry</title>
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{ asset('icons/logoputih.png') }}">
        <link
            href="{{ asset('plugins/sweetalert/css/sweetalert.css') }}"
            rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="h-100 bg-white ">
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewbox="25 25 50 50">
                    <circle
                        class="path"
                        cx="50"
                        cy="50"
                        r="20"
                        fill="none"
                        stroke-width="3"
                        stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        @if($penggunas->count() == 0)
        <div class="login-form-bg align-items-center justify-content-center  h-100">
            <div class="container h-100">
                <div class="row  h-100">
                    <div class="col-lg-6">
                        <div class="form-input-content">
                            <div class="card border-0 login-form mb-0">
                                <div class="card-body pt-5">
                                    <div class="text-center">
                                        <h1>OWNER REGISTRATION</h1>
                                        <p>Silahkan isi data berikut!!</p>
                                    </div>
                                    <form
                                        method="POST"
                                        action="{{ url('/registrasi_awal') }}"
                                        class="mt-5 "
                                        name="form_register"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama"/>
                                            </div>
                                            <div class="error-message" id="error-nama"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input
                                                    type="file"
                                                    class="custom-file-input avatar-input"
                                                    name="avatar"
                                                    id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Upload Foto</label >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="username" class="form-control" placeholder="Username"/>
                                            </div>
                                            <div class="error-message" id="error-username"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                                </div>
                                                <input
                                                    type="password"
                                                    name="password"
                                                    class="form-control"
                                                    placeholder="Create a Password"/>
                                            </div>
                                            <div class="error-message" id="error-password"></div>
                                        </div>

                                        <button class="btn login-form__btn submit w-100">
                                            Register
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 img-login-content">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/registerimage.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                @else
                <div class="login-form-bg h-100">
                    <div class="container h-100">
                        <div class="row justify-content-center h-100">
                            <div class="col-lg-6">
                                <div class="form-input-content">
                                    <div class="card login-form mb-0">
                                        <div class="card-body pt-5">
                                            <div class="text-center">
                                                <h1>LOGIN</h1>
                                                <p>Selamat Datang di Fast CLean Laundry</p>
                                                @if($message = Session::get('gagal_login'))
                                                <div
                                                    class="alert alert-danger alert-dismissible fade show"
                                                    style="margin-top: 15px; margin-bottom: -20px;">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}</div>
                                                @endif
                                            </div>
                                            <form
                                                method="POST"
                                                action="{{ url('/login_verifikasi') }}"
                                                class="mt-5 mb-5 login-input"
                                                name="form_login">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="input-group ">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                                                    </div>
                                                    <div class="error-message" id="error-username"></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-lock"></i>
                                                            </span>
                                                        </div>
                                                        <input
                                                            type="password"
                                                            name="password"
                                                            class="form-control"
                                                            placeholder="Password"/>
                                                    </div>
                                                    <div class="error-message" id="error-password"></div>
                                                </div>
                                                <button class="btn login-form__btn submit w-100">Masuk</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 img-login-content">
                                <div class="img-wrapper">
                                    <img src="{{ asset('images/loginimg.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fot text-center mt-5 mb-5">
                    <div class="copyright">
                        <p>Copyright &copy; Designed & Developed by
                            <a href="https://tiancode.me">FastClean Laundry</a>
                            <span id="currentyear"></span></p>
                    </div>
                    @endif
                    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
                    <script src="{{ asset('js/custom.min.js') }}"></script>
                    <script src="{{ asset('js/settings.js') }}"></script>
                    <script src="{{ asset('js/gleek.js') }}"></script>
                    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
                    <script src="{{ asset('js/jquery.form-validator.min.js') }}"></script>
                    <script src="{{ asset('plugins/sweetalert/js/sweetalert.min.js') }}"></script>
                    <script type="text/javascript">

                        var currentYear = (new Date).getFullYear();
                        $(document).ready(function () {
                            $("#currentyear").text((new Date).getFullYear());
                        });
                        $(document).ready(function () {
                            $(document).on('focus', ':input', function () {
                                $(this).attr('autocomplete', 'off');
                            });
                        });

                        $(function () {
                            $("form[name='form_register']").validate({
                                rules: {
                                    nama: "required",
                                    username: {
                                        required: true,
                                        minlength: 5
                                    },
                                    password: {
                                        required: true,
                                        minlength: 8
                                    }
                                },
                                messages: {
                                    nama: {
                                        required: "<span style='color: red;'>Nama tidak boleh kosong</span>"
                                    },
                                    username: {
                                        required: "<span style='color: red;'>Username tidak boleh kosong</span>",
                                        minlength: "<span style='color: red;'>Username minimal 5 karakter</span>"
                                    },
                                    password: {
                                        required: "<span style='color: red;'>Password tidak boleh kosong</span>",
                                        minlength: "<span style='color: red;'>Password minimal 8 karakter</span>"
                                    }
                                },
                                errorPlacement: function (error, element) {
                                    var id = element.attr("name");
                                    $("#error-" + id).html(error);
                                },
                                submitHandler: function (form) {
                                    form.submit();
                                }
                            });
                        });

                        $(function () {
                            $("form[name='form_login']").validate({
                                rules: {
                                    username: {
                                        required: true,
                                        minlength: 5
                                    },
                                    password: {
                                        required: true,
                                        minlength: 8
                                    }
                                },
                                messages: {
                                    username: "<span style='color: red;'>Username tidak boleh kosong</span>",
                                    password: "<span style='color: red;'>Password tidak boleh kosong</span>"
                                },
                                errorPlacement: function (error, element) {
                                    var id = element.attr("name");
                                    $("#error-" + id).html(error);
                                },
                                submitHandler: function (form) {
                                    form.submit();
                                }
                            });
                        });

                        $('.avatar-input').change(function () {
                            $(this)
                                .next('label')
                                .text($(this).val());
                        });

                        @if($message = Session::get('tersimpan'))
                        swal("Berhasil!", "{{ $message }}", "success")
                        @endif
                    </script>
                </body>
            </html>