<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Welcome extends Controller {

    public function index() {
         $session = session();

        if (!$session->get('logged_in'))
            return redirect()->to('/login');
        return view('welcome');
    }

}
