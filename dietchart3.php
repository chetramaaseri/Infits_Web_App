<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8" />
    <title>Infit</title>
    <!-- <link rel="stylesheet"  /> -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>
<style>
     .content{
      overflow: auto;
       display: flex;
       flex-direction: column;
       height: 90%;
       font-family: 'Poppins';
       font-style: normal;
       padding: 10px;
       margin: 10px;
       position: relative;

     }
     .main{
        display: flex;
        justify-content: space-between;
        align-items: center;
     }
     .top{
        position: relative;
        display:flex;
        justify-content: space-around;
        margin-left: 20px; 
        /* float: left;
        width: 50%; }
        */
     }
     
      .top p{
        position: relative;
        margin-top: 0%;
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        font-size: 44px;
        color: #202224;
       

     }
     .top img {
          height:20px;
          width: 20px;
          top: 15px;
          margin-top: 20px;
          margin-left: 30px;
         
         
     }
     .top-right{
          display: flex;
         justify-content: space-between;
         align-items: center;
         margin-right: 20px; 
          float: right;
         width: 50%; }
       
     
      .top-right .btn{
        position: relative;
        box-sizing: border-box;
        border: 1px solid #9C74F5;
        background-color: #fff; 
        border-radius: 10px;
        height: 50px;
        width: 200px;
        margin-left: 38rem;
        /* margin-right: 20px;  */
       
       
     }
     .top-right span{
      text-align: center;
       color: #9C74F5;
       font-family: 'Poppins';
       
       text-align: center;
       text-decoration: none;
   
       font-size: 15px;
       

     }
     .top-right img{
        width: 30px;
        height: 20px;
        margin-right: 5px;
        margin-left: 0px;
     }
    
    .down
    {
        position: absolute;
        margin-left: 20px;
        top: 60px;
        left = 0px;
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        font-size: 33px;
        color: #CBCBCB;
    } 
    /* new styling for upperside */
    /* .main{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .top{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }
    .top img{
        width: 20px;
    }
    .top h4{
        position: relative;
        margin-top: 0%;
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        font-size: 44px;
        color: #202224;
       

     } */


    .day-band{
      position: relative;
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-left: 5%;
      margin-right: 10%;
      /* margin-top: 5rem; */
      
      
    }
    .day{
      color: black;
      padding: 10px;
      border:none;
      background: none;
    
    }
    .day:hover, .active{
      color:white;
      background:#9C74F5;
      border-radius:10px;
    }
    .button-container{
        position: absolute;
        box-sizing: border-box;
        display: flex;
        margin-top: 0px;
        width:95%;
        height:10%;
        color: #9C74F5 ;
        padding: 0 20px;
        align-items: center;
        font-size: 10px;
        font-family: 'NATS';
        font-style: normal;
        margin-left: 7rem;
        margin-right: 10px;
        top: 17rem;
        
       
    }
    
 .btn1{
    height:40px;
    width: 190px;
    background-color: #fff; 
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #9C74F5;
    font-family: 'Poppins';
    padding: 0 30px;
    margin: 37px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    border-radius: 10px;
    border: 0.880519px solid #9C74F5;
  
}
.box{
    border: 1px solid white;
    width: 1000px;
    height: 180px;
    margin-left: 120px;
    margin-right: 80px;
    top: 200px;
    padding: 10px;
    display: flex;
    flex-direction : column;
    align-items: left;
    background: #FFFFFF;
    box-shadow: 0px 7.04415px 21.1324px rgba(176, 190, 197, 0.32), 0px 2.64156px 4.40259px rgba(176, 190, 197, 0.32);
    border-radius: 8.80519px;
}
.box img {
    width: 190px;
    height: 61px;
    left: 28px;
    top: 277px;
    margin-left: 10px;
     
    background: url(Screenshot__136_-removebg-preview.png);
    border-radius: 10px;
}

.box h3 {
  text-align: left;
  font-size: 24px;
  margin-bottom: 10px;
  width: 148px;
  height: 40px;
  left: 100px;
  /* top: 40rem; */
  margin-left: 10px;
  margin-top: 1px;

  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  font-size: 26.4156px;
  line-height: 40px;
}
.box h2{
    margin-left: 40px;
    font-size: 15px;
    margin-bottom: 20px;
    left: 23.77px;
    font-weight: bolder;
    padding-bottom: 10px;
   
}
.cont{
    display: flex;
    justify-content:space-between;
}
.left{
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 26.4156px;
    line-height: 40px;
    display: flex;
    align-items: center;
    color: #000000;
}
.right{
    text-align: right;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    display: flex;
   align-items: center;
   color: #A6A1A1;

}
.right img{
    width: 20.73px;
    height: 24px;
    left: 804px;
    top: 220px;
    background: url(7306600-removebg-preview.png);
    border-radius: 10px;
}
.demo{
    display: flex;
    justify-content:space-between;

}

.up{
    background: #FFFFFF;
    box-shadow: 0px 7.04415px 21.1324px rgba(176, 190, 197, 0.32), 0px 2.64156px 4.40259px rgba(176, 190, 197, 0.32);
    border-radius: 8.80519px;
    width: 176px;
    height: 61px;
    top: 714px;
    margin-left: 10%;

    
    display: flex;
    align-items: center;
    border: 0.880519px solid #fff;
    
}
.up span {
    display: flex;
    align-items: center;
    color: #000000;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 53px;
    margin-left: 40px;
}
.up-right{
    background: #9C74F5;
    border-radius: 10px;
    margin-left:50%;
    width: 250px;
    height: 62px;
    margin-right: 9%;
    
    
    display: flex;
    align-items: center;
    border: 0.880519px solid #fff;
    
  
    
}
.up-right span{
    
       font-family: 'NATS';
       font-style: normal;
       font-weight: 400;
       font-size: 30px;
       line-height: 63px;
       display: flex;
       align-items: center;
       color: #F8F8F8;
       margin-left: 45px;
}
 /* @media screen and (min-width: 300px) and (max-width: 600px) {
    .top{
        flex-direction: column ;
        justify-content:space-between;   
        margin: auto; 
        width: auto;
        gap: 4rem;
       

    }  
    .top img{
        display: block;
        justify-content:auto;
    }

      .top h3{
        display: flex;
        flex-direction: column;
        justify-content: auto;
    }

 } */
 @media screen and (min-width: 300px) and (max-width: 600px) {
    .content{
        overflow: hidden;
    }
 }
 @media screen and (min-width: 300px) and (max-width: 600px) {
    .box{
        /* flex-wrap: wrap; */
        margin: auto;
        width: 100%;


    }
 }
 @media screen and (min-width: 300px) and (max-width: 600px) {
    .button-container{
        flex-wrap: wrap;
        flex-direction: column;
        grid-template-columns: auto auto auto auto;
        margin: auto;
        top: 16.5%;
        margin-left: 0%;
        overflow: scroll;
       
        
    }
 }

 @media screen and (max-width: 720px) {
      .main{
        /* new thing added */
        display: flex;
        flex-direction: row;
       justify-content: space-around;
       align-items: center;
       
        
      }
     
}
@media screen and (min-width: 300px) and (max-width: 600px) {
  .top{
    margin-left: auto;

  }
  .top p{
    font-size: 20px;
    text-align: end;
    margin-top:1rem;

  }
  .top img{
    margin-left: 1rem;
    width: 20px;
    margin-top: 1rem;
  }
}

      
 
 @media screen and (min-width: 300px) and (max-width: 600px) {
    .top-right .btn {
       
        margin-left:40px;
        width: 100%;


    }
    .top-right img{
        /* width:30px;
        height: 20px; */
        margin-left: 1rem;

    }
 }

 /* @media screen and (min-width: 300px) and (max-width: 600px) {
 .top {
    
     display: flex;
     flex-direction: row;
     justify-content: center;
     margin-right: auto;
     
 }
 .top h3{
    font-size: 25px;
 }
} */
@media screen and (min-width: 300px) and (max-width: 600px) {
  .down{
    /* display: flex;
    flex-wrap: wrap;
    top: 7%;
    width:100%; 
    margin: auto;
    font-size:20px; */
    margin-left: 1.5rem;
    font-size:20px;
    
   

  }


}

@media screen and (min-width: 300px) and (max-width: 600px) {
      .demo{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin:auto;
        margin-right: auto;
      }

      
}
@media screen and (min-width: 300px) and (max-width: 600px) {
    .up-right{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: auto;
        margin-top: 5%;
        margin-right: auto;
    }

}
@media screen and (min-width: 300px) and (max-width: 600px){
   .save{
     padding-right: 4rem;
   }

}

/* @media screen and (max-width: 720px) {
    .main{
        justify-items: center;
        gap: 2rem;
    }
} */





   
    </style>
   <body>
    <div class="content">
    <div class="main">
    <div class="top">
        <p> New Diet Chart</p>
        <img src="Vector (1).png">
     </div>
     <div class="top-right">
        <button class="btn" text="submit"> <span>Connect to plan</span> </button>
           <img src="Vector (2).png">
    </div>
     </div>
     <br/>
   <div class="down">Ronald Richard</div>
   <!-- <div class="main">
    <div class="top-left">
        <div class="top">
        <h4> New Diet Chart </h3>
        <img src="Vector (1).png">
        </div>
        <h4> Ronald Richard <h4>

        </div>
        <div class="top-right">
        <button class="btn" text="submit"> <span>Connect to plan</span> </button>
        <img src="Vector (2).png">
     </div> -->
   <br/>
<div class="day-band">
  <button class="day" id="daybtn">Mon</button>
  <button class="day" id="daybtn">Tue</button>
  <button class="day" id="daybtn">Wed</button>
  <button class="day" id="daybtn">Thu</button>
  <button class="day" id="daybtn">Fri</button>
  <button class="day" id="daybtn">Sat</button>
  <button class="day" id="daybtn">Sun</button>
</div>
<br/>
<br/>

<div class="button-container">
  <button class="btn1">Breakfast</button>
  <button class="btn1">Lunch</button>
  <button class="btn1">Snacks</button>
  <button class="btn1">Dinner</button>
</div>
<br/>
<br/>


    <div class="box" id="box">
        <div class="cont">
        <div class="left">
        <h3> In Morning </h3> </div>
           <div class="right">
            <img src="7306600-removebg-preview 2.png" style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
            <h5 style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; "> 200kcal <h5>
          </div>
        </div>
        <img src="Screenshot__136_-removebg-preview 6.png">
        <h2 style="display: flex ,align-items: center;" style="border-radius: 10px , border: 0.880519px solid #9C74F5;"> Aloo Paratha </h2>
    </div>
    <br/>
    <div class="box" id="box">
        <div class="cont">
        <div class="left">
        <h3> After Break </h3> </div>
           <div class="right">
            <img src="7306600-removebg-preview 2.png" style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
            <h5 style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; "> 200kcal <h5>
          </div>
        </div>
        <img src="after.png" style="border-radius: 10px , border: 0.880519px solid #9C74F5;">
        <h2 style="margin-left: 15px ,margin-right: 15px"> Bananas </h2>
    </div>

    <br/>
    <div class="demo">
        <button class="up"> <span>+ Add </span></button>
        <button class="up-right"> <span class="save"> Save Plan </span></button>
    </div>








</div>
</body>
</html>