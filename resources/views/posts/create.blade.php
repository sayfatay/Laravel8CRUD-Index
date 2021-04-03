@extends('posts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Add new post</h2>
            <a href="{{ route('posts.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            There were some problems with your input. <br><br>
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div> 
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="row">
            
            <div class="col-md-12">
                <div class="form-group">
                    <strong>main_id</strong>
                    <input type="text" name="main_id" class="form-control" placeholder="Enter main_id">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>fname</strong>
                    <textarea class="form-control" style="height: 150px" name="fname" placeholder="Enter fname"></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>lname</strong>
                    <textarea class="form-control" style="height: 150px" name="lname" placeholder="Enter lname"></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-success my-3">Submit</button>
            </div>

        </div>
    </form>

@endsection