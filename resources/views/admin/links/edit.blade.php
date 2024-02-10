@extends('admin.layouts.base')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование ссылки</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ссылка "{{ $link->name }}"</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('links.update', ['link' => $link->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Название</label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror" id="name"
                                           value="{{ $link->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ $link->description }}</textarea>
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label for="content">Text</label>--}}
{{--                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="5">{{ $post->content }}</textarea>--}}
{{--                                </div>--}}

                                <div class="form-group">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                        @foreach($categories as $k => $v)
                                            <option value="{{ $k }}" @if($k == $link->category_id) selected @endif>{{ $v }}</option>
                                        @endforeach

                                    </select>
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label for="tags">Теги</label>--}}
{{--                                    <select name="tags[]" id="tags" class="select2" multiple="multiple"--}}
{{--                                            data-placeholder="Выбор тегов" style="width: 100%;">--}}
{{--                                        @foreach($tags as $k => $v)--}}
{{--                                            <option value="{{ $k }}" @if(in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{ $v }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}

                                <div class="form-group">
                                    <label for="thumbnail">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input" >
                                            <label class="custom-file-label" for="thumbnail">Choose file</label>
                                        </div>
                                    </div>
                                    <div><img src="{{ $link->getImage() }}" alt="" class="img-thumbnail mt-5" width="200">{{ $link->getImage() }}</div>
                                </div>

                                <div class="form-group">
                                    <label for="alt">Описание изображения</label>
                                    <input type="text" name="alt"
                                           class="form-control @error('alt') is-invalid @enderror" id="alt"
                                           placeholder="Описание  изображения"
                                           value="{{ $link->alt }}">
                                </div>

                                <div class="form-group">
                                    <label for="link">Ссылка</label>
                                    <input type="text" name="link"
                                           class="form-control @error('link') is-invalid @enderror" id="link"
                                           placeholder="Ссылка"
                                           value="{{ $link->link }}">
                                </div>

                                <div class="form-group">
                                    <label for="is_published">Опубликовано</label>
                                    <div class="input-group">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="is_published" id="is_published" class="" {{ $link->is_published == 1 ? ' checked' : '' }}>
                                            <label class="" for="is_published">Опубликовать</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection


