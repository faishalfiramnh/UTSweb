<?php 
/**
* 
*/
class Peminjaman extends CI_Controller
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
     function createPeminjaman()
     {
        if(isset($_POST['submit'])){
            $data = array(
                'id_peminjaman'       =>  $this->input->post('id_peminjaman'),
                'id_peminjam'      =>  $this->input->post('id_peminjam'),
                'tanggal_pinjam'=>  $this->input->post('tanggal_pinjam'),
                'tanggal_kembali'      =>  $this->input->post('tanggal_kembali'),
                'id_buku'      =>  $this->input->post('id_buku'));
            $insert =  $this->curl->simple_post($this->API.'/Peminjaman', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('Peminjaman');
        }else{
            $this->load->view('tambahPeminjaman');
        }
    }

    function editPeminjaman()
    {
        if(isset($_POST['submit'])){
            $data = array(
               'id_peminjaman'       =>  $this->input->post('id_peminjaman'),
                'id_peminjam'      =>  $this->input->post('id_peminjam'),
                'tanggal_pinjam'=>  $this->input->post('tanggal_pinjam'),
                'tanggal_kembali'      =>  $this->input->post('tanggal_kembali'),
                'id_buku'      =>  $this->input->post('id_buku'));
            $update =  $this->curl->simple_put($this->API.'/Peminjaman', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasilPeminjaman','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasilPeminjaman','Update Data Gagal');
            }
            redirect('Peminjaman');
        }else{
            $params = array('id_peminjaman'=>  $this->uri->segment(3));
            $data['datapeminjaman'] = json_decode($this->curl->simple_get($this->API.'/Peminjaman',$params));
            $this->load->view('editPeminjaman',$data);
        }
    }
    
    
    function delete($id_peminjaman)
    {
        if(empty($id_peminjaman)){
            redirect('Peminjaman');
        }else{
         $delete =  $this->curl->simple_delete($this->API.'/Peminjaman', array('id_peminjaman'=>$id_peminjaman), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasilPeminjaman','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasilPeminjaman','Delete Data Gagal');
            }
            redirect('Peminjaman');
        }
    }




}

 ?>