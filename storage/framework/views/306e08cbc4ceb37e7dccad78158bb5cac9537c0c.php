
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.EditNewsCategories')); ?> <small><?php echo e(trans('labels.EditNewsCategories')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/listingNewsCategories')); ?>"><i class="fa fa-bars"></i> Categories</a></li>
      <li class="active"><?php echo e(trans('labels.EditNewsCategories')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.EditNewsCategories')); ?> </h3>
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
                        <!--<div class="box-header with-border">
                          <h3 class="box-title">Edit category</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                         
                            <?php echo Form::open(array('url' =>'admin/updateNewsCategory', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

                              
                                <?php echo Form::hidden('id',  $result['editCategory'][0]->id , array('class'=>'form-control', 'id'=>'id')); ?>

                                <?php echo Form::hidden('oldImage',  $result['editCategory'][0]->image , array('id'=>'oldImage')); ?>

                                <?php echo Form::hidden('oldIcon',  $result['editCategory'][0]->icon , array('id'=>'oldIcon')); ?>

                                
                                
                                <?php $i = 0; $j=0;?>
                                <?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$languages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                	
                                    <?php if(!empty($result['editCategory'][$j]->language_id)): ?> 
                                    <input type="hidden" name="categories_description_id_<?=$languages->languages_id?>" value="<?php echo e($result['editCategory'][$i]->categories_description_id); ?>">
                                    <?php endif; ?>
                                    <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Name')); ?> (<?php echo e($languages->name); ?>)</label>
                                      <div class="col-sm-10 col-md-4">
                                        <input type="text" name="categoryName_<?=$languages->languages_id?>" class="form-control field-validate" <?php if(!empty($result['editCategory'][$j]->language_id)): ?> value="<?php echo e($result['editCategory'][$i]->name); ?>" <?php endif; ?>>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
										<?php echo e(trans('labels.NewsCategoryName')); ?> (<?php echo e($languages->name); ?>)</span>
                                        <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                      </div>
                                    </div>
                                 
                                 <?php 
								 	if(count($result['editCategory'])>1) { $i++; }
								 	$j++;
								  ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Image')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::file('newImage', array('id'=>'newImage')); ?>

                                  <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.UploadNewsImage')); ?></span>
                                  <br>
                
                                    <img src="<?php echo e(asset('').$result['editCategory'][0]->image); ?>" alt="" width=" 100px">
                                  </div>
                                </div>
                                
                                <!--<div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Icon</label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::file('newIcon', array('id'=>'newIcon')); ?><br>
                
                                    <img src="<?php echo e(asset('').$result['editCategory'][0]->icon); ?>" alt="" width=" 100px">
                                  </div>
                                </div>-->
                                
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Update')); ?></button>
                                <a href="<?php echo e(URL::to('admin/listingNewsCategories')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
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