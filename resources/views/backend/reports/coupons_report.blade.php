@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-12">
		<div class="alert alert-info">
			<strong>{{ _lang('All amounts are showing in base currency').' ('.currency().')' }}</strong>
		</div>
			
		<div class="card">
			<div class="card-header">
				<span class="panel-title">{{ _lang('Coupons Report') }}</span>
			</div>
			
			<div class="card-body">
			
				<div class="report-params">
					<form class="validate" method="post" action="{{ route('reports.coupons_report') }}">
						<div class="row">
              				{{ csrf_field() }}

							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">{{ _lang('Start Date') }}</label>						
									<input type="text" class="form-control datepicker" name="date1" id="date1" value="{{ isset($date1) ? $date1 : old('date1') }}" readOnly="true" required>
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">{{ _lang('End Date') }}</label>						
									<input type="text" class="form-control datepicker" name="date2" id="date2" value="{{ isset($date2) ? $date2 : old('date2') }}" readOnly="true" required>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
								<label class="control-label">{{ _lang('Order Status') }}</label>						
									<select class="form-control auto-select" data-selected="{{ isset($order_status) ? $order_status : old('order_status') }}" name="order_status" id="order_status">
										<option value="">{{ _lang('All') }}</option>
										<option value="pending_payment">{{ _lang('Pending Payment') }}</option>
										<option value="pending">{{ _lang('Pending') }}</option>
										<option value="completed">{{ _lang('Completed') }}</option>
										<option value="on_hold">{{ _lang('On Hold') }}</option>
										<option value="processing">{{ _lang('Processing') }}</option>
										<option value="refunded">{{ _lang('Refunded') }}</option>	
										<option value="canceled">{{ _lang('Canceled') }}</option>										
									</select> 
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Coupon Code') }}</label>						
									<input type="text" class="form-control" name="coupon_code" value="{{ isset($coupon_code) ? $coupon_code : old('coupon_code') }}">
								</div>
							</div>
							
							<div class="col-md-2">
								<button type="submit" class="btn btn-light btn-xs mt-26"><i class="ti-filter"></i> {{ _lang('Filter') }}</button>
							</div>
						</form>

					</div>
				</div><!--End Report param-->
                
				@php $date_format = get_option('date_format','Y-m-d'); @endphp
				@php $currency = currency(); @endphp
				
				<div class="report-header">
				   <h4>{{ _lang('Coupons Report') }}</h4>
				   <h5>{{ isset($date1) ? date($date_format, strtotime($date1)).' '._lang('to').' '.date($date_format, strtotime($date2)) : '----------  '._lang('to').'  ----------' }}</h5>
				</div>

				<table class="table table-bordered report-table">
					<thead>  
						<th>{{ _lang('Coupon Name') }}</th>    
						<th>{{ _lang('Coupon Code') }}</th>  
						<th>{{ _lang('Orders') }}</th>						
						<th class="text-right">{{ _lang('Total') }}</th>       
					</thead>
					<tbody> 
					@if(isset($report_data))
						@foreach($report_data as $report) 
							<tr>
								<td>{{ $report->translation->name }}</td>
								<td>{{ $report->code }}</td>
								<td>{{ $report->total_orders }}</td>
								<td class="text-right">{!! xss_clean(decimalPlace($report->total, $currency)) !!}</td>
							</tr>
						@endforeach
					@endif
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection