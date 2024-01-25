<!-- 248 -->
<?php
    const SERVER ='mysql220.phy.lolipop.lan';
    const DBNAME ='LAA1517444-final';
    const USER = 'LAA1517444';
    const PASS = 'Pass1222';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

        <table>
        <tr><th>ブランドID</th><th>ブランド名</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from bland') as $row){
        echo '<tr>';
        echo '<td>', $row['bland_id'], '</td>';
        echo '<td>', $row['bland_name'], '</td>';
        echo '<td>';
        echo '<a href="delete-output.php?bland_id=', $row['bland_id'], '">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
    </table>
    <button onclick="location.href='index.html'">戻る</button>
