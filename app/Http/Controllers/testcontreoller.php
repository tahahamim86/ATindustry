<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class testcontreoller extends Controller
{public function test(Request $request){
  
      return Contact::create(['name' =>request('name'),
            'mail' =>request('mail'),
            'num' =>request('num'),
            'msg' =>request('msg')]
            
        );
        
        
}
}
