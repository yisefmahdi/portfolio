@extends('layouts.view-master')
@section('title',  'البحث ')
@section('css')
<style>
    .dropbtn2 {
      cursor: pointer;
    }

    .dropdown3 {
      position: relative;
      display: inline-block;
      width: 100%;
      background: #fff
    }
    .dropdown-content3 {
      /* display: none; */
      position: absolute;
      top: -5px;
      right: -1px;
      width: 100%;
      max-height: 400px;
      box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.2);
      z-index: 1;
      text-align: right;
      border-radius: 5px;
      overflow-y: scroll;
    }

    .dropdown-content3 a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content3::-webkit-scrollbar {
        width: 10px;
        border-radius: 0 5px 5px 0;
    }

    .dropdown-content3::-webkit-scrollbar-thumb {
        border-radius: 10px;
    }


    .dropdown-content3 a:hover {background-color: #ddd;}

    .show {display:block;}
    </style>
@livewireStyles
@endsection
@section('content')
@livewire('search-live')
@endsection
@section('js')
@livewireScripts
@endsection
