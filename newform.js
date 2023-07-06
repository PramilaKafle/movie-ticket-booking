





    
    
function validatereg(){
    var firstname=document.form.firstname.value;
    var lastname=document.form.lastname.value;
    var email=document.form.email.value;
    var address=document.form.address.value;
    var gender=document.form.gender.value;
    var name=document.form.name.value;
    var pass=document.form.pass.value;
    var conpass=document.form.conpass.value;

    if (firstname==null || firstname==""){  
      document.getElementById('name').innerHTML="*This field is required.*"; 
      return false;  
                }
                if(firstname.legth<=2||(firstname.length>10)){
                  document.getElementById('name').innerHTML="*fullname length must be between 2 and 10.*"; 
                  return false;  
               }
                if(!isNaN(firstname)){
                  document.getElementById('name').innerHTML="*Only characters are allowed*"; 
                  return false;  
                }
                if (lastname==null || lastname==""){  
                  document.getElementById('lname').innerHTML="*This field is required.*"; 
                  return false;  
                            }
                            if(lastname.legth<=2||(lastname.length>10)){
                              document.getElementById('lname').innerHTML="*lastname length must be between 2 and 10.*"; 
                              return false;  
                           }
                            if(!isNaN(lastname)){
                              document.getElementById('lname').innerHTML="*Only characters are allowed*"; 
                              return false;  
                            }
                            if (email==null || email==""){  
                              document.getElementById('emails').innerHTML="*This field is required.*"; 
                                         return false;  
                                      }
                                      if(email.indexOf('@') <=0){
                                        document.getElementById('emails').innerHTML="*Invalid position of @*"; 
                                         return false;  
                                      }
                                      if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.'))
                                {
                                  document.getElementById('emails').innerHTML="*. Invalid position*"; 
                                  return false;  
                                }
                                if (address==null || address==""){  
                                  document.getElementById('address').innerHTML="*Please enter your address.*"; 
                                             return false;  
                                          }
//if(gender.checked==false){
 // document.getElementById('gen').innerHTML="*Please select your gender.*"
 // return false;
//}


                             if (name==null || name==""){  
                             document.getElementById('username').innerHTML="*This field is required.*"; 
                                  return false;  
                              }
                             if(name.legth<=2||(name.length>20)){
                         document.getElementById('username').innerHTML="*fullname length must be between 2 and 20.*"; 
                                return false;  
                                   }
                             if(!isNaN(name)){
                             document.getElementById('username').innerHTML="*Only characters are allowed*"; 
                                 return false;  
                                      }
            
            
                if(pass.length<6){  
                    document.getElementById('pass').innerHTML="*Password must be at least 6 characters long.*";  
                   return false;  }
                   if(conpass!=pass){
                    document.getElementById('conpass').innerHTML="*Password doestnot match.*";  
                    return false; 
                   }
}












function contactvalidation(){
    var fullname=document.form.fullname.value;
    var email=document.form.email.value;
    var contact=document.form.contact.value;
    if (fullname==null || fullname==""){  
        document.getElementById('name').innerHTML="*This field is required.*"; 
                   return false;  
                }


                if(fullname.legth<=2||(fullname.length>20)){
                  document.getElementById('name').innerHTML="*fullname length must be between 2 and 20.*"; 
                  return false;  
               }
                if(!isNaN(fullname)){
                  document.getElementById('name').innerHTML="*Only characters are allowed*"; 
                  return false;  
                }

                if (email==null || email==""){  
                  document.getElementById('emails').innerHTML="*This field is required.*"; 
                             return false;  
                          }
                          if(email.indexOf('@') <=0){
                            document.getElementById('emails').innerHTML="*Invalid position of @*"; 
                             return false;  
                          }
                          if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.'))
                    {
                      document.getElementById('emails').innerHTML="*. Invalid position*"; 
                      return false;  
                    }
        

                           if (contact==null || contact==""){  
                            document.getElementById('number').innerHTML="*This field is required.*"; 
                                       return false;  
                                    }
                                    if(isNaN(contact)){
                                      document.getElementById('number').innerHTML="*Only digits are allowed.*"; 
                                      return false;  
                                    }
                                    if(contact.length!=10){
                                      document.getElementById('number').innerHTML="*Contact must be 10 digits.*"; 
                                      return false; 
                                    }
                    
}

function paymentvalidate()
{
  var cardnum=document.form.cardnumber.value;
  var cardexpiry=document.form.cardexpiry.value;
  var cardcvc=document.form.cardcvc.value;
  var cardname=document.form.cardname.value;
  
  if ( cardnum==null || cardnum==""){  
    document.getElementById('cardnum').innerHTML="*This field cannot be empty.*"; 
         return false;  
     }
     if ( cardnum.length<16 ){  
      document.getElementById('cardnum').innerHTML="*Invalid length of number.*"; 
           return false;  
       } 
       if(isNaN(cardnum)){
        document.getElementById('cardnum').innerHTML="*Only digits are allowed.*"; 
        return false;  
      }



     


     if ( cardexpiry==null || cardexpiry==""){  
      document.getElementById('cardexpiry').innerHTML="*This field cannot be empty.*"; 
           return false;  
       }
       if(isNaN(cardexpiry)){
        document.getElementById('cardexpiry').innerHTML="*Invalid format.*"; 
        return false;  
      }


       if ( cardcvc==null || cardcvc==""){  
        document.getElementById('cardcvc').innerHTML="*This field cannot be empty.*"; 
             return false;  
         }
         if (!(cardcvc.length==3)){  
          document.getElementById('cardcvc').innerHTML="*Invalid number*"; 
               return false;  
           }
           if(isNaN(cardcvc)){
            document.getElementById('cardcvc').innerHTML="*Invalid number.*"; 
            return false;  
          }
    


         if ( cardname==null || cardname==""){  
          document.getElementById('cardname').innerHTML="*This field cannot be empty.*"; 
               return false;  
           }
           if(!isNaN(cardname)){
            document.getElementById('cardname').innerHTML="*Only characters are allowed*"; 
            return false;  
          }
     //
}