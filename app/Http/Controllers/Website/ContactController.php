<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PopUpContact;
use App\Mail\NewLeadNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // public function index()
    // {
    //     $meta = [
    //         'title' => 'Contact Sociomark UAE | Digital Marketing Agency in Dubai',
    //         'description' => "Get in touch with Sociomark, a leading digital marketing agency in Dubai. Reach out via our contact form or call us at +971 50 426 6118 for expert marketing solutions.",
    //         'keywords' => 'Sociomark, Contact Us, Best quote, Cheapest digital marketing services,Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
    //     ];
    //     return view("Frontend/ContactUs", compact('meta'));
    // }


    // public function store(Request $request)
    // {

    //     $data = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'phone' => ['required', 'regex:/^\+?[0-9\s\-]{7,20}$/'],
    //         'countryCode' => ['required'],
    //         'service' => 'required|array',
    //         'budget' => 'required',
    //         'companyname' => 'nullable',
    //         'timeline' => 'nullable',
    //         'url' => 'nullable',
    //         'aboutUs' => 'nullable',
    //         'messageforus' => 'nullable',
    //         'consent' => 'required|accepted', // This ensures the checkbox is checked
    //         'utm_source' => 'nullable|string|max:255',
    //         'utm_medium' => 'nullable|string|max:255',
    //         'utm_campaign' => 'nullable|string|max:255',
    //         'utm_term' => 'nullable|string|max:255',
    //         'utm_content' => 'nullable|string|max:255',
    //     ]);
    //     $data['phone'] = $data['countryCode'] . ' ' . $data['phone'];
    //     $data['service'] = implode(', ', $data['service']);

    //     $lead = Contact::create($data);
    //     // $lead = Contact::create($request->all());

    //     // Send email to business analyst
    //     // Mail::to('shruti.sociomark@gmail.com')->send(new NewLeadNotification($lead));
    //     $recipients = [
    //         'shruti.sociomark@gmail.com',
    //         'kartik@sociomark.in',
    //         'business@sociomark.in',
    //         'heta@sociomark.in'
    //     ];

    //     Mail::to($recipients)->send(new NewLeadNotification($lead));
    //     return redirect()->route('thankYou')->with('success', 'Your message has been sent successfully!');
    // }

    // public function popUpStore(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'phone' => ['required', 'regex:/^\+?[0-9\s\-]{7,20}$/'],
    //     ]);

    //     Contact::create($request->all());
    //     return redirect()->route('thankYou')->with('success', 'Your message has been sent successfully!');
    // }
}
