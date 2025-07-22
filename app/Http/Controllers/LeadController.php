<?php

namespace App\Http\Controllers;

use App\Key;
use App\Leads;
use App\Mail\LeadDelivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function contact(Request $request){ 

         $google_captcha_check = 'https://www.google.com/recaptcha/api/siteverify';

         $data = file_get_contents($google_captcha_check.'?secret=6LeMRrsaAAAAAJ3St-6ruFcD31SR3yu4OW0V7VqP&response='.$request->google_token.'&remoteip='.$_SERVER['REMOTE_ADDR']);
         $d = json_decode($data);

         

         
         


        $data = $request->all();
        $lead = new Leads();
         $data['notes'] = '';
         $data['message'] = '-';
         if($d->success){  $request->merge(['google_token' => $d->score]); }else{  $request->merge(['google_token' => 'Captcha failed']); }
      
        if($data['type'] == "Partner registration"){
               foreach($data as $obj=>$value){
                   if($obj != "_token"){
                       $data['notes'] .= $obj.' - '.$value.'<br>';
                       $data['message'] .='';
                   }
               }
               
        }
        
        $lead->validate($data);
        $lead->fill($data);
        $lead->save();

        if(Key::get('admin-leads-email') !== 'admin-leads-email'){
            $to = explode(',', Key::get('admin-leads-email'));
        }else{
            $to = 'admin@kleankeepers.co.uk';
        }

        if($d->success){
              Mail::to($to)->bcc('akhil@spiderworks.in')
                  ->send(new LeadDelivery($request));
         }else{
          echo 'captcha error, exit'; exit;
          return redirect('error?lead_id=0');
         }



        if(!empty($lead)){
            return redirect('thank-you?lead_id='.$lead->id);
        }else{
            return redirect('error?lead_id='.$lead->id);
        }

    }
}
