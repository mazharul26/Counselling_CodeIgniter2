


<div class="container-fluid" style="background-color: #eee">
    <div class="row">
        <div class="col-sm-2" width="100"></div>
        <div class="col-sm-8">
            <br/><br/><br/><br/><br/>
            <h1><hr>Write your own Opinion about Disease<hr></h1>
            <br/><br/>
            <h4 style="float: left"> <a href='<?php echo base_url() ?>blog' class="btn btn-info" >Blog-Insert</a></h4>
            <h4 style="float: left"> <a href='<?php echo base_url() ?>blog-view' class="btn btn-success" >Blog-View</a></h4><br/><br/>
            <form method="post"  enctype="multipart/form-data">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo set_value('title') ?>" />

                <br/>

                <label>Content</label>
                <textarea type="text" name="content" class="form-control" value="" ></textarea><br/>
                <label>Picture</label>
                <input type="file" name="picture" value="" class="form-control" />
                <br/><br/>
                <label>Date</label>
                <input type="datetime" name="date" class="form-control"value="<?php echo set_value('date') ?>" />

                <br/><br/>
                <input type="submit" value="Blog-Save" name="blog_sub" />

                <br/><br/><br/><br/><br/><br/>
            </form>
        </div>
    </div>
</div>
