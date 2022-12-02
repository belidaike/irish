<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="{{asset('home/css/loginFormStyle.css')}}">
        {{-- default css --}}
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="images/crown gold.svg" type="">
        <title>Irish Gowns</title>
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
        <!-- font awesome style -->
        <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/loginFormStyle.css')}}" rel="stylesheet" />
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />
        <!-- Google Font -->
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet"
        />
    </head>
    {{-- @include('home.header') --}}
    <body>
            {{-- <button><a href="{{url('/')}}"><h2>back</h2></a></button> --}}

        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>
           
                <x-jet-validation-errors />
            <div class="form">
                <img src="images/Designer.png" alt="" class="form__img">
                @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
                <form action="{{ route('login') }}" method="POST" class="form__content">
                    @csrf
                <a href="{{url('/')}}"> <span class="float-end close-button"> &times; </span></a>
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                        <i class='bx bx-envelope'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="email" class="form__label">Email</label>
                            <input type="email" name="email" class="form__input" :value="old('email')" required autocomplete="email">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="password" class="form__label">Password</label>
                            <input type="password" class="form__input" name="password" required autocomplete="current-password">
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="form__forgot" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                    <input type="submit" class="form__button mb-4" value="Login">
                    <p class="no-account">
                            Don't have an account?
                            <a href="{{ route('register') }}">Sign up</a>
                    </p>
                    
                    <!-- <div class="form__social">
                        <span class="form__social-text">Our login with</span>

                        <a href="#" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div> -->
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="home/js/loginFormApp.js"></script>
    </body>
</html>