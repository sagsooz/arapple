@extends('admin.layouts.app')
@section('title', 'ویرایش شل')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">ویرایش شل</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="{{ route('shells.update',$shellname->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">نام شل</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $shellname->name }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">نمونه کد</label>
            <textarea class="form-control" name="title" placeholder="<title>Shell Name</title>">{{ $shellname->title }}</textarea>
          </div>



        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  

  </div>
@endsection