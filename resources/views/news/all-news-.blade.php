@extends('layouts.view-master')
@section('title', 'كل الخبار')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/news.css') }}">
{{-- swiper --}}
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
@livewireStyles
@endsection
@section('content')
@livewire('news-viwe')
@endsection
@section('js')
@livewireScripts
<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/header.js') }}"></script>
<script src="{{ asset('asset/js/footer.js') }}"></script>
<script src="{{ asset('asset/js/new.js') }}"></script>
<script src="{{ asset('asset/js/viewnews.js') }}"></script>
@endsection
