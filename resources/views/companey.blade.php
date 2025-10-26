@extends('layouts.view-master')
@section('title', $caompanies->companey )
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/companies.css') }}">
{{-- swiper --}}
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
@endsection
@section('content')
    <!-- main -->
    <main>
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <div class="d-flex justify-content-center">
                                <div class="p-2">
                                    <img src="{{ asset('images_car/'.$caompanies->logo) }}" height="110" alt="">
                                </div>
                            </div>
                            <h2 class="text-center">{{ $caompanies->companey }}</h2>
                        </div>
                        <div class="featured__controls">
                            {{-- <ul>
                                @foreach ($caompanies->category as $category)
                                <li data-filter=".{{ $category->categotie }}">{{ $category->categotie }}</li>
                                @endforeach
                                <li class="active" data-filter="*">كل سيارات من {{ $caompanies->companey }}</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                <!-- car adv -->
                @foreach ($category as $categori)
                    <div class="col-md-12 bg-white rounded">
                        <div class="d-flex justify-content-end mt-2">
                            <div class="car-adv p-2">
                                <b>  {{ $categori->categotie }}</b>
                            </div>
                        </div>
                        <div class="row">
                            @foreach (DB::table('cars')->where('categorie_id', $categori->id)->get() as $car)
                                    <div class="col-md-4">
                                        <div class="card mb-3"style="width: 22rem;">
                                            <a href="{{ route('view.car', $car->id) }}">
                                                <img class="card-img-top" height="220" src="{{ asset('images_car/'.DB::table('images')->where('car_id', $car->id)->pluck('image')->first()) }}" alt="Card image cap">
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
                                                            <p class="m-0">
                                                            </p>
                                                            <i class="fa fa-map-marker mt-1 ml-1" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex justify-content-end text-right">
                                                            <div class="mt-1">
                                                                <h6>
                                                                    {{ DB::table('module__cars')->where('id', $car->module_cars_id)->pluck('name_car')->first() }}
                                                                </h6>
                                                                <div class="d-flex justify-content-end text-right">
                                                                    <span class="h5-orange" > دينار </span>
                                                                    <b class="h5-orange"> {{ $car->price }} </b>
                                                                </div>
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
                        </div>
                    </div>
                @endforeach



                <!-- adv -->
                <div class="col-md-12 mt-5">
                    <div class="adv w-100">
                        <!-- content adv -->
                    </div>
                </div>


                </div>
            </div>
        </section>
    </main>
    <!-- // main -->
@endsection
@section('js')
<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('asset/js/js/mixitup.min.js') }}"></script>
<script src="{{ asset('asset/js/js/main.js') }}"></script>
<script>

</script>
@endsection
