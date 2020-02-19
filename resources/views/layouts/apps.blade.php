<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset("css/root.css")}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/footer.css")}}">
    <link rel="stylesheet" href="{{asset("css/nav.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HMPD FKUB</title>
</head>

<body>
    @include('inc.navbar')
    @yield('body')
    @include('inc.footer')
    @yield('custom_script')
</body>

<script src="https://kit.fontawesome.com/5a91d5d98c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>
