<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="#" class="brand-link">
  <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">Admin</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Digiinfro</a>
    </div>
  </div>


  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="index.php" class="nav-link active">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Home
          </p>
        </a>
      </li>
        <li class="nav-item">
        <a href="vendorregistration.php" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Vendor Registration
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="digitalcard.php" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Digital Card
          </p>
        </a>
      </li>
        <li class="nav-item menu-open">
        <a href="" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Listing
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pendingapproval.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pending Approval</p>
             <span style="color:red;border: 2px solid white;border-radius:50%;background:white;padding: 0 2px;"> <?php
                    $sql=mysqli_query($conn,"select * from `vendor` where shop_address IS NULL or location IS NULL or authorized_person IS NULL or mobile_no IS NULL or whatsapp_no IS NULL or email IS NULL or services IS NULL or shop_act_license IS NULL or pan_card IS NULL or shop_name IS NULL or category IS NULL or image1 IS NULL or image2 IS NULL or image3 IS NULL or image4 IS NULL or city IS NULL or state IS NULL or post IS NULL or description IS NULL or profile_img IS NULL;");
                    $count=$sql->num_rows;
                    echo $count;
                    ?>
                    </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="completeappoval.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Complete Approval</p>
              <span style="color:red;border: 2px solid white;border-radius:50%;background:white;padding: 0 2px;"> <?php
                    $sql=mysqli_query($conn,"select * from `vendor` where shop_address IS NOT NULL and authorized_person IS NOT NULL and mobile_no IS NOT NULL and whatsapp_no IS NOT NULL and email IS NOT NULL and services IS NOT NULL and shop_act_license IS NOT NULL and pan_card IS NOT NULL and shop_name IS NOT NULL and category IS NOT NULL and image1 IS NOT NULL and image2 IS NOT NULL and image3 IS NOT NULL and image4 IS NOT NULL and city IS NOT NULL and state IS NOT NULL and location IS NOT NULL and post IS NOT NULL and description IS NOT NULL and profile_img IS NOT NULL;");
                    $count=$sql->num_rows;
                    echo $count;
                    ?>
                    </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="category.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="morratingcategory.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>More rating</p>
            </a>
          </li>
        </ul>
      </li>
        <li class="nav-item">
        <a href="ticket.php" class="nav-link ">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Ticket
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Home Section
            <i class="fas fa-angle-left right"></i> 
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="banner.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Banner</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="feature.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Feature</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="service.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Services</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="testimonial.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Testimonial</p>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            SEO Setup
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="seohome.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="seolisting.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Listing</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="seoaboutus.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>About us</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="seopricing.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pricing</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="seoblog.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Blog</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="seocontactus.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Contact us</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="seovender.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Vendor Registration</p>
            </a>
          </li>
        </ul>
      </li>
     
      
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Setting
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="generalsetting.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>General Setting</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="paymentaccount.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Payment Account</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="googleanalytics.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Google Analytics</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="emailconfiguration.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Email Configuration</p>
            </a>
          </li>
          
        </ul>
      </li>
      
      <li class="nav-item">
        <a href="contact.php" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Contact
          </p>
        </a>
      </li>
          <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Subscriber
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="subscriber.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p> Subscriber</p>
            </a>
          </li>
          
        </ul>
      </li>
        </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>