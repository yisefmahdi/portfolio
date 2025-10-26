<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <main>
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12 col-sm-12">
                                <div class="  text-right">
                                   <p class="text-b text-center "> <b>اضافة سياره جديدة</b></p>
                                    @foreach ($errors->all() as $message)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @endforeach
                                    <div class="form mt-3">
                                        <div class="form-group main_select ">
                                            <label for="exampleFormControlSelect1">إختر الماركة</label>
                                            <select wire:change='company_module' wire:model="marca" class="form-control custom-select font text-right">
                                                <option value="0">ماركة</option>
                                                @if ($companies == null)
                                                <option value="0">لا يوجد ماركات</option>
                                                @else
                                                    @foreach ($companies as $company)
                                                        <option value="{{ $company->id }}">
                                                        {{ $company->companey }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="form-group main_select">
                                            <label for="exampleFormControlSelect1"> اختر الموديل </label>
                                            <select wire:model="module" class="form-control custom-select font text-right" >
                                                <option>الموديل</option>
                                                @if ($company_module != null || $company_module != 0)
                                                    @foreach ($company_module as $mode)
                                                    <option value="{{ $mode->id }}">{{ $mode->name_car }}</option>
                                                    @endforeach
                                                @else
                                                <option>اختر ماركة</option>
                                                @endif
                                            </select>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="form-group ">
                                            <label>ناقل الحركة</label>
                                            <div class="row d-flex justify-content-end">
                                                <div class="col-md-6">
                                                    <div class="main_radio d-flex mt-2">
                                                        <label class="containere">
                                                            أوتوماتيك
                                                            <span class="mt-2"><img src="{{ asset('asset/img/auto-gray.svg') }}" width="20" height="20" alt="1"></span>
                                                            <input value="أوتوماتيك" type="radio" wire:model="motion_vector">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="main_radio d-flex mt-2">
                                                        <label class="containere">مانيوال
                                                            <span class="mt-2"><img src="{{ asset('asset/img/manual-gray.svg') }}" width="20" height="20" alt="1"></span>
                                                            <input value="مانيوال" type="radio" wire:model="motion_vector">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label>شكل السيارة</label>
                                            <div class="row d-flex justify-content-end">
                                                @foreach ($outer_shapes as $outer_shape)
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="main_radio d-flex mt-2">
                                                            <label class="containere font-size">
                                                                {{ $outer_shape->outer_shape }}
                                                                <span class="mt-2"><img src="{{ asset($outer_shape->logo) }}" width="50" height="20" alt="1"></span>
                                                                <input value="{{ $outer_shape->id }}" type="radio" wire:model="radio_sh">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group main_select">
                                            <label for="exampleFormControlSelect1">سعة المحرك (سي سي) </label>
                                            <select wire:model="engine_capacity" class="form-control custom-select font text-right">
                                                <option>سعه المحرك</option>
                                                <option value="800">800</option>
                                                <option value="900">900</option>
                                                <option value="1000">1000</option>
                                                <option value="1100">1100</option>
                                                <option value="1200">1200</option>
                                                <option value="1300">1300</option>
                                                <option value="1400">1400</option>
                                                <option value="1500">1500</option>
                                                <option value="1600">1600</option>
                                                <option value="1700">1700</option>
                                                <option value="1800">1800</option>
                                                <option value="1900">1900</option>
                                                <option value="2000">2000</option>
                                                <option value="2100">2100</option>
                                                <option value="2200">2200</option>
                                                <option value="2300">2300</option>
                                                <option value="2400">2400</option>
                                                <option value="2500">2500</option>
                                                <option value="2600">2600</option>
                                                <option value="2700">2700</option>
                                                <option value="2800">2800</option>
                                                <option value="2900">2900</option>
                                                <option value="3000">3000</option>
                                                <option value="3100">3100</option>
                                                <option value="3200">3200</option>
                                                <option value="3300">3300</option>
                                                <option value="3400">3400</option>
                                                <option value="3500">3500</option>
                                                <option value="3600">3600</option>
                                                <option value="3700">3700</option>
                                                <option value="3800">3800</option>
                                                <option value="3900">3900</option>
                                                <option value="4000">4000</option>
                                                <option value="4100">4100</option>
                                                <option value="4200">4200</option>
                                                <option value="4300">4300</option>
                                                <option value="4400">4400</option>
                                                <option value="4500">4500</option>
                                                <option value="4600">4600</option>
                                                <option value="4700">4700</option>
                                                <option value="4800">4800</option>
                                                <option value="4900">4900</option>
                                                <option value="5000">5000</option>
                                                <option value="5100">5100</option>
                                                <option value="5200">5200</option>
                                                <option value="5300">5300</option>
                                                <option value="5400">5400</option>
                                                <option value="5500">5500</option>
                                                <option value="5600">5600</option>
                                                <option value="5700">5700</option>
                                                <option value="5800">5800</option>
                                                <option value="5900">5900</option>
                                                <option value="6000">6000</option>
                                                <option value="6100">6100</option>
                                                <option value="6200">6200</option>
                                                <option value="6300">6300</option>
                                                <option value="6400">6400</option>
                                            </select>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="form-group main_price">
                                            <label for="formGroupExampleInput">السعر (دينار)</label>
                                            <input type="number" wire:model='price' class="form-control text-right font" placeholder="مثال: 100000">
                                            <span class="text-b ">دينار</span>
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput">نوع المحرك </label>
                                            <input type="text" wire:model='th' class="form-control text-right font" placeholder="ادخل نوع المحرك  ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput">عزم المحرك</label>
                                            <input type="number" wire:model='torque' class="form-control text-right font" placeholder="ادخل عزم المحرك ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput"> متوسط الاستهلاك الوقود </label>
                                            <input type="number" wire:model='average' class="form-control text-right font" placeholder="ادخل متوسط الاستهلاك الوقود ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput"> نشأ </label>
                                            <input type="text" wire:model='origin' class="form-control text-right font" placeholder="ادخل نشأ ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput"> عدد الاحصنة </label>
                                            <input type="number" wire:model='horse_power' class="form-control text-right font" placeholder="ادخل عدد الاحصنة ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput"> التسارع من 0-100 (كم/ساعة)   </label>
                                            <input type="number" wire:model='acceleration' class="form-control text-right font" placeholder="ادخل التسارع من 0-100 (كم/ساعة)   ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput"> عدد المقاعد </label>
                                            <input type="number" wire:model='number_seats' class="form-control text-right font" placeholder="ادخل عدد المقاعد ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput"> تجميع </label>
                                            <input type="text" wire:model='aggre' class="form-control text-right font" placeholder="ادخل تجميع  ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput"> الوكيل  </label>
                                            <input type="text" wire:model='agent' class="form-control text-right font" placeholder="ادخل الوكيل  ">
                                        </div>
                                        </div>
                                            <div class="form-group mt-3">
                                                <button wire:click='update' class="btn btn-orange font w-100 mt-2"> تعديل </button>
                                                <button wire:click='delete' class="btn btn-danger font w-100 mt-2"> حذف السيارة </button>
                                            </div>
                                            <div class="text-success mr-3" wire:loading wire:target='update'>
                                                <span>
                                                انتظر قليلا
                                                <i class="fa fa-spinner fa-spin"></i></span>
                                            </div>
                                            @if (session()->has('Add'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ session()->get('Add') }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @endif
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
