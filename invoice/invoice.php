<?php

$invoiceData = [
    'title' => 'Product/Service Title',
    'price' => '1250.00',
    'transaction_id' => 'TRX123456',
    'date' => date('d-m-Y'),
    'client_name' => 'Abdullah22',
    'payment_method' => 'Bikash,Nagad,Roket'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        .invoice-header, .invoice-footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .btn {
            background-color: #007bff;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="invoice-container">
    <div class="invoice-header">
        <h1>Invoice</h1>
    </div>
    <div class="invoice-details">
        <p><strong>Title:</strong> <?= $invoiceData['title']; ?></p>
        <p><strong>Price:</strong> ৳<?= number_format($invoiceData['price'], 2); ?></p>
        <p><strong>Transaction ID:</strong> <?= $invoiceData['transaction_id']; ?></p>
        <p><strong>Date:</strong> <?= $invoiceData['date']; ?></p>
        <p><strong>Client Name:</strong> <?= $invoiceData['client_name']; ?></p>
        <p><strong>Payment Method:</strong> <?= $invoiceData['payment_method']; ?></p>
    </div>
    <div class="invoice-footer">
        <a href="generate_invoice_pdf.php" class="btn">Download PDF</a>
    </div>
</div>

</body>
</html>
