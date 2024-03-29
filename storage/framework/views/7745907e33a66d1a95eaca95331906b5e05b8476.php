
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.Options')); ?> <small><?php echo e(trans('labels.ListingAllOptions')); ?>...</small> </h1>
    <ol class="breadcrumb">
     <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.Options')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.ListingAllOptions')); ?> </h3>
            <div class="box-tools pull-right">
            	<a href="addAttributes" type="button" class="btn btn-block btn-primary"><?php echo e(trans('labels.AddNewOption')); ?></a>
            </div>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              	  <?php if(count($errors) > 0): ?>
					  <?php if($errors->any()): ?>
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <?php echo e($errors->first()); ?>

						</div>
					  <?php endif; ?>
				  <?php endif; ?>
              </div>
              
            </div>
            <div class="row">
              <div class="col-xs-12">
              <?php $__currentLoopData = $result['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <table id="" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><?php echo e($result_data->products_options_name); ?> </th>
                      <th width="40%">
                      	<a data-toggle="tooltip" data-placement="bottom" title="Edit Option" href="editAttributes/<?php echo e($result_data->products_options_id); ?>/<?php echo e($result_data->language_id); ?>" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a option_id="<?php echo e($result_data->products_options_id); ?>" class="badge bg-red deleteOption"><i class="fa fa-trash " aria-hidden="true"></i></a>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $result_data->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$values_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr <?php if($key++==0): ?> id="content_<?=$result_data->products_options_id.'_'.$result_data->languages_id?>" <?php endif; ?>>
                  		<td>
                        	<p class="form-p-<?=$result_data->products_options_id.$values_data->products_options_values_id?>"><?php echo e($values_data->products_options_values_name); ?></p> 
                        	 
                            <div style="display:none" class="row form-content-<?=$result_data->products_options_id.$values_data->products_options_values_id?>">
                            <?php echo Form::open(array('url' =>'admin/updateAttributeValue', 'method'=>'post', 'class' => 'form-horizontal form-validate editvalue-form', 'enctype'=>'multipart/form-data')); ?>

                                <?php echo Form::hidden('products_options_values_id', $values_data->products_options_values_id  , array('class'=>'form-control', 'id'=>'products_options_values_id')); ?>    
                                <?php echo Form::hidden('language_id', $result_data->languages_id  , array('class'=>'form-control', 'id'=>'language_id')); ?>

                               	<?php echo Form::hidden('products_options_id', $result_data->products_options_id  , array('class'=>'form-control', 'id'=>'products_options_id')); ?>                            
                                <div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('products_options_values_name', $values_data->products_options_values_name , array('class'=>'form-control', 'id'=>'products_options_values_name')); ?>

                                     
                                </div>
                                <button name="updateValue" type="button" class="btn btn-primary update-value"><i class="fa fa-check" aria-hidden="true"></i> <?php echo e(trans('labels.Update')); ?></button>&nbsp;&nbsp
                                <button name="cancelValue" type="button" class="btn btn-warning cancel-value" value = '<?=$result_data->products_options_id.$values_data->products_options_values_id?>'><i class="fa fa-times "></i> <?php echo e(trans('labels.Cancel')); ?></button>
                            <?php echo Form::close(); ?>

                            </div>
                        </td>
                        <td>
                        	<a data-toggle="tooltip" value = '<?=$result_data->products_options_id.$values_data->products_options_values_id?>' data-placement="bottom" title="Edit Value" href="javascript:void(0)" class="badge bg-light-blue edit-value"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
							
                            <a href="javascript:void(0)" value_id = '<?=$values_data->products_options_values_id?>' language_id = '<?=$result_data->languages_id?>' option_id = '<?=$values_data->products_options_id?>' data-toggle="tooltip" data-placement="bottom" title="Delete Value" class="badge bg-red delete-value"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                  		<td colspan="2">
                            <?php echo Form::open(array('url' =>'admin/addAttributeValue', 'method'=>'post', 'class' => 'form-horizontal form-validate addvalue-form', 'enctype'=>'multipart/form-data')); ?>

                                <?php echo Form::hidden('language_id', $result_data->languages_id  , array('class'=>'form-control', 'id'=>'language_id')); ?>

                                <?php echo Form::hidden('products_options_id', $result_data->products_options_id  , array('class'=>'form-control', 'id'=>'products_options_id')); ?>        
                                                        
                                <div class="col-sm-10 col-md-3 row form-group">
                                    <?php echo Form::text('products_options_values_name', '' , array('class'=>'form-control', 'id'=>'products_options_values_name')); ?>

									<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0; text-transform:none"><?php echo e(trans('labels.AddOptionVAlueOption')); ?></span>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="addValue" type="button" class="btn btn-primary add-value"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; <?php echo e(trans('labels.AddValue')); ?></button>
                            <?php echo Form::close(); ?>

                       </td>
                    </tr>
                  </tbody>
                </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-12 text-right">
               	 <?php echo e($result['attributes']->links()); ?>

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
    <!-- deleteAttributeModal -->
	<div class="modal fade" id="deleteAttributeModal" tabindex="-1" role="dialog" aria-labelledby="deleteAttributeModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="deleteAttributeModalLabel"><?php echo e(trans('labels.AssociatedProducts')); ?></h4>
		  </div>
		  <?php echo Form::open(array('url' =>'admin/deleteAttribute', 'name'=>'deleteAttribute', 'id'=>'deleteAttribute', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

				  <?php echo Form::hidden('action',  'delete', array('class'=>'form-control')); ?>

				  <?php echo Form::hidden('option_id',  '', array('class'=>'form-control', 'id'=>'option_id')); ?>

		  <div class="modal-body">						
			  <p><?php echo e(trans('labels.DeleteOptionPrompt')); ?></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
			<button type="submit" class="btn btn-primary" id="deleteAttribute"><?php echo e(trans('labels.Delete')); ?></button>
		  </div>
		  <?php echo Form::close(); ?>

		</div>
	  </div>
	</div>

    <div class="modal fade" id="productListModal" tabindex="-1" role="dialog" aria-labelledby="productListModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="productListModalLabel"><?php echo e(trans('labels.AssociatedProducts')); ?></h4>
          </div>
          <div class="modal-body">	
          	<p><strong><?php echo e(trans('labels.DeletingErrorMessage')); ?></strong></p>					
              <ul style="padding:0" id="assciate-products">
              </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Ok')); ?></button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="productListModalValue" tabindex="-1" role="dialog" aria-labelledby="productListModalValueLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="productListModalValueLabel"><?php echo e(trans('labels.AssociatedProducts')); ?></h4>
          </div>
          <div class="modal-body">	
          	<p><strong><?php echo e(trans('labels.DeletingErrorMessage')); ?></strong></p>					
              <ul style="padding:0" id="assciate-products-value">
              </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Ok')); ?></button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- deleteAttributeModal -->
	<div class="modal fade" id="deleteValueModal" tabindex="-1" role="dialog" aria-labelledby="deleteValueModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="deleteValueModalLabel"><?php echo e(trans('labels.DeleteValue')); ?></h4>
		  </div>
		  <?php echo Form::open(array('url' =>'admin/deleteValue', 'name'=>'deleteValue', 'id'=>'deleteValue', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

				  <?php echo Form::hidden('action',  'delete', array('class'=>'form-control')); ?>

				  <?php echo Form::hidden('value_id',  '', array('class'=>'form-control', 'id'=>'value_id')); ?>

                  
                  <?php echo Form::hidden('delete_language_id', '' , array('class'=>'form-control', 'id'=>'delete_language_id')); ?>

                  <?php echo Form::hidden('delete_products_options_id', '' , array('class'=>'form-control', 'id'=>'delete_products_options_id')); ?>

									
		  <div class="modal-body">						
			  <p><?php echo e(trans('labels.DeleteValuePrompt')); ?></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
			<button type="button" class="btn btn-primary" id="deleteAttribute"><?php echo e(trans('labels.Delete')); ?> </button>
		  </div>
		  <?php echo Form::close(); ?>

		</div>
	  </div>
	</div>
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>