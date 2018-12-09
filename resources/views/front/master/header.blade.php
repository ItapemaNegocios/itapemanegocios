<header class="header fixed clearfix">
    <div class="left">
        <div class="logo">
            <a href="{{ url('/') }}" title="">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" title="" class="img-responsive">
            </a>
        </div>
        <form class="header-search" method="post" action="">
            <input type="text" placeholder="Estou procurando por...">
            <button><i class="pe-7s-search"></i></button>
        </form>
    </div> <!-- end .left -->
    <div class="navigation clearfix">
        <nav class="main-nav">
            <ul class="list-unstyled">
                <li class="menu-item-has-children">
                    <a href="">Explore</a>
                    <ul>
                        <li><a href="list.html">All Listings</a></li>
                        <li class="menu-item-has-children">
                            <a href="list.html">Food & Drink<i class="pe-7s-right-arrow"></i></a>
                            <ul>
                                <li><a href="list.html">Cafe’</a></li>
                                <li><a href="list.html">Restaurant</a></li>
                                <li><a href="list.html">Pizza Place</a></li>
                            </ul>
                        </li>
                        <li><a href="list.html">Entertainment</a></li>
                        <li><a href="list.html">Nightlife</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="index.php">Pages</a>
                    <ul>
                        <li><a href="how-it-works.html">How It Works</a></li>
                        <li><a href="add-listing.html">Add Listing</a></li>
                        <li><a href="add-your-listing.html">Add Your Listing</a></li>
                        <li><a href="list.html">List</a></li>
                        <li><a href="list-detail.html">List Detail</a></li>
                        <li class="menu-item-has-children">
                            <a href="dashboard.html">Dashboard<i class="pe-7s-right-arrow"></i></a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="my-listings.html">My Listings</a></li>
                                <li><a href="my-wishlist.html">My Wishlist</a></li>
                                <li><a href="edit-profile.html">Edit Profile</a></li>
                            </ul>
                        </li>
                        <li><a href="maintenance.html">Maintenance</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-post.html">Blog Post</a></li>
                        <li><a href="blog-post-video.html">Blog Post Video</a></li>
                        <li><a href="blog-post-gallery.html">Blog Post Gallery</a></li>
                        <li><a href="blog-post-quote.html">Blog Post Quote</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="shop.html">Shop</a>
                    <ul>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-details.html">Shop Details</a></li>
                        <li><a href="shop-cart.html">Shop Cart</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
    </div>
    @if (rand(0, 1) == 1)
        <div class="right">
            <a href="" class="button login-open">Acessar Conta</a>
        </div>
    @else
        <div class="right">
            <div class="user">
                <div class="avatar"><img src="{{ asset('assets/images/avatar04.jpg') }}" alt="avatar"></div>
                Angelbi88 . <a href="">Log Out</a>
            </div>
        </div>
    @endif
</header>
<div class="responsive-menu">
    <a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
    <nav class="responsive-nav"></nav>
</div>