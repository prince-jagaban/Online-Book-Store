<style>
<?php
include 'register.css';
   
?>
</style>


<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6  formDiv">
           
            <!-- Form -->
            <form  id="register_sign_up"  method="POST" class="signup_form" autocomplete="off">
                <h2>register here</h2>
                <div class="form-group">
                    <label>First Name</label>
                    <input   type="text" name="f_name" class="form-control first_name" placeholder="First Name" requried />
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="l_name" class="form-control last_name" placeholder="Last Name" requried />
                </div>
                <div class="form-group">
                    <label>Username / Email</label>
                    <input type="email" name="username" class="form-control user_name" placeholder="Email Address" requried />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control pass_word" placeholder="Password" requried />
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="phone" name="mobile" class="form-control mobile" placeholder="Mobile" requried />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control address" placeholder="Address" requried>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control city" placeholder="City" requried>
                </div>
                <input type="submit" name="signup" class="btn" value="sign up" onclick="return true;"/>
            </form>
            <!-- /Form -->
        </div>
    </div>
</div>
<?php
 if(isset($_POST['signup'])){
    echo "
        <script type=\"text/javascript\">
        alert('you have signed up successfully');
        window.location.replace('/bookstore');
        </script>
    ";
 }
  ?>