<style>
<?php
include 'register.css';
?>
</style>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6  formDiv">
           
            <!-- Form -->
            <form  id="register_sign_up" class="signup_form" method ="POST" autocomplete="off">
                <h2>login</h2>
               
                
                <div class="form-group">
                    <label>Username / Email</label>
                    <input type="email" name="username" class="form-control user_name" placeholder="Email Address" requried />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control pass_word" placeholder="Password" requried />
                </div>
             
                <input type="submit" name="login" class="btn" value="Login"/>
            </form>


            <p>Don't have an account? <a href='register.php' class='signuplink'>sign up</a></p>
            <!-- /Form -->
        </div>
    </div>
</div>
<?php
 if(isset($_POST['login'])){
    echo "
        <script type=\"text/javascript\">
        alert('login successfully');
        window.location.replace('/bookstore');
       
        
        </script>
    ";
 }
  ?>