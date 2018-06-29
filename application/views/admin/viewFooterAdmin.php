    <script src="<?= base_url('asset_admin/plugins/jquery/jquery.min.js') ?>" rel="stylesheet"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('asset_admin/plugins/bootstrap/js/bootstrap.js') ?>" rel="stylesheet"></script>
    <!-- Data Tables -->
    <script src="<?= base_url('asset_admin/js/jquery.dataTables.min.js') ?>" rel="stylesheet"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url('asset_admin/plugins/jquery-slimscroll/jquery.slimscroll.js') ?>" rel="stylesheet"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('asset_admin/plugins/node-waves/waves.js') ?>" rel="stylesheet"></script>
    <!-- Custom Js -->
    <script src="<?= base_url('asset_admin/js/admin.js') ?>" rel="stylesheet"></script>

    <?php
    if ($this->uri->segment(1) == 'Pirt') {
        foreach ($admin_form_js as $key => $val) { ?>
            <script src="<?php echo $val ?>"></script>
    <?php }
    } ?>
    <?php
    if ($this->uri->segment(1) == 'TentangKami') { ?>
        <script src="<?= base_url('asset_admin/tinymce/js/tinymce/tinymce.dev.js') ?>"></script>
        <script src="<?= base_url('asset_admin/js/script.js') ?>"></script>
    <?php } ?>
    <!-- General Custom Js -->
    <script src="<?= base_url('asset_admin/js/general.js') ?>" rel="stylesheet"></script>
    <!-- Demo Js -->
    <script src="<?= base_url('asset_admin/js/demo.js') ?>" rel="stylesheet"></script>
</body>
</html>