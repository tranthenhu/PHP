<?php 
	include('server.php'); 
	include('InfoModel.php'); 

	session_start();

	//declare variable
	$infoModel = new InfoModel;
	$edit_state = false;

	class InfoAction  extends InfoDB
	{
		public function insertData($infoModel)
		{
			//"INSERT INTO info (name, address) VALUES ('$name', '$address')";
			$query = "";
			$query .= "INSERT INTO info (name, address) VALUES ('";
			$query .= $infoModel->name ."', '";
			$query .= $infoModel->address ."')";
			$result = mysqli_query($this->conn, $query);
			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function selectAllData()
		{
			//SELECT * FROM info
			$query = "SELECT * FROM info";
			$result = mysqli_query($this->conn, $query);
			$listInfo = array();
			while ($row = mysqli_fetch_assoc($result))
			{
				$listInfo[] = $row;
			}
			return $listInfo;
		}

		public function getInfoId($id)
		{
			//SELECT * FROM info WHERE id=$id
			$query = "SELECT * FROM info WHERE id = ";
			$query .= $id;
			$resultQuery = mysqli_query($this->conn, $query);
			$rowInfor = mysqli_fetch_array($resultQuery);		
			return $rowInfor;
		}

		public function updateDataInfo($infoModel)
		{
			//UPDATE info SET name = '$name', address = '$address' WHERE id = '$id'
			$query ="";
			$query .= "UPDATE info SET name = '";
			$query .= $infoModel->name;
			$query .= "', address = '" .$infoModel->address;
			$query .= "' WHERE id = " .$infoModel->id;
			$result = mysqli_query($this->conn, $query);
			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function deleteDataInfo($id)
		{
			//DELETE FROM info WHERE id = " . $id
			$query = "DELETE FROM info WHERE id = ". $id;
			$result = mysqli_query($this->conn, $query);
			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}


	$objInfo = new InfoAction;

	//insert database
	if(isset($_POST['save'])) {
		$name = mysqli_real_escape_string($objInfo->conn, $_POST['name']);
		$address = mysqli_real_escape_string($objInfo->conn, $_POST['address']);

		$infoModel->name = $name;
		$infoModel->address = $address;

		if($objInfo->insertData($infoModel))
		{
			$_SESSION['msg'] = "Address inssert sucsses";
		}
		else
		{
			$_SESSION['msg'] = "Address inssert fail";
		}
		
		header('location: index.php'); //redirect to index page after inserting
		
	}

	//insert database
	if(isset($_POST['update'])) {
		$id = mysqli_real_escape_string($objInfo->conn, $_POST['id']);
		$name = mysqli_real_escape_string($objInfo->conn, $_POST['name']);
		$address = mysqli_real_escape_string($objInfo->conn, $_POST['address']);
		$infoModel->id = $id;
		$infoModel->name = $name;
		$infoModel->address = $address;
		
		if($objInfo->updateDataInfo($infoModel))
		{
			$_SESSION['msg'] = "Address update sucsses";
		}
		else
		{
			$_SESSION['msg'] = "Address update fail";
		}
		header('location: index.php'); //redirect to index page after inserting
		
	}

	//delete info
	if(isset($_GET["delete"]))
	{
		$id = mysqli_real_escape_string($objInfo->conn, $_GET['delete']);

		if($objInfo->deleteDataInfo($id))
		{
			$_SESSION['msg'] = "Address delete sucssed";
		}
		else
		{
			$_SESSION['msg'] = "Address delete failed";
		}
		header('location: index.php'); //redirect to index page after inserting
	}

 ?>