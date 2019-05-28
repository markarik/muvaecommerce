<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/matrix-login.css')}}" />
        <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>

        @yield('content')

    {{-- script --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>  
    <script src="{{asset('js/matrix.login.js')}}"></script> 
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
    @yield('script')

</body>
</html>