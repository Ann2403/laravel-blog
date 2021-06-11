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

        <!-- Categories -->
        <section class="widget-text__widget widget-text__style-02 widget">
            <h3 class="widget-title">categories</h3>
            <div class="widget-text__content">
                <ul>
                    @foreach($categories as $category)
                        <li><a href="#">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </section><!-- End Categories -->

        <!-- Recent Post -->
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
        </section><!-- End Recent Post -->

        <!-- Tags -->
        <section class="widget-text__widget widget">
            <h3 class="widget-title">popular tags</h3>
            <div class="widget-text__content">

                <!-- tagclould -->
                <div class="tagclould"><a href="#">Accounting</a><a href="#">Budgets</a><a href="#">Business</a><a href="#">Business</a><a href="#">Plans</a><a href="#">Commodities</a><a href="#">Insurance</a><a href="#">Consulting</a>
                </div><!-- End /  tagclould -->

            </div>
        </section><!-- End / widget-text__widget -->
    </div><!-- End /  -->
</aside>
