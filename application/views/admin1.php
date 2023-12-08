<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">


</head>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th> Password</th>
            </tr>
        </thead>
        <?php foreach($data as $list){
            ?>
       
        <tbody>
            <tr>
                <td><?php echo $list['id'];?></td>
                <td><?php echo $list['email'];?></td>
                <td><?php echo $list['password'];?></td>
               
            </tr>
         
        </tbody>
   <?php }?>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>

$(document).ready(function () {
    $('#example').DataTable();
});
</script>
</body>
</html>