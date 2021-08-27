
<section class="content" style="margin-left: 25%">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Thêm mới banner</h3>
                                </div>
                                <?php
                                if(isset($message)){
                                    echo "<p class='alert-info'>$message</p>"; 
                                }
                                ?>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên banner</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="content">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Ảnh</label>
                                             <input type="file" class="form-control" id="exampleInputEmail1" name="image">
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