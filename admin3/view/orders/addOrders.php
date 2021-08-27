
<section class="content" style="margin-left: 25%">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> Thêm mới Đặt bàn</h3>
                                </div>
                                <?php
                                if(isset($message))
                                    echo "<p class='alert-info'>$message</p>";   
                                ?>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Địa chỉ</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số lượng</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ghi  chú</label>
                                            <!-- <input type="dec" class="form-control" id="exampleInputEmail1" name="content"> -->
                                            <textarea name="note" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ngày đặt</label>
                                            <input type="date" class="form-control" id="exampleInputEmail1" name="created_at">
                                        </div>  
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</section><!-- /.content -->