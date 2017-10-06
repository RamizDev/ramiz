<?php 
	 include_once 'include/header.php';
	include 'classes/Superadmin.php';
    
      $obj_sup = new Superadmin();
 
      $statment=$obj_sup->view_all_transfer_info();
?>
	   <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
	   <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Transfers</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
	        	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                 <th>Employee Name</th>
                      <th>Transfer Date</th>
                      <th>Transfer To(Department)</th>
                      <th>Transfer To(Station)</th>
                       
                 
            </tr>
        </thead>
        <tfoot>
            <tr>
                 <th>Employee Name</th>
                      <th>Transfer Date</th>
                      <th>Transfer To(Department)</th>
                      <th>Transfer To(Station)</th>
                       
            </tr>
        </tfoot>
        <tbody>
        <?php while($row = $statment->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
                <td><?php echo $row['fullName']; ?></td>
                <td><?php echo $row['transferDate']; ?></td>
                <td><?php echo $row['transferDepartment']; ?></td>
                <td><?php echo $row['transferStation']; ?></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div>
                        <a class="btn btn-primary" href="transfer.php" role="button">Add New Transfer</a>
                 </div>
        </div>
      </div>
    </div>
	       </div>
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
 <?php include_once 'include/footer.php';?>
