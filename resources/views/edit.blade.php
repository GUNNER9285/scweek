

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
<div class="col-md-12">
    <div class="col-lg-4"></div>
    <div class = "jumbotron col-lg-4" style="background-color: white">
        {{ Form::model($people,['url' => '/edit/'.$people->id.'/success', 'method' => 'patch']) }}
            {{ Form::text('firstname',null,['placeholder'=>' ชื่อ', 'style'=>'border-radius: 12px;  margin-top:1%; width:80%'])}}
            <br>
            {{ Form::text('lastname',null,['placeholder'=>' นามสกุล', 'style'=>'border-radius: 12px; margin-top:1%; width:80%']) }}
            <br>
            {{ Form::label('gender', 'เพศ',['style'=>'text-align: left'])}}<br>
            {{ Form::radio('gender', 'male') }} ชาย <br>
            {{ Form::radio('gender', 'female') }} หญิง
            <br>
            {{ Form::text('age',null,['placeholder'=>' อายุ', 'style'=>'border-radius: 12px; margin-top:1%; width:80%']) }}

            <br>
            {{ Form::text('school',null,['placeholder'=>' สถานศึกษา' ,'id'=>'tags' , 'style'=>'border-radius: 12px; margin-top:1%; width:80%', ]) }}
            <br>
            {{ Form::select('class', ['P1' => 'อนุบาล 1', 'P2' => 'อนุบาล 2','P3' => 'อนุบาล 3',
                                                    'G1' => 'ประถมศึกษาชั้นปีที่ 1', 'G2' => 'ประถมศึกษาชั้นปีที่ 2', 'G3' => 'ประถมศึกษาชั้นปีที่ 3',
                                                    'G4' => 'ประถมศึกษาชั้นปีที่ 4','G5' => 'ประถมศึกษาชั้นปีที่ 5', 'G6' => 'ประถมศึกษาชั้นปีที่ 6',
                                                    'G7' => 'มัธยมศึกษาปีที่ 1','G8' => 'มัธยมศึกษาปีที่ 2', 'G9' => 'มัธยมศึกษาปีที่ 3',
                                                    'G10' => 'มัธยมศึกษาปีที่ 4','G11' => 'มัธยมศึกษาปีที่ 5','G12' => 'มัธยมศึกษาปีที่ 6',
                                                    'B1' => 'ปริญญาตรี', 'B2' => 'ปริญญาโท', 'B3' => 'ปริญญาเอก'
            ], null, ['placeholder' => ' ระดับการศึกษา', 'style'=>'border-radius: 12px; margin-top:1%; width:80%'])}}
            {{ Form::text('count', null, ['placeholder' => ' จำนวนนักเรียนที่พามา', 'style'=>'border-radius: 12px; margin-top:1%; width:80%'] )}}
            <br>
            {{ Form::text('job',null,['placeholder'=>' อาชีพ', 'style'=>'border-radius: 12px; margin-top:1%; width:80%']) }}
             <br><br>
            {{Form::submit('Finish')}}
        {{ Form::close() }}
    </div>
    <div class ="col-lg-4"></div>
</div>
</body>
</html>

