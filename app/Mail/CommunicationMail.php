<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;


class CommunicationMail extends Mailable
{
    use SerializesModels;

    public $Communication;

    public function __construct($Communication)
    {
        $this->Communication = $Communication;
    }

    public function build()
    {
        return $this->subject('Nouvelle Communication') // Sujet de l'e-mail
                    ->view('emails.communication') // Vue pour l'e-mail
                    ->with([
                        'message' => $this->Communication->message,
                        // 'photoPath' => $this->communication->photo_path,
                    ]);
    }
}
