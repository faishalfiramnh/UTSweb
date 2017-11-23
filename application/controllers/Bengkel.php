<?php 
Class Bengkel Extends CI_Controller
{

	var $API="";
	 function __construct()
	{  parent::__construct();
	   $this->API="http://localhost/Bengkel/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
     }

     function index()
     {
     	$data['databengkel'] = json_decode($this->curl->simple_get($this->API.'/Bengkel'));
        $data['dataoli'] = json_decode($this->curl->simple_get($this->API.'/Oli'));
     	$this->load->view('listBengkel',$data);
        $this->load->view('listOli',$data);
     }
     function createBeng()
     {
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'nama_motor'      =>  $this->input->post('nama_motor'),
                'jenis_kerusakan'=>  $this->input->post('jenis_kerusakan'),
                'harga'      =>  $this->input->post('harga'),
                'jenis_motor'      =>  $this->input->post('jenis_motor'));
            $insert =  $this->curl->simple_post($this->API.'/Bengkel', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('Bengkel');
        }else{
            $this->load->view('CreateBengView');
        }
    }
    function edit()
    {
        if(isset($_POST['submit'])){
            $data = array(
               'id'       =>  $this->input->post('id'),
                'nama_motor'      =>  $this->input->post('nama_motor'),
                'jenis_kerusakan'=>  $this->input->post('jenis_kerusakan'),
                'harga'      =>  $this->input->post('harga'),
                'jenis_motor'      =>  $this->input->post('jenis_motor'));
            $update =  $this->curl->simple_put($this->API.'/Bengkel', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Bengkel');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['databengkel'] = json_decode($this->curl->simple_get($this->API.'/Bengkel',$params));
            $this->load->view('EditBengView',$data);
        }
    }
    
    // delete data kontak
    function delete($id)
    {
        if(empty($id)){
            redirect('Bengkel');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/Bengkel', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Bengkel');
        }
    }



}
 ?>
