<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front-end/css/Sign-up-in.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('front-end/css/app.css') }}"> --}}

    <title>{{ config('app.name', 'Quiz') . ' - Sign In' }}</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <!-- <form action="#">
                <h1>Tạo tài khoản</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <span>hoặc sử dụng email của bạn để đăng ký</span>
                <input type="text" placeholder="Tên" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Mật khẩu" />
                <button>Đăng ký</button>
            </form> -->
        </div>

        <div class="form-container sign-in-container">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />


            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Đăng nhập</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <span>hoặc sử dụng tài khoản của bạn</span>
                <!-- <input type="email" placeholder="Email" /> -->
                <!-- Email Address -->
                <!-- <div> -->
                <!-- <x-label for="email" :value="__('Email')" /> -->

                <x-input id="email" placeholder="Enter Email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autofocus />
                <!-- </div> -->

                <!-- <input type="password" placeholder="Mật khẩu" /> -->
                <!-- Password -->
                <!-- <div class="mt-4"> -->
                <!-- <x-label for="password" :value="__('Password')" /> -->

                <x-input placeholder="Enter Password" id="password" class="block mt-1 w-full" type="password"
                    name="password" required autocomplete="current-password" />
                <!-- </div> -->
                <!-- <a href="#">Quên mật khẩu?</a> -->
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                @endif
                <!-- <button>Đăng nhập</button> -->
                <x-button class="ml-3">
                    {{ __('Đăng nhập') }}
                </x-button>


            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng trở lại!</h1>
                    <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn.</p>
                    <button class="ghost" id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào bạn!</h1>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button class="ghost" id="signUp">Đăng ký</button>
                    <a class="ml-3 " href="{{ '/' }}"
                        style="margin-top: 40%; color:white; text-decoration: underline">
                        {{ __('Trở về trang chủ') }}
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4 alert alert-danger" role="alert" style="position:absolute; bottom:0px"
        :errors="$errors" />

</body>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    // signUpButton.addEventListener('click', () => {
    //     container.classList.add('right-panel-active');
    // });
    signUpButton.addEventListener('click', () => {
        window.location = 'http://127.0.0.1:8000/register';
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });
</script>

</html>
