{{ Form::label('firstname', 'ชื่อ')}}
&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;{{ Form::text('firstname') }}
<br>
{{ Form::label('lastname', 'นามสกุล')}}
&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;{{ Form::text('lastname') }}
<br>
{{ Form::label('gender', 'เพศ')}}<br>
{{ Form::radio('sex', 'male') }} ชาย <br>
{{ Form::radio('sex', 'female') }} หญิง
<br>
{{ Form::label('school', 'สถานศึกษา')}}
&emsp;&emsp;{{ Form::text('school') }}
<br>
{{ Form::label('class','ระดับการศึกษา')}}
&nbsp;&nbsp;
{{ Form::select('class', ['P1' => 'อนุบาล 1', 'P2' => 'อนุบาล 2','P3' => 'อนุบาล 3',
                                        'G1' => 'ประถมศึกษาชั้นปีที่ 1', 'G2' => 'ประถมศึกษาชั้นปีที่ 2', 'G3' => 'ประถมศึกษาชั้นปีที่ 3',
                                        'G4' => 'ประถมศึกษาชั้นปีที่ 4','G5' => 'ประถมศึกษาชั้นปีที่ 5', 'G6' => 'ประถมศึกษาชั้นปีที่ 6',
                                        'G7' => 'มัธยมศึกษาปีที่ 1','G8' => 'มัธยมศึกษาปีที่ 2', 'G9' => 'มัธยมศึกษาปีที่ 3',
                                        'G10' => 'มัธยมศึกษาปีที่ 4','G11' => 'มัธยมศึกษาปีที่ 5','G12' => 'มัธยมศึกษาปีที่ 6',
                                        'B1' => 'ปริญญาตรี', 'B2' => 'ปริญญาโท', 'B3' => 'ปริญญาเอก'
])}}
<br><br>
{{Form::submit($submitBtn)}}