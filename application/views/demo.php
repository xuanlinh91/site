<?php include('header.php');?>
    <div class="row">
            <div class="slider col-lg-10 col-lg-offset-1">
                <div id="slider1_container" style="display: none; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

                    <!-- Loading Screen -->
                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                        </div>
                        <div style="position: absolute; display: block; background: url(/site/image/slider/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                    </div>

                    <!-- Slides Container -->
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                        <div>
                            <img u="image" src2="/site/image/slider/home/01.jpg" />
                        </div>
                        <div>
                            <img u="image" src2="/site/image/slider/home/02.jpg" />
                        </div>
                        <div>
                            <img u="image" src2="/site/image/slider/home/03.jpg" />
                        </div>
                        <div>
                            <img u="image" src2="/site/image/slider/home/04.jpg" />
                        </div>
                    </div>

                    <!--#region Bullet Navigator Skin Begin -->
                    <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                    <style>
                        /* jssor slider bullet navigator skin 05 css */
                        /*
                        .jssorb05 div           (normal)
                        .jssorb05 div:hover     (normal mouseover)
                        .jssorb05 .av           (active)
                        .jssorb05 .av:hover     (active mouseover)
                        .jssorb05 .dn           (mousedown)
                        */
                        .jssorb05 {
                            position: absolute;
                        }
                        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                            position: absolute;
                            /* size of bullet elment */
                            width: 16px;
                            height: 16px;
                            background: url(/site/image/slider/b05.png) no-repeat;
                            overflow: hidden;
                            cursor: pointer;
                        }
                        .jssorb05 div { background-position: -7px -7px; }
                        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                        .jssorb05 .av { background-position: -67px -7px; }
                        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
                    </style>
                    <!-- bullet navigator container -->
                    <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                        <!-- bullet navigator item prototype -->
                        <div u="prototype"></div>
                    </div>
                    <!--#endregion Bullet Navigator Skin End -->

                    <!--#region Arrow Navigator Skin Begin -->
                    <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
                    <style>
                        /* jssor slider arrow navigator skin 11 css */
                        /*
                        .jssora11l                  (normal)
                        .jssora11r                  (normal)
                        .jssora11l:hover            (normal mouseover)
                        .jssora11r:hover            (normal mouseover)
                        .jssora11l.jssora11ldn      (mousedown)
                        .jssora11r.jssora11rdn      (mousedown)
                        */
                        .jssora11l, .jssora11r {
                            display: block;
                            position: absolute;
                            /* size of arrow element */
                            width: 37px;
                            height: 37px;
                            cursor: pointer;
                            background: url(/site/image/slider/a11.png) no-repeat;
                            overflow: hidden;
                        }
                        .jssora11l { background-position: -11px -41px; }
                        .jssora11r { background-position: -71px -41px; }
                        .jssora11l:hover { background-position: -131px -41px; }
                        .jssora11r:hover { background-position: -191px -41px; }
                        .jssora11l.jssora11ldn { background-position: -251px -41px; }
                        .jssora11r.jssora11rdn { background-position: -311px -41px; }
                    </style>
                    <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
                    <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
                    <!--#endregion Arrow Navigator Skin End -->
                    <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
                </div>
            </div>
        </div>
                <div class="content">
                    <div class="col-lg-12 col-lg-offset-1">
                        <div class="row">
                            <div class="left-bar col-lg-7">
                                <div class="row">
                                    <div class="box box1 box-left col-lg-7">
                                        <a href="<?php echo site_url('article/article_view/').'/'.$result[0]['ID']?>">
                                            <div class="box-content">
                                                <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[0]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                                <div class="other">
                                                    <span class="category"><?php echo strtoupper($result[0]['NAME']); ?></span>
                                                    <h2 class="content"><?php echo $result[0]['TITLE']; ?></h2>
                                                    <time class="date"><?php echo date('d/m/Y', strtotime($result[0]['DATE_PUBLISH'])); ?></time>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box box2 box-left col-lg-5">
                                        <a href="<?php echo site_url('article/article_view').'/'.$result[1]['ID']?>">
                                            <div class="box-content">
                                                <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[1]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                                <div class="other">
                                                    <span class="category"><?php echo strtoupper($result[1]['NAME']); ?></span>
                                                    <h2 class="content"><?php echo $result[1]['TITLE']; ?></h2>
                                                    <time class="date"><?php echo date('d/m/Y', strtotime($result[1]['DATE_PUBLISH'])); ?></time>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box box3 box-left col-lg-12">
                                        <a href="<?php echo site_url('article/article_view').'/'.$result[2]['ID']?>">
                                            <div class="box-content">
                                                <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[2]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                                <div class="other">
                                                    <span class="category"><?php echo strtoupper($result[2]['NAME']); ?></span>
                                                    <h2 class="content"><?php echo $result[2]['TITLE']; ?></h2>
                                                    <time class="date"><?php echo date('d/m/Y', strtotime($result[2]['DATE_PUBLISH'])); ?></time>
                                                </div>
                                            </div>
                                        </a>
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
                                        <a href="<?php echo site_url('article/article_view').'/'.$result[3]['ID']?>">
                                            <div class="box-content">
                                                <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[3]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                                <div class="other">
                                                    <span class="category"><?php echo strtoupper($result[3]['NAME']); ?></span>
                                                    <h2 class="content"><?php echo $result[3]['TITLE']; ?></h2>
                                                    <time class="date"><?php echo date('d/m/Y', strtotime($result[3]['DATE_PUBLISH'])); ?></time>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box box5 box-left col-lg-5">
                                        <a href="<?php echo site_url('article/article_view').'/'.$result[4]['ID']?>">
                                            <div class="box-content">
                                                <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[4]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                                <div class="other">
                                                    <span class="category"><?php echo strtoupper($result[4]['NAME']); ?></span>
                                                    <h2 class="content"><?php echo $result[4]['TITLE']; ?></h2>
                                                    <time class="date"><?php echo date('d/m/Y', strtotime($result[4]['DATE_PUBLISH'])); ?></time>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box box5 box-left col-lg-12">
                                        <a href="<?php echo site_url('article/article_view').'/'.$result[5]['ID']?>">
                                            <div class="box-content">
                                                <div class="thumb"><?php echo img(array('src'=> '/uploads/images/'.$result[5]['THUMB'], 'alt'=> 'alt information', 'width'=>'100%')); ?></div>
                                                <div class="other">
                                                    <span class="category"><?php echo strtoupper($result[5]['NAME']); ?></span>
                                                    <h2 class="content"><?php echo $result[5]['TITLE']; ?></h2>
                                                    <time class="date"><?php echo date('d/m/Y', strtotime($result[2]['DATE_PUBLISH'])); ?></time>
                                                </div>
                                            </div>
                                        </a>
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