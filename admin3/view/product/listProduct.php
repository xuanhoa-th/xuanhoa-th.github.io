
<section class="content" style="margin-left: 15%">
    <div class="row">
        <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Danh sách Danh mục</h3>
                    <a href=" <?php echo 'index.php?page=addProduct' ?> " class="btn btn-success btn-xl" style="color: white ; margin-left:82%; " ;>Thêm sản phẩm</a>
                </div><!-- /.box-header -->
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($product as $key => $value): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $value->name ?></td>
                            <td><img width="50px" src="<?php echo 'uploads/'. $value->image ?>" alt=""></td>
                            <td><?php echo $value->price ?></td>

                            <?php $check = ($value->status == 1) ? 'Còn sản phẩm' : 'Hết sản phẩm' ?>
                            <td> <?php echo $check ?></td>

                            <td> <a href="./index.php?page=deleteProduct&id=<?php echo $value->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
                            <td> <a href="./index.php?page=edit&id=<?php echo $value->id; ?>" class="btn btn-sm btn-success">Update</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->