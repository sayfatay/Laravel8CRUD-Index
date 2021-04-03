@extends('posts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Edit Post</h2>
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


<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
        
        <div class="col-md-12">
            <div class="form-group">
                <strong>รหัสนักศึกษา</strong>
                <input type="text" name="main_id" value="{{ $post->main_id }}" class="form-control" placeholder="Enter Title" readonly>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ชื่อ</strong>
                <input type="text" name="fname" value="{{ $post->fname }}" class="form-control" placeholder="Enter Title" readonly>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>นามสกุล</strong>
                <input type="text" name="lname" value="{{ $post->lname }}" class="form-control" placeholder="Enter Title" readonly >
            </div>
        </div>


            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="subject"  value="{{ $post->subject }}" required>
              
                <option value=''>---กรุณาเลือก---</option>
                <option value='1' {{$post->subject == 1 ? 'selected' : '' }}>ภาษาไทย</option>
                <option value='2' {{$post->subject == 2 ? 'selected' : '' }} >ภาษาอังกฤษ</option>
                <option value='3' {{$post->subject == 3 ? 'selected' : '' }}>คณิตศาสตร์</option>
                <option value='4' {{$post->subject == 4 ? 'selected' : '' }}>วืทยาศาสตร์</option>
                <option value='5' {{$post->subject == 5 ? 'selected' : '' }}>สังคมศาสตร์</option>
                </select>
            </div>
            
            <div class="form-inline" action="/action_page.php">
                <label for="email">คะเเนน:: </label>
                <input type="text" class="form-control" placeholder="Enter ข้อมูล" name='score' id='score' value="{{ $post->score }}" >
                <label for="pwd">เกรด:: </label>
                <input type="text" class="form-control" placeholder="Enter ข้อมูล" name='grade' id='grade' value="{{ $post->grade }}" readonly>
                <div class="form-check">
                </div>
                <button  onclick="myFunction()" type="button"  class="btn btn-primary">คำนาณ</button>
            </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success my-3" id='dtn_submit' >Update</button>
        </div>
    </div>
</form>

<script>
document.getElementById("dtn_submit").disabled = true;
//เอา id dtn_submit เเล้วปิดปุ่ม

function myFunction() {

  var namber = document.getElementById("score").value;

if(namber==''){
   alert('กรุณากรอกข้มูลคะเเนน');
   document.getElementById("dtn_submit").disabled = true;
   //เอา id dtn_submit เเล้วปิดปุ่ม
}else{
    if(namber>=80){
        greeting = "A";
    }else if (namber >=75) {
        greeting = "B+";
    }else if (namber >= 70) {
        greeting = "B";
    }else if (namber >= 65) {
        greeting = "C+";
    }else if (namber >= 60) {
        greeting = "C";
    }else if (namber >= 55) {
        greeting = "D+";
    }else if (namber >= 50) {
        greeting = "D";
    }else if (namber <= 49) {
        greeting = "ไม่ผ่าน";
    }
    document.getElementById("grade").value = greeting

    document.getElementById("dtn_submit").disabled = false;
    //เอา id dtn_submit เเล้วเปิด
}


}
</script>

@endsection