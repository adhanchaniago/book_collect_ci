<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<script>
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

</script>