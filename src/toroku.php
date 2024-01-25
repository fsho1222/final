<!-- 229 -->

<?php
    const SERVER ='mysql220.phy.lolipop.lan';
    const DBNAME ='LAA1517444-final';
    const USER = 'LAA1517444';
    const PASS = 'Pass1222';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

    <p>商品を追加</p>
    <form action="toroku-output.php" method="post">
		ブランドID<input type="text" name="bland_id"><p>
		ブランド名<input type="text" name="bland_name"><p>
        <input type="submit" value="登録">
    </form>
    <button onclick="location.href='index.html'">戻る</button>
