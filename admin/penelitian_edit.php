<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../login.php');
    exit;
}

$penelitians = include '../data/penelitians.php';
$dosens = include '../data/dosens.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Penelitian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<h1 class="text-2xl font-bold mb-6">Kelola Data Penelitian</h1>
<a href="../admin.php"
   class="text-blue-600 inline-block mb-6">
   ← Kembali ke Admin
</a>

<?php foreach ($penelitians as $dosen_id => $list): ?>
    <div class="bg-white p-4 rounded shadow mb-6">
        <h2 class="text-lg font-bold mb-3">
            <?= $dosens[$dosen_id]['nama'] ?? 'Dosen Tidak Diketahui' ?>
        </h2>

        <?php foreach ($list as $index => $p): ?>
            <div class="border rounded p-3 mb-3 flex flex-col sm:flex-row sm:justify-between sm:items-start gap-3">
                <div>
                    <h3 class="font-semibold"><?= $p['judul'] ?></h3>
                    <p class="text-sm text-gray-600 mt-1"><?= $p['deskripsi'] ?></p>
                    <p class="text-xs text-gray-400 mt-1">Tahun <?= $p['tahun'] ?></p>
                </div>

                <a href="#"
                   class="text-blue-600 text-sm hover:underline">
                    Edit
                </a>
            </div>
        <?php endforeach; ?>

    </div>
<?php endforeach; ?>

</body>
</html>
