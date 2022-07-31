<form method="post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div>
        <input type="text" name="name" placeholder ="Please enter an username"> 
    </div>
    <br>
    <div>
        <input type ="text" name ="email" placeholder ="Please enter an user email">
    </div>
    <br>
    <div>
        <input type ="text" name ="password" placeholder ="Please enter a password">
    </div>
    <br>
    <div>
        <input type ="submit" value ="send">
    </div>
</form>