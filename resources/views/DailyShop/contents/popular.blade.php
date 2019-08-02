<!-- popular section -->
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                            <li><a href="#featured" data-toggle="tab">Featured</a></li>
                            <li><a href="#latest" data-toggle="tab">Latest</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    @foreach($popular->slice(0, 8) as $valuePopular)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="/product-detail/{{$valuePopular->ProductID}}"><img src="{{asset('images/'.$valuePopular->ProductImage)}}" width="80%" height="80%" alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$valuePopular->ProductName}}</a></h4>
                                                    <span class="aa-product-price">{{$valuePopular->ProductPrice}}</span>
                                                    {{--<span class="aa-product-price"><del>$65.50</del></span>--}}
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                     @endforeach
                                </ul>
                                <a class="aa-browse-btn" href="/product">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / popular product category -->

                            <!-- start featured product category -->
                            <div class="tab-pane fade" id="featured">
                                <ul class="aa-product-catg aa-featured-slider">
                                    @foreach($featured->slice(0, 8) as $valueFeatured)
                                        <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="/product-detail/{{$valueFeatured->ProductID}}"><img src="{{asset('images/'.$valueFeatured->ProductImage)}}" width="80%" height="80%" alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">{{$valueFeatured->ProductName}}</a></h4>
                                                        <span class="aa-product-price">{{$valueFeatured->ProductPrice}}</span>
                                                        {{--<span class="aa-product-price"><del>$65.50</del></span>--}}
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                    @endforeach
                                </ul>
                                <a class="aa-browse-btn" href="/product">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / featured product category -->

                            <!-- start latest product category -->
                            <div class="tab-pane fade" id="latest">
                                <ul class="aa-product-catg aa-latest-slider">
                                    @foreach($latest->slice(0, 8) as $valueLatest)
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="/product-detail/{{$valueLatest->ProductID}}"><img src="{{asset('images/'.$valueLatest->ProductImage)}}" width="80%" height="80%" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">{{$valueLatest->ProductName}}</a></h4>
                                                <span class="aa-product-price">{{$valueLatest->ProductPrice}}</span>
                                                {{--<span class="aa-product-price"><del>$65.50</del></span>--}}
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                        @endforeach

                                </ul>
                                <a class="aa-browse-btn" href="/product">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / latest product category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / popular section -->
