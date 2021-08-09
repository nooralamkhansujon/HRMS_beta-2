import Api from './Api.js';

export default   {

   departmentList(){
       return  Api().get('/department/list');
   },
}

