<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "BikeShop | จําหน่ายอะไหล่จักรยานออนไลน์")</title>
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <script src="{{ asset('vendor/js/angular.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery-3.5.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/toastr-master/build/toastr.min.css') }}">
    <script src="{{ asset('vendor/toastr-master/build/toastr.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}">
    
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">BikeShop</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('home')}}">หน้าแรก</a></li>
                    <li><a href="{{ URL::to('product') }}">ข้อมูลสินค้า</a></li>
                    <li><a href="{{ URL::to('category') }}">ข้อมูลประเภทสินค้า</a></li>
                    <li><a href="#">รายงาน</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href={{ URL::to('/cart/view') }}><i class="fa fa-shopping-cart"></i> ตะกร้า 
                    <span class="label label-danger">
                        @if (Session::has('cart_items')){
                            {{ count(Session::get('cart_items')) }}
                        }
                            
                        @else{
                           {{ count(array()) }}
                        }
                        @endif
                    </a></li>
                    </span>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    @if (session('msg'))
        @if (session('ok'))
            <script>
                toastr.success("{{ session('msg') }}")
            </script>
        @else
            <script>
                toastr.error("{{ session('msg') }}")
            </script>
        @endif
    @endif
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
    

</body>

</html>
