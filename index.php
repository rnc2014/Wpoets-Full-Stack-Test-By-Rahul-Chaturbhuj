<!-- Code By Rahul Chaturbhuj - Wpoets Full Stack Test-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Stack-Test (Wpoets)-Rahul Chaturbhuj</title>
    <!-- CSS CDN Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/dist/js/bootstrap.bundle.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="files/css/style.css">
    
   <!-- Mobile view accordion plus / minus button images -->
   <style>

.panel-title > a:before {
    float: right !important;
    font-family: FontAwesome;
    content:url("./files/images/minus-01.svg");
    padding-right: 5px;
}
.panel-title > a.collapsed:before {
    float: right !important;
    content:url("./files/images/plus-01.svg");
}
.panel-title > a:hover, 
.panel-title > a:active, 
.panel-title > a:focus  {
    text-decoration:none;
}
</style>
   
</head>
<body>
<a href="add_subject.php" class="btn btn-warning btn-lg"><i class="fa fa-plus"></i>Add New </a>
<!-- MOBILE VIEW -->
  <div class="container hidden-md hidden-lg">  <h1>DelphianLogic in Action</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aenean commodo</p>
       
<div class="row">
<div class="col-sm-12">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 

<?php include("classes/dbconnect.php");
						$query4 = "SELECT * FROM tbl_mylearn";  
						$result4 = mysqli_query($con,$query4);
            $num=1;
	 while($row4 = mysqli_fetch_array($result4)){
    ?> 
  <div class="panel panel-default"> 
  <div class="panel-heading" role="tab" id="heading<?php echo $num;?>">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $num;?>" aria-expanded="false" aria-controls="collapse<?php echo $num;?>" class="collapsed">
           
        <img class="icon" src="./files/images/<?php echo $row4["sub_Icon"]; ?>" alt=""><?php echo $row4["subject_name"]; ?>
        </a>
      </h4>

    </div>
        
    <div id="collapse<?php echo $num;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $num;?>" aria-expanded="false" style="height: 100%;">
     <div class="panel-body">
               <div class="mbcol2">
               <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <?php
                  
                	$result5 = mysqli_query($con,$query4);    
	 while($row5 = mysqli_fetch_array($result5)){
    ?>
                      <li data-target="#myCarousel1" data-slide-to="<?php echo  $cnt++; ?>" class="active"></li>
                 <?php }?>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      
                      <?php
					 	$result6 = mysqli_query($con,$query4);
	 while($row6 = mysqli_fetch_array($result6)){
    ?> <div class="item">
                        <div class="box11">
                       
                          <h3><?php echo $row6["subject_name"]; ?></h3>
                          <h4 class="title">Digital Learning Infrastructure</h4>
                          <span>
                            Usability enhancement and Training for Transaction Portal for Customers
                           </span>   
                        </div>
                       
                      </div> <?php } ?>

                      <div class="item active">
                        <div class="box11">
                          <h3>Communication</h3>
                          <h4 class="title">Digital Learning Infrastructure</h4>
                          <span>
                            Usability enhancement and Training for Transaction Portal for Customers
                           </span>
                            
                        </div>                      </div>
                        
                    </div>
                   
                       <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
                  </div>
               </div>
            
			<div class="mbcol3"><div id="collapseGroup1">
                  <div class="collapse for-slide-0 in">
                     <h3><img class="Slide-img" src="./files/images/DL-Learning-1.jpg" alt=""></h3>
                    
                  </div>
                  <div class="collapse for-slide-1">
                      <img class="Slide-img" src="./files/images/DL-Technology.jpg" alt="">
                    
                  </div>
                  <div class="collapse for-slide-2">
                    <img class="Slide-img" src="./files/images/DL-Communication.jpg" alt="">
                    
                  </div>
                </div> </div>
			</div>
			
        </div>
    
    </div>
    <?php
      $num++;
      } ?>
</div>

</div>
</div>
</div>


<!-- DESKTOP VIEW -->

    <div class="container hidden-sm hidden-xs">
        <h1>DelphianLogic in Action</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aenean commodo</p>
        <div class="row">
          <div class="col-md-3 col1">
          <?php include("classes/dbconnect.php");
						$query1 = "SELECT * FROM tbl_mylearn";  
						$result1 = mysqli_query($con,$query1);
            $cnt=0;
	 while($row1 = mysqli_fetch_array($result1)){
    ?>
              <button type="button" data-target="#myCarousel" data-slide-to="<?php echo  $cnt++; ?>"><img class="icon" src="./files/images/<?php echo $row1["sub_Icon"]; ?>" alt=""><?php echo $row1["subject_name"]; ?> </button>
          <?php } ?>
            </div>
          <div class="col-md-4 col2">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <?php
                  
                	$result2 = mysqli_query($con,$query1);    
	 while($row2 = mysqli_fetch_array($result2)){
    ?>
                      <li data-target="#myCarousel" data-slide-to="<?php echo  $cnt++; ?>" class="active"></li>
                 <?php }?>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      
                      <?php
					 	$result3 = mysqli_query($con,$query1);
	 while($row3 = mysqli_fetch_array($result3)){
    ?> <div class="item">
                        <div class="box11">
                       
                          <h3><?php echo $row3["subject_name"]; ?></h3>
                          <h4 class="title">Digital Learning Infrastructure</h4>
                          <span>
                          <?php echo $row3["sub_details"]; ?>  </span>   
                        </div>
                       
                      </div> <?php } ?>

                      <div class="item active">
                        <div class="box11">
                          <h3>Communication</h3>
                          <h4 class="title">Digital Learning Infrastructure</h4>
                          <span>
                            Usability enhancement and Training for Transaction Portal for Customers
                           </span>
                            
                        </div>                      </div>
                    </div>
                
                       <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
                  </div>
                 </div>
                <div class="col-md-4 col3"><div id="collapseGroup">
         
                  <div class="collapse for-slide-0 in">
                     <h3><img class="Slide-img" src="./files/images/DL-Learning-1.jpg" alt=""></h3>
                  </div>
                   
                  <div class="collapse for-slide-1">
                      <img class="Slide-img" src="./files/images/DL-Technology.jpg" alt="">
                   </div>
                  <div class="collapse for-slide-2">
                    <img class="Slide-img" src="./files/images/DL-Communication.jpg" alt="">
                   </div>
                </div> 
                  </div>
              
              </div>
               
            </div>
            
<!-- Javascript  Section-->
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  
 <script>
    $( document ).ready(function() {
  $('#myCarousel').on('slide.bs.carousel', function (e) {
    var forSlide = $('.for-slide-' + $(e.relatedTarget).index());
    if ( !forSlide.hasClass('in') ) {
      $('#collapseGroup>.collapse.in').collapse('hide');
      forSlide.collapse('show');
    }
  })
});  
 
$( document ).ready(function() {
  $('#myCarousel1').on('slide.bs.carousel', function (e) {
    var forSlide = $('.for-slide-' + $(e.relatedTarget).index());
    if ( !forSlide.hasClass('in') ) {
      $('#collapseGroup1>.collapse.in').collapse('hide');
      forSlide.collapse('show');
    }
  })
});  
 
</script>


  
</body>
</html>