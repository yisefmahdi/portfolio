@extends('layouts.view-master')
@section('title', 'تسجيل دخول')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
@endsection
@section('content')
        <!-- main -->
        <main>
            <div class="container ">
                <div class="row d-flex justify-content-center align-content-center">
                    <div class="col-md-5 col-sm-12 login">
                        <div class="mt-4 mb-3">

                            <div class="card mt-1">
                                <div class="card-header bg-white">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex justify-content-between w-75">
                                            <div><a href="{{ route('register') }}" class="text-dark"><b>انشاء حساب</b></a></div>
                                            <div class="login-a"><a href="{{ route('login') }}" class="text-dark"><b>تسجيل دخول</b></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <div class="login-card">
                                            <b class="text-b">للدخول لحسابك ومتابعة اعلاناتك برجاء ادخال البيانات الاتية</b>
                                            @foreach ($errors->all() as $message)
                                                <div class="alert alert-danger text-right" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @endforeach
                                            <div class="form mt-2 text-right">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">البريد الالكتروني</label>
                                                        <input type="email"  name="email" :value="old('email')" required autofocus autocomplete="username" / class="form-control font text-right mt-1" placeholder="ادخل البريد الالكتروني">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">كلمة المرور</label>
                                                        <input type="password" name="password"  required autocomplete="current-password" / class="form-control font text-right mt-1" placeholder="ادخل كلمة المرور">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-orange w-100 mt-2">
                                                            {{ __('تسجيل دخول') }}
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- // main -->
@endsection

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
