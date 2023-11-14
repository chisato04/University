<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        section {
            margin-bottom: 30px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Jewelry Store</h1>

    <?php
    // Database connection parameters
    $host = "127.0.0.1";
    $username = "riki"; // Replace with your database username
    $password = "love@0218"; // Replace with your database password
    $database = "gemini";


    // Function to display products from a table
    function displayProducts($conn, $tableName) {
        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<section>";
            echo "<h2>$tableName</h2>";
            echo "<table>";
            echo "<tr><th>Product ID</th><th>Product Name</th><th>Price</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['PROD_ID']}</td><td>{$row['PROD_NAME']}</td><td>{$row['PRICE']}</td></tr>";
            }
            echo "</table>";
            echo "</section>";
        } else {
            echo "<p>No products available in $tableName.</p>";
        }
    }

    // Display products from each table
    displayProducts($conn, 'bracelet');
    displayProducts($conn, 'earrings');
    displayProducts($conn, 'necklace');
    displayProducts($conn, 'ring');
    displayProducts($conn, 'set');

    // Close connection
    $conn->close();
    ?>

</body>
</html>
