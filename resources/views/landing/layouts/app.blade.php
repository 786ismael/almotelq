<!DOCTYPE html>
<html>
  
<head>
    @include('landing.layouts.head')
</head>

<body>
    <!--header-->
    <header>
        @include('landing.layouts.header')
    </header>
    <!--end-->
     
    @section('content')@show

    <!--footer-->
    <footer>
        @include('landing.layouts.footer')
    </footer>
    <!--end-->

    <!--script-->
    @include('landing.layouts.foot')


</body>
</html>