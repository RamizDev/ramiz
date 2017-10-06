<?php

include_once 'Dbconf.php';
class Superadmin extends Dbconf{


public function save_member_info($data, $files){
	$companyName= $data['companyName'];
	$station= $data['station'];
	$department= $data['department'];
	$employeeType= $data['employeeType'];
	$employeeCategory= $data['employeeCategory'];
	$jobTitle= $data['jobTitle'];
	$workShift= $data['workShift'];
	$fullName= $data['fullName'];
	 
	$emailAddress= $data['emailAddress'];
	$joiningDate= $data['joiningDate'];
	$nationalId= $data['nationalId'];
	$gender= $data['gender'];
	$dateOfBirth= $data['dateOfBirth'];
	$address= $data['address'];
	$mobileNumber= $data['mobileNumber'];
	 




		  $directory = 'images/';
          $target_file = $directory . $files['addImage']['name'];
          $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
          $image_size = $files['addImage']['size'];
          $check = getimagesize($files['addImage']['tmp_name']);
          if ($check) {
              if (file_exists($target_file)) {
                  echo 'File already exists.';
                  exit();
              } else {
                  if ($image_size > 10000000) {
                      echo 'Image size is too large';
                      exit();
                  } else {
                      if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'gif') {
                          echo 'File type is not valid';
                          exit();
                      } else {
                          move_uploaded_file($files['addImage']['tmp_name'], $target_file);
                          
                          $query = "INSERT INTO tbl_add_member (companyName,station,department,employeeType,employeeCategory,jobTitle,workShift,fullName  ,emailAddress,joiningDate,nationalId,gender,dateOfBirth,address,mobileNumber,addImage) VALUES(:companyName,:station,:department,:employeeType,:employeeCategory,:jobTitle,:workShift,:fullName,:emailAddress,:joiningDate,:nationalId,:gender,:dateOfBirth,:address,:mobileNumber,:addImage)";
                          $statment = $this->db_con->prepare($query);
                          $statment->execute(array(

                          	":companyName"=>$companyName,
                          	":station"=>$station,
                          	":department"=>$department,
                          	":employeeType"=>$employeeType,
                          	":employeeCategory"=>$employeeCategory,
                          	":jobTitle"=>$jobTitle,
                          	":workShift"=>$workShift,
                          	":fullName"=>$fullName,
                          	 
                          	":emailAddress"=>$emailAddress,
                          	":joiningDate"=>$joiningDate,
                          	":nationalId"=>$nationalId,
                          	":gender"=>$gender,
                          	":dateOfBirth"=>$dateOfBirth,
                          	":address"=>$address,
                          	":mobileNumber"=>$mobileNumber,
                          	":addImage"=>$target_file



                          	));
                          if ($statment) {
                              echo ' save successfully';
                          } else {
                              echo 'an error occure';
                          }
                      }
                  }
              }
          } else {
              echo 'The upload file is not an image';
              exit();
          }

}
public function insert_transfer_info($data){
  $fullName= $data['fullName'];
  $transferDate= $data['transferDate'];
  $transferDepartment= $data['transferDepartment'];
  $transferStation= $data['transferStation'];
    


   $query = "INSERT INTO tbl_transfer(fullName,transferDate,transferDepartment,transferStation) VALUES(:fullName,:transferDate,:transferDepartment,:transferStation)";
     $statment = $this->db_con->prepare($query);
      $statment->execute(array(

      ":fullName"=>$fullName,
      ":transferDate"=>$transferDate,
      ":transferDepartment"=>$transferDepartment,
      ":transferStation"=>$transferStation
      ));
      echo '<script>document.location.replace("transfer.php");</script>';
  }
  public function save_all_achievement($data){
  $employee= $data['employee'];
  $achievementTitle= $data['achievementTitle'];
  $achievementDate= $data['achievementDate'];
   
   $query = "INSERT INTO tbl_achievement(employee,achievementTitle,achievementDate) VALUES(:employee,:achievementTitle,:achievementDate)";
     $statment = $this->db_con->prepare($query);
      $statment->execute(array(
      ":employee"=>$employee,
      ":achievementTitle"=>$achievementTitle,
      ":achievementDate"=>$achievementDate
      ));
      echo '<script>document.location.replace("achievement.php");</script>';
       
  }
  public function save_all_promotion($data){
  $fullName= $data['fullName'];
  $promotionTitle= $data['promotionTitle'];
  $promotionDate= $data['promotionDate'];
   
   $query = "INSERT INTO tbl_promotion(fullName,promotionTitle,promotionDate) VALUES(:fullName,:promotionTitle,:promotionDate)";
     $statment = $this->db_con->prepare($query);
      $statment->execute(array(
      ":fullName"=>$fullName,
      ":promotionTitle"=>$promotionTitle,
      ":promotionDate"=>$promotionDate
      ));
      echo '<script>document.location.replace("promotion.php");</script>';
       
  }
public function view_all_member_info(){
  $query = "SELECT * FROM tbl_add_member";
  $statment = $this->db_con->query($query);

  return $statment;
}
public function view_all_member_gender(){
  $query = "SELECT gender, count(*) as number  FROM tbl_add_member GROUP BY gender";
  $statment = $this->db_con->query($query);

  return $statment;
}
public function view_all_member_eType(){
  $query = "SELECT employeeType, count(*) as number  FROM tbl_add_member GROUP BY employeeType";
  $eType = $this->db_con->query($query);

  return $eType;
}
public function view_all_member_eCat(){
  $query = "SELECT employeeCategory, count(*) as number  FROM tbl_add_member GROUP BY employeeCategory";
  $eCat = $this->db_con->query($query);

  return $eCat;
}
public function view_all_member_eAge(){
  $query = "SELECT workShift, count(*) as number  FROM tbl_add_member GROUP BY workShift";
  $eAge = $this->db_con->query($query);

  return $eAge;
}
public function view_all_transfer_info(){
  $query = "SELECT * FROM  tbl_transfer";
  $statment = $this->db_con->query($query);

  return $statment;
}
public function view_all_achievement_info(){
  $query = "SELECT * FROM  tbl_achievement";
  $statment = $this->db_con->query($query);

  return $statment;
}
public function view_all_promotion_info(){
  $query = "SELECT * FROM  tbl_promotion";
  $statment = $this->db_con->query($query);

  return $statment;
}
public function view_all_member_name(){
  $query = "SELECT * FROM tbl_add_member";
  $statment = $this->db_con->query($query);

  return $statment;
}

public function view_single_member_info($data){
  $id = $data;
  $query = "SELECT * FROM tbl_add_member WHERE id=$id";
  $statment = $this->db_con->query($query);

  return $statment;

}


}