<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Order Confirmation</h1>
    </header>

    <section class="order-details">
        <p>Your order has been placed successfully!</p>
        <p id="distance"></p>
        <p id="delivery-time"></p>
    </section>

    <script src="js/script.js"></script>
    <script>
        // Simulate distance and delivery time calculation
        const distance = (Math.random() * 10).toFixed(1);
        const time = Math.floor(Math.random() * 30) + 10;

        document.getElementById('distance').innerText = `Restaurant is ${distance} km away.`;
        document.getElementById('delivery-time').innerText = `It will take ${time} minutes to deliver the order.`;
    </script>
</body>
</html>