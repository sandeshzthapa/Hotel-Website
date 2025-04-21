<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking System - Payment Method</title>
    <link rel="stylesheet" type="text/css" href="payment.css">
</head>
<body>
    <div class="container">
        <h1>Payment Method</h1>
        <form id="payment-form">
            <div class="form-group">
                <label for="method-name">Payment Method:</label>
                <select id="method-name" name="method-name">
                    <option value="credit-card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank-transfer">Bank Transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card-number" placeholder="Enter your card number">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="expiration-date">Expiration Date:</label>
                        <input type="text" id="expiration-date" name="expiration-date" placeholder="MM / YY">
                    </div>
                    <div class="col">
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" name="cvv" placeholder="CVV">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="name-on-card">Name on Card:</label>
                <input type="text" id="name-on-card" name="name-on-card" placeholder="Enter the name on your card" required>
            </div>
            <div class="form-group">
                <label for="billing-address">Billing Address:</label>
                <textarea id="billing-address" name="billing-address" placeholder="Enter your billing address" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <script src="payment.js"></script>
</body>
</html>
