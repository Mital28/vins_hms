<template>
	<div>
		<div v-if="(printType == 'print_perceptions')" 	>
			<div class="report_space">
				<provisionalDiagnosticReportData :data="ReportPageData.opdData.provisional_diagnosis" v-show="(ReportPageData.opdData.provisional_diagnosis != '')"></provisionalDiagnosticReportData>
			</div>
				
			<div class="report_space">
				<prescriptionPrint :prescriptData="prescriptData" :removeBtn="0" v-show="(prescriptData.length > 0)"> </prescriptionPrint>
			</div>
			<div class="report_space" v-show="(adviceData.value != '' && adviceData.value != null)">
				<adviseReportdata :adviceData="adviceData" v-show="(adviceData.value != '' || adviceData.value != null)"></adviseReportdata>
			</div>
			<div class="report_space">
				<crossReportData :CrossReferalData="ReportPageData.CrossReferalData" v-show="(ReportPageData.CrossReferalData.length > 0)"></crossReportData>
			</div>		
			<div class="report_space">
				<followupReportData :followupData="ReportPageData.opdData.follow_up" v-show="(ReportPageData.opdData.follow_up != '')"></followupReportData>
			</div>

		</div>
	</div>
</template>
<script>
	import provisionalDiagnosticReportData from './provisionalDiagnosticReportData.vue';
	import prescriptionData from './prescriptionData.vue';
	import prescriptionPrint from './prescriptionReportData.vue';
	import crossReportData from './crossReportData.vue';
	import adviseReportdata from './adviseReportdata.vue';
	import followupReportData from './followupReportData.vue';
	export default {
		props:['ReportPageData','prescriptData','checkedreportList','printType','adviceData'],
		components: {
         provisionalDiagnosticReportData,
          prescriptionPrint,
          crossReportData,
          adviseReportdata,
          followupReportData
       },
       methods: {
       	presp_count(array)
            {
                var vm=this;
                var array_presp=_.filter(array, ['remove', 'false']);
                vm.count_false=array_presp.length;
                return  vm.count_false;

            },
       }
	}
</script>