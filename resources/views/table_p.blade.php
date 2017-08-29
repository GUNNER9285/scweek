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
        <th>Date/Time</th>
        <th>หมายเเหตุ</th>
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
            <td>{{$people->created_at}}</td>
            <td>
                <a href="{{ url('/edit/'.$people -> id) }}"  class="btn btn-warning btn-block">Edit</a>
                {{ Form::model($people,['url' => '/destroy/'.$people->id, 'method' => 'delete']) }}
                    <button class = 'btn btn-danger btn-block' type="submit">
                        Delete
                    </button>
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>