The solution involves replacing the deprecated `mysql_*` functions with either MySQLi or PDO.  This example uses MySQLi:

```php
<?php
$mysqli = new mysqli("localhost", "username", "password", "database_name");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$result = $mysqli->query("SELECT * FROM your_table");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        // Process each row
        echo $row['column_name'] . "<br>";
    }
    $result->free_result();
} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();
?>
```
Remember to replace the placeholder values for username, password and database_name with your actual credentials.