<?php

$connect = mysqli_connect("localhost", "root", "", "mydb1");
$tbl = "select * from table images";

mysqli_query($connect, $tbl);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="headphone.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <img alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Apple_ipad.svg/1024px-Apple_ipad.svg.png" class="qa-title" width="200">
        <a href="mobile_main.php"> <img src="https://www.sahivalue.com/product-images/14+pro+max.jpg/293890000021697778/400x400" alt="" width="11%"></a>
        <div class="products">
            <div class="photo">
                <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/og-airpods-max-202011?wid=1200&hei=630&fmt=jpeg&qlt=95&.v=1603996970000x
" width="100%" height="100%" alt="">
            </div>
            <div class="discription">
                <h2>Apple 2021 10.2-inch (25.91 cm) iPad with A13 Bionic chip (Wi-Fi, 64GB) - Silver (9th Generation)</h2>
                <p> <strike color="red">79900</strike>
                <h2 style="color:green;">-21%</h2>
                <h1 class="price">₹62,999</h1>
                </p>
                <button class="minus" type="button">-</button>
                <input type="text" id="input" value="1">
                <button class="plus" type="button">+</button>
                <br>
                <button id="cart">Add to cart</button>
                <button id="submit">Buy Online</button>

            </div>

            <div class="discription2">
                <h3>
                    Brand: Apple <br>
                    Model Name: IPhone <br>
                    Network Service Provider: Unlocked for All Carriers <br>
                    Operating System: IOS <br>
                    Cellular Technology: 5G</h3>
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
                <p> <strike color="red">59900</strike>
                <h2 style="color:green;">-18% <h1 class="price">₹48,990</h1>
                </h2>
                </p>
                <button class="minus" type="button">-</button>
                <input type="text" id="input" value="1">
                <button class="plus" type="button">+</button>
                <br>
                <button id="cart">Add to cart</button>
                <button id="submit">Buy Online</button>
            </div>

            <div class="discription2">
                <h2>
                    Brand: Apple <br>
                    Model Name: IPhone 12 64GB RED <br>
                    Network Service Provider: Unlocked for All Carriers <br>
                    Operating System: IOS 14 <br>
                    Cellular Technology: 5G</h2>
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
                <p> <strike>59900</strike>
                <h2 style="color:green;">-18% <h1 class="price">₹48,990</h1>
                </h2>
                </p>
                <button class="minus" type="button">-</button>
                <input type="text" id="input" value="1">
                <button class="plus" type="button">+</button>
                <br>
                <button id="cart">Add to cart</button>
                <button id="submit">Buy Online</button>

            </div>

            <div class="discription2">
                <h2>
                    Brand: Apple <br>
                    Model Name: IPhone 12 64GB RED <br>
                    Network Service Provider: Unlocked for All Carriers <br>
                    Operating System: IOS 14 <br>
                    Cellular Technology: 5G</h2>
            </div>


        </div>
    </div>
    <script>
        let increment = document.querySelector(".plus")
        let priceinc = document.getElementsByClassName(".price")


        increment.addEventListener("click", function() {
            let total;
            total = document.getElementById("input").value
            total++;
            let pri = document.getElementById("input").value = total;

        })

        let decrement = document.querySelector(".minus")
        decrement.addEventListener("click", function() {
            let total;
            total = document.getElementById("input").value
            total--;
            document.getElementById("input").value = total;
            if (total <= 1) {
                document.getElementById("input").value = 1;
            } else {
                document.getElementById("input").value = total;
            }
        })
    </script>
    <div class="main">
        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/og-airpods-max-202011?wid=1200&hei=630&fmt=jpeg&qlt=95&.v=1603996970000" alt="">
    </div>
</body>

</html>