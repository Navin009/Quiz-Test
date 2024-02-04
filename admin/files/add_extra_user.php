<?php
$id;
include "../../database/config.php";

$batches = "SELECT id FROM batches where name = '" . $_POST['batch_name'] . "' ";
$result = mysqli_query($conn, $classes);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $id  = $row['id'];
    }

    $sql = "INSERT INTO user_data (rollno, batch_id) VALUES ('" . $_POST['extra_roll_number'] . "', $id)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
