<?php

$conn = mysqli_connect("localhost","root","","mydb1");

$query = "create table if not exists product(id int auto_increment primary key, 
pphoto longblob, pname varchar(30), pprice varchar(10))";
mysqli_query($conn,$query);

if(isset($_POST['submit'])){
    $img = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $result1 = "insert into product(pphoto,pname,pprice) values('$img','$name','$price')";
    $top = mysqli_query($conn,$result1);
}



// if(isset($_POST['submit'])){
//     // $query = "select * from "
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mobile_main.css">
</head>

<body>
    <div class="main" method="post">
         
        <div style="display:inline-flex;">
        <img alt="" src="https://m.media-amazon.com/images/I/21ghlFmBoIL._FMpng_SX200_.png" class="qa-title" width="40%" height="30%">
            <div>
            <img src="	https://m.media-amazon.com/images/I/61PnHlc0HCL._SX679_.jpg
" width="50%" height="100%" alt="">
            </div>
        </div>
        <div class="products">  
            <div class="photo">
                <img src="https://m.media-amazon.com/images/I/61bK6PMOC3L._SX679_.jpg
" width="100%" height="100%" name="image" alt="">
            </div>
            <div class="discription">
                <h1 name="name">Apple iPhone 14 (128 GB) - Blue</h1>
                <h1 class="price" style="color:green; font-weight:bolder;" name="price">₹62,999 </h1>
                <h3 style="color:green;font-weight:500;">-21%</h3>
                <p> <strike style="color:red;">79900</strike>
                
                </p>
                <button class="minus" type="button">-</button> 
                <input type="text" id="input" value="1">
                <button class="plus" type="button">+</button>
                <br>
                <button id="cart" name="submit">Add to cart</button>
                <button id="submit">Buy Online</button>

            </div>

            <div class="discription2">
                <h2>
Brand:	Apple <br>
Model Name:	 IPhone <br>
Network Service Provider:	Unlocked for All Carriers <br>
Operating System:	IOS <br>
Cellular Technology:	5G</h2>
            </div>
        </div>
        <!--second-->  

        <div class="products">
            <div class="photo">
                <img src="https://m.media-amazon.com/images/I/71E5zB1qbIL._SX679_.jpg
" width="100%" height="100%" alt="">
            </div>
            <div class="discription">
                <h1>Apple iPhone 14 (64 GB) - Red</h1>
                <p > <strike color="red">59900</strike><h2 style="color:green;">-18% <h1 class="price">₹48,990</h1></h2></p>
                <button class="minus" type="button">-</button> 
                <input type="text" id="input" value="1">
                <button class="plus" type="button">+</button>
                <br>
                <button id="cart">Add to cart</button>
                <button id="submit">Buy Online</button>

            </div>

            <div class="discription2">
                <h2>
Brand:	Apple <br>
Model Name:	 IPhone 12 64GB RED <br>
Network Service Provider:	Unlocked for All Carriers <br>
Operating System:	IOS 14 <br>
Cellular Technology:	5G</h2>
            </div>

            
        </div>

<!--thired-->
<div class="products">
            <div class="photo">
                <img src="	https://m.media-amazon.com/images/I/61BGE6iu4AL._SX679_.jpg
" width="100%" height="100%" alt="">
            </div>
            <div class="discription">
                <h1>Apple iPhone 14 Plus (128 GB) - Blue
</h1>
                <p > <strike>59900</strike><h2 
                style="color:green;">-18% <h1 class="price">₹48,990</h1></h2></p>
                <button class="minus" type="button">-</button> 
                <input type="text" id="input" value="1">
                <button class="plus" type="button">+</button>
                <br>
                <button id="cart">Add to cart</button>
                <button id="submit">Buy Online</button>

            </div>

            <div class="discription2">
                <h2>
Brand:	Apple <br>
Model Name:	 IPhone 12 64GB RED <br>
Network Service Provider:	Unlocked for All Carriers <br>
Operating System:	IOS 14 <br>
Cellular Technology:	5G</h2>
            </div>

            
        </div>
    </div>
    <script>
      
            
            
        let increment = document.querySelector(".plus")
        // let 

        // let priceinc = document.getElementsByClassName(".price")
        

        increment.addEventListener("click", function(){
            let total ;
                total= document.getElementById("input").value
                total++;
                let pri = document.getElementById("input").value = total;
                increment.style.backgroundColor="grey";
             
                
               setTimeout(() => {
                if(increment.style.backgroundColor="grey"){
                increment.style.backgroundColor="white";
                }
                else{
                    increment.style.backgroundColor="grey";
                }
               },200);   

        })

        let decrement = document.querySelector(".minus")
        
        decrement.addEventListener("click", function(){
            decrement.style.backgroundColor="grey";
                setTimeout(() => {
                if(decrement.style.backgroundColor="grey"){
                    decrement.style.backgroundColor="white";
                }
                else{
                    decrement.style.backgroundColor="grey";
                }
               },200);
            let total ;
                total= document.getElementById("input").value
                
                total--;
                document.getElementById("input").value = total;
                if(total<=1){
                    document.getElementById("input").value = 1;
                }
                else{
                    document.getElementById("input").value = total;
                }
                
                 

               
        })

    </script>
</body>

</html>