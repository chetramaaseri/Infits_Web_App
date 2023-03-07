<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>LIVE</title>
    <style>
             @font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}
body {
        font-family: 'NATS', sans-serif;
        font-weight:400;
        overflow-x: hidden;
        
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #BBBBBB;
  opacity: 1; /* Firefox */
  padding:1rem;
  font-size: 18px;
}
    .live{
        display:flex;
        gap:3rem;
    }
    .live_leftside{
        margin:2rem;
        margin-left:3rem;

    }
    .streaming_live{
        width: 652px;
        height: 203px;
        background: #FBFBFB;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 15px;
        margin-top:1rem;
        padding:15px;
    }
    .go_live{
        width: 114px;
        height: 35px;
        border:none;
        color:white;
        background: #2667FF;
        box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
        border-radius: 8px;
        font-size: 21px;
    }
    .leftside_footer{
        display: grid;
        justify-content:space-evenly;
        grid-template-columns: repeat(3, minmax(auto, 1fr));
        margin-top:1.5rem;

    }
    .left_wrapper1{
        width: 163px;
        height: 238px;
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 14px;
        text-align:center;
        padding:10px;
    }
    .btn_setreminder{
        width: 132px;
        height: 26px;
        background: #2667FF;
        border-radius: 8px;
        color:white;
        border:none;
        font-size: 15px;
        margin-top:0.5rem;
    }
    .btn_joincall{
        width: 132px;
        height: 26px;
        background: #FFFFFF;
        border: 1px solid #2667FF;
        border-radius: 8px;
        color: #2667FF;
        margin-top:0.5rem;
    }
    .live_rightside{
        margin:2rem;
        
    }
    .rightside_middle{
       margin-top:1rem;
       display:flex;
       flex-direction:column;
       align-items:center;
    }
    .right_wrapper1{
        width: 324px;
        height: 90px;
        background: #FFFFFF;
        border: 1px solid #CCCCCC;
        border-radius: 15px;
    }
    .livebutton{
        width: 55px;
        height: 55px;
        border:none;
        border-radius:50%;
        background: linear-gradient(180deg, #3666FD 0%, #C855E9 100%);
        margin-left:1rem;
        
    }
    .live_footer{
        width: 333px;
        height: 97px;
        background: #FFFFFF;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
        border-radius: 50px;
        color: #4B9AFB;
        font-size: 30px;
        padding:10px;
        display:flex;
        justify-content:center;
        padding-top:1.5rem;
    }
    .calendar{
        
        background: #FFFFFF;
        border: 1px solid #CCCCCC;
        border-radius: 15px;
    }
    .modal{
        position: fixed;
        width:100%;
        height:100%;
        background: rgba(0, 0, 0, 0.6);
        transition: opacity 500ms;
        align-items:center;
  
    }
        .modal-content{
            
            width: 495px;
            
            left: 500px;
            top: 20px;
            background: #FFFFFF;
            border: 1px solid #DDD9D9;
            border-radius: 17px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
            
        
            
            
        
                            
    }
    .title{
        width: 443px;
        height: 48px;
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 7px;
        border:none;
    }
    .description{
        width: 442px;
        height: 113px;
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 7px;
        border:none;
       
    }
    .text_box{
        width: 152px;
        height: 40px;
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 7px;
        border:none;
    }
    .switch {
  position: relative;
  display: inline-block;
  width: 55px;
  height: 30px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.model-center{
    margin-top:1.5rem;
    display:flex;

}

.cancel_btn{
    width: 176px;
    height: 48px;
    background: #FFFFFF;
    border: 2px solid #4B9AFB;
    border-radius: 10px;
    color: #4B9AFB;
    font-size: 24px;
}
.save_btn{
    width: 186px;
    height: 48px;
    background: #4B9AFB;
    border-radius: 10px;
    color: white;
    font-size: 24px;
    border:none;
}
.bottom_buttons{
    display:flex;
    gap:2rem;
    justify-content:center;
    margin-top:1.5rem;
    margin-bottom:2rem;
}
.sliding-cal {
   
   position: relative;
   
   width: 495px;
height: 86px;
   overflow: scroll;
   background: #FFFFFF;
   border: 1px solid rgba(225, 225, 225, 0.66);
   box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
   
 }
 #slider-content {
   
  position: absolute;
  display: flex;
  justify-content: space-around;
  height: 100%;
  display: flex;
 
}

.item {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  width: 80px;
  background-color: white;
font-size: 22px;

}
.day{
    line-height:0;
}
.date{
    line-height:0;
}
.item:hover{
   
    border-radius: 50px;
    color: white;
    width: 59px;
    height: 84px;
  
    background: linear-gradient(180deg, #3861FB 0%, #3363FD 100%);
    cursor: pointer;
}

.sliding-cal::-webkit-scrollbar {
  display: none;
}


.sliding-cal {
  -ms-overflow-style: none; 
  scrollbar-width: none; 
}

                            


@media screen and (max-width: 400px){
        .bottom_buttons{
            display:flex;
            gap:2rem;
            flex-direction:column;
            margin-top:1.5rem;
            align-items:center;

        }


}


    @media screen and (max-width: 720px){
        .item {
        width: 80px !important;
      }
      .sliding-cal{
        width: 100% !important;
      }
        .modal-content{
            margin:20px;
            left:0;
            top:0;
            width:auto;
            height:auto;
            
        }
        .title{
            width:100%;
        }
        .description{
            width:100%;
        }
        .model-center{
            margin-top:1.5rem;
            display:flex;
            flex-direction:column;
            text-align:center;

        }
        
        .live{
            display:flex;
            flex-direction:column;
            gap:0;
        }
        .live_leftside{
            margin-left:2rem;
        }
        .streaming_live{
            width:auto;
            height: 220px;
           
        }
        .go_live{
            width:auto;
        }
        .leftside_footer{
            grid-template-columns: repeat(2, minmax(auto, 1fr));
        }
        .bottom_buttons{
            padding:20px;
        }
       
    }
    </style>
</head>
<body>
    <div class="live">
        <!------------------------------LEFTSIDE------------------------------------->
        <div class="live_leftside">
            <h1>Live</h1>
            <div class="streaming_live">
                <div style="display:flex;justify-content:space-between"><span style="font-size:26px">Now Streaming Live</span> <a href="live_streaming.php" style="background-color:none"><button class="go_live">Go Live</button></a></div>
                <div style="margin-top:1rem;display:flex;gap:1rem">
                    <img src="images/liveprofile.png" style="border-radius:50%;width: 75.67px;height:75.67px;margin-top:0.5rem">
                    <div>
                        <p style="font-size:24px">John Wayne</p>
                        <span style="font-size:14px;color: #A4A4A4;">Lorem ipsum dolor sit amet,consectetur </span> <br>
                        <span style="font-size:14px;color: #A4A4A4;">adipiscing elit. Felis.</span>
                    </div>  
                </div>
                <div style="float:right;font-size: 16px;">+256 viewers</div>
            </div>
            <h4 style="margin-top:1.5rem">Upcoming live calls</h4>

            <div class="leftside_footer">
                <div class="left_wrapper1">
                    <img src="images/liveprofile.png" style="border-radius:50%;width: 54.67px;height:54.67px">
                    <p style="font-size: 24px;line-height: 25px;">John Wayne</p>
                   <div>
                   <div style="display:flex;justify-content:center;gap:0.3rem"><img src="images/calenderlive.png" style="width:17%"> <span>09/05/2022</span></div>
                   <div style="display:flex;justify-content:center;gap:0.3rem;margin-top:0.3rem"> <img src="images/clocklive.png" style="width:15%;height:15%"> <span>2:00 p.m.</span></div>
                   </div>
                  <a href="live_joincall.php" style="background-color:none"> <button class="btn_joincall">Join Call</button></a>
                   <button class="btn_setreminder">Set Reminder</button>
                    
                </div>

                
            </div>
            


        </div>

        <!------------------------------LEFTSIDE------------------------------------->

          <!------------------------------RIGHTSIDE------------------------------------->

        <div class="live_rightside">
            <h4>Schedule meetings</h4>

            <!-------CALENDER---------------------------------------------------------------------------------------------------->
           <div class="light">
           <div class="calendar">
        <div class="calendar-header" style="color: #737373;">
            <span class="month-picker" id="month-picker">April</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2022</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day" >
                <div style="color: #737373;">S</div>
                <div style="color: #737373;">M</div>
                <div style="color: #737373;">T</div>
                <div style="color: #737373;">W</div>
                <div style="color: #737373;">T</div>
                <div style="color: #737373;">F</div>
                <div style="color: #737373;">S</div>
            </div>
            <div class="calendar-days"></div>
            <div class="month-list"></div>
        </div>
       
        
    </div>
           </div>

    <script>
        let calendar = document.querySelector('.calendar')

const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
}

getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
}

generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
    let calendar_header_year = calendar.querySelector('#year')

    let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    calendar_days.innerHTML = ''

    let currDate = new Date()
    if (month > 11 || month < 0) month = currDate.getMonth()
    if (!year) year = currDate.getFullYear()

    let curr_month = `${month_names[month]}`
    month_picker.innerHTML = curr_month
    calendar_header_year.innerHTML = year

    // get first day of month
    
    let first_day = new Date(year, month, 1)

    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div')
        if (i >= first_day.getDay()) {
            day.classList.add('calendar-day-hover')
            day.innerHTML = i - first_day.getDay() + 1
            day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
            }
        }
        calendar_days.appendChild(day)
    }
}

let month_list = calendar.querySelector('.month-list')

month_names.forEach((e, index) => {
    let month = document.createElement('div')
    month.innerHTML = `<div data-month="${index}">${e}</div>`
    month.querySelector('div').onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(index, curr_year.value)
    }
    month_list.appendChild(month)
})

let month_picker = calendar.querySelector('#month-picker')

month_picker.onclick = () => {
    month_list.classList.add('show')
}

let currDate = new Date()

let curr_month = {value: currDate.getMonth()}
let curr_year = {value: currDate.getFullYear()}

generateCalendar(curr_month.value, curr_year.value)

document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}
    </script>

    <style>
        :root 
{
    --dark-body: #4d4c5a;
    --dark-main: #141529;
    --dark-second: #79788c;
    --dark-hover: #323048;
    --dark-text: #f8fbff;
    --light-body: #f3f8fe;
    --light-main: #fdfdfd;
    --light-second: #c3c2c8;
    --light-hover: #edf0f5;
    --light-text: #151426;
    --blue: #007497;
    --white: #fff;
    --shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    --font-family: cursive;
}
.light {
    --bg-body: var(--light-body);
    --bg-main: var(--light-main);
    --bg-second: var(--light-second);
    --color-hover: var(--light-hover);
    --color-txt: var(--light-text);
}
        .calendar-header {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 25px;
    font-weight: 600;
    color: var(--color-txt);
    padding: 10px;
}

.calendar-body {
    padding: 10px;
}

.calendar-week-day {
    height: 50px;
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    font-weight: 600;
}

.calendar-week-day div {
    display: grid;
    place-items: center;
    color: var(--bg-second);
}

.calendar-days {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 0.1px;
    color: var(--color-txt);
}

.calendar-days div {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    position: relative;
    cursor: pointer;
    animation: to-top 1s forwards;
}

.calendar-days div span {
    position: absolute;
}

.calendar-days div:hover span {
    transition: width 0.2s ease-in-out, height 0.2s ease-in-out;
    border: 1px solid #7282FB;
border-radius: 50%;
}

.calendar-days div span:nth-child(1),
.calendar-days div span:nth-child(3) {
    width: 2px;
    height: 0;
    background-color: var(--color-txt);
}

.calendar-days div:hover span:nth-child(1),
.calendar-days div:hover span:nth-child(3) {
    height: 100%;
}

.calendar-days div span:nth-child(1) {
    bottom: 0;
    left: 0;
}

.calendar-days div span:nth-child(3) {
    top: 0;
    right: 0;
}

.calendar-days div span:nth-child(2),
.calendar-days div span:nth-child(4) {
    width: 0;
    height: 2px;
    background-color: var(--color-txt);
}

.calendar-days div:hover span:nth-child(2),
.calendar-days div:hover span:nth-child(4) {
    width: 100%;
}

.calendar-days div span:nth-child(2) {
    top: 0;
    left: 0;
}

.calendar-days div span:nth-child(4) {
    bottom: 0;
    right: 0;
}

.calendar-days div:hover span:nth-child(2) {
    transition-delay: 0.2s;
}

.calendar-days div:hover span:nth-child(3) {
    transition-delay: 0.4s;
}

.calendar-days div:hover span:nth-child(4) {
    transition-delay: 0.6s;
}

.calendar-days div.curr-date,
.calendar-days div.curr-date:hover {

border: 1px solid #7282FB;
border-radius: 50%;
}

.calendar-days div.curr-date span {
    display: none;
}

.month-picker {
   
    border-radius: 10px;
    cursor: pointer;
}

.month-picker:hover {
    background-color: var(--color-hover);
}

.year-picker {
    display: flex;
    align-items: center;
}

.year-change {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    margin: 0 10px;
    cursor: pointer;
}

.year-change:hover {
    background-color: var(--color-hover);
}

.calendar-footer {
    padding: 10px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.toggle {
    display: flex;
}

.toggle span {
    margin-right: 10px;
    color: var(--color-txt);
}

.month-list {
    position: absolute;
    top:200px;
    right:180px;
    background: #FBFBFB;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
border-radius: 15px;
    
    grid-template-columns: repeat(3, auto);
    gap: 4px;
    display: grid;
    transform: scale(1.5);
    visibility: hidden;
    pointer-events: none;
}

.month-list.show {
    transform: scale(1);
    visibility: visible;
    pointer-events: visible;
    transition: all 0.2s ease-in-out;
}

.month-list > div {
    display: grid;
    place-items: center;
}

.month-list > div > div {
    width: 100%;
    padding: 5px 20px;
    border-radius: 10px;
    text-align: center;
    cursor: pointer;
    color: var(--color-txt);
}

.month-list > div > div:hover {
    background-color: var(--color-hover);
}
@media screen and (max-width: 720px){
    .month-list{
        position: fixed;
       right:30px;
        gap: 1px;
    }

}
    </style>
           

            <!-------CALENDER------------------------------------------------------------------------------------------->

                <div class="rightside_middle">
                    <div class="right_wrapper1">
                        <div style="padding:13px;display:flex;gap:1.5rem">
                            <img src="images/liveprofile.png" style="border-radius:50%;width: 60.67px;height:60.67px">
                            <div>
                                <p style="font-size: 20px;margin-bottom:5px">John Wayne</p>
                                <div style="display:flex;gap:1.2rem">
                                <div style="display:flex;justify-content:center;gap:0.4rem"><img src="images/calenderlive.png" style="width:27%"><span>09/05/2022</span></div>
                                <div style="display:flex;justify-content:center;gap:0.4rem"><img src="images/clocklive.png" style="width:22%"><span>2:00 p.m.</span></div>
                            </div>
                                
                        </div>
                    </div>



                        
                </div>
                
               </div>
               <div class="live_footer" style="margin-top:1rem">Create Meeting<button class="livebutton" id="livebutton"><img src="images/livebutton.png" style="width:99.5%;"></button></div>

                
                
            
        </div>

        <!------------------------------RIGHTSIDE------------------------------------->

    </div>

    <!-----------------------------SCHEDULING LIVE-------------------------------->

    <div id="myModal" class="modal">

                <!--Modal content-->
                <div class="modal-content" >
                    <div style="margin-top:1rem;">
                        <h2 style="text-align:center">Scheduling live</h2>
                        <h4 style="text-align:center;color: #7C7C7C;"> 
                        <script>
                        // Creating a date object
                        var today = new Date();

                        // Getting full month name (e.g. "June")
                        var month = today.toLocaleString('default', { month: 'long' });
                        document.write(month);
                        </script> </h4>
                    </div> 

                    <div class="sliding-cal col-sm-12">
                        <div id="slider-content"></div>
                    </div>


                    <div style="padding:20px;">
                        <p style="font-size: 25px;">Title</p>
                        <input type="text" class="title">
                    </div>
                    <div style=" padding-left:20px;padding-right:20px">
                        <p style="font-size: 25px;">Description (Optional)</p>
                        <input type="text" class="description">
                    </div>
                    <div class="model-center" style="padding-left:20px;padding-right:20px">
                        <div style="display:flex;flex-direction:column;gap:1rem">
                            <div style="display:flex;gap:0.4rem"><img src="images/calenderlive.png" style="width:10%;margin-top:0.5rem">
                            <div contentEditable="true" class="text_box" style="padding:10px"> 
                            <script>var utc = new Date().toJSON().slice(0,10).replace(/-/g,'/');
                            document.write(utc);</script></div>
                       </div>
                        <div style="display:flex;gap:0.4rem"><img src="images/clocklive.png" style="width:10%;margin-top:0.5rem"><form><input type="time" name="mytime" id="mytime" class="text_box" style="padding:10px"placeholder="Set Time"></div>
                    </form> </div>
                        <div style="display:flex;flex-direction:column;align-items:center;margin-top:1rem">
                        <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        </label>
                        <p style="font-size: 25px;">Set Reminder</p>
                        </div>

                    </div>
                    <div class="bottom_buttons">
                        <a href="live.php" style="background-color:none"><button class="cancel_btn">Cancel</button></a>
                        <button class="save_btn">Save</button>
                        
                    </div>
                
                    
                </div>

    </div>

    <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("livebutton");

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                        event.preventDefault(); //keeps page from refreshing
                        modal.style.display = "block";
                    }
                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    </script>



     <!-----------------------------SCHEDULING LIVE-------------------------------->
     <script>
                        
                            const Date_function = () =>{
                                var now = new Date();
                            var value;
                            const str = obtain_Date(now,0);
                            const startdate = new Date(str);

                            const currentDate = new Date();
                            const daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

                            
                            var i=0;
                            while(i<daysInMonth)
                            {
                            value = obtain_Date(startdate,i);
                            days = ['Sun','Mon','Tues','Wed','Thurs','Fri','Sat'];
                            console.log(value.getDate())
                            html = `<div class="item">
                            <div class="day">`+days[parseInt(value.getDay())] +`</div><br>
                            <div class="date">`+value.getDate()+ `</div>
                            
                            </div>`
                            document.getElementById('slider-content').innerHTML += html ;
                            i++; 
                            }
                            }
                            
                            // Obtain specific dates -->
                            const obtain_Date = (date,x) =>{  
                                var newdate = new Date();
                                newdate.setDate(date.getDate() + x)
                            
                                return newdate;
                            }
                            
                            
                            Date_function();
                            
                            
                            const slider = document.querySelector('#slider-content');
                            
                            let sliderGrabbed = false;
                            
                            
                            slider.addEventListener('mousedown', (e) => {
                                sliderGrabbed = true;
                                slider.style.cursor = 'grabbing';
                            })
                            
                            slider.addEventListener('mouseup', (e) => {
                                sliderGrabbed = false;
                                slider.style.cursor = 'grab';
                            })
                            
                            slider.addEventListener('mouseleave', (e) => {
                                sliderGrabbed = false;
                            })
                            
                            slider.addEventListener('mousemove', (e) => {
                                if(sliderGrabbed){
                                    slider.parentElement.scrollLeft -= e.movementX;
                                }
                            })
                            
                            slider.addEventListener('wheel', (e) =>{
                                e.preventDefault()
                                slider.parentElement.scrollLeft += e.deltaY;
                            })
                            
                            function getScrollPercentage(){
                            return ((slider.parentElement.scrollLeft / (slider.parentElement.scrollWidth - slider.parentElement.clientWidth) ) * 100);
                            }
                            
                            </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>