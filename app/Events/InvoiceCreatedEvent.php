<?php

namespace App\Events;

use App\Models\ClientModel;
use App\Models\InvoiceModel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InvoiceCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $invoice;

    public function __construct(InvoiceModel $invoice)
    {
        $this->invoice = $invoice;
    }
}
