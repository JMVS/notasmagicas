<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SendGrid\Mail\Mail;
use Twilio\Rest\Client;

class EmailController extends Controller
{
    public function sendemail(Request $request)
    {
        $email = new Mail();
        $email->setFrom("noreply@notasmagicas.com", "Notas mágicas");
        $email->setSubject("Un enlace desde Notas Mágicas");
        $email->addTo($request->email);
        $email->addContent("text/plain", "Se te ha enviado una nota desde Notas Mágicas: ".$request->link);

        $sendgrid = new \SendGrid(env('SENDGRID_APIKEY'));
        try {
            $response = $sendgrid->send($email);
        } catch (Exception $e) {
            echo 'Se encontró un error: ' . $e->getMessage() . "\n";
        }

        return view('email-sent');
    }

    public function sendsms(Request $request)
    {
        $client = new Client(env('TWILIO_ACCOUNT_ID'), env('TWILIO_AUTH_TOKEN'));
        $client->messages->create(

            $request->phonenumber,
            array(
                'from' => env('TWILIO_NUMBER'),
                'body' => 'Alguien te ha enviado una nota desde Notas Mágicas: '.$request->link
            )
        );

        return view('sms-sent');
    }
}
