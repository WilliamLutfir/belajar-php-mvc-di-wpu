<?php class model_Mahasiswa{
    // private $mhs=[
    //     [
    //         "nama"=>"William",
    //         "nim"=>"0701202183",
    //         "email"=>"williamlutfi06@gmail.com",
    //         "jur"=>"Ilmu Komputer"
    //     ],
    //     [
    //         "nama"=>"Lutfi",
    //         "nim"=>"0701202183",
    //         "email"=>"williamlutfi06@gmail.com",
    //         "jur"=>"Ilmu Komputer"
    //     ],
    //     [
    //         "nama"=>"Rahman",
    //         "nim"=>"0701202183",
    //         "email"=>"williamlutfi06@gmail.com",
    //         "jur"=>"Ilmu Komputer"
    //     ],
    //     [
    //         "nama"=>"Harjo",
    //         "nim"=>"0701202183",
    //         "email"=>"williamlutfi06@gmail.com",
    //         "jur"=>"Ilmu Komputer"
    //     ]
    // ];
          // database handler
    private $dbh,$stmt;
               // statement utk menyimpan query
    public function __construct(){
        // data source name
        $dsn='mysql:host=localhost;dbname=phpmvc';
        try{
            $this->dbh=new PDO($dsn,'root','');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function ambilSemuaMhs(){
        $this->stmt=$this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}