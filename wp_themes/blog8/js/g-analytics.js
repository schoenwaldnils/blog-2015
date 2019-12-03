/* Google Analytics' standard tracking code */
_gaq.push(['_setAccount', 'UA-33721620-2']);
_gaq.push(['_setDomainName', 'smedia.dev']);
_gaq.push(['_trackPageview']);

/* Tell Google Analytics to log WURFL.js' data */
 _gaq.push(['_setCustomVar',	1,’complete_device_name’,WURFL.complete_device_name,1]);
 _gaq.push(['_setCustomVar',	2,'form_factor',WURFL.form_factor,1]);
 _gaq.push(['_setCustomVar',	3,'is_mobile',WURFL.is_mobile,1]);

/* The rest of Analytics' standard tracking code */
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
