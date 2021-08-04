import Api from './Api.js';
import Csrf from './Csrf.js';

export default   {

   async login(form){
       await  Csrf.getCsrf();
       return  Api.post('login',form);
   },
   async logout(){
       await  Csrf.getCsrf();
       return Api.get('logout');
   }
}

