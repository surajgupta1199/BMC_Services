function getUrl(n){return url=n.attr("href")}function countDown(n){timed=setInterval(function(){$("#pop_content > span").text("Auto-redirecting in "+n+" sec(s)"),n--||$("#my_popup").popup("hide")},1e3)}function GoToURL(){if(clearInterval(timed),$("#pop_content > span").text(""),navigator.userAgent.match(/MSIE\s(?!9.0)/)){var n=document.createElement("a");n.href=url,n.target="_blank",document.body.appendChild(n),n.click()}else{var e=window.open(url,"_blank");e.focus()}}$(function(){$("#my_popup").popup({escape:!1,blur:!1,transition:"0.3s",scrolllock:!0,openelement:".xtern",onopen:function(){countDown(3)},onclose:function(){GoToURL()}})});