<?php 
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION["sess_username"]) && $role!="admin"){
      header('Location: index.php?err=2');
    }
?>


	

<!--?php

include('header.php');
        ?-->


<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            
							
									<div class="user-info closed">
							


						
								
							
	
					<p style="text-align:center;"><img class="img-circle" src="../item_images/Userspics/<?php echo $_SESSION['sess_user_image'];?>" height="100" width="180" /></p>
                                                     <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6> 
                                <small class="info">O&G Leather Mftg Corp</small>
		
		
		
		
                            </div>
							
							<!--div class="user-info closed">
							


						
								
							
							
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="altQQ" class="img-circle profile-img">
                                                     <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6> 
                                <small class="info">O&G Leather Mftg Corp</small>
		
                            </div-->
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <p style="font-size:17px;"><a href="dashboard.php"><o class="fa fa-dashboard"></o> <span>Dashboard</span> </a>
                                     
                                    </li>
									<!-- this a sample-->
										 <li class="has-children">
  
                                      <a href="#" style="font-size:17px;"><o class="glyphicon glyphicon-star">&nbsp;</o> <span>Admin Policy </span> <o class="fa fa-angle-right arrow"></o></a>
										
                                       <ul class="child-nav">
										
									    <li class="dropdown-submenu">																		   
				   <a tab index="-1" href="#" style="font-size:17px;"><i class="glyphicon glyphicon-briefcase"></i> <span>&nbsp;Bussiness Division</span> <o class="fa fa-angle-right arrow"></o--></a>
				   <ul class="dropdown-menu">
                  <li style="color:black" style="font-size:27px;"><a tabindex="-1" href="managegs.php"><!--i class="glyphicon glyphicon-wrench" style="font-size:17px;"--></i><b style="font-size:17px;">GS Department</b></a></li>
         
                  <li class="dropdown-submenu" style="color:black">
                    <a href="managelogistic.php"><!--i class="glyphicon glyphicon-certificate"></i--><b style="font-size:17px;">Logistic Department</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-transfer"></i>Warehouse</a></li>
                    	<li><a href="#"><i class="glyphicon glyphicon-sort"></i>Impex</a></li>
                    </ul>
					</li>
					  <li class="dropdown-submenu" style="color:black">
					    <a href="managefinance.php"><!--i class="glyphicon glyphicon-briefcase"></i--> <b style="font-size:17px;">Finance Department</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-usd"></i>Accounting</a></li>
                    	<li><a href="#"><i class="glyphicon glyphicon-piggy-bank"></i>Purchasing</a></li>
                    </ul>
                  </li>
               <li style="color:black"><a href="adminmanageappolicy.php"><!--o class="glyphicon glyphicon-star"></o--><b style="font-size:17px;">Administrative Policy</b></a></li>
                  <li style="color:black"><a href="managemis.php"><!--i class="glyphicon glyphicon-globe"></i--><b style="font-size:17px;">MIS Department</b></a></li>
				  <li style="color:black"><a href="managehr.php"><!--i class="glyphicon glyphicon-user"></i--><b style="font-size:17px;">HR Department</b></a></li>
				        <li style="color:black"><a href="adminmanageoppolicy.php"><!--o class="glyphicon glyphicon-tower"></o--><b style="font-size:17px;">Office of President</b></a></li>
                </ul>
              </li>
				    <li class="dropdown-submenu">	
				   										 <a href="#" style="font-size:17px;"><i class="glyphicon glyphicon-wrench"></i> <span>&nbsp;Operation Division</span> <o class="fa fa-angle-right arrow"></o></a>
										     <ul class="dropdown-menu">
                  <li style="color:black"><a tabindex="-1" href="manageod.php"><!--i class="glyphicon glyphicon-grain"></i--><b style="font-size:17px;">Style</b></a></li>
                  <li class="dropdown-submenu" style="color:black">
                    <a href="#" style="background-color:brown;"><!--i class="glyphicon glyphicon-queen"></i--><b style="font-size:17px;">Quality Control</b></a>
                    <!--ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-transfer"></i>Warehouse</a></li>
                    	<li><a href="#"><i class="glyphicon glyphicon-sort"></i>Impex</a></li>
                    </ul-->
					</li>
					  <li class="dropdown-submenu" style="color:black">
					    <a href="#" style="background-color:brown;><!--i class="glyphicon glyphicon-scissors"></i--> <b style="font-size:17px;">Pattern</b></a>
                    <!--ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-usd"></i>Accounting</a></li>
                    	<li><a href="#"><i class="glyphicon glyphicon-piggy-bank"></i>Purchasing</a></li>
                    </ul-->
                  </li>
               <li style="color:black"><a href="#" style="background-color:brown;><!--o class="glyphicon glyphicon-yen"></o--><b style="font-size:17px;">Product & Pricing</b></a></li>
                  <li style="color:black"><a href="#" style="background-color:brown;><!--i class="glyphicon glyphicon-hourglass"></i--><b style="font-size:17px;">Planning & Production </b></a></li>
				  <li style="color:black"><a href="#" style="background-color:brown;><!--i class="glyphicon glyphicon-equalizer"></i--><b style="font-size:17px;">Order & Material</b></a></li>
                </ul>
              </li>
				   
									 	
 
				<!--li class="has-children">
												 
				 <a href="#"><i class="glyphicon glyphicon-wrench"></i> <span>&nbsp;Operation Division</span> <o class="fa fa-angle-right arrow"></o></a>
		       
										
										 <ul class="child-nav">	
														<li> <a href="#"><i class="glyphicon glyphicon-wrench"></i> <span>&nbsp;Operation Division</span> <o class="fa fa-angle-right arrow"></o></a></li>
										
										 </ul-->
                                     

<li>
									 </ul>

										
									 
                                    
							 <li><a data-toggle="modal"  title="Notifications" data-target="#orgchart" style="font-size:17px;"><i class="glyphicon glyphicon-th-list" style="color:white;">&nbsp;</i> <span>Organizational Chart </span> <!--o class="fa fa-angle-right arrow"></o--></a></li>
  
									                   </li>
									
									
									
									
									
									     <li><a href="viewmemorandum.php" style="font-size:17px;"><i class="	fa fa-paper-plane-o">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Memorandum </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
										
									
									
									
									
									
												
												 <li class="has-children">
  
                                      <li><a href="JRFPAGE.php" style="font-size:17px;"><i class="glyphicon glyphicon-globe">&nbsp;</i> <span>Job Request Form </span> <!--o class="fa fa-angle-right arrow"></o--></a></li>
										
                  
									 
									 
                                    </li>
									
									
														
       <li><a href="allsharedfiles.php" style="font-size:17px;"><i class="fa fa-users"></i> <span>&nbsp;&nbsp;Department Shared Files</span> <!--i class="fa fa-angle-right arrow"></i--></a></li>    				
									
									
									
									
									
									
									
									
									
									
									
									
									
									
										
												 <li class="has-children">
  
                                      <li><a href="onggallery.php" style="font-size:17px;"><i class="glyphicon glyphicon-picture">&nbsp;</i> <span>O&G Events Gallery </span> <!--o class="fa fa-angle-right arrow"></o--></a></li>
										
                  
									 
									 
                                    </li>
									
									
									   <li><a href="updates2.php" style="font-size:17px;"><i class="glyphicon glyphicon-copy"></i> <span>&nbsp;&nbsp;&nbsp;Stock Level Monitoring</span> <i class="#"></i></a></li>
			   
			   
			   
			   			   <li><a href="#../finance/onggallery.php" style="font-size:17px;"><i class="fa fa-car"></i> <span>&nbsp;&nbsp;&nbsp;Travel Itenerary System</span> <i class="#"></i></a></li>


									
									
							 <li class="has-children">
  
                                      <li><a href="updates.php" style="font-size:17px;"><i class="glyphicon glyphicon-fire">&nbsp;</i> <span>MY Updates </span> <!--o class="fa fa-angle-right arrow"></o--></a></li>
										
                  
									 
									 
                                    </li>	


			
							 <li class="has-children">
  
                                      <li><a href="holidaymemo.php" style="font-size:17px;"><i class="glyphicon glyphicon-list">&nbsp;</i> <span>Holiday Memo</span> <!--o class="fa fa-angle-right arrow"></o--></a></li>
										
                  
									 
									 
                                    </li>					
									






	  								
       <li><a href="managefilefinance.php" style="font-size:17px;"><i class="glyphicon glyphicon-floppy-disk"></i> <span>&nbsp;&nbsp;Department File Manager</span> <i class="#"></i></a></li>
									 
	   
	  								
       <li><a href="Messenger.php" style="font-size:17px;"><i class="glyphicon glyphicon-envelope" ></i> <span>&nbsp;&nbsp;O&G Messenger</span> <i class="#"></i></a></li>
	   


									    <li><a href="managemyport.php" style="font-size:17px;"><i class="glyphicon glyphicon-user" ></i> <span>&nbsp;&nbsp;My PortFolio</span> <i class="#"></i></a></li>

									
									
									
									
									
									
												 <li class="has-children">
  
                                      <a href="#" style="font-size:17px;"><o class="glyphicon glyphicon-cog">&nbsp;</o> <span>Settings </span> <o class="fa fa-angle-right arrow"></o></a>
										
                                        <ul class="child-nav">
										
																													   
				   <a href="../Customers/sampleyakanu.php"><i class="glyphicon glyphicon-briefcase"></i> <span style="font-size:17px;">&nbsp;O&G Policy Downloads</span> <i class="#"></i></a>
						  <!--a href="../Customers/memorandummain.php"><i class="glyphicon glyphicon-duplicate"></i> <span>&nbsp;Memorandum</span> <i class="#"></i></a-->
						  	  <a href="manageuseruser.php"><i class="fa fa-users"></i> <span style="font-size:17px;">User Management</span> <i class="#"></i></a>
							  	  	  <a href="activeuserlogs.php"><i class="glyphicon glyphicon-book"></i> <span style="font-size:17px;">&nbsp;Active User Logs</span> <i class="#"></i></a>
					
										
											  <a href="storage.php"><i class="fa fa-server"></i> <span style="font-size:17px;">&nbsp;Storage Monitoring</span> <i class="#"></i></a>
							
                                      
									  <a href="backup.php"><i class="fa fa-database"></i> <span style="font-size:17px;">&nbsp;Database&nbsp;Backup</span> <i class="#"></i></a>
					
																


									 </ul>
									 
									 
                                    </li>
									
									
									
									
									
									<!-- this a sample 2
									
									
									
										<li class="has-children">
                                       
									
									
									
									
									
									
									
									
									-->
									
									
									
									
									
									
									
									
									

                                    <!--li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li-->
                                    <li class="has-children">
                                        <!--a href="#"><i class="fa fa-file-text"></i> <span>O$G Department</span> <i class="fa fa-angle-right arrow"></i></a-->
                                        <!--ul class="child-nav">
                                            <li><a href="create-class.php"><i class="fa fa-bars"></i> <span>Create Department</span></a></li>
                                            <li><a href="manage-classes.php"><i class="fa fa fa-server"></i> <span>Manage Department</span></a></li>
                                           SELECT * FROM articles ORDER BY time DESC
                                        </ul-->
                                    </li> 
									<li class="has-children">
  
                                       <!--a href="#"><o class="glyphicon glyphicon-cloud">&nbsp;</o> <span>Add MIS Policy </span> <o class="fa fa-angle-right arrow"></o></a-->
										
                                        <ul class="child-nav">
																			   
				   <a data-toggle="modal" data-target="#uploadModalcategorymis"><i class="fa fa-plus-circle"></i> <span>Add New Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplex"><i class="fa fa-plus-circle"></i> <span>Add New MIS Policy</span> <i class="#"></i></a>
					 <li><a href="managecatmis.php"><i class="fa fa-newspaper-o"></i> <span>MIS Category</</span></a></li>
				    <li><a href="managepolicy.php"><i class="fa fa-newspaper-o"></i> <span>MIS Policy</</span></a></li>
	
                                     


									 </ul>
                                    </li>
									 <li class="has-children">
  
                                      <!--a href="#"><o class="glyphicon glyphicon-star">&nbsp;</o> <span>Add Administrative Policy </span> <o class="fa fa-angle-right arrow"></o></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryap"><i class="fa fa-plus-circle"></i> <span>Add New Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexap"><i class="fa fa-plus-circle"></i> <span>Add Administrative Policy</span> <i class="#"></i></a>
					 <li><a href="managecatap.php"><i class="fa fa-newspaper-o"></i> <span>Administrative Category</</span></a></li>
				    <li><a href="managepolicyap.php"><i class="fa fa-newspaper-o"></i> <span>Administrative Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									
									 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-piggy-bank">&nbsp;</i> <span>Add Finance Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryfinance"><i class="fa fa-plus-circle"></i> <span>Add New Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexfinance"><i class="fa fa-plus-circle"></i> <span>Add Finance Policy</span> <i class="#"></i></a>
					 <li><a href="managecatfinance.php"><i class="fa fa-newspaper-o"></i> <span>Finance Category</</span></a></li>
				    <li><a href="managepolicyfinance.php"><i class="fa fa-newspaper-o"></i> <span>Finance Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
										 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-wrench">&nbsp;</i> <span>Add GS Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategorygs"><i class="fa fa-plus-circle"></i> <span>Add New GS Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexgs"><i class="fa fa-plus-circle"></i> <span>Add New GS Policy</span> <i class="#"></i></a>
					 <li><a href="managecatgs.php"><i class="fa fa-newspaper-o"></i> <span>General Service Category</</span></a></li>
				    <li><a href="managepolicygs.php"><i class="fa fa-newspaper-o"></i> <span>General Service Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-list-alt">&nbsp;</i> <span>Add Logistic Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryld"><i class="fa fa-plus-circle"></i> <span>Add Logistic Category</span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexld"><i class="fa fa-plus-circle"></i> <span>Add New Logistic Policy</span> <i class="#"></i></a>
					 <li><a href="managecatlogistic.php"><i class="fa fa-newspaper-o"></i> <span>Logistic Category</</span></a></li>
				    <li><a href="managepolicyld.php"><i class="fa fa-newspaper-o"></i> <span>Logistic Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
										 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-briefcase"></i> &nbsp;<span>Add Office President Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryop"><i class="fa fa-plus-circle"></i> <span>Add New OP Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexop"><i class="fa fa-plus-circle"></i> <span>Add New OP Policy</span> <i class="#"></i></a>
					 <li><a href="managecatop.php"><i class="fa fa-newspaper-o"></i> <span>Office President Category</</span></a></li>
				    <li><a href="managepolicyop.php"><i class="fa fa-newspaper-o"></i> <span>Office President Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									
									         </li>
										 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-transfer"></i> <span>Add Operation Division Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryod"><i class="fa fa-plus-circle"></i> <span>Add New OD Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexod"><i class="fa fa-plus-circle"></i> <span>Add New OD Policy</span> <i class="#"></i></a>
					 <li><a href="managecatod.php"><i class="fa fa-newspaper-o"></i> <span>Operation Div Category</</span></a></li>
				    <li><a href="managepolicyod.php"><i class="fa fa-newspaper-o"></i> <span>Operation Division Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									
<li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-user"></i> &nbsp;<span>Add Human Resources </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryhr"><i class="fa fa-plus-circle"></i> <span>Add New HR Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexhr"><i class="fa fa-plus-circle"></i> <span>Add New HR Policy</span> <i class="#"></i></a>
					 <li><a href="managecathr.php"><i class="fa fa-newspaper-o"></i> <span>HR Category</</span></a></li>
				    <li><a href="managepolicyhr.php"><i class="fa fa-newspaper-o"></i> <span>Human Resources Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>									
   <li class="has-children">
                                        <!--a href="#"><o class="fa fa-users"></o> <span>Users Management</span> <o class="fa fa-angle-right arrow"></o></a-->
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
													<a data-toggle="modal" data-target="#uploadModalusernew"><i class="fa fa-plus-circle"></i> <span>Add New User</span></a>
										
                                            <li><a href="manageuser.php"><i class="fa fa fa-server"></i> <span>Manage Users</span></a></li>
									  <li><a href="../Customers/userdatainfo.php"><i class="fa fa fa-server"></i> <span>View User Profile</span></a></li>
                                           
                                        </ul>
                                    </li>
									   <li class="has-children">

                                        <!--ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                           
                                        </ul-->
                                        <!--li><a href="../Customers/sampleyakanu.php"><!--i class="fa fa-download"></i--> <!--span>Downloads</span--> <!--/a></li-->
                                                 
                                    </li>
									<li class="has-children">
                                        <!--a href="#"><i class="glyphicon glyphicon-duplicate"></i> <span>&nbsp; M E M O R A N D U M</span> <i class="fa fa-angle-right arrow"></i></a-->
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
                                            
											<a data-toggle="modal" data-target="#uploadModalsamplexmemo"><i class="fa fa-plus-circle"></i> <span>Add Memorandum</span></a>
                                           <li><a href="managememogs.php"><i class="fa fa fa-server"></i> <span>Manage Memorandum</span></a></li>
										                                          <li><a href="../Customers/memorandummain.php"><i class="fa fa fa-search"></i> <span>View Memorandum</span></a></li>
                                        </ul>
                                    </li>
									
									</p>
									

<li>
                                        <!--a href="ogmemorandum.php"><i class="fa fa-info-circle"></i> <span>O$G Memorandum</span> <i class=""></i></a>

</li>
                                       
                                        <li><a href="change-password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li-->
                                                 
                                    </li>
									
									  <!--li><a href="dito/librarian/add_books.php"><i class="fa fa fa-server"></i> <span> Add MIS</span></a></li-->
                                                 
                                    </li>
									          </li>
									
									  <!--li>
									  	<a data-toggle="modal" data-target="#uploadModalcatmis"c><i class="fa fa-server"></i> <span>Add New User
</span></a>
                                                 
                                    </li-->
									<!--li>
									  	<a href="managecatmis.php"><i class="fa fa-server"></i> <span>Manage Category MIS</span></a>
                                             
							
                                    </li>
									<!--li>
									 					<a data-toggle="modal" data-target="#uploadModalsamplex"><i class="fa fa-plus-circle"></i> <span>Add New MIS Policy</span></a>
                                             
							
                                    </li>
									
										<li>
									 					<a data-toggle="modal" data-target="#uploadModalcategorymis"><i class="fa fa-plus-circle"></i> <span>Add Category TItle MIS</span></a>
                                             
							
                                    </li-->
									
									
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
					
					
					
					

					
		
					
					
					
					
					
					
					
					
					
					
					
					
											
					<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalusernew" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New User</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addUser.php">
         
					
						
                            <p>Firstname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Firstname" name="fname" type="text" autofocus required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>LastName:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
								<input class="form-control"placeholder="LastName" name="lastname" type="text" required>



</select>
							 
							</div>
							<!--break this-->
									<p>Role:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" name="role" type="text" required>
  <option value="" placeholder="Choose a Role">Choose Category Role</option>
 
  <option value="admin">Admin</option>
     <option value="user">User</option>
  <option value="manager">administrative Manager</option>
    <option value="opmanager">Office President Manager</option>
  <option value="logisticmanager">Logistic Manager</option>
   <option value="financemanager">Finance Manager</option>
       <option value="operationmanager">Operation Division Manager</option>
  <option value="generalservices">GS manager</option>
   <option value="hrmanager">HR manager</option>
</select>
							 
							</div>
							<!-- break thius-->
							
									<p>Department</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department" name="department" type="text" required>
                           
							 
							</div>
							<!-- break thius aaaaaa-->
							
									<!-- break thius-->
							
									<p>Username:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Username" name="username" type="text" required>
                           
							 
							</div>
							<!-- break thius   bbbbbbbbbbbb-->
									<!-- break thius-->
							
									<p>Password:</p>
                            <div class="form-group">
							
                                <input type="password" class="form-control" placeholder="Password" name="password" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="user_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>	
					
					
					
				


					
											
	
		
		
		
		
		<!--- start new line here-->
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplex" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New MIS Policy</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcatmis.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input id="priceinput" class="form-control" value="MIS" name="department" type="text"required>
 
							 
							</div>
							
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM miscategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
				
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategorymis" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h2 style="color:white" class="modal-title" id="myModalLabel">Add New MIS Category Title</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorymis.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:black";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
					
									
					
		
		<!--- start new line here-->
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexap" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Administrative Policy</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryAP.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" value="Administrative Policy" name="department" type="text" required>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM apcategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryap" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add Administrative Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryapnew.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
						
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexfinance" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New Finance Department Policy</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyfinance.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
<input class="form-control" value="Finance Department" name="department" type="text" required>
 
 

							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM financecategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryfinance" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New Finance Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryfinance.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
					
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategorygs" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New GS Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorygs.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
					
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexgs" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h2 style="color:white" class="modal-title" id="myModalLabel">Add New General Services Policy</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicygs.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" name="department" value="General Services" type="text" required>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM gscategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
									
					
									
					
					
	
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexld" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New Logistic Department Policy</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicylogistic.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
<input class="form-control" value="Logistic Department" name="department" type="text" required>
 
 

							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM logisticcategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryld" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New Logistic Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorylogistic.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
					
									
					
					
								<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexop" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <center> <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Office of President Policy</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryOp.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                           <input id="priceinput" class="form-control" value="Office of President" name="department" type="text" required>


							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM opcategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		

			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryop" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New OP Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryrealop.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
		   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
																			
				
																								

		
					
									
					
					
					
																								

					
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexod" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h2 style="color:white" class="modal-title" id="myModalLabel">Add New Operation Division Policy</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyod.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" value="Operation Division" name="department" type="text"required>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM operationdivision");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
							
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategorymis" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add Category title MIS</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorymis.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:black";><i><b>/*Note: You Must Add Category Before Adding a New  Policy</i></b></p>
							</div>
							
							
							
							
			
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
				
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryod" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add Operation Division Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryOd.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
						
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexhr" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New HR Department Policy</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyhr.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
<input class="form-control" placeholder="Department" value="Human Resources" name="department" type="text" required>
 
 

							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM hrcategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryhr" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New HR Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryhr.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
			
		   <div class="modal fade" id="uploadModalsamplexmemo" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New M E M O R A N D U M</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addmemogs.php">
                   <fieldset>
					
						
                            <p>Subject:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							<p>To:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="" name="revisionno" type="number" required>
                           
							 
							</div>
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>From:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" name="department" value="Management Information System" type="text" required>
 
</select>
							 
							</div>
							<!--break this-->
							
							<!-- break thius-->
							
									<p>Department Code:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="" name="dh" type="text" required>
                           
							 
							</div>
	

							              <div class="form-group">
						
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
						
		
		
					
									
		
					
		
		
					
									
					
					
					
																								

		
			
		
										<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Updatemessage" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
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
   <center><img src="..\userportal\item_images\<?php echo $_SESSION['sess_user_image'];?>" width="150" height="140" ></center><center><emp class="btn btn-dangers" style="font-size:24px;color:whitesmoke;"> <center> Message Notifications</center> </emp></center>
	
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
	


  
  
  
  
  <table>
  <thead>
                <tr>
              <th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Sender&nbsp;Name</th>
                <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Department</th>
				    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Content</th>
					    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Date&nbsp;Sended</th>
						
					
			<!--th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">No of Memorandum</th-->
				
				
				
				<!--h style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Posted</th>
				
					<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">UnPosted</th-->
					
					
					
					
				
				<!--th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Username</th>
				  	<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Password</th>
                <th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Actions</th-->
                 
                </tr>
				
              </thead>
             <!--table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example"-->
                             
                <!--p><a href="add_new_equipment.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Equipment</a></p>
               
                                <thead>
                                    <tr>
                                    <th>Item Type</th>
                                    <th>OnHand Quantity</th>
                                    <th>OnHand Value</th>
                                     <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody-->
                 
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
		    $myid = $_SESSION['sess_user_id'];
               $query = mysql_query("Select * from message where reciever_id='$myid' ") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $Subject_identity=$row['Subject_identity'];
            
            ?>
			
			
			
      <tr>
	     <td class="zoom" style="text-align:center;">
		<?php echo $row['sender_name'];?>
				 </td>
	  
	 
	     <td class="zoom" style="text-align:center;">
		<?php echo $row['department'];?>
				 </td>
				 
				      <td class="zoom" style="text-align:center;">
		<?php echo $row['content'];?> <?php echo $row['Typeothers'];?>
				 </td>
				 
				 		      <td class="zoom" style="text-align:center;">
		<?php echo $row['date_sended'];?>
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
		   
		   
      </tr>
      <?php } ?>
                                </tbody>
                            </table>
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  

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
			
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Babush</button>
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>
		
					
																								

									<!-- Mediul Modal kiki-->

		
										<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Updateofmis" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 style="color:white;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Admin Policy & Procedures Update Notifications</center></h4>
              </div>
            
         <div class="modal-body">


<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset style="color:#blue;">
					
					<input type="hidden" id="username" name="id" value="<?php
                        $id = mysql_query("select MAX(item_id) as max_item_id from tb_equipment");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_item_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>


	
	
							
							
							  <div class="form-group">



  
  
  
  
  <table class="table table striped">
  <thead>
                <tr>
				           <th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">	<emp class="glyphicon glyphicon-signal"></emp></th>
              <th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Newly&nbsp;Updates</th>
                <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Error/Resulutions</th>
				   
					    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Date&nbsp;Updated</th>
						
					

                </tr>
					<!--''where reciever_id='$myid' -->
              </thead>
      
 
          
           <?php
		   include('../connect.php');
		    $myid = $_SESSION['sess_user_id'];
		
               $query = mysql_query("Select * from updates") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $Subject_identity=$row['Subject_identity'];
            
            ?>
			
			
			
      <tr>
	  
	     <td class="zoom" style="text-align:center;">
	<emp class="glyphicon glyphicon-bell">	<?php echo $row['id'];?></emp>
				 </td>
	  
	  
	     <td class="zoom" style="text-align:center;">
		<?php echo $row['newlyupdate'];?>
				 </td>
	  
	 
	     <td class="zoom" style="text-align:center;">
		<?php echo $row['error_resulutions'];?>
				 </td>
				 
		
				 
				 		      <td class="zoom" style="text-align:center;">
		<?php echo $row['date_updated'];?>
				 </td>
				 
	
				 
	  
	  
 
      
		  

	

		  
		  
		  
		  
		  

		   
		   
      </tr>
      <?php } ?>
                                </tbody>
                            </table>
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  

  
  

   			  

  
  
  
  
  

  
  
  
  


  

   
   
   



  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
  
  
  
				

  
  

  
 
				   
				
                  
            
              </div>
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
			
				 <button type="button" class="btn btn-success btn-md" data-dismiss="modal">Noted</button>
				
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

  <div class="form-group" style="background-image: url("..\userportal\item_images\amazing.gif");">
   <center><img src="..\userportal\item_images\Userspics\<?php echo $_SESSION['sess_user_image'];?>" width="140" height="145"></center><center><emp class="btn btn-dangers" style="font-size:24px;color:whitesmoke; padding-top:5px;width:210px;height:34px;text-align:center;"> <?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?>  </emp></center>
	
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
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_fname'];?>" id="inputPassword3" readonly/>
    </div>
  </div>

  
  
  
  
  							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Lastname</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_lastname'];?>" id="inputPassword3" readonly/>
    </div>
  </div>
  
  
  
  
  
  
  
  
    							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Department</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_department'];?>" id="inputPassword3" readonly/>
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
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_username'];?>" id="inputPassword3" readonly/>
    </div>
  </div>
  
  
  
  
       							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Password</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="******<?php echo $_SESSION['sess_password'];?>" id="inputPassword3" readonly/>
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
		
		
		
			     	<a href="#" id="scroll" style="display: none;"><span></span></a>