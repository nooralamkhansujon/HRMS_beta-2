import Api from './Api';

export default  {
     async getCsrf(){
         return Api.get('/sanctum/csrf-cookie').then();
     }
}
