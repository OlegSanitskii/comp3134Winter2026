<?php
$host = "localhost";
$dbname = "wk13_lab";
$username = "oleg";
$password = "1234";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search = isset($_GET['firstname']) ? $_GET['firstname'] : "";
$result = null;

if ($search !== "") {
    $stmt = $conn->prepare("SELECT id, username, email, firstname, lastname, active
                            FROM users
                            WHERE firstname = ? AND active = 1");
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Users 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            width: 250px;
        }

        button {
            padding: 8px 14px;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #999;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Search Users by First Name (Prepared Statements)</h2>

    <form method="GET" action="">
        <input type="text" name="firstname" placeholder="Enter first name" value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit">Search</button>
    </form>

    <?php if ($result): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Active</th>
            </tr>

            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["firstname"]; ?></td>
                        <td><?php echo $row["lastname"]; ?></td>
                        <td><?php echo $row["active"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No matching users found.</td>
                </tr>
            <?php endif; ?>
        </table>
    <?php endif; ?>

</body>
</html>

<?php
if (isset($stmt)) {
    $stmt->close();
}
$conn->close();
?>
