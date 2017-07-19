@extends('layouts.main') @section('content')
</div>
<div class="container-fluid">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-md-8">
                        <h4>Galaxy Stars Unlimited Inc.</h4>
                        <h5>Group #123456</h5>
                    </div>
                    <div class="col-md-4 text-right pt-3">
                        <input type="submit" name="EnrollPortalRenewal_HF" value="Go Back" onclick="spinner(true);" class="btn btn-success hf-background-button-white">
                    </div>
                </div>
				
				   <div class="row form-group">
                    <div class="col-md-12">
                        <h4>Current Plan(s)</h4>
                        <h5>The curent plan(s) displayed below is active from the effective start date (MM/DD/YYYY) to the end date  (MM/DD/YYYY)</h5>
                    </div>
                </div>
				
				<div class="col-md-12">
				<table class="table-bordered" width="100%">
				<tr>
			<td style="width:15%;">Bronze Pro EPO</td>
			<td rowspan="2"  style="width:35%;">
			<span class="pull-left">Benefits
			Primary care Doctor Visit:
			$30 copay.
			<br>
			Speciality Doctor Visit:
			$30 copay
			</span>
			<span class="pull-right">
			Deductible (individual): 
			$30 copay
			<br>
				Deductible (Family): 
			$30 copay
			</span>
			</td>
			<td rowspan="2"  style="width:35%;">
			Plan Tiers
			
			<span class="pull-left">Benefits
			Primary care Doctor Visit:
			$30 copay.
			<br>
			Speciality Doctor Visit:
			$30 copay
			</span>
			<span class="pull-right">
			Deductible (individual): 
			$30 copay
			<br>
				Deductible (Family): 
			$30 copay
			</span>
			</td>
			<td rowspan="2"  style="width:15%;">  <input type="submit" name="download" value="Download PDF" class="btn btn-success hf-background-button-white">
</td>
				</tr>
				<tr>
			<td style="width:15%;">  $22,569.56 Per Month</td>
			
				</tr>
				</table>
				
				</div>
             
             
        </div>
    </div>
</div>
 <div class="col-md-2"></div>
@endsection
