<?php
class Sepatu extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }
    
	public function index()
	{
		$this->load->view('FormInput');
	}

	public function cetak()
    {
        $this->form_validation->set_rules(
            'nama', 'nama pembeli', 'required|alpha_numeric_spaces|trim', [
                'required' => 'Nama Pembeli Harus Diisi!',
                'alpha_numeric_spaces' => 'Nama tidak boleh angka!'
            ]
            );
        
        $this->form_validation->set_rules(
            'nohp', 'nomor hp', 'required|numeric|trim', [
                'required' => 'Nomor HP Harus Diisi!',
                'numeric' => 'No HP Hanya Boleh diisi dengan Angka'
            ]
            );

        if ($this->form_validation->run() != true) {
            $this->load->view('FormInput');
        } else {
            $this->load->model('ModelSepatu');
		$data = [
				'nama' => $this->input->post('nama'),
				'nohp' => $this->input->post('nohp'),
				'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->ModelSepatu->Biaya($this->input->post('merk'))
            ];
		$this->load->view('FormOutput', $data);
	}
}
}