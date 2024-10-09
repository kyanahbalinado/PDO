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

    $stmt = $pdo->prepare("SELECT * FROM users");
    if($stmt->execute()){
        echo"<pre>";
        print_r($stmt->fetchAll());
        echo"</pre>";
    }
   
   ?>

   

   $stmt = $pdo->prepare("SELECT * FROM users");
   if($stmt->execute()){
        echo"<pre>";
        print_r($stmt->fetch());
        echo"</pre>";
    }
   
   ?> 



    $query = "INSERT INTO groups (GroupID, GroupName, CreatedBy) VALUES (?, ?, ?)";
    $stm = $pdo->prepare($query); 
    $executeQuery = $stm->execute([17, "kyanahgroup", 'genean']); 
    if ($executeQuery) {
        echo "Query Successful!";
    } else {
        echo "Query Failed";
    }
    ?>

    
    $query = "DELETE FROM users WHERE UserID = 1;"; // Added semicolon here
    $stm = $pdo->prepare($query);

    // Execute the query without parameters
    $executeQuery = $stm->execute();

    // Check if the query execution was successful
    if ($executeQuery) {
        echo "Deletion Successful!";
    } else {
        echo "Query Failed";
    }
    ?>



    $query = "UPDATE users SET Username = ? WHERE UserID = 1"; 
    $executeQuery = $stm->execute(["kyanah"]);
    if ($executeQuery) {
        echo "Update Successful!"; 
    } else {
        echo "Query Failed"; 
    }
    ?>



    $query = "SELECT * FROM users"; 
    $stm = $pdo->prepare($query); 
    $executeQuery = $stm->execute();
    if ($executeQuery) {
        $users = $stm->fetchAll(); 
    } else {
      echo "Query Failed"; 
    }
    ?>
 <table border="1"> 
    <tr>
        <th>UserID</th> 
        <th>Username</th>
        <th>FirstName</th> 
    </tr> 
    <?php foreach ($users as $row) { ?> 
    <tr>
        <td><?php echo $row['UserID']; ?></td> 
        <td><?php echo $row['Username']; ?></td> 
        <td><?php echo $row['FirstName']; ?></td> 
    </tr> 
    <?php } ?> 
    </table>
</body>
</html>
