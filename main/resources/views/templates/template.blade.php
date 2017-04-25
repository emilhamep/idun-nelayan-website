<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') | Idun Nelayan</title>
    <link href="{{url('/')}}/main/resources/assets/semantic/dist/semantic.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{url('/')}}/main/resources/assets/images/nelayan.png"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        @yield('css')
    </style>
</head>
<body>
@yield('body')
<script type="text/javascript" src="{{url('/')}}/main/resources/assets/semantic/dist/jquery.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/main/resources/assets/jquery-ui/jquery-ui.min.js"></script>

<script type="text/javascript" src="{{url('/')}}/main/resources/assets/semantic/dist/semantic.js"></script>

<script type="text/javascript">
    var markerCuaca;
    $(document).ready(function(){
        @yield('jquery')

    });
    @yield('js')

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGVTDjbdv-tAi9FoYZ01TeGaeOUBfzcZs&callback=initMap"></script>
</body>
</html>
