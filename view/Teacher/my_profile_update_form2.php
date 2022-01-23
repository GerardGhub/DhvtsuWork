<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../../index.php');
    exit;
}
?>
<form action="../../index.php" method="POST" enctype="multipart/form-data" >
	<div class="panel-body"><!--panel-body -->
    	<div class="row">
            <div class="col-md-4" id="divPhoto"> 
                <img id="profile_pic1" alt="User Pic" src="" class="img-circle img-responsive">
                <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:7px;"  /> 
            </div>
            <div class=" col-md-8"> 
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr id="trFullName">
                            <td class="col-md-4" id="tdFullName1">Full Name</td>
                            <td id="tdFullName2" ><input type="text" class="form-control" value="" name="full_name" id="full_name1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdIName1">Name With Initials</td>
                            <td id="tdIName2"><input type="text" class="form-control" value="" name="i_name" id="i_name1" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td id="tdAddress1">Address</td>
                            <td id="tdAddress2"><input type="text" class="form-control" value="" name="address" id="address1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdGender1">Gender</td>
                            <td id="tdGender2">
                                <select name="gender" class="form-control" id="gender2">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td id="tdEmail1">Email</td>
                            <td id="tdEmail2"><input type="email" class="form-control" value="" name="email" id="email1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdPhone1">Phone Number</td>
                            <td id="tdPhone2"><input type="text" class="form-control" value="" name="phone" maxlength="11" id="phone1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td id="user_name1"> </td>
                        </tr>
                        <tr>
                            <td id="tdPassword1">Password</td>
                            <td id="tdPassword2"><input type="password" minlength="8" class="form-control" value="" name="password" id="password1" autocomplete="off"></td>
                     	   <span id='t_message'></span>
                        </tr>
                        <tr>
                            <td id="tdConfirmPassword1">Confirm Password</td>
                            <td id="tdConfirmPassword2"><input type="password" minlength="8" class="form-control" value="" name="confirm_password_loop" id="confirm_password_loop" autocomplete="off"></td>
                        </tr>
                    </tbody>
                </table>
            </div>  
		</div>
      
	</div><!--panel-body -->  
    <div class="panel-footer text-right">
        <input type="hidden" id="id1" name="id" value="">
        <input type="hidden" name="do" value="update_teacher_profile">
        <button type="submit" class="btn btn-primary" id="btnUpdate">Update</button>
        <span class="pull-right"></span>
    </div>   
</form>                                      

<!-- <script>
function myFunction() {
  alert("sadsdsds");
}


$('#password1, #confirm_password_loop').on('keyup', function () {
    if ($('#password1').val() == $('#confirm_password_loop').val()) {
        $('#t_message').html('Matching').css('color', 'green');
    } else 
        $('#t_message').html('Not Matching').css('color', 'red');
});

    </script> -->