<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        //Membuat variabel pada Controller dan mengirim kepada View 

        //Menggunakan With menggunakan Array jika datanya banyak
        //$data = [
            //'nama' => 'Doraemon',
            //'pekerjaan' => 'Developer',
        //];

        // return view('home')->with($data);

        // Menggunakan compact bila data yang dikirmkan sedikit
        $nama = "Nobita";
        $pekerjaan = "Student";
        return view('home', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        //$data = [
            //'NoWhatsApp' => '082170640976',
            //'email' => 'faizsuanda827@gmail.com',
        //];
        //return view('contact')->with($data);

        $whatsapp = "082170640975";
        $email = "faizsuanda27@gmail.com";
        return view('contact', compact('whatsapp','email'));
    }
}
