
<section class="content" style="margin-left: 25%">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Danh mục</h3>
                                </div>
                                <?php
                                if(isset($message)){
                                    echo "<p class='alert-info'>$message</p>"; 
                                }
                                ?>
                                <form method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên danh mục</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Trạng thái</label>
                                            <input type="radio" class="form-control" id="exampleInputPassword1" value="1" name="status">Còn hàng
                                            <input type="radio" class="form-control" id="exampleInputPassword1" value="0" name="status">Hết hàng
                                        </div>

                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                                    </div>
                                </form>
                            </div>
                           
                           

                        </div>
                       
                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->