
<section class="content" style="margin-left: 25%">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Sữa banner</h3>
                                </div>
                                
                                <form method="post" enctype="multipart/form-data" action="./index.php?page=editBanner">
                                    <div class="box-body">
                                        <input type="hidden" name="id" value="<?php echo $banner->id ?>">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên banner</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $banner->name; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả</label>
                                            <input type="text" class="form-control" name="content" value="<?php echo $banner->content; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Ảnh</label>
                                            <img width="50px" src="<?php echo 'uploads/Banner/'. $banner->image ?>" alt="">
                                            
                                             <input type="file" class="form-control" name="image" value="<?php echo $banner->image ?>" >
                                        </div>

                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                                    </div>
                                </form>
                            </div>
                           
                           

                        </div>
                       
                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->