@extends('posts.layout')

@section('content')

<div class="row mt-5">
    <div class="col-md-12">
        <h2>Show Post</h2>
        <a href="{{ route('posts.index') }}" class="btn btn-primary my-3">Back</a>
    </div>
</div>

    <div class="row">
        <div class="card">
            <div class="card-title">
                <strong>รหัสนักศึกษา</strong>
                {{ $post->main_id }}
            </div>
            <div class="card-title">
                <strong>ชื่อ</strong>
                {{ $post->fname }}
            </div>
            <div class="card-title">
                <strong>นามสกุล</strong>
                {{ $post->lname }}
            </div>
            <div class="card-title">
                <strong>วิชา</strong>
                @if ($post->subject == 1)
                    ภาษาไทย
                @elseif ($post->subject == 2)
                    ภาษาอังกฤษ
                @elseif ($post->subject == 3)
                    คณิตศาสตร์
                @elseif ($post->subject == 4)
                    วืทยาศาสตร์
                @elseif ($post->subject == 5)
                    สังคมศาสตร์ 
                @else
                   -
                @endif
            </div>
            <div class="card-title">
                <strong>คะเเนน</strong>
                {{ $post->score }}
            </div>
            <div class="card-title">
                <strong>เกรด</strong>
                {{ $post->grade }}
            </div>
        </div>
    </div>

     
@endsection