<?php
include 'error.php';
$products = array(
    "Electronics" => array(
        "Television" => array(
            array(
                "id" => "PR001",
                "name" => "MAX-001",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia"
            ),
            array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple"
            )
        ),
        "Mobile" => array(
            array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola"
            ),
            array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple"
            )
        )
    ),
    "Jewelry" => array(
        "Earrings" => array(
            array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard"
            ),
            array(
                "id" => "PR008",
                "name" => "BIG-301",
                "brand" => "Bravia"
            ),
            array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff"
            ),
            array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany"
            )
        )
    )
);
// echo "<pre>";
// print_r($products);
// echo "</pre>";

?>

<h2>Task 1: Getting All Records</h2>
<!-- Task 2.1: Getting All Records -->
<table>
    <tr>
        <th>Category</th>
        <th>Sub Category</th>
        <th>Id</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php foreach ($products as $category => $data) {
        foreach ($data as $subCategory => $values) { ?>
            <?php foreach ($values as $key => $value) { ?>
                <tr>
                    <td><?= $category ?></td>
                    <td><?= $subCategory ?></td>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['brand'] ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</table>
<br><br>
<!-- Task 2.1 : End -->
<h2>Task 2 : Getting Mobile Subcategory Record Only</h2>
<!-- Task 2.2 : Getting Mobile Subcategory Record Only -->
<table>
    <tr>
        <th>Category</th>
        <th>Sub Category</th>
        <th>Id</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php foreach ($products as $category => $data) {
        foreach ($data as $subCategory => $values) { ?>
            <?php if ($subCategory == 'Mobile') { ?>
                <?php foreach ($values as $key => $value) { ?>
                    <tr>
                        <td><?= $category ?></td>
                        <td><?= $subCategory ?></td>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['brand'] ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</table>
<!-- Task 2.2 : End -->
<br><br>
<!-- Task 2.3 : start -->
<h2>List all products with their id, name, subcategory and category with brand name = "Samsung" like this</h2>
<table>
    <tr>
        <th>Category</th>
        <th>Sub Category</th>
        <th>Id</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php foreach ($products as $category => $data) {
        foreach ($data as $subCategory => $values) { ?>
            <?php foreach ($values as $key => $value) { ?>
                <?php if ($value['brand'] == 'Samsung') { ?>
                    <tr>
                        <td><?= $category ?></td>
                        <td><?= $subCategory ?></td>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['brand'] ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</table>
<br><br>
<!-- Task 2.3 : end -->
<!-- Task 2.4 : start -->
<h2>Delete Row(unset) in above array product with id = PR003 and display in table format as above</h2>
<table>
    <tr>
        <th>Category</th>
        <th>Sub Category</th>
        <th>Id</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php foreach ($products as $category => $data) {  
        foreach ($data as $subCategory => $values) { ?>
            <?php foreach ($values as $key => $value) { ?>
                <?php if ($value['id'] == 'PR003') { ?>
                    <?php  unset($products[$category][$subCategory][$key]);?>
            <?php } ?>
        <?php } ?>
    <?php }} ?>
    <?php foreach ($products as $category => $data) {  
        foreach ($data as $subCategory => $values) { ?>
            <?php foreach ($values as $key => $value) { ?>
                <tr>
                    <td><?= $category ?></td>
                    <td><?= $subCategory ?></td>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['brand'] ?></td>
                </tr>
        <?php } ?>
    <?php } ?>
<?php } ?>
</table>
<!-- task 2.4    :       end -->
<br><br>
<!-- task 2.5    :       start -->
<h2>02.01.05_Update product name = "BIG-555" with id = PR002, and display in table format as above</h2>
<table>
    <tr>
        <th>Category</th>
        <th>Sub Category</th>
        <th>Id</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php foreach ($products as $category => $data) {  
        foreach ($data as $subCategory => $values) { ?>
            <?php foreach ($values as $key => $value) { ?>
                <?php if ($value['id'] == 'PR002') { ?>
                    <?php  $products[$category][$subCategory][$key]['name']="BIG-555";?>
                    
            <?php } ?>
        <?php } ?>
    <?php }} ?>
    <?php foreach ($products as $category => $data) {  
        foreach ($data as $subCategory => $values) { ?>
            <?php foreach ($values as $key => $value) { ?>
                <tr>
                    <td><?= $category ?></td>
                    <td><?= $subCategory ?></td>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['brand'] ?></td>
                </tr>
        <?php } ?>
    <?php } ?>
<?php } ?>
</table>
<br><br>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>