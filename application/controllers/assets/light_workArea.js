var workArea={iviewId:"",refreshUrl:"",expandUrl:"",helpUrl:"",personalizeUrl:"",isPage:true,method:"GET"};workArea.getUrl=function(b){var a=pageSupport.proxyModesUrl;a+="?iview_id=";a+=escape(workArea.iviewId);a+="&iview_mode=";a+=b;return a};workArea.PersonalizePage=function(d){try{var a=workArea.getUrl("edit");if(d){if(a.indexOf("?")==-1){a=a+"?refreshToken="+workArea.iviewId}else{a=a+"&refreshToken="+workArea.iviewId}if(workArea.method=="GET"){window.open(a,"PersonalizePage","toolbar=no,menubar=no,resizable=yes")}else{var f="isolatedWorkAreaForm";var g=document.getElementById(f);g.action=a;window.open("about:blank","PersonalizePage","toolbar=no,menubar=no,resizable=yes");var b=g.target;g.target="PersonalizePage";g.submit();g.target=b}}else{if(workArea.method=="GET"){window.open(a,"PersonalizePage","width=340,height=500,left=100,top=50,location=no,menubar=no,resizable=yes,status=no,toolbar=no,scrollbars=yes")}else{var f="isolatedWorkAreaForm";var g=document.getElementById(f);g.action=a;window.open("about:blank","PersonalizePage","width=340,height=500,left=100,top=50,location=no,menubar=no,resizable=yes,status=no,toolbar=no,scrollbars=yes");var b=g.target;g.target="PersonalizePage";g.submit();g.target=b}}}catch(c){}};workArea.OpenNewWindow=function(){try{var a=workArea.getUrl("default");a=a.replace(/\?windowId=[^&\n]*&/,"?");a=a.replace(/(\?windowId=[^&\n]*)|(&?windowId=[^&\n]*)/,"");if(workArea.method=="GET"){window.open(a)}else{var d="isolatedWorkAreaForm";var f=document.getElementById(d);f.action=a;var b=f.target;f.target="_blank";f.submit();f.target=b}}catch(c){}};workArea.Refresh=function(a){try{var f=document.getElementById("isolatedWorkArea");if(workArea.method=="GET"){if(f!=null){f.src=a}else{location.href=a}}else{var d="isolatedWorkAreaForm";var g=document.getElementById(d);var b=g.target;if(f!=null){g.target="isolatedWorkArea"}else{g.target="_self"}g.action=a;g.submit();g.target=b}}catch(c){}};workArea.refreshPage=function(b){try{var a=b.dataObject;if(a==null||a==workArea.iviewId){workArea.Refresh(workArea.refreshUrl)}}catch(c){}};workArea.Help=function(){try{if(workArea.method=="GET"){window.open(workArea.getUrl("help"),"help","width=340,height=500,left=100,top=50,location=no,menubar=no,resizable=yes,status=no,toolbar=no,scrollbars=yes")}else{var c="isolatedWorkAreaForm";var d=document.getElementById(c);d.action=workArea.getUrl("help");window.open("about:blank","help","width=340,height=500,left=100,top=50,location=no,menubar=no,resizable=yes,status=no,toolbar=no,scrollbars=yes");var a=d.target;d.target="help";d.submit();d.target=a}}catch(b){}};workArea.Details=function(){try{if(workArea.method=="GET"){window.open(workArea.getUrl("about"),"details","width=640,height=150,left=100,top=50,location=no,menubar=no,resizable=yes,status=no,toolbar=no,scrollbars=yes")}else{var c="isolatedWorkAreaForm";var d=document.getElementById(c);d.action=workArea.getUrl("about");window.open("about:blank","about","width=640,height=150,left=100,top=50,location=no,menubar=no,resizable=yes,status=no,toolbar=no,scrollbars=yes");var a=d.target;d.target="about";d.submit();d.target=a}}catch(b){}};workArea.OnRefresh=function(a){workArea.Refresh(workArea.refreshUrl)};workArea.OnExpand=function(a){workArea.OpenNewWindow()};workArea.OnHelp=function(a){workArea.Help()};workArea.OnPersonalize=function(a){workArea.PersonalizePage(workArea.isPage)};workArea.OnDetails=function(a){workArea.Details()};workArea.UpdatePageSupport=function(){var b=null;var a=document.getElementById("isolatedWorkArea");if(a){b=window.frames[a.id]}try{pageSupport.workArea=new WorkArea(workArea.iviewId,b)}catch(c){}};workArea.resizeIframe=function(){obj=document.getElementById("isolatedWorkArea");if(obj!=null){var a=3;if(document.getElementById("fullPageDiv")!=null){a+=9}if(navigator.appName=="Microsoft Internet Explorer"){if(document.getElementById("inner_page_div")){reqsize=(document.body.clientHeight-document.getElementById("inner_page_div").parentElement.offsetTop)-a;obj.style.pixelHeight=reqsize;document.getElementById("inner_page_div").style.pixelHeight=reqsize}else{obj.style.pixelHeight=document.body.clientHeight-a}}else{if(document.getElementById("inner_page_div")){reqsize=(document.body.clientHeight-document.getElementById("inner_page_div").offsetParent.offsetTop)-20;obj.style.height=reqsize}else{obj.style.height=window.innerHeight-a}}}};workArea.resizeIframe2=function(){obj=document.getElementById("isolatedWorkArea");if(obj!=null){var a=3;if(document.getElementById("fullPageDiv")!=null){a+=9}if(navigator.appName=="Microsoft Internet Explorer"){reqsize=(document.body.clientHeight-document.getElementById("inner_page_div").parentElement.offsetTop)-12;obj.style.pixelHeight=reqsize;document.getElementById("inner_page_div").style.pixelHeight=reqsize}else{reqsize=(document.body.clientHeight-document.getElementById("inner_page_div").offsetParent.offsetTop)-20;obj.style.height=reqsize}}};