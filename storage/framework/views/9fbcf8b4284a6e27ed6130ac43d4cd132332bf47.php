
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.EditProduct')); ?> <small><?php echo e(trans('labels.EditProduct')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/listingProducts')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.ListingAllProducts')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.EditProduct')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.EditProduct')); ?> </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                          <?php if( count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger" role="alert">
                                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                      <span class="sr-only">Error:</span>
                                      <?php echo e($error); ?>

                                </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        
                            <?php echo Form::open(array('url' =>'admin/updateProduct', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

                            	
                            	<?php echo Form::hidden('id',  $result['product'][0]->products_id, array('class'=>'form-control', 'id'=>'id')); ?>

                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Category')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control field-validate" id="category_id" name="category_id" onChange="getSubCategory();">
                                            <option value="">Choose Brand</option>
                                            <?php $__currentLoopData = $result['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                            <?php if(!empty($result['mainCategories'][0]->parent_id)): ?>
                                             <?php if($result['mainCategories'][0]->parent_id == $categories->id ): ?>
                                              selected  
                                             <?php endif; ?>
                                            <?php endif; ?>
                                           
                                            value="<?php echo e($categories->id); ?>"><?php echo e($categories->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                       <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.ChooseCatgoryText')); ?></span>
                                       <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.SubCategory')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control field-validate" name="sub_category_id" id="sub_category_id">
                                        <option value="">Choose Model</option>
                                         <?php $__currentLoopData = $result['subCategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                             <?php if($result['subCategoryId'][0]->categories_id == $subCategories->id ): ?>
                                              selected  
                                             <?php endif; ?>
                                            value="<?php echo e($subCategories->id); ?>"><?php echo e($subCategories->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.ChooseSubCatgoryText')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Manufacturers')); ?> </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="manufacturers_id">
                                     	 <option value="">Choose Status</option>
                                         <?php $__currentLoopData = $result['manufacturer']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option
                                           <?php if($result['product'][0]->manufacturers_id == $manufacturer->id ): ?>
                                             selected  
                                           <?php endif; ?>
                                           value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
                                      	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                  	  <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.ChooseManufacturerText')); ?>..</span>
                                  </div>
                                </div>
                                
                                <hr>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Special')); ?> </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" onChange="showSpecial()" name="isSpecial" id="isSpecial">
                                          <option 
                                           <?php if($result['product'][0]->products_id != $result['specialProduct'][0]->products_id && $result['specialProduct'][0]->status == 0): ?>
                                             selected  
                                           <?php endif; ?> 
                                           value="no"><?php echo e(trans('labels.No')); ?></option>
                                          <option
                                           <?php if($result['product'][0]->products_id == $result['specialProduct'][0]->products_id && $result['specialProduct'][0]->status == 1): ?>
                                             selected  
                                           <?php endif; ?> 
                                           value="yes"><?php echo e(trans('labels.Yes')); ?></option>
                                      </select>
                                 	  <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"> <?php echo e(trans('labels.SpecialProductText')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="special-container" style="display: none;">
									<div class="form-group">
									  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.SpecialPrice')); ?></label>
									  <div class="col-sm-10 col-md-4">
									  	<?php echo Form::text('specials_new_products_price',  $result['specialProduct'][0]->specials_new_products_price, array('class'=>'form-control', 'id'=>'special-price')); ?>

									    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        <?php echo e(trans('labels.SpecialPriceTxt')); ?>.</span>
                                        <span class="help-block hidden"><?php echo e(trans('labels.SpecialPriceNote')); ?>.</span>
									  </div>
									</div>
                              		<div class="form-group">
                              		 <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ExpiryDate')); ?><</label>
									  <div class="col-sm-10 col-md-4">
                                     <?php if(!empty($result['specialProduct'][0]->status) and $result['specialProduct'][0]->status == 1): ?>
                                     	<?php echo Form::text('expires_date',  date('d/m/Y', $result['specialProduct'][0]->expires_date), array('class'=>'form-control datepicker', 'id'=>'expiry-date')); ?>

                                     <?php else: ?>
                                     	<?php echo Form::text('expires_date',  '', array('class'=>'form-control datepicker', 'id'=>'expiry-date')); ?>

                                     <?php endif; ?>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        <?php echo e(trans('labels.SpecialExpiryDateTxt')); ?>

                                        </span>
                                        <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
									  </div>
									</div>
                              		<div class="form-group">
									  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Status')); ?> </label>
									  <div class="col-sm-10 col-md-4">
										  <select class="form-control" name="status">
											  <option
                                               <?php if($result['specialProduct'][0]->status == 1 ): ?>
                                                 selected  
                                               <?php endif; ?> 
                                               value="1"><?php echo e(trans('labels.Active')); ?>

                                               </option>
											   <option
                                               <?php if($result['specialProduct'][0]->status == 0 ): ?>
                                                 selected 
                                               <?php endif; ?> 
                                               value="0"><?php echo e(trans('labels.Inactive')); ?></option>
										  </select>
									       <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    	  <?php echo e(trans('labels.ActiveSpecialProductText')); ?>.</span>
									  </div>
									</div>
                               	</div>
                                <hr>
                                
                                <!--<div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Products Name</label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('products_name',  $result['product'][0]->products_name, array('class'=>'form-control', 'id'=>'products_name')); ?>

                                  </div>
                                </div>-->
                                <?php $i = 0; $j = 0;?>
                                <?php $__currentLoopData = $result['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                	<?php if(!empty($result['languages'][$j]->language_id)): ?> 
                                    <input type="hidden" name="categories_description_id_<?=$languages->languages_id?>" value="<?php echo e($result['editCategory'][$i]->categories_description_id); ?>">
                                    <?php endif; ?>
                                <!--<div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Product URL</label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('products_url',  $result['product'][0]->products_url, array('class'=>'form-control', 'id'=>'products_url')); ?>

                                  </div>
                                </div>-->
                                
                                
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductName')); ?> (<?php echo e($languages->name); ?>)</label>
                                    <div class="col-sm-10 col-md-4">
                                        <input type="text" name="products_name_<?=$languages->languages_id?>" class="form-control field-validate" <?php if(!empty($result['product'][$j]->language_id)): ?> value="<?php echo e($result['product'][$i]->products_name); ?>" <?php endif; ?>>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                           <?php echo e(trans('labels.EnterProductNameIn')); ?> <?php echo e($languages->name); ?> </span>
                                      <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                	<label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Description')); ?> (<?php echo e($languages->name); ?>)</label>
                                    <div class="col-sm-10 col-md-8">
                                     
                                        <textarea  id="editor<?=$languages->languages_id?>" name="products_description_<?=$languages->languages_id?>" class="form-control" rows="5"><?php if(!empty($result['product'][$j]->language_id)): ?><?php echo e(stripslashes($result['product'][$i]->products_description)); ?><?php endif; ?></textarea>
                                     
                                   	<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.EnterProductDetailIn')); ?> <?php echo e($languages->name); ?></span>
                                    
                                    </div>
                                </div>
                                
                                 <!--<div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Detail</label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::textarea('products_description',  $result['product'][0]->products_description, array('class'=>'form-control', 'id'=>'products_description')); ?><br>
                                  </div>
                                </div>-->
                                <?php if(count($result['product'])>1) { $i++; } $j++;?>
                                
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.TaxClass')); ?>

                                  </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control field-validate" name="tax_class_id">
                                         <option selected> <?php echo e(trans('labels.SelectTaxClass')); ?></option>
                                         <?php $__currentLoopData = $result['taxClass']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option
                                           <?php if($result['product'][0]->products_tax_class_id == $taxClass->tax_class_id ): ?>
                                             selected  
                                           <?php endif; ?> 
                                           value="<?php echo e($taxClass->tax_class_id); ?>"><?php echo e($taxClass->tax_class_title); ?></option>
                                      	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                 	<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                     <?php echo e(trans('labels.ChooseTaxClassForProductText')); ?>

                                     </span>
                                      <span class="help-block hidden"><?php echo e(trans('labels.SelectProductTaxClass')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductsPrice')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('products_price',  $result['product'][0]->products_price, array('class'=>'form-control number-validate', 'id'=>'products_price')); ?>

                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    <?php echo e(trans('labels.ProductPriceText')); ?>

                                    </span>                                  
                                    <span class="help-block hidden"><?php echo e(trans('labels.ProductPriceText')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductsWeight')); ?></label>
                                  <div class="col-sm-10 col-md-3">
                                    <?php echo Form::text('products_weight',  $result['product'][0]->products_weight, array('class'=>'form-control number-validate', 'id'=>'products_weight')); ?>

                                 <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    <?php echo e(trans('labels.RequiredTextForWeight')); ?>

                                    </span>
                                  
                                  </div>
                                  <div class="col-sm-10 col-md-1" style="padding-left: 0;">
                                  	  <select class="form-control" name="products_weight_unit">
                                          <option value="g" <?php if($result['product'][0]->products_weight_unit=='g'): ?> selected <?php endif; ?>><?php echo e(trans('labels.gram')); ?></option>.
                                          <option value="kg" <?php if($result['product'][0]->products_weight_unit=='kg'): ?> selected <?php endif; ?>><?php echo e(trans('labels.KiloGram')); ?></option>
                                      </select>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductsModel')); ?> </label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('products_model',  $result['product'][0]->products_model, array('class'=>'form-control', 'id'=>'products_model')); ?>

                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    <?php echo e(trans('labels.ProductsModelText')); ?>

                                    </span>
                                    <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                  </div>
                                </div>
                                
                                 <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ProductsQuantity')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('products_quantity',  $result['product'][0]->products_quantity, array('class'=>'form-control number-validate', 'id'=>'products_quantity')); ?>

                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    <?php echo e(trans('labels.ProductsQuantityText')); ?>

                                    </span>
                                    <span class="help-block hidden"><?php echo e(trans('labels.ProductsQuantityText')); ?></span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.QuantityLowLimit')); ?></label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('low_limit', $result['product'][0]->low_limit, array('class'=>'form-control', 'id'=>'low_limit')); ?>

                                  	<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    <?php echo e(trans('labels.QuantityLowLimitText')); ?></span>
                                  </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Image')); ?> </label>
                                  <div class="col-sm-10 col-md-4">
                                    <?php echo Form::file('products_image', array('id'=>'products_image')); ?><span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    <?php echo e(trans('labels.UploadProductImageText')); ?></span>
                                    <br>
                                    <?php echo Form::hidden('oldImage',  $result['product'][0]->products_image , array('id'=>'oldImage', 'class'=>'field-validate ')); ?>

                                    <img src="<?php echo e(asset('').$result['product'][0]->products_image); ?>" alt="" width=" 100px">
                                  </div>
                                </div>
                                
                                                               
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Status')); ?> </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="products_status">
                                          <option value="1" <?php if($result['product'][0]->products_status==1): ?> selected <?php endif; ?> ><?php echo e(trans('labels.Active')); ?></option>
                                          <option value="0" <?php if($result['product'][0]->products_status==0): ?> selected <?php endif; ?>><?php echo e(trans('labels.Inactive')); ?></option>                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      <?php echo e(trans('labels.SelectStatus')); ?></span>
                                  </div>
                                </div>
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Update')); ?></button>
                                <a href="<?php echo e(URL::to('admin/listingProducts')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
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