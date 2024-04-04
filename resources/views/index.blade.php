<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fast Clean Laundry</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet">

        <!-- Styles -->
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
    <body>
        <header class="home-header">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('icons/fastcleantext.png') }}" alt="">
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if (Route::has('login'))
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Login</a>
                        </li>
                        @endauth
                    </ul>
                    @endif
                </div>
            </div>
        </nav>
        </header>
       

        <div class="home-content mx-auto">
            <div class="container">
                <div class="row d-flex align-items-center ">
                    <div class="col-md-6 col-12 ">
                        <div class="text-content   ">
                            <h4>20% Discount for Member</h4>
                            <h1>LAUNDRY</h1>
                            <p>Effortless Laundry Solutions - Your laundry, our care</p>
                            @if (Route::has('login')) @auth
                            <div class="button">
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                            </div>
                            @else
                            <div class="button">
                                <a href="{{ url('login') }}" class="btn btn-primary">Start</a>
                            </div>
                            @endauth @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12 d-flex align-items-center  justify-content-center  ">
                        <div class="img-wrapper ">
                            <img src="{{ asset('images/mesin.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fot text-center mt-5">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by
                        <a href="https://tiancode.me">FastClean Laundry</a>
                        <span id="currentyear"></span></p>
                </div>
            </div>

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
        </script>
    </body>
</html>