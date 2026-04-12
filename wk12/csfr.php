<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "host" && $password === "pass") {
        $message = "Login successful!";
    } else {
        $message = "Login failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    <button type="submit">Login</button>
</form>

<div>
    <?php if (isset($message)) echo $message; ?>
</div>

</body>
</html>
