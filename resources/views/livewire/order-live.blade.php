<div>
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12">
            @if (session()->has('Add'))
                <div class="alert alert-success alert-dismissible fade show text-right" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ session()->get('Add') }}</strong>
                </div>
            @endif
            @if (session()->has('Error'))
            <div class="alert alert-danger alert-dismissible fade show text-right" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session()->get('Add') }}</strong>
            </div>
            @endif
            <div class="card">
                <div class="card-body h-100">
                    <div class="row row-sm ">

                        @if ($orders->count() == 0)
                        <div class="col-md-12">
                            <div class="w-100 text-right">
                                <div class="alert alert-danger float-right" role="alert">
                                    <p class="txet-right"> لا يوجد اي طلبات  </p>
                                </div>
                            </div>
                        </div>
                        @else
                        @foreach ($orders as $order)
                            <div class=" col-xl-5 col-lg-12 col-md-12">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="pic-1"><img src="{{ asset('images_car/'.DB::table('image_cars')->where('advertisement_id', $order->id)->pluck('image')->first()) }}" width="100" alt="image"/></div>
                                </div>
                            </div>
                            <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0 mb-4">
                                <h4 class="product-title mb-1">
                                    {{ $order->company->companey }} {{ $order->category->categotie }}
                                </h4>
                                <p class="text-muted tx-13 mb-1">
                                    صاحب الاعلان : {{ $order->user_car->name }} || {{ $order->user_car->email }}  || {{ $order->user_car->phone }}
                                </p>
                                <div class="rating mb-1">
                                    <div class="stars">
                                       الولاية : {{ $order->state_car->states }}
                                    </div>
                                    <span class="review-no">
                                    <?php
                                        $startDate = Carbon\Carbon::parse($order->created_at);
                                        $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                                    ?>
                                    تاريخ النشر : {{ $date }}
                                    </span>
                                </div>
                                <h6 class="price">سعر  : <span class="h3 ml-2">{{ $order->price }}</span> دينار</h6>
                                <label class="text-right">الوصف</label>
                                <p class="product-description">{{ $order->desc }}</p>
                                <div class="d-flex-car justify-content-center mr-5 ">
                                    <div class="desc-car-start text-right">
                                        <div>
                                            <ul class="descs-ul">
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <span>سنة الصنع</span>
                                                            <span><i class="fa fa-gratipay text-primary" aria-hidden="true"></i></span>
                                                        </div>
                                                        <div><b>{{ $order->year_made }}</b></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <span> التسارع من 0-100 (كم/ساعة)</span>
                                                            <span><img src="{{ asset('asset/img/acceleration.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                        <div><b>{{ $order->km }}</b></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <span>ناقل الحركة</span>
                                                            <span><img src="{{ asset('asset/img/engine-2.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                        <div><b>{{ $order->motion_vector }}</b></div>
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
                                                        <div>
                                                            <span>سعة المحرك (سي سي)</span>
                                                            <span><img src="{{ asset('asset/img/engine-2.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                        <div><b>{{ $order->engine_capacity }}</b></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <span>نوع الوقود</span>
                                                            <span><img src="{{ asset('asset/img/fuel-consumption.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                        <div><b>{{ $order->fuel_car->type }}</b></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">

                                                        <div>
                                                            <span>الشكل الخارجي</span>
                                                            <span><img src="{{ asset('asset/img/shape-hatchback-2.svg') }}" style="margin-bottom: -8px;" alt=""></span>
                                                        </div>
                                                        <div><b>
                                                            {{ $order->Outer_Shape_car->outer_shape }}
                                                            <span class="mt-4"><img src="{{ asset($order->Outer_Shape_car->logo) }}" width="50" height="20" alt="1"></span>
                                                        </b></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="action">
                                    <button wire:click='order_true({{ $order->id }})' class="add-to-cart btn btn-success" type="button">قبول الاعلان</button>
                                    <button wire:click='order_false({{ $order->id }})' class="add-to-cart btn btn-danger" type="button">حذف الاعلان</button>
                                    <div class="text-success mr-3" wire:loading wire:target='order_false'>
                                        <span>
                                        انتظر قليلا
                                        <i class="fa fa-spinner fa-spin"></i></span>
                                    </div>
                                    <div class="text-success mr-3" wire:loading wire:target='order_true'>
                                        <span>
                                        انتظر قليلا
                                        <i class="fa fa-spinner fa-spin"></i></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>
