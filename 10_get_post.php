<!--
//$_GET | $_POST Superglobals
//pass data through urls
-->

<?php
if (isset($_GET['submit'])) {
    echo $_GET['name'];
    echo '<br>';
    echo $_GET['age'];
    echo '<br>';
    echo $_GET['email'];
    echo '<hr>';
}
?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Umayr&age=24"><button>Click</button></a> -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Umayr&age=24&email=umayrnordien@gmail.com"></a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email">
    </div>
    <input type="submit" value="submit" name="submit">
</form>
