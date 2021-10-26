<?php
include_once 'Dao.php';

class CrudController
{

   	 public function add_subject($formArray)
    {
		$sb_name = $_POST['sb_name'];
		$sb_detail = $_POST['sb_detail'];
		$sb_image = $_POST['sb_image'];
     $fileinfo=PATHINFO($_FILES["sb_image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["sb_image"]["tmp_name"],"./files/images/".$newFilename);
	$location= "./files/images/".$newFilename;
	$dao = new Dao();
     $conn = $dao->openConnection();
	    $sql = "INSERT INTO `tbl_mylearn`(subject_name,sub_details,sub_img) VALUES ('" .$sb_name . "','" . $sb_detail . "','" . $location . "')";
       $conn->query($sql);
	   $last_id = $conn->lastInsertId();
	   header("Location: add_subject.php?inserted");
       $dao->closeConnection();
 
    } 

	public function up_sub_details($formArray)
    {
		$sb_name = $_POST['sb_name'];
		$sb_detail = $_POST['sb_detail'];
		$fileinfo=PATHINFO($_FILES["sb_image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["sb_image"]["tmp_name"],"./files/images/".$newFilename);
	$location= "./files/images/".$newFilename;
        $dao = new Dao();
        
        $conn = $dao->openConnection();

       $sql = "UPDATE tbl_mylearn SET subject_name='" . $sb_name. "',sub_details='" . $sb_detail. "',sub_img='" . $location. "' where srno='" . $pt_id. "' ";
		
 $conn->query($sql);
	$last_id = $conn->lastInsertId();
	//echo $last_id;
 
	header("Location:edit_patient.php?pid=$pt_id&inserted");
        $dao->closeConnection();
   }
	public function deletexp($id)
    {
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "DELETE FROM `tbl_mylearn` where srno='$id'";
        
        $conn->query($sql);
		
	 echo "<script type='text/javascript'>document.location.href='add_subject.php?deleted';</script>";
        
		$dao->closeConnection();
    }
	

	 
}

?>