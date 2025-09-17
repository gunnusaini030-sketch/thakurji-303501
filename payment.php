<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>QR Code Payment</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    body {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .payment-container {
        background: #fff;
        width: 350px;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        text-align: center;
        transition: transform 0.3s;
    }

    .payment-container:hover {
        transform: translateY(-5px);
    }

    h2 {
        color: #333;
        margin-bottom: 20px;
    }

    .amount {
        font-size: 22px;
        margin-bottom: 20px;
        color: #2575fc;
        font-weight: 500;
    }

    .qr-code img {
        width: 200px;
        height: 200px;
        margin-bottom: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }

    .qr-code img:hover {
        transform: scale(1.05);
    }

    .instructions {
        color: #555;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .btn {
        background: #2575fc;
        color: #fff;
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn:hover {
        background: #6a11cb;
    }

    @media (max-width: 400px) {
        .payment-container {
            width: 90%;
            padding: 20px;
        }

        .qr-code img {
            width: 150px;
            height: 150px;
        }
    }
</style>
</head>
<body>

<div class="payment-container">
    <h2>Donate here</h2>
    <div class="amount">Amount: As your Wish</div>
    <div class="qr-code">
        <!-- Replace this with your QR code image URL -->
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=upi://pay?pa=example@upi&pn=YourName&am=500&cu=INR" alt="QR Code">
    </div>
    <div class="instructions">
        Scan this QR code with your UPI app or QR code payment app to complete the payment.
    </div>
    <button class="btn" onclick="alert('Payment Confirmed!')">I Have Paid</button>
</div>

</body>
</html>
