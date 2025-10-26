<div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">اضافة فئات</h4>
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
                            <div class="form-group col-md-6">
                                <input type="text" wire:model='name_car' class="form-control w-100" placeholder="ادخل اسم الفئة">
                            </div>
                            <div class="form-group col-md-2">
                                <select wire:change='company_module' wire:model="marca" class="form-control font text-right">
                                    <option value="0">اختر علامة</option>
                                    @if ($companies == null)
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
                            <div class="form-group col-md-2">
                                <select wire:model="category" class="form-control font text-right" >
                                    <option value="0"> اختر الموديل</option>
                                    @if ($company_modules != null || $company_modules != 0)
                                        @foreach ($company_modules as $category)
                                            <option value="{{ $category->id }}">{{ $category->categotie }}</option>
                                        @endforeach
                                    @else
                                    <option>اختر علامة</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='update_model' class="btn btn-success">تعديل</button>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='clouse_category' class="btn btn-danger ">الغاء </button>
                            </div>
                        @else
                            <div class="form-group col-md-7">
                                <input type="text" wire:model='name_car' class="form-control w-100" placeholder="ادخل اسم الفئة">
                            </div>
                            <div class="form-group col-md-2">
                                <select wire:change='company_module' wire:model="marca" class="form-control font text-right">
                                    <option value="0">علامة</option>
                                    @if ($companies == null)
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
                            <div class="form-group col-md-2">
                                <select wire:model="category" class="form-control font text-right" >
                                    <option value="0"> اختر الموديل</option>
                                    @if ($company_modules != null || $company_modules != 0)
                                        @foreach ($company_modules as $mode)
                                            <option value="{{ $mode->id }}">{{ $mode->categotie }}</option>
                                        @endforeach
                                    @else
                                    <option>اختر علامة</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='add' class="btn btn-primary ">اضافة</button>
                            </div>
                        @endif
                    </div>
                </div>
                @if ($model->count() == 0)
                    <div class="w-100 text-right">
                        <div class="alert alert-danger " role="alert">
                            <p class="txet-center">لا يوجد اي فئات</p>
                        </div>
                    </div>
                @else
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">رقم الفئة</th>
                                        <th class="wd-15p border-bottom-0">اسم الفئة</th>
                                        <th class="wd-15p border-bottom-0">الموديل</th>
                                        <th class="wd-15p border-bottom-0">من علامة</th>
                                        <th class="wd-15p border-bottom-0"> العمليات </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($model as $model_car)
                                    <tr>
                                        <td>{{ $model_car->id }}</td>
                                        <td>{{ $model_car->name_car }}</td>
                                        <td>{{ $model_car->category->categotie }}</td>
                                        <td>{{ $model_car->company->companey }}</td>
                                        <td>
                                            <button wire:click='edit({{ $model_car->id }})' type="button" class="btn btn-success">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <button wire:click='delete({{ $model_car->id }})' class="btn btn-danger ">
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
