<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PopUpContact;
use App\Mail\NewLeadNotification;
use Illuminate\Support\Facades\Mail;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Contact Us to get the best quote | Sociomark',
            'description' => "Looking for digital marketing service at the lowest cost? Don't worry! Contact Sociomark team now who will help you in designing the digital marketing plan",
            'keywords' => 'Sociomark, Contact Us, Best quote, Cheapest digital marketing services, best digital marketing agency in navi Mumbai, best digital marketing company in Mumbai, best digital marketing agency in navi Mumbai, digital marketing company in Mumbai.'
        ];
        return view("Frontend/ContactUs", compact('meta'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email',
            'phone'        => ['required', 'regex:/^\+?[0-9\s\-]{7,20}$/'],
            'countryCode'  => ['required'],
            'service'      => 'required|array',
            'budget'       => 'required',
            'companyname'  => 'nullable',
            'timeline'     => 'nullable',
            'url'          => 'nullable',
            'aboutUs'      => 'nullable',
            'messageforus' => 'nullable',
            'consent'      => 'required|accepted',
            'utm_source'   => 'nullable|string|max:255',
            'utm_medium'   => 'nullable|string|max:255',
            'utm_campaign' => 'nullable|string|max:255',
            'utm_term'     => 'nullable|string|max:255',
            'utm_content'  => 'nullable|string|max:255',
            'source'       => 'nullable',
            'captcha'      => 'required|numeric',
        ]);

        if ((int)$request->captcha !== (int)session('captcha_answer')) {
            session()->forget('captcha_answer');
            return back()
                ->withErrors(['captcha' => 'Incorrect answer to the math question.'])
                ->withInput();
        }

        session()->forget('captcha_answer');

        $data['phone']   = $data['countryCode'] . ' ' . $data['phone'];
        $data['service'] = implode(', ', $data['service']);
        $data['source']  = $data['source'] ?? $request->headers->get('referer');

        $lead = Contact::create($data);

        // Mail::to('shruti.sociomark@gmail.com')->send(new NewLeadNotification($lead));
        $recipients = [
            'shruti.sociomark@gmail.com',
            'brandsolution@sociomark.in',
            'business@sociomark.in',
            'heta@sociomark.in',
            'rishi@sociomark.in',
            'sonali@sociomark.in'
        ];

        Mail::to($recipients)->send(new NewLeadNotification($lead));
        return redirect()->route('thankYou')->with('success', 'Your message has been sent successfully!');
    }
    // public function showForm()
    // {
    //     $num1 = rand(1, 10);
    //     $num2 = rand(1, 10);

    //     session(['captcha_answer' => $num1 + $num2]);

    //     return view('Frontend/partial/contactUsForm', compact('num1', 'num2'));
    // }

    public function popUpStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^\+?[0-9\s\-]{7,20}$/'],
        ]);

        Contact::create($request->all());
        return redirect()->route('thankYou')->with('success', 'Your message has been sent successfully!');
    }
}
