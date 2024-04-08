<?php
if(isset($_GET["valueGET"])) {
    echo "valueGET: {$_GET['valueGET']}<br>";
}
if(isset($_POST["valuePOST"])) {
    echo "valuePOST: {$_POST['valuePOST']}";
}
?>

<h1>this form WILL work</h1>
<form method="get">
    <input type="text" name="valueGET" required>
    <input type="submit">
</form>

<h1>this form will NOT work</h1>
<p>why? because this index file is set on GET method and this form is set for POST method</p>
<p>$router->get("/", "views/index.php");</p>
<p>that's why POST methods won't work, make sure to use POST method like this:</p>
<p>$router->post("/example", "views/index.php");</p>
<form method="post">
    <input type="text" name="valuePOST" required>
    <input type="submit">
</form>
<a href="/example">example page</a>