<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Sociomark- Best Digital Marketing Agency | See Our Success Stories​',
            'description' => "Explore our work of over 5 years and see how we have helped businesses of all sizes achieve their online goals.",
            'keywords' => 'Sociomark, client work, clients we work for, viral campaigns, best agency to work with, best digital marketing agency in Navi Mumbai, digital marketing agency in Navi Mumbai, digital marketing company in navi Mumbai'
        ];
        return view('Frontend/Portfolio/insidePortfolio', compact('meta'));
        // return view('Frontend/Portfolio/ListPortfolioCat' , compact('meta'));
    }
    public function portfolioInside()
    {
        $meta = [
            'title' => 'Sociomark- Best Digital Marketing Agency | See Our Success Stories​',
            'description' => "Explore our work of over 5 years and see how we have helped businesses of all sizes achieve their online goals.",
            'keywords' => 'Sociomark, client work, clients we work for, viral campaigns, best agency to work with, best digital marketing agency in Navi Mumbai, digital marketing agency in Navi Mumbai, digital marketing company in navi Mumbai'
        ];
        $clients = config('clients');

        // Filter only those that have image and portfolio-image
        $activeClients = array_filter($clients, function ($client) {
            return !empty($client['portfolio-image']);
        });

        return view('Frontend/Portfolio/insidePortfolio', compact('activeClients', 'meta'));
    }

    // public function social_media($client)
    // {
    //     $clients = config('clients');

    //     if (!array_key_exists($client, $clients)) {
    //         abort(404);
    //     }

    //     $data = $clients[$client];

    //     // Ensure all required keys are present
    //     if (
    //         !isset($data['meta']['title'], $data['meta']['description'], $data['meta']['keywords'], $data['view'], $data['industry']) ||
    //         !view()->exists($data['view'])
    //     ) {
    //         abort(404);
    //     }

    //     $meta = $data['meta'];
    //     $view = $data['view'];
    //     $name = $data['name'];
    //     $industries = (array) $data['industry']; // renamed to avoid confusion

    //     // Get related clients based on shared industries
    //     $relatedClients = collect($clients)
    //         ->filter(function ($c, $key) use ($client, $industries) {
    //             if ($key === $client) return false;

    //             $clientIndustries = (array) ($c['industry'] ?? []);
    //             return count(array_intersect($clientIndustries, $industries)) > 0;
    //         })
    //         ->take(10);

    //     return view($view, compact('meta', 'relatedClients', 'data', 'clients'));
    // }

    public function social_media($client)
    {
        $clients = config('clients');

        if (!array_key_exists($client, $clients)) {
            abort(404);
        }

        $data = $clients[$client];

        // Check if the required meta keys exist
        $hasMeta = isset($data['meta']['title'], $data['meta']['description'], $data['meta']['keywords']);

        $viewExists = isset($data['view']) && view()->exists($data['view']);

        if (!$viewExists) {
            if (isset($data['route'])) {
                $params = $data['params'] ?? [];
                // Optional safety check if route exists
                if (\Route::has($data['route'])) {
                    return redirect()->route($data['route'], $params);
                } else {
                    abort(404, 'Defined route does not exist.');
                }
            }

            // Fallback if only industry is set
            if (isset($data['industry'])) {
                return redirect()->route('industry_single', ['segment' => $data['industry']]);
            }

            abort(404);
        }


        $meta = $data['meta'];
        $view = $data['view'];
        $name = $data['name'];
        $industries = (array) $data['industry'];

        // Get related clients from same industries
        $relatedClients = collect($clients)
            ->filter(function ($c, $key) use ($client, $industries) {
                if ($key === $client) return false;
                $clientIndustries = (array) ($c['industry'] ?? []);
                return count(array_intersect($clientIndustries, $industries)) > 0;
            })
            ->take(10);

        return view($view, compact('meta', 'relatedClients', 'data', 'clients'));
    }


    // public function social_media($client)
    // {
    //     switch ($client) {
    //         /* A */
    //         case 'ai-awards':
    //             $meta = [
    //                 'title' => 'Website & Social Media services for AI Awards| Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing agency, provided website development and social media management services to enhance the online presence of AI Awards."
    //             ];
    //             return view('Frontend/Portfolio/aiawards', compact('meta'));
    //             # code...
    //             break;
    //         case 'adi-arogyam':
    //             $meta = [
    //                 'title' => 'Adi Arogyam Superspecility Hospital Creative | Sociomark​',
    //                 'description' => "SocioMark digital marketing agency in Dubai boosted Adi Arogyam’s online presence with effective social media strategies and creative content."
    //             ];
    //             return view("Frontend/Portfolio/adiArogyamSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'ayu-health':
    //             $meta = [
    //                 'title' => 'Ayu Health Social Media | Campaign by Sociomark​',
    //                 'description' => "Sociomark, a digital marketing agency in UAE, crafted Ayu Health’s social media presence with engaging content, improving reach and brand visibility online."
    //             ];
    //             return view("Frontend/Portfolio/ayuHealthSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'ayushakti':
    //             $meta = [
    //                 'title' => 'Ayushakti Social Media Work | Sociomark​',
    //                 'description' => "Sociomark, a digital marketing agency in UAE, boosted Ayushakti’s online presence with creative social media campaigns and targeted audience engagement."
    //             ];
    //             return view('Frontend/Portfolio/ayushaktiSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         /* B */
    //         case 'bulid-track':
    //             $meta = [
    //                 'title' => 'Build Track Social Media Work | Sociomark​',
    //                 'description' => "Discover how Sociomark, Digital marketing agency in uae, boosted Build Track’s social media with engaging content, targeted ads, and strategic campaigns."
    //             ];
    //             return view("Frontend/Portfolio/bulidTrackSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'button-dabao-desh-banao':
    //             $meta = [
    //                 'title' => 'Button Dabao Campaign | Social Media by Sociomark​',
    //                 'description' => "Sociomark, a digital marketing agency in UAE, led the Button Dabao Desh Banao campaign with creative social media strategies to drive awareness and impact."
    //             ];
    //             return view('Frontend/Portfolio/buttonbabaoDeshBanaoSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'bumchumps':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view('Frontend/Portfolio/bumchumpsSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'bem':
    //             $meta = [
    //                 'title' => 'BEM Social Media Campaign | Sociomark ​',
    //                 'description' => "Sociomark, a digital marketing agency in UAE, created impactful social media strategies for BEM to enhance brand awareness and connect with the right audience."
    //             ];
    //             return view("Frontend/Portfolio/bemSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* C */
    //         case 'castrol':
    //             $meta = [
    //                 'title' => 'Protect India’s Engine Social Media Campaign| Sociomark UAE​',
    //                 'description' => "As a digital marketing company, we delivered Digital marketing solutions for Castrol Activ & Network18 Protect India's Engine Campaign."
    //             ];
    //             return view('Frontend/Portfolio/castrolSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'cosplay-genie':
    //             $meta = [
    //                 'title' => 'Social Media Management for Cosplay Genie | Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing agency, provided social media management, content & script writing, graphic design, 2D animation, and ORM for Cosplay Genie."
    //             ];
    //             return view('Frontend/Portfolio/cosplayGenieSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'cyber-power':
    //             $meta = [
    //                 'title' => 'Elevating CyberPowerPC’s Social Media Impact| Sciomark Dubai​',
    //                 'description' => "As a digital marketing agency, we boosted CyberPowerPC’s social media with strategic management, engaging content, and targeted audience growth."
    //             ];
    //             return view("Frontend/Portfolio/cyberPowerSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* D */
    //         case 'desi-avtar':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/desiAvtar", compact('meta'));
    //             # code...
    //             break;
    //         case 'dy-patil':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/dyPatilSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* E */
    //         case 'euro':
    //             $meta = [
    //                 'title' => 'EURO Social Media Campaign | Sociomark UAE​',
    //                 'description' => "See how Sociomark, a Digital marketing agency in uae, boosted EURO’s social media engagement with creative content, ads, and strategies for brand growth."
    //             ];
    //             return view('Frontend/Portfolio/euroSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'expert-4-travel':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/expert4travelSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* F */
    //         case 'foresight-opticals':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view('Frontend/Portfolio/foresightopticalsSocialMedia', compact('meta'));
    //             break;
    //         /* G */
    //         case 'grill-box':
    //             $meta = [
    //                 'title' => 'Grill Box Social Media Work | Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing agency in UAE, created engaging social media campaigns for Grill Box to boost brand awareness and connect with food lovers online."
    //             ];
    //             return view('Frontend/Portfolio/grillboxSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         /* H */
    //         case 'hollywood-opticians':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view('Frontend/Portfolio/hollywoodopticiansSocialMedia', compact('meta'));
    //             break;
    //         /* I */
    //         case 'inifd-vashi':
    //             $meta = [
    //                 'title' => 'Digital Marketing for INIFD Vashi| Sociomark Dubai ​',
    //                 'description' => "Explore how SEO, Google Ads, social media, content, 2D videos, and ORM boosted INIFD Vashi’s online presence."
    //             ];
    //             return view('Frontend/Portfolio/inifdvashiSocialMedia', compact('meta'));
    //             break;
    //         case 'ism':
    //             $meta = [
    //                 'title' => 'Comprehensive Digital Solutions for ISM | Sociomark Dubai​',
    //                 'description' => "Find out how ISM grew its digital presence with smart social media management, SEO, and high-impact Google and Meta ad campaigns."
    //             ];
    //             return view("Frontend/Portfolio/ismSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* J */
    //         case 'jivana':
    //             $meta = [
    //                 'title' => 'Jivana Social Media Campaign | Sociomark UAE​',
    //                 'description' => "Sociomark, a Digital marketing agency in uae, helped Jivana grow online with creative social posts, targeted campaigns, and higher audience engagement."
    //             ];
    //             return view('Frontend/Portfolio/jivanaSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'jop':
    //             $meta = [
    //                 'title' => 'JOP Social Media Campaign | Sociomark Dubai​',
    //                 'description' => "Discover how our digital marketing agency in Dubai helped JOP boost social media engagement and brand visibility with creative and targeted strategies."
    //             ];
    //             return view("Frontend/Portfolio/jopSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* K */
    //         case 'kolkata-rolls':
    //             $meta = [
    //                 'title' => 'Marketing Services for Kolkata Rolls| Sociomark Dubai​',
    //                 'description' => "Sociomark, a digital marketing agency, provided end-to-end marketing strategy, social media, ORM, content and website development for Kolkata Rolls."
    //             ];
    //             return view('Frontend/Portfolio/kolkatarollsSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         /* L */
    //         case 'lime':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view('Frontend/Portfolio/limeSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         /* M */
    //         case 'mahindra-first-choice-services':
    //             $meta = [
    //                 'title' => 'Social Media Campaign for Mahindra First Choice| Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing company, executed a targeted social media campaign for Mahindra First Choice Services to boost engagement and brand visibility."
    //             ];
    //             return view('Frontend/Portfolio/mahidraFirstChoiceSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'm4u':
    //             $meta = [
    //                 'title' => 'Digital Marketing Services for Markets4You| Sociomark UAE​',
    //                 'description' => "Provided digital marketing services for Markets4You, including social media management and influencer marketing, to boost engagement."
    //             ];
    //             return view("Frontend/Portfolio/m4uSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'mission-insure-india':
    //             $meta = [
    //                 'title' => 'Digital Marketing for Mission Insure India | Sociomark UAE​',
    //                 'description' => "Provided digital marketing services for ICICI Prudential & CNBC-TV18, including strategy, social media, ORM, content writing, ads, and blog creation."
    //             ];
    //             return view('Frontend/Portfolio/missionInsureIndiaSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         /* N */
    //         case 'network18':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/network18Social", compact('meta'));
    //             # code...
    //             break;
    //         case 'nhss':
    //             $meta = [
    //                 'title' => 'NHSS Social Media Campaign | Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing agency in UAE, enhanced NHSS’s social media with strategic content and campaigns to increase brand reach and audience engagement."
    //             ];
    //             return view("Frontend/Portfolio/nhssSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'nmmc':
    //             $meta = [
    //                 'title' => 'NMMC Social Media Work | Sociomark Portfolio​',
    //                 'description' => "Explore how Sociomark, a digital marketing agency, helped NMMC boost engagement and public awareness through creative social media strategies."
    //             ];
    //             return view("Frontend/Portfolio/nmmcSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'nodwin-gaming':
    //             $meta = [
    //                 'title' => 'NODWIN Social Media Campaign | Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing agency in uae, helped NODWIN boost social media engagement with strategic posts, targeted ads, and audience growth."
    //             ];
    //             // return view("Frontend/Portfolio/nodwinSocial" , compact('meta'));
    //             return view("Frontend/Portfolio/nodwinSocialMedia", compact('meta'));
    //             # code...
    //             break;
    //         /* O */
    //         case 'okinawa':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/okinawaSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* P */
    //         case 'pare':
    //             $meta = [
    //                 'title' => 'SEO Success for Pare Innovations | Sociomark Portfolio​',
    //                 'description' => "Learn how our digital marketing agency in UAE helped Pare Innovations boost its online presence through effective SEO strategies and impactful campaigns."
    //             ];
    //             return view("Frontend/Portfolio/pareSocial", compact('meta'));
    //             break;
    //         case 'patankar-farm':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/patankarFarmSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* Q */
    //         case 'qubero':
    //             $meta = [
    //                 'title' => 'Digital Marketing Solutions for Qubero | Sociomark UAE​',
    //                 'description' => "Exlpore how Sociomark managed social media, created content, produced videos, designed graphics, ran campaigns, and handled community and marketing for Qubero."
    //             ];
    //             return view("Frontend/Portfolio/quberoSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* R */
    //         case 'real-estate-awards':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view('Frontend/Portfolio/realEstateAwardSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'repute':
    //             $meta = [
    //                 'title' => 'Boosting Repute’s Social Media Presence| Sociomark UAE​',
    //                 'description' => "Enhanced Repute’s online engagement and visibility through strategic social media management and tailored content creation."
    //             ];
    //             return view("Frontend/Portfolio/reputeSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'road-to-safety':
    //             $meta = [
    //                 'title' => 'Road to Safety Social Media Campaign | Sociomark​',
    //                 'description' => "Explore our Road to Safety social media project by Sociomark, Digital marketing agency in uae, showcasing creative content, engagement growth, and community impact."
    //             ];
    //             return view('Frontend/Portfolio/roadToSafetySocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         /* S */
    //         case 'shahenaz':
    //             $meta = [
    //                 'title' => 'Shahenaz Social Media Campaign | Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing agency in UAE, delivered creative social media strategies for Shahenaz to increase brand visibility and engage their target audience."
    //             ];
    //             return view("Frontend/Portfolio/shahenazSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'smart-cities-of-india':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view('Frontend/Portfolio/smartCityOfIndiaSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'smarter-india':
    //             $meta = [
    //                 'title' => 'Digital Campaign for Mahindra World City & CNBC-Awaaz| Sociomark​',
    //                 'description' => "Sociomark, a digital marketing company, provided social media creatives, print design, and more for Mahindra World City & CNBC-Awaaz’s Jaipur campaign."
    //             ];
    //             return view('Frontend/Portfolio/smarterindiaSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'sportz-consult':
    //             $meta = [
    //                 'title' => 'Creative Services for Sportz Consult| Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing agency, provided social and offline creatives, strategy, and email design & management for Sportz Consult’s brand initiatives."
    //             ];
    //             return view('Frontend/Portfolio/sportzConsultSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'stemrxbio':
    //             $meta = [
    //                 'title' => 'StemRx Bioscience Social Media | Sociomark Portfolio​',
    //                 'description' => "Explore how our digital marketing agency in Dubai helped StemRx Bioscience grow online with smart social media strategies and engaging content."
    //             ];
    //         case 'stemrx-bioscience':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/stemRXBioScience", compact('meta'));
    //             # code...
    //             break;
    //         /* T */
    //         case 'tata-play':
    //             $meta = [
    //                 'title' => 'Tata Play Social Media | Sociomark Portfolio Dubai​',
    //                 'description' => "Discover how our digital marketing agency in Dubai helped Tata Play enhance engagement through creative and effective social media campaigns."
    //             ];
    //             return view("Frontend/Portfolio/tataplaySocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'team-cashless-india':
    //             $meta = [
    //                 'title' => 'Social Media services for Team Cashless India| Sociomark UAE​',
    //                 'description' => "Sociomark, a digital marketing company, provided social media services for MasterCard & Network18’s Team Cashless India campaign to drive awareness and reach."
    //             ];
    //             return view('Frontend/Portfolio/teamCashlessIndiaSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'the-professional-couriers':
    //             $meta = [
    //                 'title' => 'The Professional Couriers | Social Media by Sociomark​',
    //                 'description' => "Sociomark, a digital marketing agency in UAE, helped The Professional Couriers grow online with smart social media content, branding, and audience reach."
    //             ];
    //             return view('Frontend/Portfolio/theProffessionalCouriersSocialMedia', compact('meta'));
    //             # code...
    //             break;
    //         case 'tmc':
    //             $meta = [
    //                 'title' => 'Social Media Management for TMC | Sociomark UAE​',
    //                 'description' => "Handled TMC’s social media to boost engagement, grow followers, and create consistent, impactful content across platforms."
    //             ];
    //             return view("Frontend/Portfolio/tmcSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'tpc':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/tpcSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* U */
    //         /* V */
    //         case 'vedco':
    //             $meta = [
    //                 'title' => 'Vedco Social Media Campaign | Sociomark Portfolio​',
    //                 'description' => "Discover how our digital marketing agency in Dubai elevated Vedco's online presence through targeted social media campaigns and creative strategy."
    //             ];
    //             return view("Frontend/Portfolio/vedcoSocial", compact('meta'));
    //             # code...
    //             break;
    //         /* W */
    //         case 'watch':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/watchSocial", compact('meta'));
    //             # code...
    //             break;
    //         case 'world-grad':
    //             $meta = [
    //                 'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
    //                 'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
    //             ];
    //             return view("Frontend/Portfolio/worldGradSocial", compact('meta'));
    //             break;

    //         default:
    //             # code...
    //             break;
    //     }
    // }

    public function branding_work($client)
    {
        switch ($client) {
            case 'profinet':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/profinetbranding', compact('meta'));
                break;
            case 'hollywood-opticians':
                $meta = [
                    'title' => 'Digital Marketing for Hollywood Opticians| Sociomark UAE​',
                    'description' => "Sociomark, a digital marketing agency, delivered social media, content, ads, 2D videos, ORM, print ads, and in-store branding for Hollywood Opticians."
                ];
                return view('Frontend/Portfolio/hollywoodOpticiansBranding', compact('meta'));
                break;
            case 'foresight-opticals':
                $meta = [
                    'title' => 'Digital Marketing for Foresight Opticals| Sociomark UAE​',
                    'description' => "Sociomark, a digital marketing company, provided social media, content, ads, 2D videos, ORM, print ads, and in-store branding for Foresight Opticals."
                ];
                return view('Frontend/Portfolio/foresightOpticalsBranding', compact('meta'));
                break;

            default:
                # code...
                break;
        }
    }

    public function website_work($client)
    {
        switch ($client) {
            case 'ayushakti':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/ayushaktiweb', compact('meta'));
                break;
            case 'electrocare':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/electrocareweb', compact('meta'));
                break;
            case 'offthehookgrabandgo':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/offthehookgrabandgoweb', compact('meta'));
                break;
            case 'offthehooknanaimo':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/offthehooknanaimoweb', compact('meta'));
                break;
            case 'barebonesfishhouse':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/barebonesfishhouseweb', compact('meta'));
                break;
            case 'kinnaltoys':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/kinnaltoysweb', compact('meta'));
                break;
            case 'trollerfishandchips':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/trollerfishandchipsweb', compact('meta'));
                break;
            case 'lime':
                $meta = [
                    'title' => 'Lime Social Media Campaign | Sociomark UAE​',
                    'description' => "Check out how Sociomark, a digital marketing agency in UAE, helped Lime grow online with creative posts, better reach, and strong social media strategy."
                ];
                return view('Frontend/Portfolio/limeweb', compact('meta'));
                break;
            case 'ayushakti-usa':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/ayushaktiusaweb', compact('meta'));
                break;
            case 'dr-smita-naram':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/drsmitanaramweb', compact('meta'));
                break;
            case 'real-estate-awards':
                $meta = [
                    'title' => 'Real Estate Awards Social Media | Sociomark UAE​',
                    'description' => "Sociomark, a digital marketing agency in UAE, managed the Real Estate Awards’ social media with creative campaigns and strong online audience engagement."
                ];
                return view('Frontend/Portfolio/realEAweb', compact('meta'));
                break;
            case 'portraiture-by-pari':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/portraitureByPariWeb', compact('meta'));
                break;
            case 'profinet':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/profinetWeb', compact('meta'));
                break;
            case 'aainos':
                $meta = [
                    'title' => 'Our Work Portfolio | Sociomark Digital Agency UAE​',
                    'description' => "Explore the success stories by Sociomark, a digital marketing agency in UAE, showcasing creative campaigns and results across various industries and platforms."
                ];
                return view('Frontend/Portfolio/aainosWeb', compact('meta'));
                break;

            default:
                # code...
                break;
        }
    }
}
