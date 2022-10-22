function addtoken(b){$(".warning").remove();
var a='<input type="hidden" name="oprequestid" value="';
a+=b;
a+='"/>';
a+='<input type="hidden" name="bzoffset" value="';
a+=new Date().getTimezoneOffset();
a+='"/>';
$("form").append(a);
$("a[href]").each(function(){var c=$(this).attr("href");
if(c!=null&&c.indexOf("#")==-1&&c.indexOf("javascript")==-1&&c.indexOf("http://")==-1&&c.indexOf("https://")==-1&&c.indexOf("mailto:")==-1){c=c+((c.indexOf("?")!=-1)?"&":"?")+"oprequestid="+b+"&bzoffset="+new Date().getTimezoneOffset();
$(this).attr("href",c)
}})
};