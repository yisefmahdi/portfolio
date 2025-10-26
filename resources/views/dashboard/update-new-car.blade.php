@extends('layouts.master')
@section('title', ' تعديل السيارة'.$update_car->module_cars->name_car)
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/new_car.css') }}">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
@livewireStyles
@endsection
@section('page-header')
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">سيارة تعديل {{ $update_car->module_cars->name_car }}</h4>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
                @livewire('update-new-car-live', ['key' => $update_car])
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@livewireScripts
@endsection
