<?php 

namespace App;

class EmailService
{
    private $from;
    private $to;
    private $subject;
    private $body;

    public function __construct(string $from, string $to, string $subject, string $body)
    {
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
    }

    static function sendEmail()
    {
        echo '<br/> Email sent <br/>';
    }

}