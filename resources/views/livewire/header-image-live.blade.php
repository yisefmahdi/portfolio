<div>
    <div class="row row-sm">
        <div class="col-xl-12 col-md-12">
            @if ($ch_update == true)
            <div class="card">
                <div class="card-header pb-0">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-7">
                            <input type="text" wire:model='link' class="form-control w-100" placeholder="ادخل رابط ">
                        </div>
                        <div class="form-group col-md-3">
                            <div class="custom-file">
                                <input type="file" wire:model='img' class="custom-file-input" >
                                <label class="custom-file-label" for="customFile">اضافة الصورة </label>
                            </div>
                            <div class="text-success mr-3" wire:loading wire:target='img'>
                                <span>
                                يتم تحميل الصورة
                                <i class="fa fa-spinner fa-spin"></i></span>
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <button wire:click.prevent='update' class="btn btn-success">تعديل</button>
                        </div>
                        <div class="form-group col-md-1">
                            <button wire:click='clouse' class="btn btn-danger">الغاء </button>
                        </div>
                    </div>
                </div>
            </div>
            @else
                @if (session()->has('Add'))
                <div class="alert alert-success alert-dismissible fade show text-right" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ session()->get('Add') }}</strong>
                </div>
                @endif
                @foreach ($header_images as $image)
                <div class="card">
                    <div class="card-header pb-0">
                        <img src="{{ asset('images_car/'.$image->header_image) }}" alt="adv" style="width: 100%; height: 370px;">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="p-2">
                                <a href="{{ $image->link }}" class="text-primary">{{ $image->link }}</a>
                            </div>
                            <div class="p-2">
                                <button wire:click='edit({{ $image->id }})' class="btn btn-danger">تغير</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
