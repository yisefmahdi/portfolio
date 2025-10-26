<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 mt-5">
            <div class="p-3">
                <input wire:model='text_search' wire:click='search_click' wire:change='search_click'  class="form-control  w-100 text-right font" type="text" placeholder="...بحث في الماركة او الموديل">
            </div>
        </div>
        <div class="col-md-12">
            <div class="p-3" style="height: 400px; max-height: 100%;">
                @if ($ch_search == true)
                <div class="dropdown3">
                    <div id="myDropdown3" class="dropdown-content3">
                        @if ($requslt_search == null)
                        @else
                            @foreach ($requslt_search as $search)
                            <a href="{{ route('view.companie', $search->id) }}">{{ $search->companey }}</a>
                            @endforeach
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
