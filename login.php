<?php 
require_once('querys.php');
require_once('/includes/functions.php');
?>

<div>
<div>
<div class="login">
	<br />
   <form action="" method="post"> 
   <h3>Login:</h3>
   <br />

    <label for="username">Username:</label>
        <input type="text" name="username" />
    <br />
    <label for="password">Password:</label>
        <input type="password" name="password" />
     <br />
     
        
    <input type="submit" name="login" value="Submit"/><br />
    <?php 
    
        if (isset($_POST['username']) AND isset($_POST['password'])) {
        login($_POST['username'], $_POST['password'], $connection);
		}
        
    ?>

   </form>


</div>
</div>
</div>

						
    
<?php require_once('footer.php'); ?>


