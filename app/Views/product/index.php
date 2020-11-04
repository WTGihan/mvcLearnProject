<?php include(VIEWS.'inc/header.php'); ?>   

    <div class="content">
            <div class="tablecard">
                <div class="card">
                    <div class="cardheader">
                        <div class="options">
                            <h4>Product View Table 
                            <span>
                                <a href="<?php url('/product/add/'); ?>" class="addnew"><i class="material-icons">add</i>Add New</a> 
                                <a href="#" class="refresh"><i class="material-icons">refresh</i>Refresh</a> 
                            </span>
                        </h4>  
                            
                        </div>
                        <p class="textfortabel">Product View Following Table</p>
                    </div>
                    <div class="cardbody">
                        <div class="tablebody">
                            <table>
                                <thead>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Price</th>
                                  <th>Description</th>
                                  <th>Edit</th>
                                  <th>Delete</th>  
                                </thead>
                                <?php $i=1; ?>
                                <?php foreach($products as $row): ?>
                                <tbody>
                                
                                    <td><?php echo $i; $i++; ?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['price'];?></td>
                                    <td><?php echo $row['description'];?></td>
                                    <td><a href="<?php url('/product/edit/'.$row['id']); ?>" class="edit"><i class="material-icons">edit</i>Edit</a></td>
                                    <td><a href="<?php url('/product/delete/'.$row['id']); ?>" class="delete"><i class="material-icons">delete</i>Delete</a></td>
                                
                                </tbody>
                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>



<?php include(VIEWS.'inc/footer.php'); ?>
    

