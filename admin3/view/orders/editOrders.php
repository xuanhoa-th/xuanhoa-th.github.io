<section class="content" style="margin-left: 25%">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Cập nhật đặt bàn</h3>
                </div>
                <?php
                ?>
                <form method="post" action="./index.php?page=editOrders">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $order->id; ?>"/>
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                   value="<?php echo $order->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                   value="<?php echo $order->email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="phone"
                                   value="<?php echo $order->phone; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="address"
                                   value="<?php echo $order->address; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="number"
                                   value="<?php echo $order->number; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ghi chú</label>
                            <textarea name="note" value="<?php echo $order->content ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày đặt</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="created_at" value="<?php echo $order->created_at; ?>">
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
