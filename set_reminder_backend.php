<?php
$client_array = array(3,4,5);
$dietitianuserID = 'John_wayne';
// Handling Ajax Requests here
if(isset($_POST['sidebarselection'])){
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    if(isset($_POST['water_interval'])){
        $c_id = $_POST['client_id'];
        $d_id = $_POST['dietitianuserID'];
        $water_interval = $_POST['water_interval'];
        $water_amount = $_POST['water_amount'];
        $query = "UPDATE `reminders` SET water_interval = '{$water_interval}' , water_amount = '{$water_amount}' WHERE client_id = {$c_id} AND dietitianuserID = '{$d_id}';";
        $result = $conn->query($query) or die("Query Failed");
        if($conn->affected_rows == 0){
            $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `water_interval`, `water_amount`) VALUES ('{$d_id}',{$c_id},'{$water_interval}','{$water_amount}')";
            $result = $conn->query($query) or die("Query Failed");
            // echo ($query);
        }
        echo ($result);
    }
    if(isset($_POST['bf_time'])){
        $c_id = $_POST['client_id'];
        $d_id = $_POST['dietitianuserID'];
        $bf = $_POST['bf_time'];
        $lunch = $_POST['lunch_time'];
        $snacks = $_POST['snacks_time'];
        $dinner = $_POST['dinner_time'];
        
        $query = "UPDATE `reminders` SET `breakfast_time`='{$bf}',`lunch_time`='{$lunch}',`snacks_time`='{$snacks}',`dinner_time`='{$dinner}' WHERE client_id = {$c_id} AND dietitianuserID = '{$d_id}';";
        $result = $conn->query($query) or die("Query Failed");

        if($conn->affected_rows == 0){
            $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `breakfast_time`, `lunch_time`, `snacks_time`, `dinner_time`) VALUES ('{$d_id}',{$c_id},'{$bf}','{$lunch}', '{$snacks}', '{$dinner}')";
            $result = $conn->query($query) or die("Query Failed");
            // echo ($query);
        }
        echo ($result);
    }
    if(isset($_POST['sleep_time'])){
        $c_id = $_POST['client_id'];
        $d_id = $_POST['dietitianuserID'];
        $sleep_time = $_POST['sleep_time'];
        $wake_time = $_POST['wake_time'];
        $query = "UPDATE `reminders` SET sleep_time = '{$sleep_time}' , wake_time = '{$wake_time}' WHERE client_id = {$c_id} AND dietitianuserID = '{$d_id}';";
        $result = $conn->query($query) or die("Query Failed");
        if($conn->affected_rows == 0){
            $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `sleep_time`, `wake_time`) VALUES ('{$d_id}',{$c_id},'{$sleep_time}','{$wake_time}')";
            $result = $conn->query($query) or die("Query Failed");
            // echo ($query);
        }
        echo ($result);
    }

    $conn->close();
    exit();
}

if(isset($_POST['update_all'])){
    
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    if(isset($_POST['water_interval'])){
        $c_ids = $_POST['client_id'];
        $d_id = $_POST['dietitianuserID'];
        $water_interval = $_POST['water_interval'];
        $water_amount = $_POST['water_amount'];
        foreach ($c_ids as $c_id){
            echo ('inside if');
            $query = "UPDATE `reminders` SET water_interval = '{$water_interval}' , water_amount = '{$water_amount}' WHERE client_id = {$c_id} AND dietitianuserID = '{$d_id}';";
            $result = $conn->query($query) or die("Query Failed");
            if($conn->affected_rows == 0){
                $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `water_interval`, `water_amount`) VALUES ('{$d_id}',{$c_id},'{$water_interval}','{$water_amount}')";
                $result = $conn->query($query) or die("Query Failed");
            }

        }
        echo ($result);
    }

    if(isset($_POST['bf_time'])){
        $c_ids = $_POST['client_id'];
        $d_id = $_POST['dietitianuserID'];
        $bf = $_POST['bf_time'];
        $lunch = $_POST['lunch_time'];
        $snacks = $_POST['snacks_time'];
        $dinner = $_POST['dinner_time'];
        foreach ($c_ids as $c_id){
            $query = "UPDATE `reminders` SET `breakfast_time`='{$bf}',`lunch_time`='{$lunch}',`snacks_time`='{$snacks}',`dinner_time`='{$dinner}' WHERE client_id = {$c_id} AND dietitianuserID = '{$d_id}';";
            $result = $conn->query($query) or die("Query Failed");
            if($conn->affected_rows == 0){
                $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `breakfast_time`, `lunch_time`, `snacks_time`, `dinner_time`) VALUES ('{$d_id}',{$c_id},'{$bf}','{$lunch}', '{$snacks}', '{$dinner}')";
                $result = $conn->query($query) or die("Query Failed");
            }

        }
        echo ($result);
    }
    if(isset($_POST['sleep_time'])){
        $c_ids = $_POST['client_id'];
        $d_id = $_POST['dietitianuserID'];
        $sleep_time = $_POST['sleep_time'];
        $wake_time = $_POST['wake_time'];
        foreach ($c_ids as $c_id){
            // echo ('inside if');
            $query = "UPDATE `reminders` SET sleep_time = '{$sleep_time}' , wake_time = '{$wake_time}' WHERE client_id = {$c_id} AND dietitianuserID = '{$d_id}';";
            $result = $conn->query($query) or die("Query Failed");
            if($conn->affected_rows == 0){
                $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `sleep_time`, `wake_time`) VALUES ('{$d_id}',{$c_id},'{$sleep_time}','{$wake_time}')";
                $result = $conn->query($query) or die("Query Failed");
            }

        }
        echo ($result);
    }
    $conn->close();
    exit();
}

// New Reminder Form 
if(isset($_POST['create_reminder'])){
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    if (isset($_POST['create_reminder_water'])) {
        $water_interval = $_POST['water_interval'];
        $water_amount = $_POST['water_amount'];
        foreach ($client_array as $c_id) {
            $query = "UPDATE `reminders` SET water_interval = '{$water_interval}' , water_amount = '{$water_amount}' WHERE client_id = {$c_id} AND dietitianuserID = '{$dietitianuserID}';";
            $result = $conn->query($query) or die("Query Failed");
            if ($conn->affected_rows == 0) {
                $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `water_interval`, `water_amount`) VALUES ('{$dietitianuserID}',{$c_id},'{$water_interval}','{$water_amount}')";
                $result = $conn->query($query) or die("Query Failed");
            }

        }
    }

    if(isset($_POST['create_reminder_calorie'])){
        $conn = new mysqli("localhost", "root", "", "infits");
        if($conn->connect_error){
            die("Connection failed :" . $conn->connect_error);
        }
        $bf = $_POST['bf_time'];
        $lunch = $_POST['lunch_time'];
        $snacks = $_POST['snacks_time'];
        $dinner = $_POST['dinner_time'];
        foreach ($client_array as $c_id){

            $query = "UPDATE `reminders` SET `breakfast_time`='{$bf}',`lunch_time`='{$lunch}',`snacks_time`='{$snacks}',`dinner_time`='{$dinner}' WHERE client_id = {$c_id} AND dietitianuserID = '{$dietitianuserID}';";
            echo ($query);
            echo ('<br>');
            $result = $conn->query($query) or die("Query Failed");
            if($conn->affected_rows == 0){
                $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `breakfast_time`, `lunch_time`, `snacks_time`, `dinner_time`) VALUES ('{$dietitianuserID}',{$c_id},'{$bf}','{$lunch}', '{$snacks}', '{$dinner}')";
                $result = $conn->query($query) or die("Query Failed");
            }
        }
    }

    if(isset($_POST['sleep_time'])){
        $sleep_time = $_POST['sleep_time'];
        $wake_time = $_POST['wake_time'];
        foreach ($client_array as $c_id){
            $query = "UPDATE `reminders` SET sleep_time = '{$sleep_time}' , wake_time = '{$wake_time}' WHERE client_id = {$c_id} AND dietitianuserID = '{$dietitianuserID}';";
            $result = $conn->query($query) or die("Query Failed");
            if($conn->affected_rows == 0){
                $query = "INSERT INTO `reminders`(`dietitianuserID`, `client_id`, `sleep_time`, `wake_time`) VALUES ('{$dietitianuserID}',{$c_id},'{$sleep_time}','{$wake_time}')";
                $result = $conn->query($query) or die("Query Failed");
            }
        }
    }
    $conn->close();
    header(("Location: set_reminder_backend.php"));
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Final Reminder</title>
</head>
<style>
    body{
        overflow-x: hidden;
    }
    .main{
        font-family: 'NATS';
    }
    .ml{
        margin-left: 40px;
    }
    .pl{
        padding-left: 40px;
    }
    .heading{
        font-style: normal;
        font-weight: 400;
        font-size: 48px;
        line-height: 101px;
        display: flex;
        align-items: center;
        letter-spacing: -0.114286px;
        color: #202224;
    }
    .sub-heading{
        font-style: normal;
        font-weight: 400;
        font-size: 35px;
        line-height: 74px;
    }
    .cards{
        display: flex;
        align-items: center;
        gap: 5%;
    }
    .set-reminder{
        position: relative;
    }
    .close-btn {
    position: absolute;
    top: 0;
    right: 0;
    margin: 20px 30px 0 0;
    cursor: pointer;
    }
    #set-card-water{
        display: none;
    }
    #set-card-calorie{
        display: none;
    }
    #set-card-sleep{
        display: none;
    }
    form.calorie-form {
        display: flex;
        flex-wrap: wrap;
    }

    .sr-1 {
        width: 50%;
    }

    .sr-2 {
        width: 50%;
    }

    .sr-3 {
        width: 50%;
    }

    .sr-4 {
        width: 50%;
    }
    .set-card {
        position: absolute;
        z-index: 9;
        width: 465px;
        height: 357.38px;
        background: linear-gradient(59.46deg, #FBB3F0 0.04%, #5CA7F8 100%);
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        display: flex;
        padding: 25px;
        justify-content: center;
        align-items: center;
        transition: 0.5s ease-in-out;
    }
    .sr-inputs{
        width: 75%;
    }
    .sr-inputs select{
        width: 95%;
    }
    .card{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        height: 137px;
        width: 224px;
        border-radius: 20px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.25);
        transition: 0.3s ease-in-out;
    }
    .card img{
        height: 30px;
        width: 30px;
    }
    .card span{
        width: 118px;
        font-style: normal;
        font-weight: 400;
        font-size: 25px;
        line-height: 29px;
        text-align: center;
        color: #FFFFFF;
    }
    .card0{
        background: linear-gradient(216.13deg, #5CA7F8 9.2%, #ABB3F0 91.57%);
        border: 1px solid #3A97FF;
    }
    .card1{
        background: linear-gradient(37.35deg, #E2809B 0%, #EBD3C8 100%);
        border: 1px solid #E3738D;
    }
    .card2{
        background: linear-gradient(37.35deg, #633FDD 0%, #AB84F0 100%);
        border: 1px solid #E3738D;
    }
    .bottom{
        position: relative;
    }
    .client-list-container {
        display: flex;
        justify-content: center;
        padding-top: 40px;
    }
    .client_wrapper {
        display: flex;
        position: absolute;
        right: -350px;
        transition: 0.5s ease-in-out;
        flex-direction: column;
        width: 347px;
        /* height: 610px; */
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 15px;
    }
    
    .wrapper-top {
        /* height: 45%; */
        padding-bottom: 25px;
    }
    .searchclient{
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        height: 45px;
    }
    .searchclient img{
        margin: 0 5px;
    }
    .searchclient input {
        border: none;
        height: 100%;
        padding: 10px 5px;
    }
    .searchclient input:focus{
        outline: none;
    }
    .wrapper-bottom {
        min-height: 400px;
        overflow-y: scroll;
    }
    .wrapper-bottom::-webkit-scrollbar{
        display: none;
    }
    .client_wrapper .checkbox {
        display: flex;
        flex-direction: column;
        /* margin-top: 30px; */
    }
    .client-name {
        display: flex;
        gap: 15px;
    }
    .client-name input{
        scale: 1.5;
        background: #FFFFFF;
        border: 1.84977px solid #7282FB;
        border-radius: 7.3991px;

    }
    .client-name label{
        font-style: normal;
        font-weight: 400;
        font-size: 26px;
        line-height: 55px;
        color: #90AEF4;
    }
    .bluetext{
        color: #90AEF4;
        font-size: 17px;
        display: flex;
        flex-direction: row;
        padding: 0.5rem;
        align-items: center;
        width: auto;
        height: 35.8px;
        background: #EFF4FF;
        border-radius: 8px;
    }
    .close-cut {
    margin-left: 10px;
    cursor: pointer;
    }
    .pr-container{
        width: 708px;
        /* height: 118px; */
    }
    .pr-heading{
        font-style: normal;
        font-weight: 400;
        font-size: 25px;
        line-height: 117%;
        color: #61A8F8;
    }
    .past-reminder {
        display: flex;
        flex-direction: column;
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 15px;
        padding: 10px;
        margin-bottom: 20px;
        width: 708px;
        height: 118px;
    }
    .past-card {
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .pc-left,
    .pc-middle{
        width: 42%;
    }
    .pc-left select,
    .pc-middle select{
        width: 95%;
    }
    .pc-right {
    width: 10%;
    display: flex;
    flex-direction: column;
    gap: 15px;
    }
    .pc-title{
        font-style: normal;
        font-weight: 700;
        font-size: 17px;
        line-height: 23px;
        color: #000000;
        margin-block: 5px;
    }
    .calorie-input {
        width: 45%;
    }


</style>
<body>
    
<div class="main">
    <!-- top -->
    <div class="top">
        <!-- heading  -->
        <div class="row">
            <div class="col">
                <h1 class="ml heading">Set Reminder for clients</h1>
            </div>
        </div>
        <!-- heading End -->
        <!-- sub heading -->
        <div class="row">
            <div class="col">
                <h3 class="ml sub-heading">General Reminder</h3>
            </div>
        </div>
        <!-- sub heading -->

        <!-- top cards -->
        <div class="row">
            <div class="col">
                <div class="cards ml">
                    <!-- set reminder 1 -->
                    <div class="set-reminder">
                        <!-- set pop 1 -->
                        <div id="set-card-water" class="set-card">
                            <span class="close-btn" onclick="hideSetdialog('set-card-water','card1')">X</span>
                            <div class="sr-inputs">
                                <h2>Water Intake Reminder</h2>
                                <p>Hourly water Intake Reminder</p>
                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <div class="sr-1">
                                        <p class="pc-title">Duration</p>
                                        <select name="water_interval" id="">
                                            <option value="30 Min">30 Min</option>
                                            <option value="1 Hour">1 Hour</option>
                                            <option value="2 Hour">2 Hour</option>
                                            <option value="3 Hour">3 Hour</option>
                                            <option value="4 Hour">4 Hour</option>
                                        </select>
                                    </div>
                                    <div class="sr-2">
                                        <p class="pc-title">Duration</p>
                                        <select name="water_amount" id="">
                                            <option value="1 Glass">1 Glass</option>
                                            <option value="2 Glasses">2 Glasses</option>
                                            <option value="3 Glasses">3 Glasses</option>
                                            <option value="4 Glasses">4 Glasses</option>
                                        </select>
                                    </div>
                                    <input hidden name="create_reminder">
                                    <button name="create_reminder_water" type="submit">Set</button>
                                </form>

                            </div>
                            <div class="sr-img">
                                <img src="images/man_drinking_water.png" alt="">
                            </div>
                        </div>
                        <!-- set pop 1 -->
                        <!-- card 1 -->
                        <div id="card0" class="card card0" onclick="showSetDialog('set-card-water','card1')">
                            <img src="./images/WaterDrop.svg" alt="">
                            <span>Water Intake Reminder</span>
                        </div>
                        <!-- card 1 -->
                    </div>
                    <!-- set reminder 1 -->







                    <!-- set reminder 2 -->
                    <div class="set-reminder">
                        <!-- set pop 2 -->
                        <div id="set-card-calorie" class="set-card">
                            <span class="close-btn" onclick="hideSetdialog('set-card-calorie','card2')">X</span>
                            <div class="sr-inputs">
                                <h2>Calorie Intake Reminder</h2>
                                <p>Hourly water Intake Reminder</p>
                                <form class="calorie-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
                                    <div class="sr-1">
                                        <p class="pc-title">BreakFast</p>
                                        <select name="bf_time" id="">
                                            <option value="07:00 AM">07:00 AM</option>
                                            <option value="07:30 AM">07:30 AM</option>
                                            <option value="08:00 AM">08:00 AM</option>
                                            <option value="08:30 AM">08:30 AM</option>
                                            <option value="09:00 AM">09:00 AM</option>
                                        </select>
                                    </div>
                                    <div class="sr-2">
                                        <p class="pc-title">Lunch</p>
                                        <select name="lunch_time" id="">
                                            <option value="07:30 PM">07:30 PM</option>
                                            <option value="08:00 PM">08:00 PM</option>
                                            <option value="08:30 PM">08:30 PM</option>
                                            <option value="09:00 PM">09:00 PM</option>
                                            <option value="09:30 PM">09:30 PM</option>
                                        </select>
                                    </div>
                                    <div class="sr-3">
                                        <p class="pc-title">Snacks</p>
                                        <select name="snacks_time" id="">
                                            <option value="04:00 PM">04:00 PM</option>
                                            <option value="04:30 PM">04:30 PM</option>
                                            <option value="05:00 PM">05:00 PM</option>
                                        </select>
                                    </div>
                                    <div class="sr-4">
                                        <p class="pc-title">Dinner</p>
                                        <select name="dinner_time" id="">
                                            <option value="07:30 PM">07:30 PM</option>
                                            <option value="08:00 PM">08:00 PM</option>
                                            <option value="08:30 PM">08:30 PM</option>
                                            <option value="09:00 PM">09:00 PM</option>
                                            <option value="09:30 PM">09:30 PM</option>
                                        </select>
                                    </div>
                                    <input hidden name="create_reminder">
                                    <button name="create_reminder_calorie" type="submit">Set</button>
                                </form>

                            </div>
                            <div class="sr-img">
                                <img src="images/man_drinking_water.png" alt="">
                            </div>
                        </div>
                        <!-- set pop 2 -->
                        <!-- card 2 -->
                        <div id="card1" class="card card1" onclick="showSetDialog('set-card-calorie','card2')">
                            <img src="./images/folk.svg" alt="">
                            <span>Eating Reminder</span>
                        </div>
                        <!-- card 2 -->
                    </div>
                    <!-- set reminder 2 -->




                    <!-- set reminder 3 -->
                    <div class="set-reminder">
                        <!-- set pop 3 -->
                        <div id="set-card-sleep" class="set-card">
                            <span class="close-btn" onclick="hideSetdialog('set-card-sleep','')">X</span>
                            <div class="sr-inputs">
                                <h2>Sleep Reminder</h2>
                                <p>Hourly water Intake Reminder</p>
                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method= "POST">
                                    <div class="sr-1">
                                        <p class="pc-title">Duration</p>
                                        <select name="sleep_time" id="">
                                            <option value="09:30 PM">09:30 PM</option>
                                            <option value="10:00 PM">10:00 PM</option>
                                            <option value="11:00 PM">11:00 PM</option>
                                            <option value="11:30 PM">11:30 PM</option>
                                            <option value="12:00 AM">12:00 AM</option>
                                        </select>
                                    </div>
                                    <div class="sr-2">
                                        <p class="pc-title">Duration</p>
                                        <select name="wake_time" id="">
                                            <option value="05:00 AM">05:00 AM</option>
                                            <option value="05:15 AM">05:15 AM</option>
                                            <option value="05:30 AM">05:30 AM</option>
                                            <option value="05:45 AM">05:45 AM</option>
                                            <option value="06:00 AM">06:00 AM</option>
                                        </select>
                                    </div>
                                    <input hidden name="create_reminder">
                                    <button name="create_reminder_sleep" type="submit">Set</button>
                                </form>

                            </div>
                            <div class="sr-img">
                                <img src="images/man_drinking_water.png" alt="">
                            </div>
                        </div>
                        <!-- set pop 3 -->
                        <!-- card 3 -->
                        <div id="card2" class="card card2" onclick="showSetDialog('set-card-sleep','')">
                            <img src="./images/moonStar.svg" alt="">
                            <span>Sleep Reminder</span>
                        </div>
                        <!-- card 3 -->
                    </div>
                    <!-- set reminder 3 -->
                </div>
            </div>
        </div>
        <!-- top cards -->
        <script>
            function showSetDialog(divid,cardid){
                const showDialog = document.getElementById(divid);
                const allcards = document.getElementsByClassName('set-card');
                const allcardbtn = document.getElementsByClassName('card');
                for(let i=0;i<allcards.length;i++){
                    allcards[i].style.display = "none";
                }
                for(let i=0;i<allcardbtn.length;i++){
                    allcardbtn[i].style.marginLeft = "0px";
                }
                if(cardid !=""){
                    document.getElementById(cardid).style.marginLeft = "230px";
                }
                showDialog.style.display = "flex";
            }
            function hideSetdialog(divid,cardid){
                const hideDialog = document.getElementById(divid);
                if(cardid !=""){
                    document.getElementById(cardid).style.marginLeft = "0px";
                }
                hideDialog.style.display = "none";
            }
        </script>
    
    </div>
    <!-- top end --> 

    <!-- bottom start -->
    <div class="bottom">
        <div class="row" style="padding-bottom: 320px;">
            <!-- Sub heading -->
            <div class="col-12">
                <h3 class="pl sub-heading">Past Reminder</h3>
            </div>
            <!-- Sub heading -->
            <!-- Past Cards col-8 -->
            <div class="col-8">
                <!-- card 1 -->
<?php
$map_water = $map;
$sql_water = "SELECT water_interval, water_amount, GROUP_CONCAT(client_id) FROM `reminders` WHERE dietitianuserID = '{$dietitianuserID}' AND water_interval != '' OR water_interval IS NULL GROUP BY water_interval , water_amount ORDER BY time DESC;";
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
                <div class="pl pr-container">
                    <p class="pr-heading"><img src="" alt="">Water Intake Reminder</p>
                    <div class="past-reminder pr-water">
                        <form id="" action="" method="POST">
                            <div class="past-card">
                                <div class="pc-left">
                                    <p class="pc-title">Interval</p>
                                    <select name="" id="water_interval<?php echo($i) ?>">
                                        <option selected value="<?php echo ($row['water_interval']) ?>"><?php echo ($row['water_interval']) ?></option>
                                        <option value="30 Min">30 Min</option>
                                        <option value="1 Hour">1 Hour</option>
                                        <option value="2 Hour">2 Hour</option>
                                        <option value="3 Hour">3 Hour</option>
                                        <option value="4 Hour">4 Hour</option>
                                    </select>
                                </div>
                                <div class="pc-middle">
                                    <p class="pc-title">Amount</p>
                                    <select name="" id="water_amount<?php echo($i) ?>">
                                        <option selected value="<?php echo ($row['water_amount']) ?>"><?php echo ($row['water_amount']) ?></option>
                                        <option value="1 Glass">1 Glass</option>
                                        <option value="2 Glasses">2 Glasses</option>
                                        <option value="3 Glasses">3 Glasses</option>
                                        <option value="4 Glasses">4 Glasses</option>
                                    </select>
                                </div>
                                <div class="pc-right">
                                    <button class="pc-btn1" type="button"  onclick="showSelectClient('water_wrapper<?php echo($i) ?>')">c</button>
                                    <button type="button" id="savereminderwaterpc" onclick="submitForm_water('water_selected<?php echo($i) ?>','water_interval<?php echo($i) ?>','water_amount<?php echo($i) ?>')" class="pc-btn2">T</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<?php
$i++;
    }
} ?>
                <!-- card 1 -->
                <!-- card 2 -->
<?php
$map_calorie = $map;
$sql_calorie = "SELECT breakfast_time , lunch_time, snacks_time, dinner_time, GROUP_CONCAT(client_id) FROM `reminders` WHERE dietitianuserID = '{$dietitianuserID}' AND breakfast_time != '' OR breakfast_time IS NULL GROUP BY breakfast_time , lunch_time, snacks_time, dinner_time ORDER BY time DESC;";
$result_calorie = mysqli_query($conn, $sql_calorie) or die('failed');
if (mysqli_num_rows($result_calorie) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_calorie)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        // echo ('<pre>');
        // print_r($row);
        // echo ('</pre>');
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_calorie[$key]);
        }
    // }
// }
// die();
?>
                <div class="pl pr-container">
                    <p class="pr-heading"><img src="" alt="">Eat  Reminder</p>
                    <div class="past-reminder pr-calorie">
                        <form id="" action="" method="POST">
                            <div class="past-card">
                                <div class="pc-left" style="display: flex;justify-content: space-between;">
                                    <div class="calorie-input">
                                        <p class="pc-title">Breakfast</p>
                                        <select name="" id="bf_time<?php echo($i) ?>">
                                            <option selected value="<?php echo ($row['breakfast_time']) ?>"><?php echo ($row['breakfast_time']) ?></option>
                                            <option value="07:00 AM">07:00 AM</option>
                                            <option value="07:30 AM">07:30 AM</option>
                                            <option value="08:00 AM">08:00 AM</option>
                                            <option value="08:30 AM">08:30 AM</option>
                                            <option value="09:00 AM">09:00 AM</option>
                                        </select>
                                    </div>
                                    <div class="calorie-input">
                                        <p class="pc-title">Lunch</p>
                                        <select name="" id="lunch_time<?php echo($i) ?>">
                                            <option selected value="<?php echo ($row['lunch_time']) ?>"><?php echo ($row['lunch_time']) ?></option>
                                            <option value="12:30 PM">12:30 PM</option>
                                            <option value="01:00 PM">01:00 PM</option>
                                            <option value="01:30 PM">01:30 PM</option>
                                            <option value="02:00 PM">02:00 PM</option>
                                            <option value="02:30 PM">02:30 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pc-middle" style="display: flex;justify-content: space-between;">
                                    <div class="calorie-input">
                                        <p class="pc-title">Snacks</p>
                                        <select name="" id="snacks_time<?php echo($i) ?>">
                                            <option selected value="<?php echo ($row['snacks_time']) ?>"><?php echo ($row['snacks_time']) ?></option>
                                            <option value="04:00 PM">04:00 PM</option>
                                            <option value="04:30 PM">04:30 PM</option>
                                            <option value="05:00 PM">05:00 PM</option>
                                        </select>
                                    </div>
                                    <div class="calorie-input">
                                        <p class="pc-title">Dinner</p>
                                        <select name="" id="dinner_time<?php echo($i) ?>">
                                            <option selected value="<?php echo ($row['dinner_time']) ?>"><?php echo ($row['dinner_time']) ?></option>
                                            <option value="07:30 PM">07:30 PM</option>
                                            <option value="08:00 PM">08:00 PM</option>
                                            <option value="08:30 PM">08:30 PM</option>
                                            <option value="09:00 PM">09:00 PM</option>
                                            <option value="09:30 PM">09:30 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pc-right">
                                    <button class="pc-btn1" type="button"  onclick="showSelectClient('calorie_wrapper<?php echo($i) ?>')">c</button>
                                    <button type="button" id="savereminderwaterpc" onclick="submitForm_calorie('calorie_selected<?php echo($i) ?>' , 'bf_time<?php echo($i) ?>' ,'lunch_time<?php echo($i) ?>', 'snacks_time<?php echo($i) ?>', 'dinner_time<?php echo($i) ?>')" class="pc-btn2">T</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<?php
$i++;
    }
} ?>
                <!-- card 2 -->
                <!-- card 3 -->
<?php
$map_sleep = $map;
$sql_sleep = "SELECT sleep_time ,wake_time, GROUP_CONCAT(client_id) FROM `reminders` WHERE dietitianuserID = '{$dietitianuserID}' AND sleep_time != ''  GROUP BY sleep_time ,wake_time ORDER BY time DESC;";
$result_sleep = mysqli_query($conn, $sql_sleep) or die('failed');
if (mysqli_num_rows($result_sleep) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_sleep)) {
        // echo ('<pre>');
        // print_r($row);
        // echo ('</pre>');
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
        foreach ($list as $c) {
            $key = array_search($c, $allClients);
            unset($map_sleep[$key]);
        }
?>
                <div class="pl pr-container">
                    <p class="pr-heading"><img src="" alt="">Sleep Reminder</p>
                    <div class="past-reminder pr-water">
                        <form id="" action="" method="POST">
                            <div class="past-card">
                                <div class="pc-left">
                                    <p class="pc-title">Sleep Time</p>
                                    <select name="" id="sleep_time<?php echo($i) ?>">
                                        <option value="<?php echo($row['sleep_time']) ?>"><?php echo($row['sleep_time']) ?></option>
                                        <option value="09:30 PM">09:30 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                        <option value="12:00 AM">12:00 AM</option>
                                    </select>
                                </div>
                                <div class="pc-middle">
                                    <p class="pc-title">Wake Time</p>
                                    <select name="" id="wake_time<?php echo($i) ?>">
                                        <option value="<?php echo($row['wake_time']) ?>"><?php echo($row['wake_time']) ?></option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="05:15 AM">05:15 AM</option>
                                        <option value="05:30 AM">05:30 AM</option>
                                        <option value="05:45 AM">05:45 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                    </select>
                                </div>
                                <div class="pc-right">
                                    <button class="pc-btn1" type="button"  onclick="showSelectClient('sleep_wrapper<?php echo($i) ?>')">c</button>
                                    <button type="button" onclick="submitForm_sleep('sleep_selected<?php echo($i) ?>','sleep_time<?php echo($i) ?>','wake_time<?php echo($i) ?>')" id="savereminderwaterpc" class="pc-btn2">T</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<?php
$i++;
    }
} ?>
                <!-- card 3 -->

            </div>
            <!-- Past Cards col-8 end -->
            <!-- Side Wrapper col-4 -->
            <div class="col-4">
                <div class="client-list-container">
                    <!-- Side Wrapper 1 Water -->
<?php 
$result_water = mysqli_query($conn, $sql_water) or die('failed');
if (mysqli_num_rows($result_water) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_water)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
?>
                    <div class="client_wrapper" id="water_wrapper<?php echo($i) ?>">
                            <div class="wrapper-top">
                                <div style="text-align:center"><img src="images/Frame-2.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Water Goal</span>
                                </div>
                                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                                <div style="display:flex;justify-content: space-between;padding: 0 30px;margin: 20px 0;">
                                    <div class="searchclient">
                                    <img src="images/greyglass.png">
                                    <input type="text" placeholder="Search Clients">
                                    </div>
                                    <button class="clientChange" onclick="hideSelectClient()" style="background-color: #68A9F7"><img src="images/right.png" ></button>
                                    
                                </div>
                                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                                    <div id="water_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 15px;width: 90%;margin-left: 10px;">
                                    <?php foreach ($list as $c) {
                                        $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                                        <span class="bluetext water_client"><span><?php echo($c_name) ?> </span><span onclick="deSelectClient_water(this,'water_unselected<?php echo($i) ?>','water_selected<?php echo($i) ?>','water_interval<?php echo($i) ?>','water_amount<?php echo($i) ?>')" class="close-cut">&times;</span><span hidden><?php echo($c)?></span></span>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-bottom">
                                <div id="water_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                                    <?php foreach ($map_water as $r) {
                                        $c_name = getClientName($r, $conn,$dietitianuserID); ?>

                                        <div class="client-name">
                                            <input onclick="selectClient_water(this,'water_selected<?php echo($i) ?>','water_unselected<?php echo($i) ?>','water_interval<?php echo($i) ?>','water_amount<?php echo($i) ?>')" type="checkbox" id="<?php echo($r) ?>" value="<?php echo($r) ?>">
                                            <label for="<?php echo($r) ?>" ><?php echo($c_name) ?></label>
                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
<?php
$i++;
    }
}
?>
                    <!-- Side Wrapper 1 Water -->
                    <!-- Side Wrapper 2 Calorie -->
<?php 
$result_calorie = mysqli_query($conn, $sql_calorie) or die('failed');
if (mysqli_num_rows($result_calorie) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_calorie)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
?>
                    <div class="client_wrapper" id="calorie_wrapper<?php echo($i) ?>">
                            <div class="wrapper-top">
                                <div style="text-align:center"><img src="images/Frame-2.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Eating reminder</span>
                                </div>
                                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients</span>
                                <div style="display:flex;justify-content: space-between;padding: 0 30px;margin: 20px 0;">
                                    <div class="searchclient">
                                    <img src="images/greyglass.png">
                                    <input type="text" placeholder="Search Clients">
                                    </div>
                                    <button class="clientChange" onclick="hideSelectClient()" style="background-color: #68A9F7"><img src="images/right.png" ></button>
                                    
                                </div>
                                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                                    <div id="calorie_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 15px;width: 90%;margin-left: 10px;">
                                        <?php foreach ($list as $c) {
                                            $c_name = getClientName($c, $conn,$dietitianuserID); ?>
                                            <span class="bluetext calorie_client"><span><?php echo($c_name) ?> </span><span onclick="deSelectClient_calorie(this,'calorie_unselected<?php echo($i) ?>','calorie_selected<?php echo($i) ?>','bf_time<?php echo($i) ?>','lunch_time<?php echo($i) ?>','snacks_time<?php echo($i) ?>','dinner_time<?php echo($i) ?>')" class="close-cut">&times;</span><span hidden><?php echo($c)?></span></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-bottom">
                                <div id="calorie_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                                    <?php foreach ($map_calorie as $r) {
                                        $c_name = getClientName($r, $conn,$dietitianuserID); ?>

                                        <div class="client-name">
                                            <input onclick="selectClient_calorie(this,'calorie_selected<?php echo($i) ?>','calorie_unselected<?php echo($i) ?>','bf_time<?php echo($i) ?>','lunch_time<?php echo($i) ?>','snacks_time<?php echo($i) ?>','dinner_time<?php echo($i) ?>')" type="checkbox" id="<?php echo($r) ?>" value="<?php echo($r) ?>">
                                            <label for="<?php echo($r) ?>" ><?php echo($c_name) ?></label>
                                        </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
<?php
$i++;
    }
}
?>
                    <!-- Side Wrapper 2 Calorie -->
                    <!-- Side Wrapper 3 Sleep -->
<?php 
$result_sleep = mysqli_query($conn, $sql_sleep) or die('failed');
if (mysqli_num_rows($result_sleep) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result_sleep)) {
        $list = explode(',', $row['GROUP_CONCAT(client_id)']);
?>
                    <div class="client_wrapper" id="sleep_wrapper<?php echo($i) ?>">
                            <div class="wrapper-top">
                                <div style="text-align:center"><img src="images/Frame-2.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Sleep Reminder</span>
                                </div>
                                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients</span>
                                <div style="display:flex;justify-content: space-between;padding: 0 30px;margin: 20px 0;">
                                    <div class="searchclient">
                                    <img src="images/greyglass.png">
                                    <input type="text" placeholder="Search Clients">
                                    </div>
                                    <button class="clientChange" onclick="hideSelectClient()" style="background-color: #68A9F7"><img src="images/right.png" ></button>
                                    
                                </div>
                                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                                    <div id="sleep_selected<?php echo($i) ?>" style="display:flex;flex-wrap: wrap;gap: 15px;width: 90%;margin-left: 10px;">
                                        <?php foreach ($list as $c) {
                                            $c_name = getClientName($c, $conn,$dietitianuserID); ?>

                                            <span class="bluetext sleep_client"><span><?php echo($c_name) ?> </span><span onclick="deSelectClient_sleep(this,'sleep_unselected<?php echo($i) ?>','sleep_selected<?php echo($i) ?>','sleep_time<?php echo($i) ?>','wake_time<?php echo($i) ?>')" class="close-cut">&times;</span><span hidden><?php echo($c)?></span></span>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-bottom">
                                <div id="sleep_unselected<?php echo($i) ?>" class="checkbox" style="padding-left:2rem">
                                    <?php foreach ($map_sleep as $r) {
                                        $c_name = getClientName($r, $conn,$dietitianuserID); ?>

                                        <div class="client-name">
                                            <input onclick="selectClient_sleep(this,'sleep_selected<?php echo($i) ?>','sleep_unselected<?php echo($i) ?>','sleep_time<?php echo($i) ?>','wake_time<?php echo($i) ?>')" type="checkbox" id="<?php echo($r) ?>" value="<?php echo($r) ?>">
                                            <label for="<?php echo($r) ?>" ><?php echo($c_name) ?></label>
                                        </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
<?php
$i++;
    }
}
?>
                    <!-- Side Wrapper 3 Sleep -->
                </div>
            </div>
            <!-- Side Wrapper col-4 -->
        </div>
    </div>
    <!-- bottom end -->
    <script>
        const allwrapper = document.getElementsByClassName('client_wrapper');
        function showSelectClient(id){
            for(let i =0 ; i<allwrapper.length;i++){
                allwrapper[i].style.right = '-350px';
            }
            // console.log(id);
            document.getElementById(id).style.right = '90px';
        }
        function hideSelectClient(){
            // console.log(id);
            for(let i =0 ; i<allwrapper.length;i++){
                allwrapper[i].style.right = '-350px';
            }
            location.reload();
        }
    </script>


<!-- main end -->
</div>
<!-- main end -->
<!-- DOM FUNCTIONS -->
<script>
    function getSelectedClients(id){
        const selectedClients = [];
        const selectedClientsColletion = document.getElementById(id).children;
        for(let i=0;i<selectedClientsColletion.length;i++){
            const value = selectedClientsColletion[i].lastElementChild.innerText;
            selectedClients.push(value);
        }
        return selectedClients;

    }
    // water functions
    function selectClient_water(client,id_to_add,id_to_remove,water_interval,water_amount) {
        const interval = document.getElementById(water_interval);
        const amount = document.getElementById(water_amount);
        const add_id = document.getElementById(id_to_add);
        const span = document.createElement("span");
        // console.log(id_to_remove);
        span.innerHTML = `
        <span>${client.nextElementSibling.innerText} </span><span onclick="deSelectClient_water(this,'${id_to_remove}','${id_to_add}','${water_interval}','${water_amount}')" class="close-cut">&times;</span><span hidden>${client.value}</span>
        `;
        span.classList.add('bluetext');
        // span.classList.add(`${type}_client`);
        add_id.appendChild(span);
        client.parentElement.remove();
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {sidebarselection: true,client_id: client.value,dietitianuserID:'<?php echo($dietitianuserID) ?>',water_interval: interval.value,water_amount:amount.value},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form');
            }
        });
    }

    function deSelectClient_water(client,id_to_add,id_to_remove,water_interval,water_amount){
        console.log(id_to_remove);
        const add_id = document.getElementById(id_to_add);
        const div = document.createElement("div");
        div.innerHTML = `
        <input onclick="selectClient_water(this,'${id_to_remove}','${id_to_add}','${water_interval}','${water_amount}')" type="checkbox" id="${client.nextElementSibling.innerText}" value="${client.nextElementSibling.innerText}">
        <label for="${client.nextElementSibling.innerText}" >${client.previousElementSibling.innerText}</label>
        `;
        div.classList.add('client-name');
        add_id.appendChild(div);
        client.parentElement.remove();
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {sidebarselection: true,client_id: client.nextElementSibling.innerText,dietitianuserID:'<?php echo($dietitianuserID) ?>',water_interval: null,water_amount:null},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form side');
            }
        });
    }
    // calorie functions
    function selectClient_calorie(client,id_to_add,id_to_remove,breakfast,lunch,snacks,dinner) {
        const bf_time = document.getElementById(breakfast);
        const lunch_time = document.getElementById(lunch);
        const snacks_time = document.getElementById(snacks);
        const dinner_time = document.getElementById(dinner);

        const add_id = document.getElementById(id_to_add);
        const span = document.createElement("span");
        // console.log(id_to_remove);
        span.innerHTML = `
        <span>${client.nextElementSibling.innerText} </span><span onclick="deSelectClient_calorie(this,'${id_to_remove}','${id_to_add}','${breakfast}','${lunch}','${snacks}','${dinner}')" class="close-cut">&times;</span><span hidden>${client.value}</span>
        `;
        span.classList.add('bluetext');
        // span.classList.add(`${type}_client`);
        add_id.appendChild(span);
        client.parentElement.remove();
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {sidebarselection: true,client_id: client.value,dietitianuserID:'<?php echo($dietitianuserID) ?>',bf_time: bf_time.value,lunch_time:lunch_time.value,snacks_time:snacks_time.value,dinner_time:dinner_time.value},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form');
            }
        });
    }

    function deSelectClient_calorie(client,id_to_add,id_to_remove,breakfast,lunch,snacks,dinner) {
        console.log(id_to_remove);
        const add_id = document.getElementById(id_to_add);
        const div = document.createElement("div");
        div.innerHTML = `
        <input onclick="selectClient_calorie(this,'${id_to_remove}','${id_to_add}','${breakfast}','${lunch}','${snacks}','${dinner}')" type="checkbox" id="${client.nextElementSibling.innerText}" value="${client.nextElementSibling.innerText}">
        <label for="${client.nextElementSibling.innerText}" >${client.previousElementSibling.innerText}</label>
        `;
        div.classList.add('client-name');
        add_id.appendChild(div);
        client.parentElement.remove();
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {sidebarselection: true,client_id: client.nextElementSibling.innerText,dietitianuserID:'<?php echo($dietitianuserID) ?>',bf_time: null,lunch_time:null,snacks_time:null,dinner_time:null},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form side');
            }
        });
    }
    // sleep functions
    function selectClient_sleep(client,id_to_add,id_to_remove,sleep,wake) {
        const sleep_time = document.getElementById(sleep);
        const wake_time = document.getElementById(wake);
        const add_id = document.getElementById(id_to_add);
        const span = document.createElement("span");
        // console.log(id_to_remove);
        span.innerHTML = `
        <span>${client.nextElementSibling.innerText} </span><span onclick="deSelectClient_sleep(this,'${id_to_remove}','${id_to_add}','${sleep}','${wake}')" class="close-cut">&times;</span><span hidden>${client.value}</span>
        `;
        span.classList.add('bluetext');
        // span.classList.add(`${type}_client`);
        add_id.appendChild(span);
        client.parentElement.remove();
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {sidebarselection: true,client_id: client.value,dietitianuserID:'<?php echo($dietitianuserID) ?>',sleep_time: sleep_time.value,wake_time:wake_time.value},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form');
            }
        });
    }

    function deSelectClient_sleep(client,id_to_add,id_to_remove,sleep,wake) {
        console.log(id_to_remove);
        const add_id = document.getElementById(id_to_add);
        const div = document.createElement("div");
        div.innerHTML = `
        <input onclick="selectClient_sleep(this,'${id_to_remove}','${id_to_add}','${sleep}','${wake}')" type="checkbox" id="${client.nextElementSibling.innerText}" value="${client.nextElementSibling.innerText}">
        <label for="${client.nextElementSibling.innerText}" >${client.previousElementSibling.innerText}</label>
        `;
        div.classList.add('client-name');
        add_id.appendChild(div);
        client.parentElement.remove();
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {sidebarselection: true,client_id: client.nextElementSibling.innerText,dietitianuserID:'<?php echo($dietitianuserID) ?>',sleep_time: null,wake_time:null},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form side');
            }
        });
    }
    // Submit FUNCTIONS
    function submitForm_water(selected , interval , amount) {
        const water_interval = document.getElementById(interval);
        const water_amount = document.getElementById(amount);
        console.log(selected);
        console.log(getSelectedClients(selected));
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {update_all: true,client_id: getSelectedClients(selected), dietitianuserID:'<?php echo($dietitianuserID) ?>', water_interval: water_interval.value, water_amount:water_amount.value},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form group');
                location.reload();
            }
        });
    }

    function submitForm_calorie(selected , breakfast ,lunch, snacks, dinner ) {
        const bf_time = document.getElementById(breakfast);
        const lunch_time = document.getElementById(lunch);
        const snacks_time = document.getElementById(snacks);
        const dinner_time = document.getElementById(dinner);

        console.log(selected);
        console.log(getSelectedClients(selected));
        console.log(bf_time.value);
        console.log(lunch_time.value);
        console.log(snacks_time.value);
        console.log(dinner_time.value);
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {update_all: true,client_id: getSelectedClients(selected), dietitianuserID:'<?php echo($dietitianuserID) ?>', bf_time: bf_time.value,lunch_time:lunch_time.value,snacks_time:snacks_time.value,dinner_time:dinner_time.value},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form group');
                location.reload();
            }
        });
    }

    function submitForm_sleep(selected , sleep , wake) {
        const sleep_time = document.getElementById(sleep);
        const wake_time = document.getElementById(wake);
        console.log(selected);
        console.log(getSelectedClients(selected));
        $.ajax({
            type: "POST",
            url: "set_reminder_backend.php",
            data: {update_all: true,client_id: getSelectedClients(selected), dietitianuserID:'<?php echo($dietitianuserID) ?>', sleep_time: sleep_time.value,wake_time:wake_time.value},
            success: function(data) {
                // Handle the response here
                console.log(data);
                console.log('hel form group');
                location.reload();
            }
        });
    }
</script>
</body>

</html>