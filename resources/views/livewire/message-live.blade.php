<div class="row">
    <!-- secren phone -->
    <div class="footersidber w-100 " style="height: 100%;">
        <ul class="ul_sidebar ">
            <li>
                <a href="{{ route('view.allcar') }}" class="text-white">جديد</a>
            </li>
            <li>
                <a href="{{ route('view_all_car') }}" class="text-white">مستعمل</a>
            </li>
            <li>
                <a href="{{ route('view.news') }}" class="text-white"> السيارت اخبار</a>
            </li>
            <li>
                <a href="#" class="text-white">قاعات العرض</a>
            </li>
            <button wire:click='open' class="dropdown-btn mt-2">
                    تواصل معنا
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="text-success mr-3" wire:loading wire:target='open'>
                <span>
                من فضلك انتظر قليلا
                <i class="fa fa-spinner fa-spin"></i></span>
            </div>
            @if ($ch_open == true)
                <div>
                    <li class="p-0 m-1">
                        <input wire:model='email' class="form-control text-right" type="email" placeholder="البريد الالكتروني">
                    </li>
                    <li class="p-0 m-1">
                        <textarea wire:model='text' class="form-control text-right " rows="2" placeholder="اكتب رسالتك"></textarea>
                    </li>
                    <li class="p-0 m-1">
                        <button wire:click='add_message' class="btn btn-orange">ارسال</button>
                    </li>
                    <li>
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
                    </li>
                </div>
            @endif
        </ul>
    </div>
    <div class="col-md-12">
        <table class="table text-right text-white mt-3">
            <thead>
                <tr>
                <th scope="col">تواصل معنا</th>
                <th scope="col">عن شركة</th>
                <th scope="col">خدمات</th>
                <th scope="col">روابط سريعة</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">
                    <input wire:model='email' class="form-control text-right font" type="email" placeholder="البريد الالكتروني">
                </th>
                <td>عن موقعنا</td>
                <td><b>بيع سيارتك على موقعنا</b></td>
                <td><a href="{{ route('view.allcar') }}" class="text-white">جديد</a></td>
                </tr>
                <tr>
                <th scope="row">
                    <textarea wire:model='text' class="form-control text-right font" rows="2" placeholder="اكتب رسالتك"></textarea>
                </th>
                <td></td>
                <td>بيع سيارتك على الفيسبوك</td>
                <td><a href="{{ route('view_all_car') }}" class="text-white">مستعمل</a></td>
                </tr>
                <tr>
                <th scope="row">
                    <button wire:click='add_message' class="btn btn-orange float-left" >ارسال</button>
                </th>
                <td>
                </td>
                <td></td>
                <td>
                    <a href="{{ route('view.news') }}"class="text-white">
                        <p style="margin-top: -20px;">اخبار السيارات</p>
                    </a>
                </td>
                </tr>
                <tr>
                <th scope="row">
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
                </th>
                <td></td>
                <td></td>
                <td >
                    <p style="margin-top: -20px;"> الوكلاء وقاعات العرض</p>
                </td>
                </tr>
            </tbody>
        </table>
        <div class=" text-media text-white">
            <b class="mr-2">تابعنا</b>
            <div class="footer-media mt-1">
                <div class="footer-icon">
                    <a href="{{ $setting->youtube }}" class="YouTube">
                        <svg id="YouTube-Icon-Full-Color-Logo.wine" xmlns="http://www.w3.org/2000/svg" width="25.432" height="17.918" viewBox="0 0 25.432 17.918">
                            <path id="Path_26938" data-name="Path 26938" d="M24.9,2.8A3.2,3.2,0,0,0,22.652.535C20.669,0,12.716,0,12.716,0S4.763,0,2.78.535A3.2,3.2,0,0,0,.531,2.8,33.526,33.526,0,0,0,0,8.959,33.528,33.528,0,0,0,.531,15.12,3.2,3.2,0,0,0,2.78,17.383c1.983.535,9.936.535,9.936.535s7.953,0,9.936-.535A3.2,3.2,0,0,0,24.9,15.12a33.521,33.521,0,0,0,.531-6.161A33.52,33.52,0,0,0,24.9,2.8" transform="translate(0 0)" fill="#2a3467"/>
                            <path id="Path_26939" data-name="Path 26939" d="M93.333,55.338l6.647-3.781-6.647-3.782Z" transform="translate(-83.218 -42.598)" fill="#fff"/>
                        </svg>
                    </a>
                </div>
                <div class="footer-icon">
                    <a href="{{ $setting->google }}" >
                        <svg id="Component_54_1" data-name="Component 54 – 1" xmlns="http://www.w3.org/2000/svg" width="23.472" height="23.473" viewBox="0 0 23.472 23.473">
                            <path id="Path_71246" data-name="Path 71246" d="M11.736,0A11.736,11.736,0,1,1,0,11.736,11.736,11.736,0,0,1,11.736,0Z" fill="#2a3467"/>
                            <g id="Google_plus" data-name="Google plus" transform="translate(4.856 4.856)">
                                <rect id="Rectangle_121" data-name="Rectangle 121" width="13.76" height="13.76" fill="none"/>
                                <path id="Path_51" data-name="Path 51" d="M13.166,3.621V4.855H11.932V6.089H10.7V4.773H9.463V3.621H10.7V2.386h1.234V3.621Zm-8.969,0h3.95c0,.247.082.411.082.658A3.866,3.866,0,0,1,4.2,8.393,4.2,4.2,0,1,1,4.2,0a4.063,4.063,0,0,1,2.8,1.07L5.842,2.222A2.194,2.194,0,0,0,4.2,1.563,2.651,2.651,0,0,0,1.563,4.2,2.6,2.6,0,0,0,4.2,6.83,2.242,2.242,0,0,0,6.583,5.02H4.2Z" transform="translate(0 2.469)" fill="#fff" fill-rule="evenodd"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="footer-icon">
                    <a href="{{ $setting->twiter }}">
                        <svg id="Component_53_1" data-name="Component 53 – 1" xmlns="http://www.w3.org/2000/svg" width="23.472" height="23.473" viewBox="0 0 23.472 23.473">
                            <path id="Path_71694" data-name="Path 71694" d="M11.736,0A11.736,11.736,0,1,1,0,11.736,11.736,11.736,0,0,1,11.736,0Z" fill="#2a3467"/>
                            <g id="Twitter" transform="translate(4.856 4.856)">
                                <rect id="Rectangle_1457" data-name="Rectangle 1457" width="13.76" height="13.76" transform="translate(0)" fill="none"/>
                                <path id="Path_2" data-name="Path 2" d="M42.169,12.679A7.612,7.612,0,0,0,49.85,5V4.633a5.946,5.946,0,0,0,1.317-1.39,6.072,6.072,0,0,1-1.536.439A2.846,2.846,0,0,0,50.8,2.219a6.709,6.709,0,0,1-1.682.658A2.612,2.612,0,0,0,47.143,2a2.748,2.748,0,0,0-2.706,2.706,1.426,1.426,0,0,0,.073.585,7.562,7.562,0,0,1-5.559-2.853,2.8,2.8,0,0,0-.366,1.39A2.906,2.906,0,0,0,39.755,6.1a2.466,2.466,0,0,1-1.243-.366h0a2.673,2.673,0,0,0,2.194,2.633,2.255,2.255,0,0,1-.731.073,1.245,1.245,0,0,1-.512-.073,2.771,2.771,0,0,0,2.56,1.9,5.523,5.523,0,0,1-3.365,1.17A2.025,2.025,0,0,1,38,11.363a6.9,6.9,0,0,0,4.169,1.317" transform="translate(-38 -0.354)" fill="#fff" fill-rule="evenodd"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="footer-icon">
                    <a href="{{ $setting->facebook }}">
                        <svg id="Component_52_1" data-name="Component 52 – 1" xmlns="http://www.w3.org/2000/svg" width="23.431" height="23.432" viewBox="0 0 23.431 23.432">
                            <path id="Path_26955" data-name="Path 26955" d="M11.716,0A11.716,11.716,0,1,1,0,11.716,11.716,11.716,0,0,1,11.716,0Z" fill="#2a3467"/>
                            <g id="Facebook" transform="translate(4.856 4.856)">
                                <rect id="Rectangle_1458" data-name="Rectangle 1458" width="13.76" height="13.76" fill="none"/>
                                <path id="Path_1" data-name="Path 1" d="M84.462,13.166v-6H86.51L86.8,4.828H84.462V3.365c0-.658.219-1.17,1.17-1.17h1.243V.073C86.583.073,85.852,0,85.047,0a2.824,2.824,0,0,0-3,3.072V4.828H80V7.168h2.048v6Z" transform="translate(-76.708)" fill="#fff" fill-rule="evenodd"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
