<style>
    .blogShort{ border-bottom:1px solid #ddd;}
    .add{background: #333; padding: 10%; height: 300px;}

    .nav-sidebar { 
        width: 100%;
        padding: 8px 0; 
        border-right: 1px solid #ddd;
    }
    .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
    }
    .nav-sidebar .active a { 
        cursor: default;
        background-color: #34ca78; 
        color: #fff; 
    }
    .nav-sidebar .active a:hover {
        background-color: #37D980;   
    }
    .nav-sidebar .text-overflow a,
    .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis; 
    }

    .btn-blog {
        color: #ffffff;
        background-color: #37d980;
        border-color: #37d980;
        border-radius:0;
        margin-bottom:10px
    }
    .btn-blog:hover,
    .btn-blog:focus,
    .btn-blog:active,
    .btn-blog.active,
    .open .dropdown-toggle.btn-blog {
        color: white;
        background-color:#34ca78;
        border-color: #34ca78;
    }
    h2{color:#34ca78;}
    .margin10{margin-bottom:10px; margin-right:10px;}
</style>



<div class="container">
    <div id="blog" class="row"> 
        <br/><br/><br/> <br/>

        <h1 style="text-align: center">All Disease information here</h1>
        <br/><br/><br/> <br/>
        <h4 style="float: left"> <a href='<?php echo base_url() ?>blog' class="btn btn-info" >Blog-Insert</a></h4>
        <h4 style="float: left"> <a href='<?php echo base_url() ?>blog-view' class="btn btn-success" >Blog-View</a></h4><br/><br/>
        <div class="col-sm-2 paddingTop20">

            <nav class="nav-sidebar">
                <ul class="nav">
                  
                    <li><a href="javascript:;">Latest news</a></li>
                    <li><a href="javascript:;">Updates</a></li>
                    <li><a href="javascript:;">Training</a></li>
                    <li><a href="javascript:;">Nutrition</a></li>
                    <li><a href="javascript:;">Proteins</a></li>
                    <li><a href="javascript:;">Recipes</a></li>
                    <li><a href="javascript:;">Challenge</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="javascript:;"><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                </ul>
            </nav>
            <div><h2 class="add">Place for your add!</h2></div>
        </div>
        <div class="col-md-10 blogShort">
            <?php
            foreach ($allblog as $blog) {
                ?>


                <img src="<?php echo base_url() . "images/blog/blog-{$blog->id}.{$blog->picture}" ?>" class="pull-left img-responsive thumb margin10 img-thumbnail" width="75"/><br/>
                <h2><?php echo $blog->title ?></h2><br/>
                <em>Publishing date <a href="" target="_blank"><?php echo $blog->date ?></a></em>
                <article><p>

                        <?php
                        echo readfile(base_url() . "files/descr-{$blog->id}.txt");
                        ?>

                    </p></article>
                <a class="btn btn-blog pull-right marginBottom10" href="">READ MORE</a> 

                <?php
            }
            ?>
        </div>




        <div class="col-md-12 gap10"></div>
    </div>
</div>