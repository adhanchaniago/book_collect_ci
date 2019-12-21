<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(function () {
        $("#example1").DataTable();
    });

    $(document).ready(function() {
        // Untuk sunting
        $('#show-bukti').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#bukti_transaksi').attr("src", "<?php echo base_url();?>dist/image/bukti_transfer/"+div.data('bukti'));
        });

        $('#edit-progres').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget);// Tombol dimana modal di tampilkan
            var modal          = $(this);

            // Isi nilai pada field
            modal.find("#edit_progres option[value='"+ div.data('progres') +"']").attr("selected", true);
            modal.find("#id_donasi").attr("value", div.data('id'));
        });

        //Change Progres Non Buku
        $('#btn_submit_progres').on('click',function(){
            var id_donasi=$('#id_donasi').val();
            var edit_progres=$('#edit_progres').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>admin/non_buku/change_progres",
                dataType : "JSON",
                data : {id_donasi:id_donasi , progres:edit_progres},
                success: function(data){
                    console.log(data);
                    window.location.reload(false);
                }
            });
            return false;
        });

        //Simpan Barang
        $('#btn_submit_progres_buku').on('click',function(){
            var id_donasi=$('#id_donasi').val();
            var edit_progres=$('#edit_progres').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>admin/buku/change_progres",
                dataType : "JSON",
                data : {id_donasi:id_donasi , progres:edit_progres},
                success: function(data){
                    console.log(data);
                    window.location.reload(false);
                }
            });
            return false;
        });

    });
</script>
<br>