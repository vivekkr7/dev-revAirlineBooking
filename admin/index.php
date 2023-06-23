<?php include_once 'header.php'; 
require '../helpers/init_conn_db.php';?>

<link rel="stylesheet" href="../assets/css/admin.css">
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300&family=Poiret+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
<style>
  body {
  
    background-color: #efefef;
  }
  td {
  
    font-size: 18px !important;
  }
  p {
  font-size: 35px;
  font-weight: 100;
  font-family: 'product sans';  
  }  

  .main-section{
	width:100%;
	margin:0 auto;
	text-align: center;
	padding: 0px 5px;
}
.dashbord{
	width:23%;
	display: inline-block;
	background-color:#34495E;
	color:#fff;
	margin-top: 50px; 
}
.icon-section i{
	font-size: 30px;
	padding:10px;
	border:1px solid #fff;
	border-radius:50%;
	margin-top:-25px;
	margin-bottom: 10px;
	background-color:#34495E;
}
.icon-section p{
	margin:0px;
	font-size: 20px;
	padding-bottom: 10px;
}
.detail-section{
	background-color: #2F4254;
	padding: 5px 0px;
}
.dashbord .detail-section:hover{
	background-color: #5a5a5a;
	cursor: pointer;
}
.detail-section a{
	color:#fff;
	text-decoration: none;
}
.dashbord-2 .icon-section,.dashbord-2 .icon-section i{
	background-color: #9CB4CC;
}
.dashbord-2 .detail-section{
	background-color: #149077;
}

.dashbord-1 .icon-section,.dashbord-1 .icon-section i{
	background-color: #2980B9;
}
.dashbord-1 .detail-section{
	background-color:#2573A6;
}
.dashbord-3 .icon-section,.dashbord-3 .icon-section i{
	background-color:#316B83;
}
.dashbord-3 .detail-section{
	background-color:#CF4436;
}
  
</style>
    <main>
        <?php if(isset($_SESSION['adminId'])) { ?>
          <div class="container">

            <div class="main-section">
              <div class="dashbord dashbord-1">
                <div class="icon-section">
                  <i class="fa fa-users" aria-hidden="true"></i><br>
                 Total Passengers
                  <p><?php include 'psngrcnt.php';?></p>
                </div>
               
              </div>
              <div class="dashbord dashbord-2">
                <div class="icon-section">
                  <i class="fa fa-money" aria-hidden="true"></i><br>
                 Amount
                  <p>Rs. <?php include 'amtcnt.php';?></p>
                </div>
               
              </div>
              <div class="dashbord dashbord-3">
                <div class="icon-section">
                  <i class="fa fa-plane" aria-hidden="true"></i><br>
                 Flights
                  <p><?php include 'flightscnt.php';?></p>
                </div>
               
              </div>     
              
              <div class="dashbord">
                <div class="icon-section">
                  <i class="fa fa-plane fa-rotate-180" aria-hidden="true"></i><br>
                 Available Airlines
                  <p><?php include 'airlcnt.php';?></p>
                </div>
               
              </div>  
              
            </div>


    
<?php } ?>
    </main>
    <?php include_once 'footer.php'; ?>
