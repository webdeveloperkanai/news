<?php require "./header.php" ?>
    <header>
        <div class="topBar">
                <h3 class="title">
                      <i class="fa fa-user-circle" onclick="location.href='./profile.php'"></i>
                      
                        Ultra News Max <i class="fa fa-cog"></i>
                    </h3>
        </div>
    </header>

    <main>

        <div class="body">
            
            <?php for ($i=0; $i < 30; $i++) { 
               ?>
               
            <div class="post" onclick="window.location.href='single.php?p=<?php echo $i ?>'">
                    <div class="thumbnail">
                        <img src="./img/image.png" alt="">
                    </div>

                        <div class="description">
                            <h4>Title</h4>
                            <span>
                                <small>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa non facere accusamus inventore totam ut voluptate in quisquam deserunt veniam minima ratione corporis quo, aut repellendus quidem facilis porro doloremque.
                                </small>
                            </span>
                        </div>
                
            </div>

            <?php }?>
        </div>
    </main>




<?php require "./footer.php" ?>