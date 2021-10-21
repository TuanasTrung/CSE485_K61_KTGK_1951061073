<?php
  include 'header.php';
?>
 <main>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã thuốc</th>
                    <th scope="col">Tên thuốc</th>
                    <th scope="col">Loại thuốc</th>
                    <th scope="col">Mã vạch</th>
                    <th scope="col">Liều lượng</th>
                    <th scope="col">Mã </th>
                    <th scope="col">Giá nhập</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Trạng thái Hạn sử dụng</th>
                    <th scope="col">Công ty</th>
                    <th scope="col">Ngày sản xuất</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Nơi sản xuất</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'config.php';
                    $sql = "SELECT * FROM drugs";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td>'.$row['type'].'</td>';
                            echo '<td>'.$row['barcode'].'</td>';
                            echo '<td>'.$row['dose'].'</td>';
                            echo '<td>'.$row['code'].'</td>';
                            echo '<td>'.$row['cost_price'].'</td>';
                            echo '<td>'.$row['selling_price'].'</td>';
                            echo '<td>'.$row['expiry'].'</td>';
                            echo '<td>'.$row['company_name'].'</td>';
                            echo '<td>'.$row['production_date'].'</td>';
                            echo '<td>'.$row['expiration_date'].'</td>';
                            echo '<td>'.$row['place'].'</td>';
                            echo '<td>'.$row['quantity'].'</td>';
                            echo "<td><a href='add.php' target='blank'>Add</a> | <a href='update.php' target='blank'>Update</a> | <a href='delete.php' target='blank'>Delete</a> </td>";
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
            </table>
    </main>
    
<?php
    include 'footer.php';
?>