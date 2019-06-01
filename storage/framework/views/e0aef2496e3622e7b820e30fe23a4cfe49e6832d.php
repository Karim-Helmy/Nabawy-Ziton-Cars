
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.AddBanner')); ?> <small><?php echo e(trans('labels.AddBanner')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/listingBanners')); ?>"><i class="fa fa-bars"></i> List All Banners</a></li>
      <li class="active"><?php echo e(trans('labels.AddBanner')); ?></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo e(trans('labels.AddBanner')); ?></h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                        <br>                       
                        <?php if(count($errors) > 0): ?>
                              <?php if($errors->any()): ?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <?php echo e($errors->first()); ?>

                                </div>
                              <?php endif; ?>
                          <?php endif; ?>
                        
                        <!-- form start -->                        
                         <div class="box-body">
                         
                            <?php echo Form::open(array('url' =>'admin/addNewBanner', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Title')); ?> </label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('banners_title', '', array('class'=>'form-control field-validate','id'=>'banners_title')); ?>

                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.BannerTitletext')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Image')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::file('newImage', array('id'=>'newImage')); ?>

                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.ImageBannerText')); ?></span>
                                    <br>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Type')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="type" id="bannerType">
                                          <option value="category"><?php echo e(trans('labels.ChooseSubCategory')); ?></option>
                                          <option value="product"><?php echo e(trans('labels.Product')); ?></option>
                                          <option value="top seller"><?php echo e(trans('labels.TopSeller')); ?></option>
                                          <option value="deals"><?php echo e(trans('labels.Deals')); ?></option>
                                          <option value="most liked"><?php echo e(trans('labels.MostLiked')); ?></option>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.AddBannerText')); ?></span>
                                  </div>
                                </div>
                                
                                <!--<div class="form-group banner-link">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Banners Link </label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('banners_url', '', array('class'=>'form-control','id'=>'banners_url')); ?>

                                  </div>
                                </div>-->
                                
                                <div class="form-group categoryContent">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Categories')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="categories_id" id="categories_id">
                                      <?php $__currentLoopData = $result['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                		<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.CategoriesbannerText')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group productContent" style="display: none">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Products')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="products_id" id="products_id">
                                      <?php $__currentLoopData = $result['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                		<option value="<?php echo e($products_data->products_id); ?>"><?php echo e($products_data->products_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.ProductsBannerText')); ?></span>
                                  </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ExpiryDate')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                    <input readonly class="form-control datepicker field-validate" type="text" name="expires_date" value="">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    <?php echo e(trans('labels.ExpiryDateBanner')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Status')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="status">
                                          <option value="1"><?php echo e(trans('labels.Active')); ?></option>
                                          <option value="0"><?php echo e(trans('labels.InActive')); ?></option>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.StatusBannerText')); ?></span>
                                  </div>
                                </div>
                                
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.AddBanner')); ?></button>
                                <a href="<?php echo e(URL::to('admin/listingBanners')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
                              </div>
                              <!-- /.box-footer -->
                            <?php echo Form::close(); ?>

                        </div>
                  </div>
              </div>
            </div>
            
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>