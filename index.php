<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nextosious.studio.id</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dataTables.dataTables.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <?php include "includes/navbar.php" ?>

    <!-- Main Content -->
    <div class="container mt-3">
        <?php include "konten.php" ?>
    </div>

    <!-- Footer -->
    <footer class="fixed-bottom bg-dark text-white text-center py-3 mt-5">
        Pemrograman Web 1 @ <?= date("Y") ?>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        new DataTable('#example');
    </script>
</body>
</html>
