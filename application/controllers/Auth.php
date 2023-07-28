<?php

class Auth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
{
    $this->load->model('AuthModel');
    $this->load->library('form_validation');

    $rules = $this->AuthModel->rules();
    $this->form_validation->set_rules($rules);

    if ($this->form_validation->run() == FALSE) {
        $data['error_message'] = validation_errors(); // Store the validation errors in $data array
        $this->load->view('login', $data); // Pass the $data array to the view
    } else {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->AuthModel->login($username, $password)) {
            redirect("home");
        } else {
            $data['error_message'] = 'Login Gagal, pastikan username dan password benar!';
            $this->load->view('login', $data); // Pass the $data array to the view
        }
    }
}

	public function logout()
	{
		$this->load->model('AuthModel');
		$this->AuthModel->logout();
		redirect(site_url());
	}
}
