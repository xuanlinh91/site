<?php include('header.php');?>
                <div class="content">
                    <div class="col-lg-12 col-lg-offset-1">
                        <div class="row">
                            <div class="left-bar col-lg-7">
                                <div class="row">
                                    <div class="box box1 box-left col-lg-7">
                                        <div class="box-content">
                                            <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[0]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                            <div class="other">
                                                <span class="category"><?php echo strtoupper($result[0]['NAME']); ?></span>
                                                <h2 class="content"><?php echo $result[0]['TITLE']; ?></h2>
                                                <time class="date"><?php echo date('d/m/Y', strtotime($result[0]['DATE_PUBLISH'])); ?></time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box box2 box-left col-lg-5">
                                        <div class="box-content">
                                            <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[1]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                            <div class="other">
                                                <span class="category"><?php echo strtoupper($result[1]['NAME']); ?></span>
                                                <h2 class="content"><?php echo $result[1]['TITLE']; ?></h2>
                                                <time class="date"><?php echo date('d/m/Y', strtotime($result[1]['DATE_PUBLISH'])); ?></time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box box3 box-left col-lg-12">
                                        <div class="box-content">
                                            <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[2]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                            <div class="other">
                                                <span class="category"><?php echo strtoupper($result[2]['NAME']); ?></span>
                                                <h2 class="content"><?php echo $result[2]['TITLE']; ?></h2>
                                                <time class="date"><?php echo date('d/m/Y', strtotime($result[2]['DATE_PUBLISH'])); ?></time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box sidebar col-lg-3">
                                <div class="sidebar-box #1">
                                    <?php echo img(array('src'=>'/image/side-bar.jpg', 'alt'=> 'alt information', 'width'=>'100%')); ?>
                                </div>
                                <div class="sidebar-box #2">
                                    <?php echo img(array('src'=>'/image/box-4.png', 'alt'=> 'alt information', 'width'=>'100%')); ?>
                                </div>
                            </div>
                            <div class="left-bar col-lg-7">
                                <div class="row">
                                    <div class="box box4 box-left col-lg-7">
                                        <div class="box-content">
                                            <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[3]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                            <div class="other">
                                                <span class="category"><?php echo strtoupper($result[3]['NAME']); ?></span>
                                                <h2 class="content"><?php echo $result[3]['TITLE']; ?></h2>
                                                <time class="date"><?php echo date('d/m/Y', strtotime($result[3]['DATE_PUBLISH'])); ?></time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box box5 box-left col-lg-5">
                                        <div class="box-content">
                                            <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[4]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                            <div class="other">
                                                <span class="category"><?php echo strtoupper($result[4]['NAME']); ?></span>
                                                <h2 class="content"><?php echo $result[4]['TITLE']; ?></h2>
                                                <time class="date"><?php echo date('d/m/Y', strtotime($result[4]['DATE_PUBLISH'])); ?></time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box box5 box-left col-lg-12">
                                        <div class="box-content">
                                            <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[5]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                            <div class="other">
                                                <span class="category"><?php echo strtoupper($result[5]['NAME']); ?></span>
                                                <h2 class="content"><?php echo $result[5]['TITLE']; ?></h2>
                                                <time class="date"><?php echo date('d/m/Y', strtotime($result[2]['DATE_PUBLISH'])); ?></time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box sidebar col-lg-3">
                                <div class="sidebar-box #1">
                                    <?php echo img(array('src'=>'/image/side-bar.jpg', 'alt'=> 'alt information', 'width'=>'100%')); ?>
                                </div>
                                <div class="sidebar-box #2">
                                    <?php echo img(array('src'=>'/image/box-4.png', 'alt'=> 'alt information', 'width'=>'100%')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ('footer.php');?>