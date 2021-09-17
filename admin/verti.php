<?php
include 'nav.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        
        body {
  /*background: #599fd9;*/
  /*background-image: linear-gradient( 135.9deg,  rgba(109,25,252,1) 16.4%, rgba(125,31,165,1) 56.1% );*/
  min-height: 100vh;
  overflow-x: hidden;
  
}

.container{
    margin-left: 24%;
    width: 100%;
    text-align: center;
    margin-top: 5%;
}
.container1{
    margin-left: 20%;
    width: 80%;
    
}
 .vertical-nav {
  min-width: 17rem;
  width: 17rem;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
  margin-top: 3%;
}
.page-content {
  width: calc(100% - 17rem);
  margin-left: 17rem;
  transition: all 0.4s;
} 

#sidebar.active {
  margin-left: -17rem;
}

#content.active {
  width: 100%;
  margin: 0;
}

.separator {
  margin: 3rem 0;
  border-bottom: 1px dashed #fff;
}

.text-uppercase {
  letter-spacing: 0.1em;
}
.text-gray {
  color: #aaa;
}
.nav-link{
    text-transform: capitalize;
}
.nav-link:hover{
    background:#f3f2f2;
}
.text-primary{
    color:#7579e7 !important;
}
@media (max-width: 768px) {
  #sidebar {
    margin-left: -17rem;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #content {
    width: 100%;
    margin: 0;
  }
  #content.active {
    margin-left: 17rem;
    width: calc(100% - 17rem);
  }
}

    </style>
    <script>
    $(function() { 
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});


    </script>
</head>
<body>
 
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
        <img loading="lazy" src="img/avtar.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">Admin</h4>
        <p class="font-weight-normal text-muted mb-0"><?php echo $_SESSION['login_user'];?></p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
        <a href="dasboard admin.php" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
    </li>
    <li class="nav-item">
        <a href="addbook.php" class="nav-link text-dark">
                <i class="fa fa-plus mr-3 text-primary fa-fw"></i>
                Add New Book
            </a>
    </li>
    <li class="nav-item">
      <a href="removebook.php" class="nav-link text-dark">
                <i class="fa fa-archive mr-3 text-primary fa-fw"></i>
                Remove Book
            </a>
    </li>
    <li class="nav-item">
        <a href="avilablebook.php" class="nav-link text-dark">
                <i class="fa fa-list-alt mr-3 text-primary fa-fw"></i>
                Book Availability
            </a>
    </li>
  </ul>

  <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Services</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
        <a href="requestissue.php" class="nav-link text-dark">
                <i class="fa fa-envelope-open mr-3 text-primary fa-fw"></i>
                Book Issue Request 
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Student Report
            </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link text-dark">
                <i class="fa fa-plus mr-3 text-primary fa-fw"></i>
                Add Student 
            </a>
    </li>
    <li class="nav-item">
        <a href="returnrequest.php" class="nav-link text-dark">
                <i class="fa fa-envelope mr-3 text-primary fa-fw"></i>
                 Return Book Request
            </a>
    </li>
    <li class="nav-item">
        <a href="adminlogin.php" class="nav-link text-dark">
                <i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>
                Logout
            </a>
    </li>
  </ul>
</div> <!<!--End of vertical nav bar -->