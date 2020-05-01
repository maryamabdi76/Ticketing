@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">فیلم ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item active">فیلم ها</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12">
{{-- <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12"> --}}
                <div class="card text-right">
                    {{-- <div class="card-header">Movie</div> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <p data-placement="top" data-toggle="tooltip" title="">
                                    <a href="/createMovie" class="btn btn-primary " >
                                    <span class="fa fa-plus"></span> اضافه کردن
                                    </a>
                                </p>
                                <table class="d-table table text-center table-bordred table-striped">
                                    <thead>
                                        {{-- <th><input type="checkbox" class="checkthis" /></th> --}}
                                        <th>آیدی</th>
                                        <th>عکس</th>
                                        <th>نام فیلم</th>
                                        <th>ژانر</th>
                                        <th>تاریخ نمایش</th>
                                        <th>عملیات</th>
                                    </thead>
                                    <tbody>
                                        @foreach($movie as $k=>$v)
                                        <tr>
                                        {{-- <td><input type="checkbox" class="checkthis" /></td> --}}
                                        <td>{{$v->id}}</td>
                                        <td><img class="img-fluid" width="150px" src="{{asset('/').$v->Images()->get()->first()->path}}" alt="" /></td>
                                        <td>{{$v->name}}</td>
                                        <td>
                                            @foreach($v->genres as $genre)
                                            {{$genre->name}}
                                            @endforeach
                                        </td>
                                        <td>{{$v->date}}</td>
                                        <td>
                                            <a href="/showMovie/{{$v["id"]}}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Show">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <a href="/editMovie/{{$v["id"]}}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="ویرایش">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/deleteMovie/{{$v["id"]}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            <div class="clearfix"></div>
                        </div>
                    </div>
	            </div>
            </div>
    </div>
</div>

</section>
@endsection
