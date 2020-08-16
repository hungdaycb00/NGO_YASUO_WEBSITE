<?php


namespace App\Http\Controllers;


class DonateController
{
    public function showDonate(){
        return view('pages.donate');
    }
    public function transfer(){
        return view('pages.transfer');
    }
    public function creditCard(){
        return view('pages.donate_credit_card');
    }
}
