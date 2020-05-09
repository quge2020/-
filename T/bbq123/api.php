<?php
	/*
	*	@class 一泽表白请求类
	*	@author ZYE.CC
	*	@2018-9-16 14:39:43
	*/
	if(!empty($_GET["act"])) {
		$act = $_GET["act"];   
	}
	if(!empty($_GET["id"])) {
		$id = $_GET["id"];   
	}
	if(!empty($_GET["content"])) {
		$content = $_GET["content"];   
	}
	if(!empty($_GET["qq"])) {
		$qq = $_GET["qq"];   
	}
	if(!empty($_GET["me"])) {
		$me = $_GET["me"];   
	}
	if(!empty($_GET["you"])) {
		$you = $_GET["you"];   
	}
	//获取当前时间
	$time = date("Y-m-d H:i:s");
	//连接数据库
	$db = new MySQLi("localhost","数据库用户名","数据库密码","数据库名");
	mysqli_connect_error()?die("连接失败"):"";
	//记录查询
	if($act == "search") {
		$sql = "SELECT content,qq,me,you,addtime FROM biaobai WHERE id='{$id}'";
		$result = $db->query($sql);
		$n = $result->fetch_row();
		if($n) {
			$data = array('content' => $n[0], 'qq' => $n[1], 'me' => $n[2], 'you' => $n[3], 'addtime' => $n[4]);
			$ret = array('status' => 0, 'msg' => '查询成功', 'data' => $data);
			echo json_encode($ret);
		} else {
			$ret = array('status' => -1, 'msg' => '未查询到结果', 'data' => null);
			echo json_encode($ret);
		}
	}
	//新增表白
    if($act == "add") {
		$sql = "INSERT INTO biaobai (content,qq,me,you,addtime,uptime) VALUES('{$content}','{$qq}','{$me}','{$you}','{$time}','{$time}')";
		$result = $db->query($sql);
		$ret = array('status' => 0, 'msg' => '新增成功', 'data' => null);
		echo json_encode($ret);
	}
	//删除表白
    if($act == "del") {
		//查询是否存在
		$sql = "SELECT count(*) FROM biaobai WHERE id='{$id}'";
		$result = $db->query($sql);
		$n = $result->fetch_row();
		if($n[0] > 0) {
			$sql = "DELETE FROM biaobai WHERE username='{$username}'";
			$result = $db->query($sql);
			$ret = array('status' => 0, 'msg' => '删除成功', 'data' => null);
		} else {
			$ret = array('status' => -1, 'msg' => '该ID不存在', 'data' => null);
		}
		echo json_encode($ret);
	}
	//表白列表
	if($act == "list") {
		//查询所有授权
		$sql = "SELECT id,content,qq,me,you,addtime FROM biaobai ORDER BY addtime ASC";
		$result = $db->query($sql);
		$arr = $result->fetch_all();
		foreach($arr as $v) {
			$data[] = array('id' => $v[0],'content' => $v[1],'qq' => $v[2],'me' => $v[3],'you' => $v[4],'addtime' => $v[5]);
		}
		$ret = array('status' => 0, 'msg' => '查询成功', 'data' => $data);
		echo json_encode($ret);
	}
?>