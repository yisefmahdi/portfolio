<div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">اضافة موديلات</h4>
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
                            <input type="text" wire:model='model' class="form-control w-100" placeholder="ادخل اسم الموديل">
                        </div>
                        <div class="form-group col-md-3">
                            <select wire:model="marca" class="form-control font text-right">
                                <option value="0">اختر العلامة</option>
                                @if ($companies->count() == 0)
                                <option value="0">لا يوجد علامات</option>
                                @else
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">
                                        {{ $company->companey }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                            <div class="form-group col-md-1">
                                <button wire:click='update_model' class="btn btn-success">تعديل</button>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='clouse_stutes' class="btn btn-danger ">الغاء </button>
                            </div>
                        @else
                            <div class="form-group col-md-8">
                                <input type="text" wire:model='model' class="form-control w-100" placeholder="ادخل اسم الموديل">
                            </div>
                            <div class="form-group col-md-3">
                                <select wire:model="marca" class="form-control font text-right">
                                    <option value="0">اختر العلامة</option>
                                    @if ($companies->count() == 0)
                                    <option value="0">لا يوجد علامات</option>
                                    @else
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">
                                            {{ $company->companey }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='add_model' class="btn btn-primary ">اضافة</button>
                            </div>
                        @endif
                    </div>
                </div>
                @if ($categorie->count() == 0)
                    <div class="w-100 text-right">
                        <div class="alert alert-danger " role="alert">
                            <p class="txet-center">لا يوجد اي موديلات</p>
                        </div>
                    </div>
                @else
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">رقم موديل</th>
                                        <th class="wd-15p border-bottom-0">اسم الموديل</th>
                                        <th class="wd-15p border-bottom-0">من علامة </th>
                                        <th class="wd-15p border-bottom-0"> العمليات </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorie as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->categotie }}</td>
                                        <td>{{ $category->category_company->companey }}</td>
                                        <td>
                                            <button wire:click='edit({{ $category->id }})' type="button" class="btn btn-success">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <button wire:click='delete({{ $category->id }})' class="btn btn-danger ">
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
