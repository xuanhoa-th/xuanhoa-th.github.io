
<section class="content" style="margin-left: 15%">
    <div class="row">
        <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Danh sách đặt hàng</h3>
                    <a href=" <?php echo 'index.php?page=addProduct' ?> " class="btn btn-success btn-xl" style="color: white ; margin-left:82%; " ;>Thêm đặt hàng</a>
                </div><!-- /.box-header -->
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa  chỉ</th>
                        <th>Số lượng</th>
                        <th>ghi chú</th>
                        <th>Ngày đặt</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $key => $value): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $value->name ?></td>
                            <td><?php echo $value->email ?></td>
                            <td><?php echo $value->phone ?></td>
                            <td><?php echo $value->address ?></td>
                            <td><?php echo $value->number ?></td>
                            <td><?php echo $value->note ?></td>
                            <td><?php echo $value->created_at ?></td>

                            

                            <td> <a href="./index.php?page=deleteOrders&id=<?php echo $value->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
                            <td> <a href="./index.php?page=editOrders&id=<?php echo $value->id; ?>" class="btn btn-sm btn-success">Update</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->