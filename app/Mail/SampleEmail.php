<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class SampleEmail extends Mailable
{
    public $name;
    public $email;
    public $number;
    public $companyName;

    public function __construct($name, $email, $number, $companyName)
    {
        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
        $this->companyName = $companyName;
    }

    public function build()
    {
        return $this->from($this->email, $this->name)
        ->subject('New message from '. $this->name)
            ->view('emails.sample')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'number' => $this->number,
                'companyName' => $this->companyName,
            ]);
    }
}
