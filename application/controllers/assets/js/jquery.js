!function(t){var e,o,i=t(window),n={},a=[],s=[],p=null,l="_open",d="_close",r=[],c=null,u=/(iPad|iPhone|iPod)/g.test(navigator.userAgent),f="a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, *[tabindex], *[contenteditable]",h={_init:function(e){var o=t(e),i=o.data("popupoptions");s[e.id]=!1,a[e.id]=0,o.data("popup-initialized")||(o.attr("data-popup-initialized","true"),h._initonce(e)),i.autoopen&&setTimeout(function(){h.show(e,0)},0)},_initonce:function(o){var i,n,a=t(o),s=t("body"),d=a.data("popupoptions");if(p=parseInt(s.css("margin-right"),10),c=void 0!==document.body.style.webkitTransition||void 0!==document.body.style.MozTransition||void 0!==document.body.style.msTransition||void 0!==document.body.style.OTransition||void 0!==document.body.style.transition,"tooltip"==d.type&&(d.background=!1,d.scrolllock=!1),d.backgroundactive&&(d.background=!1,d.blur=!1,d.scrolllock=!1),d.scrolllock){var r,f;"undefined"==typeof e&&(r=t('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),f=r.children(),e=f.innerWidth()-f.height(99).innerWidth(),r.remove())}if(a.attr("id")||a.attr("id","j-popup-"+parseInt(1e8*Math.random(),10)),a.addClass("popup_content"),s.prepend(o),a.wrap('<div id="'+o.id+'_wrapper" class="popup_wrapper" />'),i=t("#"+o.id+"_wrapper"),i.css({opacity:0,visibility:"hidden",position:"absolute"}),u&&i.css("cursor","pointer"),"overlay"==d.type&&i.css("overflow","auto"),a.css({opacity:0,visibility:"hidden",display:"inline-block"}),d.setzindex&&!d.autozindex&&i.css("z-index","100001"),d.outline||a.css("outline","none"),d.transition&&(a.css("transition",d.transition),i.css("transition",d.transition)),a.attr("aria-hidden",!0),d.background&&!t("#"+o.id+"_background").length){s.prepend('<div id="'+o.id+'_background" class="popup_background"></div>');var b=t("#"+o.id+"_background");b.css({opacity:0,visibility:"hidden",backgroundColor:d.color,position:"fixed",top:0,right:0,bottom:0,left:0}),d.setzindex&&!d.autozindex&&b.css("z-index","100000"),d.transition&&b.css("transition",d.transition)}"overlay"==d.type&&(a.css({textAlign:"left",position:"relative",verticalAlign:"middle"}),n={position:"fixed",width:"100%",height:"100%",top:0,left:0,textAlign:"center"},d.backgroundactive&&(n.position="relative",n.height="0",n.overflow="visible"),i.css(n),i.append('<div class="popup_align" />'),t(".popup_align").css({display:"inline-block",verticalAlign:"middle",height:"100%"})),a.attr("role","dialog");var v=d.openelement?d.openelement:"."+o.id+l;t(v).each(function(e,o){t(o).attr("data-popup-ordinal",e),o.id||t(o).attr("id","open_"+parseInt(1e8*Math.random(),10))}),a.attr("aria-labelledby")||a.attr("aria-label")||a.attr("aria-labelledby",t(v).attr("id")),"hover"==d.action?(d.keepfocus=!1,t(v).on("mouseenter",function(e){h.show(o,t(this).data("popup-ordinal"))}),t(v).on("mouseleave",function(t){h.hide(o)})):t(document).on("click",v,function(e){e.preventDefault();var i=t(this).data("popup-ordinal");setTimeout(function(){h.show(o,i)},0)}),d.closebutton&&h.addclosebutton(o),d.detach?a.hide().detach():i.hide()},show:function(n,l){var u=t(n);if(!u.data("popup-visible")){u.data("popup-initialized")||h._init(n),u.attr("data-popup-initialized","true");var f=t("body"),v=u.data("popupoptions"),g=t("#"+n.id+"_wrapper"),m=t("#"+n.id+"_background");if(b(n,l,v.beforeopen),s[n.id]=l,setTimeout(function(){r.push(n.id)},0),v.autozindex){for(var y=document.getElementsByTagName("*"),_=y.length,k=0,w=0;_>w;w++){var x=t(y[w]).css("z-index");"auto"!==x&&(x=parseInt(x,10),x>k&&(k=x))}a[n.id]=k,v.background&&a[n.id]>0&&t("#"+n.id+"_background").css({zIndex:a[n.id]+1}),a[n.id]>0&&g.css({zIndex:a[n.id]+2})}v.detach?(g.prepend(n),u.show()):g.show(),o=setTimeout(function(){g.css({visibility:"visible",opacity:1}),t("html").addClass("popup_visible").addClass("popup_visible_"+n.id),g.addClass("popup_wrapper_visible")},20),v.scrolllock&&(f.css("overflow","hidden"),f.height()>i.height()&&f.css("margin-right",p+e)),v.backgroundactive&&u.css({top:(i.height()-(u.get(0).offsetHeight+parseInt(u.css("margin-top"),10)+parseInt(u.css("margin-bottom"),10)))/2+"px"}),u.css({visibility:"visible",opacity:1}),v.background&&(m.css({visibility:"visible",opacity:v.opacity}),setTimeout(function(){m.css({opacity:v.opacity})},0)),u.data("popup-visible",!0),h.reposition(n,l),u.data("focusedelementbeforepopup",document.activeElement),v.keepfocus&&(u.attr("tabindex",-1),setTimeout(function(){"closebutton"===v.focuselement?t("#"+n.id+" ."+n.id+d+":first").focus():v.focuselement?t(v.focuselement).focus():u.focus()},v.focusdelay)),t(v.pagecontainer).attr("aria-hidden",!0),u.attr("aria-hidden",!1),b(n,l,v.onopen),c?g.one("transitionend",function(){b(n,l,v.opentransitionend)}):b(n,l,v.opentransitionend)}},hide:function(e,i){var n=t.inArray(e.id,r);if(-1!==n){o&&clearTimeout(o);var a=t("body"),l=t(e),d=l.data("popupoptions"),u=t("#"+e.id+"_wrapper"),f=t("#"+e.id+"_background");l.data("popup-visible",!1),1===r.length?t("html").removeClass("popup_visible").removeClass("popup_visible_"+e.id):t("html").hasClass("popup_visible_"+e.id)&&t("html").removeClass("popup_visible_"+e.id),r.splice(n,1),u.hasClass("popup_wrapper_visible")&&u.removeClass("popup_wrapper_visible"),d.keepfocus&&!i&&setTimeout(function(){t(l.data("focusedelementbeforepopup")).is(":visible")&&l.data("focusedelementbeforepopup").focus()},0),u.css({visibility:"hidden",opacity:0}),l.css({visibility:"hidden",opacity:0}),d.background&&f.css({visibility:"hidden",opacity:0}),t(d.pagecontainer).attr("aria-hidden",!1),l.attr("aria-hidden",!0),b(e,s[e.id],d.onclose),c&&"0s"!==l.css("transition-duration")?l.one("transitionend",function(t){l.data("popup-visible")||(d.detach?l.hide().detach():u.hide()),d.scrolllock&&setTimeout(function(){a.css({overflow:"visible","margin-right":p})},10),b(e,s[e.id],d.closetransitionend)}):(d.detach?l.hide().detach():u.hide(),d.scrolllock&&setTimeout(function(){a.css({overflow:"visible","margin-right":p})},10),b(e,s[e.id],d.closetransitionend))}},toggle:function(e,o){t(e).data("popup-visible")?h.hide(e):setTimeout(function(){h.show(e,o)},0)},reposition:function(e,o){{var n=t(e),a=n.data("popupoptions"),s=t("#"+e.id+"_wrapper");t("#"+e.id+"_background")}if(o=o||0,"tooltip"==a.type){s.css({position:"absolute"});var p;p=a.tooltipanchor?t(a.tooltipanchor):a.openelement?t(a.openelement).filter('[data-popup-ordinal="'+o+'"]'):t("."+e.id+l+'[data-popup-ordinal="'+o+'"]');var d=p.offset();"right"==a.horizontal?s.css("left",d.left+p.outerWidth()+a.offsetleft):"leftedge"==a.horizontal?s.css("left",d.left+p.outerWidth()-p.outerWidth()+a.offsetleft):"left"==a.horizontal?s.css("right",i.width()-d.left-a.offsetleft):"rightedge"==a.horizontal?s.css("right",i.width()-d.left-p.outerWidth()-a.offsetleft):s.css("left",d.left+p.outerWidth()/2-n.outerWidth()/2-parseFloat(n.css("marginLeft"))+a.offsetleft),"bottom"==a.vertical?s.css("top",d.top+p.outerHeight()+a.offsettop):"bottomedge"==a.vertical?s.css("top",d.top+p.outerHeight()-n.outerHeight()+a.offsettop):"top"==a.vertical?s.css("bottom",i.height()-d.top-a.offsettop):"topedge"==a.vertical?s.css("bottom",i.height()-d.top-n.outerHeight()-a.offsettop):s.css("top",d.top+p.outerHeight()/2-n.outerHeight()/2-parseFloat(n.css("marginTop"))+a.offsettop)}else"overlay"==a.type&&(a.horizontal?s.css("text-align",a.horizontal):s.css("text-align","center"),a.vertical?n.css("vertical-align",a.vertical):n.css("vertical-align","middle"))},addclosebutton:function(e){var o;o=t(e).data("popupoptions").closebuttonmarkup?t(n.closebuttonmarkup).addClass(e.id+"_close"):'<button class="popup_close '+e.id+'_close" title="Close" aria-label="Close"><span aria-hidden="true">×</span></button>',$el.data("popup-initialized")&&$el.append(o)}},b=function(e,o,i){var n=t(e).data("popupoptions"),a=n.openelement?n.openelement:"."+e.id+l,s=t(a+'[data-popup-ordinal="'+o+'"]');"function"==typeof i&&i.call(t(e),e,s)};t(document).on("keydown",function(e){if(r.length){var o=r[r.length-1],i=document.getElementById(o);t(i).data("popupoptions").escape&&27==e.keyCode&&h.hide(i)}}),t(document).on("click",function(e){if(r.length){var o=r[r.length-1],i=document.getElementById(o),n=t(i).data("popupoptions").closeelement?t(i).data("popupoptions").closeelement:"."+i.id+d;t(e.target).closest(n).length&&(e.preventDefault(),h.hide(i)),t(i).data("popupoptions").blur&&!t(e.target).closest("#"+o).length&&2!==e.which&&t(e.target).is(":visible")&&(t(i).data("popupoptions").background?(h.hide(i),e.preventDefault()):h.hide(i,!0))}}),t(document).on("keydown",function(e){if(r.length&&9==e.which){var o=r[r.length-1],i=document.getElementById(o),n=t(i).find("*"),a=n.filter(f).filter(":visible"),s=t(":focus"),p=a.length,l=a.index(s);0===p?(t(i).focus(),e.preventDefault()):e.shiftKey?0===l&&(a.get(p-1).focus(),e.preventDefault()):l==p-1&&(a.get(0).focus(),e.preventDefault())}}),t.fn.popup=function(e){return this.each(function(){var o=t(this);if("object"==typeof e){var i=t.extend({},t.fn.popup.defaults,e,o.data("popupoptions"));o.data("popupoptions",i),n=o.data("popupoptions"),h._init(this)}else"string"==typeof e?(o.data("popupoptions")||(o.data("popupoptions",t.fn.popup.defaults),n=o.data("popupoptions")),h[e].call(this,this)):(o.data("popupoptions")||(o.data("popupoptions",t.fn.popup.defaults),n=o.data("popupoptions")),h._init(this))})},t.fn.popup.defaults={type:"overlay",autoopen:!1,background:!0,backgroundactive:!1,color:"black",opacity:"0.5",horizontal:"center",vertical:"middle",offsettop:0,offsetleft:0,escape:!0,blur:!0,setzindex:!0,autozindex:!1,scrolllock:!1,closebutton:!1,closebuttonmarkup:null,keepfocus:!0,focuselement:null,focusdelay:50,outline:!1,pagecontainer:null,detach:!1,openelement:null,closeelement:null,transition:null,tooltipanchor:null,beforeopen:null,onclose:null,onopen:null,opentransitionend:null,closetransitionend:null}}(jQuery);