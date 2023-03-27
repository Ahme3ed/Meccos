<?php
$title = 'Mecca Sign Up';
include_once 'heading.php';
?>

<div class="log-container">
<div class="logo-box">
    <a href="index.php"><img src="images/mecca-logo.png" alt=""></a>
</div>
<div class="login-box">
    <form action="" class="login-form">
        <div class="input-box">

            <figcaption>Your name</figcaption>
            <input type="text" name="" id="" Placeholder="" required>

        </div>

        <div class="input-box">

            <figcaption>Email or Phone number</figcaption>
            <input type="Email" name="" id="" Placeholder="">

        </div>

        <div class="input-box">

            <figcaption>Password</figcaption>
            <input type="text" name="" id="" Placeholder="">
            <p><i class="fa-solid fa-circle-exclamation"></i>  Passwords must be at least 8 characters.</p>

        </div>

        <div class="input-box">

            <figcaption>Re-enter Password</figcaption>
            <input type="text" name="" id="" Placeholder="">

        </div>
        
        <input type="button" class="button-1" value="Sign Up">

        <p>By signing up, you agree to Mecca's Conditions of Use and Privacy Notice.</p>
    </form>
 
</div>
<div class="more-choices">
<button type="button" class="fb-log">
    <img src="images/facebook.png" alt=""> 
    <p>Facebook Sign Up</p> 
</button>
<button type="button" class="google-log">
    <img src="images/google.png" alt=""> 
    <p>Google Sign Up</p> 
</button>
</div>
<div class="user_not_exist">
    <div class="have-not">
        <div class="bord"></div>
        <p>Already Have Account ?</p>
        <div class="bord"></div>

    </div>

    <a href="login.php"><input type="button"  value="Sign In"></a>

</div>


</div>





















<?php
include_once 'ending.php';
?>