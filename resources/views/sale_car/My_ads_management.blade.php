@extends('layouts.view-master')
@section('title', 'اعلاناتي')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/createadv.css') }}">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="{{ asset('asset/css/mangemintadv.css') }}">
@livewireStyles
@endsection
@section('content')
@livewire('my-ads-management-live')
@endsection
@section('js')
@livewireScripts
@endsection
