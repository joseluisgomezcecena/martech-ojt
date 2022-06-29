<?php
require_once("../../settings/db.php");
session_start();

global $connection;

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Search 
$searchQuery = " ";
if($searchValue != ''){
        $searchQuery = " and (nombre like '%".$searchValue."%' or 
        name_file like '%".$searchValue."%') ";
}

## Total number of records without filtering
$sel = mysqli_query($connection,"select count(*) as allcount from file LEFT JOIN name_file ON file.name_id = name_file.id_file 
LEFT JOIN sop_operation ON name_file.name_file = sop_operation.sop_nombre 
LEFT JOIN ops ON ops.op_id = sop_operation.ops_id 
LEFT JOIN cells ON cells.cell_id = ops.cell_id 
LEFT JOIN personnel ON file.num_empleado = personnel.p_numero");


$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of record with filtering
$sel = mysqli_query($connection,"select count(*) as allcount FROM file LEFT JOIN name_file ON file.name_id = name_file.id_file 
LEFT JOIN sop_operation ON name_file.name_file = sop_operation.sop_nombre 
LEFT JOIN ops ON ops.op_id = sop_operation.ops_id 
LEFT JOIN cells ON cells.cell_id = ops.cell_id 
LEFT JOIN personnel ON file.num_empleado = personnel.p_numero".$searchQuery);

$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
echo $empQuery = "SELECT * FROM file LEFT JOIN name_file ON file.name_id = name_file.id_file 
LEFT JOIN sop_operation ON name_file.name_file = sop_operation.sop_nombre 
LEFT JOIN ops ON ops.op_id = sop_operation.ops_id 
LEFT JOIN cells ON cells.cell_id = ops.cell_id 
LEFT JOIN personnel ON file.num_empleado = personnel.p_numero ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;

$empRecords = mysqli_query($connection, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {

    ##other querys
    
    #data-toggle='modal' data-target='#exampleModal'

    ##other querys

$data[] = array( 
    "trained_id"=>$row['id'],
    "cell"=>$row['cell_name'],
    "operation"=>$row['op_name'],
    "sop"=>$row['name_file'],
    "rev"=>$row['rev'],
    "emp_number"=>$row['num_empleado'],
    "person"=>$row['nombre'],
    "supervisor"=>$row['p_supervisor']
);
}

## Response
$response = array(
"draw" => intval($draw),
"iTotalRecords" => $totalRecords,
"iTotalDisplayRecords" => $totalRecordwithFilter,
"aaData" => $data
);

echo json_encode($response);


?>