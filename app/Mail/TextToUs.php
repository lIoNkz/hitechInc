<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class TextToUs extends Mailable
{
    use Queueable, SerializesModels;



    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->text = $data['text'];
    }



    public function build()
    {

        return $this->from(env('MAIL_FROM'))
                    ->view('emails.textToUs')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'text' => $this->text
                    ]);
    }
}
