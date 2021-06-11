@extends('blog.layouts.layout')

@section('content')
    <!-- Content-->
    <div class="md-content">

        <!-- page-title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-0 offset-sm-0 offset-md-0 offset-lg-2 ">
                        <h2 class="page-title__title">My blog</h2>

                        <!--  -->
                        <nav>
                            <a class="breadcrumb__item" href="#">Home</a>
                            <span class="breadcrumb__item active">Blog</span>
                        </nav><!-- End /  -->

                    </div>
                </div>
            </div>
        </div><!-- End / page-title -->

        <!-- Section -->
        <section class="md-section">
            <div class="container">

                <!-- layout-blog sidebar-left -->
                <div class="layout-blog sidebar-left">
                    @include('blog.layouts.sidebar')

                    <div class="layout-blog__content">
                        <!-- Post -->
                        @foreach($posts as $post)
                            <div class="post-01__style-02 md-text-center">
                                @if($post->thumbnail)
                                <div class="post-01__media">
                                    <a href="#">
                                        <img src='{{$post->getImage()}}' alt="image post"/>
                                    </a>
                                </div>
                                @endif
                                <div>
                                    <h2 class="post-01__title"><a href="{{route('post', $post->slug)}}">{{$post->title}}</a></h2>
                                    <p>{!! $post->description !!}</p>
                                    <ul class="post-01__categories">
                                        <li><a href="{{route('post.category', $post->category->slug)}}">{{$post->category->title}}</a></li>
                                        <li>
                                            @foreach($post->tags as $tag)
                                                <a href="{{route('post.tag', $tag->slug)}}">{{$tag->title}}</a>
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                            @endforeach
                                        </li>
                                    </ul>

                                    <div class="post-01__time">{{$post->created_at}}</div>
                                </div>
                            </div><!-- End Post  -->
                        @endforeach

                        <!-- pagination -->
                        {{ $posts->links('vendor.pagination.my_pagination') }}
                        <!-- End / pagination -->
                    </div>
                </div><!-- End / layout-blog sidebar-left -->

            </div>
        </section>
        <!-- End / Section -->
    </div>
    <!-- End / Content-->
@endsection
