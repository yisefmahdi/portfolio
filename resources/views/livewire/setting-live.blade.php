<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
               <h4>  روابط</h4>
               @if (session()->has('Add'))
               <div class="alert alert-success alert-dismissible fade show text-right" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="close">
                       <span aria-hidden="true">&times;</span>
                   </button>
                   <strong>{{ session()->get('Add') }}</strong>
               </div>
               @endif
            </div>
            <div class="card-body">
                @if ($ch_update == true)

                <div class="form-group">
                    <label for="formGroupExampleInput">فيسبوك</label>
                    <input wire:model='facebook' type="text" class="form-control" placeholder="ادخل رابط فيسبوك">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">قوقل بلص</label>
                    <input wire:model='google' type="text" class="form-control" placeholder="ادخل رابط قوقل بلص">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">تويتر</label>
                    <input wire:model='twitter' type="text" class="form-control" placeholder="ادخل رابط تويتر">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">يوتيوب</label>
                    <input wire:model='youtube' type="text" class="form-control" placeholder="ادخل رابط اليوتيوب">
                </div>
                  <button wire:click='update' class="btn btn-success w-100 mb-2">تعديل</button>
                  <button wire:click='clouse' class="btn btn-danger w-100">الغاء</button>
                @else
                    <div class="mb-2">
                        <label>فيسبوك</label> :
                        <a href="{{ $setting->facebook }}">{{ $setting->facebook }}</a>
                    </div>
                    <div class="mb-2">
                        <label> قوقل بلص</label> :
                        <a href="{{ $setting->google }}">{{ $setting->google }}</a>
                    </div>
                    <div class="mb-2">
                        <label>تويتر</label> :
                        <a href="{{ $setting->twiter }}">{{ $setting->twiter }}</a>
                    </div>
                    <div class="mb-2">
                        <label>يوتيوب</label> :
                        <a href="{{ $setting->youtube }}">{{ $setting->youtube }}</a>
                    </div>
                    <button wire:click='edit' class="btn btn-success w-100">تحديث</button>
                @endif
            </div>
        </div>
    </div>
</div>
