 <div class="banner header-text">
     <div class="owl-banner owl-carousel">
         <div class="banner-item-01">
             <div class="text-content">
                 <h4>Best Offer</h4>
                 <h2>New Arrivals On Sale</h2>
             </div>
         </div>
         <div class="banner-item-02">
             <div class="text-content">
                 <h4>Flash Deals</h4>
                 <h2>Get your best products</h2>
             </div>
         </div>
         <div class="banner-item-03">
             <div class="text-content">
                 <h4>Last Minute</h4>
                 <h2>Grab last minute deals</h2>
             </div>
         </div>
     </div>
 </div>
 <!-- Banner Ends Here -->

 @include('user.app.latestProducts')
 @yield('content')

 <div class="best-features">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="section-heading">
                     <h2>About Our Accessories</h2>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="left-content">
                     <h4>What you’ll find in our store?</h4>
                     <p>Welcome to Your Ultimate Online Store!
                         Discover a world of fashion, beauty, and lifestyle products — all in one place. Our online
                         store is designed to bring you the latest trends, premium quality, and unbeatable prices.</p>
                     <ul class="featured-list">
                         <li>👗 <a href="#">Fashion & Clothing – Modern outfits for every occasion.</a></li>
                         <li>👜 <a href="#">Bags & Accessories – Elegant handbags, wallets, and trendy
                                 accessories.</a></li>
                         <li>👟 <a href="#">Shoes & Footwear – Comfortable and stylish designs for all ages.</a>
                         </li>
                         <li>💎 <a href="#">Jewelry & Watches – Timeless pieces that highlight your
                                 personality.</a></li>
                         <li>🏠 <a href="#">Home & Lifestyle – Unique items to make your home more beautiful.</a>
                         </li>
                         <li>🎁 <a href="#">Gifts & Specials – Perfect choices for birthdays, anniversaries, and
                                 every celebration.</a></li>
                     </ul>

                     <a href="{{ route('ourProductsUser') }}" class="filled-button">View Products</a>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="right-image">
                     <img src="{{ asset('assets/images/product_03.jpg') }}" alt="Girls Accessories">
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="call-to-action">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="inner-content">
                     <div class="row">
                         <div class="col-md-8">
                             <h4>Your All-in-One <em>Online Store</em></h4>
                             <p>Discover our exclusive collection that blends fashion, elegance, and quality —
                                 bringing you clothing, accessories, footwear, jewelry, home essentials, and more — all
                                 in one place.</p>

                         </div>
                         <div class="col-md-4">
                             <a href="{{ route('ourProductsUser') }}" class="filled-button">Shop Now</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
