function setFieldValue(a,b){if(a!=null){a.value=b
}}function updateDispatchForm(a){if(a!=null){a.action.value="update";
a.submit()
}}function validateDispatchForm(a){if(a!=null){a.action.value="validate";
a.submit()
}}function cancelDispatchForm(a){if(a!=null){a.action.value="cancelled";
a.submit()
}}function updateAlertsForm(a){if(a!=null){a.action.value="update";
a.submit()
}}function cancelAlertsForm(a){if(a!=null){a.action.value="cancelled";
a.submit()
}}function toggleDivDisplay(c,a){var b=document.getElementById(a);
if(b!=null){if(c.checked){b.style.display="block"
}else{b.style.display="none"
}}}function createCookie(c,d,e){if(e){var b=new Date();
b.setTime(b.getTime()+(e*24*60*60*1000));
var a="; expires="+b.toGMTString()
}else{var a=""
}document.cookie=c+"="+d+a+"; path=/"
}function readCookie(b){var e=b+"=";
var a=document.cookie.split(";");
for(var d=0;
d<a.length;
d++){var f=a[d];
while(f.charAt(0)==" "){f=f.substring(1,f.length)
}if(f.indexOf(e)==0){return f.substring(e.length,f.length)
}}return null
}function eraseCookie(a){createCookie(a,"",-1)
}function updateAlerts(b,d,c,a){var e=confirm(c);
if(e){if(b!=null){b.action.value="update";
b.submit()
}}}function refresh(a){var b=document.getElementById("captchaImage");
var c=Math.floor(Math.random()*1001);
b.src=a+"/simpleCaptcha.png#"+c;
return null
}function refreshElement(a,d){var b=document.getElementById(d);
var c=Math.floor(Math.random()*1001);
b.src=a+"/simpleCaptcha.png#"+c;
return null
}function refreshPCCaptcha(b){var c=document.getElementById("cpImgFirstTime");
var a=document.getElementById("cpImgReturning");
var d=Math.floor(Math.random()*1001);
c.src=b+"/simpleCaptcha.png#"+d;
a.src=b+"/simpleCaptcha.png#"+d;
return null
}function submitClaimCode(a,b){document.getElementById("oldRewardCode").value=b;
document.forms.rewardId.submit()
}function mask(d){if(d){var c=d.value;
var e=d.id;
document.getElementById(e).setAttribute("data-val",c);
if(c.length>4){var b=c.length-4;
var a=new Array(b+1).join("*");
c=a+c.substr(c.length-4)
}document.getElementById(e).value=c
}}function unmask(c){if(c){var b=c.value;
var d=c.id;
var a=document.getElementById(d).getAttribute("data-val");
document.getElementById(d).value=a
}};