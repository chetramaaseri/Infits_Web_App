<?php include 'navbar.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Health Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

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

body{
    font-family: 'NATS' !important;
}
.left {     
         position: relative;
        display:inline-block;
        margin-top: 15px;
        margin-left: 30px;
        font-weight: 400;
  }
  .content img{    
  width: 370px;
  height: 250px;
  margin-left: 400px;
  margin-top: 50px;
  }
  .content p{
  font-family: 'NATS';
  font-style: normal;
  font-weight: 500;
  font-size: 36px;
  line-height: 48px;
  text-align: center;
  color: #000000;
  margin-right: 130px;
  margin-top: 7px;

  }
  
  .recipe-add-btn{
  display: flex;
    margin-left:77.3rem;
    bottom:20px;
    margin-top:4.7rem;
    width: 250px;
    height: 80px;
    background: #FFFFFF;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
    border-radius: 50px;
    }
    <style>
  /* Styles for screens with width <= 767px */
  @media screen and (max-width: 767px) {
    .main-content {
      overflow: auto;
    }
    .content img {
      width: 100%;
      height: auto;
      margin-top: 20px;
    }

    .content p {
      font-size: 24px;
      line-height: 36px;
      margin: 20px;
      text-align: center;
    }

    .recipe-add-btn {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px auto;
      width: 250px;
      height: 80px;
      background: #ffffff;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
      border-radius: 50px;
      text-align: center;
    }

    .recipe-add-btn h3 {
      margin: 0;
      font-size: 20px;
      color: #4b9afb;
    }

    .recipe-add-btn img {
      width: 30px;
      height: 30px;
      margin: 0 10px;
    }
  }

  @media screen and (min-width: 720px) and (max-width:830px) {

.content p{
  font-size: 24px;
margin-right:-70px;
}
}
@media screen and (min-width: 825px) and (max-width:1050px) {
.content p{
font-size: 24px;
margin-right:-20px;
}
}
@media screen and (min-width:830px) and (max-width:1500px) {
.content p{
font-size: 24px;
margin-left:-30px;
}
}
@media screen and (min-width: 720px) and (max-width:1500px) {
.main-content{
  overflow: auto;
}
.sliding-cal {
position: relative;
width: auto;
margin-left:-2px;
}
.content img{
margin-top: 50px;
width: 260px;
height: 200px;

}
.recipe-add-btn{
margin-top:  60px;
margin-right: 30px;
margin-bottom:20px; 
float: right;
}
}

@media screen and (min-width: 0px) and (max-width: 600px) {
.sliding-cal {
width:auto;
margin-left:1px;
margin-right:-55px;
margin-top: -20px;
}
}
@media screen and (min-width: 600px) and (max-width: 720px) {
.main-content{
overflow: auto;
} 
.sliding-cal {
  margin-right:-20px;
  margin-left:1px;
  width: auto;
}
} 

@media screen and (min-width:550px) and (max-width: 720px) {
.content img{ 
width:260px;
height:200px;
margin-left:15  0px; 
margin-right: auto;
margin-top:4rem;
}
}
@media screen and (min-width: 0px) and (max-width: 550px) {
.content img{ 
width:260px;
height:200px;
margin-left:50px; 
margin-right: auto;
margin-top:4rem;
}
}

@media screen and (min-width: 0px) and (max-width: 720px) {

.left{
margin-top:-140px;
margin-left: 80px;
}.content p{
  margin-left: 20px;
  margin-top: 0.5rem;
  font-size: 24px;
  width:100%;
}
.recipe-add-btn{
margin-top:30px;
margin-right: 20px;
float: right;
margin-bottom:20px;
}
} 


</style>

</style>

<body>
<div class="main-content">
      <div> 
        <div class="left"> 
          <h1>Forms and Documents</h1> 
        </div> 
      </div> 
     <div class="content">
          <img src="./images/No messages.svg">
          <p>You haven't created<br> any form yet!</p>
      </div>
      <div class="recipe-add-btn" style="padding-right:40px; cursor:pointer;" >
        <h3 style="margin-left:20px; margin-top:25px; font-size:29px;color: #4B9AFB;">Create Recipe</h3>
        <img src="./images/receipe_create.png" alt="" style="width:40px; height:40px; margin-top:20px; margin-right:-20px; margin-left:18px;">
    </div>
</div>
</body>
</html>