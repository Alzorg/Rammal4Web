function getvalue(  ){
var m = frm.Name.value ;
var e = frm.Email.value ;
var s = frm.Subject.value ;
var ma = frm.Message.value ;
document.getElementById('accsepte').innerHTML="      your message is sent successfully "+m;

frm.Name.value="";
frm.Email.value="";
frm.Subject.value="";
frm.Message.value="";

}