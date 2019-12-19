<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script>

    //Datemask dd/mm/yyyy
    $('#tgl_transfer').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    //Money Euro
    $('[data-mask]').inputmask();

    function caraDonasi(e) {
         var action = e.target.value;
         if (action === "dikirim"){
             document.getElementById("dikirim").style.display = "block";
             document.getElementById("dijemput").style.display = "none";
         }else if (action === "dijemput") {
             document.getElementById("dikirim").style.display = "none";
             document.getElementById("dijemput").style.display = "block";
         } else {
             document.getElementById("dikirim").style.display = "none";
             document.getElementById("dijemput").style.display = "none";
         }
    }

    //Simpan Barang
    $('#btn_submit').on('click',function(){
        var nama_donatur=$('#nama_donatur').val();
        var pekerjaan=$('#pekerjaan').val();
        var instansi=$('#instansi').val();
        var no_hp=$('#no_hp').val();
        var alamat_rumah=$('#alamat_rumah').val();
        var jumlah_buku=$('#jumlah_buku').val();
        var pengiriman=$('#pengiriman').val();
        var cara_donasi=$('#cara_donasi').val();
        var alamat_donatur=$('#alamat_donatur').val();
        var satu_kota=$('#satu_kota').val();
        var email=$('#email').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url();?>anggota/insert_donasi",
            dataType : "JSON",
            data : {nama_donatur:nama_donatur , pekerjaan:pekerjaan, instansi:instansi, no_hp:no_hp,
                alamat_rumah:alamat_rumah, jumlah_buku:jumlah_buku, pengiriman:pengiriman, cara_donasi:cara_donasi,
                alamat_donatur:alamat_donatur, satu_kota:satu_kota, email:email},
            success: function(data){
                toastr.success('Buku Sudah Berhasil Ditambahkan');
                console.log(data);
                $('#form_submit_invoice').trigger("reset");
            }
        });
        return false;
    });

    $(document).ready(function(){
        //Simpan Barang
        $('#form_submit_non_donasi').submit(function(event) {
            var nama_donatur=$('#nama_donatur').val();
            var pekerjaan=$('#pekerjaan').val();
            var instansi=$('#instansi').val();
            var no_hp=$('#no_hp').val();
            var alamat_rumah=$('#alamat_rumah').val();
            var terbilang=$('#terbilang').val();
            var email=$('#email').val();
            var pesan=$('#pesan').val();
            var tgl_transfer=$('#tgl_transfer').val();
            event.preventDefault();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url();?>anggota/insert_donasi_non_buku",
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    data : new FormData(this),
                    success: function(data){
                        toastr.success('Buku Sudah Berhasil Ditambahkan');
                        $('#form_submit_invoice').trigger("reset");
                    }
                });
        });
    })


</script>