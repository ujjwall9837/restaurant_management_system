<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
    <link rel="stylesheet" href="css/styleIndex.css"> 
    
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">Sagar Ratna</div>
        <ul class="links">
            <li><a href="#home">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="customerregister.php">Register</a></li>
            <li><a href="customerlogin.php">Login</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line">Hello</div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <h1 class="h1">Sagar Ratna: Serving since 1980</h1>
    <section class="carousel" aria-label="carousel" Tabindex="0">
        <a class="carousel__skip-link" href="#skip-link">Skip the Carousel</a>
        <div class="slides">
            <div class="slides-item slide-1" id="slide-1" aria-label="slide 1 of 5" tabindex="0"><img
                    src="img/food1.png" alt="" height="600px"></div>
            <div class="slides-item slide-2" id="slide-2" aria-label="slide 2 of 5" tabindex="0"><img
                    src="img/food2.png" alt="" height="600px"></div>
            <div class="slides-item slide-3" id="slide-3" aria-label="slide 3 of 5" tabindex="0"><img
                    src="img/food3.png" alt="" height="600px"></div>
            <div class="slides-item slide-4" id="slide-4" aria-label="slide 4 of 5" tabindex="0"><img
                    src="img/food4.png" alt="" height="600px"></div>
            <div class="slides-item slide-5" id="slide-5" aria-label="slide 5 of 5" tabindex="0"><img
                    src="img/food5.png" alt="" height="600px"></div>
        </div>
        <div class="carousel__nav">
            <a class="slider-nav" href="#slide-1" aria-label="Go to slide 1">1</a>
            <a class="slider-nav" href="#slide-2" aria-label="Go to slide 2">2</a>
            <a class="slider-nav" href="#slide-3" aria-label="Go to slide 3">3</a>
            <a class="slider-nav" href="#slide-4" aria-label="Go to slide 4">4</a>
            <a class="slider-nav" href="#slide-5" aria-label="Go to slide 5">5</a>
        </div>
        <div class="carousel__skip-message" id="skip-link" tabindex="0"></div>
    </section>

    <section>
        <div class="categ">
            <h2 id="categories">Categories</h2>
            <h3>Veg</h3>
            <ul>
                <li>Veggie Burger</li>
                <li>Paneer Pan Pizza(M)</li>
                <li>Red Sauce Pasta</li>
                <li>White Sauce Cheese Pasta</li>
                <li>Veg Hakka Noodles</li>
                <li>Onion and Tomato Pizza(M)</li>
                <li>And many more...</li>
            </ul>
            <h3>Non-Veg</h3>
            <ul>
                <li>Chicken Tikka Pizza(M)</li>
                <li>Chicken Cheese Burger</li>
                <li>Chicken Soup</li>
                <li>And many more...</li>
            </ul>
            <h3>Beverages</h3>
            <ul>
                <li>Iced Tea</li>
                <li>Cold Coffee</li>
                <li>And many more...</li>
            </ul>
        </div>
    </section>

    <section class="aboutus" id="about">
        <h2>About Us</h2>
        <p>Sagar Ratna started its first branch in Defence Colony in 1986 and since then it has moved on to become the
            most preferred destination for South Indian cuisines across the country. Within a short span Sagar Ratna has
            spread its wings far and wide and today with more than 90 restaurants, Sagar Ratna has established its
            presence in the National Capital Region (NCR) through company owned restaurants and in various prominent
            cities of North India through franchise outlets. Having won numerous awards in the Hospitality industry in
            various categories over the years, Sagar Ratna continues to delight its customers with its authentic South
            Indian food cooked fresh many times a day.</p>

        <img src="img/contact.png" alt="image">
        <p>The must – try dishes at any of Sagar Ratna restaurants are the Mini Idlis dipped in sambhar, Medu Vada, Dahi
            Vada, Masala Dosa, Rava Onion Masala Dosa, Mysore Masala Dosa, Rava Kesari. The nascent coffee aroma
            emanating from the filter coffee, served in the traditional steel tumbler and saucer is another specialty of
            Sagar.
            In an ever-evolving market, Sagar Ratna believes in delighting the customers with new innovations in its
            menu and this keeps us way ahead of competition.</p>
    </section>

    <footer class="contactus" id="contact">
        <h2>Contact us</h2>
        <p class="footer">One can reach the restaurant on +(91)-120-4201464,4201465<br>
            Cuisines: Multicuisine, Indian, Chinese, Breakfast and many more.<br>
            Must Order: Rasam Vada, paper Masala Dosa, ...<br>
            Known For: South Indian Food</p> <br>
    </footer>

</body>

</html>