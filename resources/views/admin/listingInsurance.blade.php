@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>  {{ trans('labels.ListingInsurance') }} <small>{{ trans('labels.ListingInsurance') }}...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active"> {{ trans('labels.ListingInsurance') }}</li>
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
            <h3 class="box-title">{{ trans('labels.ListingInsurance') }} </h3>
            <div class="box-tools pull-right">
            	<a href="addInsurance" type="button" class="btn btn-block btn-primary">{{ trans('labels.AddInsurance') }}</a>
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
                      <th>{{ trans('labels.ID') }}</th>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($countryData['countries'])>0)
                    @foreach ($countryData['countries'] as $key=>$countries)
                        <tr>
                            <td>{{ $countries->id }}</td>
                            <td>{{ $countries->name }}</td>

                            <td><a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="editInsurance/{{ $countries->id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a  data-toggle="tooltip" data-placement="bottom" title=" {{ trans('labels.Delete') }}" id="deleteCountryId" countries_id ="{{ $countries->id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                    @endforeach
                    @else
                       <tr>
                            <td colspan="5">{{ trans('labels.NoRecordFound') }}</td>
                       </tr>
                    @endif
                  </tbody>
                </table>
                <div class="col-xs-12 text-right">
                	{{$countryData['countries']->links()}}
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
                      <h4 class="modal-title" id="deleteCountryModalLabel">{{ trans('labels.DeleteInsurance') }}</h4>
                  </div>
                  {!! Form::open(array('url' =>'admin/deleteInsurance', 'name'=>'deleteCountry', 'id'=>'deleteCountry', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
                  {!! Form::hidden('action',  'delete', array('class'=>'form-control')) !!}
                  {!! Form::hidden('id',  '', array('class'=>'form-control', 'id'=>'countries_id')) !!}
                  <div class="modal-body">
                      <p>{{ trans('labels.DeleteInsuranceText') }}</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
                      <button type="submit" class="btn btn-primary" id="deleteCountry">{{ trans('labels.DeleteInsurance') }}</button>
                  </div>
                  {!! Form::close() !!}
              </div>
          </div>
      </div>


      <!--  row -->
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
@endsection 