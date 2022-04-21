<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

public function getIndex(){

    return view("Pages.welcome");

}

public function getAbout(){
    $first ='Amit';
    $last = 'Shahapurkar';

    $fullname=$first. " ".$last;
    $email ='ashahapurkar123@gmail.com';
    $data=[];
    $data['email']=$email;
    $data['fullname']=$fullname;
    return view("Pages.about")->withData($data);

}

public function getContact(){

    return view("Pages.contact"); 

    
}


}