
<section class="content" style="margin-left: 15%">
    <div class="row">
        <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Danh sách Banner</h3>
                </div><!-- /.box-header -->
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($banners as $key => $value): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $value->name ?></td>
                            <td><img width="50px" src="<?php echo 'uploads/Banner/'. $value->image ?>" alt=""></td>
                            <td><?php echo $value->content ?></td>

                            <td> <a href="./index.php?page=deleteBanner&id=<?php echo $value->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
                            <td> <a href="./index.php?page=editBanner&id=<?php echo $value->id; ?>" class="btn btn-sm btn-success">Update</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->