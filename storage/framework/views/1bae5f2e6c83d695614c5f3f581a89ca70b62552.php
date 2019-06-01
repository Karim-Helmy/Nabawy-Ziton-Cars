
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.AddInsurance')); ?> <small><?php echo e(trans('labels.AddInsurance')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="listingInsurance"><i class="fa fa-dashboard"></i><?php echo e(trans('labels.ListingCountries')); ?> </a></li>
      <li class="active"><?php echo e(trans('labels.AddInsurance')); ?> </li>
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
            <h3 class="box-title"><?php echo e(trans('labels.AddInsurance')); ?></h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              	  <div class="box box-info"><br>
                                   
                       	<?php if($countryData['message']): ?>
						
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						 <?php echo e($countryData['message']); ?>

						</div>						
						<?php endif; ?> 
						
                        <!--<div class="box-header with-border">
                          <h3 class="box-title">Edit category</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                         
                            <?php echo Form::open(array('url' =>'admin/addNewInsurance', 'method'=>'post', 'class' => 'form-horizontal  form-validate', 'enctype'=>'multipart/form-data')); ?>

                            
                            <div class="form-group">
								<label for="name" class="col-sm-2 col-md-3 control-label">اسم شركة التأمين
                                </label>
								<div class="col-sm-10 col-md-4">
									<?php echo Form::text('name',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                    <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
								</div>
							</div>


                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">قيمة القسط
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('kest',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">نوع التغطية
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('taghtya',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">نسبة تحمل العميل
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('nesbat_ameel',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">المسئولية المدنية
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('madanya',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">نسبة الاهلاك
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('destruction',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">نسبة الاهلاك الكلى
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('ehlak',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">خصم صيانة التوكيل
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('syana',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>


                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">الحد الاقصى للتحمل دون محضر
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('aksa',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">عنوان الشركة
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('address',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">طريقة صرف قيمة التأمين
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::text('sarf',  '', array('class'=>'form-control  field-validate', 'id'=>'name')); ?>


                                     <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">صورة الشركة</label>
                                 <div class="col-sm-10 col-md-4">
                                     <?php echo Form::file('image', array('id'=>'image')); ?>

                                     <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    <?php echo e(trans('labels.UploadImageforNews')); ?></span>
                                     <br>
                                 </div>
                             </div>
                             <!-- /.box-body -->
							<div class="box-footer text-center">
								<button type="submit" class="btn btn-primary">اضافة</button>
								<a href="listingInsurance" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
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