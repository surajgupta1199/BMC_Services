<?php 
$admin=$this->session->userdata('admin_id');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Gold-D</title>

    <!-- vendor css -->
    <link href="<?php echo base_url()?>/assets/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/lib/pickerjs/picker.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- azia CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/azia.css">

    <!-- datatable -->
  <!--   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css'><link rel="stylesheet" href="./style.css"> -->


    <script src="<?php echo base_url()?>/assets/lib/jquery/jquery.min.js"></script>
  </head>
  <body>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <img src="<?php echo base_url()?>/assets/images/goldd_icon.png" height="40px">
          <a href="<?php echo base_url() ?>" class="az-logo"><span></span>Gold-D</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> Gold D</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">

            

            <li class="nav-item  <?php echo $active == 'result' ? 'active' : ''; ?>">
              <a href="<?php echo base_url('home/chart') ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Result</a>
            </li>


            <?php if($this->session->userdata('user_id') != null){ ?>

            <li class="nav-item  <?php echo $active == 'transaction' ? 'active' : ''; ?>">
              <a href="<?php echo base_url('user/userDashboard'); ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Bidding master</a>
            </li>

            <?php } ?>


            <?php if($this->session->userdata('admin_id') != null){ ?>

              <li class="nav-item  <?php echo $active == 'transaction' ? 'active' : ''; ?>">
              <a href="<?php echo base_url('admin/user_bidding_master'); ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Bidding master</a>
            </li>


            <li class="nav-item  <?php echo $active == 'marquee' ? 'active' : ''; ?>">
              <a href="<?php echo base_url('admin/draw/marquee') ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Marquee Data</a>
            </li>
            

            <li class="nav-item  <?php echo $active == 'all_user' ? 'active' : ''; ?>">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>User Master</a>
              <nav class="az-menu-sub">
                
                <a href="<?php echo base_url('admin/user_master'); ?>" class="nav-link">All User</a>
                 <a href="<?php echo base_url('admin/Transaction_master'); ?>" class="nav-link">Transaction User</a>
                 <a href="<?php echo base_url('admin/bidding_master'); ?>" class="nav-link">Bidding Master</a>
                 <a href="<?php echo base_url('admin/wallet_master'); ?>" class="nav-link">Wallet Master</a>
              </nav>
            </li>




            <li class="nav-item  <?php echo $active == 'draw' ? 'active' : ''; ?>">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i> Four Number</a>
              <nav class="az-menu-sub">
                
                <a href="<?php echo base_url('admin/draw'); ?>" class="nav-link">View Four No List</a>
              </nav>
            </li>

                
                  </div><!-- az-header-menu-header -->
                  </div><!-- az-header-menu -->
                  <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="<?php echo base_url()?>/images/face1.jpg" alt="" style="margin-top: -92px;margin-left: 1742px;"></a>
                    <div class="dropdown-menu" style = "margin-top: -52px;margin-right: 42px;">
                      <div class="az-dropdown-header d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                      </div>
                      <div class="az-header-profile">
                        <div class="az-img-user">
                          <img src="<?php echo base_url()?>/images/face1.jpg" alt="">
                        </div><!-- az-img-user -->
                        <h6>Aziana Pechon</h6>
                        <span>Admin</span>
                      </div><!-- az-header-profile -->

                      <a href="<?php echo base_url('admin/adminDashboard/admin_profile'); ?>" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                      <!-- <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a> -->
                      <a href="<?php echo base_url('admin/draw/change_password') ?>" class="dropdown-item"><i class="typcn typcn-time"></i> Change Password</a>
                      <!-- <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a> -->
                      <a href="<?php echo base_url('admin/admin_login/logout'); ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    </div><!-- dropdown-menu -->
                  </div>
                <!-- </div>
              </div> -->

             <?php } else{

              if($this->session->userdata('user_id') == null){ 

              ?>

            <li class="nav-item  <?php echo $active == 'login' ? 'active' : ''; ?>">
              <a href="<?php echo base_url('user/user_login') ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Login</a>
            </li>

            <li class="nav-item  <?php echo $active == 'registration' ? 'active' : ''; ?>">
              <a href="<?php echo base_url('user/user_login/registration') ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Registration</a>
            </li>


            <?php }}?>
            <!-- IMPORTANT  --->
            <!-- <?php 
              if($this->session->userdata('user_id') != null){?> 
                </div>
                </div>
                <div class="dropdown az-profile-menu">
                  <?php if($user_data['profile'] == ""){?>
                    <a href="#" class="az-img-user"><img src="<?php echo base_url()?>/images/face1.jpg" alt="" style="margin-top: -92px;margin-left: 1742px;"></a>
                  <?php }else{?>
                    <a href="#" class="az-img-user"><img src="<?php echo base_url('images/profile/').$user_data['profile'];?>" alt="" style="margin-top: -92px;margin-left: 1742px;"></a>
                  <?php }?>
                    <div class="dropdown-menu" style = "margin-top: -52px;margin-right: 42px;">
                      <div class="az-dropdown-header d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                      </div>
                      <div class="az-header-profile">
                        <div class="az-img-user">
                          <?php if($user_data['profile'] == ""){?>
                            <img src="<?php echo base_url()?>/images/face1.jpg" alt="">
                          <?php }else{?>
                            <img src="<?php echo base_url('images/profile/').$user_data['profile'];?>" alt="">
                          <?php }?>
                        </div>
                        <h6>Aziana Pechon</h6>
                        <span>Premium Member</span>
                      </div>

                      <a href="<?php echo base_url('user/userDashboard/user_profile'); ?>" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                     
                      <a href="<?php echo base_url('user/userDashboard/User_change_password'); ?>" class="dropdown-item"><i class="typcn typcn-time"></i> Change Password</a>
                     
                      <a href="<?php echo base_url('user/user_login/logout'); ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                  </div>
                </div>




              <?php }?> -->



           
            
           
          </ul>
        </div><!-- az-header-menu -->
       <!--  <?php if($this->session->userdata('admin_id') != null){ ?>
        <div class="az-header-right">
          
          
          <div class="az-profile-menu">
            <a href="<?php echo base_url('admin/admin_login/logout'); ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>Logout</a> 
           
          </div>
        </div>

      <?php }?> -->

     
      </div><!-- container -->
    </div><!-- az-header -->

    <!-- body start -->
<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">



















  <li class="nav-item  <?php echo $active == 'result' ? 'active' : ''; ?>">
              <a href="<?php echo base_url('home/chart') ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Result</a>
            </li>

            <?php if($this->session->userdata('user_id') != null){ ?>
              <li class="nav-item  <?php echo $active == 'transaction' ? 'active' : ''; ?>">
              <a href="<?php echo base_url('user/userDashboard'); ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Bidding master</a>
            </li>

            </div>
            </div>
            <div class="dropdown az-profile-menu">
              <?php if($user_data['profile'] == ""){?>
                <a href="#" class="az-img-user"><img src="<?php echo base_url()?>/images/face1.jpg" alt="" style="margin-top: -92px;margin-left: 1742px;"></a>
              <?php }else{?>
                <a href="#" class="az-img-user"><img src="<?php echo base_url('images/profile/').$user_data['profile'];?>" alt="" style="margin-top: -92px;margin-left: 1742px;"></a>
              <?php }?>
                <div class="dropdown-menu" style = "margin-top: -52px;margin-right: 42px;">
                  <div class="az-dropdown-header d-sm-none">
                    <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                  </div>
                  <div class="az-header-profile">
                    <div class="az-img-user">
                      <?php if($user_data['profile'] == ""){?>
                        <img src="<?php echo base_url()?>/images/face1.jpg" alt="">
                      <?php }else{?>
                        <img src="<?php echo base_url('images/profile/').$user_data['profile'];?>" alt="">
                      <?php }?>
                    </div>
                    <h6>Aziana Pechon</h6>
                    <span>Premium Member</span>
                  </div>
                  <a href="<?php echo base_url('user/userDashboard/user_profile'); ?>" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                     
                  <a href="<?php echo base_url('user/userDashboard/User_change_password'); ?>" class="dropdown-item"><i class="typcn typcn-time"></i> Change Password</a>
                 
                  <a href="<?php echo base_url('user/user_login/logout'); ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
              </div>
            </div>

            <?php }else if($this->session->userdata('user_id') == null){?>
                <li class="nav-item  <?php echo $active == 'login' ? 'active' : ''; ?>">
                  <a href="<?php echo base_url('user/user_login') ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Login</a>
                </li>

                <li class="nav-item  <?php echo $active == 'registration' ? 'active' : ''; ?>">
                  <a href="<?php echo base_url('user/user_login/registration') ?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Registration</a>
                </li>
            <?php }