<?php
if(isset($_POST["value1"])) {
    echo "value 1: {$_POST['value1']}";
}
echo "index ahojj";
?>

<form method="post">
    <input type="text" name="value1">
    <input type="submit">
</form>