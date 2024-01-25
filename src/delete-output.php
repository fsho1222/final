<?php
    const SERVER ='mysql220.phy.lolipop.lan';
    const DBNAME ='LAA1517444-final';
    const USER = 'LAA1517444';
    const PASS = 'Pass1222';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from bland where bland_id=?');
    if($sql->execute([$_REQUEST['bland_id']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
    }
?>
    <br><hr><br>
	<table>
    <tr><th>ブランドID</th><th>ブランド名</th></tr>
<?php
    foreach ($pdo->query('select * from bland') as $row) {
        echo '<tr>';
        echo '<td>',$row['bland_id'], '</td>';
        echo '<td>',$row['bland_name'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?> 
</table>
    <form action="delete.php" method="post">
        <button type="submit">削除画面へ戻る</button>
    </form>

