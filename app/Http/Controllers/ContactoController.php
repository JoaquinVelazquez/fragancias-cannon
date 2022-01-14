<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactReceived;

class ContactoController extends Controller
{
   

    public function __construct()
    {
       
    }

    public function contacto()
    {
        return view('contacto');
    }   

	public function attributes()
	{
        return [
            'name' => 'nombre',
            'mail' => 'email',
            'message' => 'mensaje'
              ];
	}

  
    public function enviarEmail(Request $request)
    {
    	
        $validatedData = $request->validate([
        'name' => 'string|required',
        'mail' => 'email|required',
        'message' => 'string|required',
        
        ], [], $this->attributes());
        
    	
		 Mail::to("aguus.spinelli@gmail.com")->send(new ContactReceived($request->name, $request->message, $request->mail));
	}

    public function mail()
    {
        return view('mails.contacto_recibido',['name_' => "John Doe",
                                                'message_' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet."
                                              ]);
    }

}
?>