@extends('admin.layouts.app')
@section('title', 'افزودن دسترسی')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">افزودن دسترسی</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" action="{{ route('myshell.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام سایت</label>
                        <input type="text" class="form-control" name="name" placeholder="google.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">لینک دسترسی</label>
                        <input type="text" class="form-control" name="name" placeholder="http://google.com/img/shell.php">
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
