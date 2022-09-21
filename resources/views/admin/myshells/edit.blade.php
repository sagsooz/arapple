@extends('admin.layouts.app')
@section('title', 'ویرایش دسترسی')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ویرایش دسترسی</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" action="{{ route('myshell.update',$myshells->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام سایت</label>
                        <input type="text" class="form-control" name="sitename" value="{{ $myshells->sitename }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">لینک دسترسی</label>
                        <input type="text" class="form-control" name="link" value="{{ $myshells->link }}">
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
