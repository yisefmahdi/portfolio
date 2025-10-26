@extends('layouts.view-master')
@section('title', 'بحث  ')
@section('css')
{{-- swiper --}}
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/view_all_cars.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/search.css') }}">
@livewireStyles
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h4 class="text-right mb-4"><b>{{ $category->category_company->companey }} {{ $category->categotie }} في الجزائر  </b></h4>
                    <div class="row">
                        @if ($cars ->count() == 0)
                        <h4 class="text-center mb-4">لايوجد نتائج بحث</h4>
                        @else
                        @foreach ($cars as $car)
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
                                                    <h6>{{ $car->module_cars->company->companey }} {{ $car->category_cars->categotie }} {{ $car->module_cars->name_car }}</h6>
                                                    <div class="d-flex justify-content-end">
                                                        <div>
                                                            <span class="h5-orange"> دينار </span>
                                                        </div>
                                                        <div>
                                                            <b class="h5-orange">{{ $car->price}}</b>
                                                        </div>
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
                        @endforeach
                        @endif
                    </div>
                </div>

                <!-- adv -->
                <div class="col-md-12 mt-3">
                    <div class="adv w-100">
                        <!-- content adv -->
                    </div>
                </div>

                <!-- car adv -->
                <div class="col-md-12 bg-white rounded mt-4">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                            <div class="angle-cars">
                                <div class="angle-cars-left swiper-button-prev-cars">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div class="angle-cars-right swiper-button-next-cars">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="car-adv">
                            <b>سيارات  مستعملة</b>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="swiper-wrapper mt-2 mb-2" >
                                    @if (DB::table('advertisements')->where('stutas', 1)->paginate(5)->count() == 0)
                                    <div class="d-flex justify-content-center">
                                        <div class="w-100 text-right">
                                            <div class="alert alert-danger " role="alert">
                                                <p class="txet-right">لا يوجد اي اعلانات</p>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                        @foreach (DB::table('advertisements')->where('stutas', 1)->paginate(5) as $adv)
                                            <div class="card swiper-slide">
                                                <a href="{{ route('view_car', $adv->id) }}">
                                                    <img class="card-img-top" height="220" src="{{ asset('images_car/'.DB::table('image_cars')->where('advertisement_id', $adv->id)->pluck('image')->first()) }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between te-light">
                                                            <div>
                                                                <?php
                                                                    $startDate = Carbon\Carbon::parse($adv->created_at);
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
                                                                    <h6>
                                                                        @foreach (DB::table('companies')->where('id', $adv->company_id)->pluck('companey') as $companey){{ $companey }}@endforeach
                                                                        @foreach (DB::table('categories')->where('id', $adv->category_id)->pluck('categotie') as $categotie){{ $categotie }}@endforeach
                                                                    </h6>
                                                                    <div class="d-flex justify-content-end text-right">
                                                                        <span class="h5-orange" > دينار </span>
                                                                        <b class="h5-orange"> {{ $adv->price }} </b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-2">
                                                            <div class="btn bg-lights mr-2 text-info sm-light">{{ $adv->engine_capacity }}cc</div>
                                                            <div class="btn bg-lights mr-2 text-info sm-light">{{ $adv->motion_vector }}</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                        <div class="card swiper-slide ">
                                            <img class="card-img-top" height="224"  src="{{ asset('asset/img/plus-arrow-square-outlined.svg') }}"  alt="Card image cap">
                                            <div class="card-body h-100">
                                                <div class="text-center">
                                                    <p>هل تريد رأيت كل السيارات</p>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('view_all_car') }}">
                                                        <button  class="btn btn-success font pr-5 pl-5 pt-3 pb-3 mb-3 mt-2">عرض الكل</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
@livewireScripts
<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
<script>
    var swiper = new Swiper(".slide-content", {
    slidesPerView:4,
    spaceBetween: 20,
    slidesPergroup: 3,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    loopFillGroupWithBlank: true,
    pagination:{
        el: ".swiper-pagination",
        clickable:true,
    },
    navigation:{
        nextEl: ".swiper-button-next-cars",
        prevEl: ".swiper-button-prev-cars",
    },
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
    }
});
</script>
@endsection
