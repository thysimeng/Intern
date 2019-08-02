<!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                    <li><a href="#women" data-toggle="tab">Women</a></li>
                    <li><a href="#sports" data-toggle="tab">Sports</a></li>
                    <li><a href="#digitals" data-toggle="tab">Digitals</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                          @foreach($man->slice(0, 8) as $valueMan)
                            <li>
                              <figure>
                                <a class="aa-product-img" href="/product-detail/{{$valueMan->ProductID}}"><img src="{{asset('images/'.$valueMan->ProductImage)}}" width="80%" height="80%" alt="polo shirt img"></a>
                                <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <figcaption>
                                  <h4 class="aa-product-title"><a href="#">{{$valueMan->ProductName}}</a></h4>
                                  <span class="aa-product-price">${{$valueMan->ProductPrice}}</span>
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
                      <a class="aa-browse-btn" href="/product-category/men">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                    <div class="tab-pane fade" id="women">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                          @foreach($woman->slice(0, 8) as $valueWoman)
                              <li>
                                  <figure>
                                      <a class="aa-product-img" href="/product-detail/{{$valueWoman->ProductID}}"><img src="{{asset('images/'.$valueWoman->ProductImage)}}" width="80%" height="80%" alt="polo shirt img"></a>
                                      <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                      <figcaption>
                                          <h4 class="aa-product-title"><a href="#">{{$valueWoman->ProductName}}</a></h4>
                                          <span class="aa-product-price">${{$valueWoman->ProductPrice}}</span>
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
                      <a class="aa-browse-btn" href="/product-category/women">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / women product category -->
                    <!-- start sports product category -->
                    <div class="tab-pane fade" id="sports">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                          @foreach($sport->slice(0, 8) as $valueSport)
                              <li>
                                  <figure>
                                      <a class="aa-product-img" href="/product-detail/{{$valueSport->ProductID}}"><img src="{{asset('images/'.$valueSport->ProductImage)}}" width="80%" height="80%" alt="polo shirt img"></a>
                                      <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                      <figcaption>
                                          <h4 class="aa-product-title"><a href="#">{{$valueSport->ProductName}}</a></h4>
                                          <span class="aa-product-price">${{$valueSport->ProductPrice}}</span>
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
                    </div>
                    <!-- / sports product category -->
                    <!-- start electronic product category -->
                    <div class="tab-pane fade" id="digitals">
                       <ul class="aa-product-catg">
                        <!-- start single product item -->
                           @foreach($digital->slice(0, 8) as $valueDigital)
                               <li>
                                   <figure>
                                       <a class="aa-product-img" href="/product-detail/{{$valueDigital->ProductID}}"><img src="{{asset('images/'.$valueDigital->ProductImage)}}" width="80%" height="80%" alt="polo shirt img"></a>
                                       <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                       <figcaption>
                                           <h4 class="aa-product-title"><a href="#">{{$valueDigital->ProductName}}</a></h4>
                                           <span class="aa-product-price">${{$valueDigital->ProductPrice}}</span>
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
                      {{--<a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>--}}
                    </div>
                    <!-- / electronic product category -->
                  </div>
                  <!-- quick view modal -->
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-slider">
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                              <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
