// Agar skrip ini dijlnkn ketika halaman ini sudah siap
$(function(){
    $(".tampilknModalTambah").on("click",function(){
        $("#judulModal").html("Tambah Mahasiswa");
        $("button[type=submit]").html("Tambah");
        $("form").attr("action","http://localhost/phpmvc/Latihan13/public/mahasiswa/tambah");

        $("#id").val("");
        $("#namalama").val("");
        $("#nama").val("");
        $("#nim").val("");
        $("#email").val("");
        $("#jur").val("");
    });
    $(".tampilknModalUbah").on("click",function(){
        $("#judulModal").html("Ubah Data Mahasiswa");
        $("button[type=submit]").html("Ubah");
        $("form").attr("action","http://localhost/phpmvc/Latihan13/public/mahasiswa/ubah");

        const id=$(this).data("idmhs");
        $.ajax({
            url:"http://localhost/phpmvc/Latihan13/public/mahasiswa/getidubah",
            data:{id:id},
            method:"post",
            dataType:"json",
            success:function(data){
                $("#id").val(data.id);
                $("#namalama").val(data.nama);
                $("#nama").val(data.nama);
                $("#nim").val(data.nim);
                $("#email").val(data.email);
                $("#jur").val(data.jur);
            }
        });
    });
    katakunci.focus();
    document.panjang = katakunci.value.length;
    katakunci.setSelectionRange(document.panjang,document.panjang);

    katakunci.addEventListener("input",()=>{
        cari.click(); 
    });
});