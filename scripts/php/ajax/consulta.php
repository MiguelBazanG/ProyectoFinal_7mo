
<?php 
include('../conexiones_BD/conexionBD_escuela.php');
$conn = new Conexion();
$output= array();
$sql = "SELECT * FROM country";

$totalQuery = mysqli_query($conexion,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);
var_dump($con);
if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE Code like '%".$search_value."%'";
	$sql .= " OR Name like '%".$search_value."%'";
	$sql .= " OR Continent like '%".$search_value."%'";
	$sql .= " OR Region like '%".$search_value."%'";
    $sql .= " OR SurfaceArea like '%".$search_value."%'";
    $sql .= " OR IndepYear like '%".$search_value."%'";
    $sql .= " OR Population like '%".$search_value."%'";
    $sql .= " OR LifeExpectancy like '%".$search_value."%'";
    $sql .= " OR GNP like '%".$search_value."%'";
    $sql .= " OR GNPOld like '%".$search_value."%'";
    $sql .= " OR LocalName like '%".$search_value."%'";
    $sql .= " OR GovernmentForm like '%".$search_value."%'";
    $sql .= " OR HeadOfState like '%".$search_value."%'";
    $sql .= " OR Capital like '%".$search_value."%'";
    $sql .= " OR Code2 like '%".$search_value."%'";
   }

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$column_name." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['Code'];
	$sub_array[] = $row['Name'];
	$sub_array[] = $row['Continent'];
	$sub_array[] = $row['Region'];
	$sub_array[] = $row['SurfaceArea'];
    $sub_array[] = $row['IndepYear'];
    $sub_array[] = $row['Population'];
    $sub_array[] = $row['LifeExpectancy'];
    $sub_array[] = $row['GNP'];
    $sub_array[] = $row['GNPOld'];
    $sub_array[] = $row['LocalName'];
    $sub_array[] = $row['GovernmentForm'];
    $sub_array[] = $row['HeadOfState'];
    $sub_array[] = $row['Capital'];
    $sub_array[] = $row['Code2'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['Code'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);