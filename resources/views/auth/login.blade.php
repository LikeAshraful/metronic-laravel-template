<!DOCTYPE html>
<html lang="en">
<head>
    <base href=""/>
    <title>Login | Metro Tonight</title>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body id="kt_body" class="app-blank app-blank">
<script>
    var defaultThemeMode = "dark";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
            if (localStorage.getItem("data-theme") !== null) {
                themeMode = localStorage.getItem("data-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
    }
</script>
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-15 order-2 order-lg-1">
            <div class="d-flex flex-center mb-5">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" class="max-h-75px" alt="">
                </a>
            </div>
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <div class="w-lg-400px p-10 sign_in_box">
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-11">
                            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                            <div class="text-gray-500 fw-semibold fs-6">Welcome to Metro Tonight</div>
                        </div>
                        <div class="fv-row mb-5">
                            <input type="text" placeholder="Email" name="email" class="form-control bg-transparent @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="fv-row mb-5">
                            <input type="password" placeholder="Password" name="password" required autocomplete="current-password" class="form-control bg-transparent @error('password') is-invalid @enderror"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-success">
                                <span class="indicator-label">Sign In</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>var hostUrl = "assets/";</script>
<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
</body>
</html>
