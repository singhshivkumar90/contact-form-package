<?php

namespace shiv\contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use shiv\contactform\Models\ContactForm;

class ContactFormController extends Controller
{
    /**
     * Method to show contact form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showContact()
    {
        return view('contactform::contact');
    }

    /**
     * Method to send email to using contact form
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());

        return redirect(route('contact'))
            ->with(['message' => 'Thank you, your mail has been sent successfully.']);;
    }
}
