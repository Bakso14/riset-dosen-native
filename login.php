<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // LOGIN SEDERHANA (BISA DIGANTI NANTI)
    if ($username === 'admin' && $password === '123456') {
        $_SESSION['login'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $error = 'Username atau password salah';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<form method="POST" class="bg-white p-6 rounded shadow w-80">
    <h2 class="text-xl font-bold mb-4 text-center">Login Admin</h2>

    <?php if ($error): ?>
        <p class="text-red-500 text-sm mb-3"><?= $error ?></p>
    <?php endif; ?>

    <input type="text" name="username" placeholder="Username"
           class="w-full mb-3 p-2 border rounded" required>

    <input type="password" name="password" placeholder="Password"
           class="w-full mb-4 p-2 border rounded" required>

    <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
        Login
    </button>
</form>

</body>
</html>
