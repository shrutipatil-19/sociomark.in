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
            'title' => 'StemRx Bioscience | Sociomark Case Study​',
            'description' => "Detailed case study of StemRx Bioscience. Sociomark performs a 360-degree digital marketing plan for them including SEO, SMM, SEM, Web Development etc.",
            'keywords' => 'case study, client case study, client work'
        ];
        return view('Frontend/caseStudy/stemrxbio', compact('meta'));
    }
    public function expert4travel()
    {
        $meta = [
            'title' => 'expert4travel | Sociomark Case Study​',
            'description' => "Detailed case study of expert4travel. Sociomark performs a 360-degree digital marketing plan for them including SEO, SMM, SEM, Web Development etc.",
            'keywords' => 'case study, client case study, client work'
        ];
        return view('Frontend/caseStudy/expert4travel', compact('meta'));
    }
    public function theProfessionalCouriers()
    {
        $meta = [
            'title' => 'The Professional Couriers | Sociomark Case Study​',
            'description' => "Detailed case study of The Professional Couriers. Sociomark performs a 360-degree digital marketing plan including SMM, SEM, ORM & Online Advertising.",
            'keywords' => 'the professional couriers, TPC, Case Study, client case study, client work, best digital marketing agency in Navi Mumbai'
        ];
        return view('Frontend/caseStudy/theProfessionalCouriers', compact('meta'));
    }
    public function eduauraa()
    {
        $meta = [
            'title' => 'Eduauraa | Sociomark Case Study​​',
            'description' => "Detailed case study of Eduauraa. Sociomark performs a 360-degree digital marketing plan for them including SEO, SMM, SEM, Web Development etc.",
            'keywords' => 'case study, client case study, client work'
        ];
        return view('Frontend/caseStudy/eduauraa', compact('meta'));
    }
    public function shahenaz()
    {
        $meta = [
            'title' => "Driving Growth: Sociomark's Digital Marketing for Shahenaz.​",
            'description' => "Witness the power of Sociomark's comprehensive digital marketing strategy for Shahenaz, encompassing SEO, SMM,and beyond.",
            'keywords' => 'case study, client case study, client work'
        ];
        return view('Frontend/caseStudy/shahenaz', compact('meta'));
    }
    public function okinawascooters()
    {
        $meta = [
            'title' => 'OKINAWA | Sociomark Case Study​',
            'description' => "Detailed case study of OKINAWA. Sociomark performs a 360-degree digital marketing plan for them including SEO, SMM, SEM, Web Development etc.",
            'keywords' => 'case study, client case study, client work'
        ];
        return view('Frontend/caseStudy/okinawascooters', compact('meta'));
    }
    public function ayushakti()
    {
        $meta = [
            'title' => 'Ayushakti Ayurved | Sociomark Case Study​​',
            'description' => "Detailed case study of Ayushakti Ayurved. Sociomark performs a 360-degree digital marketing plan for them including SEO, SMM, SEM, Web Development etc.",
            'keywords' => 'case study, client case study, client work'
        ];
        return view('Frontend/caseStudy/ayushakti', compact('meta'));
    }
    public function lime()
    {
        $meta = [
            'title' => 'Lessons in Marketing Excellence (LIME)- Sociomark Case Study​',
            'description' => "Sociomark in collabration with other content creators worked on LIME Season XII by promoting the hastags for this year which was #marketingisbusiness.",
            'keywords' => 'case study, client case study, client work, Lessons in Marketing Excellence, HUL, CNBC TV18, B-School Competition'
        ];
        return view('Frontend/caseStudy/lime', compact('meta'));
    }
    public function nodwinGaming()
    {
        $meta = [
            'title' => 'Gaming Industry - Nodwin Gaming and Social Media - Case Study​​',
            'description' => "Social Media strategy for Nodwin gaming, to increase & strengthen its digital presence in the exponentially booming ecosystem of gaming & esports.",
            'keywords' => 'nodwin gaming, social media case study, gaming industry case study, digital markeitng case study'
        ];
        return view('Frontend/caseStudy/nodwinGaming', compact('meta'));
    }
    public function buttondabaodeshbanao()
    {
        $meta = [
            'title' => 'Case Study | Button Dabao Desh Banao | Lok Sabha Elections Campaign​',
            'description' => "Detailed analysis of 'BDDB' campaign strategized by Sociomark for Network18 to encourage Indian voters to cast their vote in 2019 Lok Sabha Elections.",
            'keywords' => 'Case Study, Button Dabao Desh Banao'
        ];
        return view('Frontend/caseStudy/buttondabaodeshbanao', compact('meta'));
    }
    public function roadtosafetyinitiative()
    {
        $meta = [
            'title' => 'Case Study | Road To Safety Initiative | Diageo - Network18 Campaign​',
            'description' => "Detailed analysis of 'Road To Safety' campaign strategized by Sociomark for Diageo & Network18 to encourage Indians to drive responsibly & be safe on roads.",
            'keywords' => 'Case Study, Road To Safety Initiative, Road To Safety'
        ];
        return view('Frontend/caseStudy/roadtosafetyinitiative', compact('meta'));
    }
    public function acetattoz()
    {
        $meta = [
            'title' => 'Acetattoz | Sociomark Case Study​​',
            'description' => "Detailed case study of Ayushakti Ayurved. Sociomark performs a 360-degree digital marketing plan for them including SEO, SMM, SEM, Web Development etc.",
            'keywords' => 'case study, client case study, client work'
        ];
        return view('Frontend/caseStudy/acetattoz', compact('meta'));
    }
    public function smarterIndia()
    {
        $meta = [
            'title' => 'Lenovo Smarter India- Sociomark Case Study',
            'description' => "Transforming the world intelligently is the vision behind 'Smarter India'. Sociomark amplified this perspective on LinkedIn with some professional tactics",
            'keywords' => 'Lenovo, Smarter India, Linkedin Marketing, Social Media, Case Study, Linkedin Optimization, Linkedin Digital Marketing'
        ];
        return view('Frontend/caseStudy/smarterIndia', compact('meta'));
    }
    public function realestateawards()
    {
        $meta = [
            'title' => 'Case Study | RR Kabel Presents CNBC AWAAZ Real Estate Awards​​',
            'description' => "Here's a detailed case study of the social media marketing campaign strategized by the Sociomark Digital Marketing Agency for RR Kabel & CNBC Awaaz Real Estate Awards.",
            'keywords' => 'Case Study, Real Estate Awards, Social Media Campaigns, Successful Marketing Campaigns, Marketing Campaigns'
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
