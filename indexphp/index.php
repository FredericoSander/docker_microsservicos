<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "172.31.86.118"
$username = "root";
$password = "Senha321";
$database = "ecomerce";

// Criar conexão

$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$host_name = gethostname();


$query = "INSERT INTO clients (Pname, minit, lname,CPF, street, num,district,city,state,country) 
          VALUES ('Maria','M','Neves',12345678901,'Rua Santa Rita',29,'Jacuí','João Monlevade','MG','Brasil'),
		  ('Antônio','A','Souza',45678912345,'Rua Juazeiro',100,'Satelite','João Monlevade','MG','Brasil'),
		  ('Joaquim','J','Cruz',78912345678,'Rua Parauna',78,'Castelo','João Monlevade','MG','Brasil'),
		  ('José','J','Silva',78456952135,'Rua Jequitibá',62,'Santa Barbara','João Monlevade','MGs','Brasil');"

$query = "INSERT INTO product(Pname, classification_Kids, Category, Avaliation, size) 
          VALUES ('CelularA03',false,'Eletronic','4',null),
	             ('Nintendo',true,'Toys','3',null),
	             ('NoteBook',false,'Eletronic','4',null),
	             ('Camiseta',false,'Clothes','4',null),
	             ('A Indomada',false,'books','4',null);



if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>