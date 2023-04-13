<html>
<h1>All SERVER values</h1>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <input type="submit">
</form>
<hr>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "REQUEST_METHOD is POST";
} else {
    echo "REQUEST_METHOD is not a POST";
}

echo "<hr>";

foreach ($_SERVER as $key => $value) {
    echo "$key: $value <br>";
}
