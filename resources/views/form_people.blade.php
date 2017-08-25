{{ Form::text('firstname',null,['placeholder'=>' ชื่อ', 'style'=>'border-radius: 12px; margin-top:1%; width:80%']) }}
<br>
{{ Form::text('lastname',null,['placeholder'=>' นามสกุล', 'style'=>'border-radius: 12px; margin-top:1%; width:80%']) }}
<br>
{{ Form::label('gender', 'เพศ')}}<br>
{{ Form::radio('sex', 'male') }} ชาย <br>
{{ Form::radio('sex', 'female') }} หญิง
<br>
{{ Form::text('age',null,['placeholder'=>' อายุ', 'style'=>'border-radius: 12px; margin-top:1%; width:80%']) }}
<br>
{{ Form::text('job',null,['placeholder'=>' อาชีพ', 'style'=>'border-radius: 12px; margin-top:1%; width:80%']) }}
<br><br>
{{Form::submit($submitBtn)}}