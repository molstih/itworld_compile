<?php
	function get_user($id){
		$query = "select * from user where id=".$id;
		$link=  connectdb();
		$result=mysqli_query($link, $query);
		$user1 = array();
		if($result){
			$rows=  mysqli_num_rows($result);
			for($i=0; $i<1;$i++){
				$row=mysqli_fetch_assoc($result);
				$id=$row['id'];
				$login = $row['login'];
				$name=  $row['name'];
				$surname=$row['surname'];
				$email= $row['email'];
				$avatar = $row['avatar'];
				$level = $row['level'];
				$type = $row['type'];
				$user=array('id'=>$id,
					'login'=>$login,
					'name'=>$name,
					'surname'=>$surname,
					'email'=>$email, 
					'avatar'=>$avatar, 
					'level'=>$level, 
					'type'=>$type);
				array_push($user1,$user);   
			}
			$users=$user1;
			$users = json_encode($users, JSON_UNESCAPED_UNICODE);
			return $users; 
		}
	}

	function get_all_users(){
		$query = "select * from user where id>0";
		$link = connectdb();
		$result = mysqli_query($link, $query);
		$user1 = array();
		if($result){
			$rows=  mysqli_num_rows($result);
			for($i=0; $i<$rows;$i++){
				$row=mysqli_fetch_assoc($result);
				$id=$row['id'];
				$login = $row['login'];
				$name=  $row['name'];
				$surname=$row['surname'];
				$email= $row['email'];
				$avatar = $row['avatar'];
				$level = $row['level'];
				$type = $row['type'];
				$user=array('id'=>$id,
					'login'=>$login,
					'name'=>$name,
					'surname'=>$surname,
					'email'=>$email, 
					'avatar'=>$avatar, 
					'level'=>$level, 
					'type'=>$type);
				array_push($user1,$user);   

			}
			$user = json_encode($user1, JSON_UNESCAPED_UNICODE);
			return $user;  
		}
	}
	
	function get_users($name){
		$query = "select * from user where name like '".$name."%'";
		$link = connectdb();
		echo 'user_name';
		$result = mysqli_query($link, $query);
		$user1 = array();
		if($result){
			$rows=  mysqli_num_rows($result);
			for($i=0; $i<$rows;$i++){
				$row=mysqli_fetch_assoc($result);
				$id=$row['id'];
				$login = $row['login'];
				$name=  $row['name'];
				$surname=$row['surname'];
				$email= $row['email'];
				$avatar = $row['avatar'];
				$level = $row['level'];
				$type = $row['type'];
				$user=array('id'=>$id,
					'login'=>$login,
					'name'=>$name,
					'surname'=>$surname,
					'email'=>$email, 
					'avatar'=>$avatar, 
					'level'=>$level, 
					'type'=>$type);
				array_push($user1,$user);   

			}
			$user = json_encode($user1, JSON_UNESCAPED_UNICODE);
			return $user;  
		}
	}
?>