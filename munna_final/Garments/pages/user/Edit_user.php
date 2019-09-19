<?php

   $user_id=$_POST["txtId"]; 
   
   $rs_row=$db->query("select id,username,password,role_id from user where id='$user_id'");
   list($id,$username,$password,$role_id)=$rs_row->fetch_row();
 
 if(isset($_POST["btnSubmit"])){
	$user_id=$_POST["txtId"];
	 $role_id=$_POST["cmbRole"];
	 $username=$_POST["txtUsername"];
	 
	 $password=$_POST["pwdPassword"];
	 $retype_pass=$_POST["pwdRetyePass"];
	 
	 
	 if($password==$retype_pass){
		 
		  $db->query("update user set username='$username',password='$password',role_id='$role_id' where id='$user_id'");
		  
     
	      echo "succssfully created";
	 
	 }else{
		 
		 echo "password did not match.";
     }
	  
	 
	 
 }

  

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create User</h3>
            </div>
<!-- form start -->
            <form role="form" action="#" method="post">
             <div class="box-body">
			 
              <div class="form-group">
                  <label for="txtId">ID</label>
                  <input type="text" readonly value="<?php echo $user_id;?>" class="form-control" id="txtId" name="txtId">
                </div>
				
				<div class="form-group">
                  <label for="cmbRole">Role</label>
                  <select class="form-control" id="cmbRole" name="cmbRole">
                    <?php
                     $rs_role=$db->query("select id,name from role");
					 while(list($id,$name)=$rs_role->fetch_row()){
						
						if($id==$role_id){ 
						   echo "<option value='$id' selected='selected'>$name</option>";						 
						}else{
							echo "<option value='$id'>$name</option>";	
						}
					  }
					
					?>
                  </select>
                </div>
				
               
               
                <div class="form-group">
                  <label for="txtUsername">Username</label>
                  <input type="text" value="<?php echo $username ;  ?>" class="form-control" id="txtUsername" name="txtUsername" placeholder="Enter username">
                </div>
                
                <div class="form-group">
                  <label for="pwdPassword">Password</label>
                  <input type="password" value="<?php echo $password; ?>" class="form-control" id="pwdPassword" name="pwdPassword" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="pwdRetyePass">Retype Password</label>
                  <input type="password" value="<?php echo $password; ?>" class="form-control" id="pwdRetyePass" name="pwdRetyePass" placeholder="Password">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">Update</button>
              </div>
            </form>
            </div>