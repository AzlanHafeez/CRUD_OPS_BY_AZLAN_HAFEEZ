<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
        <?php 
        include 'database.php';
        $allselect = 'SELECT * FROM `crud-data` ';
        
        $run = mysqli_query($connection,$allselect);

        if (mysqli_num_rows($run) > 0) {
            
         
        ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while ($row = mysqli_fetch_assoc($run)) {
                 ?>
                 <tr>
                    <td><?php echo $row['S.No']?></td>
                 
                    <td><?php echo $row['Name']?></td>
                 
                    <td><?php echo $row['Address']?></td>
                 
                    <td><?php echo $row['Class']?></td>
                 
                    <td><?php echo $row['Phone']?></td>     <td>
                    <a href='edit.php?id=<?php echo $row['S.No'] . "&nm=" . $row['Name'] . "&add=" . $row['Address']. "&cl=" . $row['Class']. "&ph=" . $row['Phone'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['S.No'];?>'>Delete</a>
                </td>
                 </tr>
                 <?php 
            }
            ?>

           
        </tbody>
    </table>
    <?php 
        }else{
            echo "<h3>No Record Form</h3>";
        }
    ?>
</div>
</div>
</body>
</html>
