<style>
    th , td{
        border: 1px solid;
        text-align: left;
        padding: 1px;
    }
    button{
        background: #1c7430;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
</style>
<form  action="index.php?page=search" class="form-inline my-2 my-lg-0" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<a href="index.php?page=add_products">ADD</a>
<table class="table-list" style="border: 1px solid" >
    <tr>
        <th>stt</th>
        <th>Product_id</th>
        <th>Product_name</th>
        <th>ProductLine</th>
        <th>Price</th>
        <th>Amount</th>
        <th>DateCreated</th>
        <th>ProductDetail</th>
        <th>Action</th>

    </tr>
    <?php foreach ($products as $key=> $product ):?>

        <tr>
            <td><?php echo ++$key ?></td>
            <td> <a href="index.php?page=products" <?php echo $product['product_id']?>>

                    <?php  echo 'DH-'.$product['product_id'] ?>
                </a>
            </td>
            <td><?php echo $product['product_name']?></td>
            <td><?php echo $product['productLine']?></td>
            <td><?php echo $product['price'] ?></td>
            <td><?php echo $product['amount'] ?></td>
            <td><?php echo $product['dateCreated'] ?></td>
            <td><?php echo $product['productDetail'] ?></td>
            <td>
                <a href="./index.php?page=delete&id=<?php echo  $product['product_id']; ?>"
                   class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xoá?')">DELETE</a>
                <a  href="./index.php?page=edit&id=<?php echo $product['products_id']; ?>"
                class="btn btn-primary" >UPDATE</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
