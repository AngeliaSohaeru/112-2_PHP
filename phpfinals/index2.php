<html>

<head>
    <meta charset = 'utf8'>
    <title>NUK Merchandise</title>
    <style>
        body {
            font-family: monospace;
            color: #0f172a;
            background-color: #92a8d1;
            margin: 0;
            padding-top: 20px;
        }

        .checkout-container {
            position: fixed;
            top: 20px;
            right: 20px;
        }

        .checkout {
            padding: 10px 20px;
            background-color: #7789AB;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .checkout:hover {
            background-color: gray;
        }

        .image-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .item {
            text-align: center;
            margin: 20px;
            width: calc(30% - 40px);
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .item img {
            width: 50%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .name {
            margin-top: 10px;
            font-size: 20px;
            font-weight: bold;
        }

        .description {
            margin-top: 0px;
            font-size: 14px;
            color: gray;
        }

        .price {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: green;
        }

        .cart {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #7789AB;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cart:hover {
            background-color: gray;
        }

        .quantity {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .quantity button {
            background-color: #7789AB;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .quantity span {
            margin: 0 10px;
            font-size: 16px;
        }

        .wrapper {
            display: none; /* Initially hide the quantity adjustment */
            justify-content: center;
            align-items: center;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            margin-top: 10px;
        }

        .wrapper .active{
            display: flex;
        }

        .wrapper button {
            width: 30px;
            height: 30px;
            background-color: #7789AB;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .wrapper span {
            width: 100px;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            cursor: pointer;
            user-select: none;
        }
    </style>
</head>

<body bgcolor = "#92a8d1">
    <div class="checkout-container">
        <a href="checkout.php" class="checkout">Checkout</a>
    </div>

    <center><font size = "20" color = "#0f172a">Merchandise List</font></center>
    </br></br>
    
    <div class = "image-container">
        <div class = "item">
            <img src = "img/shirt1.jpg" alt = "Shirt 1">
            <div class = "name">Vintage Washed Tee - Black</div>
            <div class = "description">Comfy vintage tee for everyday wear. </br>Crafted with love.</div>
            <div class = "price">NT$250.00</div>
            <div class="cart"id="cart-shirt1" onclick="addToCart('shirt1', 'Vintage Washed Tee - Black', 'NT$250.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-shirt1">
                <button onclick="adjustQuantity('shirt1', -1)">-</button>
                <span class="num" id="quantity-shirt1">1</span>
                <button onclick="adjustQuantity('shirt1', 1)">+</button>
            </div>
        </div>
        
        <div class = "item">
            <img src = "img/shirt2.jpg" alt = "Shirt 2">
            <div class = "name">Vintage Washed Tee - Matcha</div>
            <div class = "description">Comfy vintage tee for everyday wear. </br>Crafted with love.</div>
            <div class = "price">NT$250.00</div>
            <div class="cart" id="cart-shirt2" onclick="addToCart('shirt2', 'Vintage Washed Tee - Matcha', 'NT$250.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-shirt2">
                <button onclick="adjustQuantity('shirt2', -1)">-</button>
                <span class="num" id="quantity-shirt2">1</span>
                <button onclick="adjustQuantity('shirt2', 1)">+</button>
            </div>
        </div>

        <div class = "item">
            <img src = "img/shirt3.jpg" alt = "Shirt 3">
            <div class = "name">Vintage Washed Tee - Purple</div>
            <div class = "description">Comfy vintage tee for everyday wear. <br/>Crafted with love.</div>
            <div class = "price">NT$250.00</div>
            <div class="cart" id="cart-shirt3" onclick="addToCart('shirt3', 'Vintage Washed Tee - Purple', 'NT$250.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-shirt3">
                <button onclick="adjustQuantity('shirt3', -1)">-</button>
                <span class="num" id="quantity-shirt3">1</span>
                <button onclick="adjustQuantity('shirt3', 1)">+</button>
            </div>
        </div>
    </div>

    <div class = "image-container">
        <div class = "item">
            <img src = "img/pants1.jpg" alt = "Pants 1">
            <div class = "name">Square Grid Loose Pants - Black</div>
            <div class = "description">Perfect pants with perfect gridness. </br>Crafted with heart.</div>
            <div class = "price">NT$350.00</div>
            <div class="cart" id="cart-pants1" onclick="addToCart('pants1', 'Square Grid Loose Pants - Black', 'NT$350.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-pants1">
                <button onclick="adjustQuantity('pants1', -1)">-</button>
                <span class="num" id="quantity-pants1">1</span>
                <button onclick="adjustQuantity('pants1', 1)">+</button>
            </div>
        </div>
        
        <div class = "item">
            <img src = "img/pants2.jpg" alt = "Pants 2">
            <div class = "name">Square Grid Loose Pants - White</div>
            <div class = "description">Perfect pants with perfect gridness. </br>Crafted with heart.</div>
            <div class = "price">NT$350.00</div>
            <div class="cart" id="cart-pants2" onclick="addToCart('pants2', 'Square Grid Loose Pants - White', 'NT$350.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-pants2">
                <button onclick="adjustQuantity('pants2', -1)">-</button>
                <span class="num" id="quantity-pants2">1</span>
                <button onclick="adjustQuantity('pants2', 1)">+</button>
            </div>
        </div>

        <div class = "item">
            <img src = "img/pants3.jpg" alt = "Pants 3">
            <div class = "name">Square Grid Loose Pants - Matcha</div>
            <div class = "description">Perfect pants with perfect gridness. <br/>Crafted with heart.</div>
            <div class = "price">NT$350.00</div>
            <div class="cart" id="cart-pants3" onclick="addToCart('pants3', 'Square Grid Loose Pants - Matcha', 'NT$350.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-pants3">
                <button onclick="adjustQuantity('pants3', -1)">-</button>
                <span class="num" id="quantity-pants3">1</span>
                <button onclick="adjustQuantity('pants3', 1)">+</button>
            </div>
        </div>
    </div>

    <div class = "image-container">
        <div class = "item">
            <img src = "img/shorts1.jpg" alt = "Shorts 1">
            <div class = "name">Stylish Gadget Shorts - White</div>
            <div class = "description">All-time favorite shorts. </br>Crafted just for you.</div>
            <div class = "price">NT$200.00</div>
            <div class="cart" id="cart-shorts1" onclick="addToCart('shorts1', 'Stylish Gadget Shorts - White', 'NT$200.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-shorts1">
                <button onclick="adjustQuantity('shorts1', -1)">-</button>
                <span class="num" id="quantity-shorts1">1</span>
                <button onclick="adjustQuantity('shorts1', 1)">+</button>
            </div>
        </div>
        
        <div class = "item">
            <img src = "img/shorts2.jpg" alt = "Shorts 2">
            <div class = "name">Stylish Gadget Shorts - Black</div>
            <div class = "description">All-time favorite shorts. </br>Crafted just for you.</div>
            <div class = "price">NT$200.00</div>
            <div class="cart" id="cart-shorts2" onclick="addToCart('shorts2', 'Stylish Gadget Shorts - Black', 'NT$200.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-shorts2">
                <button onclick="adjustQuantity('shorts2', -1)">-</button>
                <span class="num" id="quantity-shorts2">1</span>
                <button onclick="adjustQuantity('shorts2', 1)">+</button>
            </div>
        </div>

        <div class = "item">
            <img src = "img/shorts3.jpg" alt = "Shorts 3">
            <div class = "name">Stylish Gadget Shorts - Brown</div>
            <div class = "description">All-time favorite shorts. </br>Crafted just for you.</div>
            <div class = "price">NT$200.00</div>
            <div class="cart" id="cart-shorts3" onclick="addToCart('shorts3', 'Stylish Gadget Shorts - Brown', 'NT$200.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-shorts3">
                <button onclick="adjustQuantity('shorts3', -1)">-</button>
                <span class="num" id="quantity-shorts3">1</span>
                <button onclick="adjustQuantity('shorts3', 1)">+</button>
            </div>
        </div>
    </div>

    <div class = "image-container">
        <div class = "item">
            <img src = "img/merch1.jpg" alt = "Merch 1">
            <div class = "name">Flying Carp Hoodie - Black</div>
            <div class = "description">Carp flying with retro vibes. </br>Made with love.</div>
            <div class = "price">NT$1000.00</div>
            <div class="cart" id="cart-merch1" onclick="addToCart('merch1', 'Flying Carp Hoodie - Black', 'NT$1000.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-merch1">
                <button onclick="adjustQuantity('merch1', -1)">-</button>
                <span class="num" id="quantity-merch1">1</span>
                <button onclick="adjustQuantity('merch1', 1)">+</button>
            </div>
        </div>
        
        <div class = "item">
            <img src = "img/merch2.jpg" alt = "Merch 2">
            <div class = "name">STANLEY "Inspired" Tumbler</div>
            <div class = "description">Sustainable stainless for sustainable sipping. </br>Very inspired.</div>
            <div class = "price">NT$1500.00</div>
            <div class="cart" id="cart-merch2" onclick="addToCart('merch2', 'STANLEY Inspired Tumbler', 'NT$1500.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-merch2">
                <button onclick="adjustQuantity('merch2', -1)">-</button>
                <span class="num" id="quantity-merch2">1</span>
                <button onclick="adjustQuantity('merch2', 1)">+</button>
            </div>
        </div>

        <div class = "item">
            <img src = "img/merch3.jpg" alt = "Merch 3">
            <div class = "name">Lined Notebook - Brown Cover</div>
            <div class = "description">Notebook for journaling. </br>Go grab yours!</div>
            <div class = "price">NT$50.00</div>
            <div class="cart" id="cart-merch3" onclick="addToCart('merch3', 'Lined Notebook - Brown Cover', 'NT$50.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-merch3">
                <button onclick="adjustQuantity('merch3', -1)">-</button>
                <span class="num" id="quantity-merch3">1</span>
                <button onclick="adjustQuantity('merch3', 1)">+</button>
            </div>
        </div>
    </div>

    <div class = "image-container">
        <div class = "item">
            <img src = "img/merch4.jpg" alt = "Merch 4">
            <div class = "name">Laptop 2-In-1 With 14-Inch</div>
            <div class = "description">Powerful convertible laptop for you. </br>Designed for you.</div>
            <div class = "price">NT$2000.00</div>
            <div class="cart" id="cart-merch4" onclick="addToCart('merch4', 'Laptop 2-In-1 With 14-Inch', 'NT$2000.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-merch4">
                <button onclick="adjustQuantity('merch4', -1)">-</button>
                <span class="num" id="quantity-merch4">1</span>
                <button onclick="adjustQuantity('merch4', 1)">+</button>
            </div>
        </div>
        
        <div class = "item">
            <img src = "img/merch5.jpg" alt = "Merch 5">
            <div class = "name">Digital Notebook 10.2-Inch</div>
            <div class = "description">Good quality. </br>Designed for you.</div>
            <div class = "price">NT$1500.00</div>
            <div class="cart" id="cart-merch5" onclick="addToCart('merch5', 'Digital Notebook 10.2-Inch', 'NT$1500.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-merch5">
                <button onclick="adjustQuantity('merch5', -1)">-</button>
                <span class="num" id="quantity-merch5">1</span>
                <button onclick="adjustQuantity('merch5', 1)">+</button>
            </div>
        </div>

        <div class = "item">
            <img src = "img/merch6.jpg" alt = "Merch 6">
            <div class = "name">Pro Gaming Smartphone</div>
            <div class = "description">Immerse yourself into gaming world </br>Go grab yours!</div>
            <div class = "price">NT$2000.00</div>
            <div class="cart" id="cart-merch6" onclick="addToCart('merch6', 'Pro Gaming Smartphone', 'NT$2000.00')">Add to Cart</div>
            <div class="wrapper" id="wrapper-merch6">
                <button onclick="adjustQuantity('merch6', -1)">-</button>
                <span class="num" id="quantity-merch6">1</span>
                <button onclick="adjustQuantity('merch6', 1)">+</button>
            </div>
        </div>       
    </div>
        
    <div class="wrapper">
        <button onclick ="totalClick(1)">+</button>
        <span class="totalClicks">01</span>
        <button onclick = "totalClick(-1)">-</button>
    </div>

    <script>
        function addToCart(itemId, itemName, itemPrice) {
            console.log(`Adding ${itemName} to cart`);

            // Show quantity adjustment for the clicked item
            const wrapper = document.getElementById(`wrapper-${itemId}`);
            wrapper.style.display = 'flex';

            // Change the "Add to Cart" button to quantity adjustment
            const cartButton = document.getElementById(`cart-${itemId}`);
            cartButton.style.display = 'none';

            // Send a request to add the item to the cart
            const formData = new FormData();
            formData.append('itemId', itemId);
            formData.append('itemName', itemName);
            formData.append('itemPrice', itemPrice);

            fetch('add_to_cart.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    console.log('Item added to cart successfully');
                } else {
                    console.error('Error adding item to cart');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function adjustQuantity(itemId, change) {
            const quantityElement = document.getElementById(`quantity-${itemId}`);
            let currentQuantity = parseInt(quantityElement.textContent);
            let newQuantity = currentQuantity + change;

            if (newQuantity < 1) {
                newQuantity = 1; // Prevent quantity from going below 1
            }

            quantityElement.textContent = newQuantity;
            console.log(`Quantity adjusted for ${itemId}: ${newQuantity}`);

            // Update your cart logic with newQuantity if needed
        }

        // Optional: Checkout function implementation
        function checkout() {
            // Implement checkout functionality
            console.log('Proceeding to checkout...');
        }

        let totalClicks = 1;

        function totalClick(change) {
            totalClicks += change;
            if (totalClicks < 1) {
            totalClicks = 1;
            }
        const totalClicksElement = document.querySelector('.totalClicks');
        totalClicksElement.textContent = totalClicks.toString().padStart(2, '0');
        }

        // Optional: Checkout function implementation
        function checkout() {
            // Implement checkout functionality
            console.log('Proceeding to checkout...');
        }
    </script>


    <hr width = 100% height = "10px">
    <center>© 2024 NUK MERCHANDISE WEBSITE ALL RIGHT RESERVED</center>
    <br/>
</body>

</html>