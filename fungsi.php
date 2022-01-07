<?php

$conn = mysqli_connect("localhost", "root", "", "praktikum_9");

function query($query)
{
    global $conn;
    $data = mysqli_query($conn, $query);
    $karyawans = [];
    while ($karyawan = mysqli_fetch_assoc($data)) {
        $karyawans[] = $karyawan;
    }
    return $karyawans;
}


function tambahTabel($data)
{
    global $conn;

    $name = $data["name"];
    $email = $data["email"];
    $address = $data["address"];
    $gender = $data["gender"];
    echo $gender, "/n";
    $position = $data["position"];
    $status = $data["status"];
    echo $status, "/n";

    $query = "INSERT INTO karyawan
                    VALUES
                    ('', '$name', '$email', '$address', '$gender', '$position', '$status')
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusTabel($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");

    return mysqli_affected_rows($conn);
}
