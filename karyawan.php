<?php
require 'fungsi.php';

if (isset($_POST["submit"])) {

    if (tambahTabel($_POST) > 0) {
        echo "berhasil";
        header("location: index.php");
    } else {
        echo "gagal!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.21.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data</title>
</head>

<body>

    <div class="p-2 w-2/12 card bg-base-200 mx-auto mt-5">

        <h1 style="text-align: center;">Tambah Data Karyawan</h1>
        </br>

        <form action="" method="post">

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Name</span>
                </label>
                <input type="text" placeholder="" class="input" name="name">
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="text" placeholder="" class="input" name="email">
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Adrress</span>
                </label>
                <input type="text" placeholder="" class="input" name="address">
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Gender</span>
                </label>
                <select name="gender" class="select select-bordered w-full max-w-xs">
                    <option disabled="disabled" selected="selected"></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Position</span>
                </label>
                <input type="text" placeholder="" class="input" name="position">
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Status</span>
                </label>
                <select name="status" class="select select-bordered w-full max-w-xs">
                    <option disabled="disabled" selected="selected"></option>
                    <option value="Fulltime">Fulltime</option>
                    <option value="Parttime">Parttime</option>
                </select>
            </div>

            <button type="submit" class="btn btn-outline m-5 w-64" name="submit">
                submit
            </button>

        </form>

    </div>

</body>

</html>