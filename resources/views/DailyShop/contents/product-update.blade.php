<div>
        @if (count($errors) > 0)
        <div>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div align="center">
            {{ session('success') }}
        </div>
    @endif
</div>

<!-- product category -->
<form  method="post" action="{{url('/product-update')}}" enctype="multipart/form-data">
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    {{csrf_field()}}

                                    <div class="input-group control-group increment" >
                                        <input type="file" name="filename[]" class="form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                        </div>
                                    </div>
                                    <div class="clone hide">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="file" name="filename[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        {{--<h3>T-Shirt</h3>--}}
                                        <input type="hidden" name="idUpdate" value="{{$productDetail->Productid}}">
                                        <input type="text" name="name" value="{{$productDetail->ProductName}}">
                                        <div class="aa-price-block">
                                            {{--<span class="aa-product-view-price">$34.99</span>--}}
                                            <input type="number" name="price" value="{{$productDetail->ProductPrice}}">
                                            {{--<p class="aa-product-avilability">Avilability: <span>In stock</span></p>--}}
                                        </div>
                                        <input type="text" name="shortDescription"  value="{{$productDetail->ProductShortDesc}}">
                                        <h4>Size</h4>
                                        <div class="aa-prod-view-size">
                                            {{--<a href="#">S</a>--}}
                                            {{--<a href="#">M</a>--}}
                                            {{--<a href="#">L</a>--}}
                                            {{--<a href="#">XL</a>--}}
                                            <input type="checkbox" name="size[]" value="S">S
                                            <input type="checkbox" name="size[]" value="M">M
                                            <input type="checkbox" name="size[]" value="L">L
                                            <input type="checkbox" name="size[]" value="XL">XL
                                            <input type="checkbox" name="size[]" value="XXL">XXL
                                        </div>
                                        <h4>Color</h4>
                                        <div class="aa-color-tag">
                                            {{--<a href="#" class="aa-color-green"></a>--}}
                                            {{--<a href="#" class="aa-color-yellow"></a>--}}
                                            {{--<a href="#" class="aa-color-pink"></a>--}}
                                            {{--<a href="#" class="aa-color-black"></a>--}}
                                            {{--<a href="#" class="aa-color-white"></a>--}}
                                            <input type="checkbox" name="color[]" value="green"><a href="" class="aa-color-green"></a>
                                            <input type="checkbox" name="color[]" value="yellow"><a href="" class="aa-color-yellow"></a>
                                            <input type="checkbox" name="color[]" value="pink"><a href="" class="aa-color-pink"></a>
                                            <input type="checkbox" name="color[]" value="black"><a href="" class="aa-color-black"></a>
                                            <input type="checkbox" name="color[]" value="white"><a href="" class="aa-color-white"></a>
                                        </div>
                                        <div class="aa-prod-quantity">
                                            <p class="aa-prod-category">
                                                Category:
                                            </p>
                                                <select id="" name="catagegory">
                                                    <option selected="1" value="{{$productDetail->productCategory}}">{{$productDetail->productCategory}}</option>
                                                    <option value="men">men</option>
                                                    <option value="women">women</option>
                                                    <option value="kids">kids</option>
                                                    <option value="sports">sports</option>
                                                    <option value="digital">digital</option>
                                                    <option value="furniture">furniture</option>
                                                    @role('admin')
                                                    <option value="slide">slides</option>
                                                    @endrole
                                                </select>
                                            {{--<form action="">--}}
                                            {{--</form>--}}

                                        </div>
                                        <div class="aa-product-view-content">
                                            {{--<h3>T-Shirt</h3>--}}
                                            <textarea name="longDescription" id="" cols="30" rows="10" placeholder="Description">{{$productDetail->ProductLongDesc}}</textarea>
                                            <div class="aa-price-block">
                                                <div class="aa-prod-view-bottom">
                                                    {{--<a class="aa-add-to-cart-btn" href="#">Add To Cart</a>--}}
                                                    {{--<a class="aa-add-to-cart-btn" href="#">Wishlist</a>--}}
                                                    {{--<a class="aa-add-to-cart-btn" href="#">Upload</a>--}}
                                                    <button type="submit" class="btn btn-primary" style="margin-top:10px">Update</button>
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
        </div>
    </section>
    <!-- / product category -->
</form>
