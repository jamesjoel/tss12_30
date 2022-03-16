import { FormGroup } from "@angular/forms";

export function checkRePass(){
    return function(abc : FormGroup){
        let a = abc.controls.password;
        let b = abc.controls.re_password;

        // if re_password has "required" error then return to the page
        if(b.errors && !b.errors.matchErr)
        {
            return;
        }

        if(a.value != b.value)
        {
           b.setErrors({ matchErr : true }) ;
        }
    }
}

export function checkNum(){
    return function(myForm : FormGroup){
        let a = myForm.controls.contact;

        if(a.errors && !a.errors.numErr)
        {
            return;
        }

        if(isNaN(a.value)==true)
        {
            a.setErrors({ numErr : true });
        }
    }
}

export function sizeCheck(){
    return function(myForm:FormGroup){
        let a = myForm.controls.contact;

        if(a.errors && !a.errors.sizeErr)
        {
            return;
        }

        if(a.value.length != 10)
        {
            a.setErrors({ sizeErr : true });
        }
    }
}