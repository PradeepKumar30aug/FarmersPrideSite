<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesground.com/alturas/V2/list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 05:33:43 GMT -->
<?php include('include/head_style.php'); ?>
<body class="category-page">
<div id="page">
  
  <!-- Header -->
  <header>
   <?php include('include/nav-bar.php'); ?>
   <?php include('include/nav-menu.php');?>
  </header>
  <!-- end header -->
  
  <!-- Main Container -->
  <section class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-push-3"> 
        
        <!-- Breadcrumbs -->
           <!--  <div class="breadcrumbs">
              <ul>
                <li class="home"> <a href="index-2.html" title="Go to Home Page">Home</a> <span>/</span> </li>
                <li class="category1599"> <a href="grid.html" title="">Fruits</a> <span>/ </span> </li>
                <li class="category1600"> <a href="grid.html" title="">Tropical Fruits</a> <span>/</span> </li>
                <li class="category1601"> <strong>Fresh Organic Mustard Leaves </strong> </li>
              </ul>
            </div> -->
            <!-- Breadcrumbs End --> 
             <?php
                         if(isset($_GET['catID'])){
                  $catid=$_GET['catID'];
                          require 'DBConnect.php';
                           $select="SELECT productsTable.id,productsTable.bestproduct,productsTable.productdesc,
                            productsTable.productimage, productsTable.name,specialtyTable.specility_name, productDetailsTable.stock,
                            productsCatTable.catname , farmerDetails.farmers_name, farmerDetails.state,
                            productDetailsTable.weightunit, units.si_unit, productDetailsTable.weight, 
                            productDetailsTable.actualprice, productDetailsTable.salesprice, productDetailsTable.hidefromstore
                            FROM products productsTable  
                            INNER JOIN product_cat productsCatTable on productsTable.catID = productsCatTable.id  
                            INNER JOIN products_detail productDetailsTable on productsTable.id = productDetailsTable.productid 
                            INNER JOIN specialty specialtyTable on specialtyTable.id = productsTable.specID 
                            INNER JOIN farmer_details farmerDetails on farmerDetails.id = productsTable.farmerID 
                            INNER JOIN si_unit units on productDetailsTable.weightunit = units.id WHERE productsCatTable.catid=$catid  ORDER BY productDetailsTable.itemposition ASC;";
                            $run=mysqli_query($con,$select);
                            
                            $baseurl = "http://127.0.0.1:81/FSpride/";
                            while($row=mysqli_fetch_assoc($run)){
                              $catname=$row['catname'];
                            }
                          }
                           ?>

          <div>

            <h2 class="page-heading"> <span class="page-heading-title"><?php echo $catname; ?></span> </h2>
          </div>
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  
                  <!-- Item -->
                 <!--  <div class="item"> <a href="#"><img alt="" src="images/category-img1.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Season 2019</div>
                      <h2 class="cat-heading">Digital <span>World</span></h2>
                      <p>GET 40% OFF &sdot; Free Delivery </p>
                    </div>
                  </div> -->
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src=""></a>
                   <!--  <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Xperia Brands</div>
                      <h2 class="cat-heading">Lighting <span>sale</span></h2>
                      <p>Save 70% on all items</p>
                    </div> -->
                    <!-- End Item --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <article class="col-main">
            <div class="toolbar">
              <div class="display-product-option">
                <div class="sorter">
                  <div class="view-mode"> <a class="button-grid" title="Grid" href="index.php">&nbsp;</a><span class="button-active button-list" title="List">&nbsp;</span> </div>
                </div>
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
                <div class="product-option-right">
                  <div id="sort-by">
                    <label class="left">Sort By: </label>
                    <ul>
                      <li><a href="#">Position<span class="right-arrow"></span></a>
                        <ul>
                          <li><a href="#">Name</a></li>
                          <li><a href="#">Price</a></li>
                          <li><a href="#">Position</a></li>
                        </ul>
                      </li>
                    </ul>
                    <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                  <div class="pager">
                    <div id="limiter">
                      <label>View: </label>
                      <ul>
                        <li><a href="#">15<span class="right-arrow"></span></a>
                          <ul>
                            <li><a href="#">20</a></li>
                            <li><a href="#">30</a></li>
                            <li><a href="#">35</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="category-products">
              <ol class="products-list" id="products-list">
                <?php
                         if(isset($_GET['catID'])){
                  $catid=$_GET['catID'];
                          require 'DBConnect.php';
                           $select="SELECT productsTable.id,productsTable.bestproduct,productsTable.productdesc,
                            productsTable.productimage, productsTable.name,specialtyTable.specility_name, productDetailsTable.stock,
                            productsCatTable.catname , farmerDetails.farmers_name, farmerDetails.state,
                            productDetailsTable.weightunit, units.si_unit, productDetailsTable.weight, 
                            productDetailsTable.actualprice, productDetailsTable.salesprice, productDetailsTable.hidefromstore
                            FROM products productsTable  
                            INNER JOIN product_cat productsCatTable on productsTable.catID = productsCatTable.id  
                            INNER JOIN products_detail productDetailsTable on productsTable.id = productDetailsTable.productid 
                            INNER JOIN specialty specialtyTable on specialtyTable.id = productsTable.specID 
                            INNER JOIN farmer_details farmerDetails on farmerDetails.id = productsTable.farmerID 
                            INNER JOIN si_unit units on productDetailsTable.weightunit = units.id WHERE productsCatTable.catid=$catid  ORDER BY productDetailsTable.itemposition ASC;";
                            $run=mysqli_query($con,$select);
                            
                            $baseurl = "http://127.0.0.1:81/FSpride/";
                            while($row=mysqli_fetch_assoc($run)){
                              $name=$row['name'];
                            
                           ?>
                <li class="item first">
                  <div class="product-image"> <a href="product_detail.php?product_id=<?php echo $row['id'] ?>" title="HTC Rhyme Sense"><img alt="Retis lapen casen" src="<?php echo $baseurl.$row['productimage']; ?>"> </a>
                  
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a href="product_detail.php?product_id=<?php echo $row['id'] ?>" title="HTC Rhyme Sense"><?php echo $row['name']." - ".$row['weightunit']." ".$row['si_unit'] ; ?> </a></h2>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std" maxlength="10">
                       <?php  echo $row['productdesc'];  ?>
                      <a class="link-learn" title="" href="product_detail.php?product_id=<?php echo $row['id'] ?>">Learn More</a> </p>
                    </div>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span class="price"> &#8377; <?php echo $row['actualprice']; ?></span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span class="price"> &#8377; <?php echo $row['salesprice']; ?> </span> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"></a> <a title="Add to Compare" class="button link-compare" href="compare.html"></a> </span> </div>
                  </div>
                </li>
                <?php }} ?>
              </ol>
            </div>
            <div class="toolbar">
              <div class="display-product-option">
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
                <div class="product-option-right">
                  <div id="sort-by">
                    <label class="left">Sort By: </label>
                    <ul>
                      <li><a href="#">Position<span class="right-arrow"></span></a>
                        <ul>
                          <li><a href="#">Name</a></li>
                          <li><a href="#">Price</a></li>
                          <li><a href="#">Position</a></li>
                        </ul>
                      </li>
                    </ul>
                    <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                  <div class="pager">
                    <div id="limiter">
                      <label>View: </label>
                      <ul>
                        <li><a href="#">15<span class="right-arrow"></span></a>
                          <ul>
                            <li><a href="#">20</a></li>
                            <li><a href="#">30</a></li>
                            <li><a href="#">35</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <div class="side-banner"></div>
          <div class="block block-layered-nav">
            <div class="block-title">Shop By</div>
            <div class="block-content">
              <p class="block-subtitle">Shopping Options</p>
              <dl id="narrow-by-list">
                <dt class="odd">Price</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                    <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                  </ol>
                </dd>
                <dt class="even">Manufacturer</dt>
                <dd class="even">
                  <ol>
                    <li> <a href="#">TheBrand</a> (9) </li>
                    <li> <a href="#">Company</a> (4) </li>
                    <li> <a href="#">LogoFashion</a> (1) </li>
                  </ol>
                </dd>
                <dt class="odd">Color</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#">Green</a> (1) </li>
                    <li> <a href="#">White</a> (5) </li>
                    <li> <a href="#">Black</a> (5) </li>
                    <li> <a href="#">Gray</a> (4) </li>
                    <li> <a href="#">Dark Gray</a> (3) </li>
                    <li> <a href="#">Blue</a> (1) </li>
                  </ol>
                </dd>
                <dt class="last even">Size</dt>
                <dd class="last even">
                  <ol>
                    <li> <a href="#">S</a> (6) </li>
                    <li> <a href="#">M</a> (6) </li>
                    <li> <a href="#">L</a> (4) </li>
                    <li> <a href="#">XL</a> (4) </li>
                  </ol>
                </dd>
              </dl>
            </div>
          </div>
          <div class="block block-cart">
            <div class="block-title ">My Cart</div>
            <div class="block-content">
              <div class="summary">
                <p class="amount">There are <a href="shopping_cart.html">2 items</a> in your cart.</p>
                <p class="subtotal"> <span class="label">Cart Subtotal :</span> <span class="price">$27.99</span> </p>
              </div>
              <div class="ajax-checkout">
                <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>
              </div>
              <p class="block-subtitle">Recently added item(s) </p>
              <ul>
                <li class="item"> <a href="shopping_cart.html" title="Fisher-Price Bubble Mower" class="product-image"><img src="products-images/product10.jpg" alt="Fisher-Price Bubble Mower"></a>
                  <div class="product-details">
                    <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                    <strong>1</strong> x <span class="price">$19.99</span>
                    <p class="product-name"> <a href="shopping_cart.html">Fresh Organic Mustard Leaves </a> </p>
                  </div>
                </li>
                <li class="item last"> <a href="shopping_cart.html" title="Prince Lionheart Jumbo Toy Hammock" class="product-image"><img src="products-images/product20.jpg" alt="Prince Lionheart Jumbo Toy Hammock"></a>
                  <div class="product-details">
                    <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                    <strong>1</strong> x <span class="price">$8.00</span>
                    <p class="product-name"> <a href="shopping_cart.html">Fresh Organic Mustard Leaves </a> </p>
                    
                    <!--access clearfix--> 
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="block block-compare">
            <div class="block-title ">Compare Products (2)</div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item odd">
                  <input type="hidden" value="2173" class="compare-item-id">
                  <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name">Fresh Organic Mustard Leaves </a> </li>
                <li class="item last even">
                  <input type="hidden" value="2174" class="compare-item-id">
                  <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name">Fresh Organic Mustard Leaves </a> </li>
              </ol>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
              </div>
            </div>
          </div>
          
          <div class="block block-list block-viewed">
            <div class="block-title"> Recently Viewed </div>
            <div class="block-content">
              <ol id="recently-viewed-items">
                <li class="item odd">
                  <p class="product-name"><a href="#">Fresh Organic Mustard Leaves </a></p>
                </li>
                <li class="item even">
                  <p class="product-name"><a href="#">Fresh Organic Mustard Leaves </a></p>
                </li>
                <li class="item last odd">
                  <p class="product-name"><a href="#">Fresh Organic Mustard Leaves </a></p>
                </li>
              </ol>
            </div>
          </div>
          <div class="block block-poll">
            <div class="block-title">Community Poll </div>
            <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
              <div class="block-content">
                <p class="block-subtitle">What is your favorite Magento feature?</p>
                <ul id="poll-answers">
                  <li class="odd">
                    <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                    <span class="label">
                    <label for="vote_5">Layered Navigation</label>
                    </span> </li>
                  <li class="even">
                    <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                    <span class="label">
                    <label for="vote_6">Price Rules</label>
                    </span> </li>
                  <li class="odd">
                    <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                    <span class="label">
                    <label for="vote_7">Category Management</label>
                    </span> </li>
                  <li class="last even">
                    <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                    <span class="label">
                    <label for="vote_8">Compare Products</label>
                    </span> </li>
                </ul>
                <div class="actions">
                  <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                </div>
              </div>
            </form>
          </div>
          <div>
            <div class="featured-add-box">
              <div class="featured-add-inner"> <a href="#"> <img src="images/hot-trends-banner.jpg" alt="f-img"></a>
                <div class="banner-content">
                <div class="banner-text">Clearance Sale</div>
                <div class="banner-text1">Hot <span>Sale</span> </div>
                <p>Get upto 20% off</p>
                <a href="#" class="view-bnt">Shop now <i class="fa fa-chevron-circle-right"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="block block-tags">
            <div class="block-title"> Popular Tags</div>
            <div class="block-content">
              <ul class="tags-list">
                <li><a href="#" style="font-size:98.3333333333%;">Camera</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">Hohoho</a></li>
                <li><a href="#" style="font-size:145%;">SEXY</a></li>
                <li><a href="#" style="font-size:75%;">Tag</a></li>
                <li><a href="#" style="font-size:110%;">Test</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">bones</a></li>
                <li><a href="#" style="font-size:110%;">cool</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">cool t-shirt</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">crap</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">good</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">green</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">hip</a></li>
                <li><a href="#" style="font-size:75%;">laptop</a></li>
                <li><a href="#" style="font-size:75%;">mobile</a></li>
                <li><a href="#" style="font-size:75%;">nice</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">phone</a></li>
                <li><a href="#" style="font-size:98.3333333333%;">red</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">tight</a></li>
                <li><a href="#" style="font-size:75%;">trendy</a></li>
                <li><a href="#" style="font-size:86.6666666667%;">young</a></li>
              </ul>
              <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  
  <!-- Footer -->
  <footer class="footer">
  
    <div class="newsletter-wrap">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="newsletter">
              <form>
                <div>
                  <h4><span>Sign up to Newsletter</span></h4>
                  <input type="text" placeholder="Enter your email address" class="input-text" title="Sign up for our newsletter" id="newsletter1" name="email">
                  <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--newsletter-->
    
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Shopping Guide</h4>
              <ul class="links">
                <li><a href="blog.html" title="How to buy">Blog</a></li>
                <li><a href="faq.html" title="FAQs">FAQs</a></li>
                <li><a href="#" title="Payment">Payment</a></li>
                <li><a href="#" title="Shipment">Shipment</a></li>
                <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                <li><a href="#" title="Return policy">Return policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li><a href="login.html" title="Your Account">Your Account</a></li>
                <li><a href="#" title="Information">Information</a></li>
                <li><a href="#" title="Addresses">Addresses</a></li>
                <li><a href="#" title="Addresses">Discount</a></li>
                <li><a href="#" title="Orders History">Orders History</a></li>
                <li><a href="#" title="Order Tracking">Order Tracking</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Information</h4>
              <ul class="links">
                <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                <li><a href="#" title="Search Terms">Search Terms</a></li>
                <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                <li><a href="about_us.html" title="About Us">About Us</a></li>
                <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                <li><a href="#" title="Suppliers">Suppliers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <h4>Contact Us</h4>
            <div class="contacts-info">
<address><i class="add-icon"></i>ThemesStock, 789 Main rd,<br> Anytown, CA 12345 USA<br>
</address>
<div class="phone-footer"><i class="phone-icon"></i>+ 888 456-7890</div>
<div class="email-footer"><i class="email-icon"></i><a href="mailto:abc@example.com">alturas@ThemesStock.com</a></div>
</div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 coppyright"> 
      	&copy; 2019 ThemesStock. All Rights Reserved.
      	</div>
          <div class="col-xs-12 col-sm-4">
            <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
    
  </footer>
  <!-- End Footer -->  
</div>
<div id="mobile-menu">
  <ul>
    <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
    <li><a href="index-2.html">Home</a>
      <ul>
        <li><a href="index-2.html">Home Version 1</a></li>
        <li><a href="../home2/index.html">Home Version 2</a></li>
      </ul>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a> </li>
        <li> <a href="list.html">List</a> </li>
        <li> <a href="product_detail.html">Product Detail</a> </li>
        <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
        <li><a href="checkout.html">Checkout</a> </li>
        <li> <a href="wishlist.html">Wishlist</a> </li>
        <li> <a href="dashboard.html">Dashboard</a> </li>
        <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
        <li> <a href="about_us.html">About us</a> </li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a> </li>
        <li><a href="404error.html">404 Error Page</a> </li>
      </ul>
    </li>
    <li><a href="#">Women</a>
      <ul>
        <li> <a href="#" class="">Stylish Bag</a>
          <ul>
            <li> <a href="grid.html" class="">Clutch Handbags</a> </li>
            <li> <a href="grid.html" class="">Diaper Bags</a> </li>
            <li> <a href="grid.html" class="">Bags</a> </li>
            <li> <a href="grid.html" class="">Hobo handbags</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Material Bag</a>
          <ul>
            <li> <a href="grid.html">Beaded Handbags</a> </li>
            <li> <a href="grid.html">Fabric Handbags</a> </li>
            <li> <a href="grid.html">Handbags</a> </li>
            <li> <a href="grid.html">Leather Handbags</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Shoes</a>
          <ul>
            <li> <a href="grid.html">Flat Shoes</a> </li>
            <li> <a href="grid.html">Flat Sandals</a> </li>
            <li> <a href="grid.html">Boots</a> </li>
            <li> <a href="grid.html">Heels</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Jwellery</a>
          <ul>
            <li> <a href="grid.html">Bracelets</a> </li>
            <li> <a href="grid.html">Necklaces &amp; Pendent</a> </li>
            <li> <a href="grid.html">Pendants</a> </li>
            <li> <a href="grid.html">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Dresses</a>
          <ul>
            <li> <a href="grid.html">Casual Dresses</a> </li>
            <li> <a href="grid.html">Evening</a> </li>
            <li> <a href="grid.html">Designer</a> </li>
            <li> <a href="grid.html">Party</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Swimwear</a>
          <ul>
            <li> <a href="grid.html">Swimsuits</a> </li>
            <li> <a href="grid.html">Beach Clothing</a> </li>
            <li> <a href="grid.html">Clothing</a> </li>
            <li> <a href="grid.html">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Men</a>
      <ul>
        <li> <a href="grid.html" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Party</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a> </li>
          </ul>
        </li>
        <li> <a href="#.html">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Police</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Electronics</a>
      <ul>
        <li> <a href="grid.html"><span>Mobiles</span></a>
          <ul>
            <li> <a href="grid.html"><span>Samsung</span></a> </li>
            <li> <a href="grid.html"><span>Nokia</span></a> </li>
            <li> <a href="grid.html"><span>IPhone</span></a> </li>
            <li> <a href="grid.html"><span>Sony</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="grid.html"><span>Mobile Memory Cards</span></a> </li>
            <li> <a href="grid.html"><span>Cases &amp; Covers</span></a> </li>
            <li> <a href="grid.html"><span>Mobile Headphones</span></a> </li>
            <li> <a href="grid.html"><span>Bluetooth Headsets</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Cameras</span></a>
          <ul>
            <li> <a href="grid.html"><span>Camcorders</span></a> </li>
            <li> <a href="grid.html"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="grid.html"><span>Digital SLR</span></a> </li>
            <li> <a href="grid.html"><span>Camera Accesories</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="grid.html"><span>MP3 Players</span></a> </li>
            <li> <a href="grid.html"><span>IPods</span></a> </li>
            <li> <a href="grid.html"><span>Speakers</span></a> </li>
            <li> <a href="grid.html"><span>Video Players</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Computer</span></a>
          <ul>
            <li> <a href="grid.html"><span>External Hard Disk</span></a> </li>
            <li> <a href="grid.html"><span>Pendrives</span></a> </li>
            <li> <a href="grid.html"><span>Headphones</span></a> </li>
            <li> <a href="grid.html"><span>PC Components</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Appliances</span></a>
          <ul>
            <li> <a href="grid.html"><span>Vaccum Cleaners</span></a> </li>
            <li> <a href="grid.html"><span>Indoor Lighting</span></a> </li>
            <li> <a href="grid.html"><span>Kitchen Tools</span></a> </li>
            <li> <a href="grid.html"><span>Water Purifier</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Furniture</a>
      <ul>
        <li> <a href="grid.html">Living Room</a>
          <ul>
            <li> <a href="grid.html">Racks &amp; Cabinets</a> </li>
            <li> <a href="grid.html">Sofas</a> </li>
            <li> <a href="grid.html">Chairs</a> </li>
            <li> <a href="grid.html">Tables</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html" class="">Dining &amp; Bar</a>
          <ul>
            <li> <a href="grid.html">Dining Table Sets</a> </li>
            <li> <a href="grid.html">Serving Trolleys</a> </li>
            <li> <a href="grid.html">Bar Counters</a> </li>
            <li> <a href="grid.html">Dining Cabinets</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Bedroom</a>
          <ul>
            <li> <a href="grid.html">Beds</a> </li>
            <li> <a href="grid.html">Chest of Drawers</a> </li>
            <li> <a href="grid.html">Wardrobes &amp; Almirahs</a> </li>
            <li> <a href="grid.html">Nightstands</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Kitchen</a>
          <ul>
            <li> <a href="grid.html">Kitchen Racks</a> </li>
            <li> <a href="grid.html">Kitchen Fillings</a> </li>
            <li> <a href="grid.html">Wall Units</a> </li>
            <li> <a href="grid.html">Benches &amp; Stools</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Kids</a> </li>
    <li><a href="contact-us.html">Contact Us</a> </li>
  </ul>
  <div class="top-links">
    <ul class="links">
      <li><a title="My Account" href="login.html">My Account</a> </li>
      <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
      <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
      <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
      <li class="last"><a title="Login" href="login.html"><span>Login</span></a> </li>
    </ul>
  </div>
</div>

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 

<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
</body>

<!-- Mirrored from themesground.com/alturas/V2/list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 05:33:44 GMT -->
</html>
