{!! QrCode::size(150)->generate('https://scweek60.herokuapp.com/checkin/'.$people->id) !!}
<br>
ID : {{$people->id}}<br>
Name : {{$people->firstname}}
