!function(){var e=$("#date_value").val();(new Date).getFullYear();new function(e,t){var n,a=this;function o(){a.current=function(e,t){var n=Math.abs(e-t)/1e3,a=Math.floor(n/86400);n-=86400*a;var o=Math.floor(n/3600)%24;n-=3600*o;var s=Math.floor(n/60)%60;n-=60*s;var l,r=Math.floor(n%60);return a=(l=a)<10?"00"+l:l<100?"0"+l:""+l,o=i(o),s=i(s),r=i(r),{d:a+"",h:o+"",m:s+"",s:r+""}}(t.endDate.getTime(),(new Date).getTime()),r(),clearTimeout(n),n=setTimeout(o,500)}function s(){clearTimeout(n)}function i(e){return e<10?"0"+e:""+e}function l(e,t){var n=document.createElement("div");n.className="leaf _"+(t||"2")+"-digits",n.setAttribute("data-label",e);var o=document.createElement("div"),s=document.createElement("span");o.className="top",o.appendChild(s);var i=document.createElement("div"),l=document.createElement("span");i.className="leaf-front",i.appendChild(l);var r=document.createElement("div"),c=document.createElement("span");r.className="leaf-back",r.appendChild(c);var u=document.createElement("div"),d=document.createElement("span");return u.className="bottom",u.appendChild(d),n.appendChild(o),n.appendChild(i),n.appendChild(r),n.appendChild(u),a.el.appendChild(n),{el:n,topLabel:s,frontLabel:l,backLabel:c,bottomLabel:d}}function r(){c(a.daysLeaf,a.current.d),c(a.hoursLeaf,a.current.h),c(a.minutesLeaf,a.current.m),c(a.secondsLeaf,a.current.s)}function c(e,t){if(!e.isFlipping){var n=e.topLabel.innerText;t!==n&&(e.isFlipping=!0,e.topLabel.innerText=t,e.backLabel.innerText=t,e.el.classList.add("flip"),clearTimeout(e.timeout),e.timeout=setTimeout(function(){e.frontLabel.innerText=t,e.bottomLabel.innerText=t,e.el.classList.remove("flip")},600),clearTimeout(e.timeout2),e.timeout2=setTimeout(function(){e.isFlipping=!1},1e3))}}a.el=e,a.config=Object.assign({endDate:new Date((new Date).getFullYear()+1,0,0),labels:{days:"Days",hours:"Hours",minutes:"Minutes",seconds:"Seconds"}},t),a.current={d:"000",h:"00",m:"00",s:"00"},a.daysLeaf=l(a.config.labels.days,3),a.hoursLeaf=l(a.config.labels.hours),a.minutesLeaf=l(a.config.labels.minutes),a.secondsLeaf=l(a.config.labels.seconds),r(),a.observer=new IntersectionObserver(function(e,t){e.forEach(function(e){e.isIntersecting?o():s()})}),a.observer.observe(a.el)}(document.getElementById("flipclock-1"),{endDate:new Date(e),labels:{days:"Days",hours:"Hours",minutes:"Minutes",seconds:"Seconds"}})}();