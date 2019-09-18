<?php

namespace singhshivkumar90\contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use singhshivkumar90\contactform\Models\ContactForm;

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
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactForm::create($request->all());

        return redirect(route('contact'))
            ->with(['message' => 'Thank you, your mail has been sent successfully.']);;
    }
}
