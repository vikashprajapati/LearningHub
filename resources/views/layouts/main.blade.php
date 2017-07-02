<!DOCTYPE html>
<html lang="en">
<head>
@include('partials._head')
</head>
<body>
@include('partials._navbar')
<a href="/newthread"class="create-thread btn btn-primary fa fa-plus"></a>
@yield('content')
@include('partials._javascript')
</body>
</html>
