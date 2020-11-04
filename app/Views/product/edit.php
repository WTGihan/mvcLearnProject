<?php include(VIEWS.'inc/header.php'); ?>   
    
<h1>Edit Product</h1>

<?php if(isset($success)): ?>
    <h2><?php echo $success; ?></h2>
<?php endif; ?> 
<?php if(isset($error)): ?>
    <h2><?php echo $error; ?></h2>
<?php endif; ?>   


<div class="content">
            <div class="tablecard">
                <div class="card">
                    <div class="cardheader">
                        <div class="options">
                            <h4>Add New Product</h4>  
                            
                        </div>
                        <p class="textfortabel">Complete Following Details</p>
                    </div>
                    <div class="cardbody">
                     <form action="<?php url('product/update/'.$row['id']); ?>" method="post">
                            <div class="row">
                                <label for="#"><i class="material-icons">important_devices</i>Product Name:</label>
                                <input type="text" placeholder="" value="<?php echo $row['name']; ?>" name="name">
                            </div>
                            <div class="row">
                                <label for="#"><i class="material-icons">request_quote</i>Product Price:</label>
                                <input type="text" placeholder="" value="<?php echo $row['price']; ?>" name="price">
                            </div>
                            <div class="row">
                                <label for="#"><i class="material-icons">description</i>Product Description:</label>
                                <input type="text" placeholder="" value="<?php echo $row['description']; ?>" name="description">
                            </div>
                            
                            <div class="row">
                                <div class="button">
                                    <button type="sumbit" name="submit" class="save">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                
            </div>
        </div>

<?php include(VIEWS.'inc/footer.php'); ?>
    

