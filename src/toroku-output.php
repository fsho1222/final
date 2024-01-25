<?php
    const SERVER ='mysql220.phy.lolipop.lan';
    const DBNAME ='LAA1517444-final';
    const USER = 'LAA1517444';
    const PASS = 'Pass1222';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into bland values(?, ?)');
    if($sql->execute([$_POST['bland_id'],$_POST['bland_name']])){
        echo '<font color="red">追加に成功しました。</font>';
    }else{
        echo '<font color="red">追加に失敗しました。</font>';
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
    <form action="toroku.php" method="post">
        <button type="submit">登録画面に戻る</button>
    </form>