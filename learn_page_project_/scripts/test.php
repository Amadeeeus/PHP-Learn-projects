<form action="test" method="$_POST" enctype="multipart/form-data">
<input type="file" name="filename">
</form>
<?php
include "functions.php";
file_check($_FILES, $_POST);
?>