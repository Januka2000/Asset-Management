<?php
if (isset($_POST["submit"])) {
    $name = $_POST["asset_name"];
    $pdate = $_POST["purchase_date"];
    $department = $_POST["department"];
    $snumber = $_POST["serial_number"];
    $ip = $_POST["ip_address"];
    $acategory = $_POST["asset_category"];

    require_once 'config.inc.php';

    $sql = "";

    if ($department == 'A') {
        $sql = "INSERT INTO A (Asset_Name, Purchase_Date, Department, Serial_Number, IP_Address, Asset_Category) VALUES (?, ?, ?, ?, ?, ?)";
    } else if ($department == 'B') {
        $sql = "INSERT INTO B (Asset_Name, Purchase_Date, Department, Serial_Number, IP_Address, Asset_Category) VALUES (?, ?, ?, ?, ?, ?)";
    } else if ($department == 'C') {
        $sql = "INSERT INTO C (Asset_Name, Purchase_Date, Department, Serial_Number, IP_Address, Asset_Category) VALUES (?, ?, ?, ?, ?, ?)";
    } else if ($department == 'D') {
        $sql = "INSERT INTO D (Asset_Name, Purchase_Date, Department, Serial_Number, IP_Address, Asset_Category) VALUES (?, ?, ?, ?, ?, ?)";
    } else if ($department == 'E') {
        $sql = "INSERT INTO E (Asset_Name, Purchase_Date, Department, Serial_Number, IP_Address, Asset_Category) VALUES (?, ?, ?, ?, ?, ?)";
    } else if ($department == 'F') {
        $sql = "INSERT INTO F (Asset_Name, Purchase_Date, Department, Serial_Number, IP_Address, Asset_Category) VALUES (?, ?, ?, ?, ?, ?)";
    } else {
        die("Invalid department.");
    }

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:tryagain.html");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $name, $pdate, $department, $snumber, $ip, $acategory);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location:index.html?error=NONE");
    exit();
} else {
    header("location:index.html");
    exit();
}
?>
