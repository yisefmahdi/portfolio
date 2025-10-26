<div>
    <div class="mt-4 p-3">
        <b class="mb-2">ابحث عن السيارة المناسبة لك</b>
        <!-- form -->
            <div class="main_radio d-flex mt-2" >
                @if ($ch_search == false)
                <label class="containere containere_f" wire:click='radio_fa'>مستعمل
                    <input type="radio" wire:click='radio_fa'>
                    <span class="checkmark" wire:click='radio_fa' ></span>
                </label>
                <label class="containere containere_2"  wire:click='radio_tr'>جديد
                    <input type="radio"  wire:click='radio_tr'>
                    <span class="checkmark"  wire:click='radio_tr'></span>
                </label>
                @else
                <label class="containere" wire:click='radio_fa'>مستعمل
                    <input type="radio" wire:click='radio_fa'>
                    <span class="checkmark" wire:click='radio_fa' ></span>
                </label>
                <label class="containere containere_new containere_2"  wire:click='radio_tr'>جديد
                    <input type="radio"  wire:click='radio_tr'>
                    <span class="checkmark"  wire:click='radio_tr'></span>
                </label>
                @endif
            </div>
            @if ($ch_search == true)
                <div class="main_select">
                    <div class="dropdown4">
                        <div class="form-group pb-0 mb-0">
                            <button onclick="myFunction4()" class="dropbtn4 form-control w-100 font">
                                @if ($value_Companie == null)
                                الماركة
                                @else
                                {{ $value_Companie }}
                                @endif
                            </button>
                        </div>
                        <div id="myDropdown4" class="dropdown-content4">
                            @if ($companies->count() == 0)
                            <div class="p-1">
                                <p class="text-right">لا يوجد ماركات   </p>
                            </div>
                            @else
                                @foreach ($companies as $company)
                                    <label class="container4" wire:click='clickc' wire:click='company_module'>{{ $company->companey }}
                                        <input type="radio"  wire:click='company_module' wire:model='company' value="{{ $company->id }}" >
                                        <span class="checkmark4"  wire:click='company_module'></span>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="main_select mt-3">
                    <div class="dropdown5">
                        <div class="form-group">
                            <button onclick="myFunction5()" class="dropbtn5 form-control w-100 font">
                                @if ($value_model == null)
                                الموديل
                                @else
                                {{ $value_model }}
                                @endif
                            </button>
                        </div>
                        <div id="myDropdown5" class="dropdown-content5">
                            @if ($company_module != null)
                                @foreach ($company_module as $mode)
                                    <label class="container4" wire:click='clickk' wire:click='company_module' >{{ $mode->categotie }}
                                        <input type="radio" wire:model='model' value="{{ $mode->id }}" >
                                        <span class="checkmark4"></span>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button wire:click='search' class="btn btn-orange w-100 p-2">بحث</button>
                </div>
            @else
                <div class="main_select">
                    <div class="dropdown4">
                        <div class="form-group pb-0 mb-0">
                            <button onclick="myFunction4()" class="dropbtn4 form-control w-100 font">
                                @if ($value_Companie == null)
                                الماركة
                                @else
                                {{ $value_Companie }}
                                @endif
                            </button>
                        </div>
                        <div id="myDropdown4" class="dropdown-content4">
                            @if ($companies->count() == 0)
                            <div class="p-1">
                                <p class="text-right">لا يوجد ماركات   </p>
                            </div>
                            @else
                                @foreach ($companies as $company)
                                    <label class="container4" wire:click='clickc' wire:click='company_module'>{{ $company->companey }}
                                        <input type="radio"  wire:click='company_module' wire:model='company' value="{{ $company->id }}" >
                                        <span class="checkmark4"  wire:click='company_module'></span>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="main_select mt-3">
                    <div class="dropdown5">
                        <div class="form-group">
                            <button onclick="myFunction5()" class="dropbtn5 form-control w-100 font">
                                @if ($value_model == null)
                                الموديل
                                @else
                                {{ $value_model }}
                                @endif
                            </button>
                        </div>
                        <div id="myDropdown5" class="dropdown-content5">
                            @if ($company_module != null)
                                @foreach ($company_module as $mode)
                                    <label class="container4"wire:click='clickk'  wire:click='company_module' >{{ $mode->categotie }}
                                        <input type="radio" wire:model='model' value="{{ $mode->id }}" >
                                        <span class="checkmark4"></span>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button wire:click='search' class="btn btn-orange w-100 p-2">بحث</button>
                </div>
            @endif
    </div>
</div>
