<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Notifications\ReviewNotification;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        

        $response = $request->user()
        ->reviewResponse()
        ->orderBy('created_at', 'desc')
        ->paginate(25);
        
        if($request->user()->stripe_session){

            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $status = $stripe->subscriptions->retrieve($request->user()->stripe_session);
            $auto_renew = $status->cancel_at_period_end;
        }
        else{
            $auto_renew = true;
        }



        $data = [
            'title' => config('app.name') . ' - Reviews',
            'response' => $response,
            'auto_renew' => $auto_renew
        ];

        return view('user.home', $data);
    }

    public function documentation(Request $request)
    {
        $data = [
            'title' => config('app.name') . ' - Documentation',
        ];
        return view('user.documentation', $data);
    }


    public function accounts(Request $request)
    {
        $data = [
            'title' => config('app.name') . ' - Accounts',
        ];
        return view('user.app.accounts', $data);
    }
    public function download(Request $request) {
       
        $data = [
            'title' => config('app.name') . ' - Documentation',
        ];

        
        return Storage::download('files/ziko-extension.zip');
        
      }

    public function settings(Request $request)
    {
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



        if($request->user()->stripe_session){

            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $status = $stripe->subscriptions->retrieve($request->user()->stripe_session);
            $auto_renew = $status->cancel_at_period_end;
        }
        else{
            $auto_renew = true;
        }



        $data = [
            'title' => config('app.name') . ' - Settings',
            'langs' => $lang ,
            'auto_renew' => $auto_renew
          

        ];
        return view('user.settings', $data);
    }

    public function ruls(Request $request)
    {
        

        $user = $request->user();

        $user->settings->five_star =  $this->check($request->fivestarreview);
        $user->settings->four_star = $this->check($request->fourstarreview) ;
        $user->settings->three_star = $this->check($request->threestarreview) ;
        $user->settings->two_star = $this->check($request->twostarreview) ;
        $user->settings->one_star = $this->check($request->onestarreview) ;

        $user->settings->email_response = $this->check($request->respondemail) ;
        $user->settings->email_news = $this->check($request->newemail) ;



        if( $request->language == null && $request->lang ==  'false')
        {
            $user->settings->same_language = true;
            $user->settings->language_choise = null;
        }
        elseif($request->language == null && $request->lang !=  'false' && $request->lang !=  null)
        {
            $user->settings->same_language = false;
            $user->settings->language_choise = $request->lang;
        }

        elseif($request->language == "on" && ($request->lang ==  'false' || $request->lang ==  null))
        {
            $user->settings->same_language = true;
            $user->settings->language_choise = null;
        }


        $user->settings->save();

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


        $data = [
            'title' => config('app.name') . ' - Settings',
            'langs' => $lang ,
            
            
        ];
        smilify('success', 'Settings have been modified');
        return redirect()->route('settings' , $data);
        
    }
    // redirect()->back()
    public function business(Request $request)
    {
        $user = $request->user();

        $user->settings->business_name =  $request->BUSINESSNAME;
        $user->settings->business_website = $request->BUSINESSWEBSITE;
        $user->settings->business_address = $request->BUSINESSADDRESS;
        $user->settings->business_phone = $request->BUSINESSPHONE;
        $user->settings->business_email = $request->BUSINESSEMAIL;

        $user->settings->business_industry = $request->BUSINESSINDUSTRY;
        $user->settings->basic_product = $request->BUSINESSPRODUCT;
        
        $user->settings->save();

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


        $data = [
            'title' => config('app.name') . ' - Settings',
            'langs' => $lang ,
            
            
        ];
        smilify('success', 'Settings have been modified');
        return redirect()->back();
        

    }

    public function personal(Request $request)
    {   

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'current_password' => ['required', 'current_password'],
            'password' => ['required',Rules\Password::defaults()],
        ]);

        $user = $request->user();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        


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

        $data = [
            'title' => config('app.name') . ' - Settings',
            'langs' => $lang ,
            
            
        ];
        smilify('success', 'Settings have been modified');
        return redirect()->route('settings' , $data);
        
    }

    public function autorenew(Request $request)
    {
        // 

        if($request->user()->stripe_session){

            $user = $request->user();
            $order = $request->auto;
            if ($order != null){
                $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
                $stripe->subscriptions->update($user->stripe_session, ['cancel_at_period_end' => false]);

            }
            else{
                $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
                $stripe->subscriptions->update($user->stripe_session, ['cancel_at_period_end' => true]);

            }


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


            $data = [
                'title' => config('app.name') . ' - Settings',
                'langs' => $lang ,
                
            ];

            smilify('success', 'Settings have been modified');
            return redirect()->route('settings' , $data);
        }
        else{
            // error
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


            $data = [
                'title' => config('app.name') . ' - Settings',
                'langs' => $lang ,
                
            ];

            smilify('error', "You don't have a Stripe id");
            return redirect()->route('settings' , $data);
        }
        

    }

    public function makeAllRead(Request $request)
    {
        auth()->user()->unreadNotifications->markAsRead();
    }
    

    public function create_access_token(Request $request)
    {


        $token = $request->user()->createToken('API Token Of ' . $request->user()->name)->plainTextToken;

 
        return redirect($request->input('nexturl'))->cookie('access_token',$token);
    }

    public function check($value)
    {
        if($value == "on")
        {
            return true;
        }
        if($value == null)
        {
            return false;
        }
        if($value == 'false')
        {
            return null;
        }
    }
}
