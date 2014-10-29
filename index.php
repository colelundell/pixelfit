<?php

require_once('querys.php');
require_once('header.php');
?>
<div>
	<div>
	<br />
	<?php listCharacters($connection, $_GET['user_id']); ?>
	</div>
</div>

<?php 
require_once('footer.php');
?>