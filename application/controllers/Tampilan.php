<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilan extends CI_Controller
{
    public function index()
    {
        $this->load->view('tampilan/index');
    }
}
