@extends('layouts.view-master')
@section('title',  'سيارة ' .$car->module_cars->name_car)
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/viewcar.css') }}">
<!-- swiper -->
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
@endsection
@section('content')
    <!-- main -->
    <main>
        <div class="container">
            <div class="row">
                <!-- info car -->
                <div class="col-md-4 mb-3">
                    <div class="info-car p-3 text-right">
                        <div class="logo d-flex justify-content-end">
                            <div class="logo-title mr-2">
                                <h5 class="text-b"><b>
                                   {{ $car->companey->companey }} {{ $car->module_cars->name_car }}
                                </b></h5>
                                <p class="ml-3">{{ $car->motion_vector }}</p>
                            </div>
                            <div class="logo-img  ">
                                <img src="{{ asset('images_car/'.$car->companey->logo) }}"  alt="">
                            </div>

                        </div>
                        <p class="d-flex justify-content-end m-0 mb-1 text-danger text-right">
                            <span class="txet-left"> اخرين </span>
                            <span> {{ $car->category_cars->newcar->count() }} </span>
                            <span class="text-right">+</span>
                        </p>
                        <div class="d-flex justify-content-end">
                            <div class="text-right ">
                                <p class="text-info">سعر الوكيل</p>
                                <div class="d-flex text-b">
                                    <div class="mr-1">
                                        <h5><b>دينار</b></h5>
                                    </div>
                                    <div class="">
                                        <h5><b> {{ $car->price }}</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5">
                            <div class="p-2 favert"><a href="" class="text-dark">اضف للمفضلة</a> <i class="fa fa-heart" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>

                <!-- desc car -->
                <div class="col-md-8">
                    <div class="car">
                        <!-- images car -->
                        <div class="images-car">
                            <div class="d-flex justify-content-start">
                                <div class="slide-container-car swiper">
                                    <div class="slide-content-car">
                                        <div class="swiper-wrapper" style="width: 100%;">
                                            @foreach ($car->images_car as $image)
                                            <div class="swiper-slide" style="width: 100%;">
                                                <img src="{{ asset('images_car/'.$image->image) }}" alt="Card image cap">
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="logo_car">
                            <img src="https://www.contactcars.com/assets/images/navbar/navbar_logo.svg" alt="">
                        </div>
                        <div class="shera">
                            <input type="text" hidden value="{{ route('view_car',$car->id) }}" id="myInput">
                            <button onclick="myFunction()" class="btn btn-link text-white">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                شارك
                            </button>
                        </div>

                        <!-- desc-car -->
                        <div class="descs-car p-3 ">
                            <h6 class="text-right text-s"><b>مواصفات الفئه</b></h6>
                            <div class="d-flex-car justify-content-center mr-5 ml-2 mt-2">
                                <div class="desc-car-start">
                                    <div>
                                        <ul class="descs-ul">
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->horse_power }}</b></div>
                                                    <div>
                                                        <span> القوة الحصانية</span>
                                                        <span><img src="img/power.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->acceleration }}</b></div>
                                                    <div>
                                                        <span> التسارع من 0-100 (كم/ساعة)</span>
                                                        <span><img src="img/acceleration.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->motion_vector }}</b></div>
                                                    <div>
                                                        <span>ناقل الحركة</span>
                                                        <span><img src="img/engine-2.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->number_seats }}</b></div>
                                                    <div>
                                                        <span> عدد المقاعد</span>
                                                        <span><img src="img/seats-number.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->gather }}</b></div>
                                                    <div>
                                                        <span> تجميع</span>
                                                        <span><img src="img/combination.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->agent }}</b></div>
                                                    <div>
                                                        <span> الوكيل</span>
                                                        <span><img src="img/agent.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=" desc-car-end">
                                    <div>
                                        <ul class="descs-ul">
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->engine_capacity }}</b></div>
                                                    <div>
                                                        <span>سعة المحرك (سي سي)</span>
                                                        <span><img src="img/engine-2.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->torque }}</b></div>
                                                    <div>
                                                        <span>العزم ( نيوتن.متر/لفة.دقيقة)</span>
                                                        <span><img src="img/torque.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->average_consumption }}</b></div>
                                                    <div>
                                                        <span>متوسط استهلاك الوقود (لتر/100كم)</span>
                                                        <span><img src="img/fuel-consumption.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->Outer_Shape_car->outer_shape }}</b></div>
                                                    <div>
                                                        <span>الشكل الخارجي</span>
                                                        <span><img src="img/shape-hatchback-2.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->generation }}</b></div>
                                                    <div>
                                                        <span> نوع المحرك</span>
                                                        <span><img src="img/generation.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div><b>{{ $car->origin }}</b></div>
                                                    <div>
                                                        <span> منشأ</span>
                                                        <span><img src="img/country.svg" style="margin-bottom: -8px;" alt=""></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- adv -->
                <div class="col-md-12 mt-3 mb-3">
                    <div class="adv w-100">
                        <!-- content adv -->
                    </div>
                </div>

                <div class="col-md-12 d-flex justify-content-end">
                    <div class="col-md-8 categories">
                        <h6 class="p-2 pt-3 text-right  text-s"><b>فئات اخرى من {{ $car->companey->companey }} {{ $car->category_cars->categotie }} </b></h6>
                        <div>
                            <ul class="navbar-nav">
                                @foreach ($car->category_cars->newcar as $car)
                                <li class="categories-li">
                                    <div class="d-flex justify-content-between">

                                            <div class="p-2 d-flex mt-4">
                                                <div class="mr-1">
                                                    <h5><b>دينار</b></h5>
                                                </div>
                                                <div class="">
                                                    <h5><b> {{ $car->price }}</b></h5>
                                                </div>
                                            </div>
                                            <a href="{{ route('view.car', $car->id) }}">
                                            <div class="p-2 d-flex ">
                                                <div class="p-2 name-b text-right">
                                                    <h5 class="text-b"><b>
                                                        {{ $car->companey->companey }} {{ $car->module_cars->name_car }}
                                                    </b></h5>
                                                    <p class="text-s">سعة المحرك <span>{{ $car->engine_capacity }}</span></p>
                                                </div>
                                                <div class="categories-img">
                                                    <img src="{{ asset('images_car/'.DB::table('images')->where('car_id', $car->id)->pluck('image')->first()) }}" alt="">
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- adv -->
                <div class="col-md-12 mt-3 mb-3">
                    <div class="adv w-100">
                        <!-- content adv -->
                    </div>
                </div>
                <!-- car adv -->
                <div class="col-md-12 bg-white rounded mt-4">
                    <div class="d-flex justify-content-between mt-2">
                        <div class="p-2">
                            <div class="angle-car">
                                <div class="angle-car-left swiper-button-prev-adv">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div class="angle-car-right swiper-button-next-adv">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="swiper-button-pagination"></div>
                        </div>
                        <div class="car-adv p-2">
                            <b>سيارات مستعمله للبيع</b>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="slide-container-car swiper">
                            <div class="slide-content-car-adv">
                                <div class="swiper-wrapper mt-2 mb-2" style="width: 22rem;">
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
                                            <div class="card swiper-slide " style="width: 22rem;">
                                                <a href="{{ route('view_car', $adv->id) }}">
                                                    <img class="card-img-top" height="220" src="{{ asset('images_car/'.DB::table('image_cars')->where('advertisement_id', $adv->id)->pluck('image')->first()) }}" alt="Card image cap">
                                                    @if ($adv->km <= 100)
                                                        <img src="{{ asset('asset/img/52469.png') }}" class="card-img" alt="l">
                                                    @endif
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
                                                                <p class="m-0">
                                                                    @foreach (DB::table('states')->where('id', $adv->state_id)->pluck('states') as $states){{ $states }}@endforeach
                                                                </p>
                                                                <i class="fa fa-map-marker mt-1 ml-1" aria-hidden="true"></i>
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
                                                            <div class="btn bg-lights text-info sm-light">{{ $adv->km }} كم</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                        <div class="card swiper-slide " style="width: 22rem;">
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

    </main>
    <!-- // main -->
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
@endsection
