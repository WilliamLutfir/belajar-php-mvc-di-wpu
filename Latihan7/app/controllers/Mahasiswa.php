<?php class Mahasiswa extends Controller{
    public function index(){
        $data['judul']='Daftar Mahasiswa';
        $data['mhs']=$this->model('model_Mahasiswa')->ambilSemuaMhs();

        $this->view('templates/header',$data);
        $this->view('mahasiswa/index',$data);
        $this->view('templates/footer');
    }
}