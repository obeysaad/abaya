@extends('layouts.front')
@section('content')
<style>
    /* Hide element on extra small devices */
    @media (max-width: 576px) {
      .element {
        min-height: 120px;
      }

      .slid {
        max-height: 200px;
      }

      .prapgraph{
        display:none;
      }
    }
  </style>

  <section class="banner3 slid" >
    <div class="revSlider3" >
        <ul>
            <li data-transition="cube" data-slotamount="7" data-masterspeed="1000" >
                <img src="https://images.pexels.com/photos/5490979/pexels-photo-5490979.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                <div class="tp-caption sfb"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="-175"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Power4.easeOut">
                    <h3 class="specialHead playfair" style="color: rgb(218, 145, 21)">{{ __('message.arrival') }}</h3>
                </div>
                <div class="tp-caption sfb"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="0"
                     data-speed="1400"
                     data-start="1200"
                     data-easing="Power4.easeOut">
                    <h1 class="bigHead poppins" style="color: white;">2023</h1>
                </div>
                <div class="tp-caption sfb"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="152"
                     data-speed="1800"
                     data-start="1600"
                     data-easing="Power4.easeOut">
                     <h4 class="smHead poppins">{{ __('message.fresh') }}</h4>
                    </div>
            </li>
            <li data-transition="curtain-1" data-slotamount="7" data-masterspeed="1000" >
                <img src="https://images.pexels.com/photos/5490963/pexels-photo-5490963.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                <div class="tp-caption sfr"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="-175"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Power4.easeOut">
                     <h3 class="specialHead playfair" style="color: rgb(218, 145, 21)">{{ __('message.arrival') }}</h3>
                    </div>
                <div class="tp-caption sfr"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="0"
                     data-speed="1400"
                     data-start="1200"
                     data-easing="Power4.easeOut">
                    <h1 class="bigHead poppins" style="color : white">2023</h1>
                </div>
                <div class="tp-caption sfr"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="152"
                     data-speed="1800"
                     data-start="1600"
                     data-easing="Power4.easeOut">
                    <h4 class="smHead poppins">{{ __('message.fresh') }}</h4>
                </div>
            </li>
            <li data-transition="slotzoom-vertical" data-slotamount="7" data-masterspeed="1000" >
                <img src="https://images.pexels.com/photos/346748/pexels-photo-346748.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                <div class="tp-caption sfl"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="-175"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Power4.easeOut">
                     <h3 class="specialHead playfair" style="color: rgb(218, 145, 21)">{{ __('message.arrival') }}</h3>
                    </div>
                <div class="tp-caption sfl"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="0"
                     data-speed="1400"
                     data-start="1200"
                     data-easing="Power4.easeOut">
                    <h1 class="bigHead poppins" style="color:white">2023</h1>
                </div>
                <div class="tp-caption sfl"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="152"
                     data-speed="1800"
                     data-start="1600"
                     data-easing="Power4.easeOut">
                     <h4 class="smHead poppins">{{ __('message.fresh') }}</h4>
                    </div>
            </li>
        </ul>
    </div>
</section>





    <section class="comonSection">
        <div class="container">
            <div class="row swiper">
                <div class="swiper-wrapper">

                @foreach ($categories as $category)
                    <div class="col-sm-4 swiper-slide c" style="padding-bottom:10px;">

                       <a href="{{ route('shop' , $category->id) }}">
                        <div class="singleCats">
                            <img src="{{ asset('images/' . $category->photo) }}" alt="Men's Collenctions"
                                style="max-height:200px; " class="element"  />
                            <div class="catContent poppins">
                                <a href="{{ route('shop' , $category->id) }}">
                                <span class="prapgraph">
                                    {{ $category->name }}

                                </span>
                                </a>
                            </div>
                            <div class="hoverEffect"></div>
                        </div>
                    </a>
                    </div>
                @endforeach
                </div>
                <div class="swiper-pagination"></div>

            </div>


        </div>
    </section>
    {{--  <section class="comonSection noPaddingTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="normalHr"></div>
                <div class="sectionTitle text-center">
                    <h2 class="poppins">Featured Product</h2>
                    <div class="titleBars"></div>
                    <p>
                        The Love Boat soon will be making another run the love boat promises something for
                        everyone one two three four five six seven eight Sclemeel schlemazel hasenfeffer
                        incorporated.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 paddingRight5px">
                <div class="singleFeatured wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <img src="{{ asset('assets/front-assets/images/home1/f1.jpg')}}" alt=""/>
                    <div class="feaContent poppins">
                        <h4>Shirt Collenctions</h4>
                        <a href="#">View More<i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
                <div class="singleFeatured wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <img src="{{ asset('assets/front-assets/images/home1/f3.jpg')}}" alt=""/>
                    <div class="feaContent poppins">
                        <h4>Jacket Collenctions</h4>
                        <a href="#">View More<i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 paddingLeft5px">
                <div class="singleFeatured wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <img src="{{ asset('assets/front-assets/images/home1/f2.jpg')}}" alt=""/>
                    <div class="feaContent poppins">
                        <h4>Backpack Collenctions</h4>
                        <a href="#">View More<i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
                <div class="singleFeatured wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                    <img src="{{ asset('assets/front-assets/images/home1/f4.jpg')}}" alt=""/>
                    <div class="feaContent poppins">
                        <h4>shoe Collenctions</h4>
                        <a href="#">View More<i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  --}}


    <section class="comonSection noPadding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="callToActions text-center poppins wow fadeInUp" data-wow-duration="700ms"
                        data-wow-delay="300ms" style="height:300px">

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2 class="poppins">{{ __('message.arrival') }}</h2>
                        <div class="titleBars"></div>
                        <p>
                        </p>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="volta_tab1">
                        <ul class="clearfix poppins" role="tablist">

                        @foreach ($categories as $index => $category)
                    <li role="presentation">
                        <a href="#tab_0{{ $category->id }}" aria-controls="tab_0{{  $category->id }}"
                            role="tab" data-toggle="tab">{{ $category->name }}</a>
                    </li>

                @endforeach

            </ul>
                <!-- Tab panes -->
                        <div class="tab-content">
                            @foreach ($categories as $index => $category)

                            <div role="tabpanel" class="tab-pane fade in active" id="tab_0{{  $category->id }}">
                                <div class="">

                                    @foreach ( $category->dresss as $dress )
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="singleProduct01 text-center">
                                            <div class="productThumb01">
                                                <img src="{{ asset('images/' . $dress->photo) }}" alt=""/>
                                                <div class="productHover01">
                                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="quantity" value="1" >


                                                    <input type="hidden" value="{{ $dress->id }}" name="id">
                                                    <input type="hidden" value="{{ $dress->name }}" name="name">
                                                    <input type="hidden" value="{{ $dress->price }}" name="price">
                                                    <input type="hidden" value="{{ $dress->photo }}"  name="photo">
                                                    <div>
                                                    <button class="vol_btn vol_btn_bg">{{ __('message.add_cart') }}</button>
                                                    </div>
                                                </form>                                                </div>
                                            </div>
                                            <div class="productDesc01">
                                                <h5><a href="{{ route('detail' , $dress->id) }}" class="poppins">{{ $dress->name }}</a></h5>
                                                <p class="cats"><a href="shop_single.html">{{ $dress->category->name }}</a></p>
                                                <p class="prices">

                                                    @if($dress->product_discount)
                                                    <del>
                                                        {{ $dress->price }}
                                                    </del>
                                                      {{ $dress->price * ($dress->product_discount->discount->discount_percent / 100) }}
                                                    @else
                                                     {{ $dress->price }}
                                                    @endif



                                                    AED</p>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row martinTop10">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('shop') }}" class="vol_btn">{{ __('admin.all_Product') }}<i class="flaticon-arrows-3"></i></a>
                </div>
            </div>
        </div>
    </section>
    {{--  <section class="comonSection noPaddingTop testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="normalHr"></div>
                    <div class="sectionTitle text-center">
                        <h2 class="poppins">testimonials</h2>
                        <div class="titleBars"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tesimonialSlide">
                        <div class="ingleTestiItem text-center">
                            <img src="{{ asset('assets/front-assets/images/home1/testi.png') }}" alt="" />
                            <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                            <div class="tesiCont">
                                The Love Boat soon will be making another run the love boat promises something for everyone
                                one two three four five
                                six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper
                                too will<br />
                                do their very best to make the others comfortable in their tropic island nest
                            </div>
                            <div class="testiMeta">
                                <h4><a href="#">Stuart Marsh</a></h4>
                                <p>Content Writer</p>
                            </div>
                        </div>
                        <div class="ingleTestiItem text-center">
                            <img src="{{ asset('assets/front-assets/images/home1/testi.png') }}" alt="" />
                            <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="tesiCont">
                                The Love Boat soon will be making another run the love boat promises something for everyone
                                one two three four five
                                six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper
                                too will<br />
                                do their very best to make the others comfortable in their tropic island nest
                            </div>
                            <div class="testiMeta">
                                <h4><a href="#">Stuart Marsh</a></h4>
                                <p>Content Writer</p>
                            </div>
                        </div>
                        <div class="ingleTestiItem text-center">
                            <img src="{{ asset('assets/front-assets/images/home1/testi.png') }}" alt="" />
                            <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="tesiCont">
                                The Love Boat soon will be making another run the love boat promises something for everyone
                                one two three four five
                                six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper
                                too will<br />
                                do their very best to make the others comfortable in their tropic island nest
                            </div>
                            <div class="testiMeta">
                                <h4><a href="#">Stuart Marsh</a></h4>
                                <p>Content Writer</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>  --}}
    {{--  <section class="comonSection greys">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sectionTitle text-center">
                    <h2>Latest News</h2>
                    <div class="titleBars"></div>
                    <p>
                        The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
                        six seven eight Sclemeel schlemazel hasenfeffer incorporated.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="singleBlogs">
                    <div class="blogThumbs">
                        <img src="{{ asset('assets/front-assets/images/home1/b1.jpg')}}" alt=""/>
                        <div class="dates poppins">
                            <span>11</span>
                            <span>Jan</span>
                        </div>
                    </div>
                    <div class="blogDetails">
                        <div class="blogDetailsInner">
                            <h4 class="poppins"><a href="single_blog.html">Sunday Monday Happy Days</a></h4>
                            <p>
                                Here everyone one two three four five six seven eight Sclemeel schlemazel
                                hasenfeffer incorporated  the others comfortable nest started from this
                                tropic port.
                            </p>
                            <a href="single_blog.html" class="poppins blogreadmore">Read More<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                <div class="singleBlogs">
                    <div class="blogThumbs">
                        <img src="{{ asset('assets/front-assets/images/home1/b2.jpg')}}" alt=""/>
                        <div class="dates poppins">
                            <span>15</span>
                            <span>feb</span>
                        </div>
                    </div>
                    <div class="blogDetails">
                        <div class="blogDetailsInner">
                            <h4 class="poppins"><a href="single_blog.html">Herbert Hoover again</a></h4>
                            <p>
                                Here everyone one two three four five six seven eight Sclemeel schlemazel
                                hasenfeffer incorporated  the others comfortable nest started from this
                                tropic port.
                            </p>
                            <a href="single_blog.html" class="poppins blogreadmore">Read More<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  --}}
    {{--
<section class="comonSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="subscriptions text-center">
                    <h2>SUBSCRIBE to our newsletters</h2>
                    <p>Be the First to know about our Fresh Arrivals and much more!</p>
                    <form method="post" action="#" id="subscribe">
                        <input type="email" name="sub_email" id="sub_email" placeholder="Enter your Email id"/>
                        <button class="poppins" type="submit" name="sub_submit" id="sub_submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>  --}}
@endsection
