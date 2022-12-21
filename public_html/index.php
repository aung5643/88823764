<table>
<?php 
print_r($_GET);
print_r($_POST);
$a = 12;
for($i=1;$i<12;$i++){ ?>
<tr>
    <td>2 X <?php echo $a;?> X <?php echo $i;?></td>
    <td>=</td>
    <td><?php echo $a*$i;?></td>
</tr>
<?php } ?>
    <tr>
        <td>2 X 2</td>
        <td>=</td>
        <td>4</td>
    </tr>
</table>