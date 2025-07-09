<?php

namespace App\Http\Controllers;

use App\Events\InvoiceCreatedEvent;
use App\Http\Requests\InvoiceRequest;
use App\Models\ClientModel;
use App\Models\InvoiceModel;
use App\Services\InvoiceCalculatorService;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function store(InvoiceRequest $request, InvoiceCalculatorService $calculator)
    {
        $data = $request->validated();
        $tax = $request->input('tax_percent', 0);
        $calc = $calculator->calculate($data['quantity'], $data['price_per_quantity'], $tax);

        $invoice = InvoiceModel::create([
            'client_name' => $data['client_name'],
            'client_email' => $data['email'],
            'description' => $data['description'],
            'quantity' => $data['quantity'],
            'price_per_quantity' => $data['price_per_quantity'],
            'tax_percent' => $tax,
            'subtotal' => $calc['subtotal'],
            'tax_amount' => $calc['taxAmt'],
            'total' => $calc['total'],
        ]);
        // $invoice->tax_amount = $calc['taxAmt'];
        // print(">>>>>>>>>>>>>>>>>>>>>>>>>" . $invoice);

        event(new InvoiceCreatedEvent($invoice));

        return redirect()->back()->with('success', 'Invoice created & email queued.');
    }

    public function create()
    {
        return view('invoices.create');
    }
}
