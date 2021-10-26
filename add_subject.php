<?php 
 if(isset($_POST['submit_form'])) {
    include_once 'classes/CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->add_subject($_POST);
    
}
if(isset($_POST['update_form'])) {
    include_once 'classes/CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->up_sub_details($_POST);
    
}

if(isset($_REQUEST["del_id"])) {
    include_once 'classes/CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->deletexp($_REQUEST["del_id"]);
    print_r(json_encode("Records deleted successfully"));
}

if(isset($_GET['edit_id']))
{
include("classes/dbconnect.php");
    $cn=0;
$query11 = "select * from  tbl_mylearn where srno='".$_REQUEST['edit_id']."'";
$result11 = mysqli_query($con,$query11);
$row_detail = mysqli_fetch_array($result11,MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 

</head>
<body> 

<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
        <?php
if(isset($_GET['edit_id']))
{
	?>
        <form method="POST" role="form" enctype='multipart/form-data' autocomplete="off">
            <h1>Update Subject Details</h1>
<div class="form-group">
   
    <label>Subject Name</label>
<input type="text" class="form-control" name="sb_name" placeholder="subject Name" required value="<?php echo $row_detail['subject_name'] ;?>">
<label>Subject Details</label>
<input class="form-control"  type="text" name="sb_detail" placeholder="subject Details">
<label>Subject Image</label>
<input class="form-control"  type="file" name="sb_image" placeholder="subject image">
<input type="submit" class="btn btn-primary" name="update_form" value="Submit">
    </div>
</div>

 <div class="col-md-2">
            
        </div>
</form><?php } else{?>
    <form method="POST" role="form" enctype='multipart/form-data' autocomplete="off">
            <h1>Add Subject</h1>
<div class="form-group">
   
    <label>Subject Name</label>
<input type="text" class="form-control" name="sb_name" placeholder="subject Name" required>
<label>Subject Details</label>
<input class="form-control"  type="text" name="sb_detail" placeholder="subject Details">
<label>Subject Image</label>
<input class="form-control"  type="file" name="sb_image" placeholder="subject image">
<input type="submit" class="btn btn-primary" name="submit_form" value="Submit">
    </div>
</div>

 <div class="col-md-2">
            
        </div>
</form>
<?php } ?>








<section>
<table class="table table-bordered">
  <thead>
  <tr>
      <th scope="col" colspan="6"><h3>View All Subjects</h3></th>
       
    </tr>
    <tr>
      <th scope="col" width="10px">Sr.No.</th>
      <th scope="col" width="150px">Subject Icon</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Subject Details</th>
      <th scope="col">Subject Image</th>
      <th scope="col">Controls</th>
    </tr>
  </thead>
  <tbody>
  <?php include("classes/dbconnect.php");
						$query = "SELECT * FROM tbl_mylearn";  
						$result = mysqli_query($con,$query);
            $cnt=1;
	 while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
      <th scope="row"><?php echo $cnt++;?> </th>
      <td><img class="icon" src="./files/images/<?php echo $row["sub_Icon"]; ?>"></td>
      <td><?php echo $row['subject_name'];?></td>
      <td><?php echo $row['sub_details'];?></td>
      <td>
      <img src="<?php echo $row["sub_img"]; ?>" height="100px" width="100px">
    </td>
      <td>
         <a href="add_subject.php?edit_id=<?php echo $row['srno'];?>"> <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</button></a>
         <a href="add_subject.php?del_id=<?php echo $row['srno'];?>"> <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
          
    </tr>
     <?php } ?>
  </tbody>
</table>
    
</section>
        </div>
    
    </div>

</body>
</html>


