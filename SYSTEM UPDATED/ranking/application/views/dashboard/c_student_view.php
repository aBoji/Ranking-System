  <div class="content-wrapper">
    <div class="container">
    <h1 class="well">Create Student Account</h1>
  <div class="col-lg-12 well">
  <div class="row">
<<<<<<< HEAD:SYSTEM UPDATED/ranking/application/views/dashboard/c_student_view.php
        <?php echo form_open('c_student/create_student_acct');?>
=======
        <?php echo form_open('admin/cia_form_submit');?>
>>>>>>> f8947a18a05ec3d77b7e0026dc5eec96e179ff15:SYSTEM UPDATED/ranking/application/views/dashboard/c_student_view.php
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name" class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Middle Name</label>
                <input type="text" name="mname" placeholder="Middle Name" class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" class="form-control">
              </div>
            </div>  
             <div class="row">
              <div class="col-sm-6 form-group">
                <label>Phone Number</label>
                <input type="text" placeholder="(ex. 09123456789)" name="number" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Email Adress</label>
                <input type="text" placeholder="(ex. helloworld@gmail.com)" name="email" class="form-control">
              </div>  
            </div> 
            <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                  <option selected="true" disabled="disabled">-- Select Gender --</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
          </div>         
<<<<<<< HEAD:SYSTEM UPDATED/ranking/application/views/dashboard/c_student_view.php
           
=======
            <div class="form-group">
              <label>Address</label>
              <textarea placeholder="Address" name="address" rows="1" class="form-control"></textarea>
            </div>  
>>>>>>> f8947a18a05ec3d77b7e0026dc5eec96e179ff15:SYSTEM UPDATED/ranking/application/views/dashboard/c_student_view.php
           <div class="row">
              <div class="form-group col-sm-6">
                 <label>Region</label>
            <select name="region" class="form-control">
                  <option selected="true" disabled="disabled">-- Select Region --</option>
                  <option value="NCR">NCR</option>
                  <option value="CAR">CAR</option>
                  <option value="MIMAROPA">MIMAROPA</option>
                  <option value="ARMM">ARMM</option>
                  <option value="RegionI">RegionI</option>
                  <option value="RegionII">RegionII</option>
                  <option value="RegionIII">RegionIII</option>
                  <option value="RegionIV">RegionIV</option>
                  <option value="RegionV">RegionV</option>
                  <option value="RegionVI">RegionVI</option>
                  <option value="RegionVII">RegionVII</option>
                  <option value="RegionVIII">RegionVII</option>
                  <option value="RegionIX">RegionIX</option>
                  <option value="RegionX">RegionX</option>
                  <option value="RegionXI">RegionXI</option>
                  <option value="RegionXII">RegionXII</option>
                  <option value="RegionXIII">RegionXIII</option>
                </select>
              </div>
               <div class="col-sm-6 form-group">
                <label>Province</label>
                <input type="text" placeholder="Province" name="province" class="form-control">
              </div> 
            </div> 
           <div class="row">
              <div class="col-sm-6 form-group">
                <label>City</label>
                <input type="text" placeholder="City" name="city" class="form-control">
              </div>  
              <div class="col-sm-6 form-group">
                <label>Zip Code</label>
                <input type="text" placeholder="Zip" name="zip" class="form-control">
              </div>    
<<<<<<< HEAD:SYSTEM UPDATED/ranking/application/views/dashboard/c_student_view.php
            </div>  
              <div class="row">
              <div class="col-sm-6 form-group">
                <label>Lot Number</label>
                <input type="text" placeholder="(ex. 3852)" name="lot" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Barangay</label>
                <input type="text" placeholder="(ex. Bangkal)" name="barangay" class="form-control">
              </div>  
            </div>     
=======
            </div>      
>>>>>>> f8947a18a05ec3d77b7e0026dc5eec96e179ff15:SYSTEM UPDATED/ranking/application/views/dashboard/c_student_view.php
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Username</label>
                <input type="text" placeholder="Username" name="username" class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control">
              </div>  
            </div>   
            
                           
            <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#success">Submit</button> 
        <?php echo form_close();?>

             <div class="modal fade" id="success" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Success!!</h4>
                    </div>
                    <div class="modal-body">
                      <p>ID Number:</p>
                      <p>Username:</p>
                      <p>Name:</p>
                      <p>Address:</p>
                      <p>Phone Number:</p>
                      <p>Email Address:</p>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
            </div>   
          </div>
        </div>
  </div>
  </div>
    <!-- /#page-wrapper -->
  
  <!-- /#wrapper -->

  </div>