<?php

global $conn;
include("connection.php");

// Check if form submitted for saving data
if(isset($_POST['save'])) {
    $name  = $_POST['name'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $address = $_POST['address'];

    $query = "INSERT INTO employee(emp_name, emp_gender, emp_dept, emp_address) VALUES('$name','$gender','$department','$address')";
    // Execute query
    $data = mysqli_query($conn, $query);

    if($data) {
        echo "Data saved successfully";
    } else {
        echo "Failed to save data";
    }
}

// Fetch data from database
$query = "SELECT * FROM employee;";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Output data in a table
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Gender</th><th>Department</th><th>Address</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["emp_name"]."</td>";
        echo "<td>".$row["emp_gender"]."</td>";
        echo "<td>".$row["emp_dept"]."</td>";
        echo "<td>".$row["emp_address"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>
