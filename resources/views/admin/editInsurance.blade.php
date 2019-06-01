@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.EditInsurance') }} <small>{{ trans('labels.EditInsurance') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li><a href="{{ URL::to('admin/ListingInsurance')}}"><i class="fa fa-dashboard"></i>{{ trans('labels.ListingInsurance') }}</a></li>
      <li class="active">{{ trans('labels.EditInsurance') }}</li>
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
            <h3 class="box-title">{{ trans('labels.EditInsurance') }}</h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              	  <div class="box box-info"><br>
                                   
                       	@if($countryData['message'])
						
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						 {{ $countryData['message'] }}
						</div>						
						@endif 
						
                        <!--<div class="box-header with-border">
                          <h3 class="box-title">Edit category</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                         
                            {!! Form::open(array('url' =>'admin/updateInsurance', 'method'=>'post', 'class' => 'form-horizontal field-validat', 'enctype'=>'multipart/form-data')) !!}
                            {!! Form::hidden('id',  $countryData['country'][0]->id , array('class'=>'form-control', 'id'=>'insurance_id')) !!}


                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">اسم شركة التأمين
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('name',   $countryData['country'][0]->name, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>


                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">قيمة القسط
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('kest',   $countryData['country'][0]->kest, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">نوع التغطية
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('taghtya', $countryData['country'][0]->taghtya, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">نسبة تحمل العميل
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('nesbat_ameel',  $countryData['country'][0]->nesbat_ameel, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">المسئولية المدنية
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('madanya',  $countryData['country'][0]->madanya, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">نسبة الاهلاك
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('destruction',  $countryData['country'][0]->destruction, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">نسبة الاهلاك الكلى
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('ehlak',  $countryData['country'][0]->ehlak, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">خصم صيانة التوكيل
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('syana',  $countryData['country'][0]->syana, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>


                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">الحد الاقصى للتحمل دون محضر
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('aksa',  $countryData['country'][0]->aksa, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">عنوان الشركة
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('address',  $countryData['country'][0]->address, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">طريقة صرف قيمة التأمين
                                 </label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::text('sarf',  $countryData['country'][0]->sarf, array('class'=>'form-control  field-validate', 'id'=>'name'))!!}

                                     <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="name" class="col-sm-2 col-md-3 control-label">صورة الشركة</label>
                                 <div class="col-sm-10 col-md-4">
                                     {!! Form::file('image', array('id'=>'image')) !!}
                                     <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.UploadImageforNews') }}</span>
                                     <br>
                                     {!! Form::hidden('oldImage',  $countryData['country'][0]->image , array('id'=>'oldImage', 'class'=>'field-validate ')) !!}
                                     <img src="{{asset('').$countryData['country'][0]->image}}" alt="" width=" 100px">
                                 </div>
                             </div>


							
							<!-- /.box-body -->
							<div class="box-footer text-center">
								<button type="submit" class="btn btn-primary">{{ trans('labels.Update') }}</button>
								<a href="{{ URL::to('admin/ListingInsurance')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
							</div>
                              <!-- /.box-footer -->
                            {!! Form::close() !!}
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
@endsection 