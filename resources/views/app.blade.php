<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{config('app.name', 'APPVUE | CHECHEPECH') }}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
</head>
<body>
    <div id="app"></div>
    <!-- ------------- Scripts --------- -->
    <script type="text/javascript">
       {{-- var a = "{!! addslashes(json_encode($data)) !!}";
         console.log(JSON.parse(a)); --}}
        //fetch data of server controller ListingController
        window.server_data = "{!!addslashes(json_encode($data))!!}";
        window.csrf_token = "{{csrf_token()}}";
    </script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>