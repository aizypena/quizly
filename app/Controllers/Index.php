<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index()
    {
        $data['title'] = 'Quizly - Home';

        return view('includes/header', $data)
        .view('includes/nav')
        .view('index')
        .view('includes/bottom');
    }

    public function login()
    {
        $data['title'] = 'Quizly - Login';

        return view('includes/header', $data)
        .view('includes/nav2')
        .view('login')
        .view('includes/bottom');
    }

    public function signup() {
        $data['title'] = 'Quizly - Sign Up';

        return view('includes/header', $data)
        .view('includes/nav2')
        .view('signup')
        .view('includes/bottom');
    }

    public function passwordRecovery() {
        $data['title'] = 'Quizly - Password Recovery';

        return view('includes/header', $data)
        .view('password-recovery')
        .view('includes/bottom');
    }
}