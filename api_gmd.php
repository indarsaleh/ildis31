<?PHP
header("Content-Type: application/json");
$servername = "localhost";//diisi nama server
$username = "root";//diisi nama user db
$password = "";//diisi password db
$dbname = "lokal_kosong";//diisi nama database
$varjson = array();
$row_array = (object)array();
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT id, name, status AS status FROM gmd"; //query sql yang disesuaikan
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$row_array->idData=$row["id"]; //berisi id dokumen
$row_array->nama=$row["name"]; //berisi tahun penetapan atau tahun terbit ex. 2019
$row_array->status=$row["status"]; //berisi tahun bulan tanggal (YYYY-MM-DD) ex. 2019-04-22
$row_array->operasi="4"; //wajib ada
$row_array->display="1"; //wajib ada
      array_push($varjson,json_decode(json_encode($row_array)));
    }
    echo json_encode($varjson);
} else {
    echo "0 results";
}
$conn->close();
            ?>
