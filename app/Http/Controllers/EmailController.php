<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleEmail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $recipientEmail = 'dashboard@sasystems.solutions';

        $name = $request->input('name');
        $email = $request->input('email');
        $number = $request->input('number');
        $companyName = $request->input('companyName');

        $mail = new SampleEmail($name, $email, $number, $companyName);

        try {
            Mail::to($recipientEmail)->send($mail);
            return response()->json(['message' => 'Email sent successfully.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Email could not be sent.', 'error' => $e->getMessage()], 500);
        }
    }
}
