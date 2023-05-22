<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InfoMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public static $corsi = 
    [
        ['name' => 'Functional_Training', 'img' => 'https://images.unsplash.com/photo-1603233720024-bebea0128645?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80' ],
        ['name' => 'Crossfit', 'img' => 'https://images.unsplash.com/photo-1599058917212-d750089bc07e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80'],
        ['name' => 'Pilates', 'img' => 'https://images.unsplash.com/photo-1599447332412-6bc6830c815a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1091&q=80']
    ];


    public function homepage () {        
        return view('home');
    }

    public function corsidisponibili () {        
        return view('courses', ['corsi' => self::$corsi]);
    }

    public function contatti () {
        return view('contacts');
    }

    public function dettagliocorso ($refcorso) {

        foreach(self::$corsi as $corsospec)
        {
            if ($refcorso == $corsospec['name'])
            {
                return view('coursedetails', ['corso' => $corsospec]);
            }
        }
            abort(404);

     }
     
    public function send (Request $info) {

        $info->validate ([
                            "firstname" => "required|string",
                            "secondname" => "required|string",
                            "email" => "required|email",
                            "phonenumber" => "required",
                ]);

        $data = [
                    "name" => $info->firstname,
                    "surname" => $info->secondname,
                    "number" => $info->phonenumber,
                    "email" => $info->email,
        ];
        // dd($data);

        Mail::to($info->input('email'))->send(new InfoMail($data));
                
    }
}
