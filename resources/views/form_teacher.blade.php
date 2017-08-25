{{ Form::text('firstname',null,['placeholder'=>' ชื่อ', 'style'=>'border-radius: 12px; margin-top:1%; width:80%']) }}
<br>
{{ Form::text('lastname',null,['placeholder'=>' นามสกุล', 'style'=>'border-radius: 12px; margin-top:1%; width:80%'] )}}
<br>
{{ Form::label('gender', 'เพศ')}}<br>
{{ Form::radio('gender', 'male') }} ชาย <br>
{{ Form::radio('gender', 'female') }} หญิง
<br>
{{ Form::text('school',null,['placeholder'=>' สถานศึกษา', 'style'=>'border-radius: 12px; margin-top:1%; width:80%'] )}}
<br>
&nbsp;&nbsp;{{ Form::select('class', ['P1' => 'อนุบาล 1', 'P2' => 'อนุบาล 2','P3' => 'อนุบาล 3',
                                        'G1' => 'ประถมศึกษาชั้นปีที่ 1', 'G2' => 'ประถมศึกษาชั้นปีที่ 2', 'G3' => 'ประถมศึกษาชั้นปีที่ 3',
                                        'G4' => 'ประถมศึกษาชั้นปีที่ 4','G5' => 'ประถมศึกษาชั้นปีที่ 5', 'G6' => 'ประถมศึกษาชั้นปีที่ 6',
                                        'G7' => 'มัธยมศึกษาปีที่ 1','G8' => 'มัธยมศึกษาปีที่ 2', 'G9' => 'มัธยมศึกษาปีที่ 3',
                                        'G10' => 'มัธยมศึกษาปีที่ 4','G11' => 'มัธยมศึกษาปีที่ 5','G12' => 'มัธยมศึกษาปีที่ 6',
                                        'B1' => 'ปริญญาตรี', 'B2' => 'ปริญญาโท', 'B3' => 'ปริญญาเอก'
], null, ['placeholder' => ' ระดับการศึกษา', 'style'=>'border-radius: 12px; width:20%'])}}
<br>
{{ Form::text('count', null, ['placeholder' => ' จำนวนนักเรียนที่พามา', 'style'=>'border-radius: 12px; margin-top:1%; width:80%'] )}}
<br><br>
{{Form::submit($submitBtn)}}