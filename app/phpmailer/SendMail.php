<?php 
namespace App\phpmailer;


use PHPMailer\PHPMailer;

class SendMail{

	public $SendMail;

	public function __construct()
	{
		$this->SendMail = new PHPMailer\PHPMailer();
	}

	public function send( bool $isHtml, string $Subject, string $messages, string $to, string $name)
	{
		$this->SendMail->IsSMTP();
        $this->SendMail->SMTPDebug  = 0; // debugging: 1 = errors and messages, 2 = messages only
        $this->SendMail->SMTPAuth   = true; // authentication enabled
        $this->SendMail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $this->SendMail->Host       = "smtp.timeweb.ru";
        $this->SendMail->Port       = 465;
        $this->SendMail->IsHTML($isHtml);
        $this->SendMail->Username = "prorabneva@cl32972.tmweb.ru";
        $this->SendMail->Password = "123456photo";
        $this->SendMail->SetFrom("prorabneva@cl32972.tmweb.ru", 'Прораб Нева');
        $this->SendMail->Subject = $Subject;
        $this->SendMail->Body    = $messages;
        $this->SendMail->AddAddress($to, $name);

        return $this->SendMail->Send() ? true : false ;
    }
}