function makeTimer(){var a=$("#date_value").val(),e=$("#time_value").val(),t=new Date(a+" "+e);t=Date.parse(t)/1e3;var n=new Date,s=t-(n=Date.parse(n)/1e3),o=Math.floor(s/86400),l=Math.floor((s-86400*o)/3600),r=Math.floor((s-86400*o-3600*l)/60),m=Math.floor(s-86400*o-3600*l-60*r);l<"10"&&(l="0"+l),r<"10"&&(r="0"+r),m<"10"&&(m="0"+m),$("#days").html(o+"<span>  Day </span>"),$("#hours").html(l+"<span>  Hours </span>"),$("#minutes").html(r+"<span> Minutes </span>"),$("#seconds").html(m+"<span>  Seconds </span>")}setInterval(function(){makeTimer()},1e3);
