<div>
    <div>
        <div>
            Thêm mới khách hàng
        </div>
        <div>
            <div>
                <form action="" method="post">
                    <div>
                        <label for="">product_name</label>
                        <input type="text" name="product_name">
                        <?php if (isset($errors['product_name'])): ?>
                            <p><?php echo $errors['product_name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">productLine</label>
                        <input type="text" name="productLine">
                        <?php if (isset($errors['productLine'])): ?>
                            <p><?php echo $errors['productLine'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">price</label>
                        <input type="text" name="price">
                        <?php if (isset($errors['price'])): ?>
                            <p><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">Amount</label>
                        <input type="text" name="Amount">
                        <?php if (isset($errors['Amount'])): ?>
                            <p><?php echo $errors['Amount'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">DateCreated</label>
                        <input type="date" name="DateCreated">
                        <?php if (isset($errors['DateCreated'])): ?>
                            <p><?php echo $errors['DateCreated'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">productDetail</label>
                        <input type="text" name="productDetail">
                        <?php if (isset($errors['productDetail'])): ?>
                            <p><?php echo $errors['productDetail'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit">Save</button>
                    <a href="index.php" type="button">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
