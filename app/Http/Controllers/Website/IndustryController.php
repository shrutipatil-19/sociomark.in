<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function home()
    {
        return view("Frontend/industry/home");
    }

    public function single($segment)
    {
        $industryMeta = config('industries');

        if (!isset($industryMeta[$segment])) {
            abort(404);
        }

        // Redirect if 'view' not found but 'route' is present
        if (!isset($industryMeta[$segment]['view'])) {
            if (isset($industryMeta[$segment]['redirect_to_segment'])) {
                return redirect()->route('industry_single', ['segment' => $industryMeta[$segment]['redirect_to_segment']]);
            }
            abort(404);
        }

        // // Still 404 if neither 'view' nor 'route' is defined
        // if (!isset($industryMeta[$segment]['view'])) {
        //     abort(404);
        // }

        $meta = [
            'title' => $industryMeta[$segment]['title'],
            'description' => $industryMeta[$segment]['description'],
            'keywords' => $industryMeta[$segment]['keywords']
        ];

        $view = $industryMeta[$segment]['view'];

        // ✅ FILTER CLIENTS THAT CONTAIN THE SEGMENT IN THEIR INDUSTRY ARRAY
        $clients = collect(config('clients'))->filter(function ($client) use ($segment) {
            return in_array($segment, (array) ($client['industry'] ?? []));
        });

        return view($view, compact('meta', 'clients'));
    }



    // public function single($segment)
    // {
    //     $industryMeta = config('industries');

    //     if (!isset($industryMeta[$segment])) {
    //         abort(404); // This correctly handles missing industry segments
    //     }

    //     $meta = [
    //         'title' => $industryMeta[$segment]['title'],
    //         'description' => $industryMeta[$segment]['description']
    //     ];
    //     $view = $industryMeta[$segment]['view'];

    //     // Get all clients from this industry
    //     $clients = collect(config('clients'))->filter(fn($client) => $client['industry'] === $segment);
    //     switch ($segment) {
    //         case 'education':

    //             $meta = [
    //                 'title' => 'Education marketing agency in Dubai | Sociomark',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, helps education brands grow online with SEO, content strategies, and social media marketing solutions.'
    //             ];
    //             return view("Frontend/industry/education_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'healthcare':
    //             $meta = [
    //                 'title' => 'Healthcare marekting agency in UAE| Sociomark',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, offers healthcare marketing solutions using SEO, content, and social media to connect providers with patients online.'
    //             ];
    //             return view("Frontend/industry/healthcare_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'fmcg':
    //             $meta = [
    //                 'title' => 'FMCG Digital Marketing Services in UAE | Sociomark',
    //                 'description' => 'Learn how Sociomark, a digital marketing agency in UAE, helps FMCG brands grow with online strategies like SEO, social media, and targeted advertising.'
    //             ];
    //             return view("Frontend/industry/fmcg_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'news-media':
    //             $meta = [
    //                 'title' => 'News & Media Marketing Services in UAE | Sociomark ',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, helps news & media brands grow online with SEO, content strategies, and social media marketing solutions.'
    //             ];
    //             return view("Frontend/industry/news_and_media_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'real-estate':
    //             $meta = [
    //                 'title' => 'Real Estate Marketing Services in UAE | Sociomark',
    //                 'description' => 'Sociomark is a digital marketing agency in UAE that helps real estate companies get more leads with online ads, SEO, and social media marketing.'
    //             ];
    //             return view("Frontend/industry/realestate_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'logistics':
    //             $meta = [
    //                 'title' => 'Healthcare marekting agency in UAE| Sociomark',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, offers healthcare marketing solutions using SEO, content, and social media to connect providers with patients online.'
    //             ];
    //             return view("Frontend/industry/logistics_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'fashion':
    //             $meta = [
    //                 'title' => 'Fashion Marketing Services in UAE | Sociomark',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, helps fashion brands grow online with smart SEO, ads, and social media to boost sales and brand awareness.'
    //             ];
    //             return view("Frontend/industry/fashion_and_lifestyle_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'gaming':
    //             $meta = [
    //                 'title' => 'Gaming Marketing Services in UAE | Sociomark',
    //                 'description' => 'Sociomark is a digital marketing agency in UAE helping gaming brands grow with SEO, ads, and social media strategies to boost players and online reach.'
    //             ];
    //             return view("Frontend/industry/gaming_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'home-interior':
    //             $meta = [
    //                 'title' => 'Home Interior Marketing Services in UAE | Sociomark',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, helps home interior brands grow with SEO, social media, and online ads to reach the right audience effectively.'
    //             ];
    //             return view("Frontend/industry/interior_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'automobile':
    //             $meta = [
    //                 'title' => 'Automobile Marketing Services in UAE | Sociomark',
    //                 'description' => 'Sociomark is a digital marketing agency in UAE that helps automobile brands grow online with SEO, paid ads, and social media to drive leads and visibility.'
    //             ];
    //             return view("Frontend/industry/automobile_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'travel':
    //             $meta = [
    //                 'title' => 'Healthcare marekting agency in UAE| Sociomark',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, offers healthcare marketing solutions using SEO, content, and social media to connect providers with patients online.'
    //             ];
    //             return view("Frontend/industry/travel_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'b2b':
    //             $meta = [
    //                 'title' => 'Healthcare marekting agency in UAE| Sociomark',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, offers healthcare marketing solutions using SEO, content, and social media to connect providers with patients online.'
    //             ];
    //             return view("Frontend/industry/b2b_industry", compact('meta', 'clients'));
    //             # code...
    //             break;
    //         case 'public':
    //         case 'public-sector':
    //             $meta = [
    //                 'title' => 'Public Sector Digital Marketing in UAE | Sociomark',
    //                 'description' => 'Sociomark, a digital marketing agency in UAE, supports public sector organizations with online strategies like SEO, social media, and outreach campaigns.'
    //             ];
    //             return view("Frontend/industry/public_sector", compact('meta', 'clients'));
    //             # code...
    //             break;

    //         default:
    //             # code...
    //             break;
    //     }
    // }
}
