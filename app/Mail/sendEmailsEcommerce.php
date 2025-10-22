<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendEmailsEcommerce extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('rafliilhamedu99@gmail.com', 'Contact Customer'),
            subject: 'Contact From Customer Nasywa Art Space',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $this->data['image'] = !empty($this->data['image'])
            ? (array) $this->data['image']
            : [];
        return new Content(
            view: 'ecommerce.index',
            with: [
                'title' => $this->data['title'],
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'quantity' => $this->data['quantity'],
                'images' => $this->data['image'],
                'isi' => $this->data['message'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
