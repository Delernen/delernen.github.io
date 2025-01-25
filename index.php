<?php
// Database connection details                                                                                                                                                               
$host = 'b9mkpsjugiouteo6fsoh-postgresql.services.clever-cloud.com';
$dbname = 'b9mkpsjugiouteo6fsoh';
$user = 'udgbbznahompk1nhtrvp';
$pass = 'uSUq4onqEDvbfU1cOXZJ1tkm62usa8';
$port = '50013';      // e.g., 5432 (default PostgreSQL port)

// Connection string
$conn_string = "host=$host dbname=$dbname user=$user password=$pass port=$port";

// Establish a connection
$conn = pg_connect($conn_string);

if (!$conn) {
    // Handle connection error
    echo "Connection failed: " . pg_last_error();
    exit;
}

// SQL query with schema
$sql = "SELECT * FROM de";

// Execute the query
$result = pg_query($conn, $sql);

if (!$result) {
    // Handle query error
    echo "Query failed: " . pg_last_error();
    exit;
}

// Fetch and display the results
while ($row = pg_fetch_assoc($result)) {
    echo "ID: " . $row['wort_pre'] . " - Title: " . $row['wort'] . "<br>";
}

// Free result and close the connection
pg_free_result($result);
pg_close($conn);
?>
