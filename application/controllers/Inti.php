<?php
// Inti Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Inti extends MainController {
  // Inti Controller Construct
  public function __construct() {
    // Parent Construct
    parent::__construct();
    // Model
    // $this->load->model('inti_model', 'intimdl');
  }

  public function index() {
    // Main Controller u Tampilan Inti
    if (!permissible('inti', 'is_view')) {
      blokir();
    }
    // File
    $this->data['title'] = 'Panel Inti';
    $this->data['sub_page'] = 'inti/index';
    $this->data['main_menu'] = 'inti';
    $this->load->view('layout/layout', $this->data);
  }

  public function insert() {
    if (!permissible('inti', 'is_add')) {
      blokir();
    }
    // File
    $this->data['title'] = 'Input Pertanyaan';
    $this->data['sub_page'] = 'inti/insert';
    $this->data['main_menu'] = 'inti';
    $this->load->view('layout/layout', $this->data);
  }

  public function detail($id) {
    // Main Controller u Tampilan Detail Inti
    if (!permissible('inti', 'is_view')) {
      blokir();
    }
    // Hasil
    // $this->data['result'] = $this->intimdl->getDetail($id);
    // File
    $this->data['title'] = 'Detail Inti';
    $this->data['sub_page'] = 'inti/detail';
    $this->data['main_menu'] = 'inti';
    $this->load->view('layout/layout', $this->data);
  }

  public function publish() {
    // Publish Data Inti
    if (!permissible('inti', 'is_add')) {
      blokir();
    }
    // Input
    $inputs = $this->input->post();
    // Hasil
    // $result = $this->intimdl->publishinti($inputs);
    $result = true;
    // Define Variable
    $status = $result ? 'success' : 'error';
    $message = $result ? 'Berhasil !' : 'Gagal !';
    alerta($status, $message);
    // Kembali
    redirect(base_url('inti'));
  }
}