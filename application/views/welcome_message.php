<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <title>File Upload</title>
</head>

<body>
    <section>
        <div class="container">
            <form action="<?php echo URL;?>/welcome/upload" method="POST" enctype="multipart/form-data">
                <div class="col-md-8 mt-3">
                    <label class="form-label" for="customFile">File Upload</label>
                    <input type="file" name="userfile" class="form-control" id="customFile" required/>
                    <button type="submit" class="btn btn-primary mt-3" name="add" value="add">Upload</button>
                </div>
            </form>


        </div>
    </section>

    <section>
        <div class="container mt-3">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Edit</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($image as $allImage){ ?>
                    <tr>
                        <td><?php echo $allImage['id'];?></td>
                        <td><img src="<?php echo URL;?>/uploads/<?php echo $allImage['image'];?>" alt="img" class="w-25"></td>
                        <td><a href="<?php echo URL;?>/welcome/edit/<?php echo $allImage['id'];?>" class="btn btn-primary">Edit</a></td>
                    </tr>

                    <?php   } ?>


                </tbody>

            </table>
        </div>

    </section>


    <script>
    new DataTable('#example');
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>