<html>
<body>
<?php
if(isset($_POST['color']))
{
echo "The Color you have selected ".$_POST['color'];
}
?>
<form action="" method="post">
Select Your Favourite Color:
<input type="radio" name="color" onclick="javascript: submit()" value="red"> Red
<input type="radio" name="color" onclick="javascript: submit()" value="green"> Green
</form>
</body>
</html>
