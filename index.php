<?php 
require 'config.php';
?> <!DOCTYPE html>
<html lang="en">

<?php include('include/head_style.php'); ?>

<body class="cms-index-index cms-home-page">
<div id="page">
  
  <!-- Header -->
  <header>
<?php include('include/nav-bar.php'); ?>
   <?php include('include/nav-menu.php');?>
  </header>
  <!-- end header -->
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-4 col-sm-3 hidden-xs">
        <div class="side-banner"><img src="images/side-banner.jpg" alt="banner"></div>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-12 home-slider">
        <div id="thm-slideshow" class="thm-slideshow slider-block">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='img/1.jpg'> <img src='img/1.jpg' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='img/churna_1.jpg'> <img src='img/churna_1.jpg' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                </li>
                 <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='img/2.jpg'> <img src='img/2.jpg' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="wide-banner">
  <div class="row">
            <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"><img src="img/Box.png" style="width: 40%; height: 40%;" alt="">
              <div class="figcaption">
                <div class="banner-content right top">
                   <h5>Digital <span>World</span></h5>
                  <h6>Save 50% Today</h6>
                  <!-- <span>Organic Life</span>
                  <span class="big-title">Fresh, Quality and <br> Natural </span>
                   -->
                  </div>
              </div>
              <a href="#" class="right bottom btn_type_1" rel="nofollow">Read more <i class="fa fa-chevron-circle-right"></i></a></div>

            <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"><img src="img/Box.png" style="height: 40%; width: 40%; margin-left: 50%" alt="">
              <div class="figcaption">
              <div class="banner-content left top">
                <!--  <span>Healthy Life</span>
                         <span class="big-title">Orange, Fresh and <br> Healthy</span>
                   -->
                  
                                <h5>New<span>
                  Generation</span>
                   <h6>Get Free delivery </h6>
                  </h5>
                  </div>
              </div>
              <a href="#" class="left bottom btn_type_1" rel="nofollow">Read more <i class="fa fa-chevron-circle-right"></i></a></div>
          </div>
  </div>
  </div>
  
  <section class="main-container col2-left-layout">
    <div class="container">
    <div>
    <div class="category-product">
              <div class="navbar nav-menu">
                <div class="navbar-collapse">
                  
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-1">IMMUNITY STRONG</a></li>
                    <li class=" "><a data-toggle="tab" href="#tab-2">Best Selling Product</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-3" class="active" >Todays Deals</a></li>
                  </ul>
                </div>
                <!-- /.navbar-collapse --> 
                
              </div>
              <div class="product-bestseller">
                <div class="product-bestseller-content">
                  <div class="product-bestseller-list">
                    <div class="tab-container"> 

                      <!-- tab product -->
                      <div class="tab-panel active" id="tab-1">
                        <div class="category-products">
                          <ul class="products-grid">
                            <?php
                          require 'DBConnect.php';
                           $select="SELECT productsTable.id,
                            productsTable.productimage, productsTable.name,specialtyTable.specility_name, productDetailsTable.stock,
                            productsCatTable.catname , farmerDetails.farmers_name, farmerDetails.state,
                            productDetailsTable.weightunit, units.si_unit, productDetailsTable.weight, 
                            productDetailsTable.actualprice, productDetailsTable.salesprice, productDetailsTable.hidefromstore
                            FROM products productsTable 
                            INNER JOIN product_cat productsCatTable on productsTable.catID = productsCatTable.id 
                            INNER JOIN products_detail productDetailsTable on productsTable.id = productDetailsTable.productid 
                            INNER JOIN specialty specialtyTable on specialtyTable.id = productsTable.specID 
                            INNER JOIN farmer_details farmerDetails on farmerDetails.id = productsTable.farmerID 
                            INNER JOIN si_unit units on productDetailsTable.weightunit = units.id ORDER BY productDetailsTable.itemposition ASC;";
                            $run=mysqli_query($con,$select);
                            
                            while($row=mysqli_fetch_assoc($run)){
                            
                           ?>
                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.php?product_id=<?php echo $row['id'] ?>"> <img alt="Retis lapen casen" src="<?php echo $SERVER_BASE_URL.$row['productimage']; ?>"> </a>
                              <div class="sale-label sale-top-right">- 40%</div>
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
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves" href="product_detail.php?product_id=<?php echo $row['id'] ?>"> <?php echo $row['name']." - ".$row['weightunit']." ".$row['si_unit'] ; ?> </a> </div>
                              <div class="brand">Farmer: <?php echo $row['farmers_name'];  ?></div>

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
                                  <div class="price-box"> <span class="regular-price"> <span class="price"> &#8377; <?php echo $row['salesprice']; ?></span> </span> <span class="old-price"><span class="price"> &#8377; <?php echo $row['actualprice']; ?></span></span></div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                            </li>
                              <?php } ?>
                             </ul>
                           
                        </div>
                      </div>
                      
                      <!-- tab product -->
                      <div class="tab-panel " id="tab-2">
                        <div class="category-products">
                          <ul class="products-grid">
                             <?php
                          require 'DBConnect.php';
                           $select="SELECT productsTable.id,productsTable.bestproduct,
                            productsTable.productimage, productsTable.name,specialtyTable.specility_name, productDetailsTable.stock,
                            productsCatTable.catname , farmerDetails.farmers_name, farmerDetails.state,
                            productDetailsTable.weightunit, units.si_unit, productDetailsTable.weight, 
                            productDetailsTable.actualprice, productDetailsTable.salesprice, productDetailsTable.hidefromstore
                            FROM products productsTable  
                            INNER JOIN product_cat productsCatTable on productsTable.catID = productsCatTable.id 
                            INNER JOIN products_detail productDetailsTable on productsTable.id = productDetailsTable.productid 
                            INNER JOIN specialty specialtyTable on specialtyTable.id = productsTable.specID 
                            INNER JOIN farmer_details farmerDetails on farmerDetails.id = productsTable.farmerID 
                            INNER JOIN si_unit units on productDetailsTable.weightunit = units.id  WHERE productsTable.bestproduct=1    ORDER BY productDetailsTable.itemposition ASC;";
                            $run=mysqli_query($con,$select);
  
                            while($row=mysqli_fetch_assoc($run)){
                            
                           ?>
                          <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.php?product_id=<?php echo $row['id'] ?>"> <img alt="Retis lapen casen" height="244" width="244" src="<?php echo $SERVER_BASE_URL.$row['productimage']; ?>"> </a>
                            
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
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.php?product_id=<?php echo $row['id'] ?>"><?php echo $row['name']." - ".$row['weightunit']." ".$row['si_unit'] ; ?> </a> </div>
                                <div class="brand">Farmer: <?php echo $row['farmers_name'];  ?></div>
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price"> &#8377; <?php echo $row['salesprice']; ?></span> </span> <span class="old-price"><span class="price"> &#8377; <?php echo $row['actualprice']; ?></span></span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                          <?php } ?>
                           </ul>
                        </div>
                      </div>
                            <!-- <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
                            
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                              <!-- End  Item inner--> 
                           <!--  </li>
                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
                            
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                              <!-- End  Item inner--> 
                           <!--  </li>
                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
                             
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                              <!-- End  Item inner--> 
                            <!-- </li> -->
                            
                         
                      <div class="tab-panel " id="tab-3">
                        <div class="category-products">
                          <ul class="products-grid">
                          <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.php?product-name-id=<?php echo $row['id'] ?>"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
                       
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
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.html">Sarva Jwar Har Churna (50 g) </a> </div>
                                <div class="brand">Product: Prakarti Organic</div>
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                           <!--  <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
                        
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                              <!-- End  Item inner--> 
                           <!--  </li>
                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
                         
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                              <!-- End  Item inner--> 
                            <!-- </li>
                            <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
                            
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                              <!-- End  Item inner--> 
                            <!-- </li> -->
                            
                          </ul>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
    
    <hr class="line1">
    
      <div class="row">
        <div class="col-sm-8 col-sm-push-4 lft-border">
          
          <div class="content-page"> 
            
            <!-- featured category -->
            
          </div>
          
          
          <div class="offer-banner"> <a href="#"><img alt="Banner" src="images/banner-img.png"></a> </div>
          <!-- bestsell slider -->
          <div class="bestsell-pro">
            <div>
              <div class="slider-items-products">
                <div class="bestsell-block">
                  <div class="block-title">
                    <h2>Organic Products</h2>
                  </div>
                  <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid block-content">
                     <?php
                          require 'DBConnect.php';
                           $select="SELECT productsTable.id,
                            productsTable.productimage, productsTable.name,specialtyTable.specility_name, productDetailsTable.stock,
                            productsCatTable.catname , farmerDetails.farmers_name, farmerDetails.state,
                            productDetailsTable.weightunit, units.si_unit, productDetailsTable.weight, 
                            productDetailsTable.actualprice, productDetailsTable.salesprice, productDetailsTable.hidefromstore
                            FROM products productsTable 
                            INNER JOIN product_cat productsCatTable on productsTable.catID = productsCatTable.id 
                            INNER JOIN products_detail productDetailsTable on productsTable.id = productDetailsTable.productid 
                            INNER JOIN specialty specialtyTable on specialtyTable.id = productsTable.specID 
                            INNER JOIN farmer_details farmerDetails on farmerDetails.id = productsTable.farmerID 
                            INNER JOIN si_unit units on productDetailsTable.weightunit = units.id ORDER BY productDetailsTable.itemposition ASC;";
                            $run=mysqli_query($con,$select);
                            while($row=mysqli_fetch_assoc($run)){
                            
                           ?>

                      <div class="item">
                         
                        <div class="item-inner">
                         
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.php?product_id=<?php echo $row['id'] ?>"> <img alt="Retis lapen casen" height="244" width="244" src="<?php echo $SERVER_BASE_URL.$row['productimage']; ?>"> </a>
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
                              <div class="item-title"> <a title="Fresh Organic Mustard Leaves " href="product_detail.php?product_id=<?php echo $row['id'] ?>"><?php echo $row['name']." - ".$row['weightunit']." ".$row['si_unit'] ; ?> </a> </div>
                                <div class="brand">Farmer: <?php echo $row['farmers_name'];  ?></div>
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
                                 <div class="price-box"> <span class="regular-price"> <span class="price"> &#8377; <?php echo $row['salesprice']; ?></span> </span> <span class="old-price"><span class="price"> &#8377; <?php echo $row['actualprice']; ?></span></span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                      <!-- Item -->
                     <!--  <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">325.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!-- End Item --> 
                      <!-- Item -->
                      <!-- <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="img/p1.jpg"> </a>
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
                               <div class="brand">justrin</div>
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">245.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!-- End Item -->
                      <!-- <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product13.jpg"> </a>
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!-- Item -->
                      <!-- <div class="item">
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!-- End Item -->
                      <!-- <div class="item">
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!-- Item -->
                     <!--  <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="products-images/product10.jpg"> </a>
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
                               <div class="brand">Linen</div>
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
                                  <div class="price-box"> <span class="regular-price"> <span class="price">88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!-- End Item --> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <aside class="col-left sidebar col-sm-4 col-xs-12 col-sm-pull-8">
          
          <div class="hot-deal">
            <ul class="products-grid">
              <li class="right-space two-height item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img src="img/p1.jpg" alt="Retis lapen casen"> </a>
                      <div class="hot-label hot-top-left">Hot Deal</div>
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
                      <div class="item-title"> <a href="product_detail.html" title="Fresh Organic Mustard Leaves "> Sarva Jwar Har Churna (50 g)  </a> </div>
                      <div class="brand">Xperia</div>
                      <div class="item-content">
                        <div class="rating">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating" style="width:80%"></div>
                            </div>
                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                          </div>
                        </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                        </div>
                        <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart">Add to Cart</button>
                                </div>
                        <div class="box-timer">
                        <div class="countbox_1 timer-grid"></div>
                      </div>
                      <div class="offer-text">Hurry Up! Limited time offer</div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          
          
          
         <div>
    </div> 
          
        </aside>
      </div>
      
      <hr class="line2">
    </div>
  </section>
  
  <!-- Latest Blog -->
 <div class="container">
    <div>
      <div class="blog-outer-container">
        <div class="block-title">
          <h2 style="text-align: center;">SHOP BY CATEGORY</h2>
        </div>
      </div></div>
    </div>
  </div>






  <!-- End Latest Blog --> 
  <div class="banner-row">
  <div class="container">
  <div class="row">
    <?php
                          require 'DBConnect.php';
                           $select="SELECT * FROM `product_cat` WHERE 1;";
                            $run=mysqli_query($con,$select);
                            
                            $baseurl = "http://127.0.0.1:81/FSpride/";
                            while($row=mysqli_fetch_assoc($run)){
                            
                           ?>
 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="banner1 banner-box" > 
  <a class="image-banner" href="product_category.php?catID=<?php echo $row['id'] ?>"><img height="244" width="244" src="<?php echo $baseurl.$row['imageurl']; ?>" alt="" ></a>
   <!--  <a href="#"><div class="overlay-effects"><div class="content-title content-title_1"  style="background-color: rgba(0,0,0,0.5);"><p style="text-align: center; font-size: 20px"><?php echo $row['catname']; ?></p></div></div></a> -->
</div>
</div>
<?php }?>
<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="banner1 banner-box" > 
  <a class="image-banner" href="#"><img src="img/p1.jpg" alt="" ></a>
    <a href="#"><div class="overlay-effects"><div class="content-title content-title_1"  style="background-color: rgba(0,0,0,0.5);"><p style="text-align: center; font-size: 20px;">ORganic Rice</p></div></div></a>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="banner1 banner-box" > 
  <a class="image-banner" href="#"><img src="img/p1.jpg" alt="" ></a>
    <a href="#"><div class="overlay-effects"><div class="content-title content-title_1"  style="background-color: rgba(0,0,0,0.5);"><p style="text-align: center; font-size: 20px;">ORganic Rice</p></div></div></a>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="banner1 banner-box" > 
  <a class="image-banner" href="#"><img src="img/p1.jpg" alt="" ></a>
    <a href="#"><div class="overlay-effects"><div class="content-title content-title_1"  style="background-color: rgba(0,0,0,0.5);"><p style="text-align: center; font-size: 20px;">ORganic Rice</p></div></div></a>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="banner1 banner-box" > 
  <a class="image-banner" href="#"><img src="img/p1.jpg" alt="" ></a>
    <a href="#"><div class="overlay-effects"><div class="content-title content-title_1"  style="background-color: rgba(0,0,0,0.5);"><p style="text-align: center; font-size: 20px;">ORganic Rice</p></div></div></a>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="banner1 banner-box" > 
  <a class="image-banner" href="#"><img src="img/p1.jpg" alt="" ></a>
    <a href="#"><div class="overlay-effects"><div class="content-title content-title_1"  style="background-color: rgba(0,0,0,0.5);"><p style="text-align: center; font-size: 20px;">ORganic Rice</p></div></div></a>
</div>
</div> -->




<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="banner1 banner-box" > 
  <a class="image-banner" href="#"><img src="img/p1.jpg" alt="" ></a>
    <a href="#"><div class="overlay-effects"><div class="content-title content-title_1"  style="background-color: rgba(0,0,0,0.5);"><p style="text-align: center; font-size: 20px;">ORganic Rice</p></div></div></a>
</div>
</div> -->

<!--  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
<div class="banner1 banner-box" > 
  <a class="image-banner" href="#"><img src="img/p1.jpg" alt="" ></a>
    <a href="#"><div class="overlay-effects"><div class="content-title content-title_1"  style="background-color: rgba(0,0,0,0.5);"><p style="text-align: center; font-size: 20px;">ORganic Rice</p></div></div></a>
</div>
</div> -->

</div>
</div>
</div>
  
  
  <!-- Footer -->
  <footer class="footer">
  
   <?php include 'include/subscription.php'; ?>
    <!--newsletter-->
    <?php include 'include/footer.php';?>

   <?php include 'include/authontication_footer.php'?>;
    
  </footer>
  <!-- End Footer --> 
</div>
<!-- mobile menu -->
<?php include 'include/mobile_layout.php'; ?>
<!-- JavaScript -->

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>  
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/countdown.js"></script> 
<script type='text/javascript'>
      jQuery(document).ready(function() {
      jQuery('#rev_slider_4').show().revolution({
      dottedOverlay: 'none',
      delay: 5000,
      startwidth: 850,
      startheight: 455,
      hideThumbs: 200,
      thumbWidth: 200,
      thumbHeight: 50,
      thumbAmount: 2,
      navigationType: 'thumb',
      navigationArrows: 'solo',
      navigationStyle: 'round',
      touchenabled: 'on',
      onHoverStop: 'on',
      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,
      spinner: 'spinner0',
      keyboardNavigation: 'off',
      navigationHAlign: 'center',
      navigationVAlign: 'bottom',
      navigationHOffset: 0,
      navigationVOffset: 20,
      soloArrowLeftHalign: 'left',
      soloArrowLeftValign: 'center',
      soloArrowLeftHOffset: 20,
      soloArrowLeftVOffset: 0,
      soloArrowRightHalign: 'right',
      soloArrowRightValign: 'center',
      soloArrowRightHOffset: 20,
      soloArrowRightVOffset: 0,
      shadow: 0,
      fullWidth: 'on',
      fullScreen: 'off',
      stopLoop: 'off',
      stopAfterLoops: -1,
      stopAtSlide: -1,
      shuffle: 'off',
      autoHeight: 'off',
      forceFullWidth: 'on',
      fullScreenAlignForce: 'off',
      minFullScreenHeight: 0,
      hideNavDelayOnMobile: 1500,
      hideThumbsOnMobile: 'off',
      hideBulletsOnMobile: 'off',
      hideArrowsOnMobile: 'off',
      hideThumbsUnderResolution: 0,
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      startWithSlide: 0,
      fullScreenOffsetContainer: ''
      });
      });
    </script> 
<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
</body>

<!-- Mirrored from themesground.com/alturas/V2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 05:32:51 GMT -->
</html>

<?php  
    require 'DBConnect.php';
                   if(isset($_GET['catID'])){
                    include("product_category.php");
                   }
?>

<?php  
    require 'DBConnect.php';
                   if(isset($_GET['product_id'])){
                    include("product_detail.php");
                   }
?>



