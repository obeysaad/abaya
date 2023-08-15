
<div>
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop_heading">
                        <h2>{{ __('message.product') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row shopAccessRow">
                <div class="col-lg-8 col-sm-9">
                    <div class="shopAccessLefts">

                        <div>
                            {{--  <input type="text" wire:model="search" placeholder="" class="form-control" />  --}}

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-3">
                    <div class="shopShorts">
                        <div class="shopShortList">
                            <select name="sort_select" wire:model="order">

                                <option value="0"> {{ __('message.default') }} </option>
                                <option value="1"> {{ __('message.alph') }}</option>
                                <option value="2">{{ __('message.low_to_hight') }}</option>
                                <option value="3">{{ __('message.hight_to_low') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse  ($dresss as $dress )
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">{{ __('message.new') }}</div>
                            <div class="saleLabel02 poppins">{{ __('message.sale') }}</div>
                            <img src="{{ asset('images/'. $dress ->photo) }}" alt=""/>
                            <div class="productHover01">

                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $dress->id }}" name="id">
                                    <input type="hidden" value="{{ $dress->name }}" name="name">
                                    <input type="hidden" value="{{ $dress->price }}" name="price">
                                    <input type="hidden" value="{{ $dress->photo }}"  name="photo">
                                    <input type="hidden" value="1" name="quantity" id="final">
                                    <div>
                                    <button class="vol_btn vol_btn_bg">{{ __('message.add_cart') }}</button>
                                    </div>
                                </form>                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="{{ route('detail' , $dress->id) }}" class="poppins">{{ $dress->name }}</a></h5>
                            <p class="cats"><a href="shop_single.html">{{ $dress->category->name }}</a></p>
                            <p class="prices"><del>65.00</del> &nbsp;{{ $dress->price }} AED</p>
                        </div>
                    </div>
                </div>

                @empty


                <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="singleProduct01 text-center">
                             <h3>Nothing in this Category yet ...</h3>

                    </div>
                </div>

                @endforelse
            </div>
            <div class="row mtop32">
                <div class="col-lg-12">
                    <div class="sop_navigation text-center">
                        <a href="#">1</a>
                        <a href="#" class="current">2</a>
                        <a href="#">3</a>
                        <a href="#" class="next"><i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
