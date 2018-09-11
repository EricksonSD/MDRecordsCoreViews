<?php

function insertData($tablename, $columnName, $inputData) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mdrecordscore";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO $tablename ($columnName) VALUES ($inputData)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
function updateData($tablename, $updateString, $id, $key) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mdrecordscore";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE $tablename SET $updateString WHERE $id='$key'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully! ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
function getData($tablename, $selections) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mdrecordscore";
    $datafound = array();
    $index = 0;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT $selections FROM $tablename";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $datafound[$index] = $row;
            $index++;
        }
    } else {
        $datafound[$index]="0 results";
    }
    $conn->close();
    return $datafound;
}
function getDataById($tablename, $id, $idcoulumn) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mdrecordscore";
    $datafound = array();
    $index = 0;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM $tablename WHERE $idcoulumn=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $datafound[$index] = $row;
            $index++;
        }
    } else {
        $datafound[$index]="0 results";
    }
    $conn->close();
    return $datafound;
}
