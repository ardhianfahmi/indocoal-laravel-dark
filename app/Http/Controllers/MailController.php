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

            'title' => $_POST['subject'],
            'body' => $_POST['message']
        ];

        Mail::to($_POST['email'])->send(new \App\Mail\MyTestMail($details));

        $details2 = [

            'title' => $_POST['subject'],
            'body' => '<html>new email from ' . $_POST['email'] . '<br>' . ' Title: ' . $_POST['subject'] . '<br>' . ' Body: ' . $_POST['message'] . '</html>'
        ];

        Mail::to(" indocoal8@gmail.com")->send(new \App\Mail\MyTestMail($details2));

        return response()->json(['status' => 'sent'])
            ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
    }
}
