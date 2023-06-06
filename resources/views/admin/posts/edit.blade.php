@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Изменение поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Home</a></li>
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
                    <div class="col-12">
                        <form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <input type="text" class="form-control" name="title" placeholder="Введите название"
                                       value="{{$post->title}}">
                                @error('title')
                                <div class="text-danger mb-3">{{$message}}<strong>*</strong></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{$post->content}}</textarea>
                                @error('content')
                                <div class="text-danger mb-3">{{$message}}<strong>*</strong></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Выбор превью</label>
                                <div class="w-25 mb-3" >
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($post->preview_image)}}" alt="preview_image" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger mb-3">{{$message}}<strong>*</strong></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Выбор главного изображения</label>
                                <div class="w-25 mb-3">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($post->main_image)}}" alt="main_image" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger mb-3">{{$message}}<strong>*</strong></div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Выберите категорию</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{$category->id}}"
                                            {{$category->id == $post->category_id ? 'selected' : ''}}
                                        >
                                            {{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Выберите тэги</label>
                                <div class="select2-purple">
                                    <select class="select2" name="tag_ids[]" multiple="multiple"
                                            data-placeholder="Выберите тэги" data-dropdown-css-class="select2-purple"
                                            style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}" {{is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray())
                                                                           ? 'selected' : ''}}>{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Создать"
                                       style="border-radius: 5px;">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
