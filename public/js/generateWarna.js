var color = ['#FF7373','#BF73FF','#7A73FF', '#F5BB5F','#739EFF','#73C9FF','#FF9F89'];

$(document).ready(function(){
	icon_color();
	sidebar_toggle();
});

function icon_color()
{
	var index = 0;

	$(".sidebar-nav > li[class!='active'] > a > i").each(function(){
		$(this).css('color', color[index]);
		index = (index >= color.length - 1) ? 0 : index + 1;
	});
}

function sidebar_toggle()
{
	$(".sidebar-toggle").click(function(e){
		e.preventDefault();
		$("#wrapper").addClass('sidebar-show');

		$(".sidebar-close a").click(function(a){
			$("#wrapper").removeClass('sidebar-show');
		});
	});
}