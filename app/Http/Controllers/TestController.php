<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index()
    {

        $value = session('name');
        return view('welcome', compact('value'));
        // $value = session()->all();
        // echo "<pre>";
        // print_r($value);
        // echo "<pre>";

        // $value = session()->only(['name', 'email']);

        // $value = session()->get('name');
        // echo  $value;

        // if(session()->has('name')){
        //     $value = session()->get('name');
        //     echo  $value;
        // }
        // else{
        //     echo "Session name not found";
        // }
    }

    public function storeSession() {
        session([
            'name' => 'Bisma Doe',
            'email' => 'bisma@example.com',
            'phone' => '081234567890',
            'address' => 'Jln. Raya Lengkong, Kel. Pondok Indah, Kec. Seminyak, Kabupaten Bandung, Jawa Barat'
        ]);

        // it will decrease the number of session value count by 1 
        // session()->increment('count');
        // session()->decrement('count');
        // session()->put('class', 'laravel');

        // it regenerates the session every time
        // session()->regenerate();

        session()->flash('status', 'Session has been saved');
        return redirect('/');
    }

    public function deleteSession() {
        // session()->forget(['name', 'class']);

        // session()->flush();             // remove all session data

        session()->invalidate();
        return redirect('/');
    }
}
