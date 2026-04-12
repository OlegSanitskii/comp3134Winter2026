<?php
$q = $_GET['q'] ?? '';
$safe_q = htmlentities($q, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Info To App 2</title>
</head>
<body>
    <h2>Sending Info To App 2 - Mitigation Enabled</h2>

    <form method="get">
        <input name="q" placeholder="Enter Text" value="<?php echo $safe_q; ?>">
        <br><br>
        <input type="submit" value="Go">
    </form>

    <hr>

    <h3>Output:</h3>
    <?php
    if (isset($_GET['q'])) {
        echo $safe_q;
    }
    ?>
</body>
</html>
