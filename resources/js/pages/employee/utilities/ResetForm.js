export default function ResetForm(form){
    for(let column in form){
        form[column] = "";
    }
}
