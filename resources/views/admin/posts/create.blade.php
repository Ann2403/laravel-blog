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
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create new post</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('admin.posts.store')}}"
                    enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter title"
                               class="@error('title') is-invalid @enderror form-control">
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name='description' rows="2" placeholder="Enter description"
                                  class="form-control @error('description') is-invalid @enderror"></textarea>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name='content' rows="5" placeholder="Enter content"
                                  class="form-control @error('content') is-invalid @enderror"></textarea>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select id='category_id' name='category_id' class="form-control">
                            <option selected="selected" disabled>Select a category</option>
                            @foreach($categories as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name='tag_id[]' id='tags' class="select2" multiple="multiple"
                                data-placeholder="Select a tags" style="width: 100%;">
                            @foreach($tags as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label for="thumbnail">Image</label>
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
