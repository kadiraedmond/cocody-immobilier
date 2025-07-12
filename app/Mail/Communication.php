<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Communication extends Mailable
{
    use Queueable, SerializesModels;

    public $communication;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Communication  $communication
     * @return void
     */
    public function __construct(\App\Models\Communication $communication)
    {
        $this->communication = $communication;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('emails.votre_communication')
            ->with([
                'message' => $this->communication->message,
            ])
            ->attach(public_path($this->communication->image_path), [
                'as' => 'communication_image.jpg',
                'mime' => 'image/jpeg',
            ]);
    }
}
