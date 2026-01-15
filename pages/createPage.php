<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigation.php";
    ?>

    <h1> create user </h1>
    <form action="functions/createUser.php" method="POST">
        <label for="">name</name>
            <input type="text" name="user_name">
            <label for="">age</label>
            <input type="number" name="user_age">
            <label for="">address</label>
            <input type="text" name="user_address">
            <Button>submit</Button>
    </form>
</body>

</html>