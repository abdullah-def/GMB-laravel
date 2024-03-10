<?php

namespace App\Http\Controllers\Api\ChatGpt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class ChatGpt extends Controller
{
    public $custemer_name;
    public $custemer_review;
    public $custemer_star;

    public $business_name;
    public $business_website;
    public $business_industry;
    public $basic_product;
    public $same_language;
    public $language_choise;


    public $assistant ;
    public $user ;

    function __construct($custemer_review, $custemer_name, $custemer_star, $business_name, $business_website, $business_industry, $basic_product, $same_language, $language_choise) {

        $this->custemer_review = $custemer_review;
        
        $this->custemer_name = $custemer_name;
        $this->custemer_star = $custemer_star;

        $this->business_name = $business_name;
        $this->business_website = $business_website;
        $this->business_industry = $business_industry;
        $this->basic_product = $basic_product;

        $this->same_language = $same_language;
        $this->language_choise = $language_choise;

        $this->assistant  = '';

        if ($this->custemer_name){
            $this->assistant .= 'customer name: ' . $this->custemer_name . '.';
        }
        if($this->custemer_star){
            $this->assistant .= 'Number of stars: '. $this->custemer_name . '.';
        }
        if($this->business_name){
            $this->assistant .= 'Business Name: '. $this->business_name . '.';
        }
        if($this->business_website){
            $this->assistant .= "Business website: ". $this->business_website . '.';
        }
        if($this->business_industry){
            $this->assistant .= "My company sector: ". $this->business_industry . '.';
        }
        if($this->basic_product){
            $this->assistant .= "My main product: " . $this->basic_product . '.';
        }

        if($this->same_language){
            $this->assistant .= "Response language: Respond in the same language as the customer" . '.';
        }else{
            $lang =[
                'Albanian, Albania',
                'Arabic, Arab World',
                'Armenian, Armenia',
                'Awadhi, India',
                'Azerbaijani, Azerbaijan',
                'Bashkir, Russia',
                'Basque, Spain',
                'Belarusian, Belarus',
                'Bengali, Bangladesh',
                'Bhojpuri, India',
                'Bosnian, Bosnia and Herzegovina',
                'Brazilian Portuguese, Brazil',
                'Bulgarian, Bulgaria',
                'Cantonese (Yue), China',
                'Catalan, Spain',
                'Chhattisgarhi, India',
                'Chinese, China',
                'Croatian, Croatia',
                'Czech, Czech Republic',
                'Danish, Denmark',
                'Dogri, India',
                'Dutch, Netherlands',
                'English, United Kingdom',
                'Estonian, Estonia',
                'Faroese, Faroe Islands',
                'Finnish, Finland',
                'French, France',
                'Galician, Spain',
                'Georgian, Georgia',
                'German, Germany',
                'Greek, Greece',
                'Gujarati, India',
                'Haryanvi, India',
                'Hindi, India',
                'Hungarian, Hungary',
                'Indonesian, Indonesia',
                'Irish, Ireland',
                'Italian, Italy',
                'Japanese, Japan',
                'Javanese, Indonesia',
                'Kannada, India',
                'Kashmiri, India',
                'Kazakh, Kazakhstan',
                'Konkani, India',
                'Korean, South Korea',
                'Kyrgyz, Kyrgyzstan',
                'Latvian, Latvia',
                'Lithuanian, Lithuania',
                'Macedonian, North Macedonia',
                'Maithili, India',
                'Malay, Malaysia',
                'Maltese, Malta',
                'Mandarin, China',
                'Mandarin Chinese, China',
                'Marathi, India',
                'Marwari, India',
                'Min Nan, China',
                'Moldovan, Moldova',
                'Mongolian, Mongolia',
                'Montenegrin, Montenegro',
                'Nepali, Nepal',
                'Norwegian, Norway',
                'Oriya, India',
                'Pashto, Afghanistan',
                'Persian (Farsi), Iran',
                'Polish, Poland',
                'Portuguese, Portugal',
                'Punjabi, India',
                'Rajasthani, India',
                'Romanian, Romania',
                'Russian, Russia',
                'Sanskrit, India',
                'Santali, India',
                'Serbian, Serbia',
                'Sindhi, Pakistan',
                'Sinhala, Sri Lanka',
                'Slovak, Slovakia',
                'Slovene, Slovenia',
                'Slovenian, Slovenia',
                'Ukrainian, Ukraine',
                'Urdu, Pakistan',
                'Uzbek, Uzbekistan',
                'Vietnamese, Vietnam',
                'Welsh, Wales',
                'Wu, China',    
            ];
            $this->assistant .= "Reply in : ". $lang[$language_choise] . '.';
        }

    }

    public function getResponse()
    {
        try {
            /** @var array $response */
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "Authorization" => "Bearer " . env('OPENAI_API_KEY')
                ])->post('https://api.openai.com/v1/chat/completions', [
                
                    "model" => 'gpt-3.5-turbo-0125',
                    "messages" => [
                        [
                            
                            "role" => "system",
                            "content" => 'This is a customer review. I want you to respond to this review briefly and professionally in our name. Attached is the review you should respond to, the number of stars the customer left in the review (out of five stars max), the name or username of the customer, our business name and some information to help you.'
                        ],
                        [
                            "role" => "assistant",
                            "content" => $this->assistant
                        ],
                        [
                            "role" => "user",
                            "content" => $this->custemer_review
                        ],
                    

                    ],

                ])->json();

            return $response['choices'][0]['message']['content'];
        } catch (Throwable $e) {
            return "false";
        }
    }
}
