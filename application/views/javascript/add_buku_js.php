<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>

    $(function () {
        $("#example1").DataTable();
    });

    //Simpan Barang
    $('#btn_submit').on('click',function(){
        var kode_buku=$('#kode_buku').val();
        var jenis_buku=$('#jenis_buku').val();
        var judul_buku=$('#judul_buku').val();
        var jumlah_buku=$('#jumlah_buku').val();
        var pengarang=$('#pengarang').val();
        var penerbit=$('#penerbit').val();
        var tahun_terbit=$('#tahun_terbit').val();
        var lokasi_buku=$('#lokasi_buku').val();
        var deskripsi=$('#deskripsi').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url();?>admin/insert_buku",
            dataType : "JSON",
            data : {kode_buku:kode_buku , jenis_buku:jenis_buku, judul_buku:judul_buku, jumlah_buku:jumlah_buku,
                pengarang:pengarang, penerbit:penerbit, lokasi_buku:lokasi_buku, tahun_terbit:tahun_terbit, deskripsi:deskripsi},
            success: function(data){
                toastr.success('Buku Sudah Berhasil Ditambahkan');
                console.log(data);
                $('#form_submit_invoice').trigger("reset");
            }
        });
        return false;
    });
</script>