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
            Flasher::aturFlash("berhasil","ditambahkan","success",$_POST["nama"]);
            header("Location: " . BASEURL . "/mahasiswa");
        }else{
            Flasher::aturFlash("gagal","ditambahkan","danger",$_POST["nama"]);
            header("Location: " . BASEURL . "/mahasiswa");
        }
    }
    public function hapus($id,$nama){
        if($this->model("model_Mahasiswa")->hapusMahasiswa($id)>0){
            Flasher::aturFlash("berhasil","dihapus","success",$nama);
            header("Location: " . BASEURL . "/mahasiswa");
        }else{
            Flasher::aturFlash("gagal","dihapus","danger",$nama);
            header("Location: " . BASEURL . "/mahasiswa");
        }
    }
    
}