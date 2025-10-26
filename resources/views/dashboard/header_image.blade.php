@extends('layouts.master')
@section('title', 'صور الاعلانية')
@section('css')
@livewireStyles()
@endsection
@section('page-header')
            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto">صور الاعلانية</h4>
                    </div>
                </div>
            </div>
            <!-- breadcrumb -->
@endsection
@section('content')
				@livewire('header-image-live')
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@livewireScripts()
@endsection
