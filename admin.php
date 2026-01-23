<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<h1 class="text-2xl font-bold mb-6">Admin Panel</h1>

<div class="space-y-4">
    <a href="admin/dosen_edit.php"
       class="block bg-white p-4 rounded shadow hover:bg-gray-50">
        ✏️ Kelola Data Dosen
    </a>

    <a href="admin/penelitian_edit.php"
       class="block bg-white p-4 rounded shadow hover:bg-gray-50">
        📚 Kelola Data Penelitian
    </a>

    <a href="logout.php" class="text-red-600">Logout</a>
</div>

</body>
</html>
