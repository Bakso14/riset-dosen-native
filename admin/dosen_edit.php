<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../login.php');
    exit;
}

$dosens = include '../data/dosens.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">

<h2 class="text-xl font-bold mb-4">Data Dosen</h2>
<a href="../admin.php" class="text-blue-600 inline-block mb-6">← Kembali</a>

<?php foreach ($dosens as $id => $d): ?>
    <div class="border p-4 mb-3 rounded">
        <strong><?= $d['nama'] ?></strong><br>
        <?= $d['bidang'] ?><br>
        <a href="#" class="text-blue-600 text-sm">Edit (lanjut)</a>
    </div>
<?php endforeach; ?>

</body>
</html>
