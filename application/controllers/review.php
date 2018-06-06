
<?php
class News_model extends CI_Controller {

public function __construct() {
$this->load->database('test');
}
public function get_reviews($id) {
if($id != FALSE) {
$query = $this->db->get_where('tblInfo', array('id' => $id));
return $query->row_array();
}
else {
return FALSE;
}
}



		if(isset($_POST['btnSave']))
{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$sql ="INSERT INTO tblInfo VALUES($id, '$name', $age, '$gender')";
		$result = $conn->query($sql);
	if($result == TRUE){
		echo "<script>alert('Added!');location.replace('movie_review.php')</script>";
}	

	else
{
		echo "Problem in saving record!";
}
}
if(isset($_POST['btnUpdate']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$sql = "UPDATE tblInfo SET name='$name' , age=$age ,gender='$gender' WHERE id=$id";
	$result = $conn->query($sql);
	if($result==TRUE){
		echo "<script>alert('Updated!');location.replace('info2.php')</script>";
	}	else{
			echo "Problem in updating record!";
	}
}
if(isset($_POST['btnDelete']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$sql = "DELETE FROM tblInfo SET name='$name' , age=$age ,gender='$gender' WHERE id=$id";
	$result = $conn->query($sql);
	if($result==TRUE){
		echo "<script>alert('Updated!');location.replace('info2.php')</script>";
	}	else{
			echo "Problem in updating record!";
	}
}
}
?>