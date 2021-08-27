
<section class="content" style="margin-left: 25%">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> Thêm mới About</h3>
                                </div>
                                <?php
                                if(isset($message)){
                                    echo "<p class='alert-info'>$message</p>"; 
                                }
                                ?>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ảnh</label>
                                            <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Content</label>
                                            <!-- <input type="dec" class="form-control" id="exampleInputEmail1" name="content"> -->
                                            <textarea name="content" ></textarea>
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputPassword1">Trạng thái</label>
                                            <input type="radio" class="form-control" id="exampleInputPassword1" value="1" name="status">Còn hàng
                                            <input type="radio" class="form-control" id="exampleInputPassword1" value="0" name="status">Hết hàng
                                        </div>
                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <!-- <select class="form-control" name="category_id">
                                                <?php foreach ($category as $value) {?>
                                                    <option value="<?php echo $value->id?>" ><?php echo $value->name ?></option>
                                                <?php }?>

                                            </select> -->
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