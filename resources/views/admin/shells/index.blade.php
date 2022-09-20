@extends('admin.layouts.app')
@section('title', 'شل ها')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">

        <div class="card-header">
          
          <h3 class="card-title">شل های موجود</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 120px;">
              <a href="{{ route('shells.create') }}">
              <button type="button" class="btn btn-sm btn-block btn-success btn-lg">افزودن شل</button>
            </a>
            </div>

            
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tbody><tr>
              <th>آیدی</th>
              <th>نام شل</th>
              <th>عملیات</th>
            </tr>


@foreach ($shells as $shell)
              <tr>
              <td>{{ $shell->id }}</td>
              <td>{{ $shell->name }}</td>
              <td>
                <a class="btn btn-app" href="{{ route('shells.edit',$shell->id) }}">
                <i class="fa fa-edit"></i> ویرایش
              </a>
            </td>

            </tr>
@endforeach




  


          </tbody></table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
