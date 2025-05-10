<?php

require_once 'db_connection.php';

if (isset($_POST['institute_name'])) {
    $institute_name = $_POST['institute_name'];

    $query = "SELECT department_name FROM department WHERE institute_name = ?";

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $institute_name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['department_name'] . '">' . $row['department_name'] . '</option>';
            }
        } else {
            echo '<option value="" disabled>No departments found</option>';
        }

        $stmt->close();
    }
}

$conn->close();
