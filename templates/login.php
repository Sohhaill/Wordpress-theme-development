<?php
/*
Template Name: Login
*/

?>

<?php

get_header();
?>
<div class="container  flex justify-start items-center !flex-col gap-7 h-screen pt-8">
    <div class="contact_text flex justify-center items-center !flex-col gap-3">
        <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
            Welcome </div>
        <h2 class="text-[40px] font-[500] font-[black]">Log into <span style="color:#4C782B;"> Resilience</span></h2>
    </div>
    <div class="login-container  ">

        <?php

        wp_login_form(array(
            'redirect' => home_url(),
            'label_username' => 'Your Username',
            'label_password' => 'Your Password',
            'label_remember' => 'Remember Me',
            'label_log_in' => 'Log In',
        ));
        ?>

        <p class="text-center"><a href="<?php echo wp_lostpassword_url(); ?>">Forgot your password?</a></p>
    </div>
</div>

<?php
get_footer();
?>