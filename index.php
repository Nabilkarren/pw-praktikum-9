<?php
//memanggil file functions.php
require 'fungsi.php';

//memanggil function query pengambilan data pada table mahasiswa
//lalu ditampung kedalam variable mahasiswa
$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.21.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <title>Data Karyawan</title>
</head>

<body>

    <div class="container mx-auto">
        <div class="row">
            <div class="col">
                <div class="navbar mb-2 shadow-lg bg-neutral text-neutral-content rounded-box">
                    <div class="flex-1 px-2 mx-2">
                        <span class="text-lg font-bold">
                            Database Karyawan
                        </span>
                    </div>
                    <div class="flex-none">
                        <button class="btn btn-outline" style="margin: 10px;">
                            <a href="karyawan.php">Tambah Data</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto" style="margin: 50px;">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($karyawan as $index => $item) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $item["name"] ?></td>
                        <td><?= $item["email"] ?></td>
                        <td><?= $item["address"] ?></td>
                        <td><?= $item["gender"] ?></td>
                        <td><?= $item["position"] ?></td>
                        <td><?= $item["status"] ?></td>
                        <td><a href="delete.php?id=<?= $item["id"]; ?>" class="btn btn-primary">Hapus</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>

</body>

</html>