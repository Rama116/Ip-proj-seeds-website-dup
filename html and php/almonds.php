<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashew supplies</title>
    <link rel="stylesheet" href="../css/almon .css">

    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="whole">
        
       
        <nav class="main1">
            <div class="soc">
                <a href="https://www.instagram.com/ramazz_zz?igsh=OG5xZWdjZWlhemxj"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/Rama85315599?t=N0rHjJhgJs5EZE5Rp06v3g&s=08 "><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.facebook.com/share/YGfmTcs24ttTNUUB/?mibextid=qi2Omg"><i class="fa-brands fa-facebook"></i></a>
            </div>

            <ul class="first">
                <li class="one1"><a href="farmer.php">Home</a></li>
                <li class="two2"><a href="login.php">My account</a></li>
                <li class="three3"><a href="Walnuts.php">Checkout</a></li>
                <li class="four4"><a href="cart2.php">Cart</a></li>
                <li class="five5"><a href="main1.php">Shop</a></li>
            </ul>
        </nav>
    </div>
    <hr>

   


    <div class="whole2">
        <nav class="main2">
            <table>
                <tr>
            <ul class="second">
               <td><div class="image">
                    <img src="../assets/farmerlogo.webp" alt="Logo">
                </div></td>
                <td width="10px"></td>
                <td><li><a href="main1.php">Cashews</a></li>
                <li><a href="drygrape.php">Dry grapes</a></li>
                <li><a href="whole3.php">Whole spices</a></li>
                <li><a href="almonds.php">Almonds</a></li>
                <li><a href="Walnuts.php">Walnuts</a></li>
                <select class="sel" name="nuts" id="one" onchange="window.location.href=this.value;">
                    <option class="ek" value="ek">Nuts & Dry Druits</option>
                    <option class="dho" value="pista.php">Pistachios</option>
                    <option class="theen" value="seedsandnut.php">Seeds and nuts</option>
                    <option class="char" value="drieffruit.php">Dried Frutis</option>
                </select>
                <li><a href="dates.php">Dates</a></li>
                <li><a href="#">Order Online</a></li>
                <i class="fa-solid fa-magnifying-glass"></i></td>
            </ul>
            </tr>
            </table>
        </nav>
    </div><hr>
    
    
    <div class="nigga" style="background-color: #f5f5f5; height: 100px;">
        <span style="display: flex;">
       
        <h2 style="padding-left: 20px; width: 20%;" >Almonds</h2>
        <h2 style="margin-left: 65%;"><i class="fa-solid fa-house"><a href="farmer.php"><span style="font-weight: normal; font-size: small; font-family: sans-serif;"> > Products > Almonds</span></a> </i></h2>
        </span>
    </div>
     
    <br>
    <br>
    <br>
    <div class="cont" style="position: relative;padding-left: 50px;">
        <h3 style="width: 80%;font-family: sans-serif;">Almonds Suppliers in tamilnadu with best price and Quality </h3>
        <br>
        <hr>
        <select name="sorting" class="orderby">
            <option value="def" selected="selected">Default Sorting</option>
            <option value="pop">Sort by Popularity</option>
            <option value="lat">Sort by Latest</option>
            <option value="ltoh">Sort by price:Low to High</option>
            <option value="htol">Sort by price:High to Low</option>
        </select>
        <br>
        <br>
        <br>
        <hr>
        <div class="card" style="display: flex; justify-content: space-between;">
        <div class="cash" style="width: 20%;">
        <form action="almondcart.php" method="POST">
            <img src="../assets/alm.webp" style="width: 100%;">
            <p style="font-style: italic; color: gray; width: 100%;">Almonds</p>
            <p style="font-weight: bold; width: 100%;">Almonds (Premium ) 250g</p>
            <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">₹70.00</p>
            <input type="hidden" name="product_id" value="1">
            <input type="hidden" name="product_name" value="Almonds (Premium ) 250g">
            <input type="hidden" name="product_price" value="70.00">
            <input type="hidden" name="image_filename" value="../assets/alm.webp">
            <button type="submit" class="bn">Add to Cart</button>
        </form>
    </div>

            <div class="cash" style="width: 20%;">
            <form action="almondcart.php" method="POST">
                <img src="../assets/alm.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Almonds</p>
                <p style="font-weight: bold; width: 100%;">Almonds (Premium ) 1Kg</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">₹170.00</p>
                <input type="hidden" name="product_id" value="2">
            <input type="hidden" name="product_name" value="Almonds (Premium ) 1Kg">
            <input type="hidden" name="product_price" value="170.00">
            <button type="submit" class="bn">Add to Cart</button>
            </form>
            </div>
            <div class="cash" style="width: 20%;">
            <form action="almondcart.php" method="POST">
                <img src="../assets/choco alm.jpg" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">ALmonds</p>
                <p style="font-weight: bold; width: 100%;"> Choco-Almonds (Regular) 1Kg</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">₹230.00</p>
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="Choco-Almonds (regular) 1Kg">
                <input type="hidden" name="product_price" value="230.00">
                <button type="submit" class="bn">Add to Cart</button>
            </form>
            </div>
            <div class="cash" style="width: 20%;">
            <form action="almondcart.php" method="POST">
                <img src="../assets/alm.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Almonds</p>
                <p style="font-weight: bold; width: 100%;">Almonds 250g</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">₹700.00</p>
                <input type="hidden" name="product_id" value="4">
                <input type="hidden" name="product_name" value="Almonds 250g">
                <input type="hidden" name="product_price" value="230.00">
                <button type="submit" class="bn">Add to Cart</button>
            </form>
            </div>
            
        </div>
        <br>
        <div class="card" style="display: flex; justify-content: space-between;">
            <div class="cash" style="width: 20%;">
            <form action="almondcart.php" method="POST">
                <img src="../assets/choco alm.jpg" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Almonds</p>
                <p style="font-weight: bold; width: 100%;">Choco Mamra Almonds 250g   </p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">₹230.00</p>
                <input type="hidden" name="product_id" value="5">
                <input type="hidden" name="product_name" value="Choco Mamra ALmonds 250g">
                <input type="hidden" name="product_price" value="230.00">
                <button type="submit" class="bn">Add to Cart</button>
            </form>
            </div>
            <div class="cash" style="width: 20%;">
            <form action="almondcart.php" method="POST">
                <img src="../assets/choco alm.jpg" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Choco Almonds(Premium)</p>
                <p style="font-weight: bold; width: 100%;">Mace ( javithri) 50g</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">₹110.00</p>
                <input type="hidden" name="product_id" value="6">
                <input type="hidden" name="product_name" value="Choco Almonds (Premium)">
                <input type="hidden" name="product_price" value="110.00">
                <button type="submit" class="bn">Add to Cart</button>
            </form>
            </div>
            <div class="cash" style="width: 20%;">
            <form action="almondcart.php" method="POST">
                <img src="../assets/roastalm.jpg" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Almonds</p>
                <p style="font-weight: bold; width: 100%;">Roasted Almonds</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">₹85.00</p>
                <input type="hidden" name="product_id" value="7">
                <input type="hidden" name="product_name" value="Roasted ALmonds(Premium)">
                <input type="hidden" name="product_price" value="85.00">
                <button type="submit" class="bn">Add to Cart</button>
            </form>
            </div>
            <div class="notcash" style="width: 20%;">
                <img src="" style="width: 100%;">
                <!-- <p style="font-style: italic; color: gray; width: 100%;">Whole Spices</p>
                <p style="font-weight: bold; width: 100%;">Saffron 1g</p>
                <p style="color: rgb(47, 154, 23); font-size: 22px; width: 100%;">₹12x`x0.00 -->
                </p>
            </div>
            
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
    
    <footer >
        <table class="foot">
            <tr class="head">
                <td>About Us</td>
                <td>Contact Us</td>
                <td>Registered</td>
                <!-- <td>Please Share This</td> -->
            </tr>
            <tr class="head2">
                <td>Farmernuts.com  is an Whole market for nuts ,Spices,Dry fruits which is powered by SPROUT SPRING LLP</td>
                <td>SPROUT SPRIN
                    G LLP D No . 39, Nehru Nagar, Maniakarampalayam, Ganapathy, Coimbatore -641006 Mobile - 7200885017</td>
                <td class="image"><img height="100px" width="100px
                    " src="../assets/india.webp"></td>
                <!-- <td><i class="fa-brands fa-facebook"></i></td> -->
                 <!-- <td><i class="fa-brands fa-instagram"></i></td>
                <td><i class="fa-brands fa-twitter"></i></td>  -->
            </tr>
        </table>
        </footer>
</body>
</html>
    