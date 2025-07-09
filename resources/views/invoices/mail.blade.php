{{-- <div>
    <h1>Invoice Details</h1>
<p>Client: {{ $invoice->client_name }}</p>
<p>Description: {{ $invoice->description }}</p>
<p>Quantity: {{ $invoice->quantity }}</p>
<p>Subtotal: ₹{{ $invoice->subtotal }}</p>
<p>Tax: ₹{{ $invoice->tax_amount }}</p>
<p><strong>Total: ₹{{ $invoice->total }}</strong></p>

</div> --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .invoice-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            font-size: 14px;
            margin: 6px 0;
        }

        strong {
            font-size: 16px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h1>Invoice Details</h1>
        <p><strong>Client:</strong> {{ $invoice->client_name }}</p>
        <p><strong>Description:</strong> {{ $invoice->description }}</p>
        <p><strong>Quantity:</strong> {{ $invoice->quantity }}</p>
        <p><strong>Subtotal:</strong> ₹{{ $invoice->subtotal }}</p>
        <p><strong>Tax:</strong> ₹{{ $invoice->tax_amount ?? $invoice->tax }}</p>
        <p><strong>Total:</strong> ₹{{ $invoice->total }}</strong></p>
    </div>
</body>
</html>
