@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">Dashboard</h1>
                        <a href="{{route('admin.categories.edit', $tag->id)}}" class="text-success"><i class="fas fa-pen"></i></a>
{{--                        <a href="{{route('admin.categories.delete', $tag->id)}}" class="text-danger ml-2"><i class="far fa-trash-alt"></i></a>--}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid" style="text-align: center;">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-4" >
                        <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">{{$tag->title}}</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <div class="position-relative p-3 bg-gray" style="height: 180px;">
                                            <div class="ribbon-wrapper ribbon-lg">
                                                <div class="ribbon bg-info">
                                                    Тэг №{{$tag->id}}
                                                </div>
                                            </div>
                                            {{$tag->title}} <br>
                                            <small>{{($tag->created_at)->format("F j, Y")}}</small>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
