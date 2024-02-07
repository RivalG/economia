<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('welcome_message');
        $this->load->view('footer');
    }

    public function ciudad1()
    {
        // Renderizar una página web
        $this->load->view('header');
        $this->load->view('ciudad1');
        $this->load->view('footer');
    }

    public function barrio1()
    {
        // Renderizar una página web
        $this->load->view('header');
        $this->load->view('barrio1');
        $this->load->view('footer');
    }

    public function barrio2()
    {
        // Renderizar una página web
        $this->load->view('header');
        $this->load->view('barrio2');
        $this->load->view('footer');
    }

    public function informacion()
    {
        // Renderizar una página web
        $this->load->view('header');
        $this->load->view('informacion');
        $this->load->view('footer');
    }

    public function galeria()
    {
        // Renderizar una página web
        $this->load->view('header');
        $this->load->view('galeria');
        $this->load->view('footer');
    }

    public function contacto()
    {
        // Renderizar una página web
        $this->load->view('header');
        $this->load->view('contacto');
        $this->load->view('footer');
    }
}
