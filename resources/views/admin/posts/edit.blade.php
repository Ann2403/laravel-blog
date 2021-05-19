@extends('admin.layouts.layout')

@section('content')
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.posts.index')}}">Posts</a>
                            </li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit post</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('admin.posts.update', ['post' => $post->id])}}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{$post->title}}"
                               class="@error('title') is-invalid @enderror form-control">
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name='description' rows="2"
                                  class="form-control @error('description') is-invalid @enderror">
                            {{$post->description}}
                        </textarea>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name='content' rows="5"
                                  class="form-control @error('content') is-invalid @enderror">
                            {{$post->content}}
                        </textarea>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select id='category_id' name='category_id' class="form-control">
                            <option selected="selected" disabled>Select a category</option>
                            @foreach($categories as $key => $value)
                                <option value="{{$key}}"
                                        @if($key === $post->category_id) selected @endif>
                                    {{$value}}
                                </option>
                            @endforeach
                        </select>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name='tag_id[]' id='tags' class="select2" multiple="multiple"
                                data-placeholder="Select a tags" style="width: 100%;">
                            @foreach($tags as $key => $value)
                                <option value="{{$key}}"
                                        @if(in_array($key, $post->tags->pluck('id')->all())) selected @endif>
                                    {{$value}}
                                </option>
                            @endforeach
                        </select>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="thumbnail">Image</label>
                            <div class="col-6 mt-2">
                                <a href='{{$post->getImage()}}' data-toggle="lightbox" data-gallery="gallery">
                                    <img src='{{$post->getImage()}}' class="img-fluid mb-2" alt="post image">
                                </a>
                            </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Choose file</label>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->
                </div> <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div> <!-- /.content -->
    </div>
@endsection
