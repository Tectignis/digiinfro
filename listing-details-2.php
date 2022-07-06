
<?php include("admin/include/config.php"); 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Fioxen - Directory & Listings HTML Template</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--====== FontAwesoem css ======-->
        <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--====== Nice-select css ======-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--====== Jquery ui css ======-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .slick-track{
        width:auto !important;
    }
</style>
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <img src="assets/images/loader.png" alt="loader">
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== Start Header Section ======-->
        <?php include("assets/include/header.php") ?>
        <!--====== End Header Section ======-->
        <!--====== Start breadcrumbs Section ======-->
        <section class="page-breadcrumbs page-breadcrumbs-two bg_cover" style="background-image: url(assets/images/bg/listing-breadcrumbs-1.jpg);"></section>
        <!--====== End breadcrumbs Section ======-->
        <!--====== Start Listing Details Section ======-->
        <?php
        if(isset($_GET['detailpen'])){
            $id=$_GET['detailpen'];
            $sql=mysqli_query($conn,"select * from vendor where shop_code='$id'");
            $row=mysqli_fetch_array($sql);          
          }
        ?>
        <section class="listing-details-section pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="listing-details-wrapper listing-details-wrapper-two">
                            <div class="listing-info-area mb-30">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="listing-info-content">
                                            <ul class="ratings ratings-three">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                            <h3 class="title"><?php echo $row['shop_name']; ?></h3>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i><?php echo $row['city']." , ".$row['state'] ?></span></li>
                                                    <li><span><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $row['mobile_no']; ?></a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="button">
                                            <a href="listing-grid.html" class="icon-btn"><i class="ti-mobile"></i></a>
                                            <a href="listing-grid.html" class="icon-btn"><i class="ti-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing-thumbnail mb-30">
                                <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="listing image" width="770" height="500">
                            </div>
                            <div class="listing-content mb-30">
                                <h3 class="title">World's Quality Museum</h3>
                                <p>Parturient varius elementum maecenas faucibus maecenas inceptos commodo metus vitae ac pretium magnis. Ridiculus aenean diam duis montes mattis curae dis platea cubilia fames justo nullam per incepto Accumsan mollis, semper nisl nulla per curae ante tellus cursus ut blandit eleifend ut adipiscing fringilla Sociosqu penatibus nascetur senectus, molestie sed habitant adipiscing maecenas ultrices curae sociis mi eros ultrices euismod risus cubilia eget habitasse facilisic</p>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="icon-box icon-box-one">
                                            <div class="icon">
                                                <i class="ti-credit-card"></i>
                                            </div>
                                            <div class="info">
                                                <h6>Card Payment</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="icon-box icon-box-one">
                                            <div class="icon">
                                                <i class="ti-paint-bucket"></i>
                                            </div>
                                            <div class="info">
                                                <h6>Air-conditioned</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="icon-box icon-box-one">
                                            <div class="icon">
                                                <i class="ti-rss-alt"></i>
                                            </div>
                                            <div class="info">
                                                <h6>Wireless Internet</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="icon-box icon-box-one">
                                            <div class="icon">
                                                <i class="ti-trash"></i>
                                            </div>
                                            <div class="info">
                                                <h6>Serves Alcohol</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="icon-box icon-box-one">
                                            <div class="icon">
                                                <i class="ti-car"></i>
                                            </div>
                                            <div class="info">
                                                <h6>Parking Street</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="icon-box icon-box-one">
                                            <div class="icon">
                                                <i class="ti-credit-card"></i>
                                            </div>
                                            <div class="info">
                                                <h6>Outdoor Seating</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Cras vivamus dui cubilia placerat netus lorem vivamus inceptos sollicitudin non inceptos mi dui vulputate donec sed etiam turpis varius a porta natoque nullam tincidunt in nec cubilia hac netus and class pharetra Commodo convallis pharetra tortor facilisis dapibus maecenas nunc nascetur arcu quam vel non varius egestas fusce aced molestie adipiscing curae ante tellus cursus ut blandit</p>
                            </div>
                            <div class="listing-play-box mb-30">
                                <h4 class="title">Documentary</h4>
                                <div class="play-content bg_cover text-center" style="background-image: url(assets/images/bg/video-bg-3.jpg);">
                                    <a href="https://www.youtube.com/watch?v=lJyzByVH1oQ" class="video-popup"><i class="flaticon-play-button"></i></a>
                                </div>
                            </div>
                            <div class="listing-gallery-box mb-30">
                                <h4 class="title">Photo Gallery</h4>
                                <div class="gallery-slider-one">
                                    <div class="gallery-item">
                                        <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="admin/dist/img/vender_image/<?php echo $row['image2'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="admin/dist/img/vender_image/<?php echo $row['image3'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="admin/dist/img/vender_image/<?php echo $row['image4'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                </div>
                            </div>
                            <div class="listing-review-box mb-50">
                                <h4 class="title">Customer Review</h4>
                                <ul class="review-list">
                                    <li class="review">
                                        <div class="thumb">
                                            <img src="assets/images/listing/review-1.jpg" alt="review image">
                                        </div>
                                        <div class="review-content">
                                            <h5>Moriana Steve</h5>
                                            <span class="date">Sep 02, 2021</span>
                                            <p>Musutrum orci montes hac at neque mollis taciti parturient vehicula interdum verra cubilia ipsum duis amet nullam sit ut ornare mattis urna. </p>
                                            <div class="content-meta d-flex align-items-center justify-content-between">
                                                <ul class="ratings ratings-three">
                                                    <li><span class="av-rate">4.5</span></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                </ul>
                                                <!-- <a href="#" class="reply"><i class="ti-share-alt"></i>Reply</a> -->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="review">
                                        <div class="thumb">
                                            <img src="assets/images/listing/review-2.jpg" alt="review image">
                                        </div>
                                        <div class="review-content">
                                            <h5>Moriana Steve</h5>
                                            <span class="date">Sep 02, 2021</span>
                                            <p>Musutrum orci montes hac at neque mollis taciti parturient vehicula interdum verra cubilia ipsum duis amet nullam sit ut ornare mattis urna. </p>
                                            <div class="content-meta d-flex align-items-center justify-content-between">
                                                <ul class="ratings ratings-three">
                                                    <li><span class="av-rate">4.5</span></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                </ul>
                                                <!-- <a href="#" class="reply"><i class="ti-share-alt"></i>Reply</a> -->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="review">
                                        <div class="thumb">
                                            <img src="assets/images/listing/review-3.jpg" alt="review image">
                                        </div>
                                        <div class="review-content">
                                            <h5>Moriana Steve</h5>
                                            <span class="date">Sep 02, 2021</span>
                                            <p>Musutrum orci montes hac at neque mollis taciti parturient vehicula interdum verra cubilia ipsum duis amet nullam sit ut ornare mattis urna. </p>
                                            <div class="content-meta d-flex align-items-center justify-content-between">
                                                <ul class="ratings ratings-three">
                                                    <li><span class="av-rate">4.5</span></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                </ul>
                                                <!-- <a href="#" class="reply"><i class="ti-share-alt"></i>Reply</a> -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-review-form mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Write a Review</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-rating">
                                            <ul class="ratings">
                                                <li><span>Rate Here:</span></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <span>(02 Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Your name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email here" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <div class="single-checkbox d-flex">
                                                    <input type="checkbox" id="check4" name="checkbox">
                                                    <label for="check4"><span>Save my name, email, and website in this browser for the next time i comment.</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn icon-btn">Submit Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="releted-listing-area">
                            <h3 class="title mb-20">Similar <?php echo $row['category']; ?></h3>
                            <div class="releted-listing-slider-one">
                                <?php
                                $cat=$row['category'];
                                $query=mysqli_query($conn,"select * from vendor where category='$cat' and action='0'");
                                while($arr=mysqli_fetch_array($query)){ ?>
                                <div class="listing-item listing-grid-item-one">
                                    <div class="listing-thumbnail">
                                        <img src="admin/dist/img/vender_image/<?php echo $arr['image1'] ?>" alt="Listing Image" width="370" height="290">
                                        <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                        <span class="featured-btn">Featured</span>
                                        <ul class="ratings ratings-four">
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li><span><a href="#">(02 Reviews)</a></span></li>
                                        </ul>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="listing-details-2.html"><?php echo $arr['shop_name'] ?></a></h3>
                                        <p>Popular <?php echo $arr['category'] ?>in <?php echo $arr['state'] ?></p>
                                        <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $arr['mobile_no'] ?></a><span class="status st-open">Open</span></span>
                                        <div class="listing-meta">
                                            <ul>
                                                <li><span><i class="ti-location-pin"></i><?php echo $arr['city'].' , '.$arr['city'] ?></span></li>
                                                <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-widget-area">
                            <div class="widget reservation-form-widget mb-30">
                                <h4 class="widget-title">Enquiry</h4>
                                <form method="post" action="ch.php">
                                    <div class="form_group">
                                        <input type="hidden" name="shopmail" value="<?php echo $row['email'] ?>">
                                        <input type="text" class="form_control" placeholder="Name" name="name" required>
                                        <i class="ti-user"></i>
                                    </div>
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Phone" name="phone" required>
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Email" name="Email" required>
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="form_group">
                                                <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                                            </div>
                                    <div class="form_group">
                                        <button class="main-btn icon-btn" type="submit" name="subbook">Book Now</button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget contact-info-widget mb-30">
                                <div class="contact-info-widget-wrap">
                                    <div class="contact-map">
                                        <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                                        <a href="#" class="support-icon"><i class="flaticon-headphone"></i></a>
                                    </div>
                                    <div class="contact-info-content">
                                        <h4 class="widget-title">Contact Info</h4>
                                        <div class="info-list">
                                            <p><i class="ti-tablet"></i><a href="tel:+98265365205">+98 (265) 3652 - 05</a></p>
                                            <p><i class="ti-location-pin"></i>45/A Natura, Barcelona, Spain</p>
                                            <p><i class="ti-email"></i><a href="mailto:contact@example.com">contact@example.com</a></p>
                                            <p><i class="ti-world"></i><a href="www.fioxen.com">www.fioxen.com</a></p>
                                        </div>
                                        <ul class="social-link">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-youtube"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-whatsapp" style="font-size:18px;"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget business-hour-widget mb-30">
                                <h4 class="widget-title">Business Hour</h4>
                                <ul class="time-info">
                                    <li><span class="day">Monday</span><span class="time">08:00 - 21:00</span></li>
                                    <li><span class="day">Tuesday</span><span class="time">08:00 - 21:00</span></li>
                                    <li><span class="day">Wednesday</span><span class="time">08:00 - 21:00</span></li>
                                    <li><span class="day">Thursday</span><span class="time">08:00 - 21:00</span></li>
                                    <li><span class="day">Friday</span><span class="time">08:00 - 21:00</span></li>
                                    <li><span class="day">Saturday</span><span class="time">08:00 - 21:00</span></li>
                                    <li><span class="day">Sunday</span><span class="time st-close">Close</span></li>
                                </ul>
                            </div>
                            <div class="widget newsletter-widget mb-30">
                                <div class="newsletter-widget-wrap bg_cover" style="background-image: url(assets/images/newsletter-widget-1.jpg);">
                                    <i class="flaticon-email-1"></i>
                                    <h3>Subscribe Our
                                        Newsletter</h3>
                                   <a href="#subscribe"><button class="main-btn icon-btn">Subscribe</button></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Listing Details Section ======-->
        <!--====== Start Footer ======-->
        <?php include("assets/include/Footer.php") ?>
       <!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="fas fa-angle-up"></i></a>
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="ti-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Popper js ======-->
        <script src="assets/js/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>
        <!--====== Magnific Popup js ======-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--====== Nice-select js ======-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--====== counterup js ======-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--====== waypoints js ======-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--====== Ui js ======-->
        <script src="assets/js/jquery-ui.min.js"></script>
        <!--====== Wow js ======-->
        <script src="assets/js/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
    </body>
</html>