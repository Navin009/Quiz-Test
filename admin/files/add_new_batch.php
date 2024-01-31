<?php
include "../../database/config.php";
$batch_name = $_POST['batch_name'];
$batch_id;
$sql = "INSERT INTO batches (name) VALUES ('" . $batch_name . "')";

if (mysqli_query($conn, $sql)) {
    $id = "SELECT id  FROM batches where name = '" . $batch_name . "' order by id desc limit 1";
    $result = mysqli_query($conn, $id);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $batch_id =  $row['id'];
        }

        echo "Success";
    } else {
        echo "Failure";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
