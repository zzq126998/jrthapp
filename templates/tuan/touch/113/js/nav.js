/*!
 * NavScroll.js
 * Version: 1.2.0
 * Author: Jeroen Hammann
 *
 * Copyright (c) 2014 Jeroen Hammann
 * Released under the MIT license
*/
(function($,window,document,undefined){var pluginName="navScroll",defaults={scrollTime:500,navItemClassName:"",navHeight:"auto",mobileDropdown:false,mobileDropdownClassName:"",mobileBreakpoint:1024,scrollSpy:false};function NavScroll(element,options){this.element=element;this.options=$.extend({},defaults,options);this._defaults=defaults;this._name=pluginName;this.init()}NavScroll.prototype={init:function(){var self,options,element,navItem,navOffset,scrollTime;self=this;options=self.options;element=self.element;if(options.navItemClassName===""){navItem=$(element).find("a")}else{navItem=$(element).find("."+options.navItemClassName)}if(options.navHeight==="auto"){navOffset=$(element).height()}else{if(isNaN(options.navHeight)){throw new Error("'navHeight' only accepts 'auto' or a number as value.")}else{navOffset=options.navHeight}}navItem.on("click",function(e){var url,parts,target,targetOffset,targetTop;url=this.href;parts=url.split("#");target=parts[1];if(target!==undefined){e.preventDefault();targetOffset=$("#"+target).offset();targetTop=targetOffset.top}if($(this).data("scrolltime")!==undefined){scrollTime=$(this).data("scrolltime")}else{scrollTime=options.scrollTime}if(options.mobileDropdown&&$(window).width()>=0&&$(window).width()<=options.mobileBreakpoint){if(options.mobileDropdownClassName===""){$(element).find("ul").slideUp("fast")}else{$("."+options.mobileDropdownClassName).slideUp("fast")}}$(window).scrollTo({toT:targetTop-navOffset},scrollTime)});if(options.scrollSpy){var scrollItems;scrollItems=[];navItem.each(function(){var scrollItemId=$(this).attr("href");scrollItems.push($(scrollItemId))});$(window).on("scroll",function(){self.scrollspy(navItem,scrollItems)});self.scrollspy(navItem,scrollItems)}},scrollspy:function(navItem,scrollItems){var scrollPos,changeBounds,i,l;scrollPos=(document.documentElement&&document.documentElement.scrollTop)||document.body.scrollTop;l=navItem.length;for(i=0;l>i;i++){var item=scrollItems[i];if(scrollPos>(item.offset().top-60)){navItem.removeClass("active");$(navItem[i]).addClass("active")}}}};$.fn.navScroll=function(opts){return new NavScroll(this[0],opts)};$.fn.scrollTo=function(options){var defaults={toT:0,durTime:500,delay:30,callback:null};var opts=$.extend(defaults,options),timer=null,_this=this,curTop=_this.scrollTop(),subTop=opts.toT-curTop,index=0,dur=Math.round(opts.durTime/opts.delay),smoothScroll=function(t){index++;var per=Math.round(subTop/dur);if(index>=dur){_this.scrollTop(t);window.clearInterval(timer);if(opts.callback&&typeof opts.callback=="function"){opts.callback()}return}else{_this.scrollTop(curTop+index*per)}};timer=window.setInterval(function(){smoothScroll(opts.toT)},opts.delay);return _this}})(Zepto,window,document);