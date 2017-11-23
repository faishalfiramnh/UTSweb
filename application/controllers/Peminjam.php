<?php 
/**
* 
*/
class Peminjam extends CI_Controller
{
	
	var $API="";
	 function __construct()
	{  parent::__construct();
	   $this->API="http://localhost/UTSServer/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
     }


      function index()
     {
     	$data['datapeminjam'] = json_decode($this->curl->simple_get($this->API.'/Peminjam'));
     	$this->load->view('Listpeminjam',$data);
     	$data['databuku'] = json_decode($this->curl->simple_get($this->API.'/Buku'));
     	$this->load->view('ListBuku',$data);
         $data['datapeminjaman'] = json_decode($this->curl->simple_get($this->API.'/Peminjaman'));
        $this->load->view('ListPeminjaman',$data);
    
     }
     function createPeminjam()
     {
        if(isset($_POST['submit'])){
            $data = array(
                'id_peminjam'       =>  $this->input->post('id_peminjam'),
                'nama'      =>  $this->input->post('nama'),
                'alamat'=>  $this->input->post('alamat'),
                'telpon'      =>  $this->input->post('telpon'));
            $insert =  $this->curl->simple_post($this->API.'/Peminjam', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasilPinjam','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasilPinjam','Insert Data Gagal');
            }
            redirect('Peminjam');
        }else{
            $this->load->view('tambahPeminjam');
        }
    }

    function editPeminjam()
    {
        if(isset($_POST['submit'])){
            $data = array(
               'id_peminjam'       =>  $this->input->post('id_peminjam'),
                'nama'      =>  $this->input->post('nama'),
                'alamat'=>  $this->input->post('alamat'),
                'telpon'      =>  $this->input->post('telpon'));
            $update =  $this->curl->simple_put($this->API.'/Peminjam', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Peminjam');
        }else{
            $params = array('id_peminjam'=>  $this->uri->segment(3));
            $data['datapeminjam'] = json_decode($this->curl->simple_get($this->API.'/Peminjam',$params));
            $this->load->view('editPeminjam',$data);
        }
    }
    
    
    function delete($id_peminjam)
    {
        if(empty($id_peminjam)){
            redirect('Peminjam');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/Peminjam', array('id_peminjam'=>$id_peminjam), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasilPinjam','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasilPinjam','Delete Data Gagal');
            }
            redirect('Peminjam');
        }
    }




}

 ?>