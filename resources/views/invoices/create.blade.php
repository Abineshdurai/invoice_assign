{{-- <!DOCTYPE html>
<html>
<head>
    <title>Create Invoice</title>
</head>
<body>
    <h1>Submit Invoice</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/invoice" method="POST">
        @csrf
        <input name="client_name" placeholder="Client Name" required><br>
        <input name="email" placeholder="Email" required><br>
        <input name="description" placeholder="Item Description" required><br>
        <input name="quantity" type="number" placeholder="Quantity" required><br>
        <input name="price_per_quantity" type="number" placeholder="Price per Quantity" required><br>
        <input name="tax_percent" type="number" placeholder="Tax %" step="0.01"><br><br>
        <button type="submit">Create Invoice</button>
    </form>
</body>
</html> --}}


<!DOCTYPE html>
<html>
<head>
    <title>Create Invoice</title>
    <link rel="stylesheet" href="{{ asset('css/invoice.css') }}">
</head>
<body>
    <div class="invoice-form">
        <h1>Create Invoice</h1>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <form action="/invoice" method="POST">
            @csrf
            <input name="client_name" placeholder="Client Name" required>
            <input name="email" placeholder="Email" required>
            <input name="description" placeholder="Item Description" required>
            <input name="quantity" type="number" placeholder="Quantity" required>
            <input name="price_per_quantity" type="number" placeholder="Price per Quantity" required>
            <input name="tax_percent" type="number" placeholder="Tax %" step="0.01">
            <button type="submit">Create Invoice</button>
        </form>
    </div>
</body>
</html>
