
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.Setting')); ?> <small><?php echo e(trans('labels.Setting')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.Setting')); ?></li>
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
            <h3 class="box-title"><?php echo e(trans('labels.Setting')); ?> </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                        <!--<div class="box-header with-border">
                          <h3 class="box-title">Setting</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                          <?php if( count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-success" role="alert">
                                      <span class="icon fa fa-check" aria-hidden="true"></span>
                                      <span class="sr-only"><?php echo e(trans('labels.Setting')); ?>Error:</span>
                                      <?php echo e($error); ?>

                                </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        
                            <?php echo Form::open(array('url' =>'admin/updateSetting', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

                            	
                            <?php echo Form::hidden('setting_id',  $result['setting'][0]->setting_id, array('class'=>'form-control', 'id'=>'id')); ?>

                            <h4><?php echo e(trans('labels.generalSetting')); ?> </h4>
                            <hr>
                            

                            

                            


                            <div class="form-group android-hide">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.packageName')); ?>


                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('package_name',  $result['setting'][0]->package_name, array('class'=>'form-control', 'id'=>'package_name')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.packageNameText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.AppName')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('app_name',  $result['setting'][0]->app_name, array('class'=>'form-control', 'id'=>'app_name')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.AppNameText')); ?></span>
                              </div>
                            </div>
                            
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.websiteURL')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('site_url',  $result['setting'][0]->site_url, array('class'=>'form-control', 'id'=>'site_url')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.websiteURLText')); ?></span>
                              </div>
                            </div>
                            
                             <div class="form-group android-hide"  style="display: none">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.googleAnalyticId')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('google_analytic_id',  $result['setting'][0]->google_analytic_id, array('class'=>'form-control', 'id'=>'google_analytic_id')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.googleAnalyticIdText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.CurrencySymbol')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('currency_symbol',  $result['setting'][0]->currency_symbol, array('class'=>'form-control', 'id'=>'currency_symbol')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.CurrencySymbolText')); ?></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.NewProductDuration')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">

                                  <?php echo Form::text('new_product_duration',  $result['setting'][0]->new_product_duration, array('class'=>'form-control', 'id'=>'new_product_duration')); ?>

                                   <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.NewProductDurationText')); ?></span>
                              </div>
                                <i class="fa fa-percent col-sm-1 col-md-2" style="margin-top: 10px"></i>
                            </div>
                            

                            
                             <hr>                            
                            <h4><?php echo e(trans('labels.InqueryEmails')); ?> </h4>
                            <hr>
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.ContactUsEmail')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('contact_us_email',  $result['setting'][0]->contact_us_email, array('class'=>'form-control', 'id'=>'contact_us_email')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                <?php echo e(trans('labels.ContactUsEmailText')); ?></span>
                              </div>
                            </div>
                            
                            
                            
                            <hr>
                            <h4><?php echo e(trans('labels.OurInfo')); ?> </h4>
                            <hr>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.PhoneNumber')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('phone_no',  $result['setting'][0]->phone_no, array('class'=>'form-control', 'id'=>'phone_no')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                <?php echo e(trans('labels.PhoneNumberText')); ?></span>
                              </div>
                            </div>
                                                        
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Address')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('address',  $result['setting'][0]->address, array('class'=>'form-control', 'id'=>'address')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.AddressText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.City')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('city',  $result['setting'][0]->city, array('class'=>'form-control', 'id'=>'city')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.CityText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.State')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('state',  $result['setting'][0]->state, array('class'=>'form-control', 'id'=>'state')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.StateText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Zip')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('zip',  $result['setting'][0]->zip, array('class'=>'form-control', 'id'=>'zip')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.ZipText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Country')); ?>

                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('country',  $result['setting'][0]->country, array('class'=>'form-control', 'id'=>'country')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.CountryContactUs')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Latitude')); ?>

                             
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('latitude',  $result['setting'][0]->latitude, array('class'=>'form-control', 'id'=>'latitude')); ?>

                                 <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.latitudeText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Longitude')); ?></label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('longitude',  $result['setting'][0]->longitude, array('class'=>'form-control', 'id'=>'longitude')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.LongitudeText')); ?></span>
                              </div>
                            </div>
                            
                            <hr>
                            <h4><?php echo e(trans('labels.displayPages')); ?> </h4>
                            <hr>
                            

                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.editProfilePage')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                              <select name="edit_profile_page" class="form-control">
                              	<option <?php if($result['setting'][0]->edit_profile_page == '1'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="1"> <?php echo e(trans('labels.Show')); ?></option>
                              	<option <?php if($result['setting'][0]->edit_profile_page == '0'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="0"> <?php echo e(trans('labels.Hide')); ?></option>
                                         
                               </select>
                                
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.editProfilePageText')); ?></span>
                              </div>
                            </div>
                            

                            

                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.contactUsPage')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                              <select name="contact_us_page" class="form-control">
                              	<option <?php if($result['setting'][0]->contact_us_page == '1'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="1"> <?php echo e(trans('labels.Show')); ?></option>
                              	<option <?php if($result['setting'][0]->contact_us_page == '0'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="0"> <?php echo e(trans('labels.Hide')); ?></option>
                                         
                               </select>
                                
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.contactUsPageText')); ?></span>
                              </div>
                            </div>
                            
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.aboutUsPage')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                              <select name="about_us_page" class="form-control">
                              	<option <?php if($result['setting'][0]->about_us_page == '1'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="1"> <?php echo e(trans('labels.Show')); ?></option>
                              	<option <?php if($result['setting'][0]->about_us_page == '0'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="0"> <?php echo e(trans('labels.Hide')); ?></option>
                                         
                               </select>
                                
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.aboutUsPageText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.newsPage')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                              <select name="news_page" class="form-control">
                              	<option <?php if($result['setting'][0]->news_page == '1'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="1"> <?php echo e(trans('labels.Show')); ?></option>
                              	<option <?php if($result['setting'][0]->news_page == '0'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="0"> <?php echo e(trans('labels.Hide')); ?></option>
                                         
                               </select>
                                
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.newsPageText')); ?></span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.introPage')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                              <select name="intro_page" class="form-control">
                              	<option <?php if($result['setting'][0]->intro_page == '1'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="1"> <?php echo e(trans('labels.Show')); ?></option>
                              	<option <?php if($result['setting'][0]->intro_page == '0'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="0"> <?php echo e(trans('labels.Hide')); ?></option>
                                         
                               </select>
                                
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.introPageText')); ?></span>
                              </div>
                            </div>
                            
                            


                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.settingPage')); ?>

                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                              <select name="setting_page" class="form-control">
                              	<option <?php if($result['setting'][0]->setting_page == '1'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="1"> <?php echo e(trans('labels.Show')); ?></option>
                              	<option <?php if($result['setting'][0]->setting_page == '0'): ?>
                                        selected
                                    <?php endif; ?>
                                 value="0"> <?php echo e(trans('labels.Hide')); ?></option>
                                         
                               </select>
                                
                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.settingPageText')); ?></span>
                              </div>
                            </div>
                            

                            
                            <!--<div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"> Logo </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::file('app_logo', array('id'=>'app_logo')); ?><span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">Upload logo.</span>
                                <br>
                                <?php echo Form::hidden('oldImage',  $result['setting'][0]->app_logo , array('id'=>'app_logo',)); ?>

                                <img src="<?php echo e(asset('').$result['setting'][0]->app_logo); ?>" alt="" width=" 100px">
                              </div>
                            </div>-->
                            

                            
                            
                            <!--<div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label">FCM App ID (IOS)
                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('fcm_ios',  $result['setting'][0]->fcm_ios, array('class'=>'form-control', 'id'=>'fcm_ios')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">App Key of FCM push notification IOS.</span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label">Sender Id (IOS)
                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('fcm_ios_sender_id',  $result['setting'][0]->fcm_ios_sender_id, array('class'=>'form-control', 'id'=>'fcm_ios_sender_id')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">Sender Id of FCM push notification for IOS.</span>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label">FCM Ap ID (Desktop)
                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('fcm_desktop',  $result['setting'][0]->fcm_desktop, array('class'=>'form-control', 'id'=>'fcm_desktop')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">App Key of FCM Push notification</span>
                              </div>
                            </div>-->
                            
                            


                            




                            


                            <!--<div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label">Featured Category ID (Wordpress)
                              
                              </label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::text('featured_category',  $result['setting'][0]->featured_category, array('class'=>'form-control', 'id'=>'featured_category')); ?>

                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">Set feature category for wordpress to show in app.</span>
                              </div>
                            </div>-->
                            
                            
                           
                           
                            
                              
                            
                              <!-- /.box-body -->
                            <div class="box-footer text-center">
                            	<button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Update')); ?> </button>
                            	<a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
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