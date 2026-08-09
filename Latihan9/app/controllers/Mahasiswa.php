<?php class Mahasiswa extends Controller{
    public function index(){
        $data['judul']='Daftar Mahasiswa';
        $data['mhs']=$this->model('model_Mahasiswa')->ambilSemuaMhs();

        $this->view('templates/header',$data);
        $this->view('mahasiswa/index',$data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul']='Detail Mahasiswa';
        $data['mhs']=$this->model('model_Mahasiswa')->ambilMhsDgnId($id);

        $this->view('templates/header',$data);
        $this->view('mahasiswa/detail',$data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model("model_Mahasiswa")->tambahMahasiswa($_POST)>0){
            header("Location: " . BASEURL . "/mahasiswa");
        }
    }
}