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
    $status = $post['status'];
    $pendidikan = $post['pendidikan'];


    $query = "INSERT INTO tb_pegawai (nama, jenis_kelamin, status, pendidikan )
    VALUES ('$nama', '$jenis_kelamin', '$status', '$pendidikan' )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// mengedit data
function selectdata($id)
{
    global $conn;

    $query = "SELECT * FROM tb_pegawai WHERE no_id= '$id'";
    $result = mysqli_query($conn, $query);
    return $result;
}

function updatedata($data)
{
    global $conn;

    $query = "UPDATE tb_pegawai
              SET nama = ?,
                  jenis_kelamin = ?,
                  status = ?,
                  pendidikan = ?
              WHERE no_id = ?";

    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        return 0;
    }

    mysqli_stmt_bind_param(
        $stmt,
        "ssssi",
        $data['nama'],
        $data['jenis-kelamin'],
        $data['status'],
        $data['pendidikan'],
        $data['id']
    );

    if (!mysqli_stmt_execute($stmt)) {
        return 0;
    }

    return 1;
}


// menghapus data
function delete($id)
{
    global $conn;

    $query = "DELETE FROM tb_pegawai WHERE no_id= '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}
