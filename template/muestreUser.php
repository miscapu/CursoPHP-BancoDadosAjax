<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <title></title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--JS-->
    <script type="application/javascript" src="../js/jquery-3.2.1.slim.min.js"></script>
    <script type="application/javascript" src="../js/popper.min.js"></script>
    <script type="application/javascript" src="../js/bootstrap.min.js"></script>
    <!--End Bootstrap-->
</head>
<body>

<?php
$q = intval($_GET['q']);

echo "<table class='table'>";
echo "<tr><th scope='col'>#</th><th scope='col'>Primeiro Nome</th><th scope='col'>Apelido</th><th scope='col'>Idade</th><th scope='col'>Cidade</th><th scope='col'>Trabalho</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdajax";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, charset=utf8);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id='".$q."'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
</body>
</html>
