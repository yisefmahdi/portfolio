<div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">اضافة علامه </h4>
                    </div>
                    <div class="form-row mt-3">
                        <div class="form-group col-md-10">
                            @foreach ($errors->all() as $message)
                            <div>
                                <p class="mr-3 mb-2">{{ $message }}</p>
                            </div>
                            @endforeach
                            @if (session()->has('Add'))
                            <div class="alert alert-success alert-dismissible fade show text-right" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>{{ session()->get('Add') }}</strong>
                            </div>
                            @endif
                        </div>
                        {{-- ch_update --}}
                        @if ($ch_update == true)
                            <div class="form-group col-md-7">
                                <input type="text" wire:model='company_name' class="form-control w-100" placeholder="ادخل اسم العلامة">
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-file">
                                    <input type="file" wire:model='company_logo' class="custom-file-input" >
                                    <label class="custom-file-label" for="customFile">اضافة لوقو </label>
                                </div>
                                <div class="text-success mr-3" wire:loading wire:target='company_logo'>
                                    <span>
                                    يتم تحميل الصورة
                                    <i class="fa fa-spinner fa-spin"></i></span>
                                </div>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click.prevent='update_company' class="btn btn-success">تعديل</button>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='clouse_stutes' class="btn btn-danger w-100">الغاء </button>
                            </div>
                        @else
                            <div class="form-group col-md-6">
                                <input type="text" wire:model='company_name' class="form-control w-100" placeholder="ادخل اسم العلامة">
                            </div>
                            <div class="form-group col-md-2">
                                <div class="form-group">
                                    <select wire:model="stutas" class="form-control  font text-right">
                                        <option >اختر العلامة او تاجر</option>
                                        <option value="0">علامة</option>
                                        <option value="1">تاجر</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-file">
                                    <input type="file" wire:model='company_logo' class="custom-file-input" >
                                    <label class="custom-file-label" for="customFile">اضافة لوقو </label>
                                </div>
                                <div class="text-success mr-3" wire:loading wire:target='company_logo'>
                                    <span>
                                    يتم تحميل الصورة
                                    <i class="fa fa-spinner fa-spin"></i></span>
                                </div>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click.prevent='add_company' class="btn btn-primary">اضافة</button>
                            </div>
                        @endif
                    </div>
                </div>
                @if ($companie->count() == 0)
                    <div class="w-100 text-right">
                        <div class="alert alert-danger " role="alert">
                            <p class="txet-center">لا يوجد اي علامات</p>
                        </div>
                    </div>
                @else
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">اسم العلامة  </th>
                                        <th class="wd-15p border-bottom-0"> لوقو  </th>
                                        <th class="wd-15p border-bottom-0"> عدد الاعلانات في العلامة  </th>
                                        <th class="wd-15p border-bottom-0">الحالة</th>
                                        <th class="wd-15p border-bottom-0"> العمليات </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companie as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>{{ $company->companey }}</td>
                                        <td><img src="{{ asset('images_car/'.$company->logo) }}"  height="40" alt=""></td>
                                        <td>{{ $company->advcars->count() }}</td>
                                        <td>
                                        @if ($company->stutas == 0)
                                        <p class="text-success">علامة</p>
                                        @else
                                        <p class="text-danger">تاجر</p>
                                        @endif
                                        </td>
                                        <td>
                                            <button wire:click='edit({{ $company->id }})' type="button" class="btn btn-success">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <button wire:click='delete({{ $company->id }})' class="btn btn-danger ">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
</div>
