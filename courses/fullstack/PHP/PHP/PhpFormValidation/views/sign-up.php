<form class="sign-up" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="fields">
        <input type="text" name="user_name" placeholder="Please enter an username">
        <span class="error"><?php print $user_name_error; ?></span>
    </div>
    <div class="fields">
        <input type="email" name="user_email" placeholder="Please enter an user email">
        <span class="error"><?php print $user_email_error; ?></span>
    </div>
    <div class="fields">
        <input type="text" name="user_phone" placeholder="Please enter an user phone">
        <span class="error"><?php print $user_phone_error; ?></span>
    </div>
    <div class="fields">
        <input type="submit" value="Send">
    </div>
</form>