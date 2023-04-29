<?php
	session_start();
	if(isset($_POST['add'])){
		$users = simplexml_load_file('files/data.xml');
		$user = $users->addChild('user');
        $user->addChild('id', uniqid());
		$user->addChild('name', $_POST['name']);
		$user->addChild('phone', $_POST['phone']);
		$user->addChild('address', $_POST['address']);
		$user->addChild('email', $_POST['email']);
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($users->asXML());
		$dom->save('files/data.xml');
		$_SESSION['message'] = 'Member added successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}
?>