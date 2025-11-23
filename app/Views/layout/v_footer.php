<footer class="main-footer">
    <p style="height: 1rem">hi</p>
    </footer>
    
</div>
<script src="<?= base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> <script src="<?= base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script src="<?= base_url(); ?>/assets/plugins/moment/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="<?= base_url(); ?>/assets/dist/js/adminlte.min.js"></script>

<script>
    $(document).ready(function() {
        $("#myTableMahasiswa").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["excel", "pdf"]
        }) .buttons().container().appendTo('#myTableMahasiswa_wrapper .col-md-6:eq(0)');

        $(document).on('click', '#idMahasiswa', function() {
            var id = $(this).attr('vid');
            $.ajax({
                url: "<?php echo site_url('mahasiswa/vEditMahasiswa'); ?>",
                method: "POST",
                data: { id: id },
                async: true,
                dataType: 'json',
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {
                        $('#IdMahasiswa').val(data[i].id);
                        $('#IdNpm').val(data[i].npm);
                        $('#IdNama').val(data[i].nama);
                        $('#IdJurusan').val(data[i].jurusan);
                        $('#IdUkm').val(data[i].ukm);
                    }
                }
            });
            return false;
        });

    });
</script>
</body>
</html>