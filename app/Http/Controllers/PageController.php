<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index() {
        return Inertia::render('Main/Home');
    }

    public function contact() {
        return Inertia::render('Main/Contact');
    }

    public function privacy_policy() {
        return Inertia::render('Main/PrivacyPolicy');
    }
}
