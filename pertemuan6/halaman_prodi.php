<?php
require "functions.php";

?>

<h1>ini adalah halaman program studi</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (prodi() as $p) : ?>
        <tr>
            <td><?= $p["id"] ?></td>
            <td><?= $p["prodi"] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>