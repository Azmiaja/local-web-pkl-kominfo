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

    $query = "INSERT INTO data_pegawai (nama, jenis_kelamin, tanggal_lahir, usia, pendidikan, status)
    VALUES ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$usia', '$pendidikan', '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// mengedit data
function selectdata($id) {
    global $conn;

    $query = "SELECT * FROM data_pegawai WHERE id= '$id'";
    $result = mysqli_query($conn, $query);
    return $result;
}
function updatedata($data) {
    global $conn;

    $query = "UPDATE data_pegawai SET 
    nama = '". $data['nama'] ."',
    jenis_kelamin = '". $data['jenis-kelamin'] ."',
    tanggal_lahir = '". $data['tanggal-lahir'] ."',
    usia = '". $data['usia'] ."',
    pendidikan = '". $data['pendidikan'] ."',
    status = '". $data['status'] ."'
    WHERE id= '". $data['id'] ."'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        return 0;

    } else {
        return 1;
    }
}

// menghapus data
function delete($id){
    global $conn;

    $query = "DELETE FROM data_pegawai WHERE id= '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}


