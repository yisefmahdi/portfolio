<div>
    <div class="card">
        <div class="card-header">
            @foreach ($errors->all() as $message)
            <p>{{ $message }}</p>
            @endforeach
            @if (session()->has('Add'))
            <div class="alert alert-success alert-dismissible fade show text-right" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session()->get('Add') }}</strong>
            </div>
            @endif
            @if ($ch_update == true)
            <div class="form-group">
                <label>عنوان الخبر </label>
                <input wire:model='title' type="text" class="form-control" placeholder="ادخل عنوان الخبر">
            </div>
            <div class="form-group">
                <label>وصف الخبر</label>
                <textarea wire:model='text'  class="form-control" placeholder="ادخل وصف الخبر"></textarea>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input  wire:model='img'  type="file" class="custom-file-input" >
                    <label class="custom-file-label" for="customFile"> صورة الخبر </label>
                </div>
                <div class="text-success mr-3" wire:loading wire:target='img'>
                    <span>
                    يتم تحميل الصورة
                    <i class="fa fa-spinner fa-spin"></i></span>
                </div>
            </div>
            <div class="form-group">
                <button wire:click='update' class="btn btn-primary w-100">تعديل الخبر</button>
                <button wire:click='clouse' class="btn btn-danger w-100 mt-2">الغاء </button>
            </div>
            @else
                <div class="form-group">
                    <label>عنوان الخبر </label>
                    <input wire:model='title' type="text" class="form-control" placeholder="ادخل عنوان الخبر">
                </div>
                <div class="form-group">
                    <label>وصف الخبر</label>
                    <textarea wire:model='text'  class="form-control" placeholder="ادخل وصف الخبر"></textarea>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input  wire:model='img'  type="file" class="custom-file-input" >
                        <label class="custom-file-label" for="customFile"> صورة الخبر </label>
                    </div>
                    <div class="text-success mr-3" wire:loading wire:target='img'>
                        <span>
                        يتم تحميل الصورة
                        <i class="fa fa-spinner fa-spin"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <button wire:click='add' class="btn btn-primary w-100">نشر الخبر</button>
                </div>
            @endif
        </div>
        <div class="card-body ">
            <div class="row">
                <h5 class="mr-3">كل الاخبار </h5>
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Shopping Cart-->
                            <div class="product-details table-responsive text-nowrap">
                                <table class="table table-bordered table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-right">صورة الخبر</th>
                                            <th>عنوان الخبر</th>
                                            <th>نص الخبر</th>
                                            <th>تاريخ الخبر</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($news->count() == 0)
                                        لم يتم نشر اي خبر
                                        @else
                                            @foreach ($news as $index => $new)
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="card-aside-img">
                                                                <img src="{{ asset('images_car/'.$new->image) }}" alt="img" class="h-60 w-60">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center text-lg text-medium">{{ $new->title }}</td>
                                                    <td class="text-center text-lg text-medium">{{ $new->text }}</td>
                                                    <td class="text-center text-lg text-medium">{{ $new->created_at }}</td>

                                                    <td class="text-center">
                                                        <a wire:click='delete({{ $new->id }})' class="remove-from-cart" href="#" data-toggle="tooltip" data-original-title="حذف المنتج "><i class="fa fa-trash"></i></a>
                                                        <a wire:click='edit({{ $new->id }})' class="remove-from-cart mr-2 text-success" href="#" data-toggle="tooltip" data-original-title="تعديل المنتج"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
