<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url();?>plugins/sweetalert2/sweetalert2.all.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(function () {
        $("#example1").DataTable();
    });

    $('#delete_kontak').click(function(e) {
        swal.fire({
            title: 'Are you sure?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Submit',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then(function(result){
            if (result.value) {
                var id=$('#delete_kontak').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url();?>admin/kontak/delete",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                        window.location.reload(false);
                    }
                });
            } else if (result.dismiss === 'cancel') {
                swal.fire(
                    'Cancelled',
                    '',
                    'error'
                )
            }
        });
    });
</script>