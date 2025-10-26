@extends('layouts.view-master')
@section('title', 'سيارات')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">
{{-- swiper --}}
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
@livewireStyles
@endsection
@section('content')
    <!-- main -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_header">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($header_images as $index => $image)
                                    @if ($index == 1)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="active"></li>
                                    @else
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}"></li>
                                    @endif
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($header_images as $index => $image)
                                    @if ($index == 1)
                                        <div class="carousel-item active">
                                            <a href="{{ $image->link }}">
                                                <img class="d-block w-100 " src="{{ asset('images_car/'.$image->header_image) }}" alt="First slide" style="width: 100%;">
                                            </a>
                                            <h2 class="active_h2">{{ $image->desc }}</h2>
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <a href="{{ $image->link }}">
                                                <img class="d-block w-100 " src="{{ asset('images_car/'.$image->header_image) }}" alt="First slide"style="width: 100%;">
                                            </a>
                                        <h2 class="active_h2">{{ $image->desc }}</h2>
                                    </div>
                                    @endif
                                @endforeach
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon ml-5" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                            <div class="main_search">
                                @livewire('box-search')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @if (session()->has('Add'))
                    <div class="alert alert-success alert-dismissible fade show text-right" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session()->get('Add') }}</strong>
                    </div>
                </div>
                @endif
                <!-- adv -->
                <div class="col-md-12 mb-2 mt-3">
                    <div class="adv w-100">
                        <!-- content adv -->
                    </div>
                </div>

                <div class="col-md-12  mb-3 mt-3">
                    <div class="d-flex justify-content-center " style="margin-top: -30px;">
                        <div class="main_header-ms h-100 w-100">
                            <div class="main_search-sm mt-3">
                                <div class=" w-100">
                                    @livewire('box-search-sm')
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- companeis -->
                 <div class="col-md-12 mt-5 ">
                    <h5 class="text-center">التجار والمعارض</h5>
                    <div class="d-flex justify-content-center mb-5 p-1">
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

                <!-- car adv -->
                <div class="col-md-12 bg-white rounded">
                    <div class="d-flex justify-content-between mt-2">
                        <div class="p-2">
                            <div class="angle-car">
                                <div class="angle-car-left swiper-button-prev-car">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div class="angle-car-right swiper-button-next-car">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="swiper-button-pagination"></div>
                        </div>
                        <div class="car-adv p-2">
                            <b>سيارات مستعمله للبيع</b>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="slide-container-car swiper">
                            <div class="slide-content-car">
                                @if (DB::table('advertisements')->count() == 0)
                                    <div class="d-flex justify-content-center">
                                        <div class="w-100 text-right">
                                            <div class="alert alert-danger " role="alert">
                                                <p class="txet-right">لا يوجد اي اعلانات</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="swiper-wrapper" style="width: 22rem;">
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
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- adv -->
                <div class="col-md-12 mt-5">
                    <div class="adv w-100">
                        <!-- content adv -->
                    </div>
                </div>

                <!-- news -->
                <div class="col-md-12 mb-5 rounded mt-5">
                    <div class="d-flex justify-content-between mt-2">
                        <div class="p-2">
                            <div class="angle-car">
                                <div class="angle-car-left swiper-button-prev-new">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div class="angle-car-right swiper-button-next-new">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="swiper-button-pagination"></div>
                        </div>
                        <div class="car-adv p-2">
                            <b>اخبار السيارت</b>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="slide-container-car swiper">
                            <div class="slide-content-new">
                                <div class="swiper-wrapper">
                                    @foreach ($news as $new)
                                        <div class="card card-sm  swiper-slide" >
                                            <img class="card-img-top" src="{{ asset('images_car/'.$new->image) }}" height="240"  alt="Card image cap">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-start te-light">
                                                    <div class="">
                                                    <?php
                                                        $startDate = Carbon\Carbon::parse($new->created_at);
                                                        $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                                                    ?>
                                                    {{ $date }}
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex justify-content-end text-right">
                                                        <div class="mt-1">
                                                            <a href="{{ route('view.new', $new->id) }}">
                                                                <div class="">
                                                                    {{ $new->title }}
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-white text-danger text-right">
                                                <a href="{{ route('view.news') }}" class="text-danger">
                                                    <b>عرض كل الاخبار</b>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
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
@livewireScripts
<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/index.js') }}"></script>
<script>
    function myFunction5() {
      document.getElementById("myDropdown5").classList.toggle("show");
    }
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn5')) {
        var dropdowns = document.getElementsByClassName("dropdown-content5");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
</script>
<script>
    function myFunction4() {
      document.getElementById("myDropdown4").classList.toggle("show");
    }
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn4')) {
        var dropdowns = document.getElementsByClassName("dropdown-content4");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
</script>
@endsection
