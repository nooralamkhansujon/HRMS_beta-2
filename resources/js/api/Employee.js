import Api from './Api.js';

export default   {

  addEmployee(form){
       return  Api().post('employees/store',form);
   },
   getEmployees(){
       return Api().get('employees/list');
   },
   getEmployeeDetails(id){
       return Api().get(`employees/${id}`);
   }
}

