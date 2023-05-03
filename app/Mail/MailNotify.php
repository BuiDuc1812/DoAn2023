<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;
    private  $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        //
    }

    /**
     * Get the message envelope.
     * @return $this
     * @return \Illuminate\Mail\Mailables\Envelope
     */

    public function build()
    {
        return $this->from('db939397@gmail.com', 'MONASOFA')
            ->subject($this->data['subject'])->view('email.email')->with('data', $this->data);
    }
    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'MONASOFA MAIL',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  *
    //  * @return \Illuminate\Mail\Mailables\Content
    //  */
    // public function content()
    // {
    //     return new Content(
    //         view: 'email.email',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array
    //  */
    // public function attachments()
    // {
    //     return [
    //         'data'=> $this->data
    //     ];
    // }
}
