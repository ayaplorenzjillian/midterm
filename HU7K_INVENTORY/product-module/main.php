<h3>Product Details</h3>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>#</th>
        <th>Product Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Type</th>
        <th>Price</th>
      </tr>
      
<?php
$count = 1;
$count = 1;
if($product->list_product() != false){
foreach($product->list_product() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td></td>
        <td><a href="index.php?page=settings&subpage=products&action=profile&id=<?php echo $prod_id;?>"><?php echo $prod_name;?></a></td>
        <td><?php echo $prod_description;?></td>
        <td><?php echo $product->get_prod_type_name($product->get_prod_type($prod_id));?></td>
        <td>Php <?php echo $product->get_prod_price($prod_id);?></td>
      </tr>
      <tr>
<?php
 $count++;
}
}else{
  echo "No Record Found.";
}
?>
    </table>
</div>