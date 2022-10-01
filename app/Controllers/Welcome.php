<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Welcome extends Controller {

    public function index() {
        $session = session();
        echo "Welcome back, " . $session->get('name');
    }

}
