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
    public function getidubah(){
        echo json_encode($this->model("model_Mahasiswa")->ambilMhsDgnId($_POST["id"]));
    }
    public function ubah(){
        if($this->model("model_Mahasiswa")->ubahMahasiswa($_POST)>0){
            Flasher::aturFlash("berhasil","diubah","success",$_POST["namalama"]);
            header("Location: " . BASEURL . "/mahasiswa");
        }else{
            Flasher::aturFlash("gagal","diubah","danger",$_POST["namalama"]);
            header("Location: " . BASEURL . "/mahasiswa");
        }
    }
    public function cari(){
        $data["katakunci"]=$_POST["katakunci"];
        $data['judul']='Daftar Mahasiswa';
        $data['mhs']=$this->model('model_Mahasiswa')->cariMhs();

        $this->view('templates/header',$data);
        $this->view('mahasiswa/index',$data);
        $this->view('templates/footer');
    }
    
}