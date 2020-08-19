<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesground.com/alturas/V2/product_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 05:33:00 GMT -->
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
  <section class="main-container col1-layout">
    <div class="container">
      <div class="row">
        
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
            
        <div class="col-sm-12 col-xs-12">
         
            
            
          <article class="col-main">
            <div class="product-view">
              <div class="product-essential">
                 <?php
              if(isset($_GET['product_id'])){
                  $productid=$_GET['product_id'];
                          require 'DBConnect.php';
                           $select="SELECT productsTable.id,productsTable.bestproduct,productsTable.productdesc,
                            productsTable.productimage, productsTable.name,specialtyTable.specility_name, productDetailsTable.stock,
                            productsCatTable.catname , farmerDetails.farmers_name, farmerDetails.state,
                            productDetailsTable.weightunit, units.si_unit, productDetailsTable.weight, 
                            productDetailsTable.actualprice, productDetailsTable.salesprice, productDetailsTable.hidefromstore, productDetailsTable.id as detailsID
                            FROM products productsTable  
                            INNER JOIN product_cat productsCatTable on productsTable.catID = productsCatTable.id  
                            INNER JOIN products_detail productDetailsTable on productsTable.id = productDetailsTable.productid 
                            INNER JOIN specialty specialtyTable on specialtyTable.id = productsTable.specID 
                            INNER JOIN farmer_details farmerDetails on farmerDetails.id = productsTable.farmerID 
                            INNER JOIN si_unit units on productDetailsTable.weightunit = units.id WHERE productsTable.id=$productid ORDER BY productDetailsTable.itemposition ASC;";
                            $run=mysqli_query($con,$select);
                            
                            $baseurl = "http://127.0.0.1:81/FSpride/";
                            while($row=mysqli_fetch_assoc($run)){
                              $image=$row['productimage'];
                              $name=$row['name']." - ".$row['weightunit']." ".$row['si_unit'];
                              $salesprice=$row['salesprice'];
                              $actualprice=$row['actualprice'];
                              $productdesc=$row['productdesc'];  
                            }}
                           ?>  
                         
                <form action="#" method="post" id="product_addtocart_form">
                  <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                  <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                    <div class="new-label new-top-left"> New </div>
                    <div class="product-image">
                      <div class="product-full"> <img id="product-zoom" src="<?php echo $baseurl.$image; ?>" data-zoom-image="<?php echo $baseurl.$image; ?>" alt="product-image"/> </div>
                      <div class="more-views">
                        <div class="slider-items-products">
                          <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                            <div class="slider-items slider-width-col4 block-content">
                              <div class="more-views-items"> <a href="#" data-image="<?php echo $baseurl.$image; ?>" data-zoom-image="<?php echo $baseurl.$image; ?>"> <img id="product-zoom"  src="<?php echo $baseurl.$image; ?>" alt="product-image"/> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/product3.jpg" data-zoom-image="products-images/product3.jpg"> <img id="product-zoom"  src="products-images/product3.jpg" alt="product-image"/> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/product4.jpg" data-zoom-image="products-images/product4.jpg"> <img id="product-zoom"  src="products-images/product4.jpg" alt="product-image"/> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/product5.jpg" data-zoom-image="products-images/product5.jpg"> <img id="product-zoom"  src="products-images/product5.jpg" alt="product-image"/> </a> </div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/product6.jpg" data-zoom-image="products-images/product6.jpg"> <img id="product-zoom"  src="products-images/product6.jpg" alt="product-image" /> </a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end: more-images --> 
                  </div>
                  <div class="product-shop col-lg- col-sm-7 col-xs-12">
                    <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                    <!-- <div class="brand">XPERIA</div> -->
                    <div class="product-name">
                      <h1><?php echo $name; ?> </h1>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:60%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                    </div>
                    <div class="price-block">
                      <div class="price-box">
                      <p class="availability in-stock"><span>In Stock</span></p>
                        <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price">  &#8377; <?php echo $salesprice; ?> </span> </p>
                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">  &#8377; 
                          <?php echo $actualprice; ?> </span> </p>
                        
                      </div>
                    </div>
                    <div class="add-to-box">
                      <div class="add-to-cart">
                        <div class="pull-left">
                          <div class="custom pull-left">
                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                          </div>
                        </div>
                        <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button">Add to Cart</button>
                      </div>
                      
                    </div>
                    <div class="short-description">
                                 <?php  echo $productdesc;  ?>
                    </div>
                    <div class="email-addto-box">
                        <ul class="add-to-links">
                          <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                          <li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>
                        </ul>
                        <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                      </div>
                    <div class="social">
                      <ul class="link">
                        <li class="fb"><a href="#"></a></li>
                        <li class="tw"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="rss"><a href="#"></a></li>
                        <li class="pintrest"><a href="#"></a></li>
                        <li class="linkedin"><a href="#"></a></li>
                        <li class="youtube"><a href="#"></a></li>
                      </ul>
                    </div>
                    
                    <ul class="shipping-pro">
                                    <li>Free Wordwide Shipping</li>
                                    <li>30 Days Return</li>
                                    <li>Member Discount</li>
                                </ul>
                  </div>
                </form>

              </div>
              <div class="product-collateral">
                <div class="add_info">
                  <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                    <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                    <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
                    <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                    <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
                    <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
                  </ul>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="product_tabs_description">
                      <div class="std">
                      <img alt="" src="images/shoes-img.jpg" style="float:right">
                        <?php  echo $productdesc;  ?>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="product_tabs_tags">
                      <div class="box-collateral box-tags">
                        <div class="tags">
                          <form id="addTagForm" action="#" method="get">
                            <div class="form-add-tags">
                              <label for="productTagName">Add Tags:</label>
                              <div class="input-box">
                                <input class="input-text" name="productTagName" id="productTagName" type="text">
                                <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                              </div>
                              <!--input-box--> 
                            </div>
                          </form>
                        </div>
                        <!--tags-->
                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="reviews_tabs">
                      <div class="woocommerce-Reviews">
<div>
<h2 class="woocommerce-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h2>
<ol class="commentlist">
<li class="comment">
<div>
<img alt="" src="images/member1.png" class="avatar avatar-60 photo">
<div class="comment-text">
<div class="ratings">
                      <div class="rating-box">
                        <div style="width:100%" class="rating"></div>
                      </div>
                      
                    </div>
<p class="meta">
<strong>John Doe</strong> 
<span>–</span> <time>April 19, 2019</time>
</p>
<div class="description"><p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
</div>
</div>
</div>
</li><!-- #comment-## -->
<li class="comment">
<div>
<img alt="" src="images/member2.png" class="avatar avatar-60 photo">
<div class="comment-text">
<div class="ratings">
                      <div class="rating-box">
                        <div style="width:100%" class="rating"></div>
                      </div>
                      
                    </div>
<p class="meta">
<strong>Stephen Smith</strong> <span>–</span> <time>June 02, 2019</time>
</p>
<div class="description"><p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
</div>
</li><!-- #comment-## -->
</ol>
</div>
<div>
<div>
<div class="comment-respond">
<span class="comment-reply-title">Add a review </span>			
<form action="#" method="post" class="comment-form" novalidate>
<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
<div class="comment-form-rating">
<label for="rating">Your rating</label>
<p class="stars">
<span>
<a class="star-1" href="#">1</a>
<a class="star-2" href="#">2</a>
<a class="star-3" href="#">3</a>
<a class="star-4" href="#">4</a>
<a class="star-5" href="#">5</a>
</span>
</p>
</div>
<p class="comment-form-comment">
<label>Your review <span class="required">*</span></label>
<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea>
</p>
<p class="comment-form-author">
<label for="author">Name <span class="required">*</span></label> 
<input id="author" name="author" type="text" value="" size="30" aria-required="true" required></p>
<p class="comment-form-email">
<label for="email">Email <span class="required">*</span></label> 
<input id="email" name="email" type="email" value="" size="30" aria-required="true" required></p>
<p class="form-submit">
<input name="submit" type="submit" id="submit" class="submit" value="Submit"> 
</p>
</form>
</div><!-- #respond -->
</div>
</div>
<div class="clear"></div>
</div>
                    </div>
                    <div class="tab-pane fade" id="product_tabs_custom">
                      <div class="product-tabs-content-inner clearfix">
                        <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                          simply dummy text of the printing and typesetting industry. Lorem Ipsum
                          has been the industry's standard dummy text ever since the 1500s, when 
                          an unknown printer took a galley of type and scrambled it to make a type
                          specimen book. It has survived not only five centuries, but also the 
                          leap into electronic typesetting, remaining essentially unchanged. It 
                          was popularised in the 1960s with the release of Letraset sheets 
                          containing Lorem Ipsum passages, and more recently with desktop 
                          publishing software like Aldus PageMaker including versions of Lorem 
                          Ipsum.</span></p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="product_tabs_custom1">
                      <div class="product-tabs-content-inner clearfix">
                        <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem     
                          
                          Lorem Ipsumis
                          simply dummy text of the printing and typesetting industry. Lorem Ipsum
                          has been the industry's standard dummy text ever since the 1500s, when 
                          an unknown printer took a galley of type and scrambled it to make a type
                          specimen book. It has survived not only five centuries, but also the 
                          leap into electronic typesetting, remaining essentially unchanged. It 
                          was popularised in the 1960s with the release of Letraset sheets 
                          containing Lorem Ipsum passages, and more recently with desktop 
                          publishing software like Aldus PageMaker including versions of Lorem 
                          Ipsum.</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Related Slider -->
              <div class="related-pro">
                <div class="slider-items-products">
                  <div class="related-block">
                    <div class="home-block-inner">
                      <div class="block-title">
                        <h2>Related Products</h2>
                      </div>
                    </div>
                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 products-grid block-content">
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product16.jpg"> </a>
                           
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                               <div class="brand">Cello</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product13.jpg"> </a>
                            
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves  </a> </div>
                               <div class="brand">Shreeji Ethnic</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product14.jpg"> </a>
                             
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                               <div class="brand">Zacharias</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- End Item -->
                        
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product23.jpg"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                              <div class="brand">Xperia</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span>  <span class="old-price"><span class="price">$199.00</span></span></div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product11.jpg"> </a>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                               <div class="brand">Vincent</div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div style="width:80%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- End Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product17.jpg"> </a>
                            
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html"> Fresh Organic Mustard Leaves  </a> </div>
                                <div class="brand">Impulse</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product12.jpg"> </a>
                       
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                              <div class="brand">Just Wow</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- End Item --> 
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- End related products Slider --> 
              
              <!-- Upsell Product Slider -->
              <div class="upsell-pro">
                <div class="slider-items-products">
                  <div class="upsell-block">
                    <div class="home-block-inner">
                      <div class="block-title">
                        <h2>Upsell Product</h2>
                      </div>
                    </div>
                    <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 products-grid block-content">
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product17.jpg"> </a>
                            
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html"> Fresh Organic Mustard Leaves </a> </div>
                                <div class="brand">Impulse</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product15.jpg"> </a>
                    
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                               <div class="brand">Livia</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product12.jpg"> </a>
                            <div class="sale-label sale-top-left">- 49% Sale</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                              <div class="brand">Just Wow</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- End Item -->
                        
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product21.jpg"> </a>
                              
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                              <div class="brand">Sunproto</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product24.jpg"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                              <div class="brand">Datsun</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- End Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product23.jpg"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                              <div class="brand">Xperia</div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span>  <span class="old-price"><span class="price">$199.00</span></span></div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- Item -->
                        <div class="item">
                          <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product11.jpg"> </a>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Fresh Organic Mustard Leaves </a> </div>
                               <div class="brand">Vincent</div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div style="width:80%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- End Item --> 
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Upsell  Slider --> 
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        
   
          
 
        
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
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/cloud-zoom.js"></script>
</body>

<!-- Mirrored from themesground.com/alturas/V2/product_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 05:33:27 GMT -->
</html>
