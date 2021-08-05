import Api from './Api.js';
import Csrf from './Csrf.js';

export default   {

   async addEmployee(form){
       await  Csrf.getCsrf();
       return  Api.post('employees/store',form);
   },
}

