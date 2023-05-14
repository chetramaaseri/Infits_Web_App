<?php
include('navbar.php');
?>
<style>
<?php
include 'css/all_recipes.css'; 
?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link ref -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>All Recipes</title>
</head>

<body>
    
    <div class="header" style="">
    <div class="heading">
        <h1 style="margin-left:3rem ;font-family: 'NATS';font-style: normal;font-weight: 500;font-size:48px;">Recipes</h1>
    </div>
     <div class="search" style="margin-right:2.2rem;display:flex;gap:1.5rem">
            <div class="searchbox">
                <button style="background-color:white;border:none;" id="seabtn" name="seabtn"><img src="images/vec_search.png" alt=""></button>
                <input type="search" name="input" placeholder="Search" style="border:none;font-size:20px;margin-left:1rem;width:60%;height:45px;margin-top:-5px;font-weight:400;">

            </div>
        </div>
    </div>

    <div class="container1"  id="myDIV" onscroll="myFunction()" >
    <a href="recipe_breakfast.php" style="color: inherit; margin-left: -5px;" class="breakfast" id="btn1">
            <div class="top-card" style=" background-color: #61de99;">
                <span class="ci ci1" style="background-color:#CCF5CD;"></span><span class="ci ci2" style="background-color: #CCF5CD"></span>
                <img src="./images/breakfast-waffles-realistic-top-view-image_1284-14471-removebg-preview 1.png" class="imag im1" style="width:200px;height:179px;">
                <h3 style="margin-bottom:10px;margin-right:135px;color: #000000;font-weight: 400;font-size:35px;margin-top:35px;">Breakfast</h3>
                <p style="margin-bottom:100px;margin-right:100px;color: #6A6A6A;font-size:19px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/tree branch.png" class="imag im2 im2-2" style="left:-90px;bottom:25px;height:75px;">
                <img src="./pancakeimg/tree branch.svg" class="imag im2 " style="left:-27px;bottom:31px;height:84px;">
            </div>
    </a>
    
    <a href="recipe_lunch.php" style="color: inherit;" class="lunch" id="btn2">
            <div class="top-card" style=" background-color:#F7C8C9!important;">
                <span class="ci ci1" style="background-color: #E0B6B6;"></span><span class="ci ci2" style="background-color: #E0B6B6;"></span>
                <img src="./pancakeimg/lunch.png" class="imag im1" style="width:198px;height:234px;">
                <h3 style="margin-bottom:10px;margin-right:180px;color: #000000;font-weight:400;font-size:35px;">Lunch</h3>
                <p style="margin-bottom:100px;margin-right:100px;color: #6A6A6A;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/book-of-recipes-concept-vector-14744961-removebg-preview 1.png" class="imag im2" style="width:35%;height:35%;left:10px;bottom:11px;transform:rotate(1deg);">
            </div>
    </a>

    <a href="recipe_snacks.php" style="color: inherit;" class="snacks" id="btn3">
            <div class="top-card" style=" background-color: #a6d5ee;">
                <span class="ci ci1" style="background-color: #B8DDF1;z-index:1;"></span><span class="ci ci2" style="background-color: #B8DDF1;z-index:1;"></span>
                <img src="./images/istockphoto-1339640372-612x612-removebg-preview 1.png" class="imag im1" style="width:205px;height:218px;">
                <h3 style="margin-bottom:10px;margin-right:168px;color: #000000;font-weight: 400;font-size:35px;">Snacks</h3>
                <p style="margin-bottom:100px;margin-right:100px;color: #6A6A6A;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/snac.png" class="imag im2" style="width:35%;height:35%;left:3px;bottom:10px;transform:rotate(1deg);">
            </div>
    </a>

    <a href="recipe_dinner.php" style="color: inherit;margin-right:10px;" class="dinner" id="btn4">
            <div class="top-card" style=" background-color: #e39494;">
                <span class="ci ci1" style="background-color: 
                #EDB2B2"></span><span class="ci ci2" style="background-color: #EDB2B2"></span>
                <img src="./images/istockphoto-689896272-612x612-removebg-preview 1.png" class="imag im1" style="top:-80px;width:184px;height:192px;">
                <h3 style="margin-bottom:10px;margin-right:170px;color: #000000;font-weight: 400;font-size:35px;">Dinner</h3>
                <p style="margin-bottom:100px;margin-right:100px;color:#6A6A6A;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/bowl.png" class="imag im2" style="bottom:19px;left:20px;width:60px;height:40px;">
            </div>
</a>
        </div>
   

    <!-- all recipes -->
    <div class="middle_wrapper" style="display:flex;justify-content:space-between;margin-top:30px;margin-right:2.5rem">
        <h3 class="recipe" style="margin-left:50px; color:black;font-family:'NATS';">All Recipes</h3>
        <a href="all_recipe_list.php" style="background-color:none;border:nome;color: #818181"><h6 style="font-family:'NATS'; font-size:17px;margin-top:30px; margin-right:40px;">View all</h6></a>
    </div>
    <?php
    $sql = "SELECT * FROM `default_recipes`";
    $res = mysqli_query($conn, $sql);
    ?>

    <div class="main" >
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
            <div class="card d-flex" style="padding:15px; width:310px; height:208px;border-radius:16px;margin:35px 35px; ">
                <div class="card-upper d-flex justify-content-between">
                    <p id="bu" class="card-upper-text"> Medium </p>
                    <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>
                </div>
                <div class="img-dis" style="width:100%;margin-top:-35px;text-align:center;">
                    <img src="./images/alooparatha-eg.png" style="height:115px; width:170px; margin-left:-20px; object-fit:cover;margin-top:-9px;" />
                </div>
                <div class="d-flex justify-content-between">
                    <p class="card-food"><?php echo $d['drecipe_name'] ?></p>
                    <div class="header">
                        <div class="dropdown ">
                            <div id="myDropdownIcon" class="dropbtn" onclick="showDropdown(event)">
                                <img class="" src="./icons/vertical-three-dots.svg" alt="" style="margin-top:20px;">
                            </div>

                            <div id="myDropdownContent" class="dropdown-content dropdown-card ">
                                <a style="color: white;" class="edit-button" href="#">Edit</a>
                                <a onclick="return confirm('Are you sure to delete this?')" style="color: white;" class="delete-button" href="delete-recipe.php?recid=<?php echo $d['drecipe_id']; ?>">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between" style="align-items:center;">
                    <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> <?php echo $nutritional['Calories'] ?> kcal</p>
                    <div class="d-flex align-items-center card-num">
                        <div class="card-num-circle"><?= $steps ?> </div> &nbsp;
                        <div class="step" style="font-size:18px;">Steps</div>
                    </div>
                </div>
                
            </div>

            
        <?php } ?>
    </div>

    <button class="butt" style="border-radius:50%;background-color:#9C74F5;width:85px;height:85px;filter: drop-shadow(0px 0px 68px rgba(0, 0, 0, 0.3));color:white;font-size:60px;border:none;position:absolute;right:50px;bottom:60px;">+</button>
</body>

    <script>
        function myFunction() {
            const element = document.getElementById("myDIV");
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

        // document.addEventListener("click", removeDropdown);
    </script>

</html>