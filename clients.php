
<?php
$clients=true;
include_once("header.php");
include_once("main.php");
?>
<!-- Begin page content -->

     <h1 class="mt-5">clients</h1>
        
     <?php
     
$querry="select * from clients";
$pdostmt=$pdo->prepare($querry);
$pdostmt->execute();
var_dump($pdostmt->fetchAll());

?>
        <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
            </tr>
            
        </tbody>
        </table>
    </div>
  
</main>


<?php
include_once("footer.php");
?>
