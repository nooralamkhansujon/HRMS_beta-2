import Api from 'api.js';


export default {

   login(form){
      return  Api.post('/api/login',form);
   }
}

