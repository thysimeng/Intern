<!-- Start Promo section -->
<section id="aa-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-area">
                    <div class="row">
                        <!-- promo left -->
                        <div class="col-md-5 no-padding">
                            <div class="aa-promo-left">
                                <div class="aa-promo-banner">
                                    <img src="{{asset('images/'.$woman[0]->ProductImage)}}" alt="img">
                                    <div class="aa-prom-content">
                                        <span>75% Off</span>
                                        <h4><a href="/product-detail/{{$woman[0]->ProductID}}">For Women</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- promo right -->
                        <div class="col-md-7 no-padding">
                            <div class="aa-promo-right">
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="{{asset('images/'.$man[0]->ProductImage)}}" alt="img">
                                        <div class="aa-prom-content">
                                            <span>Exclusive Item</span>
                                            <h4><a href="/product-detail/{{$man[0]->ProductID}}">For Men</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="{{asset('images/'.$digital[0]->ProductImage)}}" alt="img">
                                        <div class="aa-prom-content">
                                            <span>Sale Off</span>
                                            <h4><a href="/product-detail/{{$digital[0]->ProductID}}">Digital</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="{{asset('images/'.$kid[0]->ProductImage)}}" alt="img">
                                        <div class="aa-prom-content">
                                            <span>New Arrivals</span>
                                            <h4><a href="/product-detail/{{$kid[0]->ProductID}}">For Kids</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="{{asset('images/'.$sport[0]->ProductImage)}}" alt="img">
                                        <div class="aa-prom-content">
                                            <span>25% Off</span>
                                            <h4><a href="/product-detail/{{$sport[0]->ProductID}}">For Sport</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo section -->
