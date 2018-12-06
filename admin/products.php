<?php $title="Products"; ?>

<?php include_once "includes/head.php"?>

<?php include_once "includes/nav.php" ?>

<?php include_once "includes/sidebar.php" ?>
    <!-- Breadcrumbs-->
<?php include_once "includes/breadcrumb.php"?>
            <!-- Content-->
            <form>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="ProductID">ID</label>
                            <input type="text" class="form-control" id="ProductID" placeholder="Product ID">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ProductName">Name</label>
                            <input type="text" class="form-control" id="ProductName" placeholder="Product Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ProductDescription">Description</label>
                            <input type="text" class="form-control" id="ProductDescription" placeholder="Product Description">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="UnitPrice">Unit Price</label>
                            <input type="text" class="form-control" id="UnitPrice" placeholder="Product Unit Price">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ProductQTY">Quantity</label>
                            <input type="text" class="form-control" id="ProductQTY" placeholder="Product Quantity">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="ProductImage">Product Image</label>
                            <input type="file" class="form-control-file ui" id="ProductImage" placeholder="Choose Image">
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
                <button type="submit" class="btn btn-success">Update Product</button>
                <button type="submit" class="btn btn-danger">Remove Product</button>
            </form>
                <br><br>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Quantity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Optimum Nutrition</td>
                    <td>Whey Protein</td>
                    <td>4500.00</td>
                    <td>234</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Optimum Nutrition</td>
                    <td>Whey Protein</td>
                    <td>4500.00</td>
                    <td>234</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Optimum Nutrition</td>
                    <td>Whey Protein</td>
                    <td>4500.00</td>
                    <td>234</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Optimum Nutrition</td>
                    <td>Whey Protein</td>
                    <td>4500.00</td>
                    <td>234</td>
                </tr><tr>
                    <th scope="row">1</th>
                    <td>Optimum Nutrition</td>
                    <td>Whey Protein</td>
                    <td>4500.00</td>
                    <td>234</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Optimum Nutrition</td>
                    <td>Whey Protein</td>
                    <td>4500.00</td>
                    <td>234</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>