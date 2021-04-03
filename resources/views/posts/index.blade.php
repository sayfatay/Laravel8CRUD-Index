@extends('posts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Laravel 8 CRUD - Index</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-success my-3" >Create new post</a>
        </div> 
    </div>

    @if($message = Session::get('success'))
       <div class= "alert alert-success">
           {{ $message }}
       </div>
    @elseif($message = Session::get('error'))
       <div class= "alert alert-danger">
           {{ $message }}
       </div>
    @endif


    <table class="table table-bordered">
        
        <tr>
            <th>ลำดับ</th>
            <th>รหัสนักศึกษา</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ( $data as $key => $value )
            <tr>
                <td>{{++$i}}</td>
                <td>{{$value->main_id}}</td>
                <td>{{Str::limit ($value->fname, 100) }}</td>
                <td>{{Str::limit ($value->lname, 100) }}</td>
                <td>
                    <form action="{{ route('posts.destroy',$value->id) }}" method="post">
                        <a href="{{ route('posts.show',$value->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('posts.edit',$value->id) }}" class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>     
        @endforeach


    </table>

    {!! $data->links() !!}
    
@endsection