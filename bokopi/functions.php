<?php
$conn = mysqli_connect("localhost", "root", "", "db_bokopi");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function input($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $hari = htmlspecialchars($data["hari"]);
    $pesan = htmlspecialchars($data["pesan"]);

    $query = "INSERT INTO booking 
                VALUES
                ('', '$nama', '$email', '$hari', '$pesan')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
