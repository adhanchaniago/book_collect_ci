<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<!-- Summernote -->
<script src="<?php base_url();?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script>
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask();

    $(document).ready(function(){
        //Simpan Barang
        $('#form_submit_berita').submit(function(event) {
            var judul=$('#judul').val();
            var tanggal=$('#datemask').val();
            var isi=$('#isi').val();
            var penulis=$('#penulis').val();
            event.preventDefault();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>admin/insert_berita",
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                data : new FormData(this),
                success: function(data){
                    toastr.success('Berita Sudah Berhasil Ditambahkan');
                    $('#form_submit_berita').trigger("reset");
                }
            });
        });
    })

    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
</script>