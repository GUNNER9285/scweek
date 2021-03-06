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
            <h2>ผู้เข้าชมงาน ห้องที่ {{$id_room}}</h2>
        </div>
        <div class="col-md-6 text-right" style="padding: 1%;">
            <a href="{{url('/showroom/1')}}" class="btn btn-info">Room 1</a>
            <a href="{{url('/showroom/2')}}" class="btn btn-info">Room 2</a>
            <a href="{{url('/showroom/3')}}" class="btn btn-info">Room 3</a>
            <a href="{{url('/showmember')}}" class="btn btn-info">All</a>
        </div>
    </div>

    <p>ผู้เข้าชมงานสัปดาห์วิทยาศาสตร์ประจำปี 2560 คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร</p>
    @include('table_p',$peoples)
</div>

</body>
</html>
