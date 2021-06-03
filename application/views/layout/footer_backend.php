       


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?= base_url();?>asset/backend/plugins/jquery-1.10.2.js"></script>
    <script src="<?= base_url();?>asset/backend/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url();?>asset/backend/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url();?>asset/backend/plugins/pace/pace.js"></script>
    <script src="<?= base_url();?>asset/backend/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?= base_url();?>asset/backend/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?= base_url();?>asset/backend/plugins/morris/morris.js"></script> 
    <script src="<?= base_url();?>asset/backend/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?= base_url();?>asset/backend/plugins/dataTables/dataTables.bootstrap.js"></script>

    <script>
        $(document).ready(function () {
            $('#dataTables-produk').dataTable();
        });
    </script>
</body>

</html>