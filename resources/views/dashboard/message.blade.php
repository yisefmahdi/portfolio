@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto">الرسائل</h4>
                    </div>
                </div>
            </div>
            <!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-md-12">
                        @if (session()->has('Add'))
                        <div class="alert alert-danger alert-dismissible fade show text-right" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>{{ session()->get('Add') }}</strong>
                        </div>
                        @endif
                        @if ($messages->count() == 0)
                        <div class="alert alert-danger" role="alert">
                            <strong>لا يوجد رسائل!</strong>
                        </div>
                        @else
                            @foreach ($messages as $message)
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="p-2">
                                                من : {{ $message->email }}
                                            </div>
                                            <div class="p-2">
                                                <form action="{{ route('dashboard.message.delete', $message->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <label class="text-right"> الرسالة : </label>
                                        <p>
                                            {{ $message->text }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
