<?php
        session_start();
        include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            color: white;
        }

        header {
            background: #339FFF;
            color: white;
            font-size: 50px;
            text-align: center;
            padding: 2%;
        }

        .column {
        float: left;
        height: 1000px;
        }
        
        h1 {
            text-align: center;
            margin: 0;
            background-color:#3d3d3d;
        }

        .left {
        width: 25%;
        }

        .right {
        width: 75%;
        right:0px;
        }

        .send{
            padding-top: 40px;         
        }

        .btn {
            background-color: #339FFF;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            float: right;
            width: 9%
        }
        div.sticky {
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
        }

        .btnSO {
            background-color: red;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        
    </style>
</head>
<body>
    <form action="logout.php">
        <input type="submit" value="Sign out" class="btnSO"style="float:right">
        <p style="background:#339FFF;text-align:center;margin:0px">Signed in as: <b><?php 

        
        echo $_SESSION['name']; ?></b></p>  
        <header>Chat Room</header>
    </form>
        
    
    <div class="column left" style="background-color:#3d3d3d">
        <h2 style="text-align:center">Chat Room Users</h2>

        <?php
        $sqlUsers = "SELECT username FROM signup";

        $resultUsers = $conn->query($sqlUsers);

        if($resultUsers->num_rows > 0){
            while($row = $resultUsers->fetch_assoc()){
                echo $row["username"] . "<br>";
            }
        }
        else{
            echo "error";
        }


        ?>


    </div>

    <div class="column right" style="background-color:#525252;">
        <h2 style="text-align:center">Messages</h2>

        <?php
            $sql = "select * from messages";
            $result = $conn->query($sql);
            if($result->num_rows > 0){

                while($row = $result -> fetch_assoc()){
                    echo "", $row["name"]. " " . ": ". $row["message"] . "&nbsp &nbsp" . $row["date"] . "<br>"; 
                    echo"<br>";
                }
            }
            else{
                echo "no messages yet";

            }
            $conn->close();
            
        ?>    
    </div>

    <p>test</p>
    
    <div class="sticky">
            <form method="post" action="send.php">
            <input type="submit" value="send" class="btn">
            <textarea name="msg" placeholder="Enter your message" style="width:90%; font-size:20px"></textarea><br>
        </form>
    </div>
</body>
</html>