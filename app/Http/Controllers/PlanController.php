<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PlanController extends BaseController
{
    public function index($id) {
        // $id = generate_plan_id();

        $title = "Advising Plan " . $id;
        header('Location: /plan?='.urlencode($id));
        // return view('plan');
        echo $title;
    }

    public function generate_plan_id() {
        $length = 6;
        $result = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, $length);
        PlanController::index($result);
    }

}