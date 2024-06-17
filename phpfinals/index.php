<html>

<head>
    <meta charset = 'utf8'>
    <title>NUK Merchandise</title>
    <style>
        body {
            font-family: monospace;
            color: #0f172a;
            background-color: #92a8d1;
            margin: 0; /* Remove default margin */
            padding-top: 60px; /* Space for fixed header */
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .header .nav .links {
            display: flex;
            gap: 20px;
        }

        .header .title {
            flex: 1;
            text-align: left;
            font-size: 20px;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .header a:hover {
            background-color: #555;
        }

        .content {
            text-align: center;
            padding-top: 100px; /* Adjust as needed */
        }
    </style>
</head>

<body bgcolor = "#92a8d1">
    <style>
        body {
            font-family: monospace;
            color: #0f172a;
            text-align: center;
            padding-top: 20px; /* Adjust padding as needed */
        }

        .image-container {
            display: flex; /* Use flexbox for layout */
            justify-content: space-around; /* Distribute items evenly with space around */
            margin-top: 20px; /* Adjust margin as needed */
        }

        .item {
            text-align: center;
            margin: 20px; /* Add margin for spacing between items */
            width: calc(33% - 40px); /* Adjust width to account for margin */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .item img {
            width: 50%; /* Set width for each image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Optional: Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow effect */
        }

        .name {
            margin-top: 10px; /* Space between image and name */
            font-size: 20px; /* Font size for name */
            font-weight: bold; /* Bold font for name */
        }

        .description {
            margin-top: 0px; /* Space between name and description */
            font-size: 14px; /* Font size for description */
            color: gray; /* Font color for description */
        }

        .price {
            margin-top: 10px; /* Space between description and price */
            font-size: 18px; /* Font size for price */
            font-weight: bold; /* Bold font for price */
            color: green; /* Font color for price */
        }

        .cart {
            margin-top: 10px; /* Space between price and cart button */
            padding: 10px 20px; /* Padding inside cart button */
            background-color: #7789AB; /* Background color for cart button */
            color: #fff; /* Text color for cart button */
            text-decoration: none; /* Remove underline from text */
            border-radius: 5px; /* Add rounded corners to cart button */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        .cart a:hover {
            background-color: gray; /* Darken cart button on hover */
        }

        .image-container2 {
            display: flex; /* Use flexbox for layout */
            justify-content: space-around; /* Distribute items evenly with space around */
            margin-top: 0px; /* Adjust margin as needed */
        }

        .item2 {
            text-align: center;
            margin: 20px; /* Add margin for spacing between items */
            width: calc(33% - 40px); /* Adjust width to account for margin */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .item2 img {
            width: 50%; /* Set width for each image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Optional: Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow effect */
        }

        .image-container3 {
            display: flex; /* Use flexbox for layout */
            justify-content: space-around; /* Distribute items evenly with space around */
            margin-top: 0px; /* Adjust margin as needed */
        }

        .item3 {
            text-align: center;
            margin: 20px; /* Add margin for spacing between items */
            width: calc(33% - 40px); /* Adjust width to account for margin */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .item3 img {
            width: 50%; /* Set width for each image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Optional: Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow effect */
        }

        .image-container4 {
            display: flex; /* Use flexbox for layout */
            justify-content: space-around; /* Distribute items evenly with space around */
            margin-top: 0px; /* Adjust margin as needed */
        }

        .item4 {
            text-align: center;
            margin: 20px; /* Add margin for spacing between items */
            width: calc(33% - 40px); /* Adjust width to account for margin */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .item4 img {
            width: 50%; /* Set width for each image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Optional: Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow effect */
        }

        .image-container5 {
            display: flex; /* Use flexbox for layout */
            justify-content: space-around; /* Distribute items evenly with space around */
            margin-top: 0px; /* Adjust margin as needed */
        }

        .item5 {
            text-align: center;
            margin: 20px; /* Add margin for spacing between items */
            width: calc(33% - 40px); /* Adjust width to account for margin */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .item5 img {
            width: 50%; /* Set width for each image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Optional: Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow effect */
        }
    </style>

    <div class="header">
        <div class="nav">
            <div class = "title">
                <strong>NUK Merchandise</strong>
            </div>
            <div class="links">
                <a href="login.php">Log In</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </div>
    </div>
    </br>
    </br>
    </br>
    </br>
    </br>

    <center><font size = "20" color = "#0f172a">Merchandise List</font></center>
    </br></br>
    
    <div class = "image-container">
        <div class = "item">
            <img src = "img/shirt1.jpg" alt = "Shirt 1">
            <div class = "name">Vintage Washed Tee - Black Gray</div>
            <div class = "description">Comfy vintage tee for everyday wear. </br>Crafted with love.</div>
            <div class = "price">NT$250.00</div>
            <div class = "cart">
                <a href = "login.php?item=shirt1">Add to Cart</a></div>
        </div>
        
        <div class = "item">
            <img src = "img/shirt2.jpg" alt = "Shirt 2">
            <div class = "name">Vintage Washed Tee - Matcha</div>
            <div class = "description">Comfy vintage tee for everyday wear. </br>Crafted with love.</div>
            <div class = "price">NT$250.00</div>
            <div class = "cart">
                <a href = "login.php?item=shirt2">Add to Cart</a></div>
        </div>

        <div class = "item">
            <img src = "img/shirt3.jpg" alt = "Shirt 3">
            <div class = "name">Vintage Washed Tee - Purple</div>
            <div class = "description">Comfy vintage tee for everyday wear. <br/>Crafted with love.</div>
            <div class = "price">NT$250.00</div>
            <div class = "cart">
                <a href = "login.php?item=shirt3">Add to Cart</a></div>
        </div>
    </div>

    <div class = "image-container2">
        <div class = "item2">
            <img src = "img/pants1.jpg" alt = "Pants 1">
            <div class = "name">Square Grid Loose Pants - Black</div>
            <div class = "description">Perfect pants with perfect gridness. </br>Crafted with heart.</div>
            <div class = "price">NT$350.00</div>
            <div class = "cart">
                <a href = "login.php?item=pants1">Add to Cart</a></div>
        </div>
        
        <div class = "item2">
            <img src = "img/pants2.jpg" alt = "Pants 2">
            <div class = "name">Square Grid Loose Pants - White</div>
            <div class = "description">Perfect pants with perfect gridness. </br>Crafted with heart.</div>
            <div class = "price">NT$350.00</div>
            <div class = "cart">
                <a href = "login.php?item=pants2">Add to Cart</a></div>
        </div>

        <div class = "item2">
            <img src = "img/pants3.jpg" alt = "Pants 3">
            <div class = "name">Square Grid Loose Pants - Matcha</div>
            <div class = "description">Perfect pants with perfect gridness. <br/>Crafted with heart.</div>
            <div class = "price">NT$350.00</div>
            <div class = "cart">
                <a href = "login.php?item=pants3">Add to Cart</a></div>
        </div>
    </div>

    <div class = "image-container3">
        <div class = "item3">
            <img src = "img/shorts1.jpg" alt = "Shorts 1">
            <div class = "name">Stylish Gadget Shorts - White</div>
            <div class = "description">All-time favorite shorts. </br>Crafted just for you.</div>
            <div class = "price">NT$200.00</div>
            <div class = "cart">
                <a href = "login.php?item=shorts1">Add to Cart</a></div>
        </div>
        
        <div class = "item3">
            <img src = "img/shorts2.jpg" alt = "Shorts 2">
            <div class = "name">Stylish Gadget Shorts - Black</div>
            <div class = "description">All-time favorite shorts. </br>Crafted just for you.</div>
            <div class = "price">NT$200.00</div>
            <div class = "cart">
                <a href = "login.php?item=shorts2">Add to Cart</a></div>
        </div>

        <div class = "item3">
            <img src = "img/shorts3.jpg" alt = "Shorts 3">
            <div class = "name">Stylish Gadget Shorts - Brown</div>
            <div class = "description">All-time favorite shorts. </br>Crafted just for you.</div>
            <div class = "price">NT$200.00</div>
            <div class = "cart">
                <a href = "login.php?item=shorts3">Add to Cart</a></div>
        </div>
    </div>

    <div class = "image-container4">
        <div class = "item4">
            <img src = "img/merch1.jpg" alt = "Merch 1">
            <div class = "name">Flying Carp Hoodie - Black</div>
            <div class = "description">Carp flying with retro vibes. </br>Made with love.</div>
            <div class = "price">NT$1000.00</div>
            <div class = "cart">
                <a href = "login.php?item=merch1">Add to Cart</a></div>
        </div>
        
        <div class = "item4">
            <img src = "img/merch2.jpg" alt = "Merch 2">
            <div class = "name">STANLEY "Inspired" Tumbler 40oz</div>
            <div class = "description">Sustainable stainless for sustainable sipping. </br>Very inspired.</div>
            <div class = "price">NT$1500.00</div>
            <div class = "cart">
                <a href = "login.php?item=merch2">Add to Cart</a></div>
        </div>

        <div class = "item3">
            <img src = "img/merch3.jpg" alt = "Merch 3">
            <div class = "name">Lined Notebook - Brown Cover</div>
            <div class = "description">Notebook for journaling. </br>Go grab yours!</div>
            <div class = "price">NT$50.00</div>
            <div class = "cart">
                <a href = "login.php?item=merch3">Add to Cart</a></div>
        </div>
    </div>

    <div class = "image-container5">
        <div class = "item5">
            <img src = "img/merch4.jpg" alt = "Merch 4">
            <div class = "name">Laptop 2-In-1 With 14-Inch</div>
            <div class = "description">Powerful convertible laptop for you. </br>Designed for you.</div>
            <div class = "price">NT$2000.00</div>
            <div class = "cart">
                <a href = "login.php?item=merch4">Add to Cart</a></div>
        </div>
        
        <div class = "item5">
            <img src = "img/merch5.jpg" alt = "Merch 5">
            <div class = "name">Digital Notebook 10.2-Inch</div>
            <div class = "description">Good quality. </br>Designed for you.</div>
            <div class = "price">NT$1500.00</div>
            <div class = "cart">
                <a href = "login.php?item=merch5">Add to Cart</a></div>
        </div>

        <div class = "item5">
            <img src = "img/merch6.jpg" alt = "Merch 6">
            <div class = "name">Pro Gaming Smartphone</div>
            <div class = "description">Immerse yourself into gaming world </br>Go grab yours!</div>
            <div class = "price">NT$2000.00</div>
            <div class = "cart">
                <a href = "login.php?item=merch6">Add to Cart</a></div>
        </div>
    </div>

    <hr width = 100% height = "10px">
    <center>© 2024 NUK MERCHANDISE WEBSITE ALL RIGHT RESERVED</center>
    <br/>
</body>

</html>