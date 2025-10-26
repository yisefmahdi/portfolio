@extends('layouts.master')
@section('title', 'كل سيارات الجديدة')
@section('css')
<style>
    .descs-ul {
    list-style: none;
    width: 100%;
}

.descs-ul li {
    width: 330px;
    color: #10255f;
    border-bottom: 1px var(--box-shadow) solid;
    padding: 5px;
}

.descs-ul li:hover {
    background: var(--box-shadow);
}
@media screen and (max-width: 599px) {
    .descs-ul li {
        width: 100%;
        color: #10255f;
        border-bottom: 1px var(--box-shadow) solid;
        padding: 2px;
        font-size: 8px;
    }
}
</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">سيارات جديدة
                            </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ السيارات الجديدة</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body h-100">
                                @if (session()->has('Add'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get('Add') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <div class="row row-sm ">
                                    @if ($cars->count() == 0)
                                    <div class="col-md-12">
                                        <div class="w-100 text-right">
                                            <div class="alert alert-danger float-right" role="alert">
                                                <p class="txet-right"> لا يوجد اي سيارات  </p>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @foreach ($cars as $car)
                                        <div class=" col-xl-5 col-lg-12 col-md-12">
                                            <div class="preview-pic tab-content">
                                                <div class="tab-pane active" id="pic-1"><img src="{{ asset('images_car/'.DB::table('images')->where('car_id', $car->id)->pluck('image')->first()) }}" width="100" alt="image"/></div>
                                            </div>
                                        </div>
                                        <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0 mb-4">
                                            <h4 class="product-title mb-1">
                                                {{ $car->module_cars->company->companey }} {{ $car->module_cars->name_car }}
                                            </h4>
                                            <p class="text-muted tx-13 mb-1">
                                            </p>
                                            <div class="rating mb-1">
                                                <div class="stars">
                                                </div>
                                                <span class="review-no">
                                                <?php
                                                    $startDate = Carbon\Carbon::parse($car->created_at);
                                                    $date = $startDate->locale('ar')->diffForHumans(Carbon\Carbon::now())
                                                ?>
                                                تاريخ النشر : {{ $date }}
                                                </span>
                                            </div>
                                            <h6 class="price">سعر  : <span class="h3 ml-2">{{ $car->price }}</span> دينار</h6>
                                            <div class="descs-car p-3 ">
                                                <h6 class="text-right text-s"><b>مواصفات الفئه</b></h6>
                                                <div class="d-flex-car justify-content-center mr-5 ml-2 mt-2">
                                                    <div class="desc-car-start">
                                                        <div>
                                                            <ul class="descs-ul">
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span> القوة الحصانية</span>
                                                                            <span><img src="img/power.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->horse_power }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span> التسارع من 0-100 (كم/ساعة)</span>
                                                                            <span><img src="img/acceleration.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->acceleration }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span>ناقل الحركة</span>
                                                                            <span><img src="img/engine-2.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->motion_vector }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span> عدد المقاعد</span>
                                                                            <span><img src="img/seats-number.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->number_seats }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span> تجميع</span>
                                                                            <span><img src="img/combination.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->gather }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span> الوكيل</span>
                                                                            <span><img src="img/agent.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->agent }}</b></div>
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
                                                                            <span><img src="img/engine-2.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->engine_capacity }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span>العزم ( نيوتن.متر/لفة.دقيقة)</span>
                                                                            <span><img src="img/torque.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->torque }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span>متوسط استهلاك الوقود (لتر/100كم)</span>
                                                                            <span><img src="img/fuel-consumption.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->average_consumption }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span>الشكل الخارجي</span>
                                                                            <span><img src="img/shape-hatchback-2.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->Outer_Shape_car->outer_shape }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span> جيل</span>
                                                                            <span><img src="img/generation.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->generation }}</b></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <span> منشأ</span>
                                                                            <span><img src="img/country.svg" style="margin-bottom: -8px;" alt=""></span>
                                                                        </div>
                                                                        <div><b>{{ $car->origin }}</b></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action">
                                                <a href="{{ route('view.update.new.cars', $car->id) }}" target="_blank" class="add-to-cart btn btn-success" >تعديل </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
