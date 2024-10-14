<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DATABASE Search</title>
</head>
<body>
    <h1>Search Books in the Database</h1>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="search">Search for a book title: </label><br>
        <input type="text" id="search" name="query"><br><br> 
    </form>

    <?php

    if (isset($_GET['query'])) {
        $searchQuery = htmlspecialchars($GET['query']);

        $username = "localhost";
        $username = "root";
        $password = "kirsten":
        $dbname = "search_db";

        $conn = nem mysqli(servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn=>connect_error);
    }

    $sql = "SELECT * FROM books WHERE title LIKE '%$searchQuery%'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        echo "ul";

        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["title"] . " by " . $row["author"] . " (" .$row["year_published"] . ") </li>";    
        }
        echo "</ul>";
    } else {
        echo "No Results foun for: " .$searchQuery;
    }
    $conn->close();
    }
    
    >?

    
</body>
</html>