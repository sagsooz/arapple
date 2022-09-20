@extends('admin.layouts.app')
@section('title', 'لیست دسترسی ها')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">دسترسی های فعال</h3>

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
                        <tbody>
                            <tr>
                                <th>آیدی</th>
                                <th>وبسایت</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>

                            @foreach ($access as $acces)
                                @if ($acces->active == 1)
                                <tr>
                                    <td>{{ $acces->id }}</td>
                                    <td>{{ $acces->sitename }}</td>
                                    <td><span class="badge badge-success">فعال</span></td>
                                    <td>ویرایش</td>
                                </tr>      
                                @endif

                            @endforeach



                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
{{-- dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">دسترسی های غیرفعال</h3>

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
                        <tbody>
                            <tr>
                                <th>آیدی</th>
                                <th>وبسایت</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
     
                            @foreach ($access as $acces)
                                @if ($acces->active == 0)
                                <tr>
                                    <td>{{ $acces->id }}</td>
                                    <td>{{ $acces->sitename }}</td>
                                    <td><span class="badge bg-danger">غیرفعال</span></td>
                                    <td>ویرایش</td>
                                </tr>      
                                @endif
                            @endforeach



                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
