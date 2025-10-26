<div>
        <!-- main -->
        <main>
            <div class="container">
                <div class="row">
                    <!-- search -->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <input type="text" wire:model='text_search' wire:click='search' wire:change='search' class="form-control font text-right" id="formGroupExampleInput" placeholder="بحث">
                        </div>
                        <div class="text-success mr-3 text-right" wire:loading wire:target='search'>
                            <span class="text-right float-right">
                            من فضلك انتظر قليلا
                            <i class="fa fa-spinner fa-spin"></i></span>
                        </div>
                        <div class="text-success mr-3 text-right" wire:loading wire:target='text_search'>
                            <span class="text-right float-right">
                                يتم البحث الان
                            <i class="fa fa-spinner fa-spin"></i></span>
                        </div>
                    </div>
                    @if ($ch_search == true)
                    <div class="col-md-12 mt-2 ">
                        <div class="d-flex justify-content-end">
                            <div>
                                <h4><b>نتائج البحث</b></h4>
                            </div>
                        </div>
                        <div class="col-md-12  mt-3">
                            <div class="row">
                                @foreach ($search_news as $new)
                                <div class="col-md-4 card_h">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images_car/'.$new->image) }}" height="240" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between te-light">
                                                <div class="">
                                                <?php
                                                    $startDate = Carbon\Carbon::parse($new->created_at);
                                                    $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                                                ?>
                                                {{ $date }}
                                                </div>
                                            </div>
                                            <div>
                                                <div class=" text-right">
                                                    <div class="mt-1">
                                                        <a href="{{ route('view.new', $new->id) }}">
                                                             <div class="card-h6">
                                                                {{ $new->title }}
                                                             </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @else
                    <!-- new -->
                    <div class="col-md-12 mt-2 ">
                        <div class="d-flex justify-content-end">
                            <div>
                                <h4><b>أضيفت مؤخراً</b></h4>
                            </div>
                        </div>
                        <div class="col-md-12  mt-3">
                            <div class="row">
                                @foreach (DB::table('news')->OrderBY('id', 'DESC')->paginate(3) as $new)
                                <div class="col-md-4 card_h">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images_car/'.$new->image) }}" height="240" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between te-light">
                                                <div class="">
                                                <?php
                                                    $startDate = Carbon\Carbon::parse($new->created_at);
                                                    $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                                                ?>
                                                {{ $date }}
                                                </div>
                                            </div>
                                            <div>
                                                <div class=" text-right">
                                                    <div class="mt-1">
                                                        <a href="{{ route('view.new', $new->id) }}">
                                                             <div class="card-h6">
                                                                {{ $new->title }}
                                                             </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- news -->
                    <div class="col-md-12 mb-5 rounded mt-5">
                        <div class="d-flex justify-content-between mt-2">
                            <div class="p-2">
                                <div class="swiper-button-pagination"></div>
                            </div>
                            <div class="car-adv p-2">
                                <b>كل الاخبار </b>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="slide-container-car news swiper " style="height: 267px;">
                                <div class="slide-content-news">
                                    <div class="swiper-wrapper mt-2 mb-1">
                                        @foreach ($news as $new)
                                            <div class="card card-sm  swiper-slide" >
                                                <img class="card-img-top" src="{{ asset('images_car/'.$new->image) }}" style="height: 160px;" alt="Card image cap">
                                                <div class="card-body p-3" style="margin-top: -5px;">
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
                                                            <div class="mt-3">
                                                                <a href="{{ route('view.new', $new->id) }}" class="mt-2 mb-2">
                                                                    <div class="card-h6">
                                                                      {{ $new->title }}
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start ">
                            <div class="slide-container-car news swiper" style="height: 267px;">
                                <div class="slide-content-news">
                                    <div class="swiper-wrapper  mt-1 mb-1">
                                        @foreach ($news_rondome as $new)
                                            <div class="card card-sm  swiper-slide" >
                                                <img class="card-img-top" src="{{ asset('images_car/'.$new->image) }}" style="height: 160px;" alt="Card image cap">
                                                <div class="card-body p-3" style="margin-top: -5px;">
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
                                                            <div class="mt-3">
                                                                <a href="{{ route('view.new', $new->id) }}" class="mt-2 mb-2">
                                                                    <div class="card-h6">
                                                                    {{ $new->title }}
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-button-next-new"></div>
                        <div class="swiper-button-prev swiper-button-prev-new"></div>
                        <div class="swiper-button-pagination"></div>
                    </div>
                    <!-- car adv -->
                    <div class="col-md-12 bg-white rounded mt-4">
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
                        <div class="d-flex justify-content-start">
                            <div class="slide-container-car swiper">
                                <div class="slide-content-car">
                                    <div class="swiper-wrapper" style="width: 22rem;">
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
                    @endif
                    <!-- adv -->
                    <div class="col-md-12 mt-5">
                        <div class="adv w-100">
                            <!-- content adv -->
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!-- // main -->
</div>
