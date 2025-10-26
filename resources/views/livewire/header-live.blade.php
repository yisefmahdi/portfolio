<div>
    <!-- Header -->
    <header class="header_md">
        <nav class="fixed-top navbar-dark bg-white border p-2 text-dark">
            <div class="container p-1">
                <div class="row">
                    <div class="col-md-10 d-flex" >
                        <div class="mr-2 ml-2">
                            <a href="{{ route('createadv') }}" class="btn btn-success pl-2 pr-2 pt-1 pb-1 p-0">
                                <span class="d-flex mt-1">
                                    <h5>بيع سيارتك</h5>
                                    <span class="m-1"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="mt-2 d-flex">
                            @if (Auth()->user())
                            <a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="text-dark mr-3">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <div class="d-flex">
                                    <p class="p-sm"> خروج</p>
                                    <span class="m-1" >
                                        <i class="fa fa-sign-out " aria-hidden="true"></i>
                                    </span>
                                </div>
                            </a>
                            @endif

                            <a href="#" class="text-dark">
                                <div class="d-flex">
                                    @if (Auth()->user())
                                    <p class="p-sm">{{ Auth()->user()->name }}</p>
                                    @else
                                    <a href="{{ route('login') }}" class="text-dark"><p class="p-sm">تسجيل دخول</p></a>
                                    @endif
                                    <span class="m-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <!-- search -->
                        <div class="search ml-3" >
                            <div class="search_input">
                                <input wire:model='text_search' wire:click='search_click' wire:change='search_click'  class="form-control  w-100 text-right font" type="text" placeholder="...بحث في الماركة او الموديل">
                                <span class="search_span">
                                    @if ($ch_search == true)
                                    <a href="#" wire:click='clouse' class="dropbtn text-danger">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    </a>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                    @endif

                                </span>
                                @if ($ch_search == true)
                                    <div class="dropdown2">
                                        <div id="myDropdown2" class="dropdown-content2">
                                            @if ($requslt_search == null)
                                            @else
                                                @foreach ($requslt_search as $search)
                                                <a href="{{ route('view.companie', $search->id) }}">{{ $search->companey }}</a>
                                                @endforeach
                                            @endif
                                            @if ($modle_search == null)
                                               @else
                                               @foreach ($modle_search as $search)
                                                @foreach ($search->cars as $car)
                                                    <a href="{{ route('view.car', $car->id) }}">{{ $car->module_cars->name_car  }}</a>
                                                @endforeach
                                               @endforeach
                                            @endif
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="/">
                            <img src="https://www.contactcars.com/assets/images/navbar/navbar_logo.svg" width="105" height="40" alt="logo">
                        </a>
                    </div>
                    <!-- nav -->
                    <div class="col-md-12">
                        <nav class="nav ">
                            <ul class="mt-2">
                                @if (Auth()->user() && Auth()->user()->stutas == 1)
                                <li><a href="{{ route('dashboard.order') }}">لوحة تحكم</a></li>
                                @endif
                                @if (Auth()->user())
                                <li><a href="{{ route('my_adv_management') }}">اعلاناتي</a></li>
                                @endif
                                <li><a href="#">قاعات العرض</a></li>
                                <li><a href="{{ route('view.news') }}">اخبار السيارات</a></li>
                                <li><a href="{{ route('view_all_car') }}">مستعمل</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a href="#"  class="dropbtn">جديد</a>
                                        <div class="dropdown-content">
                                            <div class="row">
                                                @foreach ($companies as $company)
                                                    <div class="card m-2" style="width: 9rem;">
                                                        <a href="{{ route('view.companie',$company->id ) }}">
                                                            <div class="image-content">
                                                                <span class="overlay"></span>
                                                                <div class="card-image">
                                                                    <img src="{{ asset('images_car/'.$company->logo ) }}" alt="علامه">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <h2 class="name text-info"><b>{{ $company->companey }}</b></h2>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <header class="header_sm fixed-top">
        <div class="container-fluid">
            <div class="d-flex">
                <div class="col-9 d-flex">
                    <div class="mt-1">
                        <button wire:click='nav' class="btn mt-0 text-primary" onclick="openSidebar()">
                            <i class="fa fa-bars fa-" aria-hidden="true"></i>
                        </button>
                        @if ($nav_si == true)
                            <div class="w3-sidebar fixed-top" id="mySidebar">
                                <nav>
                                    <div class="container-fluid mt-2">
                                        <div class="row">
                                            <div class="col-sm-12 user_sm ">
                                                <div class="d-flex justify-content-between ">
                                                    <div class="p-2">
                                                        <button type="button" class="btn ">
                                                            <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">اغلاق X</span>
                                                        </button>
                                                    </div>
                                                    <div class="p-2">
                                                        <h5>القائمة</h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end mb-3">
                                                    <div class="p-2 d-flex user">
                                                        @if (Auth()->user())
                                                        <div class="m-2">
                                                            <a href="{{ route('login') }}" class="text-dark">{{ Auth()->user()->name }}</a>
                                                        </div>
                                                        {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzH6TfTtq91hzmeIvm_4JOdb5y1UWjTlYZdA&usqp=CAU" alt="user"> --}}
                                                        @else
                                                        <div class="m-2">
                                                            <a href="{{ route('login') }}" class="text-dark">تسجيل دخول</a>
                                                            /
                                                            <a href="{{ route('register') }}" class="text-dark">انشاء حساب</a>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt-3 w-100 div_ul_sidebar ">
                                                <ul class="ul_sidebar ">
                                                    <li>
                                                        <a href="#">جديد</a>
                                                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('view_all_car') }}">مستعمل</a>
                                                        <i class="fa fa-car" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('view.news') }}"> اخبار السيارات </a>
                                                        <i class="fa fa-newspaper-o ml-1" aria-hidden="true"></i>
                                                    </li>
                                                    @if (Auth()->user())
                                                    <li>
                                                        <a href="{{ route('my_adv_management') }}">اعلاناتي </a>
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </li>
                                                    @endif
                                                    @if (Auth()->user() && Auth()->user()->stutas == 1)
                                                    <li>
                                                        <a href="{{  route('dashboard.order')  }}">لوحة تحكم </a>
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 mt-3">
                                                <a href="{{ route('createadv') }}" class="btn btn-primary w-100">بيع سيارتك</a>
                                            </div>
                                        </div>
                                    </div>

                                </nav>
                            </div>
                        @endif
                    </div>
                    <div class="m-2">
                        <a href="{{ route('view.search') }}">
                            <span class="m-2 w-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search text-primary" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <a href="{{ route('createadv') }}">
                                <button type="button" class="btn-outline-orange d-flex">
                                        <p class="mt-1 ml-1 h5-orange">بيع سيارتك</p>
                                        <span class="span_btn"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="float-right header-sm-image">
                        <a href="{{ route('index_view') }}">
                            <img src="https://www.contactcars.com/assets/images/navbar/navbar_logo.svg" width="85" height="40" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
