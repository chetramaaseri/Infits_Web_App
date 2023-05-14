<?php
if(isset($_SESSION['name'])){
    header('location: login.php');
}
// Client Id
if(isset($_GET['id']) AND $_GET['id'] != ""){
    $clientId = $_GET['id'];
}else{
    header("Location: index.php");
}
// Configure Dates
date_default_timezone_set("Asia/Calcutta");
$today = new DateTime();

function fetchPastActivity($clientId,$query){
    // Connect to Database
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    
    // echo($query);
    $result = $conn->query($query) or die("Query Failed");
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] =  $row;
    }
    $conn->close();
    return ($data);
}

if(isset($_POST['dates'])){
     $list = '
     <div class="row">
        <div class="col">';
        $Custom_Day1 = new DateTime(substr($_POST['dates'][0],4,11));
        $Custom_Day2 = new DateTime(substr($_POST['dates'][1],4,11));
        while($Custom_Day2 >= $Custom_Day1){
            $query="SELECT * FROM heartrate WHERE clientID= '$clientId' AND 
                    `dateandtime` >= '".$Custom_Day1->format('Y-m-d')." 00:00:00'
                    AND `dateandtime` <= '".$Custom_Day1->format('Y-m-d')." 23:59:59';";
            $CustomData = fetchPastActivity($clientId,$query);
            
            $count = count($CustomData);
            $i = 0;
    
            $list .= '<div class="activity-container">
                <p class="date">'. $Custom_Day1->format('d M Y') .'</p>';
                
                $Custom_Day1->modify("+1 day");
                if(empty($CustomData)){
                    $list.='<p> NO DATA FOUND </p></div>';
                    continue;
                }
                
                $list .= 
                '<div class="flex-box">';
                
                while($i<$count){ 
                    $I_date = new DateTime($CustomData[$i]['dateandtime']);
                
                $list .='<div class="meal-box">
                        <div class="left">
                            <img src="images/cycling_heart_rate.svg" alt="">
                            <div class="meal-title">
                                <p>Max ' .$CustomData[$i]['maximum'] . '</p>
                                <span>'.$I_date->format('h:i A').'</span>
                            </div>
                        </div>
                        <div class="right">
                            <img src="images/heartrate_selected_small.svg" alt="">
                            <p class="kcal">'.$CustomData[$i]['average'].' BPM</p>
                        </div>
                    </div>';
                $i++; }
            $list.='</div>
            </div>';
         }
    
    $list .=
        '</div>
    </div>';
    echo ($list);
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php include 'navbar.php' ?>
<style>
    * {
        font-family: 'NATS';    
    }
    .heading p {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 44px;
    line-height: 70px;
}
/* .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  position: relative;
} */
#daterange {
    border: none;
    background: transparent;
    height: 0px;
    width: 0px;
    z-index: -1;
    position: absolute;
    left: 90px;
    top: 20px;
}
#daterange-btn{
    position: absolute;
    top: 5px;
    left: 92px;
}
.graph_button_right{
    border-top-right-radius: 1em;
border-bottom-right-radius: 1em;
}
.tab_button_side{
   border-radius: 12px;
}
/* Style the buttons that are used to open the tab content */
.tab {
background-color: #f1f1f1;
  border: 1px solid #F8F5F5;
max-width: 410px;
width: 100%;
height: 31px;
border-top-left-radius: 1em;
border-bottom-left-radius: 1em;
border-top-right-radius: 1em;
border-bottom-right-radius: 1em;
position: relative;
/* margin-left: 41px; */
}
.tablinks {
background: #FFFFFF;
border: 1px solid #FCFBFB;
border-radius: 0px;
width: 24%;
/* height: 24px; */
float: left;
border: none;
outline: none;
cursor: pointer;
transition: 0.3s;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 13px;
line-height: 27px;
color: #4D4D4D;
}
.tab button {
    background: #FFFFFF;
    border: 1px solid #FCFBFB;
    border-radius: 0px;
    width: 100px;
/*height: 24px;*/
height: 100%;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  /* padding: 14px 16px; */
  transition: 0.3s;
  font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 13px;
line-height: 27px;

color: #4D4D4D;
}
.graph_button_side{
    border: 1px solid #F8F5F5;
  border-top-right-radius: 1em!important;
  border-bottom-right-radius: 1em!important;
}
.graph_button_left{
  width: 106.69px !important;
border-top-left-radius: 1em!important;
border-bottom-left-radius: 1em!important;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #C986CF;
}
.tab button.active {
  background-color: #C986CF;
  color: white !important;
}

/* Style the tab content */
.tab-content {
  display: none;
  padding: 6px 12px;
  /* border: 1px solid #ccc; */
  border-top: none;
}

.content{
    padding:10px;
   
}
.top_bar{
    display: flex;
   flex-wrap:wrap;
}
.client-card {
width: 93px;
height: 110px;
background: rgba(255, 255, 255, 0.8);
box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.15);
border-radius: 10px;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
        text-align: center;
gap: 15px;
margin-bottom: 15px;
}

.client-card p {
    font-size: 15px;
}

.client-card i {
    font-size: 15px;
}
.client-card-heart{
    background: linear-gradient(217.35deg, #F97EAA 0%, #C389D5 100%);
    border: 1px solid #E266A9;
    border-radius: 10px;
    margin: 10px 0 0 0;
    width: 93px;
    height: 110px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 15px;
}
.client-card-heart p{
    margin-bottom: 0;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
    line-height: 120%;
    /* or 23px */

    text-align: center;

    color: #FFFFFF;
}
/* -------------------Calorie Tab Content------------------- */
.activity-container{
    /* margin: 3%; */
    /* padding: 3%; */
    padding: 54px;
    padding-top: 28px;
    padding-bottom: 0;
}
.activity-container > div {
    display: flex;
}
.activity-container p{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 30px;
/* identical to box height */
color: #000000;
}
.flex-box {
    display: flex;
    gap: 25px;
    flex-wrap: wrap;
    padding: 5px 30px;
}
.meal-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 311px;
    height: 67px;
    padding: 20px;
    background: linear-gradient(180deg, rgba(255, 232, 242, 0.2) 0%, rgba(201, 134, 207, 0.2) 100%);
    border-radius: 10px;
}
.meal-box p{
    margin-bottom: 0;
}
.left,
.right{
    display: flex;
    gap: 20px;
    /* flex-direction: row; */
}
.left span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 17px;
/* line-height: 36px; */
/* identical to box height */


color: #000000;

}
.right p{
    font-size: 20px;
    line-height: 42px;
}

.activity-content {
    display: flex;
    justify-content: space-between;
/*    padding: 0 33px;*/
    padding: 0 25px;
    width: 19.43em;
    height: 80px;
    background: linear-gradient(180deg, rgba(255, 232, 242, 0.2) 0%, rgba(201, 134, 207, 0.2) 100%);
    border-radius: 10px;
    font-weight: 400;
    margin-left: 30px;
    margin-bottom: 20px;
}

.activity-left, .activity-right {
    display: flex;
    align-items: center;
}

.activity-left img {
    width: 21px;
    height: 25px;
}
.activity-right img {
    width: 20px;
    height: 19px;
    filter: brightness(rgba(255, 139, 139, 1));
}

.activity-details {
    margin-left: 20px;
}

.activity-details h3 {
    font-size: 25px;
/*    line-height: 52px;*/
    margin-bottom: 0;

}

.activity-details span {
    display: block;
    font-size: 17px !important;
    line-height: 35px;
    padding: 0;
    width: 100%;
}
.activity-right p {
    height: 100%;
    margin-bottom: 0;
    display: flex;
    align-items: center;
    margin-left: 9px;
    font-size: 20px;
    line-height: 42px;
}

/* -----------------------Resposnive New----------------------- */
.ph-left{
    /* padding-left: 3%; */
    padding-left: 51px;
}
.ph-right {
    display: flex;
    justify-content: flex-end;
    padding-right: 52px;
    padding-top: 30px;
}
@media (max-width:576px){
    .tab{
        display:flex;
        width: 100%;
        flex-wrap:wrap;
    }
    .tab button {
    background: #FFFFFF;
    border: 1px solid #FCFBFB;
    border-radius: 0px;
    width: 25%;
/*height: 24px;*/
height: 100%;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  /* padding: 14px 16px; */
  transition: 0.3s;
  font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 10px;
line-height: 27px;

color: #4D4D4D;
}
#daterange-btn{
    position: absolute;
    top: 5px;
    left: 75px;
}
    .graph_button_left{
        width:25% !important;
    }
    /* anothr */
    .past-header{
        /* position:relative; */
    }
    .ph-right{
        /* position:absolute;
        top: -45px; */
        right: 5px;
        scale: 0.9;
        padding: 0;
    }
    .ph-left {
        padding-left: 12px;
    }
    .activity-container {
        /* padding: 0px; */
        padding: 3%;
    }
    .activity-container p {
        text-align: center;
    }
    .activity-content {
        /* padding: 0px; */
        width: 100%;
        margin-left: 0px;
    }
}
@media (max-width:330px){
    .past-header{
        /* position:relative; */
        display: flex;
        flex-direction: column;
    }
    .ph-right{
        /* position:absolute;
        top: -59px;
        right: -40px; */
        /* scale: 0.65; */
        padding: 0;
    }
    .tablinks {
    font-size: 10px;
    }
}
</style>
<body>

    <div class="content">
        <!-- tab_links -->
        
        <div class="row past-header">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 ph-left">
                <div class="heading">
                    <p>Past Activities</p>
                </div>
                <div class="tab">
                    <button id="custombtn" class="tablinks graph_button_left" onclick="openCity(event, 'London')">Custom Dates</button>
                    <input id="daterange"  type="date-range">
                    <i id="daterange-btn" class="drop fa-solid fa-caret-down"></i>
                    
                    
                    <button class="tablinks" onclick="openCity(event, 'Year')">Year</button>
                    <button class="tablinks" onclick="openCity(event, 'Month')">Month</button>
                    <button id="defauttab" class="tablinks graph_button_side" class="tab_button_side" onclick="openCity(event, 'Week')">Week</button>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 ph-right">
                <!-- metric_button -->
                <a href="track_stats_heart.php?id=<?php echo($clientId) ?>">
                <div class="client-card client-card-heart " style="color:#E3738D; border: 1px solid #E3738D;">
                    <img src="images/heartrate_selected.svg" alt="">
                    <p>Heart<br>Rate</p>
                </div>
                </a>
            </div>
        </div>
                
        <!-- past_activities -->
        <div class="graph">

         <!-- Tab content -->
                                <!-- Custom Data -->
                                <div id="London" id="defaultOpen" class="tab-content">
                                    <div class="row">
                                        <div class="col">
                                        <?php
                                        $yearly_month = new DateTime();
                                        $yearly_last_month = new DateTime();
                                        $yearly_month->setDate($yearly_month->format('Y'),01,01);
                                        if($today->format('m') == '01'){
                                            $yearly_month->setDate($yearly_month->format('Y')-1,01,01);
                                            $yearly_last_month->setDate($yearly_last_month->format('Y')-1,12,31);
                                        }
                                        
                                        while($yearly_last_month >= $yearly_month){
                                            $yearly_Month_1 = $yearly_month->format('Y-m')."-"."01";
                                            $yearly_Month_2 =  $yearly_month->format('Y-m')."-". $yearly_month->format('t');
                                            $query="SELECT * FROM heartrate WHERE clientID= '$clientId' AND 
                                                    `dateandtime` >= '".$yearly_Month_1." 00:00:00'
                                                    AND `dateandtime` <= '".$yearly_Month_2." 23:59:59';";
                                            $yearly_Data = fetchPastActivity($clientId,$query);
                                            
                                            $count = count($yearly_Data);
                                            $i = 0;
                                        ?>
                                            <div class="activity-container">
                                                <p class="date"><?php echo ($yearly_month->format('M Y')); ?></p>
                                                <?php 
                                                $yearly_month->modify("+1 Month");
                                                if(empty($yearly_Data)){
                                                    echo ("<p> NO DATA FOUND </p>");
                                                    echo ('</div>');
                                                    // echo('<br>');
                                                    continue;
                                                }
                                                ?>
                                                <div class="flex-box">
                                                <?php  
                                                while($i<$count){ 
                                                    $I_date = new DateTime($yearly_Data[$i]['dateandtime']);
                                                ?>
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/cycling_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>Max <?php echo($yearly_Data[$i]['maximum']) ?></p>
                                                                <span><?php echo($I_date->format('h:i A d M')) ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heartrate_selected_small.svg" alt="">
                                                            <p class="kcal"><?php echo($yearly_Data[$i]['average']) ?> BPM</p>
                                                        </div>
                                                    </div>
                                                <?php $i++; } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Yearly Data -->
                                <div id="Year" class="tab-content">
                                    <div class="row">
                                        <div class="col">
                                        <?php
                                        $yearly_month = new DateTime();
                                        $yearly_last_month = new DateTime();
                                        $yearly_month->setDate($yearly_month->format('Y'),01,01);
                                        if($today->format('m') == '01'){
                                            $yearly_month->setDate($yearly_month->format('Y')-1,01,01);
                                            $yearly_last_month->setDate($yearly_last_month->format('Y')-1,12,31);
                                        }
                                        
                                        while($yearly_last_month >= $yearly_month){
                                            $yearly_Month_1 = $yearly_month->format('Y-m')."-"."01";
                                            $yearly_Month_2 =  $yearly_month->format('Y-m')."-". $yearly_month->format('t');
                                            $query="SELECT * FROM heartrate WHERE clientID= '$clientId' AND 
                                                    `dateandtime` >= '".$yearly_Month_1." 00:00:00'
                                                    AND `dateandtime` <= '".$yearly_Month_2." 23:59:59';";
                                            $yearly_Data = fetchPastActivity($clientId,$query);
                                            
                                            $count = count($yearly_Data);
                                            $i = 0;
                                        ?>
                                            <div class="activity-container">
                                                <p class="date"><?php echo ($yearly_month->format('M Y')); ?></p>
                                                <?php 
                                                $yearly_month->modify("+1 Month");
                                                // if(empty($yearly_Data)){
                                                //     echo ("<p> NO DATA FOUND </p>");
                                                //     echo ('</div>');
                                                //     // echo('<br>');
                                                //     continue;
                                                // }
                                                ?>
                                                <div class="row">
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/chair.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Resting</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/running.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Running</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/bx_cycling.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Cycling</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/bowling.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>After Sport</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/gym.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Gym</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-box">
                                                <?php  
                                                while($i<$count){ 
                                                    $I_date = new DateTime($yearly_Data[$i]['dateandtime']);
                                                ?>
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/running_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>Walking</p>
                                                                <span><?php echo($I_date->format('h:i A d M')) ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p class="kcal"><?php echo($yearly_Data[$i]['heart']) ?> heart</p>
                                                        </div>
                                                    </div>
                                                <?php $i++; } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Monthly Data -->
                                <div id="Month" class="tab-content">
                                    <div class="row">
                                        <div class="col">
                                        <?php
                                        $monthly_Month = new DateTime();
                                        $monthly_LastDay = new DateTime();
                                        $monthly_Month->modify("first day of this month");
                                        if($today->format('d') == '01'){
                                            $monthly_Month->modify("first day of previous month");
                                            $monthly_LastDay->modify("last day of previous month");
                                        }
                                        
                                        while($monthly_LastDay >= $monthly_Month){
                                            $query="SELECT * FROM heartrate WHERE clientID= '$clientId' AND 
                                                    `dateandtime` >= '".$monthly_Month->format('Y-m-d')." 00:00:00'
                                                    AND `dateandtime` <= '".$monthly_Month->format('Y-m-d')." 23:59:59';";
                                            $monthly_Data = fetchPastActivity($clientId,$query);
                                            
                                            $count = count($monthly_Data);
                                            $i = 0;
                                        ?>
                                            <div class="activity-container">
                                                <p class="date"><?php echo ($monthly_Month->format('d M Y')); ?></p>
                                                <?php 
                                                $monthly_Month->modify("+1 day");
                                                // if(empty($monthly_Data)){
                                                //     echo ("<p> NO DATA FOUND </p>");
                                                //     echo ('</div>');
                                                //     // echo('<br>');
                                                //     continue;
                                                // }
                                                ?>
                                                <div class="row">
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/chair.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Resting</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/running.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Running</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/bx_cycling.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Cycling</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/bowling.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>After Sport</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/gym.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Gym</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-box">
                                                <?php  
                                                while($i<$count){ 
                                                    $I_date = new DateTime($monthly_Data[$i]['dateandtime']);
                                                ?>
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/cycling_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>Max <?php echo($monthly_Data[$i]['maximum']) ?></p>
                                                                <span><?php echo($I_date->format('h:i A')) ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heartrate_selected_small.svg" alt="">
                                                            <p class="kcal"><?php echo($monthly_Data[$i]['average']) ?> BPM</p>
                                                        </div>
                                                    </div>
                                                <?php $i++; } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Weekly Data -->
                                <div id="Week" class="tab-content">
                                    <div class="row">
                                        <div class="col">
                                        <?php
                                        $weekly_Day = new DateTime();
                                        $weekly_Day->modify('previous monday');
                                        $weekly_lastDay =new DateTime();
                                        
                                        if($today->format('l')== "Monday"){
                                            $weekly_lastDay->modify('previous sunday');
                                        }
                                        
                                        while($weekly_Day <= $weekly_lastDay){
                                            $query="SELECT * FROM heartrate WHERE clientID= '$clientId' AND 
                                                    `dateandtime` >= '".$weekly_Day->format('Y-m-d')." 00:00:00'
                                                    AND `dateandtime` <= '".$weekly_Day->format('Y-m-d')." 23:59:59';";
                                            $weekly_Data = fetchPastActivity($clientId,$query);
                                            
                                            $count = count($weekly_Data);
                                            $i = 0;
                                        ?>
                                            <div class="activity-container">
                                                <p class="date"><?php echo ($weekly_Day->format('d M Y')); ?></p>
                                                <?php 
                                                $weekly_Day->modify("+1 day");
                                                // if(empty($weekly_Data)){
                                                //     echo ("<p> NO DATA FOUND </p>");
                                                //     echo ('</div>');
                                                //     // echo('<br>');
                                                //     continue;
                                                // }
                                                ?>
                                                <div class="row">
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/chair.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Resting</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/running.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Running</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/bx_cycling.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Cycling</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/bowling.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>After Sport</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 activity-content">
                                                        <div class="activity-left">
                                                            <img src="images/gym.svg" alt="">
                                                            <div class="activity-details">
                                                                <h3>Gym</h3>
                                                                <span>11:10 a.m</span>
                                                            </div>
                                                        </div>
                                                        <div class="activity-right">
                                                            <img src="images/heart.svg" alt="">
                                                            <p>169 BPM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-box">
                                                <?php  
                                                while($i<$count){ 
                                                    $I_date = new DateTime($weekly_Data[$i]['dateandtime']);
                                                ?>
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/cycling_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>Max <?php echo($weekly_Data[$i]['maximum']) ?></p>
                                                                <span><?php echo($I_date->format('h:i A')) ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heartrate_selected_small.svg" alt="">
                                                            <p class="kcal"><?php echo($weekly_Data[$i]['average']) ?> BPM</p>
                                                        </div>
                                                    </div>
                                                <?php $i++; } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                       <script>
                                            function openCity(evt, cityName) {
                                                /* Declare all variables */
                                                var i, tabcontent, tablinks;
                    
                                                /* // Get all elements with class="tab-content" and hide them */
                                                tabcontent = document.getElementsByClassName("tab-content");
                                                for (i = 0; i < tabcontent.length; i++) {
                                                    tabcontent[i].style.display = "none";
                                                }
                    
                                                /* // Get all elements with class="tablinks" and remove the class "active" */
                                                tablinks = document.getElementsByClassName("tablinks");
                                                for (i = 0; i < tablinks.length; i++) {
                                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                                }
                    
                                                /* // Show the current tab, and add an "active" class to the button that opened the tab */
                                                document.getElementById(cityName).style.display = "block";
                                                evt.currentTarget.className += " active";
                                            }
                    
                                            /* // Get the element with id="defaultOpen" and click on it */
                                            // document.getElementById("defaultOpen").click();
                                            document.getElementById("defauttab").click();
                                            </script> 
            </div>
        </div>
<script>
const customTab = document.getElementById('London');
function Custom_Data(dates){
    $.ajax({
        type: "POST",
        url: "past_activities_heart.php?id=<?php echo ($clientId) ?>",
        data: {dates: dates},
        success: function(result) {
            customTab.innerHTML = "";
            customTab.innerHTML = result;
            document.getElementById("custombtn").click();
        }
    }
)}
            const date_btn = document.getElementById('daterange-btn');
            date_btn.addEventListener('click' , ()=>{
                fp.toggle();
            });
            const fp = flatpickr("input[type = date-range]", {
                maxDate: "today",
                dateFormat: "Y-m-d",
                mode: "range",
                onClose:[
                    function(selectedDates){
                        Custom_Data(selectedDates);
                    }
                ]
            });
</script>
</body>
</html>