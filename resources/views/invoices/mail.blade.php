{{-- <!DOCTYPE html>
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
</html> --}}


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice Details</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 30px;
            background-color: #f9f9f9;
        }
        .invoice-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .invoice-details {
            width: 100%;
            border-collapse: collapse;
        }
        .invoice-details td {
            padding: 10px 0;
        }
        .invoice-details td:first-child {
            font-weight: bold;
            color: #444;
            width: 35%;
        }
        .total-row td {
            border-top: 1px solid #ccc;
            font-weight: bold;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h2>Invoice Details</h2>
        <table class="invoice-details">
            <tr>
                <td>Client:</td>
                <td>{{ $invoice->client_name }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{ $invoice->client_email }}</td>
            </tr>
            <tr>
                <td>Description:</td>
                <td>{{ $invoice->description }}</td>
            </tr>
            <tr>
                <td>Quantity:</td>
                <td>{{ $invoice->quantity }}</td>
            </tr>
            <tr>
                <td>Subtotal:</td>
                <td>₹{{ number_format($invoice->subtotal, 2) }}</td>
            </tr>
            <tr>
                <td>Tax:</td>
                <td>₹{{ number_format($invoice->tax_amount, 2) }}</td>
            </tr>
            <tr class="total-row">
                <td>Total:</td>
                <td>₹{{ number_format($invoice->total, 2) }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
