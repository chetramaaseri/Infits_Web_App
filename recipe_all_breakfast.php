<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
    font-family: "NATS", sans-serif !important;
    letter-spacing: 1px;
    font-weight: 400;   
    position: relative;
}
        .header {
            display: flex;
            flex-direction: row !important;
            margin: 10px;
            margin-left: 20px;
            justify-content: space-between;
            letter-spacing: 0em;
        }

.searchbox {
    width: auto;
    width: 360px;
    height: 50px;
    background: #ffffff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    padding: 10px;
}

.header {
    display: flex;
    flex-direction: row;
    margin: 10px;
    
    margin-left: 20px;
    justify-content: space-between;
    letter-spacing: 0em;
}

#myDIV {
    margin-right: 0px;
 
}

#myDIV1 {
    margin: 0px;
    /* overflow: auto; */
    /* margin-right: 0px; */
    /* width: 100vw !important; */
    /* border: 2px solid red; */
}
.header h4{
    margin-top:39px;
}
#topnav-content-1 {
    font-size: 20px;
    font-weight: bold;
    margin-top: 6px;
    letter-spacing: 0.05em;
    margin-bottom: 5px;
}

#topnav-content-2 {
    letter-spacing: 1px;
    font-weight: 500;
    font-size: 15px;
    margin-top: 12px;
    margin-bottom:6px;
}


.card {
    background: #FFFFFF;
    border-radius: 17.8334px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    margin-right: 40px;
    bottom:20px;
    padding:15px;
    width:300px; 
    height:250px;
    border-radius:16px; 
    /* margin-left:50px !important;
    margin-right:-5px; */
    margin-top:30px;
}

        .card-upper-text {
            font-size: 20px;
            font-weight: bold;
            padding: 5px 10px;
            background-color: #FEA945;
            box-shadow: 0px 0px 25px rgba(255, 255, 255, 0.75);
            border-radius: 8px;
            color: white;
            font-weight: 500;
            font-size: 12px;
            line-height: 18px;
        }

        .card-food {
    font-size: 23px;
    font-weight: 580;
    line-height: 18px;
    letter-spacing: -0.11428570002317429px;
    text-align: left;
    margin-top: -20px;
    width:200px;
    margin-bottom: 5px;
    margin-top:-10px;
}

        .card-calorie {
            font-size: 20px;
            font-weight: 400;
            line-height: 12px;
            letter-spacing: 0em;
            text-align: left;
            align-items: center;
            /* or 8px */
            display: flex;
            color: #A3A1A1;
        }

.card-num-circle {
    background: #9C74F5;
    border-radius: 50%;
    color: white;
    padding: 5px;
    height: 25px;
    width:25px;
    margin-top: -5px;
    
}

        .card-num {
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 18px;
            color: #9C74F5;
        }


.container1{
    display: grid;
    grid-template-columns: auto auto auto auto;
    margin-top: 32px;
    margin-left:10px;
    width:auto;
    height: max-content;
    padding: 4px;
    
    overflow-x:auto;
   
}
.container1::-webkit-scrollbar{
    display: none;
   
}
.container1 .top-card{
    overflow: hidden;
    display: flex;
    flex-direction: column;
    position: relative;
    width: 500px;
    height: 200px;
    justify-content: center;
    align-items: center;
    
    border-radius: 16px;
    font-size: 19px;
}
.container1 .top-card .imag{
    position: absolute;
}
.container1 .top-card .im1{
    width: 150px;
    height: 200px;
    top: -8px;
    right: 0px;
}
.container1 .top-card .im2{
    width: 170.01px;
    height: 52px;
    transform: rotate(45deg);
    bottom: -5px;
    left: -30px;
    transform: scale(1.4);
}
.top-card h3::before{
    content: '';
    width: 260px;
    height: 220px;
    border: 1px solid rgba(234, 139, 139, 0.907);
    border-radius: 50%;
    position: absolute;
    top: -60px;
    left: -60px;
}
#myDIV1 h3::before{
    content: '';
    width: 260px;
    height: 220px;
    
    border: 1px solid rgba(234, 139, 139, 0.907);
    border-radius: 50%;
    position: absolute;
    top: -60px;
    left: -60px;
}
.breakfast .top-card h3::before{
    border: 1px solid rgb(255, 255, 255);
}
.snacks .top-card h3::before{
    border: 1px solid rgb(255, 255, 255);
}
.lunch .top-card h3::before{
    border: 1px solid #dbaaab;

}
.dinner .top-card h3::before{
    border: 1px solid #dc898a;
}
#myDIV1 .breakfast .top-card h3::before{
    border: 1px solid #92ceb6;;
}
#myDIV1 .snacks .top-card h3::before{
    border: 1px solid  #5191af;;
}
#myDIV1 .lunch .top-card h3::before{
    border: 1px solid #dbaaab;

}

        /* .recipe-add-btn {
        position: inherit;
        justify-content: flex-end;
        display: flex;
       
    } */
    @media screen and (min-width:720px) and (max-width:1500px){
        .heading{
    justify-content:flex-start !important;
}
.header{
        display:flex;
        flex-direction:column !important;
        align-items:flex-start !important;
       }
.header h4{
    margin-top:39px;
}
.searchbox{
    margin-left:50px !important;
    margin-top: 10px;
    width: 350px;
    margin-bottom: 20px;
}
        .card{
            margin: 20px auto !important;
        }
        .but{
            position:absolute !important;
        }
    }
    @media screen and (min-width:720px) and (max-width:920px) {
       .header{
        display:flex;
        flex-direction:column !important;
        align-items:flex-start !important;
       }
       .searchbox{
        margin-left:40px;
       }
    }
    @media screen and (min-width:0px) and (max-width:720px) {
        .header{
        display:flex;
        flex-direction:column !important;
        align-items:flex-start !important;
        
       }
        .flex.row{
            margin:auto;
            margin-left:auto !important;
        }
        .card{
            margin: 10px auto !important;
        } 
        .searchbox{
            margin-left:14px !important;
        }
       
        .but{
            position:absolute !important;
        }
        .title{
            margin-left:13px !important;
        }
        small{
            margin-left:0rem !important;
        }
        
    }
    @media screen and (min-width:0px) and (max-width:420px){
        .searchbox{
            width:300px;
        }
        
    }
   
    </style>
</head>

<body>
    <div class="header" style="align-items:center;">
        <div class="title" style="font-size:48px;font-weight:400;margin-left:3rem;margin-top:1.2rem;">Recipes <small style="color: #787885; font-size:20px; margin-left:1rem;">All Breakfast Recipes</small></div>
        <div style="margin-right:2rem;display:flex;gap:1.5rem">
            <div class="searchbox">
                <button style="background-color:white;border:none;" id="seabtn" name="seabtn"><img src="images/vec_search.png" alt=""></button>
                <input type="search" name="sinput" placeholder="Search" style="border:none;font-size:20px;margin-left:1rem;font-weight:400;">
            </div>
        </div>
    </div>




    <!-- breakfast lunch dinner -->
    <div class="container1" style="margin-left:20px" id="myDIV1" onscroll="myFunction()">
        <a href="all_recipes.php" style="color: inherit;" class="breakfast" id="btn1">
        <div class="top-card" style="  background-color: #85B4A1;margin-left:50px;width:320px; height250px;">
                <span class="ci ci1" style="background-color:#75A190;opacity: 0.76;"></span><span class="ci ci2" style="background-color: #75A190;opacity: 0.76;"></span>
                <img src="./images/istockphoto-916537422-612x612-removebg-preview 1.png" class="imag im1" style="top:-40px">
                <h3 style="margin-bottom:10px;color:#FFFFFF;font-weight: 400;margin-top:30px;margin-right:145px;font-size:32px;">All Recipe</h3>
                <p style="margin-bottom:80px;color: rgba(255, 255, 255, 0.9);margin-top:5px; margin-right:110px;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/Picnic.png" class="imag im2 im2-2" style=" width:100px;left:5px;bottom:-5px;height:80px;transform:rotate(1deg);">
        </div>
        </a>

        <a href="all_recipes.php" style="color: inherit;" class="lunch" id="btn2">
        <div class="top-card" style=" background-color: #db695f;width:320px; height250px;">
                <span class="ci ci1" style="background-color:#BD544B;opacity: 0.76;"></span><span class="ci ci2" style="background-color: #BD544B;opacity: 0.76;"></span>
                <img src="./images/istockphoto-108596915-612x612-removebg-preview (1) 1.png" class="imag im1" style="top:-30px">
                <h3 style="margin-bottom:10px;color:#FFFFFF;font-weight: 400;margin-top:30px;margin-right:126px;font-size:32px;">All Time fav</h3>
                <p style="margin-bottom:80px;color: rgba(255, 255, 255, 0.9);margin-top:5px; margin-right:110px;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/Book.png" class="imag im2 im2-2" style="width:45%;height:35%;left:3px;bottom:-2px;transform:rotate(1deg);">
        </div>
        </a>

        <a href="all_recipes.php" style="color: inherit;" class="snacks" id="btn3">
        <div class="top-card" style=" background-color: #6cb7d9;width:320px; height250px;">
                <span class="ci ci1" style="background-color:rgb(43 128 153 / 20%);opacity: 0.76;"></span><span class="ci ci2" style="background-color: rgb(43 128 153 / 20%);opacity: 0.76;"></span>
                <img src="./images/istockphoto-1339640372-612x612-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-bottom:10px;color:#FFFFFF;font-weight: 400;margin-top:30px;margin-right:85px;font-size:32px;">Recommended</h3>
                <p style="margin-bottom:80px;color: rgba(255, 255, 255, 0.9);margin-top:5px; margin-right:110px;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/snac.png" class="imag im2 im2-2" style="width:35%;height:35%;left:3px;bottom:0px;transform:rotate(1deg);">
        </div>
        </a>
    </div>


    <!-- <div class="category" style="display:flex;justify-content:flex-start;margin:20px;margin-right:30px;">
        
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:10px; margin-left:55px;padding-top:1px;padding-bottom:1px;">
            <div class="filter-text" >Oats</div>
            <img class="filter-line"  src="./images/oats.png"  style="padding:5px" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:10px; margin-left:20px;">
            <div class="filter-text" >Creps</div>
            <img class="filter-line" style="padding:5px;" src="./images/crep.jpg"  alt="">   

        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:10px; margin-left:20px;">
            <div class="filter-text" >Pancake</div>
            <img class="filter-line"  src="./images/recipe_default.png"  style="padding-left:5px"alt="">
        </div>
    </div> -->


    <!-- all recipes -->
    <div class="middle_wrapper" style="display:flex;justify-content:space-between;margin-top:20px;margin-left:5rem;margin-right:2.5rem">
        <h3 class="recipe" style="font-weight:500;margin-left:50px;color:black; font-size: 30px;">All Recipes</h3>
        <a href="all_recipe_list.php"><h3 style="color:#6A6A6A;font-size:20px; margin-right: 50px;">View All</h3></a>
    </div>


    <!-- recipes from db -->
    <?php
    $sql = "SELECT * FROM `default_recipes` WHERE drecipe_category LIKE 'br%';";
    $res = mysqli_query($conn, $sql);
    ?>

    <div class="flex row">
        <?php $counter = 0;  
    while ($d = mysqli_fetch_assoc($res)) {
            $drecipe_recipe = explode(',', $d['drecipe_recipe']);
            $steps = count($drecipe_recipe);
            $drecipe_nutritional = $d['drecipe_nutritional information'];

            $drecipe_nutritional = trim($drecipe_nutritional, '{}');
            $pairs = explode(', ', $drecipe_nutritional);
            $nutritional = array();
        foreach ($pairs as $pair) {
                list($key, $value) = explode(': ', $pair);
                $key = trim($key, "'");
                $value = trim($value, "'");
                $nutritional[$key] = $value;
            }
            if ($counter == 5) {
                break; 
            }
            $counter++;

        ?>
            <div class="card d-flex" style="padding:15px; width:325px; border-radius:16px;height:204px;margin:25px 40px;">
                <div class="card-upper d-flex justify-content-between">
                    <p id="bu" class="card-upper-text"> Medium </p>
                    <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>
                </div>
                <div class="img-dis" style="width:100%; text-align:center;">
                    <img src="images/pancake.svg" style="margin-top:-63px;height:126px; width:201px;margin-left:4px; object-fit:cover;" />
                </div>
                <div class="d-flex justify-content-between">
                    <p class="card-food"><?php echo $d['drecipe_name'] ?></p>
                    <div class="header">
                        <div class="dropdown ">
                            <div id="myDropdownIcon" class="dropbtn" onclick="showDropdown(event)">
                                <img class="" src="./icons/vertical-three-dots.svg" alt="" style="margin-top:-30px;">
                            </div>

                            <div id="myDropdownContent" class="dropdown-content dropdown-card " style="display:none;">
                                <a style="color: white;" class="edit-button" href="#">Edit</a>
                                <a style="color: white;" class="delete-button" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between" style="align-items:center;margin-top:-8px;">
                    <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> <?php echo $nutritional['Calories'] ?> kcal</p>
                    <div class="d-flex align-items-center card-num">
                        <div class="card-num-circle"><?= $steps ?> </div> &nbsp;
                        <div class="">steps</div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <button class="but" style="border-radius:50%;background-color:#9C74F5;width:85px;height:85px;filter: drop-shadow(0px 0px 68px rgba(0, 0, 0, 0.3));color:white;font-size:40px;border:none;right:50px;position:fixed;bottom:40px;">+</button>

    </div>

    

    <script>
        function myFunction() {
            const element = document.getElementById("myDIV1");
            let x = element.scrollLeft;
            let y = element.scrollTop;
            document.getElementById("demo").innerHTML = "Horizontally: " + x.toFixed() + "<br>Vertically: " + y.toFixed();
        }
        function showDropdown(event) {
            var dropdown = event.currentTarget.parentNode.querySelector(".dropdown-content");
            dropdown.classList.toggle("show");
            setTimeout(removeDropDown, 5000);
        }

        function removeDropDown() {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                dropdowns[i].classList.remove('show');
            }
        }

        function removeDropdown(event) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains("show") && !openDropdown.contains(event.target)) {
                    openDropdown.classList.remove("show");
                }
            }
        }
    </script>
</body>

</html>