
<section class="content" style="margin-left: 25%">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Cập nhật thông tin khách hàng</h3>
                </div>
                <?php
                ?>
                <form method="post" action="./index.php?page=edit">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $category->id; ?>"/>
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $category->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <input type="radio" class="form-control"   value="<?php echo $category->status; ?>" name="status">Còn hàng
                            <input type="radio" class="form-control"  value="<?php echo $category->status; ?>" name="status">Hết hàng
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>



        </div>


    </div>
</section>
