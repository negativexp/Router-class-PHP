<?php
if(isset($_GET["valueGET"])) {
    echo "valueGET: {$_GET['valueGET']}<br>";
}
if(isset($_POST["valuePOST"])) {
    echo "valuePOST: {$_POST['valuePOST']}";
}
?>

<h1>this form WILL work (GET method)</h1>
<form method="get">
    <input type="text" name="valueGET" required>
    <input type="submit">
</form>

<h1>this form will NOT work (POST method)</h1>
<form method="post">
    <input type="text" name="valuePOST" required>
    <input type="submit">
</form>

<p>why? because this index file is set on GET method and this form is set for POST method</p>
<p>$router->get("/", "views/index.php");</p>
<p>that's why POST methods won't work</p>

<a href="/example">post example page</a>