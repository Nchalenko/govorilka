<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public
        $secret       = '6LcsqTgUAAAAANyv7ohJrVsvapxEuuMl37OXsxe_',
        $from         = 'Demo contact form <demo@domain.com>',
        $sendTo       = 'Demo contact form <demo@domain.com>',
        $subject      = 'New message from contact form',
        $fields       = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'), // array variable name => Text to appear in the email
        $okMessage    = 'Contact form successfully submitted. Thank you, I will get back to you soon!',
        $errorMessage = 'There was an error while submitting the form. Please try again later';

    public function index()
    {
        return view('contact');
    }

    public function create()
    {
        $this->validate(\request(),[
                'first_name' => 'required',
                'last_name'  => 'required',
                'email'      => 'required',
                'phone'      => 'required',
                'message'    => 'required',
                'g-recaptcha-response' => 'required'
            ]
        );

        $post = \request()->post();
        $ip = \request()->ip();


        // validate the ReCaptcha, if something is wrong, we throw an Exception,
        // i.e. code stops executing and goes to catch() block

        if (!isset($post['g-recaptcha-response'])) {
//            throw new \Exception('ReCaptcha is not set.');
        }

        // do not forget to enter your secret key in the config above
        // from https://www.google.com/recaptcha/admin

        $recaptcha = new \ReCaptcha\ReCaptcha($this->secret, new \ReCaptcha\RequestMethod\CurlPost());

        // we validate the ReCaptcha field together with the user's IP address

        $response = $recaptcha->verify($post['g-recaptcha-response'], $ip);


        if (!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }


        //TODO-nik if guest loged in get his name, email, phone to UI js part

        $message = [
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'message' => $post['message'],
            'user_id' => $post['user_id'] ?? 0,
            'status' => 0,
        ];

        Contact::create($message);

        try {
            // everything went well, we can compose the message, as usually

            $emailText = "You have new message from contact form\n=============================\n";

            foreach ($_POST as $key => $value) {

                if (isset($fields[$key])) {
                    $emailText .= "$this->fields[$key]: $value\n";
                }
            }

            $headers = array('Content-Type: text/plain; charset="UTF-8";',
                'From: ' . $this->from,
                'Reply-To: ' . $this->from,
                'Return-Path: ' . $this->from,
            );

            mail($this->sendTo, $this->subject, $emailText, implode("\n", $headers));

            $responseArray = array('type' => 'success', 'message' => $this->okMessage);
        } catch (\Exception $e) {
            $responseArray = array('type' => 'danger', 'message' => $this->errorMessage);
        }

        echo $responseArray['message'];

    }

    public function store(array $message)
    {

    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        //
    }
}
