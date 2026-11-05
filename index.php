<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Display</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f9;
        }
        table {
             font-family: Arial, Helvetica, sans-serif;
             border-collapse: collapse;
             width: 100%;
        }

        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2;}

        tr:hover {background-color: #ddd;}

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
<h2>Database User Records</h2>
<?php

    // Connect to RDS
    $conn = new mysqli( "database-1.c5sc46wkkcnc.us-east-1.rds.amazonaws.com", "admin", "Database#12345", "db", 3306 );

    // Fetch records
    $sql = "SELECT * FROM userdata";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Name</th>
                <th>Age</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["age"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No data found in userdata table.</p>";
    }
    $conn->close();
?>
<!-- test -->
    <!-- test returns -->
</body>
</html>
