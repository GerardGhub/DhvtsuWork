<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
	 $department = $_SESSION['department'];
    if(!isset($_SESSION['department']) && $role!="admin"){
      header('Location: ../index.php?err=2');
    }
?>

<?php
include('../includes/config.php');

error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <title>Admin Policy Portal</title>
		
        <!--link rel="stylesheet" href="../css/bootstrap.min.css" media="screen"-->
		        <link rel="stylesheet" href="bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="../css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="../css/main.css" media="screen" >
		        <link rel="stylesheet" href="../animate.css" media="screen" >
		     <link rel="stylesheet" href="leftbar.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>

        <script src="../js/modernizr/modernizr.min.js"></script>
<!-- multidropdown ko-->

<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		
		<!-- okay tu header-->
		

		
		
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		
		
		
/* Popup container - can be anything you want */
.popup {
    position: top;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup      background-color: #555;*/
.popup .popuptext {
    visibility: hidden;
    width: 260px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 60px;
    padding: 9px 10px;
    position: absolute;
    z-index: 1;
    bottom: 115%;
    left: 50%;
    margin-left: -1000px;
}
tr:hover{
	background-color:#ffff99;
}


/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}




* {
    box-sizing: border-box;
}

.zoom {
    padding: 0px;

    transition: transform .2s;

    margin: 0 auto;
}

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
}








ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {

}

li a {

}

li:hover:not(.active) {
  background-color: grey;
}

.active {
  background-color: #4CAF50;
}


td:null {
    background-color: black;
}

td:before {
    content: " ";
}
html, body {margin: 0; height: 100%; overflow: hidden}
</style>
		
		
		
		</head>
    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <?php include('../includes/JRFSTATUSLEFTuser.php');?>  
						<?php include('../includes/conface.php');?>
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <!--div class="col-md-6">
                     
       <h4 class="btn btn-success" style="font-size:17px;"> <b>&nbsp;Memorandum Subject's</b>

	   
	   
	   
	
                        </div-->
						
								
			<div class="alert alert-info" style="color:white;background-color:#008CBA;">
         <center><h4> <span class="fa fa-users"></span> <b>Job Request Status</b></h4></center>
       
	   </div>
	   <ul>
  <li style="float: left; display: block;  color: white;  text-align: center;  padding: 14px 16px;  text-decoration: none;"><a class="k" href="JRFREQUEST.PHP" style="color:white;font-size:17px;border-left-color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Current Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
 
 <li class="actaive"style="float: left; display: block;  color: white;  text-align: center;  padding: 14px 16px;  text-decoration: none;"><a href="JRFREQUEST2.php" style="color:white;font-size:17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job Request Done Completed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
 
 
 
  <li style="float: left; display: block;  color: white;  text-align: center;  padding: 14px 16px;  text-decoration: none;"><a href="JRFREQUEST3.php" style="color:white;font-size:17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job Request Pending&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  
  
  <li class="active" style="float: left;" ><a href="#JRFREQUEST4.php" style="color:white;font-size:17px; display: block;  color: white;  text-align: center;  padding: 14px 16px;  text-decoration: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job Request Disapproved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
</ul>
				
					
					
                        <!-- /.container-fluid -->

                            <div class="container-fluid">








						
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                     

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											

<div class="alert alert-primary" role="alert">
 

    <div class="#">
                                         
                                        </div>
                                
                                        

                                                 
                                                 





















												 
												 
												 
												 
												 
												 
												 
												 
		 <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
	
		
                        
                 
						  
					
						  
					
						  
						  <div class="table-responsive">
						  
						  
						  
            <table class="table table-striped" style="font-size:14px;" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
              <th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">JRF#</th>
                <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Date</th>
				    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Name</th>
					    <!--th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Department</th>
						
						  <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Type</th-->
						    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Job&nbsp;Request</th>
					
								    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Purpose</th>
											    <!--th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Department&nbsp;Head</th>
									    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">MIS&nbsp;OIC</th-->
															    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Disapprove&nbsp;Reason</th>
					
				    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Disapprove&nbsp;By</th>		
					
						
			 <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Date&nbsp;of&nbsp;Disapprove</th>		
					
					
					

					
					
					
					
				  	<th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Action</th>

                </tr>
              </thead>

                 
                               <?php

              function formatMoney($number, $fractional=false) {
                if ($fractional) {
                  $number = sprintf('%.2f', $number);
                }
                while (true) {
                  $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                  if ($replaced != $number) {
                    $number = $replaced;
                  } else {
                    break;
                  }
                }
                return $number;
              } 
        ?>
          
           <?php
		   include('../connect.php');
		   $department = $_SESSION['department'];
               $query = mysql_query("Select * from Jobrequestfinalstatus where department='$department'") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $Subject_identity=$row['Subject_identity'];
            
            ?>
			
			
			
      <tr>
	     <td class="zoom" style="text-align:center;font-size:12px;">
		<?php echo $row['JRFseries'];?>
				 </td>
	  
	 
	     <td class="zoom" style="text-align:center; width:6%;font-size:12px;">
		<?php echo $row['Date_now'];?>
				 </td>
				 
				      <td class="zoom" style="text-align:center;font-size:12px;">
		<?php echo $row['Name'];?>
				 </td>
				 
				 		      <!--td class="zoom" style="text-align:center;">
		<?php echo $row['Department'];?>
				 </td>
				 			 		      <td class="zoom" style="text-align:center;">
		<?php echo $row['Type'];?>&nbsp;<?php echo $row['Typeothers'];?>
				 </td-->
				 
				 		      <td class="zoom" style="text-align:center;font-size:12px;">
		<?php echo $row['JobReq'];?>
				 </td>
				 		      <td class="zoom" style="text-align:center;font-size:12px;">
		<?php echo $row['Purpose'];?>
				 </td>
				 			 		      <!--td class="zoom" style="text-align:center;">
		<?php echo $row['DH'];?>
				 </td>
				 			 		      <td class="zoom" style="text-align:center;">
		<?php echo $row['MISOIC'];?>
				 </td-->

	  		 			 		      <td class="zoom" style="text-align:center; font-size:12px;">
		<?php echo $row['disapprovereasons'];?>
				 </td>
				   	 			 		      <td class="zoom" style="text-align:center;font-size:12px;">
		<?php echo $row['disapprovedby'];?>
				 </td>
	  		 			 		      <td class="zoom" style="text-align:center;font-size:12px;">
		<?php echo $row['dateofdisapproved'];?>
				 </td>
	  
              <!--td><?php
			     include('connect.php');
            $cat=$row['Subject_identity'];
            $query7 = mysql_query("select * from Subject where Subject_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['Subject_name'];
            ?>
			</td-->
			
			<!--td>
			<?php
			     include('connect.php');
            $cat=$row['Subject_identity'];
            $query7 = mysql_query("select * from Subject where Subject_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['Date_added'];
            ?>
		
			</td-->
			
          <!--td style="text-align:center;"><?php
		     include('connect.php');
          $Subject_identity=$row['Subject_identity'];
                    $count_query = mysql_query("select * from tomemorandum where Subject_identity='$Subject_identity'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
					
					
					
                    <?php echo $count; ?></td-->
					
					
				<!-- One p[iece Chicken -->	
					
          <!--td style="text-align:center;">  
		  <?php
		     include('connect.php');
          $item_category=$row['item_category'];
          $result5 = mysql_query("SELECT sum(price) FROM tb_equipment where item_category='$item_category'");
          while($row5 = mysql_fetch_array($result5))
            { 
            $tprice=$row5['sum(price)']; 
          echo formatMoney($tprice,true);
            }
          ?>
          </td-->
		  
		     <!--td style="text-align:center;"><?php
		     include('connect.php');
          $Subject_identity=$row['Subject_identity'];
                    $count_query = mysql_query("select * from tomemorandum where Status='Posted' ORDER BY Subject_identity='2'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
					
					
		
					
                    <?php echo $count; ?></td-->
		  
		  		<!--	
				
				select * from tomemorandum where Subject_identity='$Subject_identity' ORDER BY status='Posted'
				
				
				select * from tomemorandum where Status='Unposted' ORDER BY Subject_identity='2'    -->
		  
		  
		  
		  	     <!--td style="text-align:center;"><?php
		     include('connect.php');
          $Subject_identity=$row['Subject_identity'];
                    $count_query = mysql_query("select * from tomemorandum where Subject_identity='1' ORDER BY status='Unposted'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
					
					
					
                    <?php echo $count; ?></td-->
		  
		  
		  
		  
		  
		  
	
		  <!-- Twoo Piece chiecken -->
		  
		  
		  
		  
		  
		  
		  
		  
        <!--td width="140" style="text-align:center;">
                <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="memolist.php?id=<?php echo $row['Subject_identity'];?>" class="btn btn-info">View <?php echo $row7[Subject_name];?>&nbsp;Memorandum<i class="icon-list icon-large"></i></a>
           </td-->
		   
		       <td style="width:1%;">
			  
			  
			  

     


		 <!--andeng a rel="tooltip" class="btn btn-info" href="editjrf.php?JRFno=<?php echo $row['JRFno']; ?>" title="Click for Edit" onclick="return confirm('Edit This Selected Job Request Form?')"><span class="glyphicon glyphicon-edit" style="font-size:17px; color:white;"></span></a--> 

 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
  <!--a  rel="tooltip"  class="btn btn-success" title="View" id="v<?php echo $id; ?>"  href="view_equipment.php?id=<?php echo $item_id;?>" class="btn btn-light"><span class="glyphicon glyphicon-search" style="font-size:17px;color:white"></span></i></a-->
  
  
  
<!-- href="view_equipment.php?id=<?php echo $item_id;?>" -->



		 <!--Andeng   a rel="tooltip" class="btn btn-primary" href="SubmitJRF.php?JRFno=<?php echo $row['JRFno']; ?>" title="Job Request Proceed?" onclick="return confirm('Submit This Selected Job Request Form into MIS?')"><span class="glyphicon glyphicon-check" style="font-size:17px; color:white;"></span></a--> 

  
  <!--a  rel="tooltip"  class="btn btn-primary" title="Job Request Proceed?" id="v<?php echo $id; ?>"  href="fixedasset_reportsticker.php?id<?php echo $item_category;?>" class="btn btn-light"><span class="glyphicon glyphicon-check" style="font-size:17px; color:white"></span></i></a-->
  
  
  
  			  <!-- Comment muna this delete section -->
			  
           <a rel="tooltip" class="btn btn-primary" title="Please Fill out the Disapprove Reason" id="<?php echo $id; ?>" onclick="return confirm('Reason for Disapproving Job Request?')" href="editreasondisapprove.php?JRFseries=<?php echo $row['JRFseries']; ?>" data-toggle="modal"    class="btn btn-light"><span class="glyphicon glyphicon-edit" style="font-size:17px; color:white"></span><i class="icon-tr
  ash icon-large" readonly></i></a>
  
  
  
  
  
  
  
  
  
         </td>
      </tr>
      <?php } ?>
                                </tbody>
                            </table>

		
    <!-- /#wrapper -->										 
												 
												 
												 
												 
												 














      </div>
	  
	 <div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       &copy 2019 IT SPECIALIST| All Rights Reserved |  Design by : MIS Gerard

						</p>
                        
                    </div>
	  
	  
	  
	  
	  
	  		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  
	  
	  
	  
	  
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="../js/prism/prism.js"></script>
        <script src="../js/DataTables/datatables.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
		 <script>
   
    $(document).ready(function() {
        $('#logical').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script-->
		
    </body>
</html>


