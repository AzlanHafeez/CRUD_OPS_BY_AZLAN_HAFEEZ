<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php 
include "database.php";
 if (isset($_GET["id"])) {
    $user_id = $_GET["id"];

    $delete = "DELETE FROM `crud-data` WHERE `S.No` = '$user_id'";

   $run = mysqli_query($connection, $delete);
if ($run == TRUE) {
   echo "  <div class='container'>
        <div id='myProgress'>
            <div id='myBar'>10%</div>
        </div>
        <br>
        <h1 id='heading'>Successfully Deleted</h1>
 <a href='index.php' id='button' class='button'>Go
            Back
            To
            Home</a>
    </div>
";
}else{
   echo "Error" . $delete . connection_error;
}
 }
 

?>
    <style>
        body {
            display: flex;
            height: 100vh;
            background: linear-gradient(to right, rgb(0, 0, 0, 0.5)50%, rgb(0, 0, 0, 0.5)50%);
            justify-content: center;
            align-items: center;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            width: 450px;
            background: #999;
            border-radius: 20px;
            flex-direction: column;
        }

        #myProgress {
            width: 80%;
            background-color: #ddd;
            border-radius: 30px;
        }

        #myBar {
            width: 10%;
            height: 30px;
            background-color: #21cf38;
            text-align: center;
            line-height: 30px;
            color: #222;
            border-radius: 30px;
        }

        .container h1 {
            font-weight: 700;
            text-shadow: 1px 1px 10px;
        }       .button {
            text-decoration: none;
            width: 180px;
            background-color: #777;
            height: 2.8rem;
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            color: #222;
            font-weight: 800;
            transition: 0.2s ease-in;
        }

        .button:hover {
            background-color: #666;
            color:#111;
        }
    </style>
        <script>

        window.onload = function move() {
        var i = 0;
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("myBar");
                var width = 10;
                var id = setInterval(frame, 10);
                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                        elem.innerHTML = width + "%";
                    }
                }
            }
        }
    </script>
</body>
</html>