@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.sidebar')

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
        <div class="col-lg-10 offset-lg-2">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                            <h1>White Collar</h1>
                            </a>
                        </div>
                         
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                
                        <div class="login-form">
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                                <div class="form-group">
                                <x-label class="text-lg" for="email" :value="__('Email')" />
                                <x-input id="email" class="au-input au-input--full" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus />
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue2 m-b-20" type="submit">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</body>
