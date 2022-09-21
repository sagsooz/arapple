@extends('admin.layouts.app')
@section('title', 'لیست دسترسی ها')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">دسترسی های فعال</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 120px;">
                            <a href="{{ route('myshell.create') }}">
                            <button type="button" class="btn btn-sm btn-block btn-success btn-lg">افزودن دسترسی</button>
                          </a>
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
                                <th>شل</th>
                            </tr>

                            @foreach ($access as $acces)
                                @if ($acces->active == 1)
                                <tr>
                                    <td>{{ $acces->id }}</td>
                                    <td>{{ $acces->sitename }}</td>
                                    <td><span class="badge badge-success">فعال</span></td>
                                    <td><input type="text" value="{{ $acces->link }}"></td>
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


                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>آیدی</th>
                                <th>وبسایت</th>
                                <th>وضعیت</th>
                                <th>شل</th>
                            </tr>
     
                            @foreach ($access as $acces)
                                @if ($acces->active == 0)
                                <tr>
                                    <td>{{ $acces->id }}</td>
                                    <td>{{ $acces->sitename }}</td>
                                    <td><span class="badge bg-danger">غیرفعال</span></td>
                                    <td><input type="text" value="{{ $acces->link }}"></td>
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
