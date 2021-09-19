<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>Visava : " . $row["visava"]. "<br>";

    $comscipass = $row["comsci"]+1;
    $parmongpass = $row["parmong"]+1;
    $visavapass = $row["visava"]+1;

    $comsci = "UPDATE `popcat` SET `comsci` = '$comscipass' WHERE `popcat`.`id` = 1";
    if ($conn->query($comsci) === TRUE) {
        echo "<br>Comsci record updated successfully";
    }
    $parmong = "UPDATE `popcat` SET `parmong` = '$parmongpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($parmong) === TRUE) {
        echo "<br>parmong record updated successfully";
    }
    $visava = "UPDATE `popcat` SET `visava` = '$visavapass' WHERE `popcat`.`id` = 1";
    if ($conn->query($visava) === TRUE) {
        echo "<br>visava record updated successfully";
    }

    $conn->close();
?>