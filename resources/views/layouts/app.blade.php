<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Create</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>
</head>
<body>

<div id ="loader" class ="LoadingOverlay d-none">
    <div class="Line-Progress">
        <div class ="indeterminate"></div>
    </div>
</div>


<div id="app">
    @yield('content')
</div>
<script>


</script>

<script src="{{asset('js/bootstrap.bundle.js')}}"></script>

</body>
</html>
