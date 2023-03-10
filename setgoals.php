<?php
$client_array = array(3,4,5);
$dietitianuserID = 'John_wayne';
// handle Ajax here
if(isset($_POST['update_goal'])){
    $type = $_POST['update_goal'];
    $clients = $_POST['clients'];
    $goal = $_POST['goal'];
    $dietitianuserID = $_POST['dietitianuserID'];
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    foreach ($clients as $c_id) {
        $isSame =false;
        $query = "SELECT `{$type}` FROM `goals` WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
        $result = $conn->query($query) or die('Query Failed');
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $old_value = $row[$type];
                if($old_value == $goal){
                    $isSame = true;
                    break;
                }
            }
        }
        if($isSame){
            continue;
        }
        $query = "UPDATE `goals` SET {$type} = '{$goal}' WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
        $result = $conn->query($query) or die("Query Failed");
        if ($conn->affected_rows == 0) {
            $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `{$type}`) VALUES ('{$dietitianuserID}',{$c_id},'{$goal}')";
            $result = $conn->query($query) or die("Query Failed");
        }
    }
    print_r($result);
    $conn->close();
    exit();
}
if(isset($_POST['update'])){
    $type = $_POST['update'];
    $client = $_POST['client'];
    $goal = $_POST['goal'];
    $dietitianuserID = $_POST['dietitianuserID'];
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    $query = "UPDATE `goals` SET `{$type}` = '{$goal}' WHERE `client_id` = '{$client}' AND `dietition_id` = '{$dietitianuserID}'";
    $result = $conn->query($query) or die("Query Failed");
    if ($conn->affected_rows == 0) {
        $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `{$type}`) VALUES ('{$dietitianuserID}',{$client},'{$goal}')";
        $result = $conn->query($query) or die("Query Failed");
    }
    print_r($result);
    $conn->close();
    exit();
}
// create goal
if(isset($_POST['create_goal'])){
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    if (isset($_POST['create_goal_steps'])) {
        $steps = $_POST['create_goal_steps'];
        foreach ($client_array as $c_id) {
            $isSame =false;
            $query = "SELECT `steps` FROM `goals` WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            $result = $conn->query($query) or die('Query Failed');
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['steps'] == $steps){
                        $isSame = true;
                        break;
                    }
                }
            }
            if($isSame){
                continue;
            }
            $query = "UPDATE `goals` SET steps = '{$steps}' WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            echo($query);
            $result = $conn->query($query) or die("Query Failed");
            if ($conn->affected_rows == 0) {
                $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `steps`) VALUES ('{$dietitianuserID}',{$c_id},'{$steps}')";
                $result = $conn->query($query) or die("Query Failed");
            }
        }
    }

    if (isset($_POST['create_goal_heart'])) {
        $heart = $_POST['create_goal_heart'];
        foreach ($client_array as $c_id) {
            $isSame =false;
            $query = "SELECT `heart` FROM `goals` WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            $result = $conn->query($query) or die('Query Failed');
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['heart'] == $heart){
                        $isSame = true;
                        break;
                    }
                }
            }
            if($isSame){
                continue;
            }
            $query = "UPDATE `goals` SET heart = '{$heart}' WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            $result = $conn->query($query) or die("Query Failed");
            if ($conn->affected_rows == 0) {
                $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `heart`) VALUES ('{$dietitianuserID}',{$c_id},'{$heart}')";
                $result = $conn->query($query) or die("Query Failed");
            }
            
        }
    }

    if (isset($_POST['create_goal_sleep'])) {
        $sleep = $_POST['create_goal_sleep'];
        foreach ($client_array as $c_id) {
            $isSame =false;
            $query = "SELECT `sleep` FROM `goals` WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            $result = $conn->query($query) or die('Query Failed');
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['sleep'] == $sleep){
                        $isSame = true;
                        break;
                    }
                }
            }
            if($isSame){
                continue;
            }
            $query = "UPDATE `goals` SET sleep = '{$sleep}' WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            echo($query);
            $result = $conn->query($query) or die("Query Failed");
            if ($conn->affected_rows == 0) {
                $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `sleep`) VALUES ('{$dietitianuserID}',{$c_id},'{$sleep}')";
                $result = $conn->query($query) or die("Query Failed");
            }
        }
    }

    if (isset($_POST['create_goal_sleep'])) {
        $sleep = $_POST['create_goal_sleep'];
        foreach ($client_array as $c_id) {
            $isSame =false;
            $query = "SELECT `sleep` FROM `goals` WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            $result = $conn->query($query) or die('Query Failed');
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['sleep'] == $sleep){
                        $isSame = true;
                        break;
                    }
                }
            }
            if($isSame){
                continue;
            }
            $query = "UPDATE `goals` SET sleep = '{$sleep}' WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            echo($query);
            $result = $conn->query($query) or die("Query Failed");
            if ($conn->affected_rows == 0) {
                $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `sleep`) VALUES ('{$dietitianuserID}',{$c_id},'{$sleep}')";
                $result = $conn->query($query) or die("Query Failed");
            }
        }
    }

    if (isset($_POST['create_goal_weight'])) {
        $weight = $_POST['create_goal_weight'];
        foreach ($client_array as $c_id) {
            $isSame =false;
            $query = "SELECT `weight` FROM `goals` WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            $result = $conn->query($query) or die('Query Failed');
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['weight'] == $weight){
                        $isSame = true;
                        break;
                    }
                }
            }
            if($isSame){
                continue;
            }
            $query = "UPDATE `goals` SET weight = '{$weight}' WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            echo($query);
            $result = $conn->query($query) or die("Query Failed");
            if ($conn->affected_rows == 0) {
                $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `weight`) VALUES ('{$dietitianuserID}',{$c_id},'{$weight}')";
                $result = $conn->query($query) or die("Query Failed");
            }
        }
    }

    if (isset($_POST['create_goal_water'])) {
        $water = $_POST['create_goal_water'];
        foreach ($client_array as $c_id) {
            $isSame =false;
            $query = "SELECT `water` FROM `goals` WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            $result = $conn->query($query) or die('Query Failed');
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['water'] == $water){
                        $isSame = true;
                        break;
                    }
                }
            }
            if($isSame){
                continue;
            }
            $query = "UPDATE `goals` SET water = '{$water}' WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            echo($query);
            $result = $conn->query($query) or die("Query Failed");
            if ($conn->affected_rows == 0) {
                $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `water`) VALUES ('{$dietitianuserID}',{$c_id},'{$water}')";
                $result = $conn->query($query) or die("Query Failed");
            }
        }
    }

    if (isset($_POST['create_goal_calorie'])) {
        $calorie = $_POST['create_goal_calorie'];
        foreach ($client_array as $c_id) {
            $isSame =false;
            $query = "SELECT `calorie` FROM `goals` WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            $result = $conn->query($query) or die('Query Failed');
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['calorie'] == $calorie){
                        $isSame = true;
                        break;
                    }
                }
            }
            if($isSame){
                continue;
            }
            $query = "UPDATE `goals` SET calorie = '{$calorie}' WHERE `client_id` = {$c_id} AND `dietition_id` = '{$dietitianuserID}'";
            echo($query);
            $result = $conn->query($query) or die("Query Failed");
            if ($conn->affected_rows == 0) {
                $query = "INSERT INTO `goals`(`dietition_id`, `client_id`, `calorie`) VALUES ('{$dietitianuserID}',{$c_id},'{$calorie}')";
                $result = $conn->query($query) or die("Query Failed");
            }
        }
    }

    
    $conn->close();
    header(("Location: setgoals.php"));
}

include('navbar.php');
$sql = "SELECT GROUP_CONCAT(client_id) FROM `addclient` WHERE dietitianuserID = '{$dietitianuserID}';";
$result = mysqli_query($conn, $sql) or die('failed');
if(mysqli_num_rows($result)>0){
    $allClients = array();
    while($row = mysqli_fetch_assoc($result)){
        $allClients = explode(',',$row['GROUP_CONCAT(client_id)']);
        $map = explode(',',$row['GROUP_CONCAT(client_id)']);
    }
}
function getClientName($ID,$conn,$dietitianuserID){
    $query = "SELECT name FROM `addclient` WHERE client_id = {$ID} AND dietitianuserID = '{$dietitianuserID}'";
    $name = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($name)) {
        return ($row['name']);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
body{
    overflow-x: hidden;
    font-family: 'NATS', sans-serif;
}
.setgoals{
    margin-top: 1rem;
    margin-left: 17rem;
}
.generalgoals{
    display: flex;
    gap: 2rem;
    
    padding-left: 2rem;
}
.tooltip-text {
    visibility: hidden;
    position: absolute;
    z-index: 1;
    width: 22rem;
    color: black;
    font-size: 14px;
    border: 1px solid  #e4e1e1;
    box-shadow: 0 4px 4px rgba(0,0,0,0.12);
    border-radius: 10px;
    padding: 0.4rem;
  }
  
  .hover-text:hover .tooltip-text {
    visibility: visible;
  }
  #right {
    top: -8px;
    left: 120%;
  }
  
  .hover-text {
    position: relative;
    display: inline-block;
    margin: 40px;
    font-family: 'NATS', sans-serif;
    text-align: center;
  }
  .setgoals_contaner1{
    margin-left: 4rem;
    margin-right: 4rem;
    padding-bottom: 2rem;
    border-bottom: 2px solid #EFEFEF;
    display: flex;
    flex-direction: column;
    gap: 3rem;
  }
  .setgoals_button{
    color: white;
    height: 8rem;
    width: 7rem;
    background: linear-gradient(208.27deg, rgba(255, 108, 108, 0.792) 43.71%, rgba(255, 92, 0, 0.416) 95.3%);
    border: 1.31579px solid #FF6666;
    box-shadow: 0px 1.81819px 13.6364px rgba(0, 0, 0, 0.25);
    border-radius: 19.7368px;

  
  }
  #button3{
    background: linear-gradient(217.35deg, #F97EAA 0%, #C389D5 100%) !important;
    border: 1.31579px solid #E266A9 !important;
    
  }
  #button5{
    background: linear-gradient(212.32deg, #633FDD 0%, #AB83F0 93.37%) !important;
    border: 1.31578px solid #7D5DE6 !important;
  }
  #button7{
    background: linear-gradient(38.98deg, #768B93 7.65%, #8FC4C3 87.93%) !important;
border: 1.31578px solid #267E7B !important;
  }
  #button9{
    background: linear-gradient(216.13deg, #5CA7F8 9.2%, #ABB3F0 91.57%) !important;
    border: 1.31579px solid #3A97FF !important;
  }
  #button11{
    background: linear-gradient(37.35deg, #E2809B 0%, #EBD3C8 100%) !important;
border: 1.31578px solid #E3738D !important;
  }
  .setgoals_popup2{
    width: 330px;
    height: 360px;
    background: #FFFFFF;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    padding-left: 2rem;
    padding-right: 2rem;
    display: none;
    background: url('images/Vector1.png');
    background-repeat: no-repeat;
    background-attachment:scroll;
    background-position: bottom right ;
    
    
  
    
  }
  .block1{
    display: flex;
    gap: 5rem;
  }
  .block2{
    display: flex;
    gap: 5rem;
  }
  .firstbutton{
    display: flex;
  }

  #close {
    color: #100e0e;
    float: right;
    font-size: 35px;
    font-weight: bold;
  }
  #close2{
    color: #90AEF4;
    font-size: 1.2rem;
    margin-left: 1.5rem;
  }
  #close2:hover,
  #close2:focus {
    
    cursor: pointer;
  }
  
  #close:hover,
  #close:focus {
    color: rgb(111, 108, 108);
    text-decoration: none;
    cursor: pointer;
  }
  #label1{
    margin-left: 2.5rem;
    width: 184px;
    height: 40px;
    background: #FFFFFF;
    border: 1px solid #DFDFDF;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    color: #ABA3A3;
    padding: 0.5rem;
    text-align: center;
  }
  .setbutton{
    width: 124px;
    height: 45px;
    background: linear-gradient(262.45deg, #FA8686 9.26%, #F1A680 93.19%);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.28);
    border-radius: 10px;
    border: none;
    color: white;
    margin-left: 4rem;
    margin-top: 0.5rem;
    box-sizing: border-box;
  }
  #button4{
    background: linear-gradient(264.28deg, #D483C6 1.62%, #F37FAF 93.12%) !important;

  }
  #button6{
    background: linear-gradient(263.28deg, #AB84F0 0%, #9FB0F2 0.01%, #633FDD 93.31%) !important;
  }
  #button8{
    background: linear-gradient(263.28deg, #8EC2C1 0%, #8CBFBE 0.01%, #788F97 93.31%) !important;
  }
  #button10{
    background: linear-gradient(263.28deg, #FA8686 0%, #9FB0F2 0.01%, #5CA7F8 93.31%) !important;
  }
  #button12{
    background: linear-gradient(263.28deg, #E69BAF 0%, #E69EB0 0.01%, #E07498 93.31%) !important;
  }
  .container1_wrapper1{
    display: flex;
    gap: 5rem;
  }
  .container1_wrapper2{
    display: flex;
    gap: 5rem;
    margin-top: 2rem;
  }
  .leftside_wrapper1{
    width: 620px;
    height: 118px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    background: #FFFFFF;
    border-radius: 15px;
    margin-left: 2.8rem;
    background: url('images/Vector1.png');
    background-repeat: no-repeat;
    background-attachment:scroll;
    background-position: bottom right ;
  }
  #image1{
    margin-top: 2.2rem;
    margin-left: 2rem;
  }
  .leftside_wrapper1{
    display: flex;
    gap: 2rem;
    font-weight: 500;
    font-size: 1.2rem;
    
  }
  #label2{
    background: #FFFFFF;
    border: 1px solid #DFDFDF;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    padding: 0.3rem;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    color: #DDDDDD;
    margin-top: 0.8rem;
    width: 150px;

  }
  #label3{
    background: #FFFFFF;
    border: 1px solid #DFDFDF;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    padding: 0.3rem;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    color: #DDDDDD;
    margin-top: 0.5rem;
    margin-left: 1rem !important;
    text-align: center;

  }
  .userimage{
  border-radius: 15px;
  border: none;
  width: 45px;
height: 45px;
margin-top: 2.5rem;

  }
  .userimage2{
    box-shadow: 0px 1.7079px 4.26974px rgba(0, 0, 0, 0.25);
    border-radius: 8.53948px;
    margin-top: 1rem;
    border: none;
    width: 45px;
  height: 45px;
  
    }
    .userimage3{
      border-radius: 15px;
      border: none;
      width: 45px;
    height: 45px;
    margin-top: 1rem;
    
      }
  .pastreminders_leftside{
    display: flex;
    flex-direction: column;
    gap: 3rem;
  }

  .pastreminders{
    display: flex;
    justify-content:space-between;
    margin-right:4rem;
  }
.rightside_wrapper1{
    width: 347px;
    height: auto;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    padding-top: 2rem;
    display: flex;
    flex-direction: column;
    gap: 0.7rem;
    animation-duration: 1.5s;
    animation-name: slidein;
    
    
    
}
@keyframes slidein {
  from {
    margin-left: 100%;
    
  }

  to {
    margin-left: 0%;
    
  }
}

#rightside_wrapper1{
    display: none;
}
#rightside_wrapper2{
    display: none;
}
#rightside_wrapper3{
    display: none;
}
#rightside_wrapper4{
    display: none;
}
#rightside_wrapper5{
    display: none;
}
#rightside_wrapper6{
    display: none;
}

.searchclient{
    width: 233px;
    height: 45px;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin-top: 1rem;
    margin-left: 1rem;
    padding: 0.4rem;
    font-size: 1.4rem;
}
.bluetext{
    color: #90AEF4;
    font-size: 1.2rem;
    display: flex;
    flex-direction: row;
    padding: 0.5rem;
    align-items: center;
    width: auto;
    height: 35.8px;
    background: #EFF4FF;
    border-radius: 8px;
}
#clientscheck{
    border: 1.84977px solid #7282FB;
    border-radius: 7.3991px;
    color:  #7282FB;
    margin-left: 1rem;
}
#checklabel{
    font-size:1.3rem;
    color: #7282FB ;
    font-weight: 400;
    margin-left: 1rem;
}
.checkbox{
    overflow-y: scroll;
    margin-top: 1rem;
    padding-bottom: 1rem;
}
#vector1{
    position:absolute;  
    left: 515px;
    top: 259.08px;
    background: linear-gradient(180.84deg, #F3F3FF 45.23%, rgba(243, 243, 255, 0.29) 96.71%, #F2F2FF 96.71%);
    transform: rotate(-121.89deg);
}
.mobview_pastgoals{
  display: none;
}
.mobview_wrapper1{
  width: auto;
  height: 300px;
  background: #FFFFFF;
  border-radius: 15px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
  margin-left: 2rem;
  padding: 1rem;
  background: url('images/Vector 1.png');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: bottom left;
}

@media screen and (max-width: 1200px){
    

}
  
  @media screen and (max-width: 720px) {
    .setgoals{
        margin-left: 1rem;
    }
    .tooltip-text{
        width: auto;
    }
    .container1_wrapper1{
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .setgoals_contaner1{
        display: flex;
    flex-direction: column;
    gap:0;
        margin-left: 1rem;
      }
      .setgoals_popup2{
        left: 25px;
        top: 307.5px;
        position: absolute;
      }
      .pastreminders_leftside{
        display: none;
      }
      .pastreminders{
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }
      .mobview_pastgoals{
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }
      .rightside_wrapper1{
        display: flex;
      margin-left:2rem;
      width:auto
      }
      .pastreminders_rightside{
        left: 35px;
        top: 307.5px;

      }
      #mobside_wrapper1{
        display: none;
      }
      #mobside_wrapper2{
        display: none;
      }
      #mobside_wrapper3{
        display: none;
      }
      #mobside_wrapper4{
        display: none;
      }
      #mobside_wrapper5{
        display: none;
      }
      #mobside_wrapper6{
        display: none;
      }
     
      

  }
  
</style>
</head>
<body>

    <div class="setgoals">
        <p style="font-size:2rem; font-weight:400">Set Goals For Clients</p>
        <div class="generalgoals"><div style="font-size:1.5rem; font-weight:400">General Goals</div>
            <div class="hover-text"style="margin-top:0.3rem" ><span class="material-symbols-outlined" style="color:#9C74F5">error</span>
            <span class="tooltip-text" id="right">Set default daily fitness for all the clients from here!</span></div> 
        </div>

        <div class="setgoals_contaner1">
            <div class="container1_wrapper1">
                <div class="block1">
                    <div class="firstbutton">
                        <button class="setgoals_button" id="button1">
                        <img src="images/white1.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.1rem">
                        <span style=" margin-top:1.3rem;margin-left:0.3rem ;font-size:1.4rem">Steps</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals1">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Set Goal</span>
                                <span class="close" id="close">&times;</span>
                            </div>
                            <span style="color:#FF8B8B">Daily Steps</span> <br>
                            <img src="images/setgoals.jpg" style="margin-left:4rem"><br>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                <input name="create_goal_steps" id="label1" min="0" type="number" placeholder="0000 Steps">
                                <input name="create_goal" hidden>
                                <button type="submit" id="button2" class="setbutton">Set</button>  
                            </form>
                        </div>
                        

                    </div>

                    <div class="firstbutton">
                        <button class="setgoals_button" id="button3">
                        <img src="images/white2.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.4rem">
                        <span style=" margin-top:1.3rem;margin-left:0.5rem ;font-size:1.4rem">Heart Rate</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals2">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Heart Rate Goal</span>
                                <span class="close2" id="close">&times;</span>
                            </div>
                            <span style="color:#FF8B8B">Daily Heart Rate</span> <br>
                            <img src="images/heartrate.jpg" style="margin-left:3.8rem"><br>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                <input name="create_goal_heart" id="label1" min="0" type="number" placeholder="0000 BPM">
                                <input name="create_goal" hidden>
                                <button type="submit" id="button4" class="setbutton">Set</button>  
                            </form>
                        </div>
                        

                    </div>


                    
                </div>

                <div class="block2">
                   <div class="firstbutton">
                        <button class="setgoals_button" id="button5">
                        <img src="images/white3.png" style="font-size:2.8rem;font-weight:500; margin-top:0.4rem;margin-left:0.4rem">
                        <span style=" margin-top:2rem;margin-left:0.5rem ;font-size:1.4rem">Sleep</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals3">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Sleep Goal</span>
                                <span class="close3" id="close">&times;</span>
                            </div>
                            <span style="color: #633FDD;">Daily Sleep Hours</span> <br>
                            <img src="images/sleep.jpg" style="margin-left:3.5rem"><br>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <input name="create_goal_sleep" id="label1" min="0" type="number" placeholder="0000 Hours">
                            <input name="create_goal" hidden>
                            <button type="submit" id="button6" class="setbutton">Set</button>
                            </form>
                        </div>
                        

                    </div>

                    <div class="firstbutton">
                        <button class="setgoals_button" id="button7">
                        <img src="images/white6.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">
                        <span style=" margin-top:1rem;margin-left:0.5rem ;font-size:1.4rem">Weight</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals4">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Weight Goal</span>
                                <span class="close4" id="close">&times;</span>
                            </div>
                            <span style="color: #788F97">Daily Weight Count</span> <br>
                            <img src="images/weight.jpg" style="margin-left:3.5rem"><br>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <input name="create_goal_weight" id="label1" min="0" type="number" placeholder="0000 KG">
                            <input name="create_goal" hidden>
                            <button type="submit" id="button8" class="setbutton">Set</button>
                            </form>  
                        </div>
                        

                    </div>
                    
                </div>
                
            </div>

            <div class="container1_wrapper2">
                 <div class="firstbutton">
                        <button class="setgoals_button" id="button9">
                        <img src="images/white5.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.9rem">
                        <span style=" margin-top:1rem;margin-left:0.5rem ;font-size:1.4rem">Water</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals5">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Water Intake Goal</span>
                                <span class="close5" id="close">&times;</span>
                            </div>
                            <span style="color: #5CA7F8">Daily Water Consumption</span> <br>
                            <img src="images/water.jpg" style="margin-left:4rem"><br>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <input name="create_goal_water" id="label1" min="0" type="number" placeholder="0000 liters">
                            <input name="create_goal" hidden>
                            <button type="submit" id="button10" class="setbutton">Set</button>
                            </form>   
                        </div>
                        

                 </div>

                 <div class="firstbutton">
                        <button class="setgoals_button" id="button11">
                        <img src="images/white4.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">
                        <span style=" margin-top:1rem;margin-left:0.5rem ;font-size:1.4rem">Calories</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals6">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Calorie Goal</span>
                                <span class="close6" id="close">&times;</span>
                            </div>
                            <span style="color:  #E48FA7">Daily Calorie Count</span> <br>
                            <img src="images/calorie.jpg" style="margin-left:3rem"><br>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <input name="create_goal_calorie" id="label1" min="0" type="number" placeholder="0000 BPM">
                            <input name="create_goal" hidden>
                            <button type="submit" id="button12" class="setbutton">Set</button>
                            </form>   
                        </div>
                        

                    </div>
                
            </div>
            
        </div>


        <div class="generalgoals"><div style="font-size:1.5rem; font-weight:400;margin-top:1rem">Past Goals</div>
            <div class="hover-text"style="margin-top:1.2rem" ><span class="material-symbols-outlined" style="color:#9C74F5">error</span>
            <span class="tooltip-text" id="right">View all the goals already set for the clients from here!!</span></div> 
        </div>

<!-------------------------------------------------------PAST GOALS START   ----------------------------------------------------------->

        <div class="pastreminders">
            <div class="pastreminders_leftside">

            <!---------------------------------------------------------------------------------------------->
<?php
$map_steps = $map;
$sql_steps = "SELECT steps, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND steps != '' GROUP BY steps ORDER BY time DESC";
$result_steps = mysqli_query($conn, $sql_steps) or die('failed');
if (mysqli_num_rows($result_steps) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_steps)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_steps[$key]);
        }
?>
                <div class="leftside_wrapper1">
                    
                    <div><img src="images/Frame.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#FFA578">Step Goals</span>
                        <span style="color:#FF8B8B">Daily Steps</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem;margin-left:3.6rem ;font-size:1.2rem; font-weight:400">
                        <span >No. of steps</span>
                        <input value="<?php echo($row['steps']) ?>" name="past_goal_steps<?php echo($i) ?>" id="label2" min="0" type="number" placeholder="0000 Steps">
                    </div>
                    <button onclick="showWrapper('stepswrapper<?php echo($i) ?>')" class="userimage" style="background-color: #F3A181 ; position:static;margin-left:0.5rem" id="userimage1"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('steps','past_goal_steps<?php echo($i) ?>','steps_selected<?php echo($i) ?>')" class="userimage" style="background-color: #F3A181;position:static"><img src="images/right.png" ></button>
                    
                </div>
<?php
$i++;
    }
}
?>

                 <!---------------------------------------------------------------------------------------------->
<?php
$map_heart = $map;
$sql_heart = "SELECT heart, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND heart != '' GROUP BY heart ORDER BY time DESC";
$result_heart = mysqli_query($conn, $sql_heart) or die('failed');
if (mysqli_num_rows($result_heart) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_heart)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_heart[$key]);
        }
?>
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-1.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#E882B8">Heart Rate Goal</span>
                        <span style="color:#FF8B8B">Daily Heart Rate</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem;font-size:1.2rem; font-weight:400;margin-left:1.5rem">
                        <span >Beats per minute</span>
                        <input value="<?php echo($row['heart']) ?>" name="past_goal_heart<?php echo($i) ?>" id="label2" min="0" type="number" placeholder="0000 BPM">
                    </div>
                    <button onclick="showWrapper('heartwrapper<?php echo($i) ?>')" class="userimage" style="background-color: #DA83C3;margin-left:0.6rem" id="userimage2"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('heart','past_goal_heart<?php echo($i) ?>','heart_selected<?php echo($i) ?>')" class="userimage" style="background-color: #DA83C3;"><img src="images/right.png" ></button>
                    
                </div>
<?php
$i++;
    }
}
?>


                 <!---------------------------------------------------------------------------------------------->
<?php
$map_water = $map;
$sql_water = "SELECT water, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND water != '' GROUP BY water ORDER BY time DESC";
$result_water = mysqli_query($conn, $sql_water) or die('failed');
if (mysqli_num_rows($result_water) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_water)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_water[$key]);
        }
?>
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-2.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#68A9F7">Water Goal</span>
                        <span style="color:#FF8B8B">Daily Water Intake</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem ;font-size:1.2rem; font-weight:400;margin-left:0.7rem">
                        <span >Quantity</span>
                        <input value="<?php echo($row['water']) ?>" name="past_goal_water<?php echo($i) ?>" id="label2" min="0" type="number" placeholder="0000 Liters">
                    </div>
                    <button onclick="showWrapper('waterwrapper<?php echo($i) ?>')" class="userimage" style="background-color: #68A9F7;margin-left:0.7rem" id="userimage3"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('water','past_goal_water<?php echo($i) ?>','water_selected<?php echo($i) ?>')" class="userimage" style="background-color: #68A9F7;"><img src="images/right.png" ></button>
                    
                </div>
<?php
$i++;
    }
}
?>


                 <!---------------------------------------------------------------------------------------------->
<?php
$map_sleep = $map;
$sql_sleep = "SELECT sleep, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND sleep != '' GROUP BY sleep ORDER BY time DESC";
$result_sleep = mysqli_query($conn, $sql_sleep) or die('failed');
if (mysqli_num_rows($result_sleep) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_sleep)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_sleep[$key]);
        }
?>
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-3.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#805AE5">Sleep Goal</span>
                        <span style="color:#FF8B8B">Daily Sleep Duration</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem;font-size:1.2rem; font-weight:400">
                        <span >Sleep time</span>
                        <input value="<?php echo($row['sleep']) ?>" name="past_goal_sleep<?php echo($i) ?>" id="label2" min="0" type="number" placeholder="0000 Hours">
                    </div>
                    <button onclick="showWrapper('sleepwrapper<?php echo($i) ?>')" class="userimage" style="background-color: #805AE5;margin-left:0.7rem" id="userimage4"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('sleep','past_goal_sleep<?php echo($i) ?>','sleep_selected<?php echo($i) ?>')" class="userimage" style="background-color: #805AE5;"><img src="images/right.png" ></button>
                    
                </div>
<?php
$i++;
    }
}
?>

                 <!---------------------------------------------------------------------------------------------->
<?php
$map_weight = $map;
$sql_weight = "SELECT weight, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND weight != '' GROUP BY weight ORDER BY time DESC";
$result_weight = mysqli_query($conn, $sql_weight) or die('failed');
if (mysqli_num_rows($result_weight) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_weight)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_weight[$key]);
        }
?>
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-4.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#7F9FA4">Weight Goal</span>
                        <span style="color:#FF8B8B">Daily Weight Count</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem;font-size:1.2rem; font-weight:400;margin-left:0.5rem">
                        <span >Weight Count</span>
                        <input value="<?php echo($row['weight']) ?>" name="past_goal_weight<?php echo($i) ?>" id="label2" min="0" type="number" placeholder="0000 KG">
                    </div>
                    <button onclick="showWrapper('weightwrapper<?php echo($i) ?>')" class="userimage" style="background-color: #7F9FA4;position:static;margin-left:0.8rem" id="userimage5"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('weight','past_goal_weight<?php echo($i) ?>','weight_selected<?php echo($i) ?>')" class="userimage" style="background-color: #7F9FA4;position:static"><img src="images/right.png" ></button>
                    
                </div>
<?php
$i++;
    }
}
?>


                 <!---------------------------------------------------------------------------------------------->
<?php
$map_calorie = $map;
$sql_calorie = "SELECT calorie, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND calorie != '' GROUP BY calorie ORDER BY time DESC";
$result_calorie = mysqli_query($conn, $sql_calorie) or die('failed');
if (mysqli_num_rows($result_calorie) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_calorie)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_calorie[$key]);
        }
?>
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-5.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#E39F9A">Calorie Goal</span>
                        <span style="color:#FF8B8B">Daily Calorie Count</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem ;font-size:1.2rem; font-weight:400;margin-left:0.7rem">
                        <span >Calorie Count</span>
                        <input value="<?php echo($row['calorie']) ?>" name="past_goal_calorie<?php echo($i) ?>" id="label2" min="0" type="number" placeholder="0000 Kcal">
                    </div>
                    <button onclick="showWrapper('caloriewrapper<?php echo($i) ?>')" class="userimage" style="background-color: #E39F9A;margin-left:0.8rem" id="userimage6"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('calorie','past_goal_calorie<?php echo($i) ?>','calorie_selected<?php echo($i) ?>')" class="userimage" style="background-color: #E39F9A;"><img src="images/right.png" ></button>
                    
                </div>

<?php
$i++;
    }
}
?>


                
            </div>






<!--------------------------------------MOB View OF past GOALS BUTTONS-------------------------------------------------------->


            <div class="mobview_pastgoals">

<!----------------------------------------------------------------------------------------------------------------------->
<?php
$map_steps = $map;
$sql_steps = "SELECT steps, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND steps != '' GROUP BY steps ORDER BY time DESC";
$result_steps = mysqli_query($conn, $sql_steps) or die('failed');
if (mysqli_num_rows($result_steps) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_steps)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_steps[$key]);
        }
?>
               <div style="display:flex; flex-direction:column;gap:1rem">

               <div class="mobview_wrapper1">
                    <div style="display:flex;justify-content:center;margin-top:0.8rem"><img src="images/Frame.png" style="width:2rem"><span style="color:#FFA578 ; font-size:1.5rem;margin-left:0.5rem">Step Goals</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem;display:flex;justify-content:center">Daily Steps</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;display:flex;justify-content:center">No. of steps</span>
                        <input  value="<?php echo($row['steps']) ?>" name="mob_past_goal_steps<?php echo($i) ?>" id="label3" min="0" type="number" placeholder="0000 Steps">
                    </div> 
                    <div style="display:flex;justify-content:center">
                    <button onclick="showWrapper('mobstepswrapper<?php echo($i) ?>')" class="userimage3" style="background-color: #F3A181 ; position:static" id="mob_userimage1"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('steps','mob_past_goal_steps<?php echo($i) ?>','mob_steps_selected<?php echo($i) ?>')" class="userimage3" style="background-color: #F3A181;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                    </div>
                </div>


                <!------------------------------------------1 wrapper-------------------------------------------------->
            <div class="rightside_wrapper1 sidewrapper mobstepswrapper<?php echo($i) ?>" id="mobside_wrapper1">
                <div style="text-align:center"><img src="images/Frame.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Step Goal</span></div>
                <span style="font-size:1.7rem; display:flex;justify-content:center">Select clients to assign goal</span>
                <div style="display:flex;justify-content:center; gap:1rem;padding-right:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #FFB38E"><img src="images/right.png" ></button>
                    
                </div>
                <div id="mob_steps_selected<?php echo($i) ?>" style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem;margin-right:2.5rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'mob_steps_unselected<?php echo($i) ?>','mob_steps_selected<?php echo($i) ?>','steps','mob_past_goal_steps<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                </div>

                <div id="mob_steps_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                <?php foreach ($map_steps as $r) {
                $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                <div><input onclick="selectClient(this,'mob_steps_selected<?php echo($i) ?>','mob_steps_unselected<?php echo($i) ?>','steps','mob_past_goal_steps<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                <label id="checklabel" ><?php echo($c_name) ?></label></div>
                <?php } ?>
                    
                </div>
            </div>



               </div>
<?php
$i++;
    }
}
?>


<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
<?php
$map_heart = $map;
$sql_heart = "SELECT heart, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND heart != '' GROUP BY heart ORDER BY time DESC";
$result_heart = mysqli_query($conn, $sql_heart) or die('failed');
if (mysqli_num_rows($result_heart) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_heart)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_heart[$key]);
        }
?>      
                 <div class="mobview_wrapper1">
                    <div style="display:flex;justify-content:center;margin-top:0.8rem"><img src="images/Frame-1.png" style="width:2rem"><span style="color:#E882B8 ; font-size:1.5rem;margin-left:0.5rem">Heart Rate Goal</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; display:flex;justify-content:center">Daily Heart Rate</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;display:flex;justify-content:center ">Beats per min</span>
                        <input value="<?php echo($row['heart']) ?>" name="mob_past_goal_heart<?php echo($i) ?>" id="label3" min="0" type="number" placeholder="0000 BPM">
                    </div> 
                    <div style="display:flex;justify-content:center">
                    <button onclick="showWrapper('mobheartwrapper<?php echo($i) ?>')" class="userimage3" style="background-color: #E882B8 ; position:static;" id="mob_userimage2"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('heart','mob_past_goal_heart<?php echo($i) ?>','mob_heart_selected<?php echo($i) ?>')" class="userimage3" style="background-color: #E882B8;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                   </div>
                </div>


                <!-------------------------------------------------2 wrapper------------------------------------------->
             <div class="rightside_wrapper1 sidewrapper mobheartwrapper<?php echo($i) ?>" id="mobside_wrapper2">
                <div style="text-align:center"><img src="images/Frame-1.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Heart Rate Goal</span></div>
                <span style="font-size:1.7rem; display:flex;justify-content:center">Select clients to assign goal</span>
                <div style="display:flex;justify-content:center ;gap:1rem;padding-right:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #E882B8"><img src="images/right.png" ></button>
                    
                </div>
                <div id="mob_heart_unselected<?php echo($i) ?>" style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem;margin-right:2.5rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'mob_heart_unselected<?php echo($i) ?>','mob_heart_selected<?php echo($i) ?>','heart','mob_past_goal_heart<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                </div>

                <div id="mob_heart_selected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                    <?php foreach ($map_heart as $r) {
                    $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                    <div><input onclick="selectClient(this,'mob_heart_selected<?php echo($i) ?>','mob_heart_unselected<?php echo($i) ?>','heart','mob_past_goal_heart<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                    <label id="checklabel" ><?php echo($c_name) ?></label></div>
                    <?php } ?>
                    
                </div>
            </div>

<?php
$i++;
    }
}
?>





    <!------------------------------------------------------------------------------------------------------------------------------------------->        
<?php
$map_water = $map;
$sql_water = "SELECT water, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND water != '' GROUP BY water ORDER BY time DESC";
$result_water = mysqli_query($conn, $sql_water) or die('failed');
if (mysqli_num_rows($result_water) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_water)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_water[$key]);
        }
?>
                <div class="mobview_wrapper1">
                    <div style="display:flex;justify-content:center;margin-top:0.8rem"><img src="images/Frame-2.png" style="width:2rem"><span style="color:#68A9F7 ; font-size:1.5rem;margin-left:0.5rem">Water Goal</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; display:flex;justify-content:center">Daily Water Intake</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;display:flex;justify-content:center ">Quantity</span>
                        <input value="<?php echo($row['water']) ?>" name="mob_past_goal_water<?php echo($i) ?>" id="label3" min="0" type="number" placeholder="0000 Liters">
                    </div> 
                    <div style="display:flex;justify-content:center">
                    <button onclick="showWrapper('mobwaterwrapper<?php echo($i) ?>')" class="userimage3" style="background-color: #68A9F7 ; position:static;" id="mob_userimage3"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('water','mob_past_goal_water<?php echo($i) ?>','mob_water_selected<?php echo($i) ?>')" class="userimage3" style="background-color: #68A9F7;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                    </div>
                </div>



                <!-------------------------------------------------3 wrapper------------------------------------------->
            <div class="rightside_wrapper1 sidewrapper mobwaterwrapper<?php echo($i) ?>" id="mobside_wrapper3">
                <div style="text-align:center"><img src="images/Frame-2.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Water Goal</span></div>
                <span style="font-size:1.7rem; display:flex;justify-content:center">Select clients to assign goal</span>
                <div style="display:flex;justify-content:center; gap:1rem;padding-right:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #68A9F7"><img src="images/right.png" ></button>
                    
                </div>
                <div id="mob_water_unselected<?php echo($i) ?>" style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem;margin-right:2.5rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'mob_water_unselected<?php echo($i) ?>','mob_water_selected<?php echo($i) ?>','water','mob_past_goal_water<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                </div>

                <div id="mob_water_selected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                    <?php foreach ($map_water as $r) {
                    $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                    <div><input onclick="selectClient(this,'mob_water_selected<?php echo($i) ?>','mob_water_unselected<?php echo($i) ?>','water','mob_past_goal_water<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                    <label id="checklabel" ><?php echo($c_name) ?></label></div>
                    <?php } ?>
                    
                </div>
            </div>

<?php
$i++;
    }
}
?>



<!---------------------------------------------------------------------------------------------------------------------------------------------------------------->        
<?php
$map_sleep = $map;
$sql_sleep = "SELECT sleep, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND sleep != '' GROUP BY sleep ORDER BY time DESC";
$result_sleep = mysqli_query($conn, $sql_sleep) or die('failed');
if (mysqli_num_rows($result_sleep) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_sleep)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_sleep[$key]);
        }
?>
                <div class="mobview_wrapper1">
                    <div style="display:flex;justify-content:center;margin-top:0.8rem"><img src="images/Frame-3.png" style="width:2rem"><span style="color:#805AE5 ; font-size:1.5rem;margin-left:0.5rem">Sleep Goal</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem;display:flex;justify-content:center">Daily Sleep Duration</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;display:flex;justify-content:center ">Sleep time</span>
                        <input value="<?php echo($row['sleep']) ?>" name="mob_past_goal_sleep<?php echo($i) ?>" id="label3" min="0" type="number" placeholder="0000 Hours">
                    </div> 
                    <div style="display:flex;justify-content:center">
                    <button onclick="showWrapper('mobsleepwrapper<?php echo($i) ?>')" class="userimage3" style="background-color: #805AE5 ; position:static;" id="mob_userimage4"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('sleep','mob_past_goal_sleep<?php echo($i) ?>','mob_sleep_selected<?php echo($i) ?>')" class="userimage3" style="background-color: #805AE5;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                    </div>
                </div>


                 <!--------------------------------------------------4 wrapper------------------------------------------>
            <div class="rightside_wrapper1 sidewrapper mobsleepwrapper<?php echo($i) ?>" id="mobside_wrapper4">
                <div style="text-align:center"><img src="images/Frame-3.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Sleep Goal</span></div>
                <span style="font-size:1.7rem; display:flex;justify-content:center">Select clients to assign goal</span>
                <div style="display:flex;justify-content:center; gap:1rem ;padding-right:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #805AE5"><img src="images/right.png" ></button>
                    
                </div>
                <div id="mob_sleep_selected<?php echo($i) ?>" style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem;margin-right:2.5rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'mob_sleep_unselected<?php echo($i) ?>','mob_sleep_selected<?php echo($i) ?>','sleep','mob_past_goal_sleep<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                </div>

                <div id="mob_sleep_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                    <?php foreach ($map_sleep as $r) {
                    $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                    <div><input onclick="selectClient(this,'mob_sleep_selected<?php echo($i) ?>','mob_sleep_unselected<?php echo($i) ?>','sleep','mob_past_goal_sleep<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                    <label id="checklabel" ><?php echo($c_name) ?></label></div>
                    <?php } ?>
                </div>
            </div>

<?php
$i++;
    }
}
?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->        
<?php
$map_weight = $map;
$sql_weight = "SELECT weight, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND weight != '' GROUP BY weight ORDER BY time DESC";
$result_weight = mysqli_query($conn, $sql_weight) or die('failed');
if (mysqli_num_rows($result_weight) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_weight)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_weight[$key]);
        }
?>
                 <div class="mobview_wrapper1">
                    <div style="display:flex;justify-content:center;margin-top:0.8rem"><img src="images/Frame-4.png" style="width:2rem"><span style="color:#7F9FA4 ; font-size:1.5rem;margin-left:0.5rem">Weight Goal</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; display:flex;justify-content:center">Daily Weight Count</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;display:flex;justify-content:center ">Weight Count</span>
                        <input value="<?php echo($row['weight']) ?>" name="mob_past_goal_weight<?php echo($i) ?>" id="label3" min="0" type="number" placeholder="0000 KG">
                    </div> 
                    <div style="display:flex;justify-content:center">
                    <button onclick="showWrapper('mobweightwrapper<?php echo($i) ?>')" class="userimage3" style="background-color: #7F9FA4 ; position:static" id="mob_userimage5"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('weight','mob_past_goal_weight<?php echo($i) ?>','mob_weight_selected<?php echo($i) ?>')" class="userimage3" style="background-color: #7F9FA4;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                    </div>
                </div>




                <!-----------------------------------------------5 wrapper--------------------------------------------->
             <div class="rightside_wrapper1 sidewrapper mobweightwrapper<?php echo($i) ?>" id="mobside_wrapper5">
                <div style="text-align:center"><img src="images/Frame-4.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Weight Goal</span></div>
                <span style="font-size:1.7rem; display:flex;justify-content:center">Select clients to assign goal</span>
                <div style="display:flex;justify-content:center; gap:1rem;padding-right:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #7F9FA4"><img src="images/right.png" ></button>
                    
                </div>
                <div id="mob_weight_selected<?php echo($i) ?>" style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem;margin-right:2.5rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'mob_weight_unselected<?php echo($i) ?>','mob_weight_selected<?php echo($i) ?>','weight','mob_past_goal_weight<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                </div>

                <div id="mob_weight_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                    <?php foreach ($map_weight as $r) {
                    $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                    <div><input onclick="selectClient(this,'mob_weight_selected<?php echo($i) ?>','mob_weight_unselected<?php echo($i) ?>','weight','mob_past_goal_weight<?php echo($i) ?>')"  type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                    <label id="checklabel" ><?php echo($c_name) ?></label></div>
                    <?php } ?>
                </div>
            </div>
<?php
$i++;
    }
}
?>



    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->        
<?php
$map_calorie = $map;
$sql_calorie = "SELECT calorie, GROUP_CONCAT(client_id) FROM `goals` WHERE `dietition_id` = '{$dietitianuserID}' AND calorie != '' GROUP BY calorie ORDER BY time DESC";
$result_calorie = mysqli_query($conn, $sql_calorie) or die('failed');
if (mysqli_num_rows($result_calorie) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_calorie)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_calorie[$key]);
        }
?>
                 <div class="mobview_wrapper1">
                    <div style="display:flex;justify-content:center;margin-top:0.8rem"><img src="images/Frame-5.png" style="width:2rem"><span style="color:#E39F9A ; font-size:1.5rem;margin-left:0.5rem">Calorie Count</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; display:flex;justify-content:center">Daily Calorie Count</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;display:flex;justify-content:center ">Calorie Count</span>
                        <input value="<?php echo($row['calorie']) ?>" name="mob_past_goal_calorie<?php echo($i) ?>" id="label3" min="0" type="number" placeholder="0000 Kcal">
                    </div> 
                    <div style="display:flex;justify-content:center">
                    <button onclick="showWrapper('mobcaloriewrapper<?php echo($i) ?>')" class="userimage3" style="background-color: #E39F9A ; position:static" id="mob_userimage6"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button onclick="update_goal('calorie','mob_past_goal_calorie<?php echo($i) ?>','mob_calorie_selected<?php echo($i) ?>')" class="userimage3" style="background-color: #E39F9A;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                    </div>
                </div>

<!-----------------------------------------------------------------------WRAPPER 6------------------------------------------>

                <div class="rightside_wrapper1 sidewrapper mobcaloriewrapper<?php echo($i) ?>" id="mobside_wrapper6">
                <div style="text-align:center"><img src="images/Frame-5.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Calorie Goal</span></div>
                <span style="font-size:1.7rem; display:flex;justify-content:center">Select clients to assign goal</span>
                <div style="display:flex;justify-content:center; gap:1rem;padding-right:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #E39F9A"><img src="images/right.png" ></button>
                    
                </div>
                <div id="mob_calorie_selected<?php echo($i) ?>" style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem;margin-right:2.5rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'mob_calorie_unselected<?php echo($i) ?>','mob_calorie_selected<?php echo($i) ?>','calorie','mob_past_goal_calorie<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                </div>

                <div id="mob_calorie_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                <?php foreach ($map_calorie as $r) {
                $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                <div><input onclick="selectClient(this,'mob_calorie_selected<?php echo($i) ?>','mob_calorie_unselected<?php echo($i) ?>','calorie','mob_past_goal_calorie<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                <label id="checklabel" ><?php echo($c_name) ?></label></div>
                <?php } ?>
                

                    
                </div>
            </div>

<?php
$i++;
    }
}
?>


                
                




            </div>




     <!-------------------------------------------------------------------MOB VIEW CODE ENDS----------------------------------------------------------------------------------------------------------------->       


<!----------------------------------------------------rightside past goals popup div code starts----------------------------------------------------------------------->

            <div class="pastreminders_rightside">

            <!------------------------------------------1 wrapper-------------------------------------------------->
<?php 
$result_steps = mysqli_query($conn, $sql_steps) or die('failed');
if (mysqli_num_rows($result_steps) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_steps)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']); ?>

            <div class="sidewrapper stepswrapper<?php echo($i) ?> rightside_wrapper1" id="rightside_wrapper1">
                <div style="text-align:center"><img src="images/Frame.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Step Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #FFB38E"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div id="steps_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 12px;">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'steps_unselected<?php echo($i) ?>','steps_selected<?php echo($i) ?>','steps','past_goal_steps<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                    </div>
                </div>

                <div id="steps_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                <?php foreach ($map_steps as $r) {
                $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                <div><input onclick="selectClient(this,'steps_selected<?php echo($i) ?>','steps_unselected<?php echo($i) ?>','steps','past_goal_steps<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                <label id="checklabel" ><?php echo($c_name) ?></label></div>
                <?php } ?>
                    
                </div>
            </div>

<?php
$i++;
    }
}
?>




             <!-------------------------------------------------2 wrapper------------------------------------------->
<?php 
$result_heart = mysqli_query($conn, $sql_heart) or die('failed');
if (mysqli_num_rows($result_heart) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_heart)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']); ?>

             <div class="sidewrapper heartwrapper<?php echo($i) ?> rightside_wrapper1" id="rightside_wrapper2">
                <div style="text-align:center"><img src="images/Frame-1.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Heart Rate Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #E882B8"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div id="heart_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 12px;">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem"><?php echo($c_name) ?> <span  onclick="deselectClient(this,'heart_unselected<?php echo($i) ?>','heart_selected<?php echo($i) ?>','heart','past_goal_heart<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                    </div>
                </div>

                <div id="heart_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                <?php foreach ($map_heart as $r) {
                $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                <div><input onclick="selectClient(this,'heart_selected<?php echo($i) ?>','heart_unselected<?php echo($i) ?>','heart','past_goal_heart<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                <label id="checklabel" ><?php echo($c_name) ?></label></div>
                <?php } ?>
                
                </div>
            </div>

<?php
$i++;
    }
}
?>




            <!--------------------------------------------------3 wrapper------------------------------------------>
<?php 
$result_sleep = mysqli_query($conn, $sql_sleep) or die('failed');
if (mysqli_num_rows($result_sleep) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_sleep)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']); ?>
            <div class="sidewrapper sleepwrapper<?php echo($i) ?> rightside_wrapper1" id="rightside_wrapper3">
                <div style="text-align:center"><img src="images/Frame-3.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Sleep Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #805AE5"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div id="sleep_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 12px;">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem"><?php echo($c_name) ?> <span  onclick="deselectClient(this,'sleep_unselected<?php echo($i) ?>','sleep_selected<?php echo($i) ?>','sleep','past_goal_sleep<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                    </div>
                </div>

                <div id="sleep_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                <?php foreach ($map_sleep as $r) {
                $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                <div><input onclick="selectClient(this,'sleep_selected<?php echo($i) ?>','sleep_unselected<?php echo($i) ?>','sleep','past_goal_sleep<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                <label id="checklabel" ><?php echo($c_name) ?></label></div>
                <?php } ?>
                </div>

            </div>
<?php
$i++;
    }
}
?>



            <!-------------------------------------------------4 wrapper------------------------------------------->
<?php 
$result_water = mysqli_query($conn, $sql_water) or die('failed');
if (mysqli_num_rows($result_water) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_water)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']); ?>

            <div class="sidewrapper waterwrapper<?php echo($i) ?> rightside_wrapper1" id="rightside_wrapper4">
                <div style="text-align:center"><img src="images/Frame-2.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Water Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #68A9F7"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div id="water_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 12px;">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'water_unselected<?php echo($i) ?>','water_selected<?php echo($i) ?>','water','past_goal_water<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span><span hidden><?php echo($c) ?></span></span>
                    
                    <?php } ?>
                    </div>
                </div>

                <div id="water_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                <?php foreach ($map_water as $r) {
                $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                <div><input onclick="selectClient(this,'water_selected<?php echo($i) ?>','water_unselected<?php echo($i) ?>','water','past_goal_water<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                <label id="checklabel" ><?php echo($c_name) ?></label></div>
                <?php } ?>
                </div>

            </div>

<?php
$i++;
    }
}
?>




             <!-----------------------------------------------5 wrapper--------------------------------------------->
<?php 
$result_weight = mysqli_query($conn, $sql_weight) or die('failed');
if (mysqli_num_rows($result_weight) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_weight)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']); ?>
             <div class="sidewrapper weightwrapper<?php echo($i) ?> rightside_wrapper1" id="rightside_wrapper5">
                <div style="text-align:center"><img src="images/Frame-4.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Weight Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #7F9FA4"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div id="weight_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 12px;">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'weight_unselected<?php echo($i) ?>','weight_selected<?php echo($i) ?>','weight','past_goal_weight<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                    </div>
                </div>

                <div id="weight_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                <?php foreach ($map_weight as $r) {
                $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                <div><input onclick="selectClient(this,'weight_selected<?php echo($i) ?>','weight_unselected<?php echo($i) ?>','weight','past_goal_weight<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                <label id="checklabel" ><?php echo($c_name) ?></label></div>
                <?php } ?>
                </div>
            </div>
<?php
$i++;
    }
}
?>






            <!-----------------------------------------------6 wrapper--------------------------------------------->
<?php 
$result_calorie = mysqli_query($conn, $sql_calorie) or die('failed');
if (mysqli_num_rows($result_calorie) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_calorie)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']); ?>
            <div class="sidewrapper caloriewrapper<?php echo($i) ?> rightside_wrapper1" id="rightside_wrapper6">
                <div style="text-align:center"><img src="images/Frame-5.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Calorie Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button onclick="hideWrapper()" class="userimage2" style="background-color: #E39F9A"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div id="calorie_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 12px;">
                    <?php foreach ($list as $c) {
                    $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                    <span class="bluetext" style="margin-left:1rem"><?php echo($c_name) ?> <span onclick="deselectClient(this,'calorie_unselected<?php echo($i) ?>','calorie_selected<?php echo($i) ?>','calorie','past_goal_calorie<?php echo($i); ?>')" class="close" id="close2">&times;</span><span hidden><?php echo($c) ?></span></span>
                    <?php } ?>
                    </div>
                </div>

                <div id="calorie_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                <?php foreach ($map_steps as $r) {
                $c_name = getClientName($r, $conn,$dietitianuserID); ?>
                <div><input onclick="selectClient(this,'calorie_selected<?php echo($i) ?>','calorie_unselected<?php echo($i) ?>','calorie','past_goal_calorie<?php echo($i) ?>')" type="checkbox" id="clientscheck" value="<?php echo($r) ?>" >
                <label id="checklabel" ><?php echo($c_name) ?></label></div>
                <?php } ?>
                </div>
            </div>

<?php
$i++;
    }
}
?>

                
            </div>
          
            





        </div>        
</div>

<!--------------------------------------------------------SCRIPT for General Goals---------------------------------->

                        <script>
                        var modal = document.getElementById("setgoals1");
                        var modal2 = document.getElementById("setgoals2");
                        var modal3 = document.getElementById("setgoals3");
                        var modal4 = document.getElementById("setgoals4");
                        var modal5 = document.getElementById("setgoals5");
                        var modal6 = document.getElementById("setgoals6");

                        // Get the button that opens the modal
                        var btn = document.getElementById("button1");
                        var btn3 = document.getElementById("button3");
                        var btn5 = document.getElementById("button5");
                        var btn7 = document.getElementById("button7");
                        var btn9 = document.getElementById("button9");
                        var btn11 = document.getElementById("button11");

                        // Get the button that sets the modal
                        var btn2 = document.getElementById("button2");
                        var btn4 = document.getElementById("button4");
                        var btn6 = document.getElementById("button6");
                        var btn8 = document.getElementById("button8");
                        var btn10 = document.getElementById("button10");
                        var btn12 = document.getElementById("button12");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];
                        var span2 = document.getElementsByClassName("close2")[0];
                        var span3 = document.getElementsByClassName("close3")[0];
                        var span4 = document.getElementsByClassName("close4")[0];
                        var span5 = document.getElementsByClassName("close5")[0];
                        var span6 = document.getElementsByClassName("close6")[0];

                        // When the user clicks the button, open the modal 
                        btn.onclick = function() {
                        modal.style.display = "block";
                        btn.style.display = "none";
                        }
                        btn3.onclick = function() {
                        modal2.style.display = "block";
                        btn3.style.display = "none";
                        }
                        btn5.onclick = function() {
                        modal3.style.display = "block";
                        btn5.style.display = "none";
                        }
                        btn7.onclick = function() {
                        modal4.style.display = "block";
                        btn7.style.display = "none";
                        }
                        btn9.onclick = function() {
                        modal5.style.display = "block";
                        btn9.style.display = "none";
                        }
                        btn11.onclick = function() {
                        modal6.style.display = "block";
                        btn11.style.display = "none";
                        }


                        // When the user clicks the button, sets the modal 
                        btn2.onclick = function() {
                        modal.style.display = "none";
                        btn.style.display = "block";
                        }
                        btn4.onclick = function() {
                        modal2.style.display = "none";
                        btn3.style.display = "block";
                        }
                        btn6.onclick = function() {
                        modal3.style.display = "none";
                        btn5.style.display = "block";
                        }
                        btn8.onclick = function() {
                        modal4.style.display = "none";
                        btn7.style.display = "block";
                        }
                        btn10.onclick = function() {
                        modal5.style.display = "none";
                        btn9.style.display = "block";
                        }
                        btn12.onclick = function() {
                        modal6.style.display = "none";
                        btn11.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                        modal.style.display = "none";
                        btn.style.display = "block";
                        }
                        span2.onclick = function() {
                        modal2.style.display = "none";
                        btn3.style.display = "block";
                        }
                        span3.onclick = function() {
                        modal3.style.display = "none";
                        btn5.style.display = "block";
                        }
                        span4.onclick = function() {
                        modal4.style.display = "none";
                        btn7.style.display = "block";
                        }
                        span5.onclick = function() {
                        modal5.style.display = "none";
                        btn9.style.display = "block";
                        }
                        span6.onclick = function() {
                        modal6.style.display = "none";
                        btn11.style.display = "block";
                        }
                      </script>







<!---------------------------------------------SCRIPT OF RIGHTSIDE POPUP OF PAST GOALS---------------->
                   <script>
                    

                    //  var x = document.getElementById("rightside_wrapper1");
                    //  var y = document.getElementById("rightside_wrapper2");
                    //  var z = document.getElementById("rightside_wrapper3");
                    //  var a = document.getElementById("rightside_wrapper4");
                    //  var b = document.getElementById("rightside_wrapper5");
                    //  var c = document.getElementById("rightside_wrapper6");
                    // var userbtn1 = document.getElementById("userimage1");
                    
                    // userbtn1.onclick = function() {
                            
                    // if (x.style.display === "block") {
                    //     x.style.display = "none";
                    
                    // } else {
                    //     x.style.display = "block";
                    //     y.style.display = "none";
                    //     z.style.display = "none";
                    //     a.style.display = "none";
                    //     b.style.display = "none";
                    //     c.style.display = "none";
                
                    // }
                    // }




                    // var x = document.getElementById("rightside_wrapper1");
                    //  var y = document.getElementById("rightside_wrapper2");
                    //  var z = document.getElementById("rightside_wrapper3");
                    //  var a = document.getElementById("rightside_wrapper4");
                    //  var b = document.getElementById("rightside_wrapper5");
                    //  var c = document.getElementById("rightside_wrapper6");
                    //     var userbtn2 = document.getElementById("userimage2");
                    //     userbtn2.onclick = function() {
                            
                    //     if (y.style.display === "block") {
                    //     y.style.display = "none";
                    
                    // } else {
                    //     y.style.display = "block";
                    //     x.style.display = "none";
                    //     z.style.display = "none";
                    //     a.style.display = "none";
                    //     b.style.display = "none";
                    //     c.style.display = "none";
                
                    // }
                    // }


                    // var x = document.getElementById("rightside_wrapper1");
                    //  var y = document.getElementById("rightside_wrapper2");
                    //  var z = document.getElementById("rightside_wrapper3");
                    //  var a = document.getElementById("rightside_wrapper4");
                    //  var b = document.getElementById("rightside_wrapper5");
                    //  var c = document.getElementById("rightside_wrapper6");
                    //     var userbtn4 = document.getElementById("userimage4");
                    //     userbtn4.onclick = function() {
                            
                    //     if (z.style.display === "block") {
                    //     z.style.display = "none";
                    
                    // } else {
                    //     z.style.display = "block";
                    //     x.style.display = "none";
                    //     y.style.display = "none";
                    //     a.style.display = "none";
                    //     b.style.display = "none";
                    //     c.style.display = "none";
                
                    // }
                    // }

                    // var x = document.getElementById("rightside_wrapper1");
                    //  var y = document.getElementById("rightside_wrapper2");
                    //  var z = document.getElementById("rightside_wrapper3");
                    //  var a = document.getElementById("rightside_wrapper4");
                    //  var b = document.getElementById("rightside_wrapper5");
                    //  var c = document.getElementById("rightside_wrapper6");
                    //     var userbtn3 = document.getElementById("userimage3");
                    //     userbtn3.onclick = function() {
                            
                    //     if (a.style.display === "block") {
                    //     a.style.display = "none";
                    
                    // } else {
                    //     a.style.display = "block";
                    //     x.style.display = "none";
                    //     y.style.display = "none";
                    //     z.style.display = "none";
                    //     b.style.display = "none";
                    //     c.style.display = "none";
                
                    // }
                    // }


                    //  var x = document.getElementById("rightside_wrapper1");
                    //  var y = document.getElementById("rightside_wrapper2");
                    //  var z = document.getElementById("rightside_wrapper3");
                    //  var a = document.getElementById("rightside_wrapper4");
                    //  var b = document.getElementById("rightside_wrapper5");
                    //  var c = document.getElementById("rightside_wrapper6");
                    //     var userbtn5 = document.getElementById("userimage5");
                    //     userbtn5.onclick = function() {
                            
                    //     if (b.style.display === "block") {
                    //     b.style.display = "none";
                    
                    // } else {
                    //     b.style.display = "block";
                    //     x.style.display = "none";
                    //     y.style.display = "none";
                    //     z.style.display = "none";
                    //     a.style.display = "none";
                    //     c.style.display = "none";
                
                    // }
                    // }



                    // var x = document.getElementById("rightside_wrapper1");
                    //  var y = document.getElementById("rightside_wrapper2");
                    //  var z = document.getElementById("rightside_wrapper3");
                    //  var a = document.getElementById("rightside_wrapper4");
                    //  var b = document.getElementById("rightside_wrapper5");
                    //  var c = document.getElementById("rightside_wrapper6");
                    //     var userbtn6 = document.getElementById("userimage6");
                    //     userbtn6.onclick = function() {
                            
                    //     if (c.style.display === "block") {
                    //     c.style.display = "none";
                    
                    // } else {
                    //     c.style.display = "block";
                    //     x.style.display = "none";
                    //     y.style.display = "none";
                    //     z.style.display = "none";
                    //     a.style.display = "none";
                    //     b.style.display = "none";
                
                    // }
                    // }
                        
                </script> 





<!--------------------------------------------Script for mobview side past goals popup------------------------------->
                     <script>

                    //  var e = document.getElementById("mobside_wrapper1");
                    //  var f = document.getElementById("mobside_wrapper2");
                    //  var g = document.getElementById("mobside_wrapper3");
                    //  var h = document.getElementById("mobside_wrapper4");
                    //  var i = document.getElementById("mobside_wrapper5");
                    //  var j = document.getElementById("mobside_wrapper6");
                    //     var mobuserbtn1 = document.getElementById("mob_userimage1");
                    //     mobuserbtn1.onclick = function() {
                            
                    //     if (e.style.display === "block") {
                    //     e.style.display = "none";
                    
                    // } else {
                    //     e.style.display = "block";
                    //     f.style.display = "none";
                    //     g.style.display = "none";
                    //     h.style.display = "none";
                    //     i.style.display = "none";
                    //     j.style.display = "none";
                
                    // }
                    // }



                    // var e = document.getElementById("mobside_wrapper1");
                    //  var f = document.getElementById("mobside_wrapper2");
                    //  var g = document.getElementById("mobside_wrapper3");
                    //  var h = document.getElementById("mobside_wrapper4");
                    //  var i = document.getElementById("mobside_wrapper5");
                    //  var j = document.getElementById("mobside_wrapper6");
                    //     var mobuserbtn2 = document.getElementById("mob_userimage2");
                    //     mobuserbtn2.onclick = function() {
                            
                    //     if (f.style.display === "block") {
                    //     f.style.display = "none";
                    
                    // } else {
                    //     f.style.display = "block";
                    //     e.style.display = "none";
                    //     g.style.display = "none";
                    //     h.style.display = "none";
                    //     i.style.display = "none";
                    //     j.style.display = "none";
                
                
                    // }
                    // }



                    // var e = document.getElementById("mobside_wrapper1");
                    //  var f = document.getElementById("mobside_wrapper2");
                    //  var g = document.getElementById("mobside_wrapper3");
                    //  var h = document.getElementById("mobside_wrapper4");
                    //  var i = document.getElementById("mobside_wrapper5");
                    //  var j = document.getElementById("mobside_wrapper6");
                    //     var mobuserbtn3 = document.getElementById("mob_userimage3");
                    //     mobuserbtn3.onclick = function() {
                            
                    //     if (g.style.display === "block") {
                    //     g.style.display = "none";
                    
                    // } else {
                        
                    //     g.style.display = "block";
                    //     f.style.display = "none";
                    //     e.style.display = "none";
                    //     h.style.display = "none";
                    //     i.style.display = "none";
                    //     j.style.display = "none";
                
                
                    // }
                    // }



                    // var e = document.getElementById("mobside_wrapper1");
                    //  var f = document.getElementById("mobside_wrapper2");
                    //  var g = document.getElementById("mobside_wrapper3");
                    //  var h = document.getElementById("mobside_wrapper4");
                    //  var i = document.getElementById("mobside_wrapper5");
                    //  var j = document.getElementById("mobside_wrapper6");
                    //     var mobuserbtn4 = document.getElementById("mob_userimage4");
                    //     mobuserbtn4.onclick = function() {
                            
                    //     if (h.style.display === "block") {
                    //     h.style.display = "none";
                    
                    // } else {
                    //     h.style.display = "block";
                    //     f.style.display = "none";
                    //     g.style.display = "none";
                    //     e.style.display = "none";
                    //     i.style.display = "none";
                    //     j.style.display = "none";
                
                
                    // }
                    // }

                    // var e = document.getElementById("mobside_wrapper1");
                    //  var f = document.getElementById("mobside_wrapper2");
                    //  var g = document.getElementById("mobside_wrapper3");
                    //  var h = document.getElementById("mobside_wrapper4");
                    //  var i = document.getElementById("mobside_wrapper5");
                    //  var j = document.getElementById("mobside_wrapper6");
                    //     var mobuserbtn5 = document.getElementById("mob_userimage5");
                    //     mobuserbtn5.onclick = function() {
                            
                    //     if (i.style.display === "block") {
                    //     i.style.display = "none";
                    
                    // } else {
                    //     i.style.display = "block";
                    //     f.style.display = "none";
                    //     g.style.display = "none";
                    //     h.style.display = "none";
                    //     e.style.display = "none";
                    //     j.style.display = "none";
                
                
                    // }
                    // }




                    // var e = document.getElementById("mobside_wrapper1");
                    //  var f = document.getElementById("mobside_wrapper2");
                    //  var g = document.getElementById("mobside_wrapper3");
                    //  var h = document.getElementById("mobside_wrapper4");
                    //  var i = document.getElementById("mobside_wrapper5");
                    //  var j = document.getElementById("mobside_wrapper6");
                    //     var mobuserbtn6 = document.getElementById("mob_userimage6");
                    //     mobuserbtn6.onclick = function() {
                            
                    //     if (j.style.display === "block") {
                    //     j.style.display = "none";
                    
                    // } else {
                    //     j.style.display = "block";
                    //     f.style.display = "none";
                    //     g.style.display = "none";
                    //     h.style.display = "none";
                    //     i.style.display = "none";
                    //     e.style.display = "none";
                
                
                    // }
                    // }
                        
                     </script>
<script>
    function showWrapper(toShow){
        const all_wrappers = document.getElementsByClassName('sidewrapper');
        for(let i=0;i<all_wrappers.length;i++){
            all_wrappers[i].style.display = 'none';
        }
        const current_wrapper = document.querySelector('.'+ toShow);
        current_wrapper.style.display ='block';
    }
    function hideWrapper(){
        const all_wrappers = document.getElementsByClassName('sidewrapper');
        for(let i=0;i<all_wrappers.length;i++){
            all_wrappers[i].style.display = 'none';
        }
        window.location.reload();
    }

    // DOM functions

    function getSelectedClients(id){
        const selectedClients = [];
        const selectedClientsColletion = document.getElementById(id).children;
        for(let i=0;i<selectedClientsColletion.length;i++){
            const value = selectedClientsColletion[i].lastElementChild.innerText;
            selectedClients.push(value);
        }
        return selectedClients;
    }
    function update_goal(type,input_name,clients){
        const goal = document.querySelector('input[name ='+input_name+']').value;
        const client_list = getSelectedClients(clients);
        $.ajax({
            type: "POST",
            url: "setgoals.php",
            data: {update_goal: type,clients: client_list,dietitianuserID:'<?php echo($dietitianuserID) ?>',goal:goal},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form');
                window.location.reload();
            }
        });
    }
    function selectClient(client,id_to_add,id_to_remove,type,goal) {
        const add_id = document.getElementById(id_to_add);
        const goal_value = document.querySelector('input[name ='+goal+']').value;
        console.log(goal_value);
        const span = document.createElement("span");
        span.style.marginLeft = '1rem';
        span.innerText = client.nextElementSibling.innerText;
        span.innerHTML += `
        <span onclick="deselectClient(this,'${id_to_remove}','${id_to_add}','${type}','${goal}')" class="close" id="close2">&times;</span><span hidden>${client.value}</span>
        `;
        span.classList.add('bluetext');
        add_id.appendChild(span);
        client.nextElementSibling.remove();
        client.remove();

        $.ajax({
            type: "POST",
            url: "setgoals.php",
            data: {update: type,client: client.value,dietitianuserID:'<?php echo($dietitianuserID) ?>',goal:goal_value},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form');
            }
        });
    }
    function deselectClient(client,id_to_add,id_to_remove,type,goal) {
        const add_id = document.getElementById(id_to_add);
        const div = document.createElement("div");
        div.innerHTML += `
        <input onclick="selectClient(this,'${id_to_remove}','${id_to_add}','${type}','${goal}')" type="checkbox" id="clientscheck" value="${client.nextElementSibling.innerHTML}" >
        <label id="checklabel">${client.parentElement.innerText.slice(0, -1)}</label>
        `;
        add_id.appendChild(div);
        client.parentElement.remove();
        console.log(div);
        $.ajax({
            type: "POST",
            url: "setgoals.php",
            data: {update: type,client: client.nextElementSibling.innerHTML ,dietitianuserID:'<?php echo($dietitianuserID) ?>',goal:0},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form');
            }
        });
    }
</script>





                      
</body>
</html>