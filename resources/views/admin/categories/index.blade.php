@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
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
            <div class="container-fluid">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Категории</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Название</th>
                                                <th class="text-center">Дата создания</th>
                                                <th class="text-center">Просмотреть</th>
                                                <th class="text-center">Изменить</th>
                                                <th class="text-center">Удалить</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td class="text-center">{{$category->id}}</td>
                                                    <td class="text-center">{{$category->title}}</td>
                                                    <td class="text-center">{{($category->created_at)->format("F j, Y")}}</td>
                                                    <td class="text-center"><a href="{{route('admin.categories.show', $category->id)}}"><i class="nav-icon fas fa-search"></i></a></td>
                                                    <td class="text-center"><a href="{{route('admin.categories.edit', $category->id)}}" class="text-success"><i class="fas fa-pen"></i></a></td>
                                                    <td class="text-center"><a href="{{route('admin.categories.delete', $category->id)}}" class="text-danger"><i class="far fa-trash-alt"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <a href="{{route('admin.categories.create')}}" class="btn btn-block btn-primary mb-3">Создать</a>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
