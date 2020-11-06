@extends('layouts.unishop')
@section('content')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">

    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1 mt-5">
        <div class="row">
            <!-- Poduct Gallery-->
            <div class="col-md-6">
                <div class="product-gallery"><span class="product-badge text-danger">30% Off</span>

                    <div class="product-carousel owl-carousel gallery-wrapper">
                        <div class="gallery-item" data-hash="one"><a href="{{ asset('default.jpg') }}"
                                data-size="1000x667"><img src="{{ asset('default.jpg') }}" alt="Product"></a></div>
                        <div class="gallery-item" data-hash="two"><a href="{{ asset('default.jpg') }}"
                                data-size="1000x667"><img src="{{ asset('default.jpg') }}" alt="Product"></a></div>
                        <div class="gallery-item" data-hash="three"><a href="{{ asset('default.jpg') }}"
                                data-size="1000x667"><img src="{{ asset('default.jpg') }}" alt="Product"></a></div>
                        <div class="gallery-item" data-hash="four"><a href="{{ asset('default.jpg') }}"
                                data-size="1000x667"><img src="{{ asset('default.jpg') }}" alt="Product"></a></div>
                        <div class="gallery-item" data-hash="five"><a href="{{ asset('default.jpg') }}"
                                data-size="1000x667"><img src="{{ asset('default.jpg') }}" alt="Product"></a></div>
                    </div>
                    <ul class="product-thumbnails">
                        <li class="active"><a href="#one"><img src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                        <li><a href="#two"><img src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                        <li><a href="#three"><img src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                        <li><a href="#four"><img src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                        <li><a href="#five"><img src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                    </ul>
                </div>
            </div>
            <!-- Product Info-->
            <div class="col-md-6">
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i
                        class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 3 customer reviews</span>
                <h2 class="padding-top-1x text-normal">{{ $details->name }}</h2><span class="h2 d-block">
                    ₹{{ $details->price }}</span>
                <p id="description">{{ $details->description }}</p>

                <script>
                    jQuery(document).ready(function () {
                        console.log(`$details->description`);
                    });
                </script>
                <hr class="mb-3">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="entry-share mt-2 mb-2"><span class="text-muted">Share:</span>
                        <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#"
                                data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                    class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter"
                                href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                    class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram"
                                href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                    class="socicon-instagram"></i></a><a
                                class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip"
                                data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
                    </div>
                    <div class="sp-buttons mt-2 mb-2">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-primary" data-toast data-toast-type="success"
                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                            data-toast-title="Product" data-toast-message="successfuly added to cart!"><i
                                class="icon-bag"></i> Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Tabs-->
        <div class="row padding-top-3x mb-3">
            <div class="col-lg-10 offset-lg-1">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab"
                            role="tab">Description</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">Reviews
                            (3)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error blanditiis a, deserunt magnam
                            pariatur quam suscipit quae. Veniam, deserunt reprehenderit quasi hic recusandae itaque
                            omnis fugiat animi architecto facilis repellendus. Commodi dolorem, eius consectetur. Amet
                            maiores nemo at nobi s aspernatur velit, sequi odio, a veritatis inventore autem esse
                            provident in? Placeat, sunt!</p>
                        <p class="mb-30">Iste assumenda, vitae, aliquam excepturi libero quia ullam quisquam tenetur id
                            sint labore. Pariatur praesentium velit, fugit facere maxime voluptates optio qui? Quidem
                            obcaecati necessitatibus rem aspernatur, mollitia, assumenda explicabo numquam minus eos
                            sapiente totam dicta, laborum dolorum! Vitae distinctio quos non ut fugiat.</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <dl>
                                    <dt>Materials:</dt>
                                    <dd>Leather, Cotton, Rubber, Foam</dd>
                                    <dt>Available Sizes:</dt>
                                    <dd>8.5, 9.0, 9.5, 10.0, 10.5, 11.0, 11.5</dd>
                                    <dt>Available Colors:</dt>
                                    <dd>White/Red/Blue, Black/Orange/Green</dd>
                                </dl>
                            </div>
                            <div class="col-sm-6">
                                <dl>
                                    <dt>Model Year:</dt>
                                    <dd>2016</dd>
                                    <dt>Manufacturer:</dt>
                                    <dd>Reebok Inc.</dd>
                                    <dt>Made In:</dt>
                                    <dd>Taiwan</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava"><img src="{{ asset('default.jpg') }}" alt="Review author">
                            </div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">Average quality for the price</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars"><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star filled"></i><i
                                                class="icon-star"></i><i class="icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                    qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                <div class="comment-footer"><span class="comment-meta">Francis Burton</span></div>
                            </div>
                        </div>
                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava"><img src="{{ asset('default.jpg') }}" alt="Review author">
                            </div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">My husband love his new...</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars"><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <div class="comment-footer"><span class="comment-meta">Maggie Scott</span></div>
                            </div>
                        </div>
                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava"><img src="{{ asset('default.jpg') }}" alt="Review author">
                            </div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">Soft, comfortable, quite durable...</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars"><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <div class="comment-footer"><span class="comment-meta">Jacob Hammond</span></div>
                            </div>
                        </div>
                        <!-- Review Form-->
                        <h5 class="mb-30 padding-top-1x">Leave Review</h5>
                        <form class="row" method="post">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review_name">Your Name</label>
                                    <input class="form-control form-control-rounded" type="text" id="review_name"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review_email">Your Email</label>
                                    <input class="form-control form-control-rounded" type="email" id="review_email"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review_subject">Subject</label>
                                    <input class="form-control form-control-rounded" type="text" id="review_subject"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review_rating">Rating</label>
                                    <select class="form-control form-control-rounded" id="review_rating">
                                        <option>5 Stars</option>
                                        <option>4 Stars</option>
                                        <option>3 Stars</option>
                                        <option>2 Stars</option>
                                        <option>1 Star</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="review_text">Review </label>
                                    <textarea class="form-control form-control-rounded" id="review_text" rows="8"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-right">
                                <button class="btn btn-outline-primary" type="submit">Submit Review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Products Carousel-->
        <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3>
        <!-- Carousel-->
        <div class="owl-carousel"
            data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="product-badge text-danger">22% Off</div><a class="product-thumb"
                        href="shop-single.html"><img src="{{ asset('default.jpg') }}" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html">Rocket Dog</a></h3>
                    <h4 class="product-price">
                        <del>$44.95</del>$34.99
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                            data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i
                            class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                    </div><a class="product-thumb" href="shop-single.html"><img src="{{ asset('default.jpg') }}"
                            alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
                    <h4 class="product-price">$155.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                            data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img
                            src="{{ asset('default.jpg') }}" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html">Vented Straw Fedora</a></h3>
                    <h4 class="product-price">$49.50</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                            data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i
                            class="icon-star filled"></i><i class="icon-star filled"></i><i
                            class="icon-star filled"></i>
                    </div><a class="product-thumb" href="shop-single.html"><img src="{{ asset('default.jpg') }}"
                            alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
                    <h4 class="product-price">$90.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                            data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img
                            src="{{ asset('default.jpg') }}" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
                    <h4 class="product-price">$47.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                            data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to
                            Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="product-badge text-danger">50% Off</div><a class="product-thumb"
                        href="shop-single.html"><img src="{{ asset('default.jpg') }}" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
                    <h4 class="product-price">
                        <del>$99.99</del>$49.99
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                            data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to
                            Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
@endsection
