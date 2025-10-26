@extends('layouts.master')
@section('title', 'الاخبار')
@section('css')
@livewireStyles
@endsection
@section('page-header')
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">الاخبار</h4>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
                @livewire('news-live')
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@livewireScripts
@endsection
