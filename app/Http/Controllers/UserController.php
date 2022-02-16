<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductssInsert;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Http\Controllers\Vonage\SMS\Messages\Basic;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use DB;

class UserController extends Controller {
       public function index() 
       {
         
   return view('welcome');
       }

  public function client_message() 
       {
     
    $data = array(
       'place' =>$request->place,
       'checkindate' => $request->checkindate,
          'checkoutdate' => $request->checkoutdate,
          'email' => $request->email,
           'name' => $request->name,
           'lastname' => $request->lastname,
'phonenumber' => $request->phonenumber,
'subject' => $request->subject
        );

$basic = new \Vonage\Client\Credentials\Basic("b2f8db08", "byoivEbBX60vJjb5");
$client = new \Vonage\Client($basic);

$response = $client->sms()->send(
    new \Vonage\SMS\Message\SMS("918943736153","d", 'A text message sent using the Nexmo SMS API')
);

$message = $response->current();

if ($message->getStatus() == 0) {
    echo "The message was sent successfully\n";
} else {
    echo "The message failed with status: " . $message->getStatus() . "\n";
}



       }
public function client_email(Request $request)
   {
      
        $data = array(
       'place' =>$request->place,
       'checkindate' => $request->checkindate,
          'checkoutdate' => $request->checkoutdate,
          'guests' => $request->guests,
           'room' => $request->room
           
        );



        $data1 = array(
          'email' => $request->email
        );

 Mail::to('monima@techfosolutions.com')->send(new SendMail($data));
          echo "<script>";
echo " alert('Email Sent Successfully.');      
         window.history.back();
      </script>";

    
  }
  



public function book()
{
 $data = array(
       'place' =>$request->place,
       'checkindate' => $request->checkindate,
          'checkoutdate' => $request->checkoutdate,
          'guests' => $request->guests,
           'room' => $request->room
           
        );

  
return view('booking')->with($data);
}


public function homebooking()
{
 $data = array(
       'place' =>$request->place,
        );

  
return view('homebooking')->with($data);
}
 






}