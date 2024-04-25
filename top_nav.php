<?php
    $cpage = basename($_SERVER['SCRIPT_NAME'],'.php');

$bdivs = array();
$depts = array();
$divs = array();
$regs = array();
$terrs = array();
$cegs = array();
$celem = array();
$empid = $_SESSION['EmpID'];
?>

<style type="text/css">
  .row.top-menu {
    margin-top: 2.4%;
}
.page-cs{
  margin-top: -84px;
}
button.btn.btn-success.btn-rs.resetbtn.waves-effect.waves-classic {
    height: 33px;
    width: 66px;
    left: 4px;
    top: 3px;
    background-color: #868e96;
    border-color: #616161;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 40;
    top: 0;
    left: 0;
    background-color: #FFFFFF;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    box-shadow: 1px 0px 3px #cccccc;
    font-family: "Roboto";
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 16px;
    color: #000000;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #818181;
}

.sidenav .closebtn {
    position: absolute;
    float: left;
    top: 8px;
    /*right: 0px;*/
    font-size: 21px;
    /*margin-left: 50px;*/
}
.closebtn1
{
  float: right;
  position: absolute;
  top: 1%;
  right: 0px;
  margin-left: 50px;

}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.topdashboardicon{
  cursor:pointer
}
.Plan .col-md-6 {
    float: left;
    max-height: 10px;
}
.Plan .panel-bordered>.panel-body {
    padding-top: 10px!important;
}
.panel-bordered>.panel-body
{
  padding-top: 15px!important;
}
.Plan .form-group {
    margin-bottom: 2.429rem;
}

/*.dropdown-toggle
{
  padding: 0!important;
  font-size: 13px!important;
}*/
/*.btn-group-sm>.btn, .btn-sm
{
padding: .429rem 17.5px;
margin-bottom: 12px;
}*/
.btn
{
  padding: 0.429rem 0.752rem;
  font-size: 10px;
}
.dropdown-toggle .btn .btn-default
{
padding-right: 11px;
}
.dropdown-toggle::after
{
/*margin-right: 9prx;*/
margin-left: 0.7em;
}

.col-lg-5
{
  flex: 0 0 33.667%;
}
.btn.btn-default.btn-rs.fresetbtn.waves-effect.waves-classic
{
    padding: 10px 18px;
    margin-top: 10px;
    margin-left: -10px;
    font-size: 12px;
    border-radius: 8px;
}
.btn.btn-success.btn-sm.submitbtn.waves-effect.waves-classic
{
    padding: 10px 18px;
    margin-left: -10px;
    font-size: 12px;
    border-radius: 8px;
}
.multiselect-container {
        max-height: 200px;
        width: 150;
        overflow-y: auto;
        
    }
     .btn-group .dropdown-menu>li>a{
      padding: 3px 0px;
    }
    .multiselect-container>li>a>label
    {
      padding: 3px 10px!important ;
    }


.datepicker table tr td.range
{
  color: none !important;
    background-color: none !important; 
    border-color: none !important;
    border-radius: 1%;
}

</style>

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
    role="navigation" style="margin-top: -18px;padding-left: 6px;">

      <?php include '../pages/appSideNav.php'; ?>

<div class="row topdashboardicon">
<span onclick="openNav()" class="fa fa-th" style="font-size: 20px;float: right;padding-left: 35px;padding-top: 25px;"></span><br><br><br>
</div>

<!--/. Sidebar navigation -->
  <div class="sidebar-menu sidebar-collapsed">
    
    <header class="logo">

      <a href="javascript:void(0);" class="sidebar-icon">
      <span class="fa fa-bars">
    </span> </a> <a href="javascript:void(0);"> <!-- <img src="../global/photos/logo.png" alt="logo" style="max-width: 55%;
margin-top: 25px;
margin-left: 18px;
margin-right: -40px;"> --></a> </header>
    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
    <div class="menu">
      <ul id="menu" >
        <?php if(in_array(10130, $_SESSION['subModules'])){   ?>
        <li id="menu-home" class="active"><a href="Review.php"><i class="fa fa-home"></i><span>Budget Review</span></a></li>
      <?php } ?>
    <!-- <li id="menu-reports" ><a><i class="fa fa-book fa-fw"></i><span>Revenue Analysis</span></a></li> -->

      </ul>
    </div>
  </div>

    <div class="navbar-header">
      <button type="button" id="menu-id" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"f
        data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
        data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
       <div class="brand-logo" >
       <a href="../pages/landing.php">
                <img src="../global/photos/logo.png" alt="logo" style="height: 45px !important;
    padding-left: 16px;
    margin-top: -2px;" > <img src="../assets/images/VijayRasiSeedsLogo.png" alt="logo" style="height: 62px !important;padding-left: 12px;margin-top: 7px;"></a></a>
              </div>
    
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
        data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon md-search" aria-hidden="true"></i>
      </button>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar" style="margin-left: 60px;">         
          <li class="nav-item hidden-float <?=@($cpage=='discount_budget')?"active":""?>">
            <a class="nav-link" href="discount_budget.php" role="button">Discount Budget</a>
          </li>
          <li class="nav-item hidden-float <?=@($cpage=='transfer_price')?"active":""?>">
            <a class="nav-link" href="transfer_price.php" role="button">Transfer Price</a>
          </li>
          <li class="nav-item hidden-float <?=@($cpage=='stock_obsolescence')?"active":""?>">
            <a class="nav-link" href="stock_obsolescence.php" role="button">Stock Obsolescence</a>
          </li>
          <li class="nav-item hidden-float <?=@($cpage=='logistics')?"active":""?>">
            <a class="nav-link" href="logistics.php" role="button">Logistics</a>
          </li>
          <li class="nav-item hidden-float <?=@($cpage=='nrv_upload')? "active" : "" ?>">
            <a class="nav-link" href="nrv_upload.php" role="button">NRV</a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">   
          <li class="nav-item" >
            <a class="helpDeskLink" data-userid='<?=@$_SESSION['hd_identity']['userid']?>' data-type='<?=@$_SESSION['hd_identity']['type']?>' href="https://helpdesk.rasiseeds.com/index.php" target="_blank" style="text-decoration: none;color:black;" title="Help desk" ><img src="../assets/images/help-desk.png" alt="help-desk" style="width: 54px;height: 28px"  align="center" ></a>
          </li>
           <li class="nav-item">
           <a href="../help/Rasi_Portal_Budget_User_Manual_v1.0.pdf" title="Help manual for budget review page" target="_blank" class="btn waves-effect waves-classic" ><img src="../assets/images/help-icon.png" style="margin-top:-5px;"></a>         
         </li> 
        <li class="nav-item hidden-float" id="filter">
            <a class="nav-link" href="javascript:void(0);"><img src="../global/photos/filter.png"></a>
          </li>
                <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);"><?=@$_SESSION['Name'] ?></a>
          </li>  
          <li class="nav-item dropdown">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
              data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="../global/photos/signin.png" alt="...">
                <i></i>
              </span>
            </a>
           <div class="dropdown-menu" role="menu">
            <?php 
              include '../settings.php';
            ?>
            </div>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>

