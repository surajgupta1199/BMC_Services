(function(t){function e(t){return t.find("> li > a:not(.disabled), > li > :not(ul) a:not(.disabled)").eq(0)}function s(t){return t.find("> li > a:not(.disabled), > li > :not(ul) a:not(.disabled)").eq(-1)}function i(t,s){var i=t.nextAll("li").find("> a:not(.disabled), > :not(ul) a:not(.disabled)").eq(0);return s||i.length?i:e(t.parent())}function a(e,i){var a=e.prevAll("li").find("> a:not(.disabled), > :not(ul) a:not(.disabled)").eq(/^1\.8\./.test(t.fn.jquery)?0:-1);return i||a.length?a:s(e.parent())}t.fn.focusSM=function(){return this.length&&this[0].focus&&this[0].focus(),this},t.extend(t.SmartMenus.Keyboard={},{docKeydown:function(o){var n=o.keyCode;if(/^(37|38|39|40)$/.test(n)){var r=t(this),h=r.data("smartmenus"),u=t(o.target);if(h&&u.is("a")&&h.handleItemEvents(u)){var l=u.closest("li"),d=l.parent(),c=d.dataSM("level");switch(r.hasClass("sm-rtl")&&(37==n?n=39:39==n&&(n=37)),n){case 37:if(h.isCollapsible())break;c>2||2==c&&r.hasClass("sm-vertical")?h.activatedItems[c-2].focusSM():r.hasClass("sm-vertical")||a((h.activatedItems[0]||u).closest("li")).focusSM();break;case 38:if(h.isCollapsible()){var m;c>1&&(m=e(d)).length&&u[0]==m[0]?h.activatedItems[c-2].focusSM():a(l).focusSM()}else 1==c&&!r.hasClass("sm-vertical")&&h.opts.bottomToTopSubMenus?(!h.activatedItems[0]&&u.dataSM("sub")&&(h.itemActivate(u),u.dataSM("sub").is(":visible")&&(h.focusActivated=!0)),h.activatedItems[0]&&h.activatedItems[0].dataSM("sub")&&h.activatedItems[0].dataSM("sub").is(":visible")&&!h.activatedItems[0].dataSM("sub").hasClass("mega-menu")&&s(h.activatedItems[0].dataSM("sub")).focusSM()):(c>1||r.hasClass("sm-vertical"))&&a(l).focusSM();break;case 39:if(h.isCollapsible())break;1==c&&r.hasClass("sm-vertical")?(!h.activatedItems[0]&&u.dataSM("sub")&&(h.itemActivate(u),u.dataSM("sub").is(":visible")&&(h.focusActivated=!0)),h.activatedItems[0]&&h.activatedItems[0].dataSM("sub")&&h.activatedItems[0].dataSM("sub").is(":visible")&&!h.activatedItems[0].dataSM("sub").hasClass("mega-menu")&&e(h.activatedItems[0].dataSM("sub")).focusSM()):1!=c&&(!h.activatedItems[c-1]||h.activatedItems[c-1].dataSM("sub")&&h.activatedItems[c-1].dataSM("sub").is(":visible")&&!h.activatedItems[c-1].dataSM("sub").hasClass("mega-menu"))||r.hasClass("sm-vertical")?h.activatedItems[c-1]&&h.activatedItems[c-1].dataSM("sub")&&h.activatedItems[c-1].dataSM("sub").is(":visible")&&!h.activatedItems[c-1].dataSM("sub").hasClass("mega-menu")&&e(h.activatedItems[c-1].dataSM("sub")).focusSM():i((h.activatedItems[0]||u).closest("li")).focusSM();break;case 40:if(h.isCollapsible()){var p,f;if(h.activatedItems[c-1]&&h.activatedItems[c-1].dataSM("sub")&&h.activatedItems[c-1].dataSM("sub").is(":visible")&&!h.activatedItems[c-1].dataSM("sub").hasClass("mega-menu")&&(p=e(h.activatedItems[c-1].dataSM("sub"))).length)p.focusSM();else if(c>1&&(f=s(d)).length&&u[0]==f[0]){for(var v=h.activatedItems[c-2].closest("li"),b=null;v.is("li")&&!(b=i(v,!0)).length;)v=v.parent().parent();b.length?b.focusSM():e(r).focusSM()}else i(l).focusSM()}else 1!=c||r.hasClass("sm-vertical")||h.opts.bottomToTopSubMenus?(c>1||r.hasClass("sm-vertical"))&&i(l).focusSM():(!h.activatedItems[0]&&u.dataSM("sub")&&(h.itemActivate(u),u.dataSM("sub").is(":visible")&&(h.focusActivated=!0)),h.activatedItems[0]&&h.activatedItems[0].dataSM("sub")&&h.activatedItems[0].dataSM("sub").is(":visible")&&!h.activatedItems[0].dataSM("sub").hasClass("mega-menu")&&e(h.activatedItems[0].dataSM("sub")).focusSM())}o.stopPropagation(),o.preventDefault()}}}}),t(document).delegate("ul.sm","keydown.smartmenus",t.SmartMenus.Keyboard.docKeydown),t.extend(t.SmartMenus.prototype,{keyboardSetHotkey:function(s,i){var a=this;t(document).bind("keydown.smartmenus"+this.rootId,function(o){if(s==o.keyCode){var n=!0;i&&("string"==typeof i&&(i=[i]),t.each(["ctrlKey","shiftKey","altKey","metaKey"],function(e,s){return t.inArray(s,i)>=0&&!o[s]||0>t.inArray(s,i)&&o[s]?(n=!1,!1):void 0})),n&&(e(a.$root).focusSM(),o.stopPropagation(),o.preventDefault())}})}})})(jQuery);