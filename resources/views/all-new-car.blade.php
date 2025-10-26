@extends('layouts.view-master')
@section('title', 'كل السيارات الجديدة')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/view_all_cars.css') }}">
{{-- swiper --}}
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
@livewireStyles
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h5 class="text-center">التجار والمعارض</h5>
                    <div class="d-flex justify-content-end mb-5 p-1">
                        <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    @foreach ($companies as $company)
                                        <div class="card swiper-slide">
                                            <a href="{{ route('view.companie',$company->id ) }}">
                                                <div class="image-content">
                                                    <span class="overlay"></span>
                                                    <div class="card-image">
                                                        <img src="{{ asset('images_car/'.$company->logo) }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <h2 class="name text-info"><b>{{ $company->companey }}</b></h2>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-pagination"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class="text-center mb-4"><b>السيارات الجديدة باسعار الوكلاء </b></h4>
                    <div class="d-flex justify-content-center">
                        <div>
                            <div class="row">
                                @if ($cars ->count() == 0)
                                <div class="w-75 text-right">
                                    <div class="alert alert-danger float-right" role="alert">
                                        <p class="txet-right"> لا يوجد اي سيارات جديدة</p>
                                    </div>
                                </div>
                                @else
                                    @foreach ($cars as $car)
                                        <div class="col-md-4">
                                            <div class="card m-2" style="width: 22rem">
                                                <a href="{{ route('view.car', $car->id) }}">
                                                    <img class="card-img-top"  height="220" src="{{ asset('images_car/'.DB::table('images')->where('car_id', $car->id)->pluck('image')->first()) }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between te-light">
                                                            <div>
                                                            <?php
                                                                $startDate = Carbon\Carbon::parse($car->created_at);
                                                                $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                                                            ?>
                                                            {{ $date }}
                                                            </div>
                                                            <div class="d-flex">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex justify-content-end text-right">
                                                                <div class="mt-1">
                                                                    <h6>{{ $car->module_cars->company->companey }} {{ $car->module_cars->name_car }}</h6>
                                                                    <span class="h5-orange">دينار</span>
                                                                    <b class="h5-orange">{{ $car->price}}</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-2">
                                                            <div class="btn bg-lights mr-2 text-info sm-light">{{ $car->engine_capacity }}cc</div>
                                                            <div class="btn bg-lights mr-2 text-info sm-light">{{ $car->motion_vector }}</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                      </div>
                </div>

                <!-- adv -->
                <div class="col-md-12 mt-3">
                    <div class="adv w-100">
                        <!-- content adv -->
                    </div>
                </div>

            </div>
        </div>
    </main>


@endsection
@section('js')
@livewireScripts
<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/view_all_cars.js') }}"></script>
@endsection
