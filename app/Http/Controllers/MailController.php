<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendEmail(Request $request, Response $response)
    {

        $details = [
            'name' => $_POST['name'],
            'title' => $_POST['subject'],
            'body' => $_POST['message']
        ];

        Mail::to($_POST['email'])->send(new \App\Mail\MyTestMail($details));

        $details2 = [
            'name' => $_POST['name'],
            'title' => $_POST['subject'],
            'body' => '<html> <br>Email Pengirim : ' . $_POST['email'] . '<br>' . ' Isi Pesan: ' . $_POST['message'] . '</html>'
        ];

        Mail::to(" indocoal8@gmail.com")->send(new \App\Mail\MyTestMail($details2));

        return response()->json(['status' => 'sent'])
            ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
    }
}
