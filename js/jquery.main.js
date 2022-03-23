// page init
jQuery(function(){
	initAccordion();
	initSlideToggle();
	initOpenClose();
	initFitVids();
	initNavActive();
});

/** Accordion **/
function initAccordion(){
	jQuery('.opener').click(function(e) {
		e.preventDefault();
		var jQuerythis = jQuery(this);
		if(jQuerythis.next().hasClass('active')) {
			jQuerythis.next().removeClass('active');
			jQuerythis.next().slideUp(350);
		}else {
			jQuerythis.parent().parent().find('li .drop').removeClass('active');
			jQuerythis.parent().parent().find('li .drop').slideUp(350);
			jQuerythis.next().toggleClass('active');
			jQuerythis.next().slideToggle(350);
		}
	});

	jQuery('.text-holder ol li').click(function(){
		if(jQuery(this).hasClass('active')){
			jQuery(this).removeClass('active');
		}
		else{
			jQuery(this).toggleClass('active');	
		}
	});
}

/** Slide Toggle **/
function initSlideToggle(){
	jQuery('#nav .open').click(function(e) {
		jQuery(this).toggleClass("active");
		jQuery(".drop-down").fadeToggle();
	});
}

/** Open Close **/
function initOpenClose(){
	jQuery('.footer-t .open').click(function(e) {
		jQuery('.links li').removeClass("active");
		jQuery(this).toggleClass("active");
	});

	jQuery('#nav .drop-down .title').click(function(e) {
		jQuery(this).toggleClass("active");
	});
}

// handle flexible video size
function initFitVids() {
	jQuery('.video-holder').fitVids({
		customSelector: 'video'
	});
}

;(function(a){a.fn.fitVids=function(b){var c={customSelector:null};if(!document.getElementById("fit-vids-style")){var f=document.createElement("div"),d=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0],e="&shy;<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>";f.className="fit-vids-style";f.id="fit-vids-style";f.style.display="none";f.innerHTML=e;d.parentNode.insertBefore(f,d)}if(b){a.extend(c,b)}return this.each(function(){var g=["iframe[src*='player.vimeo.com']","iframe[src*='youtube.com']","iframe[src*='youtube-nocookie.com']","iframe[src*='kickstarter.com'][src*='video.html']","object","embed"];if(c.customSelector){g.push(c.customSelector)}var h=a(this).find(g.join(","));h=h.not("object object");h.each(function(){var m=a(this);if(this.tagName.toLowerCase()==="embed"&&m.parent("object").length||m.parent(".fluid-width-video-wrapper").length){return}var i=(this.tagName.toLowerCase()==="object"||(m.attr("height")&&!isNaN(parseInt(m.attr("height"),10))))?parseInt(m.attr("height"),10):m.height(),j=!isNaN(parseInt(m.attr("width"),10))?parseInt(m.attr("width"),10):m.width(),k=i/j;if(!m.attr("id")){var l="fitvid"+Math.floor(Math.random()*999999);m.attr("id",l)}m.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",(k*100)+"%");m.removeAttr("height").removeAttr("width")})})}})(window.jQuery||window.Zepto);

/** Nav Active **/
function initNavActive(){
	jQuery('#nav .open').click(function(e) {
		jQuery('body').toggleClass("nav-active");
	});
}