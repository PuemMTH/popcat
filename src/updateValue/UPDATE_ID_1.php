<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>Visava : " . $row["visava"]. "<br>";

    $parmongpass = $row["parmong"]+1;

    $parmong = "UPDATE `popcat` SET `parmong` = '$parmongpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($parmong) === TRUE) {
        echo "<br>parmong record updated successfully";
    }

    $conn->close();
?>