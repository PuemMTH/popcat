<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>Visava : " . $row["visava"]. "<br>";

    $visavapass = $row["visava"]+1;

    $visava = "UPDATE `popcat` SET `visava` = '$visavapass' WHERE `popcat`.`id` = 1";
    if ($conn->query($visava) === TRUE) {
        echo "<br>visava record updated successfully";
    }

    $conn->close();
?>