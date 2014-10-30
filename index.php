<?php

require_once('querys.php');
require_once('header.php');
?>
<div>
	<div>
	<br />
	<?php listCharacters($connection, $_GET['user_id']); ?>
	<a href="create_character.php?user_id=<?php echo $_GET['user_id']; ?>"><input type="button" value="Create Character"></a>
	
	
	</div>
</div>

<?php 
require_once('footer.php');
?>