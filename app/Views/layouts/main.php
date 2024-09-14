<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/sb-admin-2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/all.min.css') ?>">
    <!-- Agrega otras hojas de estilo necesarias aquí -->
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?= $this->include('layouts/sidebar') ?>
        <!-- Fin Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?= $this->include('layouts/topbar') ?>
                <!-- Fin Topbar -->

                <!-- Contenido dinamico -->
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?= $this->include('layouts/footer') ?>
            <!-- Fin Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <script src="<?= base_url('public/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/js/sb-admin-2.min.js') ?>"></script>
    <!-- Agrega otros scripts necesarios aquí -->
</body>
</html>
