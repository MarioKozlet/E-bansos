@include('loaders.css')
<body id="body-pd">
    @include('dashboard.layouts.sidebar')
    <!--Container Main start-->
    <div class="height-100">
        @yield('content')
    </div>
    <!--Container Main end-->
</body>
@include('loaders.js')