<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $random = Str::random(8);
        $this->user->password = Hash::make($random);
        $this->user->save();
        return $this
        ->view('admin/manage/email')
        ->with(
         [
             'name'     => $this->user->name,
             'password' => $random,
         ]);
    }
}
