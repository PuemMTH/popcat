<?php require './src/conn.php';?>
<!-- Hello world !!! -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POPCAT</title>
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <style>
        .topright {
            position: absolute;
            top: 8px;
            right: 16px;
            font-size: 18px;
        }
    </style>
    <!-- <script>
		function getValue_Comsci() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("demo").innerHTML = this.responseText;
			}
		};1
		xhttp.open("GET", "conn.php", true);
		xhttp.send();
		}
	</script> -->
</head>
<body>
    <div class="container">
        <h1>POP OIL</h1>
            <!-- consci_s -->
            <br><br>
            <?php 
                session_start();
                if(!isset($_COOKIE["count"])){
                    $cookie_name = "count";
                    $cookie_value = "0";
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                    // header("Location:profile.php");
                    echo "<script>var score = 0;</script>";
                }else{
                    $cookie_value = $_COOKIE["count"];
                    echo "<script>var score = '". $cookie_value ."';</script>";
                }
            ?>
        <p id="score">
            <?php echo $cookie_value; ?>
        </p>
    </br></br>
        <!-- <img src="maincat1.png" alt="Invalid" id="popcat1" height="500x"> -->
        <img src="./src/image/maincat1.png" alt="Invalid" id="popcat1" height="600px">
        <div class="badge bg-primary text-wrap topright" >
            วิทคอม: <a id="demo_1" >1</a><br><br>
            ประมง: <a id="demo_2" >1</a><br><br>
            วิศวะ: <a id="demo_3" >1</a><br><br>
        </div>
        <select name="majar" id="majar">
            <option value="0">[0] วิทยาการคอมพิวเตอร์</option> <!-- value 0 -->
            <option value="1">[1] ประมง</option> <!-- value 1 -->
            <option value="2">[2] วิศวะ</option> <!-- value 3 -->
            <!-- <option value="political">political</option> value 4 -->
        </select>
        <!-- <script>
            function asd(){
                const sb = document.querySelector('#majar');
                alert(sb.selectedIndex);
            }
            setInterval(asd, 3000);
        </script> -->
    <script>
        function getValue_Comsci() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_1").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_Comsci.php`, true);
            xhttp.send();
        }
        function getValue_Parmong() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_2").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_Parmong.php`, true);
            xhttp.send();
        }
        function getValue_Visava() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_3").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_Visava.php`, true);
            xhttp.send();
        }
        
        setInterval(getValue_Comsci, 1000);
        setInterval(getValue_Parmong, 1000);
        setInterval(getValue_Visava, 1000);
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
