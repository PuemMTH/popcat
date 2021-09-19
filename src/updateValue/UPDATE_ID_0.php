<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>Visava : " . $row["visava"]. "<br>";

    $comscipass = $row["comsci"]+1;

    $comsci = "UPDATE `popcat` SET `comsci` = '$comscipass' WHERE `popcat`.`id` = 1";
    if ($conn->query($comsci) === TRUE) {
        echo "<br>Comsci record updated successfully";
    }

    $conn->close();
?>