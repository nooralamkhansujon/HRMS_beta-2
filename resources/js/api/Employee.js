import Api from './Api.js';

export default   {

  addEmployee(form){
       return  Api().post('employees/store',form);
   },
}

