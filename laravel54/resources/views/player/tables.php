<?php
$dsn = "mysql:host=localhost;dbname=live";
$db = new PDO($dsn, 'root', 'root');
$db->exec("set names 'utf8'");

$rs = $db->query("SELECT* FROM user");

$rs->setFetchMode(PDO::FETCH_ASSOC);
$result_arr = $rs->fetchAll();
// print_r($result_arr);
// while($row = $rs->fetch()){
// print_r($row);
// }
// $db = null;
?>









<!--第一步：引入Javascript / CSS （CDN）-->
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>



<!--第二步：添加如下 HTML 代码-->
<table id="table_id_example" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>UID</th>
         <th>Time</th>
         <th>名字</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($result_arr as $key => $value){; ?>
            <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['username']; ?></td>
        <td><?php echo $value['password']; ?></td>
        <td><?php echo $value['tel']; ?></td>
        </tr>
        <?php }; ?>
    
    
    </tbody>
</table>


<script>
<!--第三步：初始化Datatables-->
$(document).ready( function () {
$('#table_id_example').DataTable();
} );
</script>