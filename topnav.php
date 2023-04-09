<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');
@font-face {
    font-family: 'NATS';
    src:url('./font/NATS.ttf.woff') format('woff'),
        url('./font/NATS.ttf.svg#NATS') format('svg'),
        url('./font/NATS.ttf.eot'),
        url('./font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

body {
    margin: 0;
    background: url('./images/Vector_Bottom_Right.svg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: bottom -51px right -40px;
    /* width: 100vw;
        height: 100vh; */
}
.topnav {
    position: relative;
    min-height: 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: auto;
    padding-top: 1vh;
    border-bottom: #E8ECF5 2px solid;
}

.topnav .topnav-content p {
    margin: 0;
}

.topnav-content {
    margin-left: 30px;
    color: #8D8D8D;
    font-style: normal;
    font-family: 'Manrope', serif;
    font-weight: 700;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

#topnav-content-1 {
    font-size: 20px;
    letter-spacing: 0.05em;
    margin-bottom: 5px;
}

#topnav-content-2 {
    letter-spacing: 1px;
    font-weight: 500;
    font-size: 15px;
}

.topnav-content #topnav-content-3 {
    font-family: 'Poppins';
    /* NATS */
    font-style: normal;
    font-weight: 400;
    font-size: 33px;
    color: #000000;
}

#topnav-content-1-name {
    color: #212121;
}

.topnav-icons {
    height: 100%;
    margin-right: 3vw;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.topnav-icons img {
    margin-left: 30px;
    justify-self: center;
}

@media only screen and (max-width:300px){
       

        .topnav{
            width: 350%;
            border-bottom: 4px solid #E8ECF5;
        }

        #topnav-content-1{
            font-size: 70px;
        }

        #topnav-content-2{
            font-size: 60px;
        }

    }


    @media only screen and (min-width:300px) and (max-width:600px){
       

        .topnav{
            width:120%;
            border-bottom: 4px solid #E8ECF5;
        }

    }
    .notification img {
    height: 30px;
    margin-left: 0;
}

.noti-box {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    position: absolute;
    top: 60px;
    right: 40px;
    width: 400px;
    height: 440px;
    filter: drop-shadow(0px 0px 4px rgba(0, 0, 0, 0.25));
    border-radius: 20px;
    background: #FFFFFF;
    padding: 15px 20px;
    display: none;
    /* transition: 0.3s ease-in-out; */
    /* animation: slideDown 1s forwards; */
    /* animation: slideUp 1s forwards; */
}
@keyframes slideDown {
    from {
      top: -450px;
    }
    to {
      top: 60px;
    }
}
@keyframes slideUp {
    from {
      top: 60px;
    }
    to {
      top: -500px;
    }
}
.serchi{
    display:none;
}
.top {
    display: flex;
    justify-content: space-between;
    font-size: 28px;
    color: #292A2E;
    margin-right: 15px;
    margin-bottom: 10px;
}

.notifications {
    display: flex;
    flex-direction: column;
    padding: 10px 25px 10px 5px;
    gap: 15px;
    overflow-y: scroll;
    overflow-x: hidden;
    height: 340px;
}
.notifications::-webkit-scrollbar{
    display: none;
}

.notification {
    display: flex;
    gap: 10px;
    align-items: center;
}
.notification .noti-description .title{
    font-size: 18px;
    line-height: 13px;
    color: #000000;
}

.noti-description {
    display: flex;
    flex-direction: column;
}
</style>
<body>

<div class="topnav">
        <div class="topnav-content" id="topnav-change">
            <p id="topnav-content-1">Good Morning, <span id="topnav-content-1-name">
                <strong>
                   John Wayne
                </strong></span></p>
            <p id="topnav-content-2">Your performance summary this week</p>
        </div>
        <div class="topnav-icons">
            <img src="images/pp.png" style="height: 24px; width: 24; display:none;" id="addusermale">
        <div class="search-box">
                <button onclick="mysearchFunc()" id="toggleSearch" style="border-style:none;background:white;"><img src="images/vec_search.png" style="height: 20px; width: 20px;" class="sea"></button> 
                <form class="serchi">
                <div style="display:flex;">
                <input type="text" name="search" id="search-box">
                <button type="submit" style="border-style:none;background:white;"><img src="images/vec_search.png" style="height: 20px; width: 20px;" class="sea"></button>
                <ul id="suggestions">
                </ul>
                </div>
                </form>
        </div> 
        <img id="notifications-pop" src="images/vec_notification.png" style="height: 20px; width: 20px;">
            <div class="noti-box">
                <div class="top" ><span>Notifications</span><span id="noti-close">x</span></div>
               
                 </div>
           

            <img src="./upload/pp.jpg" style="height: 33px; width: 33px; border-radius: 100%;" alt="" />

        </div>

    </div>


</body>
</html>