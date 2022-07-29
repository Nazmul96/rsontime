!function(e){e.fn.CountdownGampang=function(o,t){if(!jQuery().knob)throw"CountdownGampang require jQuery knob.";if(!jQuery.throttle)throw"CountdownGampang require jQuery throttle / debounce.";var n=e(this),s={rampung:void 0,labels:!0,labelsOptions:{lang:{days:"Days",hours:"Hours",minutes:"Minutes",seconds:"Seconds"},style:"font-size: 0.5em;"},style:{element:"",labels:!1,textResponsive:.5,days:{gauge:{thickness:.02,bgColor:"rgba(0, 0, 0, 0)",fgColor:"rgba(0, 0, 0, 1)",lineCap:"butt"},textCSS:""},hours:{gauge:{thickness:.02,bgColor:"rgba(0, 0, 0, 0)",fgColor:"rgba(0, 0, 0, 1)",lineCap:"butt"},textCSS:""},minutes:{gauge:{thickness:.02,bgColor:"rgba(0, 0, 0, 0)",fgColor:"rgba(0, 0, 0, 1)",lineCap:"butt"},textCSS:""},seconds:{gauge:{thickness:.02,bgColor:"rgba(0, 0, 0, 0)",fgColor:"rgba(0, 0, 0, 1)",lineCap:"butt"},textCSS:""}},onEndCallback:function(){window.console&&window.console.log&&window.console.log("[CountdownGampang::isRampung] Wayae, wayae ......")}};if(!o.rampung)throw"Parameter options.rampung must passed bro.";function a(){n.find(".ClassyCountdown-wrapper > div").each(function(){e(this).css("height",e(this).width()+"px")}),s.style.textResponsive&&n.find(".ClassyCountdown-value").css("font-size",Math.floor(n.find("> div").eq(0).width()*s.style.textResponsive/10)+"px"),n.find(".ClassyCountdown-value").each(function(){e(this).css("margin-top",Math.floor(0-parseInt(e(this).height())/2)+"px")}),n.find(".ClassyCountdown-days input").trigger("change"),n.find(".ClassyCountdown-hours input").trigger("change"),n.find(".ClassyCountdown-minutes input").trigger("change"),n.find(".ClassyCountdown-seconds input").trigger("change")}function l(e){switch(e){case"flat-colors":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#1abc9c"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},hours:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#2980b9"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},minutes:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#8e44ad"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},seconds:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#f39c12"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"}}};case"flat-colors-wide":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#1abc9c"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},hours:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#2980b9"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},minutes:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#8e44ad"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},seconds:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#f39c12"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"}}};case"flat-colors-very-wide":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.1,bgColor:"rgba(255,255,255,.3)",fgColor:"#1abc9c"},textCSS:"font-weight:600;color:#fff;"},hours:{gauge:{thickness:.1,bgColor:"rgba(255,255,255,.3)",fgColor:"#2980b9"},textCSS:"font-weight:600;color:#fff;"},minutes:{gauge:{thickness:.1,bgColor:"rgba(255,255,255,.3)",fgColor:"#8e44ad"},textCSS:"font-weight:600;color:#fff;"},seconds:{gauge:{thickness:.1,bgColor:"rgba(255,255,255,.3)",fgColor:"#f39c12"},textCSS:"font-weight:600;color:#fff;"}}};case"flat-colors-black":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#1abc9c",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},hours:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#2980b9",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},minutes:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#8e44ad",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},seconds:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#f39c12",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"}}};case"black":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},hours:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},minutes:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},seconds:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"}}};case"black-wide":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},hours:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},minutes:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},seconds:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"}}};case"black-very-wide":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.17,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},hours:{gauge:{thickness:.17,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},minutes:{gauge:{thickness:.17,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},seconds:{gauge:{thickness:.17,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"}}};case"black-black":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},hours:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},minutes:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"},seconds:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#34495e;"}}};case"white":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.03,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},hours:{gauge:{thickness:.03,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},minutes:{gauge:{thickness:.03,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},seconds:{gauge:{thickness:.03,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"}}};case"white-wide":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.06,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},hours:{gauge:{thickness:.06,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},minutes:{gauge:{thickness:.06,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},seconds:{gauge:{thickness:.06,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"}}};case"white-very-wide":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.16,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},hours:{gauge:{thickness:.16,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},minutes:{gauge:{thickness:.16,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},seconds:{gauge:{thickness:.16,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"}}};case"white-black":return{labels:!0,style:{element:"",textResponsive:.5,days:{gauge:{thickness:.25,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},hours:{gauge:{thickness:.25,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},minutes:{gauge:{thickness:.25,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"},seconds:{gauge:{thickness:.25,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff",lineCap:"round"},textCSS:"font-family:'Open Sans';font-weight:300;color:#fff;"}}}}}s=e.extend(!0,s,o),void 0!==typeof t&&(s.onEndCallback=t),o.theme?("default"===o.theme&&(o.theme="flat-colors-very-wide"),s=e.extend(!0,s,l(o.theme))):s=e.extend(!0,s,l("flat-colors-very-wide")),n.append('<div class="ClassyCountdown-wrapper"><div class="ClassyCountdown-days"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-hours"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-minutes"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-seconds"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div></div>'),n.find(".ClassyCountdown-days input").knob(e.extend({width:"100%",displayInput:!1,readOnly:!0,max:365},s.style.days.gauge)),n.find(".ClassyCountdown-hours input").knob(e.extend({width:"100%",displayInput:!1,readOnly:!0,max:24},s.style.hours.gauge)),n.find(".ClassyCountdown-minutes input").knob(e.extend({width:"100%",displayInput:!1,readOnly:!0,max:60},s.style.minutes.gauge)),n.find(".ClassyCountdown-seconds input").knob(e.extend({width:"100%",displayInput:!1,readOnly:!0,max:60},s.style.seconds.gauge)),n.find(".ClassyCountdown-wrapper > div").attr("style",s.style.element),n.find(".ClassyCountdown-days .ClassyCountdown-value").attr("style",s.style.days.textCSS),n.find(".ClassyCountdown-hours .ClassyCountdown-value").attr("style",s.style.hours.textCSS),n.find(".ClassyCountdown-minutes .ClassyCountdown-value").attr("style",s.style.minutes.textCSS),n.find(".ClassyCountdown-seconds .ClassyCountdown-value").attr("style",s.style.seconds.textCSS),n.find(".ClassyCountdown-value").each(function(){e(this).css("margin-top",Math.floor(0-parseInt(e(this).height())/2)+"px")}),s.labels&&(n.find(".ClassyCountdown-days .ClassyCountdown-value > span").html(s.labelsOptions.lang.days),n.find(".ClassyCountdown-hours .ClassyCountdown-value > span").html(s.labelsOptions.lang.hours),n.find(".ClassyCountdown-minutes .ClassyCountdown-value > span").html(s.labelsOptions.lang.minutes),n.find(".ClassyCountdown-seconds .ClassyCountdown-value > span").html(s.labelsOptions.lang.seconds),n.find(".ClassyCountdown-value > span").attr("style",s.labelsOptions.style));var g=setInterval(function(){var e=(new Date).getTime(),o=s.rampung-e,t=Math.floor(o/864e5),a=Math.floor(o%864e5/36e5),l=Math.floor(o%36e5/6e4),f=Math.floor(o%6e4/1e3);o<0&&(t=0,a=0,l=0,f=0),n.find(".ClassyCountdown-days input").val(365-t).trigger("change"),n.find(".ClassyCountdown-hours input").val(24-a).trigger("change"),n.find(".ClassyCountdown-minutes input").val(60-l).trigger("change"),n.find(".ClassyCountdown-seconds input").val(60-f).trigger("change"),n.find(".ClassyCountdown-days .ClassyCountdown-value > div").html(t),n.find(".ClassyCountdown-hours .ClassyCountdown-value > div").html(a),n.find(".ClassyCountdown-minutes .ClassyCountdown-value > div").html(l),n.find(".ClassyCountdown-seconds .ClassyCountdown-value > div").html(f),o<0&&(clearInterval(g),s.onEndCallback())},1e3);n.find(".ClassyCountdown-wrapper > div").each(function(){e(this).css("height",e(this).width()+"px")}),s.style.textResponsive&&(n.find(".ClassyCountdown-value").css("font-size",Math.floor(n.find("> div").eq(0).width()*s.style.textResponsive/10)+"px"),n.find(".ClassyCountdown-value").each(function(){e(this).css("margin-top",Math.floor(0-parseInt(e(this).height())/2)+"px")})),e(window).trigger("resize"),e(window).resize(e.throttle(50,a))}}(jQuery);