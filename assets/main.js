$('a.zoombox').zoombox();


$.datetimepicker.setLocale('fr');

$('#date').datetimepicker({
	inline:true,
	dayOfWeekStart : 1,
	lang:'fr',
	startDate:	'2017/01/01',
	allowTimes:[
		'12:00', '12:30', '13:30', 
		'19:00', '19:30', '20:00', '20:30', '21:00'
	]	
});


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-42168464-1', 'le7-perigueux.com');
ga('send', 'pageview');