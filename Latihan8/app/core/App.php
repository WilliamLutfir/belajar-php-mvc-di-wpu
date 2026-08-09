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
        require_once '../app/controllers/' . $this->controller . '.php';
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
                           // objek/class mana yg dipilih      kirim parameter ke method yg dipilih tdi
        call_user_func_array([$this->controller,$this->method],$this->params);
                                             // method mana yg akan dijlnkn pd objek/class yg sdh dipilih tdi
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