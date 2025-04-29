<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Exemplo</title>
</head>
<body>
    <h1>Tabela de Exemplo</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        $pdo = new PDO('mysql:host=mysql;dbname=test', 'root', 'password');
        $stmt = $pdo->query('SELECT * FROM teste');
        while ($row = $stmt->fetch()) {
            echo "<tr><td>{$row['Id']}</td><td>{$row['Nome']}</td><td>{$row['email']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
