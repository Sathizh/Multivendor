<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.rokaux.com/unishop/v3.2.1/template-1/account-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 May 2020 06:33:55 GMT -->

<head>
    <meta charset="utf-8">
    <title>My Orders
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="MulVenZ - Treat your self">
    <meta name="keywords"
        content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/vendor.min.css') }}">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{ asset('assets/css/styles.min.css') }}">
    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/customizer/customizer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropzone/min/dropzone.min.css') }}">

    {{-- tagify --}}
    <link rel="stylesheet" href="{{ asset('assets/css/tagify.css') }}">


    <!-- Google Tag Manager-->
    {{-- <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T4DJFPZ');

    </script> --}}
    {{-- ajax --}}
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Modernizr-->
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    {{-- dropzone --}}
    <script src="{{ asset('assets/dropzone/dropzone.js') }}"></script>

    {{-- ckeditor --}}
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

</head>
<!-- Body-->
<!-- Photoswipe container-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-T4DJFPZ" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Template Customizer-->
    <div class="customizer-backdrop"></div>
    {{-- <div class="customizer">
      <div class="customizer-toggle"><i class="icon-cog"></i></div>
      <div class="customizer-body">
        <div class="btn-group mb-4">
          <button class="btn btn-white btn-rounded btn-block dropdown-toggle my-0" type="button" data-toggle="dropdown">Choose Template</button>
          <div class="dropdown-menu"><a class="dropdown-item" href="index.html">Template 1 (Clothing)</a><a class="dropdown-item" href="http://themes.rokaux.com/unishop/v3.2.1/template-2/index.html">Template 2 (Furniture)</a><a class="dropdown-item" href="http://themes.rokaux.com/unishop/v3.2.1/template-3/index.html">Template 3 (Electronics)</a></div>
        </div>
        <div class="customizer-title">Choose color</div>
        <div class="customizer-color-switch"><a class="active" href="#" data-color="default" style="background-color: #0da9ef;"></a><a href="#" data-color="2ecc71" style="background-color: #2ecc71;"></a><a href="#" data-color="f39c12" style="background-color: #f39c12;"></a><a href="#" data-color="e74c3c" style="background-color: #e74c3c;"></a></div>
        <div class="customizer-title">Header option</div>
        <div class="form-group">
          <select class="form-control form-control-rounded input-light" id="header-option">
            <option value="sticky">Sticky</option>
            <option value="static">Static</option>
          </select>
        </div>
        <div class="customizer-title">Footer option</div>
        <div class="form-group">
          <select class="form-control form-control-rounded input-light" id="footer-option">
            <option value="dark">Dark</option>
            <option value="light">Light</option>
          </select>
        </div><a class="btn btn-primary btn-rounded btn-block margin-bottom-none" href="https://wrapbootstrap.com/theme/unishop-universal-e-commerce-template-WB0148688/?ref=rokaux">Buy Unishop</a>
      </div>
    </div> --}}
    <!-- Open Ticket Modal-->
    {{-- <div class="modal fade" id="orderDetails" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Order No - 34VB5540K83</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive shopping-cart mb-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th class="text-center">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                                                    src="{{ asset('assets/img/shop/cart/01.jpg') }}" alt="Product"></a>
    <div class="product-info">
        <h4 class="product-title"><a href="shop-single.html">Unionbay
                Park<small>x 1</small></a></h4><span><em>Size:</em>
            10.5</span><span><em>Color:</em> Dark Blue</span>
    </div>
    </div>
    </td>
    <td class="text-center text-lg text-medium">$43.90</td>
    </tr>
    <tr>
        <td>
            <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                        src="{{ asset('assets/img/shop/cart/02.jpg') }}" alt="Product"></a>
                <div class="product-info">
                    <h4 class="product-title"><a href="shop-single.html">Daily Fabric
                            Cap<small>x 2</small></a></h4><span><em>Size:</em>
                        XL</span><span><em>Color:</em> Black</span>
                </div>
            </div>
        </td>
        <td class="text-center text-lg text-medium">$24.89</td>
    </tr>
    <tr>
        <td>
            <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                        src="{{ asset('assets/img/shop/cart/03.jpg') }}" alt="Product"></a>
                <div class="product-info">
                    <h4 class="product-title"><a href="shop-single.html">Cole Haan
                            Crossbody<small>x 1</small></a></h4><span><em>Size:</em>
                        -</span><span><em>Color:</em> Turquoise</span>
                </div>
            </div>
        </td>
        <td class="text-center text-lg text-medium">$200.00</td>
    </tr>
    </tbody>
    </table>
    </div>
    <hr class="mb-3">
    <div class="d-flex flex-wrap justify-content-between align-items-center pb-2">
        <div class="px-2 py-1">Subtotal: <span class='text-medium'>$289.68</span></div>
        <div class="px-2 py-1">Shipping: <span class='text-medium'>$22.50</span></div>
        <div class="px-2 py-1">Tax: <span class='text-medium'>$3.42</span></div>
        <div class="text-lg px-2 py-1">Total: <span class='text-medium'>$315.60</span></div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
    {{-- sell on mulvenz modal --}}
    <!-- Why How MulVenZ-->
    <div class="modal fade" id="modalScroll" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sell on <span><b>Multi </span><span
                            style="color: orangered">Vendor</b></span>
                    </h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="sell_on_MVZ">
                    <p>
                        <h4>
                            <b><i>
                                    <center>Sell your products to crores of customers across India !!</center>
                                </i></b></h4>
                    </p>
                    <p>
                        <h6><b>Why sell on <a href="{{ route('home') }}"><span
                                        style="color: orangered">MulVenZ</span></a>?</b></h6>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Because you can showcase your products to
                        crores of customers &
                        businesses - 24 hours a day
                        - on vendor's destination. More than 5 lakh businesses, big and small, sell on Multi Vendor
                        today.
                        Start your selling journey with us and expand your business reach.
                    </p>
                    <p>
                        <h6><b>How to sell on <a href="{{ route('home') }}"><span
                                        style="color: orangered">MulVenZ.com</span></a>?</b></h6>
                        <ol>
                            <b>
                                <li>Create your Account</li>
                            </b>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To become an MultiVendor seller, all
                                you
                                need is your tax information (GST Number & PAN, depending on your category) and an
                                active bank account.</p>

                            <b>
                                <li>Add your products</li>
                            </b>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List your products for crores of
                                customers and business to purchase. you can add products using the Vendor area.</p>
                            <b>
                                <li>Start Selling</li>
                            </b>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: When an order has been placed for
                                one
                                of your products, MultiVendor notifies you by email as well as in your Vendor
                                Central dashboard.
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: The product shipment are
                                fully
                                belongs to your courier team you should deliver a
                                product within a weak atleast.
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: Payments are directly &
                                securely
                                deposited in your bank account in 7 days, after the success payment of Customer</p>
                        </ol>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn-sm" id="build_btn" href="{{ route('shop.build') }}">Build your
                        shop</a>
                </div>
            </div>
        </div>
    </div>
    <!-- T&C Content-->
    <div class="modal fade" id="modalScroll" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><span><b>Multi </span><span style="color: orangered">Vendor</b> Services
                            Business Solutions Agreement</span>
                    </h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>
                        <h4>
                            <b><i>
                                    <center>Sell your products to crores of customers across India !!</center>
                                </i></b></h4>
                    </p>
                    <p>
                        <h6><b>Why sell on <a href="{{ route('home') }}"><span
                                        style="color: orangered">MulVenZ</span></a>?</b></h6>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Because you can showcase your products to
                        crores of customers &
                        businesses - 24 hours a day
                        - on vendor's destination. More than 5 lakh businesses, big and small, sell on Multi Vendor
                        today.
                        Start your selling journey with us and expand your business reach.
                    </p>
                    <p>
                        <h6><b>How to sell on <a href="{{ route('home') }}"><span
                                        style="color: orangered">MulVenZ.com</span></a>?</b></h6>
                        <ol>
                            <b>
                                <li>Enrolment</li>
                            </b>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To begin the enrolment process, you must
                                complete the registration process for one or more of the Services. Use of the
                                Services is limited to parties that can lawfully enter into and form contracts under
                                applicable Law. As part of the
                                application, you must provide us with your (or your business') legal name, address,
                                phone number, e-mail address,
                                applicable tax registration details as well as any other information we may request.</p>

                            <b>
                                <li>Licence</li>
                            </b>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You grant us a royalty-free,
                                non-exclusive, worldwide right and licence for the duration of your original and
                                derivative
                                intellectual property rights during the Term and for as long thereafter as you are
                                permitted to grant the said licence
                                under applicable Law to use any and all of Your Materials for the Services or other
                                Multi Vendor product or service, and to
                                sublicense the foregoing rights to our Affiliates and operators of Multi Vendor
                                Associated
                                Properties; provided, however, that
                                we will not alter any of Your Trademarks from the form provided by you (except to
                                re-size trademarks to the extent
                                necessary for presentation, so long as the relative proportions of such trademarks
                                remain the same) and will comply with
                                your removal requests as to specific uses of Your Materials (provided you are unable to
                                do so using the standard
                                functionality made available to you via the applicable Multi Vendor Site or Services);
                                provided further, however, that nothing
                                in this Agreement will prevent or impair our right to use Your Materials without your
                                consent to the extent that such
                                use is allowable without a licence from you or your Affiliates under applicable Law
                                (e.g., fair use under copyright law,
                                referential use under trademark law, or valid licence from a third party).</p>
                            <b>
                                <li>Start Selling</li>
                            </b>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: When an order has been placed for
                                one
                                of your products, MultiVendor notifies you by email as well as in your Vendor
                                Central dashboard.
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: The product shipment are
                                fully
                                belongs to your courier team you should deliver a
                                product within a weak atleast.
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: Payments are directly &
                                securely
                                deposited in your bank account in 7 days, after the success payment of Customer</p>
                        </ol>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn-sm" href=" {{ route('shop.build') }} ">Build your shop</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Off-Canvas Category Menu-->
    <div class="offcanvas-container" id="shop-categories">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title">Shop Categories</h3>
        </div>
        <nav class="offcanvas-menu">
            <ul class="menu">
                <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="#">Sneakers</a></li>
                        <li><a href="#">Loafers</a></li>
                        <li><a href="#">Boat Shoes</a></li>
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">Flats</a></li>
                        <li><a href="#">Sneakers</a></li>
                        <li><a href="#">Heels</a></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#">Men's Clothing</a><span
                            class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="#">Shirts &amp; Tops</a></li>
                        <li><a href="#">Pants</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#">Women's Clothing</a><span
                            class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Shirts &amp; Tops</a></li>
                        <li><a href="#">Shorts</a></li>
                        <li><a href="#">Swimwear</a></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#">Kid's Shoes</a><span class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="#">Boots</a></li>
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">Crib Shoes</a></li>
                        <li><a href="#">Loafers</a></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="#">Handbags</a></li>
                        <li><a href="#">Backpacks</a></li>
                        <li><a href="#">Luggage</a></li>
                        <li><a href="#">Wallets</a></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Hats</a></li>
                        <li><a href="#">Watches</a></li>
                        <li><a href="#">Jewelry</a></li>
                        <li><a href="#">Belts</a></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="account-orders.html">
            <div class="user-ava"><img src="{{ asset('assets/img/account/user-ava-md.jpg') }}" alt="Daniel Adams">
            </div>
            <div class="user-info">
                <h6 class="user-name">Daniel Adams</h6><span class="text-sm text-white opacity-60">290 Reward
                    points</span>
            </div>
        </a>
        <nav class="offcanvas-menu">
            <ul class="menu">
                <li class="has-children"><span><a href="index.html"><span>Home</span></a><span
                            class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="index.html">Featured Products Slider</a></li>
                        <li><a href="home-featured-categories.html">Featured Categories</a></li>
                        <li><a href="home-collection-showcase.html">Products Collection Showcase</a></li>
                        <li><a href="home-dark-header.html">Dark Header</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#"><span>Shop</span></a><span
                            class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="#">Shop Categories</a></li>
                        <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop Grid</span></a><span
                                    class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                                <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                                <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><span><a href="shop-list-ls.html"><span>Shop List</span></a><span
                                    class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                                <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                                <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Single Product</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#">Categories</a><span class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li class="has-children"><span><a href="#">Men's Shoes</a><span
                                    class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="#">Sneakers</a></li>
                                <li><a href="#">Loafers</a></li>
                                <li><a href="#">Boat Shoes</a></li>
                                <li><a href="#">Sandals</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><span><a href="#">Women's Shoes</a><span
                                    class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="#">Sandals</a></li>
                                <li><a href="#">Flats</a></li>
                                <li><a href="#">Sneakers</a></li>
                                <li><a href="#">Heels</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><span><a href="#">Men's Clothing</a><span
                                    class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="#">Shirts &amp; Tops</a></li>
                                <li><a href="#">Pants</a></li>
                                <li><a href="#">Jackets</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><span><a href="#">Women's Clothing</a><span
                                    class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Shirts &amp; Tops</a></li>
                                <li><a href="#">Shorts</a></li>
                                <li><a href="#">Swimwear</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="#">Handbags</a></li>
                                <li><a href="#">Backpacks</a></li>
                                <li><a href="#">Luggage</a></li>
                                <li><a href="#">Wallets</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><span><a href="#">Accessories</a><span
                                    class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="#">Sunglasses</a></li>
                                <li><a href="#">Hats</a></li>
                                <li><a href="#">Watches</a></li>
                                <li><a href="#">Jewelry</a></li>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-children active"><span><a href="account-orders.html"><span>Account</span></a><span
                            class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="account-login.html">Login / Register</a></li>
                        <li><a href="account-password-recovery.html">Password Recovery</a></li>
                        <li class="active"><a href="account-orders.html">Orders List</a></li>
                        <li><a href="account-wishlist.html">Wishlist</a></li>
                        <li><a href="account-profile.html">Profile Page</a></li>
                        <li><a href="account-address.html">Contact / Shipping Address</a></li>
                        <li><a href="account-open-ticket.html">Open Ticket</a></li>
                        <li><a href="account-tickets.html">My Tickets</a></li>
                        <li><a href="account-single-ticket.html">Single Ticket</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="blog-rs.html"><span>Blog</span></a><span
                            class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li class="has-children"><span><a href="blog-rs.html"><span>Blog Layout</span></a><span
                                    class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><span><a href="blog-single-rs.html"><span>Single Post
                                        Layout</span></a><span class="sub-menu-toggle"></span></span>
                            <ul class="offcanvas-submenu">
                                <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                                <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                                <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="#"><span>Pages</span></a><span
                            class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="mobile-app.html">MulVenZ Mobile App</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="faq.html">Help / FAQ</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                        <li><a href="search-results.html">Search Results</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
                    </ul>
                </li>
                <li class="has-children"><span><a href="components/accordion.html"><span>Components</span></a><span
                            class="sub-menu-toggle"></span></span>
                    <ul class="offcanvas-submenu">
                        <li><a href="components/accordion.html">Accordion</a></li>
                        <li><a href="components/alerts.html">Alerts</a></li>
                        <li><a href="components/buttons.html">Buttons</a></li>
                        <li><a href="components/cards.html">Cards</a></li>
                        <li><a href="components/carousel.html">Carousel</a></li>
                        <li><a href="components/countdown.html">Countdown</a></li>
                        <li><a href="components/forms.html">Forms</a></li>
                        <li><a href="components/gallery.html">Gallery</a></li>
                        <li><a href="components/google-maps.html">Google Maps</a></li>
                        <li><a href="components/images.html">Images &amp; Figures</a></li>
                        <li><a href="components/list-group.html">List Group</a></li>
                        <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                        <li><a href="components/media.html">Media Object</a></li>
                        <li><a href="components/modal.html">Modal</a></li>
                        <li><a href="components/pagination.html">Pagination</a></li>
                        <li><a href="components/pills.html">Pills</a></li>
                        <li><a href="components/progress-bars.html">Progress Bars</a></li>
                        <li><a href="components/shop-items.html">Shop Items</a></li>
                        <li><a href="components/steps.html">Steps</a></li>
                        <li><a href="components/tables.html">Tables</a></li>
                        <li><a href="components/tabs.html">Tabs</a></li>
                        <li><a href="components/team.html">Team</a></li>
                        <li><a href="components/toasts.html">Toast Notifications</a></li>
                        <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                        <li><a href="components/typography.html">Typography</a></li>
                        <li><a href="components/video-player.html">Video Player</a></li>
                        <li><a href="components/widgets.html">Widgets</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Topbar-->
    <div class="topbar">
        <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@mulvenz.com"><i
                    class="icon-mail"></i>&nbsp; support@mulvenz.com</a><a class="hidden-md-down"
                href="tel:9842720958"><i class="icon-bell"></i>&nbsp; +91 9427 20958</a><a
                class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i
                    class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#"
                target="_blank"><i class="socicon-twitter"></i></a><a
                class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i
                    class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#"
                target="_blank"><i class="socicon-pinterest"></i></a>
        </div>
        {{-- <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile
                app</a>
            <div class="lang-currency-switcher-wrap">
                <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English"
                            src="{{ asset('assets/img/flags/GB.png') }}"></span><span class="currency">$ USD</span>
    </div>
    <div class="dropdown-menu">
        <div class="currency-select">
            <select class="form-control form-control-rounded form-control-sm">
                <option value="usd">$ USD</option>
                <option value="usd">€ EUR</option>
                <option value="usd">£ UKP</option>
                <option value="usd">¥ JPY</option>
            </select>
        </div><a class="dropdown-item" href="#"><img src="{{ asset('assets/img/flags/FR.png') }}"
                alt="Français">Français</a><a class="dropdown-item" href="#"><img
                src="{{ asset('assets/img/flags/DE.png') }}" alt="Deutsch">Deutsch</a><a class="dropdown-item"
            href="#"><img src="{{ asset('assets/img/flags/IT.png') }}" alt="Italiano">Italiano</a>
    </div>
    </div>
    </div> --}}
    </div>
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
        <!-- Search-->
        <form class="site-search" method="get">
            <input type="text" name="site_search" placeholder="Type to search...">
            <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i
                        class="icon-cross"></i></span></div>
        </form>
        <div class="site-branding">
            <div class="inner">
                <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle"
                    href="#shop-categories" data-toggle="offcanvas"></a>
                <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu"
                    data-toggle="offcanvas"></a>
                <!-- Site Logo--><a class="site-logo" href="{{ route('home') }}"><img
                        src="{{ asset('assets/img/logo/logo.png') }}" alt="MulVenZ"></a>
            </div>
        </div>
        <!-- Main Navigation-->
        <nav class="site-menu pl-5 d-flex justify-content-around">
            <ul>
                <li class="has-megamenu"><a href="{{ route('home') }}"><span>Home</span></a>

                </li>
                <li><a href="#"><span>Shop</span></a></li>
                {{-- <ul class="sub-menu"> --}}
                <li><a href="#"><span>Shop Categories</span></a></li>
                {{-- <li class="has-children"><a href="shop-grid-ls.html"><span>Shop Grid</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                                <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                                <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="shop-list-ls.html"><span>Shop List</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                                <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                                <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                            </ul>
                        </li> --}}
                {{-- <li><a href="shop-single.html">Single Product</a></li> --}}
                <li><a href="#"><span>Cart</span></a></li>
                <li class="#"><a href="checkout-address.html"><span>Checkout</span></a>
                    <ul class="sub-menu">
                        <li><a href="checkout-address.html">Address</a></li>
                        <li><a href="checkout-shipping.html">Shipping</a></li>
                        <li><a href="checkout-payment.html">Payment</a></li>
                        <li><a href="checkout-review.html">Review</a></li>
                        <li><a href="checkout-complete.html">Complete</a></li>
                    </ul>
                </li>
                {{-- </ul> --}}

                {{-- <li class="has-megamenu"><a href="#"><span>Mega Menu</span></a>
                    <ul class="mega-menu">
                        <li><span class="mega-menu-title">Top Categories</span>
                            <ul class="sub-menu">
                                <li><a href="#">Men's Shoes</a></li>
                                <li><a href="#">Women's Shoes</a></li>
                                <li><a href="#">Shirts and Tops</a></li>
                                <li><a href="#">Swimwear</a></li>
                                <li><a href="#">Shorts and Pants</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </li>
                        <li><span class="mega-menu-title">Specialty Shops</span>
                            <ul class="sub-menu">
                                <li><a href="#">Junior's Shop</a></li>
                                <li><a href="#">Swim Shop</a></li>
                                <li><a href="#">Athletic Shop</a></li>
                                <li><a href="#">Outdoor Shop</a></li>
                                <li><a href="#">Luxury Shop</a></li>
                                <li><a href="#">Accessories Shop</a></li>
                            </ul>
                        </li>
                        <li>
                            <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span
                                    class="overlay-dark" style="opacity: .4;"></span>
                                <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                    <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                                    <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a
                                        class="btn btn-sm btn-primary" href="#">Shop Now</a>
                                </div>
                            </section>
                        </li>
                        <li>
                            <section class="promo-box" style="background-image: url(img/banners/03.jpg);">
                                <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span
                                    class="overlay-dark" style="opacity: .45;"></span>
                                <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                    <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                                    <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a
                                        class="btn btn-sm btn-primary" href="#">Learn More</a>
                                </div>
                            </section>
                        </li>
                    </ul>
                </li>
                <li class="active"><a href="account-orders.html"><span>Account</span></a>
                    <ul class="sub-menu">
                        <li><a href="account-login.html">Login / Register</a></li>
                        <li><a href="account-password-recovery.html">Password Recovery</a></li>
                        <li class="active"><a href="account-orders.html">Orders List</a></li>
                        <li><a href="account-wishlist.html">Wishlist</a></li>
                        <li><a href="account-profile.html">Profile Page</a></li>
                        <li><a href="account-address.html">Contact / Shipping Address</a></li>
                        <li><a href="account-tickets.html">My Tickets</a></li>
                        <li><a href="account-single-ticket.html">Single Ticket</a></li>
                    </ul>
                </li>
                <li><a href="blog-rs.html"><span>Blog</span></a>
                    <ul class="sub-menu">
                        <li class="has-children"><a href="blog-rs.html"><span>Blog Layout</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="blog-single-rs.html"><span>Single Post Layout</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                                <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                                <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span>Pages</span></a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="faq.html">Help / FAQ</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                        <li><a href="search-results.html">Search Results</a></li>
                        <li><a href="404.html">404 Not Found</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
                    </ul>
                </li>
                <li class="has-megamenu"><a href="components/accordion.html"><span>Components</span></a>
                    <ul class="mega-menu">
                        <li><span class="mega-menu-title">A - F</span>
                            <ul class="sub-menu">
                                <li><a href="components/accordion.html">Accordion</a></li>
                                <li><a href="components/alerts.html">Alerts</a></li>
                                <li><a href="components/buttons.html">Buttons</a></li>
                                <li><a href="components/cards.html">Cards</a></li>
                                <li><a href="components/carousel.html">Carousel</a></li>
                                <li><a href="components/countdown.html">Countdown</a></li>
                                <li><a href="components/forms.html">Forms</a></li>
                            </ul>
                        </li>
                        <li><span class="mega-menu-title">G - M</span>
                            <ul class="sub-menu">
                                <li><a href="components/gallery.html">Gallery</a></li>
                                <li><a href="components/google-maps.html">Google Maps</a></li>
                                <li><a href="components/images.html">Images &amp; Figures</a></li>
                                <li><a href="components/list-group.html">List Group</a></li>
                                <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                                <li><a href="components/media.html">Media Object</a></li>
                                <li><a href="components/modal.html">Modal</a></li>
                            </ul>
                        </li>
                        <li><span class="mega-menu-title">P - T</span>
                            <ul class="sub-menu">
                                <li><a href="components/pagination.html">Pagination</a></li>
                                <li><a href="components/pills.html">Pills</a></li>
                                <li><a href="components/progress-bars.html">Progress Bars</a></li>
                                <li><a href="components/shop-items.html">Shop Items</a></li>
                                <li><a href="components/spinners.html">Spinners</a></li>
                                <li><a href="components/steps.html">Steps</a></li>
                                <li><a href="components/tables.html">Tables</a></li>
                            </ul>
                        </li>
                        <li><span class="mega-menu-title">T - W</span>
                            <ul class="sub-menu">
                                <li><a href="components/tabs.html">Tabs</a></li>
                                <li><a href="components/team.html">Team</a></li>
                                <li><a href="components/toasts.html">Toast Notifications</a></li>
                                <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                                <li><a href="components/typography.html">Typography</a></li>
                                <li><a href="components/video-player.html">Video Player</a></li>
                                <li><a href="components/widgets.html">Widgets</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                <li class="pt-3"><span>
                        <form class="input-group form-group" method="get"><span class="input-group-btn">
                                <button type="submit"><i class="icon-search"></i></button></span>
                            <input class="form-control w-100" type="search" placeholder="Search site">
                        </form>
                    </span></li>
            </ul>
        </nav>
        <!-- Toolbar-->
        <div class="toolbar">
            <div class="inner">
                <div class="tools">
                    {{-- <div class="search"><i class="icon-search"></i></div> --}}
                    @auth
                    <div class="account"><a href="#"></a><i class="icon-head"></i>
                        <ul class="toolbar-dropdown">
                            <li class="sub-menu-user">
                                <div class="user-ava"><img
                                        src="../assets/img/profile_img/{{ auth()->user()->profile_photo }}"
                                        alt="{{ auth()->user()->name }}">
                                </div>
                                <div class="user-info">
                                    <h6 class="user-name">{{ auth()->user()->name }}</h6><span
                                        class="text-xs text-muted"><b>Joined
                                        </b>{{ date('M d Y', strtotime(auth()->user()->created_at)) }}</span>
                                </div>
                            </li>
                            <li><a href="{{ route('customer.profile') }}">My Profile</a></li>
                            <li><a href="{{ route('customer.orders') }}">Orders List</a></li>
                            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                            <li class="sub-menu-separator"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i
                                        class="icon-unlock"></i>Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                    @endauth
                    @guest
                    <div class="account"><a href="#"></a><i class="icon-head"></i>
                        <ul class="toolbar-dropdown">
                            <li class="sub-menu-user">
                                <div class="user-ava"><i class="icon-head"></i>
                                </div>
                                <div class="user-info">
                                    <h6 class="user-name">Hello,</h6><span class="text-xs text-muted">Welcome back to
                                        MulVenZ</span>
                                </div>
                            </li>
                            <li><a href="{{ route('customer.profile') }}">My Profile</a></li>
                            <li><a href="{{ route('customer.orders') }}">Orders List</a></li>
                            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                            <li class="sub-menu-separator"></li>
                            <li><a class="nav-link" href="{{ route('login_register') }}">{{ __('Login') }}</a></li>
                        </ul>
                    </div>
                    @endguest
                    @auth
                    <div class="cart"><a href="{{ route('cart.index') }}"></a><i class="icon-bag"></i><span
                            class="count">{{ \Cart::session(auth()->id())->getContent()->count() }}</span><span
                            class="subtotal">₹{{\Cart::session(auth()->id())->getTotal()}}.00</span>
                        <div class="toolbar-dropdown">
                            @php
                            $cartItems = \Cart::session(auth()->id())->getContent();
                            @endphp
                            @foreach ($cartItems as $item)
                            @php
                            $img= App\Image::where('product_id',$item->id)->get();
                            @endphp
                            <div class="dropdown-product-item"><span class="dropdown-product-remove"><a
                                        href="{{route ('cart.destroy',$item->id)}}"><i
                                            class="icon-cross text-danger"></i></a></span><a
                                    class="dropdown-product-thumb" href="{{ route('details',$item->id) }}"><img
                                        src="/assets/img/product_img/{{ $img[0]->file_name }}" alt="Product"></a>

                                <div class="dropdown-product-info"><a class="dropdown-product-title"
                                        href="{{ route('details',$item->id) }}">{{ $item->name }}</a><span
                                        class="dropdown-product-details">{{$item->quantity}} x ₹
                                        {{\Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</span></div>
                            </div>
                            @endforeach
                            <div class="" style="display : sticky">
                                <hr>
                                <div class="toolbar-dropdown-group row">
                                    <div class="col-6"><span class="text-lg">Total:</span></div>
                                    <div class="col-6 text-right"><span
                                            class="text-lg text-medium">₹{{\Cart::session(auth()->id())->getTotal()}}.00&nbsp;</span>
                                    </div>
                                </div>
                                <div class="toolbar-dropdown-group row">
                                    <div class="col-6"><a class="sample btn btn-sm btn-block btn-secondary"
                                            href="{{ route('cart.index') }}">View Cart</a></div>
                                    <div class="col-6"><a class="btn btn-sm btn-block btn-success"
                                            href="{{ route('cart.checkout')}}">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class=" offcanvas-wrapper">
        {{-- address_update_message --}}
        @if (session('address_update_message'))
        <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
            <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                alert:</strong>{{ session('address_update_message') }}</div>
        @endif
        {{-- wishlist_clear_message --}}
        @if (session('wishlist_clear_message'))
        <div class="alert alert-warning alert-dismissible fade show text-center margin-bottom-1x">
            <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                alert:</strong>{{ session('wishlist_clear_message') }}</div>
        @endif
        {{-- shop_request --}}
        @if (session('shop_request'))
        <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
            <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                alert:</strong>{{ session('shop_request') }}</div>
        @endif
        {{-- shop_request_exist --}}
        @if (session('shop_request_exist'))
        <div class="alert alert-warning alert-dismissible fade show text-center margin-bottom-1x">
            <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                alert:</strong>{{ session('shop_request_exist') }}</div>
        @endif
        {{-- shop_update_message --}}
        @if (session('shop_update_message'))
        <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
            <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                alert:</strong>{{ session('shop_update_message') }}</div>
        @endif
        {{-- product_create_message --}}
        @if (session('product_create_message'))
        <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
            <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                alert:</strong>{{ session('product_create_message') }}</div>
        @endif
        {{-- product_update_message --}}
        @if (session('product_update_message'))
        <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
            <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                alert:</strong>{{ session('product_update_message') }}</div>
        @endif
        {{-- product_delete_message --}}
        @if (session('product_delete_message'))
        <div class="alert alert-warning alert-dismissible fade show text-center margin-bottom-1x">
            <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                alert:</strong>{{ session('product_delete_message') }}</div>
        @endif
        <!-- Page Content-->
        @yield('content')

        <!-- Site Footer-->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Contact Info-->
                        <section class="widget widget-light-skin">
                            <h3 class="widget-title">Get In Touch With Us</h3>
                            <p class="text-white">Phone: +91 98427 20958</p>
                            <ul class="list-unstyled text-sm text-white">
                                <li><span class="opacity-50">Monday-Friday:</span>9.00
                                    am - 8.00 pm</li>
                                <li><span class="opacity-50">Saturday:</span>10.00 am -
                                    6.00 pm</li>
                            </ul>
                            <p><a class="navi-link-light" href="#">support@mulvenz.com</a></p><a
                                class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i
                                    class="socicon-facebook"></i></a><a
                                class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i
                                    class="socicon-twitter"></i></a><a
                                class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i
                                    class="socicon-instagram"></i></a><a
                                class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i
                                    class="socicon-googleplus"></i></a>
                        </section>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                        <!-- Mobile App Buttons-->
                        <section class="widget widget-light-skin">
                            <h3 class="widget-title">Mobile App will Comming Soon</h3><a
                                class="market-button apple-button mb-light-skin" href="#"><span
                                    class="mb-subtitle">Download on
                                    the</span><span class="mb-title">App
                                    Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span
                                    class="mb-subtitle">Download on
                                    the</span><span class="mb-title">Google
                                    Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span
                                    class="mb-subtitle">Download on
                                    the</span><span class="mb-title">Windows
                                    Store</span></a>
                        </section>
                    </div> --}}
                    <div class="col-lg-3 col-md-6">
                        <!-- About Us-->
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title">About Us</h3>
                            <ul>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">About Mulvenz</a></li>
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Our Blog</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Account / Shipping Info-->
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title">Account &amp; Shipping Info</h3>
                            <ul>
                                <li><a href="{{ route('customer.profile') }}">Your Account</a></li>
                                <li><a href="#">Shipping Rates & Policies</a></li>
                                <li><a href="#">Refunds & Replacements</a></li>
                                <li><a href="#">Delivery Info</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Account / Shipping Info-->
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title">Any Bugus you are facing ?</h3>
                            <p>If yes, please leave your problem we will rectify soon</p>
                            <form action="">
                                <textarea name="" id="" cols="32" rows="7" class="form-control"
                                    style="background-color: transparent;color:aqua"></textarea>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary " type="submit">Submit</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
                <hr class="hr-light mt-2 margin-bottom-2x">
                <div class="row">
                    <div class="col-md-7 padding-bottom-1x">
                        <!-- Payment Methods-->
                        <div class="margin-bottom-1x" style="max-width: 615px;"><img
                                src="{{ asset('assets/img/payment_methods.png') }}" alt="Payment Methods">
                        </div>
                    </div>
                    <div class="col-md-5 padding-bottom-1x">
                        <div class="margin-top-1x hidden-md-up"></div>
                        <!--Subscription-->
                        <form class="subscribe-form"
                            action="http://rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544"
                            method="post" target="_blank" novalidate>
                            <div class="clearfix">
                                <div class="input-group input-light">
                                    <input class="form-control" type="email" name="EMAIL"
                                        placeholder="Your e-mail"><span class="input-group-addon"><i
                                            class="icon-mail"></i></span>
                                </div>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                                </div>
                                <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                            </div><span class="form-text text-sm text-white opacity-50">Subscribe
                                to our Newsletter to
                                receive early discount offers, latest news, sales and
                                promo information.</span>
                        </form>
                    </div>
                </div>
                <!-- Copyright-->
                <p class="footer-copyright text-center">© All rights reserved. Made with &nbsp;<i
                        class="icon-heart text-danger"></i><a href="http://sathizh.hostsz.tk/" target="_blank"> &nbsp;by
                        Freshnote</a></p>
            </div>
        </footer>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" id="scroll_top" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.min.js') }}"></script>
    <script src="{{ asset('assets/js/myscript.js') }}"></script>

    <!-- Customizer scripts-->
    <script src="{{ asset('assets/customizer/customizer.min.js') }}"></script>

    {{-- Datatables --}}
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    {{-- chart --}}

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    {{-- tagify --}}
    <script type="text/javascript" src="{{ asset('assets/js/tagify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jQuery.tagify.min.js') }}"></script>

    @include('auth.script')
</body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.2.1/template-1/account-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 May 2020 06:34:02 GMT -->

</html>
