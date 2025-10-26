<div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">اضافة ولاية</h4>
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
                            <div class="form-group col-md-10">
                                <input type="text" wire:model='stutes_name' class="form-control w-100" placeholder="ادخل اسم الولاية">
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='update_stutes' class="btn btn-success w-100">تعديل</button>
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='clouse_stutes' class="btn btn-danger w-100">الغاء </button>
                            </div>
                        @else
                            <div class="form-group col-md-11">
                                <input type="text" wire:model='stutes_name' class="form-control w-100" placeholder="ادخل اسم الولاية">
                            </div>
                            <div class="form-group col-md-1">
                                <button wire:click='add_stutes' class="btn btn-primary ">اضافة</button>
                            </div>
                        @endif
                    </div>
                </div>
                @if ($states->count() == 0)
                    <div class="w-100 text-right">
                        <div class="alert alert-danger " role="alert">
                            <p class="txet-center">لا يوجد اي ولايات</p>
                        </div>
                    </div>
                @else
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">رقم الولاية</th>
                                        <th class="wd-15p border-bottom-0">اسم الولايه</th>
                                        <th class="wd-15p border-bottom-0">عدد الاعلانات في الولاية</th>
                                        <th class="wd-15p border-bottom-0"> العمليات </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($states as $state)
                                    <tr>
                                        <td>{{ $state->id }}</td>
                                        <td>{{ $state->states }}</td>
                                        <td>{{ $state->cars->count() }}</td>
                                        <td>
                                            <button wire:click='edit({{ $state->id }})' type="button" class="btn btn-success">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <button wire:click='delete({{ $state->id }})' class="btn btn-danger ">
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
