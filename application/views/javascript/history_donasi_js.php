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
        $('#show-bukti').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#bukti_transaksi').attr("src", "<?php echo base_url();?>dist/image/bukti_transfer/"+div.data('bukti'));
        });
    });
</script>