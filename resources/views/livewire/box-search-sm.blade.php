<div>
    <div class="mt-4 ">
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
                <div class="main_select">
                    <div class="dropdown4 w-100">
                        <div class="form-group pb-0 mb-0 "wire:click='if_m_false'>
                            <button class="dropbtn4 font form-control w-100" wire:click='if_ca_true'  style="width: 17.2rem;">
                                @if ($value_Companie == null)
                                الماركة
                                @else
                                {{ $value_Companie }}
                                @endif
                            </button>
                        </div>
                        @if ($if_ch == true)
                        <div class="dropdown-content4" style="display: block">
                            @if ($companies->count() != 0)
                                @foreach ($companies as $company)
                                    <label class="container4" wire:click='company_module' >{{ $company->companey }}
                                        <span wire:click='clickc'>
                                            <input type="radio" wire:click='if_ca_false' wire:click='clickc' wire:model='company' value="{{ $company->id }}" >
                                            <span class="checkmark4" wire:click='clickc' wire:click='if_ca_false' wire:click='company_module'></span>
                                        </span>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
                <div class="main_select mt-3">
                    <div class="dropdown5 w-100">
                        <div class="form-group" wire:click='if_ca_false' >
                            <button class="dropbtn5 font form-control w-100" wire:click='if_m_true'>
                                @if ($value_model == null)
                                الموديل
                                @else
                                {{ $value_model }}
                                @endif
                            </button>
                        </div>
                        @if ($ch_search_sm == true)
                            <div class="dropdown-content-sm">
                                @if ($company_module != null)
                                    @foreach ($company_module as $mode)
                                        <label class="container4" wire:click='if_m_false'  wire:click='clickk' wire:click='company_module'>{{ $mode->categotie }}
                                            <input type="radio"  wire:click='clickk' wire:click='clickk' wire:model='model' value="{{ $mode->id }}" >
                                            <span class="checkmark4" wire:click='if_m_false'></span>
                                        </label>
                                    @endforeach
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mt-3">
                    <button wire:click='search' class="btn btn-orange w-100 p-2">بحث</button>
                </div>

    </div>
</div>
