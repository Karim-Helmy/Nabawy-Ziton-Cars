
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>  <?php echo e(trans('labels.ListingInsurance')); ?> <small><?php echo e(trans('labels.ListingInsurance')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"> <?php echo e(trans('labels.ListingInsurance')); ?></li>
    </ol>
  </section>
  
  <!--  content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo e(trans('labels.ListingInsurance')); ?> </h3>
            <div class="box-tools pull-right">
            	<a href="addInsurance" type="button" class="btn btn-block btn-primary"><?php echo e(trans('labels.AddInsurance')); ?></a>
            </div>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">              		

              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><?php echo e(trans('labels.ID')); ?></th>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(count($countryData['countries'])>0): ?>
                    <?php $__currentLoopData = $countryData['countries']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($countries->id); ?></td>
                            <td><?php echo e($countries->name); ?></td>

                            <td><a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.Edit')); ?>" href="editInsurance/<?php echo e($countries->id); ?>" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a  data-toggle="tooltip" data-placement="bottom" title=" <?php echo e(trans('labels.Delete')); ?>" id="deleteCountryId" countries_id ="<?php echo e($countries->id); ?>" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                       <tr>
                            <td colspan="5"><?php echo e(trans('labels.NoRecordFound')); ?></td>
                       </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
                <div class="col-xs-12 text-right">
                	<?php echo e($countryData['countries']->links()); ?>

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
        <!-- deleteInsuranceModal -->
      <!-- deleteCountryModal -->
      <div class="modal fade" id="deleteCountryModal" tabindex="-1" role="dialog" aria-labelledby="deleteCountryModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="deleteCountryModalLabel"><?php echo e(trans('labels.DeleteInsurance')); ?></h4>
                  </div>
                  <?php echo Form::open(array('url' =>'admin/deleteInsurance', 'name'=>'deleteCountry', 'id'=>'deleteCountry', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

                  <?php echo Form::hidden('action',  'delete', array('class'=>'form-control')); ?>

                  <?php echo Form::hidden('id',  '', array('class'=>'form-control', 'id'=>'countries_id')); ?>

                  <div class="modal-body">
                      <p><?php echo e(trans('labels.DeleteInsuranceText')); ?></p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
                      <button type="submit" class="btn btn-primary" id="deleteCountry"><?php echo e(trans('labels.DeleteInsurance')); ?></button>
                  </div>
                  <?php echo Form::close(); ?>

              </div>
          </div>
      </div>


      <!--  row -->
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>