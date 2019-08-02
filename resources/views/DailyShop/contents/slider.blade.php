<!-- Start slider -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    @foreach($slide->slice(0, 6) as $valueSlide)
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{asset('images/'.$valueSlide->ProductImage)}}" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                            {{--<span data-seq>Save Up to 75% Off</span>--}}
                            <h2 data-seq>Collection</h2>
                            <p data-seq>{{$valueSlide->ProductShortDesc}}</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            @role('admin')
                            <a data-seq href="/product-update/{{$valueSlide->ProductID}}" class="aa-shop-now-btn aa-secondary-btn">Update Product</a>
                            @endrole
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<!-- / slider -->
