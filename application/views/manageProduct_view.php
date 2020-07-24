<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage tips</title>

    <style>
        .cus-btn{
            position: relative;
            bottom: -15px;
            z-index: 1;
            height: 30px;
            width: 30px;
            font-size: 22px;
            line-height: 27px;
            border-radius: 29px;
            padding: 0;
        }
    </style>
</head>
<body>
<?php include 'adminMenu_view.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>jquery.table2excel.js"></script>


    <div class="container">
    <h1 class="text-center">Manage Product</h1>
        <hr>
        <table class="table table-hover table-striped table-light product-table">
            <thead class="thead-inverse">
                <tr>
                    <th>No.</th>
                    <th>Product's ID</th>
                    <th>Product's name</th>
                    <th>Price</th>
                    <th>Brand</th>
                </tr>
                </thead>
                <tbody>
        <?php $i =1; 
        foreach ($productArray as $key => $value){?>
                    <tr>
                        <td scope="row"><?=$i;?></td>
                        <td><?= $value['id'];?></td>
                        <td><?= $value['name'];?></td>
                        <td><?= $value['price'];?></td>
                        <td><?= $value['brand'];?></td>
                    </tr>
        <?php $i++; }?>
                </tbody>
        </table>
        <div class=".col-sm-push-1 align-center">
            <button id="excel-export" type="button" class="btn btn-primary">Export to excel</button>
        </div>
    </div>

</body>

    	<script>
		
        $(function() {
            $("#excel-export").click(function(){
            $(".product-table").table2excel({
                name: "Excel Document"
            }); 
             });
        });
    </script>
</html>