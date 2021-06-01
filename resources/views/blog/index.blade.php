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
                    <div class="layout-blog__content">

                        <!-- Post -->
                        @foreach($posts as $post)
                            <div class="post-01__style-02 md-text-center">
                                @if($post->thumbnail)
                                <div class="post-01__media">
                                    <a href="#">
                                        <img src='{{asset("uploads/$post->thumbnail")}}' alt="image post"/>
                                    </a>
                                </div>
                                @endif
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">{{$post->title}}</a></h2>
                                    <div class="post-01__time">Nov 20, 2017</div>
                                    <div class="post-01__note">by Alice Brooks</div>
                                </div>
                            </div><!-- End Post  -->
                        @endforeach

                        <!-- pagination -->
                        {{ $posts->links('vendor.pagination.bootstrap-4') }}
                        <!-- End / pagination -->

                    </div>
                    <aside class="layout-blog__sidebar">

                        <!--  -->
                        <div>

                            <!-- widget-text__widget -->
                            <section class="widget-text__widget widget-text__style-02 widget">
                                <h3 class="widget-title">Search</h3>
                                <div class="widget-text__content">

                                    <!-- form-search -->
                                    <div class="form-search">
                                        <form>
                                            <input class="form-control" type="text" placeholder="Type and Hit Enter..."/>
                                        </form>
                                    </div><!-- End / form-search -->

                                </div>
                            </section><!-- End / widget-text__widget -->


                            <!-- widget-text__widget -->
                            <section class="widget-text__widget widget-text__style-02 widget">
                                <h3 class="widget-title">categories</h3>
                                <div class="widget-text__content">
                                    <ul>
                                        <li><a href="#">Accounting</a></li>
                                        <li><a href="#">Budgets</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Business Plans</a></li>
                                        <li><a href="#">Commodities</a></li>
                                        <li><a href="#">Insurance</a></li>
                                    </ul>
                                </div>
                            </section><!-- End / widget-text__widget -->


                            <!-- widget-text__widget -->
                            <section class="widget-text__widget widget-text__style-04 widget">
                                <h3 class="widget-title">recent post</h3>
                                <div class="widget-text__content">

                                    <!--  -->
                                    <div class="post-01__style-03">
                                        <div>
                                            <h2 class="post-01__title"><a href="#">Design a Perfect Homepage</a></h2>
                                            <div class="post-01__time">Oct 26, 2017</div>
                                            <div class="post-01__note">by Alice Brooks</div>
                                        </div>
                                    </div><!-- End /  -->


                                    <!--  -->
                                    <div class="post-01__style-03">
                                        <div>
                                            <h2 class="post-01__title"><a href="#">How to Master Microcopy</a></h2>
                                            <div class="post-01__time">Oct 28, 2017</div>
                                            <div class="post-01__note">by Ann Fowler</div>
                                        </div>
                                    </div><!-- End /  -->


                                    <!--  -->
                                    <div class="post-01__style-03">
                                        <div>
                                            <h2 class="post-01__title"><a href="#">How to Master Microcopy</a></h2>
                                            <div class="post-01__time">Oct 10, 2017</div>
                                            <div class="post-01__note">by Brandon Hanson</div>
                                        </div>
                                    </div><!-- End /  -->


                                    <!--  -->
                                    <div class="post-01__style-03">
                                        <div>
                                            <h2 class="post-01__title"><a href="#">Design a Perfect Homepage</a></h2>
                                            <div class="post-01__time">Oct 19, 2017</div>
                                            <div class="post-01__note">by Brandon Hanson</div>
                                        </div>
                                    </div><!-- End /  -->

                                </div>
                            </section><!-- End / widget-text__widget -->


                            <!-- widget-text__widget -->
                            <section class="widget-text__widget widget">
                                <h3 class="widget-title">popular tags</h3>
                                <div class="widget-text__content">

                                    <!-- tagclould -->
                                    <div class="tagclould"><a href="#">Accounting</a><a href="#">Budgets</a><a href="#">Business</a><a href="#">Business</a><a href="#">Plans</a><a href="#">Commodities</a><a href="#">Insurance</a><a href="#">Consulting</a>
                                    </div><!-- End /  tagclould -->

                                </div>
                            </section><!-- End / widget-text__widget -->


                            <!-- widget-text__widget -->
                            <section class="widget-text__widget widget-text__style-03 widget">
                                <h3 class="widget-title">Archieves</h3>
                                <div class="widget-text__content">
                                    <ul>
                                        <li><a href="#">June  2017</a></li>
                                        <li><a href="#">November  2017</a></li>
                                        <li><a href="#">March  2017</a></li>
                                        <li><a href="#">July 2017</a></li>
                                    </ul>
                                </div>
                            </section><!-- End / widget-text__widget -->

                        </div><!-- End /  -->

                    </aside>
                </div><!-- End / layout-blog sidebar-left -->

            </div>
        </section>
        <!-- End / Section -->
    </div>
    <!-- End / Content-->
@endsection
