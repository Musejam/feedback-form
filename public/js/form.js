$(document).ready(function() {
    $("input[name$='radio']").click(function(){
		var radio_value=$(this).val();
			if(radio_value== 'song')
			{
					$("#url_container").html("Enter Song Url:");
					$("#genre_name_cont").html("Enter Song Genre");
			}
			else if(radio_value== 'video')
			{
					$("#url_container").html("Enter Video Url:");
					$("#genre_name_cont").html("Enter Video Genre");
			}
			else if(radio_value == 'event')
			{
					$("#url_container").html("Enter Event Url:");
					$("#genre_name_cont").html("Enter Event Type");
			}
		});
});


