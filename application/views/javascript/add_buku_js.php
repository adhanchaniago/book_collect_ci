<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>

    $(function () {
        $("#example1").DataTable();
    });

    //Simpan Barang
    $(document).ready(function(){
        $('#form_submit_buku').submit(function(event) {
            var kode_buku=$('#kode_buku').val();
            var jenis_buku=$('#jenis_buku').val();
            var judul_buku=$('#judul_buku').val();
            var jumlah_buku=$('#jumlah_buku').val();
            var pengarang=$('#pengarang').val();
            var penerbit=$('#penerbit').val();
            var tahun_terbit=$('#tahun_terbit').val();
            var lokasi_buku=$('#lokasi_buku').val();
            var deskripsi=$('#deskripsi').val();
            event.preventDefault();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>admin/insert_buku",
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                data : new FormData(this),
                success: function(data){
                    toastr.success('Buku Sudah Berhasil Ditambahkan');
                    console.log(data);
                    $('#form_submit_buku').trigger("reset");
                }
            });
            return false;
        });
    });



    $(document).ready(function() {
        $('#edit-buku').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#kode_buku').val(div.data('kode'));
            modal.find('#id_buku').val(div.data('id'));
            modal.find('#jenis_buku').val(div.data('jenis'));
            modal.find('#judul_buku').val(div.data('judul'));
            modal.find('#jumlah_buku').val(div.data('jumlah'));
            modal.find('#pengarang').val(div.data('pengarang'));
            modal.find('#penerbit').val(div.data('penerbit'));
            modal.find('#tahun_terbit').val(div.data('tahun'));
            modal.find('#lokasi_buku').val(div.data('lokasi'));
            modal.find('#deskripsi').val(div.data('desc'));
        });

        //Simpan Barang
        $('#form_submit_edit_buku').submit(function(event) {
            var kode_buku=$('#kode_buku').val();
            var id=$('#id_buku').val();
            var jenis_buku=$('#jenis_buku').val();
            var judul_buku=$('#judul_buku').val();
            var jumlah_buku=$('#jumlah_buku').val();
            var pengarang=$('#pengarang').val();
            var penerbit=$('#penerbit').val();
            var tahun_terbit=$('#tahun_terbit').val();
            var lokasi_buku=$('#lokasi_buku').val();
            var deskripsi=$('#deskripsi').val();
            event.preventDefault();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>admin/update_buku",
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                data : new FormData(this),
                success: function(data){
                    toastr.success('Buku Sudah Berhasil Di Update');
                    console.log(data);
                    $('#form_submit_edit_buku').trigger("reset");
                    window.location.reload(false);
                }
            });
            return false;
        });



    });

</script>