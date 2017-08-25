<!doctype html>
<html lang="{{ config('app.locale') }}">

<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
<script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>

<script>
    $(document).ready(function(){
        $("#form_student").hide();
        $("#form_teacher").hide();
        $("#form_people").hide();
        $("#btn_student").click(function(){
            $("#form_student").fadeIn();
            $("#form_teacher").hide();
            $("#form_people").hide();
        });
        $("#btn_teacher").click(function(){
            $("#form_student").hide();
            $("#form_teacher").fadeIn();
            $("#form_people").hide();
        });
        $("#btn_people").click(function(){
            $("#form_student").hide();
            $("#form_teacher").hide();
            $("#form_people").fadeIn();
        });
    });
</script>
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
    <div class = "container">
        <div class="row">
            <br>
            <div class="btn-group btn-group-justified">
                <a class="btn btn-primary" id="btn_student">Student</a>
                <a class="btn btn-primary" id="btn_teacher">Teacher</a>
                <a class="btn btn-primary" id="btn_people">People</a>
            </div>
        </div>
    </div>
    <style type="text/css">
        .center_div {
            margin:auto;
            width:90%;
        }
    </style>
     <br><br>
    <div class="col-md-12">
        <div class="col-md-4"></div>
        <div class = "jumbotron col-md-4" id="form_student" style="background-color: white">
                <h1> Student </h1>
                <br>
                {{ Form::open(['url' => '/student']) }}
                    @include('form_student', ['submitBtn' => 'sign up'])
                {{ Form::close() }}
         </div>
        <div class = "jumbotron col-md-4" id="form_teacher" style="background-color: white">
                <h1> Teacher </h1>
                <br>
                {{ Form::open(['url' => '/teacher']) }}
                    @include('form_teacher', ['submitBtn' => 'sign up'])
                {{ Form::close() }}
        </div>
        <div class = "jumbotron col-md-4" id="form_people" style="background-color: white">
                <h1> People </h1>
                <br>
                {{ Form::open(['url' => '/people']) }}
                    @include('form_people', ['submitBtn' => 'sign up'])
                {{ Form::close() }}
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>
