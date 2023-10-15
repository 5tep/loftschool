<?php
<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

if (empty($_POST['email'])){echo "Зоплните e-mail!"; die;}
if (empty($_POST['street']) || empty($_POST['home']) || empty($_POST['part']) || empty($_POST['appt']) || empty($_POST['floor'])){echo "Зоплните адрес доставки!"; die;}

$host = 'localhost';
$db   = 'db';
$user = 'user';
$pass = 'password';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$stmt = $pdo->prepare('SELECT count_orders FROM burger_users WHERE email = :email');
$stmt->execute(['email' => $_POST['email']]);
if ($row = $stmt->fetch()){
    $count_orders = $row['count_orders'];
}
else {
    $count_orders = 0;
    $stmt = $pdo->prepare('INSERT INTO burger_users (name, email, phone) VALUES (:name, :email, :phone)');
    $stmt->execute(['name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone']]);

}
$stmt = $pdo->prepare('SELECT id FROM burger_users WHERE email = :email');
$stmt->execute(['email' => $_POST['email']]);
$row = $stmt->fetch();
$id_user = $row['id'];
$count_orders++;
$stmt = $pdo->prepare("UPDATE burger_users SET count_orders = $count_orders where email = :email");
$stmt->execute(['email' => $_POST['email']]);

$stmt = $pdo->prepare('INSERT INTO burger_orders (id_user, address, callback, cash, card, comment) VALUES (:id_user, :address, :callback, :cash, :card, :comment)');
$stmt->execute(['id_user'=>$id_user, 'address' => "{$_POST['street']}, {$_POST['home']}/{$_POST['part']}, {$_POST['appt']}, этаж {$_POST['floor']}", 'callback' => $_POST['callback'], 'cash' => $_POST['cash'], 'card' => $_POST['card'], 'comment' => $_POST['comment']]);

$stmt = $pdo->prepare('SELECT max(id) as id_order FROM burger_orders WHERE id_user = :id_user');
$stmt->execute(['id_user' => $id_user]);
$row = $stmt->fetch();
$id_order = $row['id_order'];

echo "Спасибо, ваш заказ будет доставлен по адресу: {$_POST['street']}, {$_POST['home']}/{$_POST['part']}, {$_POST['appt']}, этаж {$_POST['floor']}<br> Номер  вашего заказа: $id_order <br>Это ваш $count_orders-й заказ!";
?>
