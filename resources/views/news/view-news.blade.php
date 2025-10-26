@extends('layouts.view-master')
@section('title', ' خبر '.$view_news->title)
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/viewnews.css') }}">
<!-- swiper -->
<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}">
@endsection
@section('content')
    <!-- main -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="d-flex justify-content-end mb-2">
                        <div>
                            <h4><b>الخبر </b></h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-right">
                            <h4><b>
                                {{ $view_news->title }}
                            </b></h4>
                            <span class="te-light">تم نشر :
                            <?php
                                $startDate = Carbon\Carbon::parse($view_news->created_at);
                                $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                            ?>
                            {{ $date }}
                            </span>
                            <div class="mt-4">
                                <img src="{{ asset('images_car/'.$view_news->image) }}" class="rounded w-100 h-75" alt="">
                            </div>
                            <div class="mt-2 w-100">
                                <p class="p-1">
                                    {{ $view_news->text }}
                                </p>
                            </div>
                        </div>
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
                            <b>اخبار اخرى</b>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="slide-container-car swiper">
                            <div class="slide-content-new " >
                                <div class="swiper-wrapper mb-2 mt-2">
                                    @foreach ($news_rondome as $new)
                                        <div class="card card-sm  swiper-slide" >
                                            <img class="card-img-top" src="{{ asset('images_car/'.$new->image) }}" height="240"   alt="Card image cap">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-start te-light">
                                                    <div>
                                                    <?php
                                                        $startDate = Carbon\Carbon::parse($view_news->created_at);
                                                        $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                                                    ?>
                                                    {{ $date }}
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex justify-content-end text-right">
                                                        <div class="mt-1">
                                                            <a href="{{ route('view.new', $new->id) }}">
                                                            <div class="card-h6">
                                                                {{ $new->title }}
                                                            </div>                                                            </a>
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
<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/viewnews.js') }}"></script>
@endsection
