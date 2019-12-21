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
        $('#view-berita').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget);// Tombol dimana modal di tampilkan
            var modal          = $(this);
            var content;

            // Isi nilai pada field
            modal.find("#judul").text(div.data('judul'));
            modal.find('#image').attr("src", "<?php echo base_url();?>dist/image/berita/"+div.data('img'));

            $.ajax({
                type : "GET",
                url  : "<?php echo base_url();?>admin/content_berita/" + div.data('id'),
                success: function(data){
                    content = data;
                    modal.find("#isi").html(content);
                }
            });

        });
    });
</script>