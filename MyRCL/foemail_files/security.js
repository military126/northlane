function checkAns(d){var b=d.value;
var f=d.id;
var e="ut_"+f;
var c=document.getElementById("def_txt").value;
var a=document.getElementById(e).value;
document.getElementById(f).style.borderColor="";
if(b==c){d.value="";
if(a=="defaultText"){document.getElementById(e).value=""
}}else{document.getElementById(f).type="text"
}}function changeAns(d){var b=d.value;
var f=d.id;
var e="ut_"+f;
var c=document.getElementById("def_txt").value;
var a=document.getElementById(e).value;
if(b==""){d.value=c;
if(a==""){document.getElementById(e).value="defaultText"
}}else{document.getElementById(f).type="password"
}}function callDevice(){document.getElementById("devicePrintId").value=encode_deviceprint()
}function callDevice2(){document.getElementById("devicePrintId2").value=encode_deviceprint()
}function changeQues(){var c=document.getElementsByName("finalQuestions");
var b=document.getElementsByName("finalUserAnswer");
var a=document.getElementById("def_txt").value;
var f=0;
var g=0;
for(var e=0;
e<c.length;
e++){if(c[e].selectedIndex!=0){f++
}}for(var d=0;
d<b.length;
d++){if(b[d].value!=a&&b[d].value!=""){g++
}}if(f==b.length&&g==b.length){document.getElementById("disbutton").disabled=false
}else{document.getElementById("disbutton").disabled=true
}}function changeChar(){var c=document.getElementsByName("finalQuestions");
var a=document.getElementById("def_txt").value;
var f=0;
var g=0;
for(var e=0;
e<c.length;
e++){if(c[e].selectedIndex!=0){f++
}}if(f==c.length){var b=document.getElementsByName("finalUserAnswer");
for(var d=0;
d<b.length;
d++){if(b[d].value!=a&&b[d].value!=""){g++
}}}if(f==c.length&&g==c.length){document.getElementById("disbutton").disabled=false
}else{document.getElementById("disbutton").disabled=true
}}function changeTxt(){var a=document.getElementById("def_txt").value;
var d=0;
var b=document.getElementsByName("finalUserAnswer");
for(var c=0;
c<b.length;
c++){if(b[c].value!=a&&b[c].value!=""){d++
}}if(d==b.length){document.getElementById("disbutton").disabled=false
}else{document.getElementById("disbutton").disabled=true
}}function clickcancel(b,a,c){window.location=b+c
}function enablebutton1(c){var b=document.getElementById("email").value;
var a=document.getElementById("mobilePhoneLineNumber").value;
if(b!=""&&(a!=""||c!="")){if(null!=document.getElementById("disbutton")){document.getElementById("disbutton").disabled=false
}}else{if(null!=document.getElementById("disbutton")){document.getElementById("disbutton").disabled=true
}}}function enablebutton2(b){var a=document.getElementById("email").value;
var c=document.getElementById("primaryPhoneLineNumber").value;
if(a!=""&&(b!=""||c!="")){if(null!=document.getElementById("disbutton")){document.getElementById("disbutton").disabled=false
}}else{if(null!=document.getElementById("disbutton")){document.getElementById("disbutton").disabled=true
}}}function enablebutton3(b){var b=document.getElementById("email").value;
var a=document.getElementById("mobilePhoneLineNumber").value;
var c=document.getElementById("primaryPhoneLineNumber").value;
if(b!=""&&(a!=""||c!="")){if(null!=document.getElementById("disbutton")){document.getElementById("disbutton").disabled=false
}}else{if(null!=document.getElementById("disbutton")){document.getElementById("disbutton").disabled=true
}}}function checkVirtualExpress(b,a){if(a=="Y"){document.getElementById("mobilePhoneLineNumber").readOnly=true;
document.getElementById("primaryPhoneLineNumber").readOnly=true;
document.getElementById("mobilePhonePrefix").readOnly=true;
document.getElementById("primaryPhonePrefix").readOnly=true;
document.getElementById("mobilePhoneLineNumber").addEventListener("keydown",function(c){c.preventDefault()
});
document.getElementById("primaryPhoneLineNumber").addEventListener("keydown",function(c){c.preventDefault()
});
document.getElementById("mobilePhonePrefix").addEventListener("keydown",function(c){c.preventDefault()
});
document.getElementById("primaryPhonePrefix").addEventListener("keydown",function(c){c.preventDefault()
})
}}function selectMethod(){if(((document.getElementById("primaryphone")!=null&&document.getElementById("primaryphone").checked==true)||(document.getElementById("mobilephone")!=null&&document.getElementById("mobilephone").checked==true)||(document.getElementById("primaryphone")==null||document.getElementById("mobilephone")==null))){document.getElementById("disbutton").disabled=false
}else{document.getElementById("disbutton").disabled=true
}}function selectPhone(){if(((document.getElementById("method1")!=null&&document.getElementById("method1").checked==true)||(document.getElementById("method2")!=null&&document.getElementById("method2").checked==true))){document.getElementById("disbutton").disabled=false
}else{document.getElementById("disbutton").disabled=true
}}function enterotp(a){if(null!=document.getElementById("otp")&&document.getElementById("otp").value!=""){document.getElementById("disbutton").disabled=false
}else{document.getElementById("disbutton").disabled=true
}}function submitQuestions(a){document.getElementById("disbutton").disabled=true;
document.forms[0].submit()
}function CheckPasswordStrength(b,e){var h=document.getElementById("password_strength");
if(b.length==0){h.innerHTML="";
return
}var d=new Array();
d.push("[A-Z]");
d.push("[a-z]");
d.push("[0-9]");
var g=0;
for(var c=0;
c<d.length;
c++){if(new RegExp(d[c]).test(b)){g++
}}if(/\s/.test(b)){g--
}else{g++
}if(b.match("password")){g--
}else{g++
}if(g>3&&b.length>8){g++
}var a="";
var f="";
if(g<5){if(e=="en_US"){f="X Invalid password"
}else{if(e=="sp_US"){f="X Contrase�a no v�lida"
}else{if(e=="fr_CA"){f="X Mot de passe invalide"
}}}a="red"
}else{if(g>=5){f="&#10004;";
a="darkgreen"
}}h.innerHTML=f;
h.style.color=a
}function CheckConfPasswordStrength(j,g,b){var a=document.getElementById("confpassword_strength");
if(g.length==0){a.innerHTML="";
return
}var h=new Array();
h.push("[A-Z]");
h.push("[a-z]");
h.push("[0-9]");
var e=0;
for(var f=0;
f<h.length;
f++){if(new RegExp(h[f]).test(g)){e++
}}if(/\s/.test(j)){e--
}else{e++
}if(j.match("password")){e--
}else{e++
}if(e>3&&g.length>8&&j==g){e++
}var d="";
var c="";
if(e<5){if(b=="en_US"){c="X Invalid password"
}else{if(b=="sp_US"){c="X Contrase�a no v�lida"
}else{if(b=="fr_CA"){c="X Mot de passe invalide"
}}}d="red"
}else{if(e>=5){c="&#10004;";
d="darkgreen"
}}a.innerHTML=c;
a.style.color=d
}function maskThis(a){var b=a.id;
a.type="password"
}function unmaskThis(a){var b=a.id;
a.type="text"
}function masklast4Digits(c){if(null!=c){var b=c.value;
var d=b.trim();
c.setAttribute("data-val",c.value);
if(b.length>4){var a=b.length-4;
b=new Array(a+1).join("*");
c.setAttribute("data-val",c.value);
c.value=b+d.substr(d.length-4)
}}}function unmask4Digits(a){a.value=a.getAttribute("data-val")
}function copyOriginalValuetoMaskObj(b,a){if(null!=b&null!=a){a.value=b.value
}}function messageChar(c){var a=c.value.length;
var b=document.getElementById("current");
b.innerHTML=a;
if(c.value.length>=500){c.value=c.value.slice(0,500)
}};