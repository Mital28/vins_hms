<template>
	<div class="col-lg-12 mb-3">
   
		<div class="card bg-success-card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-2"><h4>Laboratory List</h4></div>
          <div class="col-md-2"><a href="assets/files/LABORATORY.xlsx" class="btn btn-info">Sample File</a></div>
          <div class="col-md-5"> 
              <form id="app" action="laboratory/importLaboratoryFile" method="post" enctype="multipart/form-data" v-on:submit="verifyImportFile">
                 <div class="large-12 medium-12 small-12 cell">
                    <label>File
                      <input type="file" id="file" ref="file" name="file"/>
                    </label>
                      <button type="submit" name="import" class="btn btn-warning">Import</button>
                  </div>
                </form>
          </div>
          <div class="col-md-2 text-right"><button type="button" class="btn btn-primary" @click="setAddLaboratory()">Add</button></div></div>
        </div>
            <div class="card-body">
            	<div data-v-744e717e="" class="card p-3"  v-if="(laboratoryPagination.total > 0)">
              		<div data-v-744e717e="" class="table-header">
                  		<h4 data-v-744e717e="" class="table-title text-center mt-3"></h4>
              		</div>
              		<div data-v-744e717e="" class="table-responsive">
              			<table data-v-744e717e="" class="table">
                  			<thead data-v-744e717e="">
                    			<tr data-v-744e717e="">
                    				 <th data-v-744e717e="" class="sortable sorting-asc " style="">
                                		Name
                        			 </th>
                        			 <th style="width: auto;">
                            			Type
                             			<i data-v-744e717e="" class="fa float-right"></i> 
                             		</th>
                               
                        			 <th data-v-744e717e="" class="sortable" style="width: auto;">
                           				 Action
                            			<i data-v-744e717e="" class="fa float-right"></i>
                        			 </th>
                        		</tr>
                  			</thead>
                  			<tbody data-v-744e717e=""  v-for="laboratoryData in getLaboratoryData">
                  				 <tr data-v-744e717e="" :id="'presp_'+laboratoryData.id">
                  				 	<td data-v-744e717e="" class="text-uppercase">
                       					{{ laboratoryData.name}}
                      				</td>
                      				<td data-v-744e717e="" class="text-uppercase">
                                <span v-if="laboratoryData.type==1">
                                    Blood
                                </span>
                                 <span v-else-if="laboratoryData.type==2">
                                    Urine
                                </span>
                                 <span v-else-if="laboratoryData.type==3">
                                    CSF
                                </span>
                                 <span v-else-if="laboratoryData.type==4">
                                    BFA
                                </span>
                                 <span v-else>
                                    All Type
                                </span>
                       					
                      				</td>
                      				<td data-v-744e717e="" class="">
                      					<a> <i class="fa fa-remove text-danger mr-3 text-info mr-3" @click="removeLaboratory(laboratoryData.id)" title="Laboratory Delete"></i></a>
                                <a  @click="setLaboratoryId(laboratoryData.id)" title="Laboratory Edit"> <i class="fa fa-pencil text-info mr-3 text-info mr-3" ></i></a>
                      				</td>
                  				 </tr>
                  			</tbody>
                		</table>
              		</div>
              		<div data-v-744e717e="" class="table-footer">
                		<div data-v-744e717e="" class="datatable-length float-left pl-3">
                  			<span data-v-744e717e="">Rows per page:</span>
                    			<select data-v-744e717e="" class="custom-select" id="perPageNoLaboratory"  @change="setPerPageLaboratory" v-model="perPageLaboratory">
                    				<option data-v-744e717e="" value="2">2</option>
                     				<option data-v-744e717e="" value="5">5</option>
                      				<option data-v-744e717e="" value="10">10</option>
                      				<option data-v-744e717e="" value="20">20</option>
                      				<option data-v-744e717e="" value="50">50</option>
                   					<!--     <option data-v-744e717e="" value="-1">All</option> -->
                    			</select>
                          
                        <div data-v-744e717e="" class="datatable-info  pb-2 mt-6">
                            <ul class="pagination">
                              <li> <a href="javascript:void(0)"  @click="getLaboratoryList('/laboratory/getLaboratoryList?page=1',perPage)" class="previous" v-if="laboratoryPagination.current_page!=1">&laquo; First</a></li>
                              <li> <a href="javascript:void(0)"  @click="getLaboratoryList(laboratoryPagination.prev_page_url)" class="previous" v-if="laboratoryPagination.current_page!=1">&laquo; Prev</a></li>
                             <!--  <li  v-for="record_pagination,index in laboratoryPagination.last_page" v-if="index<=2"><a v-bind:class="[laboratoryPagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getLaboratoryList('/laboratory/getLaboratoryList?page='+index)">{{index}}</a></li> -->
                             <li v-for="record_pagination,index in laboratoryPagination.last_page" >
                                <span v-if="Math.abs(record_pagination - laboratoryPagination.current_page)<3">
                                    <a v-bind:class="[laboratoryPagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getLaboratoryList('/laboratory/getLaboratoryList?page='+index,perPage)">{{index}}</a>
                                </span>
                              </li> 
                              <li><a href="javascript:void(0)"  v-if="laboratoryPagination.current_page!=laboratoryPagination.last_page" @click="getLaboratoryList(laboratoryPagination.next_page_url)" class="next">Next &raquo;</a></li>
                               <li><a href="javascript:void(0)"  v-if="laboratoryPagination.current_page!=laboratoryPagination.last_page" @click="getLaboratoryList('/laboratory/getLaboratoryList?page='+laboratoryPagination.last_page,perPage)" class="next">Last &raquo;</a></li>
                            </ul>
                        </div>
                           
                     		<div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(laboratoryPagination.total > 0)">
                        		<span data-v-744e717e="">Showing </span> {{laboratoryPagination.current_page}} - {{laboratoryPagination.to}} of {{laboratoryPagination.total}}
                        		<span data-v-744e717e="">records</span>
                   			</div>
               			</div>
              		 </div>
              	</div>
                  <div data-v-744e717e="" class="card p-3" v-else>
                     <div data-v-744e717e="" class="table-responsive">
                         <span> No Record Found</span>
                      </div>
                 </div>
            </div>
		</div>
	</div>
</template>
<script>
	import User from '../../../api/users.js';
  
	export default {
		 data() {
		 	return {
		 	  'currentYear': (new Date()).getFullYear(),
		 	  'user':this.$store.state.Users.userDetails.first_name + " "+ this.$store.state.Users.userDetails.last_name ,
        'user_id':0,
        'user_type':this.$store.state.Users.userDetails.user_type,
        'getLaboratoryData' : '',
        'pagination': {},
        'perPage' : 5,
        'perPageLaboratory' : 5,
        'laboratoryPagination': {},
        'import_file':''
		 	}
		 },
       created: function() {
            
        },
		  mounted(){
		 	let vm = this;
		 	 if(vm.$store.state.Users.userDetails.user_type != '4'){
          vm.$root.$emit('logout','You are not authorise to access this page'); 
        }
		
       vm.getLaboratoryList('/laboratory/getLaboratoryList');
      
		 },
     components: {
      
    },
		 methods:{
      verifyImportFile: function(event)
      {
          let files=this.$refs.file.files[0];
          if(files)
          {
              return true;
          }
          else
          {
            toastr.error('Please Add Files.', 'Add Laboratory', {timeOut: 5000});
            event.preventDefault();
          }
           
      },
      removeLaboratory(id)
      {
          let vm=this;
            User.deleteLaboratory(id).then(
                (response)=> {
                 
                  if(response.data.code == 200){
                    //$('#presp_'+id).remove();
                    vm.getLaboratoryList('/laboratory/getLaboratoryList');
                    toastr.success('Laboratory deleted successfully', 'Add Laboratory', {timeOut: 5000});
                      //this.initialState();
                      
                  } else if (response.data.code == 300) {
                      toastr.error('Something Went wrong.', 'Add Laboratory', {timeOut: 5000});
                      //this.initialState(); 
                  }
                  else
                  {
                      toastr.error('Something Went wrong.', 'Add Laboratory', {timeOut: 5000});
                  }
                  
                },
                (error)=>{
                }

              )
      },
      setLaboratoryId(id)
      {
        let vm=this;
          vm.$store.dispatch('SetLaboratoryId', id); 
          vm.$store.dispatch('SetLaboratoryPage','EDIT');
          vm.$router.push({'name':'laboratory_add'});
      },
      setAddLaboratory()
      {
          let vm=this;
          vm.$store.dispatch('SetLaboratoryId', ''); 
          vm.$store.dispatch('SetLaboratoryPage','ADD');
          vm.$router.push({'name':'laboratory_add'});
      },
		 	getLaboratoryList(page_url){
		 		let vm = this;
		 		let userId = vm.user_id;
		 		let userType = vm.user_type;
		 	
        let no_of_page = '';
        no_of_page = vm.perPageLaboratory;

		 		User.getLaboratoryList(page_url,userType,no_of_page,userId).then(
		 			 (response) => {
              vm.getLaboratoryData = response.data.data.data;
		 			 	  vm.makePagination( response.data.data);
		 			 },
		 			 (error) => {
                  	 },
		 		);
		 	},
		 	makePagination: function(data,status){
          let pagination = {
              current_page: data.current_page,
              last_page: data.last_page,
              next_page_url: data.next_page_url,
              prev_page_url: data.prev_page_url,
              total : data.total,
              from : data.from,
              to : data.to
          }
          this.laboratoryPagination = pagination;
      },
          
    setPerPage(e){
      let vm =this;
      vm.getLaboratoryList('/laboratory/getLaboratoryList');
    },
    setPerPageLaboratory(e){
      let vm =this;
      vm.getLaboratoryList('/laboratory/getLaboratoryList');
    },
	},
		
}
</script>
<style>
.pagination  {
  margin-top: 20px;
}

.pagination a
{
  display: inline-block;
    padding: 8px 20px;
    margin-right: 4px;
    border-radius: 3px;
    border: solid 1px #c0c0c0;
    background: #e9e9e9;
    box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    color: #717171;
    text-shadow: 0px 1px 0px rgba(255,255,255, 1);
}
.pagination a.active {
    background-color: #4CAF50;
    color: white;
}
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>