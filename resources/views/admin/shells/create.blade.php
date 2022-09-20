@extends('admin.layouts.app')
@section('title', 'اضافه کردن شل')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">افزودن شل</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" action="{{ route('shells.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام شل</label>
                        <input type="text" class="form-control" name="name" placeholder="نام شل">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">نمونه کد</label>
                        <textarea class="form-control" name="title" placeholder="<title>Shell Name</title>"></textarea>
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
