<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Search</title>
</head>
<body>
    <h1>Search Asset by IP Address</h1>
    <form action="search.php" method="post">
    <!-- <label for="department">Select Department:</label>
        <select id="department" name="department" required>
            <option value="a">Department A</option>
            <option value="b">Department B</option>
            <option value="c">Department C</option>
            <option value="d">Department D</option>
            <option value="e">Department E</option>
            <option value="f">Department F</option>
            <option value="g">Department G</option>
        </select>-->
        <br><br>
        <label for="ip_address">IP Address:</label>
        <input type="text" id="ip_address" name="ip_address" required>
        <br><br>
        <input type="submit" name="submit" value="Search">
    </form>
</body>
</html>


<?php


    // Check if 'department' and 'ip_address' are set in POST data
    if (isset($_POST["submit"])) {
        $ip = $_POST["ip_address"];
        //echo "$department";

        // Include database connection file
        require_once 'config.inc.php';

        // Prepare the SQL query to search in the specific department table
        $sql = "SELECT * FROM a WHERE IP_Address = ? 
            UNION 
            SELECT * FROM b WHERE IP_Address = ? 
            /*UNION 
            SELECT * FROM c WHERE IP_Address = ? 
            UNION 
            SELECT * FROM d WHERE IP_Address = ? 
            UNION 
            SELECT * FROM e WHERE IP_Address = ? 
            UNION 
            SELECT * FROM f WHERE IP_Address = ?*/";

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind parameters. We need to bind the same parameter multiple times.
        mysqli_stmt_bind_param($stmt, "ss", $ip, $ip);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        mysqli_stmt_close($stmt);
            // Display results
            if (!empty($result)) {
                //echo "<h1>Search Results for Department $department</h1>";
                echo "<table border='1'>";
                echo "<tr><th>Asset Name</th><th>Purchase Date</th><th>Department</th><th>Serial Number</th><th>IP Address</th><th>Asset Category</th></tr>";

                while ($row = mysqli_fetch_assoc($result)) {

                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['Asset_Name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Purchase_Date']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Department']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Serial_Number']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['IP_Address']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Asset_Category']) . "</td>";
                    echo "</tr>";
                }
            }

                echo "</table>";

        }

            else   
             {
                echo "No results found for IP address: " . htmlspecialchars($ip) . " in Department: " . htmlspecialchars($department);
            }
        } 
        
        else  {
            echo "Failed to prepare statement for table `$department`. Error: " . mysqli_error($conn);
        }
    }
    
    else {
        echo "Department or IP Address not set in POST request.";
    } 




?>
