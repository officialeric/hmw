<x-layout>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Simple Black T-Shirt</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Norda Backpack</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">order tracking</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- order tracking start -->
        <div class="order-tracking-area pt-110 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10 ms-auto me-auto">
                        <div class="order-tracking-content">
                            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                            <div class="order-tracking-form">
                                <form action="#">
                                    <div class="sin-order-tracking">
                                        <label>Order ID</label>
                                        <input type="text" placeholder="Found in your order confirmation email.">
                                    </div>
                                    <div class="sin-order-tracking">
                                        <label>Billing Email</label>
                                        <input type="email" placeholder="Email you used during checkout">
                                    </div>
                                    <div class="order-track-btn">
                                        <a href="#">Track Now</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>