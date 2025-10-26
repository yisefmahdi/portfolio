@extends('layouts.master')
@section('title', 'اضافة سيارة جديده')
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
                    <h4 class="content-title mb-0 my-auto">سيارات جديدة</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة سيارة</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
                @livewire('new-car-live')
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@livewireScripts
@endsection
