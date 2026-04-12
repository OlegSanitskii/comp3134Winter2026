<?php
session_start();
$_SESSION["confirmation"] = bin2hex(random_bytes(16));
?>

<form method="POST" action="csfr_action.php">
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION["confirmation"]; ?>">
    <button type="submit">Submit</button>
</form>
