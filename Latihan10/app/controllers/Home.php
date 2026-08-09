<?php class Home extends Controller{
    public function index(){ // Selalu buat method default yaitu index, utk menangani input dari user yg diluar dari method yg tersedia.
        $data['judul']='Beranda';
        $data['nama']=$this->model('model_Pengguna')->ambilPengguna();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }


}