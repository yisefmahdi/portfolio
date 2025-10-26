<div>
    <!-- main -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 mt-3">
                    <div class="d-flex justify-content-between">
                        <div class="p-2"></div>
                        <div class="p-2">
                            <h5><b>اسعار السيارات المستعملة في الجزائر</b></h5>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <!-- content -->
                        <div class="col-md-9 col-sm-12 ">
                            <!-- adv -->
                            <div class="col-md-12 mb-2 mt-3">
                                <div class="adv w-100">
                                    <!-- content adv -->
                                </div>
                            </div>
                            <div class="row">
                                <!-- content csrs adv -->
                                @if ($check_search == true)
                                @if ($search_cars->count() == 0)
                                    <div class="w-75 text-right">
                                        <div class="alert alert-danger float-right" role="alert">
                                            <p class="txet-right"> لا يوجد اي نتائج للمواصفات التي ادخلتها </p>
                                        </div>
                                    </div>
                                @else
                                    @foreach ($search_cars as $car)
                                        <div class="card m-2" style="width: 25rem;">
                                            <a href="{{ route('view_car', $car->id) }}">
                                                <img class="card-img-top"  height="220" src="{{ asset('images_car/'.DB::table('image_cars')->where('advertisement_id', $car->id)->pluck('image')->first()) }}" alt="Card image cap">
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
                                                            <p class="m-0">{{ $car->state_car->states }} </p>
                                                            <i class="fa fa-map-marker mt-1 ml-1" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex justify-content-end text-right">
                                                            <div class="mt-1">
                                                                <h6>{{ $car->company->companey }} {{ $car->category->categotie }}</h6>
                                                                <span class="h5-orange">دينار</span>
                                                                <b class="h5-orange">{{ $car->price}}</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end mt-2">
                                                        <div class="btn bg-lights mr-2 text-info sm-light">{{ $car->engine_capacity }}cc</div>
                                                        <div class="btn bg-lights mr-2 text-info sm-light">{{ $car->motion_vector }}</div>
                                                        <div class="btn bg-lights text-info sm-light">{{ $car->km }} كم</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                                @else
                                <div class="col-md-12 ">
                                    <h5 class="text-right">التجار والمعارض</h5>
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
                                    @if ($cars ->count() == 0)
                                        <div class="w-75 text-right">
                                            <div class="alert alert-danger float-right" role="alert">
                                                <p class="txet-right"> لا يوجد اي سيارات مستعمله</p>
                                            </div>
                                        </div>
                                    @else
                                        @foreach ($cars as $car)
                                            <div class="card m-2" style="width: 25rem;">
                                                <a href="{{ route('view_car', $car->id) }}">
                                                    <img class="card-img-top"  height="220" src="{{ asset('images_car/'.DB::table('image_cars')->where('advertisement_id', $car->id)->pluck('image')->first()) }}" alt="Card image cap">
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
                                                                <p class="m-0">{{ $car->state_car->states }} </p>
                                                                <i class="fa fa-map-marker mt-1 ml-1" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex justify-content-end text-right">
                                                                <div class="mt-1">
                                                                    <h6>{{ $car->company->companey }} {{ $car->category->categotie }}</h6>
                                                                    <span class="h5-orange">دينار</span>
                                                                    <b class="h5-orange">{{ $car->price}}</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-2">
                                                            <div class="btn bg-lights mr-2 text-info sm-light">{{ $car->engine_capacity }}cc</div>
                                                            <div class="btn bg-lights mr-2 text-info sm-light">{{ $car->motion_vector }}</div>
                                                            <div class="btn bg-lights text-info sm-light">{{ $car->km }} كم</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif
                                <!-- adv -->
                                <div class="col-md-12">
                                    <div class="adv w-100">
                                        <!-- content adv -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar -->
                        <div class="col-md-3 sidebar-sm text-right">
                            <div class="sidebar_sm sidebar">
                                <div class="mt-1 mr-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="p-2">
                                            <a href="" class="btn btn-link">اعادة ضبط</a>
                                        </div>
                                        <div class="p-2">
                                            <p><b>بحث مفصل</b></p>
                                        </div>
                                      </div>
                                </div>
                                <div>
                                    <div class="sidenav text-right">
                                        <a href="#" class="dropdown-btns text-left">
                                            <div class="d-flex justify-content-between">
                                                <div class=""><i class="fa fa-caret-down text-left"></i></div>
                                                <div class="">الماركة</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-container p-2">
                                            @if ($companies_marca->count() == 0)
                                            <div class="p-1">
                                                <p class="text-right">لا يوجد ماركات   </p>
                                            </div>
                                            @else
                                                @foreach ($companies_marca as $company)
                                                    <div class="">
                                                        <div class="p-1 m-1">
                                                            <label for="company" class="text-right">
                                                                <span>{{ $company->companey }}</span>
                                                                <span><img src="{{ asset('images_car/'.$company->logo) }}" height="20"></span>
                                                            </label>
                                                            <input type="radio" wire:model="company" value="{{ $company->id }}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <a href="#" class="dropdown-btns text-left">
                                            <div class="d-flex justify-content-between">
                                                <div><i class="fa fa-caret-down text-left"></i></div>
                                                <div>الولاية</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-container p-2">
                                            @if ($states->count() == 0)
                                            <div class="p-1">
                                                <p class="text-right">لا يوجد ولايات</p>
                                            </div>
                                            @else
                                                @foreach ($states as $state)
                                                    <div class="p-1">
                                                        <label for="state" class="text-right">{{ $state->states }}</label>
                                                        <input type="radio" wire:model="state" value="{{ $state->id }}">
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <a href="#about" class="text-right">نوع الوقود</a>
                                        <div class="text-right  mr-2 h-100">
                                            @if ($fuels->count() == 0)
                                                <div class="p-1">
                                                <p class="text-right">لا يوجد اي نوع من الوقود</p>
                                            </div>
                                            @else
                                                @foreach ($fuels as $fuel)
                                                    <div class="p-1">
                                                        <label for="fuel" class="text-right">{{ $fuel->type }}</label>
                                                        <input type="radio" wire:model="fuel" value="{{ $fuel->id }}">
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <a href="#about" class="text-right">سعه المحرك (سي سي)</a>
                                        <div class="text-right  mr-2 h-100">
                                            <div class="p-1">
                                                <label for="vehicle1" class="text-right">  اقل من 1200 </label>
                                                <input type="radio" wire:model='engine_capacity_km' value="1200">
                                            </div>
                                            <div class="p-1">
                                                <label for="vehicle1" class="text-right"> اقل من 1400 </label>
                                                <input type="radio" wire:model='engine_capacity_km' value="1400">
                                            </div>
                                            <div class="p-1">
                                                <label for="vehicle1" class="text-right">اقل من 1600 </label>
                                                <input type="radio" wire:model='engine_capacity_km' value="1600">
                                            </div>
                                            <div class="p-1">
                                                <label for="vehicle1" class="text-right"> اقل من 2000  </label>
                                                <input type="radio" wire:model='engine_capacity_km' value="2000">
                                            </div>
                                            <div class="p-1">
                                                <label for="vehicle1" class="text-right">اقل من 2200</label>
                                                <input type="radio" wire:model='engine_capacity_km' value="2200">
                                            </div>
                                            <div class="p-1">
                                                <label for="vehicle1" class="text-right"> أكثر من 3000 </label>
                                                <input type="radio" wire:model='engine_capacity_km' value="3000">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-2">
                                            <div class="p-2">
                                                <button wire:click='search' class="btn btn-orange pr-5 pl-5">عرض نتيجه البحث</button>
                                            </div>
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
