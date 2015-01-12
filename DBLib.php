<?php
	Function ConnectDB($dbname,$host,$user,$pass)
	{
		$db = mysql_connect($host, $user, $pass);
  		if(!$db)
    		exit('MySQLに接続できません．');
  		if(!mysql_select_db($dbname))
    		exit('データベースを選択できません．');

    	return $db;
	}

	Function ExecQuery($query)
	{
		$result = mysql_query($query);
  		if(!$result)
    		exit('クエリの実行が失敗しました: ' . $query);

    	return $result;

	}