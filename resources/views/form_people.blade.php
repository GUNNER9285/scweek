{{ Form::label('firstname', 'ชื่อ')}}
&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;{{ Form::text('firstname') }}
<br>
{{ Form::label('lastname', 'นามสกุล')}}
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Form::text('lastname') }}
<br>
{{ Form::label('gender', 'เพศ')}}<br>
{{ Form::radio('sex', 'male') }} ชาย <br>
{{ Form::radio('sex', 'female') }} หญิง
<br>
{{ Form::label('age', 'อายุ')}}
&emsp;&emsp;&nbsp;&nbsp;&nbsp;{{ Form::text('age') }}
<br>
{{ Form::label('job', 'อาชีพ')}}
&emsp;&emsp;{{ Form::text('job') }}
<br><br>
{{Form::submit($submitBtn)}}