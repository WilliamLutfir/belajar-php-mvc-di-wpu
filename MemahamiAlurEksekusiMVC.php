<?php
<?php class App{
    protected $controller='home';
    protected $method='index';
    protected $params=[];
    public function __construct(){
        $url=$this->uraikanURL();
        if(is_null($url)){$url=['home','index'];}

        // Controller
        // Cek apakah ada file yg dimaksud di folder controllers.
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller=$url[0];
            unset($url[0]); // Menghapus elemen home di array pd url
        }
        class Controller{
    public function view($view,$data=[]){
        require_once '../app/views/' . $view . '.php';
    }
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
        class Home extends Controller{
    public function index(){ // Selalu buat method default yaitu index, utk menangani input dari user yg diluar dari method yg tersedia.
        $data['judul']='Beranda';
        $data['nama']=$this->model('model_Pengguna')->ambilPengguna();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
        $this->controller=new $this->controller;

        // Method
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method=$url[1];
                unset($url[1]);
            }
        }

        // Params
        if(!empty($url)){
            $this->params=array_values($url);
        }

        // Jlnkn controller & method, serta kirimkn params jika ada.
        call_user_func_array([$this->controller,$this->method],$this->params);
    }
    
    public function uraikanURL(){
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode('/',$url);
            return $url;
        }
    }
}
?>