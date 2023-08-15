@extends('layouts.front')

@section('content')
<section class="comonSection noPaddingBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="shopCaro" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators singShopTabnav">
                        <li data-target="#shopCaro" data-slide-to="0">
                            <img src="{{ asset('images/' . $dress->photo)}}" alt="">
                        </li>

                        @foreach ( $dress->images as $image )

                        <li data-target="#shopCaro" data-slide-to="1" class="active">
                            <img src="{{ asset('images/' . $image->url)}}" alt="">
                        </li>
                        @endforeach
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item shopBimg active">
                            <img src="{{ asset('images/' . $dress->photo)}}" alt="">
                        </div>
                        @foreach ( $dress->images as $image )

                        <div class="item shopBimg">
                            <img src="{{ asset('images/' . $image->url)}}" alt="">
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-6 noPaddingLeft">
                <div class="singleProInfo">
                    <div class="productinfoTop">
                        <h2 class="productSiTitle">{{  $dress->name }}</h2>
                        <div class="singShopRatting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                            <span>(4.7/5 Ratings)</span>
                        </div>
                        <p class="prices2">
                            @if($dress->product_discount)
                            <del>
                                {{ $dress->price }}
                            </del>
                              {{ $dress->price * ($dress->product_discount->discount->discount_percent / 100) }}
                            @else
                             {{ $dress->price }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="sinShopCont">
                    <p>
                        {{ $dress->description }}
                    </p>
                </div>
                <h3 class="stokPrduct">{{ __('admin.avilible') }}: 15 </h3>
                <div class="ctyandColor">

                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="quantityW">
                        <h4>{{ __('admin.quantity') }}:</h4>
                        <div class="quantity">
                            <button class="qtyBtn btnMinus">-</button>
                            <input type="text" name="quantity" value="1" title="Qty" class="input-text qty text carqty">
                            <button class="qtyBtn btnPlus">+</button>
                        </div>
                    </div>
                    <div class="colorW">
                        <h4>SELECT COLOR:</h4>
                        <div class="productColor">
                            <a class="SandyBrown" href="#"></a>
                            <a class="Flamingo" href="#"></a>
                            <a class="DarkGreen" href="#"></a>
                            <a class="Wattle" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="cartButtons">

                        <input type="hidden" value="{{ $dress->id }}" name="id">
                        <input type="hidden" value="{{ $dress->name }}" name="name">
                        <input type="hidden" value="@if($dress->product_discount){{ $dress->price * ($dress->product_discount->discount->discount_percent / 100) }}@else{{ $dress->price }}@endif " name="price">
                        <input type="hidden" value="{{ $dress->photo }}"  name="photo">
                        <div>
                        <button class="vol_btn vol_btn_bg">{{ __('message.add_cart') }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <br><Br>
        <div class="row singprotabW">
            <div class="col-lg-12">
                <ul class="singProDectabnav">
                    <li class="active"><a data-toggle="tab" href="#desc">description</a></li>
                    <li><a data-toggle="tab" href="#addit">additional info</a></li>
                    <li><a data-toggle="tab" href="#review">review(5)</a></li>
                </ul>
                <div class="tab-content">
                    <div id="desc" class="tab-pane fade in active">
                        <div class="proDectabcon">
                            The Love Boat soon will be making another run the love boat promises something for everyone one
                            two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated the weather
                            started getting rough the tiny ship was tossed if not for the courage of the fearless crew the
                            minnow would be lost the minnow would be lost  The first mate and his Skipper too will do their
                            very best to make the others comfortable in their tropic island nest. Well we're movin'
                            on up to the east side. To a deluxe apartment in the sky. Just sit right back and you'll
                            hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship.
                        </div>
                    </div>
                    <div id="addit" class="tab-pane fade">
                        <div class="proDectabcon">
                            The Love Boat soon will be making another run the love boat promises something for everyone one
                            two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated the weather
                            started getting rough the tiny ship was tossed if not for the courage of the fearless crew the
                            minnow would be lost the minnow would be lost  The first mate and his Skipper too will do their
                            very best to make the others comfortable in their tropic island nest. Well we're movin'
                            on up to the east side. To a deluxe apartment in the sky. Just sit right back and you'll
                            hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship.
                        </div>
                    </div>
                    <div id="review" class="tab-pane fade">
                        <div class="commentArea">
                            <h4 class="comment_title">3 reviews for Vacuum Cleaner</h4>
                            <ol class="comment_list">
                                <li>
                                    <div class="singleComments">
                                        <div class="comThumb">
                                            <img alt="" src="images/single_blog/c1.png">
                                        </div>
                                        <div class="comDetails">
                                            <div class="comHeader">
                                                <div class="col-sm-6 noPadding text-left">
                                                    <h5>Johnson</h5>
                                                    <p class="comDate">Jan 22, 2016 at 10:00 pm</p>
                                                </div>
                                                <div class="col-sm-6 noPadding text-right">
                                                    <div class="cus_star-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="com_details">
                                                The want to go where everybody knows your name. And they're always glad you came. Boy the way Glen Miller
                                                played. Songs that made the hit parade. Guys like us we had it made.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="singleComments">
                                        <div class="comThumb">
                                            <img alt="" src="images/single_blog/c2.png">
                                        </div>
                                        <div class="comDetails">
                                            <div class="comHeader">
                                                <div class="col-sm-6 noPadding text-left">
                                                    <h5>MARIA JOSH</h5>
                                                    <p class="comDate">Mar 30, 2016 at 12:30 pm</p>
                                                </div>
                                                <div class="col-sm-6 noPadding text-right">
                                                    <div class="cus_star-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="com_details">
                                                The want to go where everybody knows your name. And they're always glad you came. Boy the way Glen Miller played.
                                                Songs that made the hit parade. Guys like us we had it made.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="singleComments">
                                        <div class="comThumb">
                                            <img alt="" src="images/single_blog/c3.png">
                                        </div>
                                        <div class="comDetails">
                                            <div class="comHeader">
                                                <div class="col-sm-6 noPadding text-left">
                                                    <h5>MARIA JOSH</h5>
                                                    <p class="comDate">Mar 30, 2016 at 12:30 pm</p>
                                                </div>
                                                <div class="col-sm-6 noPadding text-right">
                                                    <div class="cus_star-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="com_details">
                                                The want to go where everybody knows your name. And they're always glad you came. Boy the way Glen Miller played.
                                                Songs that made the hit parade. Guys like us we had it made.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="singleComments">
                                        <div class="comThumb">
                                            <img alt="" src="images/single_blog/c1.png">
                                        </div>
                                        <div class="comDetails">
                                            <div class="comHeader">
                                                <div class="col-sm-6 noPadding text-left">
                                                    <h5>MARIA JOSH</h5>
                                                    <p class="comDate">Mar 30, 2016 at 12:30 pm</p>
                                                </div>
                                                <div class="col-sm-6 noPadding text-right">
                                                    <div class="cus_star-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="com_details">
                                                The want to go where everybody knows your name. And they're always glad you came. Boy the way Glen Miller played.
                                                Songs that made the hit parade. Guys like us we had it made.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="singleComments">
                                        <div class="comThumb">
                                            <img alt="" src="images/single_blog/c2.png">
                                        </div>
                                        <div class="comDetails">
                                            <div class="comHeader">
                                                <div class="col-sm-6 noPadding text-left">
                                                    <h5>MARIA JOSH</h5>
                                                    <p class="comDate">Mar 30, 2016 at 12:30 pm</p>
                                                </div>
                                                <div class="col-sm-6 noPadding text-right">
                                                    <div class="cus_star-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="com_details">
                                                The want to go where everybody knows your name. And theyre always glad you came. Boy the way Glen Miller played.
                                                Songs that made the hit parade. Guys like us we had it made.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="comment_forms">
                            <h4 class="comment_form_title">Add a review</h4>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="NAME *" name="com_name">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="EMAIL ADDRESS *" name="com_email">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="WEBSITE" name="com_web">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="YOUR COMMENT *" name="com_content"></textarea>
                                    </div>
                                    <div class="col-lg-12 text-left">
                                        <input type="submit" class="com_submit" value="post comment">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="seperator"></div>
            </div>
        </div>
    </div>
</section>
{{--  <section class="relatedProSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sectionTitle text-center">
                    <h2>RELATED PRODUCTS</h2>
                    <div class="titleBars"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="singleProduct01 text-center">
                    <div class="labelsPro poppins newPro">New</div>
                    <div class="labelsPro poppins salePro">Sale</div>
                    <div class="productThumb01">
                        <img alt="" src="images/home2/s1.png">
                        <div class="productHover01">
                            <a class="vol_btn vol_btn_bg" href="#">Add to cart<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                    <div class="productDesc01">
                        <h5><a class="poppins" href="#">Dawson Backpack</a></h5>
                        <p class="cats"><a href="#">Accessories</a></p>
                        <p class="prices"><del>$69.00</del> $65.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                <div class="singleProduct01 text-center">
                    <div class="productThumb01">
                        <img alt="" src="images/home2/s2.png">
                        <div class="productHover01">
                            <a class="vol_btn vol_btn_bg" href="#">Add to cart<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                    <div class="productDesc01">
                        <h5><a class="poppins" href="#">Vila Printed Tie Neck Dress</a></h5>
                        <p class="cats"><a href="#">fashion</a></p>
                        <p class="prices">$75.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                <div class="singleProduct01 text-center">
                    <div class="labelsPro poppins newPro">New</div>
                    <div class="labelsPro poppins salePro">Sale</div>
                    <div class="productThumb01">
                        <img alt="" src="images/home2/s3.png">
                        <div class="productHover01">
                            <a class="vol_btn vol_btn_bg" href="#">Add to cart<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                    <div class="productDesc01">
                        <h5><a class="poppins" href="#">Fitch Woven Saddle Bag</a></h5>
                        <p class="cats"><a href="#">Accessories</a></p>
                        <p class="prices"><del>$64.00</del> $63.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  --}}

@endsection
