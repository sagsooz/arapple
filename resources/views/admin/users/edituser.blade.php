@extends('admin.layouts.app')
@section('title' , 'Edit User')


@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">ویرایش کاربر</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
      <div class="card-body">
        <label for="exampleInputPassword1">Email</label>
        <div class="input-group mb-3">
          
          <div class="input-group-prepend">
            
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="{{ $user->email }}" value="{{ $user->email }}" disabled="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" class="form-control" placeholder="{{ $user->name }}" value="{{ $user->name }}">
        </div>
   








        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
    </form>
  </div>
  @endsection