<?php 
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION["sess_username"]) && $role!="admin"){
      header('Location: index.php?err=2');
    }
?>




<?php


include('config.php');


        ?>

	



<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            <div class="user-info closed">
							


						
							
							
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="altQQ" class="img-circle profile-img">
                               <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6> 
                                <small class="info">O&G Leather Mftg Corp</small>
								
								

                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li style="font-size:17px;">
                                        <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                                     
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                    <li class="has-children">
                                       
                                    </li>
									
									    <li><a href="managegs.php"><i class="glyphicon glyphicon-stats"></i> <span style="font-size:17px;">&nbsp;&nbsp;GS Monitoring</</span></a></li>
									
											 <li class="has-children" style="font-size:17px;">
                                        <a href="#"><i class="glyphicon glyphicon-plus"></i> <span>&nbsp;&nbsp;&nbsp;Adding New Data</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
         
		 
		   <a data-toggle="modal" data-target="#uploadModalcategorymissection"><i class="fa fa-star"></i> <span style="font-size:17px;">New Dep_Section </span> <i class="#"></i></a>
                                             
									
										   
										   
										   <a data-toggle="modal" data-target="#uploadModalcategorymis"><i class="fa fa-plus-circle"></i> <span>Add New Subject</span> <i class="#"></i></a>
										      <a data-toggle="modal" data-target="#uploadModalsamplex"><i class="fa fa-plus-circle"></i> <span>Add New GS Policy</span> <i class="#"></i></a>
											  
											  
											  	  
										   
                                        </ul>
                                         </li>
									
									
									

                                   
                                        <!--ul class="child-nav">
										    <li><a href="adminmanageappolicy.php"><i class="fa fa-newspaper-o"></i> <span>Administrative Policy</</span></a></li>
										    <li><a href="adminmanagemispolicy.php"><i class="fa fa-newspaper-o"></i> <span>MIS Department</</span></a></li>
												    <li><a href="adminmanageoppolicy.php"><i class="fa fa-newspaper-o"></i> <span>Office of President</</span></a></li>
							                        <li><a href="managelogistic.php"><i class="fa fa-newspaper-o"></i> <span>Logistic Department</</span></a></li>
													                      <li><a href="managefinance.php"><i class="fa fa-newspaper-o"></i> <span>Finance Department</</span></a></li>
																		                        <li><a href="manageod.php"><i class="fa fa-newspaper-o"></i> <span>Operation Division</</span></a></li>
																														                        <li><a href="managegs.php"><i class="fa fa-newspaper-o"></i> <span>General Services</</span></a></li>
	 <li><a href="managehr.php"><i class="fa fa-newspaper-o"></i> <span>HR Department</</span></a></li>
                                     
 <a href="adminpolicymanage.php"><i class="fa fa-newspaper-o"></i> <span>Manage O&G Policy Count</ </span></a></li>

									 </ul>
                                    </li-->
   <li class="has-children">
                                     
                                       

     <li>

</li>                                      
									
                                        <li>
										
                                                 
                                    </li>
									
									  <!--li><a href="dito/librarian/add_books.php"><i class="fa fa fa-server"></i> <span> Add MIS</span></a></li-->
                                                 
                                    </li>
									          </li>
								<li class="has-children" style="font-size:17px;">
  
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Manage O&G Policy </span> <i class="fa fa-angle-right arrow"></i></a>
										
                                        <ul class="child-nav">
					  <li> <a href="managecatgs.php"><i class="fa fa-file-text"></i> <span>Manage Subject</span> <i class="#"></i></a></li>
<!--li><a href="managepolicygs.php"><i class="fa fa-file-text"></i> <span> Manage Policy</span></a></li-->


<li><a href="viewgspolicy.php"><i class="fa fa-star"></i> <span> GS Policy Monitoring</span></a></li>
										                                       
<li><a href="managesectiongs.php"><i class="fa fa-star"></i> <span> Manage Section GS</span></a></li>


																			   <li><a href="../Customers/sg3.php"><i class="fa fa fa-search"></i> <span>GS Policy</span></a></li>

									 </ul>
                                    </li>
									
									 <li class="has-children">
                                        <!--a href="#"><i class="fa fa-users"></i> <span>O&G Users</span> <i class="fa fa-angle-right arrow"></i></a-->
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
                                            
											<a data-toggle="modal" data-target="#uploadModalusernew"><i class="fa fa-plus-circle"></i> <span>Add New O&G User</span></a>
                                           <li><a href="manageusergs.php"><i class="fa fa fa-server"></i> <span>Manage User Records</span></a></li>
                                        </ul>
                                    </li>
										 <li class="has-children">
                                        <!--a href="#"><i class="fa fa-users"></i> <span>M E M O R A N D U M</span> <i class="fa fa-angle-right arrow"></i></a-->
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
                                            
											<a data-toggle="modal" data-target="#uploadModalsamplexmemo"><i class="fa fa-plus-circle"></i> <span>Add Memorandum</span></a>
                                           <li><a href="managememogs.php"><i class="fa fa fa-server"></i> <span>Manage Memorandum</span></a></li>
										                                          <li><a href="../Customers/memorandumsg.php"><i class="fa fa fa-search"></i> <span>View Memorandum</span></a></li>
                                        </ul>
                                    </li>
									
										   <li class="has-children">

                                        <!--ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                           
                                        </ul-->
                                        <!--li><a href="../Customers/downloadgeneralservicesyo.php"><i class="fa fa-download"></i> <span>Downloads</span> </a></li-->
                                                 
                                    </li>
									
									
									<li class="has-children">

                                      
                                        <!--ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                           
                                        </ul-->
                                        <li><!--a href="#"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a--></li>
										
                                                 
                                    </li>
									  <!--li>
									  	<a data-toggle="modal" data-target="#uploadModalcatmis"c><i class="fa fa-server"></i> <span>Add New User
</span></a>
                                                 
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
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addUsergs.php">
         
					
						
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
 
  <option value="user">user</option>
</select>
							 
							</div>
							<!-- break thius-->
							
									<p>Department</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" value="General Services" name="department" type="text" required>
                           
							 
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
					
					
				


					
											
					<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcatmis" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New User</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addUser.php">
                   <fieldset>
					
						
                            <p>Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Title" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
								<input class="form-control" placeholder="Date" name="item_price" type="text" required>



</select>
							 
							</div>
							<!--break this-->
							<p>Revision No:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision No" name="stud_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department OIC:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department OIC" name="lrn_no" type="text" required>
                           
							 
							</div>
							<!-- break thius aaaaaa-->
							
									<!-- break thius-->
							
									<p>Username:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Username" name="Username" type="text" required>
                           
							 
							</div>
							<!-- break thius   bbbbbbbbbbbb-->
									<!-- break thius-->
							
									<p>Password:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="UserPassword" name="userpassword" type="text" required>
                           
							 
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
		
		
		
		
		<!--- start new line here-->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategorymis" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New GS Subject Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorygs.php">
                   <fieldset>
					
						
                            <p>Subject Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Subject Title" name="classname" type="text" required>
								
								
								
								
								
																				              <div class="form-group">
							
							<p>Choose Department Section</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control"  name="dep_sec" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM gsdepfinal");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>			
								
								
								
								
								
								
								
                           
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
        <div class="modal fade" id="uploadModalsamplex" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <center> <h2 style="color:white" class="modal-title" id="myModalLabel">Add New General Services Policy</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicygs.php">
                   <fieldset>
					
						
                            <p style="display:none;">Subject:</p>
                            <div class="form-group" style="display:none;">
							
                                <input class="form-control" placeholder="Subject" value="gerarddo" name="policy_title" type="text">
                           
							 
							</div>
							
							   <div class="form-group">
							
							<p>Choose the Subject of Policy</p>
                        
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM gscategory order by timestamp DESC ");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input id="priceinput" class="form-control" value="GS Department" name="department" readonly="readonly" type="text"required>
 
							 
							</div>
							
							
									<p style="display:none;">Image Hide:</p>
                            <div class="form-group" style="display:none;">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input id="priceinput" class="form-control" value="<?php echo $_SESSION['sess_user_image'];?>" name="uploadbyimg" readonly="readonly" type="text">
 
							 
							</div>
							
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							
							
								<p>Issue Date:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Issue Date" name="issuedate" type="date" required>
                           
							 
							</div>
							
								<p>Effective Date:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Effective Date" name="effectivedate" type="date">
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Added By:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" readonly="readonly" value="<?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?>" name="dh" type="text" required>
                           
							 
							</div>
	
		
							           
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
					
                                <input class="form-control"  type="file" name="file_img[]" accept="image/*" multiple required/>
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="btn_upload">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
						



			



















							
					
			<!-- Mediul Modal -->
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
							
                                <input id="priceinput" class="form-control" placeholder="" name="revisionno" type="text" required>
                           
							 
							</div>
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>From:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" name="department" value="General Services" type="text" required>
 
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
										
					
																								
		<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexmemox" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New General Services Policy</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addmemogs.php">
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
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="text" required>
                           
							 
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
        <div class="modal fade" id="uploadModalcategorymissection" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel" style="text-align:center;"><center>Add New Department Sections</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
	 <form enctype="multipart/form-data" method="post" action="adddepartmentsectiongs.php">
                   <fieldset>
					
						
                            <!--p>Department Sections</p-->
                            <div class="form-group">
							

							
                                <input class="form-control" placeholder="Department Sections" name="classname" type="text" required>
								
								
								
								
								
								
								
								
										              <!--div class="form-group">
							
							<p>Choose Department Section</p-->
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <!--select  class="form-control"  name="dep_sec" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM gsdepfinal");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div-->
							
								
								
								
								
                           
							 <!--p style="color:pink; text-align:center;"><i><b>/*Note: You Must Add Category Before Adding a New  Policy</i></b></p-->
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
							
					
		
		