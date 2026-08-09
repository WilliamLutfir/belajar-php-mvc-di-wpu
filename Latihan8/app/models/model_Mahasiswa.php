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
    private $tabel="mahasiswa",
            $db;
    public function __construct(){
        $this->db=new Database;
    }
       
    public function ambilSemuaMhs(){
        // $this->stmt=$this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->db->kueri("SELECT * FROM " . $this->tabel);
        return $this->db->hasilBanyak();
    }
    public function ambilMhsDgnId($id){
        $this->db->kueri("SELECT * FROM " . $this->tabel . " WHERE id=:id");
                                                                   // data yg di binding, yg awalnya lgsg $id, skrg menggunakn :, utk menghindari sql injection
        $this->db->bind("id",$id);
        return $this->db->hasilTunggal();
    }
}