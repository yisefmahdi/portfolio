<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn2 {
  cursor: pointer;
}

.dropdown2 {
  position: relative;
  display: inline-block;
  width: 100%;
}

.dropdown-content2 {
  /* display: none; */
  position: absolute;
  background-color: #f1f1f1;
  top: -5px;
  right: -1px;
  width: 100%;
  max-height: 400px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align: right;
  border-radius: 5px;
  overflow-y: scroll;
}

.dropdown-content2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content2::-webkit-scrollbar {
    width: 10px;
    background: var(--bg-orange);
    border-radius: 0 5px 5px 0;
}

.dropdown-content2::-webkit-scrollbar-thumb {
    background: var(--text-lit);
    border-radius: 10px;
}


.dropdown-content2 a:hover {background-color: #ddd;}

.show {display:block;}
</style>
@livewireStyles()
</head>
<body>

<!-- secren phone -->
@livewire('header-live')
<!-- phone down-->
<div class="nav-sm ">
    <nav class=" fixed-bottom  bg-white">
        <div class="d-flex justify-content-center " style="margin-left: -10%;">
            <ul class="d-flex justify-content-center">
                <li class="nav-sm-item">
                    <a href="#">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <p>قاعات العرض</p>
                    </a>
                </li>
                <li class="nav-sm-item">
                    <a href="{{ route('view.news') }}">
                        <i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
                        <p>اخبار السيارات</p>
                    </a>
                </li>
                <li class="home">
                    <a href="{{ route('view.allcar') }}">
                        <span><i class="fa fa-bookmark fa-2x" aria-hidden="true"></i></span>
                        <p>جديد</p>
                    </a>
                </li>
                <li class="nav-sm-item">
                    <a href="{{ route('view_all_car') }}">
                        <span><i class="fa fa-car fa-2x" aria-hidden="true"></i></span>
                        <p>مستعمل</p>
                    </a>
                </li>
                <li class="nav-sm-item">
                    <a href="/">
                        <span> <i class="fa fa-home fa-2x" aria-hidden="true"></i></span>
                        <p>الرئيسية</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- // Header -->

@livewireScripts()

</body>
</html>
