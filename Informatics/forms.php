<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=display-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="5.css">
        <title>
            Exercise 2
        </title>
        
    </head>
    <body>
        <nav class="navbar">
            <div class="container-navbar">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Explore</a></li>
                    <li><a href="">Cart</a></li>
                    <li><a href="">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <main>
                <div class="content-watches">
                    <header>
                        <div class="content-heading">
                            <h1>Global Watches</h1>
                        </div>
                    </header>
                        <div class="watches">
                            <div class="card-one">
                                <img src="rolex-4696640_960_720.jpg" alt="Rolex Watch">
                                <div class="card-content">
                                    <div class="card-title">                                            <h2>Rolex</h2>
                                        <h5>Price: £1000</h5>
                                    </div>
                                    <div class="card-button">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-one">
                                <img src="pexels-photo-280391.webp" alt="Rolex Watch">
                                <div class="card-content">
                                    <div class="card-title">
                                        <h2>Diniho</h2>                                            <h5>Price: £500</h5>
                                    </div>
                                    <div class="card-button">
                                        <button type="button">Add to Cart</button>
                                    </div>    
                                </div>
                            </div>
                            <div class="card-one">
                                <img src="wrist-watch-4040972_960_720.jpg" alt="Rolex Watch">
                                <div class="card-content">
                                    <div class="card-title">
                                        <h2>Tempo D'oro</h2>                                            <h5>Price: £800</h5>
                                    </div>
                                    <div class="card-button">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                </div>
                <div class="enquiry-form">
                    <div class="end-watch-display">
                        <hr>
                    </div>
                    <div class="form-heading">
                        <h2>Contact Us to Check Product Availability</h2>
                    </div>
                    <div class="form-content">
                        <form action="#">
                            <input type="text" id="fname" name="firstname" placeholder="First Name">
                            <input type="text" id="lname" name="lastname" placeholder="Last Name">
                            <input type="text" id="email" name="emailID" placeholder="Email Address">
                            <select id="product" name="product">
                                <option value="productName">Product name</option>
                                <option value="rado">Rado</option>
                                <option value="diniho">Diniho</option>
                                <option value="tempo">Tempo D'oro</option>
                            </select>
                            <input type="submit" name="submit">
                        </form>
                    </div>
        
                </div>    
            </main>
            
        </div>
        <footer>
            <p>Copy Rights</p>
        </footer>  
    </body>
    <?php
        $dbConn = mysqli_connect("localhost","application","access","shop");
    ?>
</html>