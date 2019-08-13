define(function(require){function t(t,e){this.options=$.extend({},s,e),this.element=t,this.thumbs=$(".exposeThumbs",this.element),this.targetElement=$(".exposeTarget",this.element),this.prevnext=$(".prevnext",this.element),this.element.css({width:this.options.width,height:this.options.height}),this.targetElement.css({width:this.options.width-this.thumbs.parent().outerWidth(),height:this.options.height});var i=this.prevnext.find(".prev"),a=this.prevnext.find(".next"),n=(this.targetElement.height()-i.outerHeight())/2;i.css({top:n}),a.css({top:n}),this.init(),this.targetElement.hover($.proxy(function(){this.pause(),i.stop().fadeIn(),a.stop().fadeIn()},this),$.proxy(function(){i.stop().fadeOut(),a.stop().fadeOut(),this.play()},this))}function e(e,i){var s=e.attr("data-width"),a=parseInt(e.attr("data-height"),10),n='<div class="expose"><div class="exposeBar"><ul class="exposeThumbs"></ul><div class="exposeControls"><a href="" class="exposePrevPage">prev</a><div class="exposePaging"></div><a href="" class="exposeNextPage">next</a></div></div><div class="exposeTarget"><div class="prevnext"><a href="" class="prev">左</a><a href="" class="next">右</a></div></div></div>',r=$(n);e.append(r);var h=r.find(".exposeThumbs");$.each(i,function(t,e){var i='<li><img _href="'+(e.url||"javascript:void(0)")+'" src="'+e.src+'" _src="'+e.src+'" alt="'+e.alt+'" title="'+e.alt+'" /></li>',s=$(i);h.append(s)}),"100%"==s&&(s=e.innerWidth()),new t(r,{width:s,height:a})}function i(t,i,s){if(t!==!0){var i=t.find(".expose").parent(),s=[];$.each(t.find(".exposeThumbs li"),function(t,e){var i={},a=$(e).find("img");i.src=a.attr("src"),i.alt=a.attr("alt"),i.url=a.attr("_href"),s.push(i)}),i.empty()}e(i,s)}var $=require("jquery"),s={width:1e3,height:400,auto:!1,duration:5e3};return t.prototype={init:function(){this.initPage(),this.setPage(1,!0),this.auto(),this.PrevNext()},PrevNext:function(){this.prevnext.find(".prev").click($.proxy(function(){return this.run(this.activeItem-1<=0?this.getTotal():this.activeItem-1),!1},this)),this.prevnext.find(".next").click($.proxy(function(){return this.run(this.activeItem+1>this.getTotal()?1:this.activeItem+1),!1},this))},initPage:function(){var t=this.getPage(),e=$(".exposePaging",this.element),i=this.getPageNumber();e.append($('<span>1</span><span style="padding:0 1px;">/</span><span>'+t+"</span>"));var s=1;this.thumbs.find("li img").each($.proxy(function(t,e){var a=$(e),n=a.parent().index()+1;a.attr("rel",n),0===n%i?(a.parent().attr("rel",s).addClass("last"),s++):a.parent().attr("rel",s),a.click($.proxy(function(t){this.run($(t.target).attr("rel"))},this))},this)),this.element.find(".exposePrevPage").click($.proxy(function(){return this.currentPage-1>0&&this.setPage(this.currentPage-1,!0),!1},this)),this.element.find(".exposeNextPage").click($.proxy(function(){return this.currentPage+1<=this.getPage()&&this.setPage(this.currentPage+1,!0),!1},this))},updatePageUI:function(){var t=$(".exposePaging",this.element);t.find(">span").eq(0).html(this.currentPage)},currentPageShow:function(){var t=this.currentPage;this.thumbs.find(".current").removeClass("current").hide(),this.thumbs.find("li[rel="+t+"]").fadeIn().addClass("current")},setPage:function(t,e){this.currentPage=parseInt(t,10),this.updatePageUI(),this.currentPageShow(),e===!0&&this.run(this.thumbs.find(".current").first().find("img").attr("rel"))},getPage:function(){return this.totalPage?this.totalPage:(this.totalPage=Math.ceil(this.getTotal()/this.getPageNumber()),this.totalPage)},getPageNumber:function(){if(this.pageNumber)return this.pageNumber;var t=parseInt(this.options.height-this.element.find(".exposeControls").height(),10),e=this.thumbs.find("li").first(),i=e.outerHeight(),s=Math.floor(t/i);return this.pageNumber=s,this.pageNumber},getTotal:function(){return this.total||(this.total=this.thumbs.find("li").size())},run:function(t){this.activeItem=parseInt(t,10),this.thumbs.find("li").removeClass("active");var e=this.thumbs.find("img[rel="+this.activeItem+"]").parent();e.addClass("active"),parseInt(e.attr("rel"),10)!==this.currentPage&&this.setPage(e.attr("rel")),this.updateImage()},updateImage:function(){var t=this.thumbs.find('img[rel="'+this.activeItem+'"]').attr("_src"),e=this.targetElement;e.removeClass("exposeLoaded");var i=$("<img />");i.load($.proxy(function(t){e.addClass("exposeLoaded");var i=$(t.target);i.css({left:(e.width()-i.width())/2,top:(e.height()-i.height())/2}),i.animate({opacity:1},600)},this)),i.attr("src",t);var s=$('<a href=""></a>');s.appendTo(this.targetElement),i.appendTo(s),i.css({opacity:0}),s.prev().hasClass("prevnext")||s.prev().animate({opacity:0},600,function(){$(this).remove()})},auto:function(){this.queue=setInterval($.proxy(function(){this.run(this.activeItem+1>this.getTotal()?1:this.activeItem+1)},this),this.options.duration)},pause:function(){clearInterval(this.queue)},play:function(){this.auto()}},function(t,e,s){var a=t&&t.jquery?t:e;a.is(":visible")?i(t,e,s):a.on("resize",function(){i(t,e,s)})}});