<div>
        <!-- main -->
        <main>
            <div class="container">
                <div class="row">
                    <!-- info car -->
                    <div class="col-md-4 mb-3">
                        <div class="info-car p-3 text-right">
                            <div class="logo d-flex justify-content-end">
                                <div class="logo-title">
                                    <h5 class="text-b"><b>
                                        {{ $car->marca }}
                                    </b></h5>
                                    <p class="ml-3">{{ $car->company->companey }} {{ $car->category->categotie }}</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div>
                                    <p class="m-0 mb-1">
                                        {{ $car->state_car->states }}
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </p>
                                    <p>
                                    <?php
                                        $startDate = Carbon\Carbon::parse($car->created_at);
                                        $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                                    ?>
                                    {{ $date }}
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </p>
                                <p class="d-flex justify-content-end m-0 mb-1 text-danger text-right">
                                    <span class="txet-left"> اخرين </span>
                                    <span> {{ $car->category->count() }} </span>
                                    <span class="text-right">+</span>
                                </p>
                                </div>
                              </div>
                            <div class="d-flex justify-content-end">
                                <div class="text-right ">
                                    <p class="text-info">السعر</p>
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
                                <div class="p-2 favert W-100">التواصل : {{ $car->user_car->phone }}<i class="fa fa-phone-square text-success" aria-hidden="true"></i></div>
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
                                                @foreach ($car->image_car as $image_car)
                                                    <div class="swiper-slide" style="width: 100%;">
                                                        <img src="{{ asset('images_car/'.$image_car->image) }}" alt="Card image cap">
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
                                                        <div><b>{{ $car->year_made }}</b></div>
                                                        <div>
                                                            <span>سنة الصنع</span>
                                                            <span><i class="fa fa-gratipay text-primary" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <div><b>{{ $car->km }}</b></div>
                                                        <div>
                                                            <span>عدد الكيلومترات</span>
                                                            <span><img src="{{ asset('asset/img/acceleration.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <div><b>{{ $car->motion_vector }}</b></div>
                                                        <div>
                                                            <span>ناقل الحركة</span>
                                                            <span><img src="{{ asset('asset/img/engine-2.svg') }}" style="margin-bottom: -8px;" alt=""></span>
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
                                                            <span><img src="{{ asset('asset/img/engine-2.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <div><b>{{ $car->fuel_car->type }}</b></div>
                                                        <div>
                                                            <span>نوع الوقود</span>
                                                            <span><img src="{{ asset('asset/img/fuel-consumption.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <div><b>
                                                        {{ $car->Outer_Shape_car->outer_shape }}
                                                        <span class="mt-4"><img src="{{ asset($car->Outer_Shape_car->logo) }}" width="50" height="20" alt="1"></span>
                                                        </b></div>
                                                        <div>
                                                            <span>الشكل الخارجي</span>
                                                            <span><img src="{{ asset('asset/img/shape-hatchback-2.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 w-100 text-right">
                                    <label class="text-right">الوصف</label>
                                    <p class="text-right mt-1">
                                        <b>
                                            {{ $car->desc }}
                                        </b>
                                    </p>
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
                            <h6 class="p-2 pt-3 text-right  text-s"><b>فئات اخرى من {{ $car->category->categotie }} </b></h6>
                            <div>
                                <ul class="navbar-nav">
                                    @foreach ($car->category->model_car as $category)
                                    <li class="categories-li">
                                        <a href="{{ route('view_car', $category->id) }}">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2 d-flex mt-4">
                                                    <div class="mr-1">
                                                        <h5><b>دينار</b></h5>
                                                    </div>
                                                    <div class="">
                                                        <h5><b>{{ $category->price }}</b></h5>
                                                    </div>
                                                </div>
                                                <div class="p-2 d-flex ">
                                                    <div class="p-2 name-b text-right">
                                                        <h5 class="text-b"><b>
                                                            {{ $car->company->companey }} {{ $car->category->categotie }}
                                                        </b></h5>
                                                        <p class="text-s">سعة المحرك <span>{{ $category->engine_capacity }}</span></p>
                                                    </div>
                                                    <div class="categories-img">
                                                        <img src="{{ asset('images_car/'.DB::table('image_cars')->where('advertisement_id', $category->id)->pluck('image')->first()) }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
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
                                <b>سيارات  جديدة</b>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="slide-container-car swiper">
                                <div class="slide-content-car-adv">
                                    <div class="swiper-wrapper mt-2 mb-2" style="width: 22rem;">
                                        @if (DB::table('cars')->paginate(5)->count() == 0)
                                        <div class="d-flex justify-content-center">
                                            <div class="w-100 text-right">
                                                <div class="alert alert-danger " role="alert">
                                                    <p class="txet-right">لا يوجد اي سيارات</p>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                            @foreach (DB::table('cars')->paginate(5) as $adv)
                                                <div class="card swiper-slide " style="width: 22rem;">
                                                    <a href="{{ route('view.car', $adv->id) }}">
                                                        <img class="card-img-top" height="220" src="{{ asset('images_car/'.DB::table('images')->where('car_id', $adv->id)->pluck('image')->first()) }}" alt="Card image cap">
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
                                                                            @foreach (DB::table('module__cars')->where('id', $adv->module_cars_id)->pluck('name_car') as $name_car){{ $name_car }}@endforeach
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
                                            <div class="card swiper-slide " style="width: 22rem;">
                                                <img class="card-img-top" height="224"  src="{{ asset('asset/img/plus-arrow-square-outlined.svg') }}"  alt="Card image cap">
                                                <div class="card-body h-100">
                                                    <div class="text-center">
                                                        <p>هل تريد رأيت كل السيارات</p>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('view.allcar') }}">
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
            </div>
        </main>
        <!-- // main -->
</div>
