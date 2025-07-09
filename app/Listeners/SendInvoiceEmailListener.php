<?php

namespace App\Listeners;

use App\Events\InvoiceCreatedEvent;
use App\Mail\InvoiceMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendInvoiceEmailListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(InvoiceCreatedEvent  $event)
    {
         Mail::to($event->invoice->client_email)
            ->send(new InvoiceMail($event->invoice));
            Log::info('Mail is being sent to: ' . $event->invoice->client_email);

    }
}
