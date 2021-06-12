@extends('blog.layouts.layout')

@section('content')
    <!-- Content-->
    <div class="md-content">
        <div class="consult-postDetail">
            <div class="image-full"><img src="{{$post->getImage()}}" alt=""></div>
            <div class="consult-postDetail"></div>
            <div class="container">
                <div class="consult-postDetail__main">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
                            <div class="consult-postDetail__content">
                                <div class="row">
                                    <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                        <h1>{{$post->title}}</h1>
                                        <ul class="consult-postDetail__meta" style="margin-bottom: 10px">
                                            <li>
                                                <a href="{{route('post.category', $post->category->slug)}}">
                                                    <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                                    {{$post->category->title}}
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                @foreach($post->tags as $tag)
                                                    <a href="{{route('post.tag', $tag->slug)}}">{{$tag->title}}</a>
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </li>
                                        </ul>
                                        <ul class="consult-postDetail__meta">
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>{{$post->views}}</li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>Comment</li>
                                            <li><i class="fa fa-calendar-o" aria-hidden="true"></i>{{$post->getPostDate()}}</li>
                                        </ul>
                                        <p class="text">{!! $post->content !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="row">
                        <div class="col-lg-8 col-xl-6 offset-0 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-3">
                            <h4 class="comment-heading">Comment <span>(2)</span></h4>
                            <ol class="comment-list">
                                <li class="comment parent">
                                    <div class="comment-content">
                                        <div class="comment-avatar">
                                            <img alt="" src="assets/img/avatars/avatar-01.jpg" class="avatar photo">
                                        </div><!-- .comment-avatar -->

                                        <div class="comment-body">
                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time datetime="2016-12-30T08:18:37+00:00">May 04, 2017</time>
                                                </a>
                                            </div><!-- .comment-metadata -->

                                            <span class="fn">John Doe</span>

                                            <div class="comment-text">
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisc</p>
                                            </div>

                                            <div class="comment-button">
                                                <a href="#" class="like">like</a>
                                                <a href="#" class="reply">reply</a>
                                            </div>
                                        </div><!-- .comment-body -->
                                    </div><!-- .comment-content -->

                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-content">
                                                <div class="comment-avatar">
                                                    <img alt="" src="assets/img/avatars/avatar-02.jpg" class="avatar photo">
                                                </div><!-- .comment-avatar -->

                                                <div class="comment-body">
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time datetime="2016-12-30T08:18:37+00:00">May 04, 2017</time>
                                                        </a>
                                                    </div><!-- .comment-metadata -->

                                                    <span class="fn">John Doe</span>

                                                    <div class="comment-text">
                                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                    </div>

                                                    <div class="comment-button">
                                                        <a href="#" class="like">like</a>
                                                        <a href="#" class="reply">reply</a>
                                                    </div>
                                                </div><!-- .comment-body -->

                                            </div><!-- .comment-content -->
                                        </li>
                                    </ol>
                                </li>
                            </ol>

                            <!-- form-01 -->
                            <div class="form-01 form-01__style-02">
                                <h2 class="form-01__title">Leave A Comment</h2>
                                <form class="form-01__form">
                                    <div class="form__item form__item--02">
                                        <input type="text" name="name" placeholder="Your name"/>
                                    </div>
                                    <div class="form__item form__item--02">
                                        <input type="email" name="phone" placeholder="Your Email"/>
                                    </div>
                                    <div class="form__item">
                                        <textarea rows="3" name="Your comment" placeholder="Your comment"></textarea>
                                    </div>
                                    <div class="form__button"><a class="btn btn-primary btn-w180" href="#">Post comment</a>
                                    </div>
                                </form>
                            </div><!-- End / form-01 -->

                        </div>
                    </div>
                    <!-- End Comment -->
                </div>
            </div>
        </div>
        <!-- Related Posts-->

        <!-- Section -->
        <section class="md-section">
            <div class="container">

                <!-- title-01 -->
                <div class="title-01">
                    <h2 class="title-01__title">Related Posts</h2>
                </div><!-- End / title-01 -->


                <!-- carousel__element owl-carousel -->
                <div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":false,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>

                    <!-- Post -->
                    @foreach($related_posts as $post)
                        <div>
                            <div class="post-01__media">
                                <a href="{{route('post', $post->slug)}}">
                                    <img src="{{$post->getImage()}}" alt="Image for post"/>
                                </a>
                            </div>
                            <div>
                                <ul class="post-01__categories">
                                    <li>
                                        <a href="{{route('post.category', $post->category->slug)}}">
                                            <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                            {{$post->category->title}}
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="post-01__title">
                                    <a href="{{route('post', $post->slug)}}">{{$post->title}}</a>
                                </h2>
                                <div class="post-01__time">{{$post->getPostDate()}}</div>
                                <div class="post-01__note" style="margin-left: 15px">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    {{$post->view}}
                                </div>
                            </div>
                        </div><!-- End Post  -->
                    @endforeach
                </div><!-- End / carousel__element owl-carousel -->

            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
@endsection
