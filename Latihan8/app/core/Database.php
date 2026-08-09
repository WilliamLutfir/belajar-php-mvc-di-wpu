<?php class Database{
          // database handler
    private $dbh,$stmt;
               // statement utk menyimpan query
    public function __construct(){
        // data source name
        $dsn="mysql:host=".DB_HOST.";dbname=".DB_NAME;
        $option=[
            PDO::ATTR_PERSISTENT=>true,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ];
        try{                                   // optimasi koneksi ke database
            $this->dbh=new PDO($dsn,DB_USER,DB_PW,$option);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function kueri($query){
        $this->stmt=$this->dbh->prepare($query);
    }            // siapa tau pd query ada WHERE, VALUE, SET
    public function bind($param,$value,$type=null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type=PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type=PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type=PDO::PARAM_NULL;
                    break;
                default:
                    $type=PDO::PARAM_STR;
            }
        }
                  // Knp harus dibind? agar terhindar dari sql injection
        $this->stmt->bindValue($param,$value,$type);
    }
    public function eksekusi(){
        $this->stmt->execute();
    }
    public function hasilBanyak(){
        $this->eksekusi();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function hasilTunggal(){
        $this->eksekusi();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
                         // fetch tunggal
    }
}