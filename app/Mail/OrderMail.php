<?php

namespace App\Mail;

use App\Http\Requests\OrderRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        protected readonly OrderRequest $orderRequest
    )
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: env("MAIL_FROM"),
            to: env("MAIL_TO"),
            replyTo: $this->orderRequest->json()->get("email"),
            subject: "Zapytanie o zlecenie",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.order',
            with: $this->orderRequest->json()->all()
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
