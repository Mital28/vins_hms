<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>Vins Administration</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="print">
<style type="text/css">
	#header {visibility: hidden;}
	#footer{visibility: hidden;}
	@media all {
		.page-break	{ display: none; }
	}
	@media print {
		
		#header, #footer {visibility: visible;}
		html {
		    -ms-overflow-style: scrollbar;
		    -webkit-tap-highlight-color: transparent;
		}
		body {
			-webkit-print-color-adjust: exact; 
	   /* background-color: #eeeeee;*/
	    font-family: "Lato", sans-serif;
	    color: #595959;
	    font-size: 15px;
	     background-color: #fff;
	    background-clip: padding-box;
	   /* position: relative;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-direction: column;
	    flex-direction: column;
	    background-color: #fff;
	    background-clip: padding-box;
	   /* border: 1px solid rgba(0, 0, 0, 0.2);
	    border-radius: 0.3rem;
	    outline: 0;*/
	}
	.page-break { display: block; page-break-after: always; }
	.text-uppercase{
    	text-transform : uppercase;
	}
	.report_header{margin-top:70px;}
	.report_space
	{
	    margin-bottom:15px;

	}
	.report_title
	{
	    font-family: "Times New Roman", Times, serif;
	    font-weight:bold;
	    font-size : 15px;
	    text-align:left;

	}
	.report_left_pad
	{
		padding-left: 35px;
		padding-right: 35px;
	}
	.report_details
	{
	    font-family: "Times New Roman", Times, serif;
	    font-size : 14px;
	    text-align: justify;
	     line-height: 15px;
	}
	.report_table
	{
		line-height: 10px;
	}
	.report_table th
	{
	    font-family: "Times New Roman", Times, serif;
	    font-size : 13px;
	    font-style: bold;
	    text-align: left;
	}
	.report_table td
	{
	    font-family: "Times New Roman", Times, serif;
	    font-size : 13px;
	    text-align: left;
	}
	.report_style
	{
	    font-family: "Times New Roman", Times, serif;
	    line-height: 11px;
	}
	.report_table_patient
	{
		font-size: 13px;
		line-height: 10px;
	}
	.report_image{
		height: 100px;
		width: 300px;
	}
	table.table-bordered, th, td, tbody, thead, tr {
    	border: 1px solid #ddd !important;
	}
	.row {
	    margin-right: -15px;
	    margin-left: -15px;
	}
	.text-center {
    	text-align: center !important;
	}
	.text-left {
	    text-align: left !important;
	}
	.text-right {
	    text-align: right !important;
	}
	.col-md-12 {
	    -ms-flex: 0 0 100%;
	    flex: 0 0 100%;
	    max-width: 100%;
	}
	.text-capitalize {
	    text-transform: capitalize !important;
	}
	.col-md-6 {
	    -ms-flex: 0 0 50%;
	    flex: 0 0 50%;
	    max-width: 50%;
	}
	.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
	h4, .h4 {
	    font-size: 1.5rem;
	}
	.site-header .container {
   		 width: 95%;
    	max-width: 100%;
	}
	.btn {
		    white-space: normal;
	}
	table.table-bordered ,th , td, tbody, thead, tr{
		  border: 1px solid #ddd !important;
	}
	.table thead th {
	    vertical-align: bottom;
	    border-bottom: 2px solid #eceeef;
	}
    .modal-body {
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 15px;
    }
    h2, .h2 {
        font-size: 2rem;
    }
    .text-capitalize {
        text-transform: capitalize !important;
    }
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
    .text-center {
        text-align: center !important;
    }
    .modal-header {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 15px;
        border-bottom: 1px solid #eceeef;
    }
   
    table{   
        width : 90%;   
      } 
     
    table, th, td, tbody, thead, tr{ 
        border : 0 !important; 
        padding : 3px 0px !important;  
     }
       
    table.table-bordered, th, td, tbody, thead, tr{  
        border : 0 !important; 
         padding : 3px  0px !important;    
    }  
    table tr.borderTopBottom{    
        border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;    
    }  
    table tr.borderTop{  
        border-top: 1px solid #ddd !important; 
    }  
    table, th, td, tbody, thead, tr{ 
        border : 0 !important; 
        padding : 3px 0px !important;  
    }  
   
     table.table-bordered, th, td, tbody, thead, tr{   
        border : 0 !important; 
         padding : 3px  0px !important;    
    }  
     table tr.borderTopBottom{ 
    border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;    
    }  
    table tr.borderTop{    
        border-top: 1px solid #ddd !important; 
    }  
    .letter-head img{
    width:30%;
    }

   img {
    -webkit-print-color-adjust: exact;
}
	
    
	}
		html {
		    -ms-overflow-style: scrollbar;
		    -webkit-print-color-adjust: exact; 
		}
		body {
		-webkit-print-color-adjust: exact; 
	   /* background-color: #eeeeee;*/
	    font-family: "Lato", sans-serif;
	    color: #595959;
	    font-size: 15px;
	     background-color: #fff;
	    background-clip: padding-box;
	   /* position: relative;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-direction: column;
	    flex-direction: column;
	    background-color: #fff;
	    background-clip: padding-box;
	   /* border: 1px solid rgba(0, 0, 0, 0.2);
	    border-radius: 0.3rem;
	    outline: 0;*/
	}
	
	.row {
	    margin-right: -15px;
	    margin-left: -15px;
	}
	.text-center {
    	text-align: center !important;
	}
	.text-left {
	    text-align: left !important;
	}
	.text-right {
	    text-align: right !important;
	}
	.col-md-12 {
	    -ms-flex: 0 0 100%;
	    flex: 0 0 100%;
	    max-width: 100%;
	}
	.text-capitalize {
	    text-transform: capitalize !important;
	}
	.col-md-6 {
	    -ms-flex: 0 0 50%;
	    flex: 0 0 50%;
	    max-width: 50%;
	}
	.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
	h4, .h4 {
	    font-size: 1.5rem;
	}
	.site-header .container {
   		 width: 95%;
    	max-width: 100%;
	}
	.btn {
		    white-space: normal;
	}
	table.table-bordered ,th , td, tbody, thead, tr{
		  border: 1px solid #ddd !important;
	}
	.table thead th {
	    vertical-align: bottom;
	    border-bottom: 2px solid #eceeef;
	}
    .modal-body {
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 15px;
    }
    h2, .h2 {
        font-size: 2rem;
    }
    .text-capitalize {
        text-transform: capitalize !important;
    }
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
    .text-center {
        text-align: center !important;
    }
    .modal-header {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 15px;
        border-bottom: 1px solid #eceeef;
    }
   
    table{   
        width : 90%;   
      } 
     
    table, th, td, tbody, thead, tr{ 
        border : 0 !important; 
        padding : 3px 0px !important;  
     }
       
    table.table-bordered, th, td, tbody, thead, tr{  
        border : 0 !important; 
         padding : 3px  0px !important;    
    }  
    table tr.borderTopBottom{    
        border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;    
    }  
    table tr.borderTop{  
        border-top: 1px solid #ddd !important; 
    }  
    table, th, td, tbody, thead, tr{ 
        border : 0 !important; 
        padding : 3px 0px !important;  
    }  
   
     table.table-bordered, th, td, tbody, thead, tr{   
        border : 0 !important; 
         padding : 3px  0px !important;    
    }  
     table tr.borderTopBottom{ 
    border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;    
    }  
    table tr.borderTop{    
        border-top: 1px solid #ddd !important; 
    }  
    .letter-head img{
   		 width:30%;
   		 -webkit-print-color-adjust: exact; 
    }
	img {
    -webkit-print-color-adjust: exact;
	}
     @page{
    	margin: 0px;
    	 size: portrait;
    	 -webkit-print-color-adjust: exact; 

    }
	@media (min-width: 768px)
	.hidden-md-up {
	    display: none !important;
	}
	@media screen {
		#header { display: block; }
		#footer { display: block; }
		}
    </style>
</head>
<body>
	<div class="report_style">
		@php $i=0; @endphp
		
			@if(count($data['checkedreportList'])>0)

				@foreach($data['checkedreportList'] as $checkout)
						
				  	@if($data['printType'] == 'opd_case')
				  		<div>
				  		
				  				@if($checkout=='History' && $data['ReportPageData']['historyData']['value']!= '' && $data['ReportPageData']['historyData']['value']!= null)
				  					@if($i > 1)
										<div class="page-break"></div>
									@endif
				  					<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('historyReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout=='Past History' && $data['ReportPageData']['past_history']['value']!= null && $data['ReportPageData']['past_history']['value']!='')
									@if($i>1)
										<div class="page-break"></div>
									@endif
										<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('pastHistoryReportdata')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout=='Examination' && $data['ReportPageData']['examinationData']!='')
									@if($i>1)
										<div class="page-break"></div>
									@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('examinationReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout == 'Investigation Lab' && count($data['ReportPageData']['labReportData'])>0)
									@if($i>1)
										<div class="page-break"></div>
									@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('labPatientReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout == 'Investigation Radiology'&& count($data['ReportPageData']['radiologyReportData']) > 0)
									@if($i>1)
										<div class="page-break"></div>
									@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('radiologyPatientReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout=='Diagnosis' && $data['ReportPageData']['opdData']['diagnosis'] != '')  
									@if($i>1)
										<div class="page-break"></div>
									@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('diagnosisReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout=='Advice + follow ups' &&  $data['ReportPageData']['adviceData']['value']!= null &&  $data['ReportPageData']['adviceData']['value']!= '')
									@if($i>1)
										<div class="page-break"></div>
									@endif

										<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('adviceReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout=='Prescription' && isset($data['priscriptionData']) && count($data['ReportPageData']['prescriptionReportData'])>0)
									@if($i>1)
										<div class="page-break"></div>
									@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('prescriptionReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif	
								@if($checkout== 'Referrals' && isset($data['ReportPageData']['CrossReferalData']) && count($data['ReportPageData']['CrossReferalData'])>0)
									@if($i>1)
										<div class="page-break"></div>
									@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('crossReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif	
								@if($checkout=='Radiology' && isset($data['ReportPageData']['radiologyReferalReportData']) && count($data['ReportPageData']['radiologyReferalReportData'])>0)
									@if($i>1)
										<div class="page-break"></div>
									@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('radiologyReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout=='Laboratory' && isset($data['ReportPageData']['labReferalReportData']) && count($data['ReportPageData']['labReferalReportData'])>0)
									@if($i>1)
										<div class="page-break"></div>
									@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('labReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif
								@if($checkout=='Advice + follow ups' && $data['ReportPageData']['opdData']['follow_up'] != '') 
								@if($data['ReportPageData']['adviceData']['value'] 
								== null &&  $data['ReportPageData']['historyData']['value'] == null &&  $data['ReportPageData']['past_history']['value']== null && $data['ReportPageData']['examinationData'] =='' && count($data['ReportPageData']['labReferalReportData']) == 0 && count($data['ReportPageData']['radiologyReferalReportData']) == 0 && count($data['ReportPageData']['CrossReferalData']) == 0 &&  count($data['ReportPageData']['prescriptionReportData']) == 0 && $data['ReportPageData']['opdData']['diagnosis'] == '' && count($data['ReportPageData']['radiologyReportData']) == 0 && count($data['ReportPageData']['labReportData']) == 0) 

								@else 
								
										<div class="page-break"></div>
									
								@endif
									<div class="container">
									 	@include('reportHeader') 
										@include('patientDetailReport')
										@include('patientCheckupReport')
										<div class="report_left_pad">
											@include('followupReportData')
											@include('reportSignature')
										</div>
									</div>
								@endif	
					@endif
		 			@include('reportFooter')
				</div>
				@php $i++; @endphp

			@endforeach
		@endif
	</div>
</body>
<html>