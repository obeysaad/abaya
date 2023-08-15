<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item "><a href="{{ route('dashboard') }}"><i class="fa-solid fa-house"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">{{ __('admin.home') }} </span></a>
            </li>



            <li class="nav-item   ">
                <a href=""><i class="fas fa-layer-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{ __('admin.category') }} </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Category::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href="{{route('category.index')}}"
                                          data-i18n="nav.dash.ecommerce"> {{ __('admin.show_all') }}  </a>
                    </li>
                    <li><a class="menu-item" href="{{route('category.create')}}" data-i18n="nav.dash.crypto">
                             {{ __('admin.add') }} {{ __('admin.category') }} </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item   ">
                <a href=""><i class="fas fa-tshirt"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{ __('admin.product') }} </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Dress::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href="{{route('dress.index')}}"
                                          data-i18n="nav.dash.ecommerce"> {{ __('admin.show_all') }}  </a>
                    </li>
                    <li><a class="menu-item" href="{{route('dress.create')}}" data-i18n="nav.dash.crypto">
                        {{ __('admin.add') }} {{ __('admin.product') }}
                              </a>
                    </li>
                </ul>
            </li>



            <li class="nav-item   ">
                <a href=""><i class="far fa-clone"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{ __('admin.type') }} </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Type::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href="{{route('type.index')}}"
                                          data-i18n="nav.dash.ecommerce"> {{ __('admin.show_all') }}  </a>
                    </li>
                    <li><a class="menu-item" href="{{route('type.create')}}" data-i18n="nav.dash.crypto">
                        {{ __('admin.add') }} {{ __('admin.type') }} </a>
                    </li>
                </ul>
            </li>





            <li class="nav-item ">
                <a href="{{ route('order.index') }}"><i class="fas fa-shopping-bag"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{ __('admin.order') }} </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Order::count()}}</span>
                </a>
    </li>

    <li class=" nav-item"><a href="#"><i class="la la-terminal"></i><span class="menu-title" data-i18n="nav.form_elements.main">{{  __('message.discount') }}</span></a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="{{ route('discount.index') }}" data-i18n="nav.form_elements.form_inputs">{{  __('message.discount') }}</a>
          </li>

          <li>
            <a class="menu-item" href="{{ route('coupon.index') }}" data-i18n="nav.form_elements.form_inputs">{{ __('admin.coupon') }}</a>
          </li>

        </ul>
      </li>



    <li class=" nav-item"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i><span class="menu-title" data-i18n="nav.form_elements.main">{{ __('admin.chart') }}</span></a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="{{ route('chart') }}" data-i18n="nav.form_elements.form_inputs">{{ __('admin.order') }}</a>
          </li>


        </ul>
      </li>

      <li class="nav-item "><a href="{{ route('social') }}"><i class="fas fa-share-alt"></i><span
        class="menu-title" data-i18n="nav.add_on_drag_drop.main"> </span>{{ __('admin.social') }}</a>
    </li>



      <li class=" nav-item"><a href="#"><i class="fa fa-cog"></i><span class="menu-title" data-i18n="nav.form_elements.main">{{ __('admin.setting') }}</span></a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="{{ route('profile') }}" data-i18n="nav.form_elements.form_inputs">{{ __('admin.profile') }}</a>
          </li>



          <li>
            <a class="menu-item" href="{{ route('use') }}" data-i18n="nav.form_elements.form_inputs">{{ __('admin.use') }}</a>
          </li>

        </ul>
      </li>



        </ul>
    </div>
    </div>
