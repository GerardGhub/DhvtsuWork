


<head>
<style>
input:hover{
	background-color:lightblue;
}
</style>
</head>


<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
						
						
						
						
						
						
						
						
                            <!--div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="Gerard Singian" class="img-circle profile-img">
                                <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6>
                                <small class="info">O&G Leather Mftg Corp.</small>
                            </div-->
							<!-- This is the original info closed that ill finish code -->
							<div class="user-info closed">
							


						
								
							
	
					<p style="text-align:center;"><img class="img-circle" src="../item_images/<?php echo $_SESSION['sess_user_image'];?>" height="100" width="180" /></p>
                                                     <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6> 
                                <small class="info">O&G Leather Mftg Corp</small>
		
		
		
		
                            </div>
							
							
							
							
							
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li style="font-sizer:20px;">
                                      <li>  <a href="managefinance.php" style="font-size:17px; background-color:brown;"><i class="fa fa-dashboard"></i> <span>&nbsp;&nbsp;Main Dashboard</span> </a></li>
								
  
                                      <li class="#active"><a href="viewmemorandum.php" style="font-size:17px;"><i class="	fa fa-paper-plane-o">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>O&G Memorandum </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
								
	
										
						 <li><a data-toggle="modal"  title="Notifications" data-target="#Uploadmemo" style="font-size:17px;"><i class="fa fa-plus" style="color:white;">&nbsp;</i> <span>Release New Memorandum </span> <!--o class="fa fa-angle-right arrow"></o--><!--/a></li-->
						 
						 
						 
						 
						 	  
									     <li class="active"><a href="viewmemosubjects.php" style="font-size:17px;"><i class="	fa fa-envelope">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Subject&nbsp;Memorandum </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 	 <li><a data-toggle="modal"  title="Notifications" data-target="#Uploadmemosubject" style="font-size:17px;"><i class="fa fa-plus" style="color:white;">&nbsp;</i> <span>New Subject Memorandum </span> <!--o class="fa fa-angle-right arrow"></o--><!--/a></li-->
									 
              	<!--li><a data-toggle="modal"  title="Notifications" data-target="#UpdateInformation" data-toggle="modal"class="color-primary text-center " osnclick="return confirm('Update a UserInformation <?php echo $_SESSION['sess_username'];?> ?')"><i class="fa fa-comment"></i> </a></li-->					
								
									 
                                  

									
                                    </li>

                                    <li class="nav-header">
                                        <!--span class="">Appearance</span-->
                                    </li>
                                    <li class="has-children">
                              
                                        <ul class="child-nav">
                 
                                           
                                        </ul>
                                    </li>
  <li class="has-children">
                                 
                                        <ul class="child-nav">
                                          
                                        </ul>
                                    </li>
   <li class="has-children">
                                       
                                        <ul class="child-nav">
                                         
                                           
                                        </ul>
                                    </li>
<li class="has-children">
                            
                                        <ul class="child-nav">
                                            <!--li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li-->
                                           
                                        </ul>
                                        <!--li><a href="change-password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li-->
                                           
										   <br>
										      <br>
											     <br>
												    <br>
													   <br>
													      <br>
														     <br>
															    <br>
																   <br>
																      <br>
																	     <br>
																		    <br>
																			   <br>
																			      <br>
																				     <br>
																					    <br>
																						   <br>
																						      <br>
																							     <br>
																								    <br>
																									   <br>
																									      <br>
                                    </li>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
					
					
					
					
					
					
					
					
					
					<!-- Break muna here mga bes -->
					
					
					
					
										<!-- Mediul Modal kiki-->
        <div class="modal fade" id="UpdateInformation" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <!--h3 style="color:white;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Update User Information</center></h3-->
              </div>
              <!--div class="modal-body"-->
			  <!--     <div class="well">-->
         <div class="modal-body">
				<?php
  include('connect.php');
                                    if (isset($_POST['subnetting'])) {

                                        $id = $_POST['id'];
                                        $name = $_POST['name'];
                                         $price = $_POST['price'];                                     
                                        $code = $_POST['code'];
                                        $brand = $_POST['brand'];                                     
                                        $type= $_POST['type'];
                                        $supp= $_POST['supp'];
                                        $emp= $_POST['emp'];
                                        $method=  $_POST['method'];
                                        $sv=  $_POST['sv'];
                                        $life=  $_POST['life'];
                                        $date=$_POST['date_post'];
										   $sub_category=$_POST['sub_category'];
										      $qty=$_POST['qty'];
											     $uom=$_POST['uom'];
												    $ref_no=$_POST['ref_no'];
													   $location=$_POST['location'];
													   $laarnie=$_POST['laarnie'];
														$item_image=$_POST['item_image'];
														$pct=$_POST['pct'];
														$pcta_image=$_POST['pcta_image'];
														
                         mysql_query("insert into tb_equipment    (item_id,item_code,item_name,brand_name,price,employee_id,item_category,supplier_id,date_post,status,sub_category,qty,uom,ref_no,location,item_image,pct,pcta_image) values
     ('$id','$code','$name','$brand','$price','$emp','$type','$supp','$date','Good','$sub_category','$qty','$uom','$ref_no','$location','sorry.jpg','Property Count Tag','GerardSs.jpg')") or die(mysql_error());

         mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
									alert("New Asset Equipment added Succesfully");
                                                    window.location= "viewassets.php";
                                            </script>

                                            <?php
                                    }
                                    ?>

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset style="color:#blue;">
					
					<input type="hidden" id="username" name="id" value="<?php
                        $id = mysql_query("select MAX(item_id) as max_item_id from tb_equipment");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_item_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>

  <div class="form-group" style="background-image: url("..\item_images\amazing.gif");">
   <center><img src="..\item_images\<?php echo $_SESSION['sess_user_image'];?>"></center><center><emp class="btn btn-dangers" style="font-size:24px;color:whitesmoke; padding-top:5px;width:210px;height:34px;text-align:center;"> <?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?>  </emp></center>
	
    <!--div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Description" required/>
    </div-->
  </div>
	
						<!--
                            Description:
                            <div class="form-group">
							
                                <input class="form-control" placeholder="" name="policy_title" type="text" required>
                           
							 
							</div-->
							
							
							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Name</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_fname'];?>" id="inputPassword3" required/>
    </div>
  </div>

  
  
  
  
  							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Lastname</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_lastname'];?>" id="inputPassword3" required/>
    </div>
  </div>
  
  
  
  
  
  
  
  
    							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Department</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_department'];?>" id="inputPassword3" required/>
    </div>
  </div>
  
  
  
      							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Role</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_userrole'];?>" id="inputPassword3" readonly/>
    </div>
  </div>
  
  
  
  
  
  
       							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Username</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_username'];?>" id="inputPassword3" required/>
    </div>
  </div>
  
  
  
  
       							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Password</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_password'];?>" id="inputPassword3" required/>
    </div>
   </div>
   <!--/div>
     </div>
	    </div>
		   </div-->
		   
		   
  
  
  
  
  
  
  
  
  
  
  

                                          <a  href="#">
										  
										  
<?php 

include(connect.php);

$sql ="SELECT * from aa2000.tb_equipment where item_category=1; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from miscategory ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

   			  
  
                                          <!--a class="dashboard-stat bg-danger" href="#">
<?php 
$sql ="SELECT * from mis ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from miscategory ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <span class="number counter"><?php echo ($totalsubjects);?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span>
											
                                        </a-->
  
  
  
  
  

  
  
  
  
  
  
  <!--Gerard OME


	   <div class="form-group">
	<label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Code:</label>
	    <div class="col-sm-10">
  <input type="text" class="form-control" id="1" name="id" value="OMEs-000<?php
include('connect.php');
                        $id = mysql_query("select MAX(item_id) as max_item_id from ome");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_item_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>
						
  				</div>
 COmment muna 9/13/18-->

  

   
   
   


				


   <!--div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;">UOM</label>
    <div class="col-sm-10">
    <input type="text" name="uom" placeholder="UOM" class="form-control" required/>
    </div>
  </div-->  
  
  
  
  <!-- Insert the Unit of Measure Here -->

  
  
  <!-- FInally End the Unit of Measure Here -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
  
  
  
				

  
  

  
 
				   
				
                  
            
              </div>
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <button type="submit" name="submitting" class="btn btn-success">Update</button>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
						
					
										<!-- Mediul Modal kiki-->
        <div class="modal fade" id="orgchart" tabindex="-1" width="350" role="dialog" aria-labelledby="myMediulModalLabel">
      p;<div class="modal-dialog modal-md" style="width:1370px;position:absolute:right:50px;">
            <div style="color:white;background-color:white;" class="modal-content">
			        <!--div style="color:white;background-color:#008CBA" class="modal-content"-->
              <!--div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

              </div-->
          
       


<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				<img src="../item_images/orgchart.jpg" width="1620" height="900">
				
		
            </div>
          </div>
        </div>
		

		
		
		
		<!-- Yung nga lang putang ina! -->
		
			
	
								<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Uploadmemo" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md" style="width:630px;">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 style="color:whitet;text-align:center;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Add New  Memorandum</center>
              </h3></div>
              <!--div class="modal-body"-->
         <div class="well">

                  
				  
				  <?php
  include('connect.php');
                                    if (isset($_POST['submitbabys'])) {

                                        $Memo_id = $_POST['Memo_id'];
                                        $Two = $_POST['Two'];
                                         $Fromo = $_POST['Fromo'];                                     
                                        $Date = $_POST['Date'];
                                        $Subject_identity=$_POST['Subject_identity'];                                     
                                        $Subject_Date=$_POST['Subject_Date'];
                                        $Series_Code=$_POST['Series_Code'];
                                        $Employee= $_POST['Employee'];
                                        $Prepared_By=$_POST['Prepared_By'];
                                        $Noted_BY=$_POST['Noted_BY'];
                                        $Status=$_POST['Status'];
                                        $cc1=$_POST['cc1'];
										  $cc2=$_POST['cc2'];
										    $cc3=$_POST['cc3'];
											  $cc4=$_POST['cc4'];
											    $cc5=$_POST['cc5'];
												  $cc6=$_POST['cc6'];
												    $cc7=$_POST['cc7'];
													  $cc8=$_POST['cc8'];
													    $owncc=$_POST['owncc'];
														$backDate=$_POST['backDate'];
					
                         mysql_query("insert into tomemorandum
 (Memo_id,Two,Fromo,Date,Subject_identity,Subject_Date,Series_Code,Employee,Prepared_By,Noted_BY,Status,cc1,cc2,cc3,cc4,cc5,cc6,cc7,cc8,owncc,backDate,breakline2,subject) values
     ('$Memo_id','$Two','$Fromo','$Date','$Subject_identity','$Subject_Date','$Series_Code','$Employee','$Prepared_By','$Noted_BY','Posted','HumanResources Department','General Services Department','MIS Department','Logistic Department','Manufacturing Department','Office of the President','Bulletin','File','Finance Department','backdatesample','button disabled 21','$subject')") or die(mysql_error());

         mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New O&G memorandum Succesfully Posted!");
                                                    window.location= "viewmemorandum.php";
                                            </script>

                                            <?php
                                    }
                                    ?>

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset>
					
					<input type="hidden" id="username"  style="color:black;"name="Memo_id" value="<?php
                        $id = mysql_query("select MAX(Memo_id) as max_Memo_id from tomemorandum ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_Memo_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>
<!--    
  font-family: Arial, Helvetica, sans-serif;
}                                                                       -->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">To&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Two" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;
	">From</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Fromo" class="form-control" value="<?php echo $_SESSION['sess_department'];?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Date" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
  
  <!--?php
$yesterday = date("Y-m-d", time()-86400);
echo $yesterday;?-->
				  
				  
				  
				  
		    <div class="form-group">

	
                          <!-- Category Assets:-->
						      <label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Subject</label>
						  
							
							
							
						    <!--div class="col-sm-10"-->	
						  <select id="types" class="form-control" name="Subject_identity"> 
						  <option value="">...</option>
						   <!--option value="blankall">...</option-->
 <?php
			//include('..connect.php');
			$connection=mysqli_connect('localhost','root','','srms');
		$department=$_SESSION['sess_department'];
		
        $query=mysqli_query($connection,"select * from subject where department='$department'") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
        ?>
        <option value="<?php echo $row['Subject_id'];?>"><?php echo $row['Subject_name'];?></option>
		
        <?php } ?>
 

</select>  	
		<!--/div-->					
				

  </div>
  	  
				  		  
				  
				  
			    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject</label>
  
      <input type="text" name="Subject_identity" class="form-control" id="inputEmail3" required/>

  </div-->
				  
			











			
				  
				      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;Date</label>
    <!--div class="col-sm-10"-->
      <input type="Date" name="Subject_Date" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  </div>

			
	
	
	<!-- Start of the series here!-->
	
	                                     <a  href="#">
										  
										  
<?php 

include(connect.php);

$sql ="SELECT * from tomemorandum where owncc='Finance Department'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from tomemorandum ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

   			  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;Series&nbsp;Code</label>
    
      <input type="text" name="Series_Code" class="form-control" value="FD-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" required/>

  </div>
	
	
	
	
	
	
	
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
					  					      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Employee</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Employee" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  </div>
				  

				  
						  					      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Prepared_By" class="form-control" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" required/>
    <!--/div-->
  </div>
					  
				  
				  
						      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Noted&nbsp;by:</label>

      <input type="text" name="name" class="form-control" id="inputEmail3" required/>
 
  </div-->
			
				  
				  
				  
				  
				  
			  
    <div class="form-group">

	
                          <!-- Category Assets:-->
						      <label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Noted&nbsp;by</label>
						  
							
							
							
						    <!--div class="col-sm-10"-->	
						  <select id="types" class="form-control" name="Noted_BY" > 
						  <option value="">...</option>
						   <!--option value="blankall">...</option-->
 <?php
			include('..connect.php');
		
        $query=mysql_query("select * from empleyado where superskill='Manager'") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['employee_id'];?>"><?php echo $row['Name'];?></option>
		
        <?php } ?>
 

</select>  	
		<!--/div-->					
				

  </div>
  	  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <button type="submit" name="submitbabys" class="btn btn-success">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
            </div>
            </div>
            
 
         			
		
		
		
		
		
		
		
		
		
		
		
		
								<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Uploadmemosubject" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md" style="width:630px;">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 style="color:whitet;text-align:center;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Add New Subject Memorandum Category</center>
              </h3></div>
              <!--div class="modal-body"-->
         <div class="well">

                  
				  
				  <?php
  include('connect.php');
                                    if (isset($_POST['submitbabylaarnie'])) {

                                        $Subject_id = $_POST['Subject_id'];
                                        $Subject_name = $_POST['Subject_name'];
										$Date_added = $_POST['Date_added'];
										$department = $_POST['department'];
                              
                         mysql_query("insert into subject
 (Subject_id,Subject_name,Date_added,department) values
     ('$Subject_id','$Subject_name','$Date_added','$department')") or die(mysql_error());

      //   mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) //values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New Memorandum Category Succesfully Added!");
                                                    window.location= "viewmemosubjects.php";
                                            </script>

                                            <?php
                                    }
                                    ?>

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset>
					
					<input type="hidden" id="username"  style="color:black;"name="Subject_id" value="<?php
                        $id = mysql_query("select MAX(Subject_id) as max_Subject_id from subject ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_Subject_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>
<!--    
  font-family: Arial, Helvetica, sans-serif;
}                                                                       -->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Category&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Subject_name" class="form-control" placeholder="Memorandum Subject Category .." id="inputEmail3" required/>
    <!--/div-->
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Department&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="department" value="<?php echo  $_SESSION[sess_department];?>" class="form-control" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
  
 
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Date_added" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
  

			












	
	
	<!-- Start of the series here!-->
	
	                                     <a  href="#">
										  
										  
<?php 

include(connect.php);

$sql ="SELECT * from tomemorandum where owncc='Finance Department'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from tomemorandum ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

	
	
	
	
	
	
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
	  

				  
						  					      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Prepared_By" class="form-control" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
					  
				  

				  
				  
				  
				  
			  
    <div class="form-group">

				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <button type="submit" name="submitbabylaarnie" class="btn btn-success">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
            </div>
            </div>
            
 
         			
		
		
		