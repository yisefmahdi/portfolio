@extends('layouts.view-master')
@section('title', 'كل سيارات')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/view_all_cars.css') }}">
{{-- swiper --}}
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
@livewireStyles
@endsection
@section('content')
@livewire('view-all-cars-live')
@endsection
@section('js')
@livewireScripts
<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/view_all_cars.js') }}"></script>
@endsection
