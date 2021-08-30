<x-app-layout>
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="py-50px bg-white" style="min-height: 203px;">
        <div class="px-30px">
            <div class="d-flex flex-wrap">
                <div class="col-md-8 offset-md-2">

                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left md:hidden lg:block">
                                <img src="/img/login-banner.png" class="img-fluid" alt="Docucare Login">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right border p-25px">
                                <div class="mb-20px">
                                    <h3>Вход в личный кабинет</h3>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <x-label for="email" :value="__('Email')" />
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                                    </div>
                                    <div class="mt-4 mb-20px">
                                        <x-label for="password" :value="__('Password')" />

                                        <x-input id="password" class="block mt-1 w-full"
                                                 type="password"
                                                 name="password"
                                                 placeholder="Пароль"
                                                 required autocomplete="current-password" />
                                    </div>
                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                                        </label>
                                    </div>
{{--                                        <div class="text-right">--}}
{{--                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>--}}
{{--                                        </div>--}}
                                    <x-button class="py-3 px-1 d-block w-full text-18px font-medium text-center" type="submit">Войти</x-button>
{{--                                        <div class="login-or">--}}
{{--                                            <span class="or-line"></span>--}}
{{--                                            <span class="span-or">or</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="row form-row social-login">--}}
{{--                                            <div class="col-6">--}}
{{--                                                <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-6">--}}
{{--                                                <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>--}}
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



        <form method="POST" action="{{ route('login') }}">

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
</x-app-layout>
