<!DOCTYPE html>
<html lang="en">
<head>
    <title>scweek60 member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <h2>ผู้เข้าชมงานทั้งหมด</h2>
        </div>
        <div class="col-md-6 text-right" style="padding: 1%;">
            <a href="{{url('/showroom/1')}}" class="btn btn-info">Room 1</a>
            <a href="{{url('/showroom/2')}}" class="btn btn-info">Room 2</a>
            <a href="{{url('/showroom/3')}}" class="btn btn-info">Room 3</a>
            <a href="{{url('/showmember')}}" class="btn btn-info">All</a>
        </div>
    </div>
    <p>ผู้เข้าชมงานสัปดาห์วิทยาศาสตร์ประจำปี 2560 คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร</p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Gender</th>
            <th>Age</th>
            <th>School</th>
            <th>Class</th>
            <th>Job</th>
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
        @foreach($peoples as $people)
            <tr>
                <td>{{$people->id}}</td>
                <td>{{$people->firstname}}</td>
                <td>{{$people->lastname}}</td>
                <td>{{$people->gender}}</td>
                <td>{{$people->age}}</td>
                <td>{{$people->school}}</td>
                <td>{{$people->class}}</td>
                <td>{{$people->job}}</td>
                <td>{{$people->count}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
