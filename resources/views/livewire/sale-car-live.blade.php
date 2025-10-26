<div>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-sm-6 mt-3">
                    <div class="advertisement p-3 text-right">
                       <p class="text-b text-center "> <b>بيع عربيتك في دقائق بخطوات بسيطة وسهلة</b></p>
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
                                        <option value="{{ $mode->id }}">{{ $mode->categotie }}</option>
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
                            <div class="form-group main_select">
                                <label for="exampleFormControlSelect1">سنة الصنع</label>
                                <select wire:model="year_made" class="form-control custom-select font text-right">
                                    <option>سنة الصنع</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                </select>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="form-group ">
                                <label>نوع الوقود</label>
                                <div class="row d-flex justify-content-center">
                                    @foreach ($fuels as $fuel)
                                        <div class="col-md-4 col-sm-4">
                                            <div class="main_radio d-flex mt-2">
                                                <label class="containere">{{ $fuel->type }}
                                                    <input value="{{ $fuel->id }}" type="radio" wire:model="fuel">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
                                <label for="formGroupExampleInput">الكيلومتر (كم)</label>
                                <input type="number" wire:model="km" class="form-control text-right font" placeholder="مثال : 20000">
                                <span class="text-b ">كم</span>
                            </div>

                            <div class="form-group main_price">
                                <label for="formGroupExampleInput">السعر (دينار)</label>
                                <input type="number" wire:model='price' class="form-control text-right font" placeholder="مثال: 100000">
                                <span class="text-b ">دينار</span>
                            </div>

                            <div class="form-group main_select">
                                <label for="exampleFormControlSelect1">الولاية</label>
                                <select wire:model='states' class="form-control custom-select font text-right">
                                    <option>الولاية</option>
                                    @foreach ($state_s as $state_id)
                                    <option value="{{ $state_id->id }}">{{ $state_id->states }}</option>
                                    @endforeach
                                </select>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">الوصف</label>
                                <textarea wire:model="desc" class="form-control font text-right" rows="4"></textarea>
                            </div>
                            <div class="row form-group d-flex justify-content-end">
                                @if (session()->has('Error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get('Error') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <label for="formGroupExampleInput" class="m-2 mr-3">الصور</label>
                                @foreach ($items as $index => $item)
                                    @if ($index == 0)
                                    <div class="col-md-12 mb-3">

                                        <div class="custom-file w-100">
                                            <input type="file" wire:model.defer='items.0.img'  class="custom-file-input" required>
                                            <label class="custom-file-label" for="validatedCustomFile">اضف صورة الرئيسية </label>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-12 mb-3">
                                        <div class="custom-file w-100">
                                            <input type="file" wire:model.defer='items.{{ $index }}.img'  class="custom-file-input" required>
                                            <label class="custom-file-label" for="validatedCustomFile">اضف صورة </label>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="text-success mr-3" wire:loading wire:target='items.{{ $index }}.img'>
                                        <span>
                                        يتم تحميل الصورة
                                        <i class="fa fa-spinner fa-spin"></i></span>
                                    </div>
                                @endforeach

                                <div class="form-group col-md-12">
                                    <button wire:click="increment" class="btn btn-dark w-100">
                                        اضف صور اخرى
                                    </button>
                                </div>
                            </div>
                        </div>
                            <div class="form-group mt-3">
                                <button wire:click='create_adv' class="btn btn-orange font w-100">انشر الان </button>
                            </div>
                            <div class="text-success mr-3" wire:loading wire:target='create_adv'>
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

