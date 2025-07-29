<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Case Studies | Sociomark Digital Marketing in UAE​​',
            'description' => "See how Sociomark, a digital marketing agency in UAE, helped brands grow with smart online strategies like SEO, ads, and social media marketing.",
            'keywords' => 'Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/case-study', compact('meta'));
    }
    public function stemrxbio()
    {
        $meta = [
            'title' => 'Stemrx Case study| Sociomark UAE​',
            'description' => "Explore how our digital marketing strategies helped StemRx enhance its online presence through SEO, social media, content creation, and targeted campaigns.",
            'keywords' => 'STEMRxBio marketing, healthcare digital marketing, pharma social media, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/stemrxbio', compact('meta'));
    }
    public function expert4travel()
    {
        $meta = [
            'title' => 'Expert4Travel Case Study | Sociomark UAE​',
            'description' => "Discover how our digital marketing strategies helped Expert4Travel boost its online visibility, drive bookings with targeted campaigns.",
            'keywords' => 'Expert4Travel travel marketing, tourism digital campaigns, travel SEO, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/expert4travel', compact('meta'));
    }
    public function theProfessionalCouriers()
    {
        $meta = [
            'title' => 'The Professional Couriers Case Study by Sociomark​​',
            'description' => "Discover how Sociomark, a Digital marketing agency, boosted The Professional Couriers’ brand visibility and engagement through smart social media strategies.",
            'keywords' => 'courier services marketing, logistics digital campaigns, transportation SEO, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/theProfessionalCouriers', compact('meta'));
    }
    public function eduauraa()
    {
        $meta = [
            'title' => 'Eduauraa Case Study | Sociomark Digital Agency UAE​​',
            'description' => "Discover how Sociomark, a digital marketing agency in UAE, helped Eduauraa boost its online presence through smart strategies and impactful digital campaigns.",
            'keywords' => 'EduAuraa education marketing, school digital strategy, edtech campaigns,Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/eduauraa', compact('meta'));
    }
    public function shahenaz()
    {
        $meta = [
            'title' => 'Shahenaz Case Study | Sociomark Success Story​',
            'description' => "Discover how our digital marketing agency in UAE helped Shahenaz boost its brand online through smart strategy, creativity, and impactful campaigns.",
            'keywords' => 'fashion marketing, clothing brand digital strategy, apparel social media, fashion brand SEO, ethnic wear marketing, lifestyle brand promotions'
        ];
        return view('Frontend/caseStudy/shahenaz', compact('meta'));
    }
    public function okinawascooters()
    {
        $meta = [
            'title' => 'Okinawa Scooters Case Study | Sociomark UAE​​',
            'description' => "Discover how our digital marketing agency in UAE helped Okinawa Scooters grow online through creative social media and strategic digital campaigns.",
            'keywords' => 'Okinawa scooters marketing, automotive digital campaigns, scooter SEO, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/okinawascooters', compact('meta'));
    }
    public function ayushakti()
    {
        $meta = [
            'title' => 'Ayushakti Case Study | Sociomark Dubai ​​',
            'description' => "See how our digital marketing efforts helped Ayushakti expand its reach, strengthen brand presence, through strategic content, SEO, and social media.",
            'keywords' => 'Ayushakti wellness marketing, healthcare digital, Ayurveda social media, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/ayushakti', compact('meta'));
    }
    public function lime()
    {
        $meta = [
            'title' => 'Lessons in Marketing Excellence (LIME)- Sociomark Case Study​​',
            'description' => "Sociomark in collabration with other content creators worked on 
LIME Season XII by promoting the hastags for this year which was #marketingisbusiness.",
            'keywords' => 'LIME case study, brand strategy initiatives, corporate marketing education,Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE '
        ];
        return view('Frontend/caseStudy/lime', compact('meta'));
    }
    public function nodwinGaming()
    {
        $meta = [
            'title' => 'Nodwin Gaming Project | Sociomark  Work​​',
            'description' => "See how our digital marketing agency in UAE helped Nodwin Gaming boost their brand visibility with creative social media and digital strategies.",
            'keywords' => 'Nodwin Gaming esports marketing, gaming digital campaigns, esports SEO, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/nodwinGaming', compact('meta'));
    }
    public function buttondabaodeshbanao()
    {
        $meta = [
            'title' => 'Button Dabao Desh Banao Campaign by Sociomark​',
            'description' => "Sociomark, a Digital marketing agency, created an engaging social media campaign for Button Dabao Desh Banao to boost brand reach and audience interaction.",
            'keywords' => ' public service digital campaigns, election awareness strategy, Button Dabao Desh Banao, social media for voting rights, government awareness campaign UAE'
        ];
        return view('Frontend/caseStudy/buttondabaodeshbanao', compact('meta'));
    }
    public function roadtosafetyinitiative()
    {
        $meta = [
            'title' => 'Road to Safety Initiative by Sociomark Agency​​',
            'description' => "Sociomark, a Digital marketing agency, led the Road to Safety Initiative to create awareness through impactful social media strategies and engagement.",
            'keywords' => 'road safety marketing, public sector digital campaigns, CSR SEO, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/roadtosafetyinitiative', compact('meta'));
    }
    public function acetattoz()
    {
        $meta = [
            'title' => 'Acetattoz Case Study by Sociomark Digital Experts​​',
            'description' => "Explore how Sociomark, a Digital marketing agency, helped Acetattoz increase brand awareness and engagement through targeted social media strategies.",
            'keywords' => 'tattoo studio marketing, Ace Tattoos branding, body art promotion UAE, ink studio social media campaigns, youth lifestyle branding, tattoo artist digital strategy, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/acetattoz', compact('meta'));
    }
    public function smarterIndia()
    {
        $meta = [
            'title' => 'Smarter India Campaign Case Study | Powering Awareness Digitally',
            'description' => "A deep dive into how we executed the impactful “Button Dabao, Desh Banao” campaign driving awareness, through powerful digital storytelling and strategy.",
            'keywords' => 'Smarter India consulting marketing, education digital, corporate SEO,Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/smarterIndia', compact('meta'));
    }
    public function realestateawards()
    {
        $meta = [
            'title' => 'RR Kabel Case Study | Boosting Brand Awareness in Electricals​​',
            'description' => "Explore how RR Kabel strengthened its digital presence and
 drove customer engagement through effective marketing strategies
 by Sociomark .",
            'keywords' => 'real estate awards campaign, property marketing, realty digital, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/realestateawards', compact('meta'));
    }
    public function nhs()
    {
        $meta = [
            'title' => 'NHS Case Study | Sociomark UAE​',
            'description' => "Discover how Sociomark, a leading digital marketing company, helped NHS boost engagement and awareness with strategic digital campaigns and creative solutions.",
            'keywords' => 'ISM education marketing, school social media, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/nhs', compact('meta'));
    }

    public function getTheHook()
    {
        $meta = [
            'title' => 'Off The Hook Case Study | Sociomark UAE​​',
            'description' => "Sociomark, a leading digital marketing company, elevated Off The Hook’s brand with creative social media strategies to drive engagement.",
            'keywords' => 'restaurant digital marketing, Off The Hook branding, food and beverage promotion UAE, casual dining social media campaigns, seafood restaurant advertising, F&B marketing strategy, dine-in and delivery promotions'
        ];
        return view('Frontend/caseStudy/getTheHook', compact('meta'));
    }
    public function ayushaktiNew()
    {
        $meta = [
            'title' => 'Ayushakti Case Study | Sociomark Dubai ​​',
            'description' => "See how our digital marketing efforts helped Ayushakti expand its reach, strengthen brand presence, through strategic content, SEO, and social media.",
            'keywords' => 'Ayushakti wellness marketing, healthcare digital, Ayurveda social media, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/ayushaktiNew', compact('meta'));
    }
    public function cyberPower()
    {
        $meta = [
            'title' => 'Cyber Power Case Study | Sociomark UAE​​',
            'description' => "Learn how Sociomark, a premier digital marketing company, empowered Cyber Power to enhance brand awareness and drive leads through innovative online strategies.",
            'keywords' => 'gaming PC marketing, tech brand digital strategy, esports PC branding,Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        return view('Frontend/caseStudy/cyberPower', compact('meta'));
    }
    public function buildTrack()
    {
        $meta = [
            'title' => 'Build Track Case Study | Sociomark UAE​',
            'description' => "Discover how Sociomark, a top digital marketing company, transformed Build Track's online presence with targeted strategies, driving growth and engagement.",
            'keywords' => 'home automation marketing, hotel automation solutions, smart switches digital strategy, IoT touch keypads promotion, smart home technology UAE, automation brand social media, Build Track digital marketing, Best digital marketing agency in Dubai'
        ];
        return view('Frontend/caseStudy/buildTrack', compact('meta'));
    }
}
