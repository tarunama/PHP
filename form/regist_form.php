<!--  -->
<html>
<head>
<meta charset="utf-8">
</head>
<body> 

<form action="regist_action.php" method="post">

	<input type="hidden" name="id" value="">

    性別：<input type="radio" name="sex" value="1" checked>男　<input type="radio" name="sex" value="2">女<br>

    氏名（姓）：<input type="text" name="fname" maxlength="10" value=""><br>
    
    氏名（名）：<input type="text" name="lname" maxlength="10" value=""><br>
    
    氏名かな（かな）：<input type="text" name="kana" maxlength="20" value=""><br>
    
    氏名めい（めい）：<input type="text" name="mei" maxlength="20" value=""><br>
    
    メールアドレス：<input type="text" name="mail" value=""><br>
    
    カテゴリー（趣味）：
    <input type="checkbox" name="category" value="1">読書
    <input type="checkbox" name="category" value="2">ゲーム
    <input type="checkbox" name="category" value="3">買い物
    <input type="checkbox" name="category" value="4">アウトドア<br>

    メモ：<textarea name="memo" maxlength="300" rows="4" cols="40"></textarea><br>
    <br>
    パスワード：<input type="password" name="pwd" maxlength="300" value="">
    <br>
    パスワード（確認用）：<input type="password" name="confirmPwd" maxlength="300" value="">
    <br>
    <input type="submit" name="sbmt" value="確認">

</form>
</body>
</html>