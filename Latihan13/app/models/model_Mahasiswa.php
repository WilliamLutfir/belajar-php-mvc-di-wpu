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
    public function tambahMahasiswa($data){
        $query="INSERT INTO mahasiswa VALUES('', :nama, :nim, :email, :jur)";
        $this->db->kueri($query);
        $this->db->bind("nama",htmlspecialchars($data["nama"]));
        $this->db->bind("nim",htmlspecialchars($data["nim"]) );
        $this->db->bind("email",htmlspecialchars($data["email"]));
        $this->db->bind("jur",htmlspecialchars($data["jur"]));

        $this->db->eksekusi();
        return $this->db->hitungBrs();
        // return 0;
    }
    public function hapusMahasiswa($id){
        $query="DELETE FROM mahasiswa WHERE id = :id";
        $this->db->kueri($query);
        $this->db->bind("id",htmlspecialchars($id));

        $this->db->eksekusi();
        return $this->db->hitungBrs();
    }
    public function ubahMahasiswa($data){
        $query="UPDATE mahasiswa SET nama = :nama, nim = :nim, email = :email, jur = :jur WHERE id = :id";
        $this->db->kueri($query);
        $this->db->bind("id",htmlspecialchars($data["id"]));
        $this->db->bind("nama",htmlspecialchars($data["nama"]));
        $this->db->bind("nim",htmlspecialchars($data["nim"]) );
        $this->db->bind("email",htmlspecialchars($data["email"]));
        $this->db->bind("jur",htmlspecialchars($data["jur"]));

        $this->db->eksekusi();
        return $this->db->hitungBrs();
    }
    public function cariMhs(){
        $katakunci=$_POST["katakunci"];
        $query="SELECT * FROM mahasiswa WHERE nama LIKE :katakunci OR nim LIKE :katakunci OR email LIKE :katakunci OR jur LIKE :katakunci ORDER BY nama ASC";
        $this->db->kueri($query);
        $this->db->bind("katakunci","%$katakunci%");
        return $this->db->hasilBanyak();
    }
}