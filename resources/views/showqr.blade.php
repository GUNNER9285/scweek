

<!doctype html>
<html lang="{{ config('app.locale') }}">

<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
<script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Computer Department Register</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<style>
    body {
        background-color: #f8941d;
    }
</style>
<body>

<br><br>

<div class = "jumbotron" style="background-color: white">
    <div class="text-center">
        <h1> QR Code </h1>
        <br>
            <div id="print">
            {!! QrCode::size(150)->generate($people->id) !!}
            <br>
            ID : {{$people->id}}<br>
            ชื่อ : {{$people->firstname}}<br>
            นามสกุล : {{$people->lastname}}<br>
            </div><br>
        <button onclick="printDiv('print')" type="button" class="btn btn-warning">Print QR</button>
        <a href="/" class="btn btn-warning">Done</a>
    </div>
</div>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
</body>
</html>

