<?php

namespace App\Http\Controllers;

use App\Jobs\sendMailJob;
use Illuminate\Http\Request;

class sendMailJobController extends Controller
{
    public function index(){
        $mailBody=[
            'title'=> "send mail through job",
            'description'=>"here is the descritpin of the mail ",
        ];

        dispatch(new sendMailJob($mailBody));
        return "the mail is send through job queue";
    }
}
