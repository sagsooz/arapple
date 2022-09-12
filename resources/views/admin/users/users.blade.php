@extends('admin.layouts.app')
@section('title', 'کاربران')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">کاربران سایت</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tbody><tr>
              <th>شماره</th>
              <th>کاربر</th>
              <th>وضعیت</th>
              <th>ایمیل</th>
              <th>تغیرات</th>
            </tr>



            <tr>
              @php
              $users = App\Models\User::all(); 
              @endphp
              @foreach ($users as $user)
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
         
              <td><span class="badge badge-success">{{ $user->role }}</span></td>
              <td>{{ $user->email }}</td>
              <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-info">ویرایش</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -165px, 0px); top: 0px; left: 0px; will-change: transform;">
                      <a class="dropdown-item" href="#">ویرایش</a>
                      <a class="dropdown-item" href="#">حذف</a>
     
                    </div>
                  </div>
              </td>
              @endforeach



            </tr>


          </tbody></table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
