$(function () {
    $("[rel='tooltip']").tooltip();
    $('.edit_btn').click(function(event) {

    	//modal values
    	edit_player_name = $('.player_name_edit');
    	edit_player_points = $('.points_edit');
    	edit_player_id = $('.player_id_edit');

    	//clicked tr values
    	var row = $(this).closest('tr');
    	var columns = row.find('td');
    	column_values = [];

    	$.each(columns, function(i, item) {
    		column_values[i] = item.innerHTML;
    	});

    	player_id = column_values[0];
    	player_name = column_values[1];
    	player_points = column_values[2];

    	//clone value to modal
    	
    	edit_player_id.val(player_id);
    	edit_player_name.val(player_name);
    	edit_player_points.val(player_points);



    });
});