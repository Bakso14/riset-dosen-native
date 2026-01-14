<?php
$dosens = require 'data/dosens.php';
$penelitian = require 'data/penelitians.php';

$id = $_GET['id'] ?? null;

if (!$id || !isset($dosens[$id])) {
    die('Dosen tidak ditemukan');
}

$nama_dosen = $dosens[$id]['nama'];
$penelitians = $penelitian[$id] ?? [];

include 'views/header.html';
include 'views/dosen.html';
include 'views/footer.html';
