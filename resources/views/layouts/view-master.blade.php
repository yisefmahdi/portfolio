<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="سيارات سيارات مستعمله اعلانات الجزائر
    new
    new cars: prix-du-neuf
    mark: prix-mark-algerie
    model: prix-model-algerie (from search)
    version: prix-mark-model-version-algerie
    used
    used: prix-voitures-occasion-algerie
    car: prix-mark-model-year-algerie

    news:
    domaine.com/news/جيلي_ترفع_من_حصتها_في_أستون_مارتن_إلى_
    ">
    <meta name="Author" content="سيارات سيارات مستعمله اعلانات الجزائر
    new
    new cars: prix-du-neuf
    mark: prix-mark-algerie
    model: prix-model-algerie (from search)
    version: prix-mark-model-version-algerie
    used
    used: prix-voitures-occasion-algerie
    car: prix-mark-model-year-algerie

    news:
    domaine.com/news/جيلي_ترفع_من_حصتها_في_أستون_مارتن_إلى_
    ">
    <meta name="Keywords" content="سيارات سيارات مستعمله اعلانات الجزائر
    new
    new cars: prix-du-neuf
    mark: prix-mark-algerie
    model: prix-model-algerie (from search)
    version: prix-mark-model-version-algerie
    used
    used: prix-voitures-occasion-algerie
    car: prix-mark-model-year-algerie

    news:
    domaine.com/news/جيلي_ترفع_من_حصتها_في_أستون_مارتن_إلى_
    "/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <!-- awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fonts.google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.view-header')
    @yield('content')
    @include('layouts.view-footer')
    @yield('js')
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/header.js') }}"></script>
    <script src="{{ asset('asset/js/footer.js') }}"></script>
</body>
</html>
