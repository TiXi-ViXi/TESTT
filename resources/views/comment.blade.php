<h1>Reviews</h1>
    
@foreach($result as $key=>$row)
        <div >
            <h3>User: {{ $row->user }}</h3>
            <p>Comment: {{ $row->comment }}</p>
        </div>
        <td><a href="{{route('class.cmdelete',$row->id)}}" class = "btn btn-sm btn-danger">delete</a></td>
    @endforeach