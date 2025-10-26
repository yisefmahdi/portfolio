@extends('layouts.master')
@section('title', 'طلبات الاعلانات')
@section('css')
<style>
    .descs-ul {
    list-style: none;
    width: 100%;
}

.descs-ul li {
    width: 330px;
    color: #10255f;
    border-bottom: 1px var(--box-shadow) solid;
    padding: 5px;
}

.descs-ul li:hover {
    background: var(--box-shadow);
}
@media screen and (max-width: 599px) {
    .descs-ul li {
        width: 100%;
        color: #10255f;
        border-bottom: 1px var(--box-shadow) solid;
        padding: 2px;
        font-size: 8px;
    }
}
</style>
@livewireStyles()
@endsection
@section('page-header')
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">الاعلانات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ طلبات الاعلانات</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
@endsection
@section('content')
                @livewire('order-live')
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@livewireScripts()
@endsection
