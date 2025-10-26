@extends('layouts.view-master')
@section('title', 'انشاء حساب')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/register.css') }}">
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
                                        <div class="login-a"><a href="{{ route('register') }}" class="text-dark"><b>انشاء حساب</b></a></div>
                                        <div><a href="{{ route('login') }}" class="text-dark"><b>تسجيل دخول</b></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div class="login-card">
                                        <b class="text-b"> انشاء حساب جديد تقدر تبيع سيارتك من خلاله وتستفيد بكل خدماتنا </b>
                                        @foreach ($errors->all() as $message)
                                            <div class="alert alert-danger text-right" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                        <div class="form mt-2 text-right">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput"> الاسم  </label>
                                                    <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control font text-right mt-1" placeholder="ادخل الاسم ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput">رقم الهاتف للتواصل</label>
                                                    <input type="number" name="phone" :value="old('phone')" autocomplete="phone" class="form-control font text-right mt-1" required placeholder="ادخل رقم الهاتف">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput">البريد الالكتروني</label>
                                                    <input type="email"  name="email" :value="old('email')" required autocomplete="username" class="form-control font text-right mt-1" placeholder="ادخل البريد الالكتروني">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput2">كلمة المرور</label>
                                                    <input type="password" name="password" required autocomplete="new-password"  class="form-control font text-right mt-1" placeholder="ادخل كلمة المرور">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput2">تاكيد كلمة المرور</label>
                                                    <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control font text-right mt-1" placeholder="تاكيد كلمة المرور">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-orange w-100 mt-2">
                                                        {{ __('نشاء حسابك') }}
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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
