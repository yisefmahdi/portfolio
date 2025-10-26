@extends('layouts.view-master')
@section('title', 'سيارة '. $car->category->categotie )
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/view_car_adv.css') }}">
{{-- swiper --}}
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
@livewireStyles()
@endsection
@section('content')
@livewire('view-car-live', ['key' => $car])
@endsection
@section('js')
<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/viewcar.js') }}"></script>
<script src="{{ asset('asset/js/newcarjs.js') }}"></script>
<script>
    function myFunction() {
    var copyText = document.getElementById("myInput");

    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    navigator.clipboard.writeText(copyText.value);

    alert("تم نسخ الرابط: " + copyText.value);
  }
</script>
@livewireScripts()
@endsection
