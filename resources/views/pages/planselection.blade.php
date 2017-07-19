@extends('layouts.main') @section('content')
</div>
<div class="container">
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
                    <div class="col-md-12">Here you can make changes to this group's eligibility rules and waiting periods. If no changes are made, the same eligibility rules and waiting periods will apply for this group's next plan period.
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <p class="required-field-before">Indicates required field</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <h4>Current plan(s)</h4>
                        <p>The current plan(s) displayed below is active form the affective stsrt date (MM/DD/YYYY) to the end date (MM/DD/YYYY).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>


 <div class="container">
      <div class="row">
      <div class="col-md-2 text-center">
        <div style="background-color: #FBFBFB">
          <p>Bronze</p>
          <p>Pro EPO</p>
        </div>
       <div style="background-color: #82c341">
          <h4>$22,569.56</h4>
          <p>Per Month</p> 
       </div>       
    </div> 
    <div class="col-md-4" style="background-color: #E5E5E5">
        <div class="col-md-6">
            <p><b>Benifits</b></p>
            <p>Primary Care Doctoer Visit:</p>
            <p><b>$30 copay<b></p>
            <p>Specialist Doctor Visit:</p>
            <p><b>$30 copay<b></p>
        </div>
        <div class="mt-5 col-md-6">
            <p>Deductable (Individual)</p>
            <p><b>$30 copay<b></p>
            <p>Deductable (Family):</p>
            <p><b>$30 copay<b></p>
        </div>
    </div> 

    <div class="col-md-4" style="background-color: #FBFBFB">
        <div class="col-md-6">
            <p><b>Plan Tiers</b></p>
            <p>Subscriber Only:</p>
            <p><b>$30 copay<b></p>
            <p>Subscriber & Spouse:</p>
            <p><b>$30 copay<b></p>
        </div>
        <div class="col-md-6">
            <p></p>
            <p>Subscriber & Child(ren)</p>
            <p><b>$30 copay<b></p>
            <p>Family:</p>
            <p><b>$30 copay<b></p>
        </div>
    </div> 
    <div class="col-md-2" style="background-color: #474B55">
      <div>
        <button type="submit" style="border:2px solid #529535">Download PDF</button>
      </div>
    </div>       
    </div>
    
    <br>
      
          
    </div>
				



<!--{{ Form::open(['url' => '/groupinfo']) }} -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row form-group">
                    <div class="col-md-6 col-md-offset-6 text-center">
                        <span class="pl-5"><a>Save and Exit</a></span>
                        <span class="pl-4">
                        <input type="submit" name="EnrollPortalRenewal" value="Continue" onclick="spinner(true);"  class="btn-lg btn-success ">
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
{{ Form::close() }}
<div class="container-fluid">
@endsection
