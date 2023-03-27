<?php
include('navbar.php');?>
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
    <br>
    <div class="header" style="">
    <div class="heading">
        <h1 style="margin-left:3rem ;font-family: 'NATS';font-style: normal;font-weight: 500;">Recipes</h1>
    </div>
        <div class="search" style="margin-right:2.2rem;display:flex;gap:1.5rem">
            <div class="searchbox">
                <button style="background-color:white;border:none;" id="seabtn" name="seabtn"><img src="images/vec_search.png" alt=""></button>
                <input type="search" name="sinput" placeholder="Search here" style="border:none;font-size:1.3rem;margin-left:1rem;width:200px;">

            </div>
        </div>
    </div>

    <div class="container1"  id="myDIV" onscroll="myFunction()" >
    <a href="recipe_breakfast.php" style="color: inherit;" class="breakfast" id="btn1">
            <div class="top-card" style=" background-color: #61de99;">
                <span class="ci ci1" style="background-color:#CCF5CD;"></span><span class="ci ci2" style="background-color: #CCF5CD"></span>
                <img src="./images/breakfast-waffles-realistic-top-view-image_1284-14471-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-bottom:10px;margin-right:180px;color: #000000;font-weight: 400;">Breakfast</h3>
                <p style="margin-bottom:100px;margin-right:140px;color: #6A6A6A;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/tree branch.png" class="imag im2 im2-2" style="left: -110px;bottom: 18px;">
                <img src="./images/tree branch.png" class="imag im2 " style="left: -25px;bottom: 18px;">
            </div>
    </a>
    
    <a href="recipe_lunch.php" style="color: inherit;" class="lunch" id="btn2">
            <div class="top-card" style=" background-color: #ebbcbd;">
                <span class="ci ci1" style="background-color: #F3D1D2;"></span><span class="ci ci2" style="background-color: #F3D1D2;"></span>
                <img src="./images//detailed-bento-box-illustrated_23-2148879878-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-bottom:10px;margin-right:200px;color: #000000;font-weight: 400;">Lunch</h3>
                <p style="margin-bottom:100px;margin-right:140px;color: #6A6A6A;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/book-of-recipes-concept-vector-14744961-removebg-preview 1.png" class="imag im2" style="bottom:20px;left:30px;width:100px">
            </div>
    </a>

    <a href="recipe_snacks.php" style="color: inherit;" class="snacks" id="btn3">
            <div class="top-card" style=" background-color: #a6d5ee;">
                <span class="ci ci1" style="background-color: #B8DDF1"></span><span class="ci ci2" style="background-color: #B8DDF1;"></span>
                <img src="./images/istockphoto-1339640372-612x612-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-bottom:10px;margin-right:200px;color: #000000;font-weight: 400;">Snacks</h3>
                <p style="margin-bottom:100px;margin-right:140px;color: #6A6A6A;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/snac.png" class="imag im2" style="bottom:20px;left:30px;width:100px">
            </div>
    </a>

    <a href="recipe_dinner.php" style="color: inherit;" class="dinner" id="btn4">
            <div class="top-card" style=" background-color: #e39494;">
                <span class="ci ci1" style="background-color: 
                #EDB2B2"></span><span class="ci ci2" style="background-color: #EDB2B2"></span>
                <img src="./images/istockphoto-689896272-612x612-removebg-preview 1.png" class="imag im1" style="top:-80px">
                <h3 style="margin-bottom:10px;margin-right:200px;color: #000000;font-weight: 400;">Dinner</h3>
                <p style="margin-bottom:100px;margin-right:140px;color: #6A6A6A;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/bowl.png" class="imag im2" style="bottom:20px;left:30px;width:80px">
            </div>
</a>
        </div>
   

    <!-- all recipes -->
    <div class="middle_wrapper" style="display:flex;justify-content:space-between;margin-top:20px;margin-left:5rem;margin-right:2.5rem">
        <h3 class="recipe" style="font-weight:500;margin-left:20px;color:black">All Recipes</h3>
        <a href="all_recipe_list.php" style="background-color:none;border:nome;color: #6A6A6A;font-size:20px"><h3>View All</h3></a>
    </div>
    <?php
    $sql = "SELECT * FROM `default_recipes`";
    $res = mysqli_query($conn, $sql);
    ?>

    <div class="flex row" >
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
            <div class="card d-flex" style="padding:15px; width:300px;border-radius:16px;">
                <div class="card-upper d-flex justify-content-between">
                    <p id="bu" class="card-upper-text"> Medium </p>
                    <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>
                </div>
                <div class="img-dis" style="width:100%; text-align:center;">
                    <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
                </div>
                <div class="d-flex justify-content-between">
                    <p class="card-food"><?php echo $d['drecipe_name'] ?></p>
                    <div class="header">
                        <div class="dropdown ">
                            <div id="myDropdownIcon" class="dropbtn" onclick="showDropdown(event)">
                                <img class="" src="./icons/vertical-three-dots.svg" alt="">
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
                        <div class="">Steps</div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

        <div class="recipe-add-btn" style="padding-right:40px">
            <h3 style="margin-left:20px;color: #4B9AFB;">Create Recipe</h3>
            <img src="./images/receipe_create.png" alt="" style="width:40px;height:40px;margin-top:15px;margin-left:20px">
        </div>
    </div>

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
</body>

</html>