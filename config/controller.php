<?php

// menampilkan data
function select($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//menginputkan data baru
function input($post)
{
    global $conn;

    $nama = $post['nama'];
    $jenis_kelamin = $post['jenis-kelamin'];
    $tanggal_lahir = $post['tanggal-lahir'];
    $usia = $post['usia'];
    $pendidikan = $post['pendidikan'];
    $status = $post['status'];

    $query = "INSERT INTO mahasiswa (nama, jenis_kelamin, tanggal_lahir, usia, pendidikan, status)
    VALUES ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$usia', '$pendidikan', '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//mengedit data
function edit($post)
{
    global $conn;

    $id = $post['id'];
    $nama = $post['nama'];
    $jenis_kelamin = $post['jenis-kelamin'];
    $tanggal_lahir = $post['tanggal-lahir'];
    $usia = $post['usia'];
    $pendidikan = $post['pendidikan'];
    $status = $post['status'];

    $query = "UPDATE mahasiswa SET nama=?, jenis_kelamin=?, tanggal_lahir=?, usia=?, pendidikan=?, status=? WHERE id=?";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssiisi', $nama, $jenis_kelamin, $tanggal_lahir, $usia, $pendidikan, $status, $id);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($conn);
}

