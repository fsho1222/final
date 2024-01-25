<?php
    const SERVER ='mysql220.phy.lolipop.lan';
    const DBNAME ='LAA1517444-final';
    const USER = 'LAA1517444';
    const PASS = 'Pass1222';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $spl=$pdo->prepare('update bland set bland_id=?, bland_name=?');
    if (empty($_REQUEST['bland_name'])) {
        echo 'ブランド名を入力してください。';
    } else

    if($spl->execute([htmlspecialchars($_POST['bland_name']),$_POST['bland_id']])){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }
    
?>
        <hr>
        <table>
        <tr><th>ブランドID</th><th>ブランド名</th></tr>

<?php
foreach ($pdo->query('select * from bland') as $row) {
    echo '<tr>';
    echo '<td>', $row['bland_id'], '</td>';
    echo '<td>', $row['bland_name'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
        </table>
<button onclick="location.href='update.php'">更新画面へ戻る</button>