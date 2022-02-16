<?php

namespace App\Http\Controllers;
use App\Models\ShortUrl;
use App\Http\Requests\ShortRequest;


class ShortUrlController extends Controller
{
    public function shorturl(ShortRequest $request)
    {
if($request->URL)
{
	$new_url = ShortUrl::create([
		'Title'=>$request->Title,
		'URL'=> $request->URL
	]);


 if ($new_url){
 	$short_url = base_convert($new_url->id,10, 36);

 	$new_url->update([
'ShortURL' => $short_url
 	]);
 	return redirect()->back()->with('success_message','Short Url created successfully. Chech out this short URL :' . url($short_url));

 	
 }


}
return back();
}


public function show($code)
{
$short_url= ShortUrl::where('ShortURL', $code)->first();
if($short_url)
{
	return redirect()->to(url($short_url->URL));
}
return redirect()->to(url('/'));
}




}
