
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.EditPage')); ?> <small><?php echo e(trans('labels.EditPage')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/listingPages')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.ListingAllPages')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.EditPage')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.EditPage')); ?> </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                        <!--<div class="box-header with-border">
                          <h3 class="box-title"><?php echo e(trans('labels.EditPage')); ?></h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                          <?php if( count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-success" role="alert">
                                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                      <span class="sr-only"><?php echo e(trans('labels.Error')); ?>:</span>
                                      <?php echo e($error); ?>

                                </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        
                            <?php echo Form::open(array('url' =>'admin/updatePage', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

                            	
                            <?php echo Form::hidden('id',  $result['editPage'][0]->page_id, array('class'=>'form-control', 'id'=>'id')); ?>

                              <div class="form-group">
								  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.PageSlug')); ?></label>
								  <div class="col-sm-10 col-md-4">
									<?php echo Form::text('slug',  $result['editPage'][0]->slug, array('class'=>'form-control field-validate', 'id'=>'slug')); ?>

									<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.pageSlugWithDashesText')); ?></span>
								  </div>
							 </div>
                                
                            <?php $i = 0; $j = 0;?>
                                <?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if(!empty($result['languages'][$j]->language_id)): ?> 
                                    <input type="hidden" name="page_description_id_<?=$languages->languages_id?>" value="<?php echo e($result['editPage'][$i]->page_description_id); ?>">
                                    <?php endif; ?>
                                
                                
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.PageName')); ?> (<?php echo e($languages->name); ?>)</label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="name_<?=$languages->languages_id?>" class="form-control field-validate" <?php if(!empty($result['editPage'][$j]->language_id)): ?> value="<?php echo e($result['editPage'][$i]->name); ?>" <?php endif; ?>>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.PageName')); ?> (<?php echo e($languages->name); ?>)</span>
                                     
                                            <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                	<label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Description')); ?> (<?php echo e($languages->name); ?>)</label>
                                    <div class="col-sm-10 col-md-8">
                                        <textarea id="editor<?=$languages->languages_id?>" name="description_<?=$languages->languages_id?>" class="form-control"  rows="10" cols="80"><?php if(!empty($result['editPage'][$j]->language_id)): ?><?php echo e(stripslashes($result['editPage'][$i]->description)); ?><?php endif; ?></textarea>
                                    	<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.Description')); ?> (<?php echo e($languages->name); ?>)</span>
                                    <br>
                                    </div>
                                </div>
                                <?php if(count($result['editPage'])>1) { $i++; } $j++;?>
                                
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Update')); ?></button>
                                <a href="<?php echo e(URL::to('admin/listingPages')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
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
<script src="<?php echo asset('resources/views/admin/plugins/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<script type="text/javascript">
		$(function () {
			
			//for multiple languages
			<?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				// Replace the <textarea id="editor1"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace('editor<?php echo e($languages->languages_id); ?>');
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
			//bootstrap WYSIHTML5 - text editor
			$(".textarea").wysihtml5();
			
    });
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>