@extends('layouts.view-master')
@section('title', 'بيع سيارتك')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/createadv.css') }}">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
@livewireStyles
@endsection
@section('content')
@livewire('sale-car-live')
@endsection
@section('js')
@livewireScripts
@endsection
