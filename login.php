<?php
$title = 'Mecca Sign In';
include_once 'heading.php';
?>

<div class="log-container">
<div class="logo-box">
    <a href="index.php"><img src="images/mecca-logo.png" alt=""></a>
</div>
<div class="login-box">
    <form action="" class="login-form">
        
        <div class="input-box">

            <figcaption>Email or phone number</figcaption>
            <input type="text" name="" id="" Placeholder="">

        </div>

        <div class="input-box">

            <figcaption>Password</figcaption>
            <input type="Password" name="" id="" Placeholder="">

        </div>
        
        <input type="button" class="button-1" value="Sign In">

        <div class="end-form">
        <p>By signing in, you agree to Mecca's Conditions of Use and Privacy Notice.</p>
        <a href=""><p> <i class="fa-solid fa-pen"></i> Forgot Password ? </p></a>

        </div>

    </form>
 
</div>
<div class="more-choices">
<button type="button" class="fb-log">
    <img src="images/facebook.png" alt=""> 
    <p>Facebook Sign In</p> 
</button>
<button type="button" class="google-log">
    <img src="images/google.png" alt=""> 
    <p>Google Sign In</p> 
</button>
</div>
<div class="user_not_exist">
    <div class="have-not">
        <div class="bord"></div>
        <p>New To Mecca ?</p>
        <div class="bord" ></div>

    </div>

    <a href="register.php"><input type="button"  value="Create New Account"></a>

</div>


</div>





















<?php
include_once 'ending.php';
?>