<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WebsiteMail extends Mailable
{
    use Queueable, SerializesModels;
public $subject,$body,$reset_link,$maildata;
    /**
     * Create a new message instance.
     */
    public function __construct($maildata, $body)
    {
        $this->maildata = $maildata;
        $this->body = $body;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: $this->subject,
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         // view: 'livewire.email.email',
    //         markdown: 'mail.html.layout',
    //         with: [
    //             'url' => $this->reset_link,
    //         ],
    //     );
    // }

    public function build()
    {
        return $this->markdown('website.mail')
                ->with('maildata', $this->maildata);
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