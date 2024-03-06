<?php
  session_start();
  if(!isset($_SESSION["username"]))
  {
    header("Location:login2.php");
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="red">
    <title>Pizza Party</title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="style.css" />
    <link rel="apple-touch-icon" href="images/j1.png">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu">Most Selling</a></li>
                <li><a href="#contact">Contact</a></li>
                <li> <a href="#home"><?php echo $_SESSION["username"]; ?></a></li>
                <?php
                if(isset($_SESSION["username"]))
                {
                ?>
                <li> <a href="signout.php"> Logout </a> </li>
                <?php
                }
                ?>
            </ul>
            <h1 class="logo">PiZZa PaRTy</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Love Pizza?</h1>
            <p>Try Our Pizzas And Enjoy Them.</p>
            <a href="#food" class="btn btn-primary">Menu</a>
        </div>
    </section>
    <section id="food">
        <h2>CATEGORY</h2>
        <div class="food-container container">
            <div class="food-type ">
                <div class="img-container">
                    <img src="images/VEG.jpg" alt="error" />
                    <div class="img-content">
                        <h3>VEG</h3>
                        <a href="images/vegmenu.jpg" class="btn btn-primary" target="blank">Veg Menu</a>
                    </div>
                </div>
            </div>
            <div class="food-type ">
                <div class="img-container">
                    <img src="images/GOLDEN.png" alt="error" />
                    <div class="img-content">
                        <h3>NONVEG</h3>
                        <a href="images/nonvegmenu.jpg" class="btn btn-primary" target="blank">Non-Veg Menu</a>
                    </div>
                </div>
            </div>
            <div class="food-type">
                <div class="img-container">
                    <img src="images/Menu.jpg" alt="error" />
                    <div class="img-content">
                        <h3>MENU</h3>
                        <a href="images/Menu.jpg" class="btn btn-primary" target="blank">Menu List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="food-menu">
        <h2 class="food-menu-heading">Our Most Selling Food Items</h2>
        <div class="food-menu-container container">
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="images/Mexican.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Mexican Green Pizza</h2>
                    <p>
                        Medium Size <strong>Mexican Green Pizza</strong>
                    </p>
                    <p class="food-price">Price: &#8377; 260</p>
                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-img">
                    <img src="images/Spicy.jpg" alt="error" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Spicy Paneer Pizza</h2>
                    <p>
                        Small Size <strong>Spic Paneer Pizza</strong>
                    </p>
                    <p class="food-price">Price: &#8377; 180</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="images/Barbeque.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Cheese Barbeque Pizza</h2>
                    <p>
                        Medium Size <strong>Cheese Barbeque Pizza</strong>
                    </p>
                    <p class="food-price">Price: &#8377; 200</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="images/chickenM.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Chicken Mexicana Pizza</h2>
                    <p>
                        Large Size <strong>Chicken Mexicana Pizza</strong>
                    </p>
                    <p class="food-price">Price: &#8377; 350</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="images/choco.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Choco Lava Cake</h2>
                    <p>
                        <strong>Choco Lava Cake</strong>
                        (Our Most Loved Product)
                    </p>
                    <p class="food-price">Price: &#8377; 70</p>
                </div>
            </div>
        </div>
    </section>
<section id="about">
    <div class="about-wrapper container">
        <div class="about-text">
            <p class="small">About Us</p>
            <h2>We are making world class pizza at lower price.</h2>
            <p>
                We make pizza at lower price. Owner is an ex product manager and
                branch manager at dominos.<br>
                We are open from 10:00 am - 10:00 pm everyday.<br>
                You can also place orders by calling us at: 7078432956
            </p>
        </div>
        <div class="about-img">
            <img src="images/Pizza.jpg" alt="food" />
        </div>
    </div>
</section>
    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="images/logo.jpg" alt="PiZZa PaRTy" />
            </div>
            <div class="form-container">
              <form action="insert.php" method="post">
                <h2>Contact Us</h2>
                <input type="text" name="name" placeholder="Your Name" />
                <input type="number" name="phone_nember"placeholder="Phone number" />
                <textarea cols="30" rows="6" name="orders" placeholder="Your Order"></textarea>
                <a href="#" class="btn btn-primary">Submit</a>
              </form>
            </div>
        </div>
    </section>
    <footer id="footer">
        <h2>Pizza Party &copy &reg; all rights reserved</h2>
    </footer>
    <script src="serviceWorker/index.js"></script>
</body>
</html>
