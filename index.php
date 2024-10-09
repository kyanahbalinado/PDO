<?php require_once 'dbconfig.php'; ?>
<!-- 
The 'dbconfig.php' file is included using 'require_once' to establish a connection with the 
database using the PDO instance created in that file. This ensures that the database 
connection is set up before any queries are executed. If the file is missing or there is 
an error in it, the script will stop executing.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for setting character encoding and viewport settings for responsive design -->
    <meta charset="UTF-8"> <!-- Set the character encoding to UTF-8 to support various characters -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set the viewport to ensure proper scaling on different devices -->
    <title>Document</title> <!-- Placeholder title for the document -->
</head>
<body>
    <?php
    // Define a query to select all rows from the 'users' table
    $query = "SELECT * FROM users"; 
    
    // Prepare the SQL query for execution using the PDO instance
    $stm = $pdo->prepare($query); 
    
    // Execute the prepared query and store the result in $executeQuery
    $executeQuery = $stm->execute();

    // Check if the query was successfully executed
    if ($executeQuery) {
        // Fetch all the resulting rows from the executed query
        $users = $stm->fetchAll(); 
    } else {
        // Display an error message if the query execution failed
        echo "Query Failed"; 
    }
    ?>

    <!-- Create a table to display the user data -->
    <table border="1"> <!-- Added border attribute for better visibility of the table structure -->
    <tr>
        <th>UserID</th> <!-- Table header for UserID -->
        <th>Username</th> <!-- Table header for Username -->
        <th>FirstName</th> <!-- Table header for FirstName -->
    </tr> 

    <!-- Loop through the $users array and create a new row for each user -->
    <?php foreach ($users as $row) { ?> 
    <tr>
        <td><?php echo $row['UserID']; ?></td> <!-- Display the UserID of the current user -->
        <td><?php echo $row['Username']; ?></td> <!-- Display the Username of the current user -->
        <td><?php echo $row['FirstName']; ?></td> <!-- Display the FirstName of the current user -->
    </tr> 
    <?php } ?> 
    </table>
</body>
</html>
