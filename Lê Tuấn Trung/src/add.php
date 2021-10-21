<?php include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>ID </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Name </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Type </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Barcode </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Dose </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Code </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Cost_price </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Selling_price </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Expiry </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Company_name </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Producetion_date </td>
                    <td>
                        <input type="date" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Expiration_date </td>
                    <td>
                        <input type="date" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Place </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Quantity </td>
                    <td>
                        <input type="text" name="" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add " class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>

<?php include('footer.php'); ?>


<?php 

    if(isset($_POST['submit']))
    {

        //1. Get the Data from form
        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $barcode = $_POST['barcode'];
        $dose = $_POST['dose'];
        $code = $_POST['code'];
        $cost_price = $_POST['cost_price'];
        $selling_price = $_POST['selling_price'];
        $expiry = $_POST['expiry'];
        $company_name = $_POST['company_name'];
        $production_date = $_POST['production_date'];
        $expiration_date = $_POST['expiration_date'];
        $place = $_POST['place'];
        $quantity = $_POST['quantity'];

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO drugs SET 
            id='$id',
            name='$name',
            type='$type',
            barcode='$barcode',
            dose='$dose',
            code='$code',
            cost_price='$cost_price',
            selling_price='$selling_price',
            expiry='$expiry',
            company_name='$company_name',
            production_date='$production_date',
            expiration_date='$expiration_date',
            place='$place',
            quantity='$quantity'
        ";
 
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res==TRUE)
        {
            $_SESSION['add'] = "<div class='success'>Added Successfully.</div>";
            header("location:".SITEURL.'index.php');
        }
        else
        {
            $_SESSION['add'] = "<div class='error'>Failed to Add.</div>";
            header("location:".SITEURL.'add.php');
        }

    }
    
?>