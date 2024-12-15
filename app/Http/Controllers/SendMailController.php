<?php

namespace App\Http\Controllers;

use ReCaptcha\ReCaptcha;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


class SendMailController extends Controller
{
    /**
     * Show the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('frontendViews.pages.contact');
    }

    /**
     * Store the submitted form data and send an email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate reCAPTCHA
        // $recaptcha = new ReCaptcha(env('RECAPTCHA_SECRET_KEY'));
        // $recaptchaResponse = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

        // if (!$recaptchaResponse->isSuccess()) {
        //     return back()->with('error', 'reCAPTCHA verification failed. Please try again.')->withErrors($recaptchaResponse->getErrorCodes());
        // }

        // If reCAPTCHA is valid, proceed with email sending
        $mail = new PHPMailer(true);

        try {
            // dd(env('MAIL_HOST'));
            /* Email SMTP Settings */
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress('precious.manyoni@ict.gov.mw');



            $mail->isHTML(true);

            $mail->Subject = "Message From $request->name";
            $mail->Body  = "Email: $request->email <br><br> Message: $request->body";

            if (!$mail->send()) {
                return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            } else {
                return back()->with("success", "Email has been sent.");
            }
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }
}
