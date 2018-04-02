$(document).ready(function() {

	$(".p_filters").click(function(){
		$(".ul_filters").toggle("slow");
	});

	$(".by_surname").click(function(){
    	var var_by_surname=$(this).attr("class");
      	$.ajax({
            url:"include/filter_by_surname.php",
            method:"POST",
            data: {var_by_surname:var_by_surname},
            success:function(data)
            {
                $(".block_table").html(data);

                $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {

				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    });

    $(".by_hierarchy_up").click(function(){
    	var var_by_hierarchy_up=$(this).attr("class");
      	$.ajax({
            url:"include/filter_by_hierarchy_up.php",
            method:"POST",
            data: {var_by_hierarchy_up:var_by_hierarchy_up},
            success:function(data)
            {
                $(".block_table").html(data);

                $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {
				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    });

    $(".by_hierarchy_down").click(function(){
    	var var_by_hierarchy_down=$(this).attr("class");
      	$.ajax({
            url:"include/filter_by_hierarchy_down.php",
            method:"POST",
            data: {var_by_hierarchy_down:var_by_hierarchy_down},
            success:function(data)
            {
                $(".block_table").html(data);

                $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {
				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    });

	$(".by_position_ul li").click(function(){
    	var var_filter_by_position=$(this).attr("class");
    	if(var_filter_by_position == 'filter_foreman')
        {
        	$(".tr_foreman").show();
        }
        if(var_filter_by_position == 'filter_brigadier')
        {
        	$(".tr_brigadier").show();
        }
        if(var_filter_by_position == 'filter_worker')
        {
        	$(".tr_worker").show();
        }
    });

	$(".by_position_ul li").click(function(){
    	var var_filter_by_position=$(this).attr("class");
    	if(var_filter_by_position == 'filter_foreman')
        {
        	$(".tr_foreman").show();
        }
        if(var_filter_by_position == 'filter_brigadier')
        {
        	$(".tr_brigadier").show();
        }
        if(var_filter_by_position == 'filter_worker')
        {
        	$(".tr_worker").show();
        }
      	$.ajax({
            url:"include/filter_by_position.php",
            method:"POST",
            data: {var_filter_by_position:var_filter_by_position},
            success:function(data)
            {
                $(".block_table").html(data);

                $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {
				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                 //alert(data);
				                 //$('#add_name')[0].reset();
				                 //$(".block_table").html(data);
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    }); 

    $(".by_employment_date_up").click(function(){
    	var var_by_employment_date_up=$(this).attr("class");
      	$.ajax({
            url:"include/filter_by_employment_date_up.php",
            method:"POST",
            data: {var_by_employment_date_up:var_by_employment_date_up},
            success:function(data)
            {
                 $(".block_table").html(data);

                $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					alert(tr_top_manager_id);
					alert(tr_top_manager_class);
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
						alert(val_input_change_top_manager);
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {
				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    });

    $(".by_employment_date_down").click(function(){
    	var var_by_employment_date_down=$(this).attr("class");
      	$.ajax({
            url:"include/filter_by_employment_date_down.php",
            method:"POST",
            data: {var_by_employment_date_down:var_by_employment_date_down},
            success:function(data)
            {
                $(".block_table").html(data);

                $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {
				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    });

    $(".amount_of_salary_up").click(function(){
    	var var_amount_of_salary_up=$(this).attr("class");
      	$.ajax({
            url:"include/filter_amount_of_salary_up.php",
            method:"POST",
            data: {var_amount_of_salary_up:var_amount_of_salary_up},
            success:function(data)
            {
                $(".block_table").html(data);

                $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {
				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    });

    $(".amount_of_salary_down").click(function(){
    	var var_amount_of_salary_down=$(this).attr("class");
      	$.ajax({
            url:"include/filter_amount_of_salary_down.php",
            method:"POST",
            data: {var_amount_of_salary_down:var_amount_of_salary_down},
            success:function(data)
            {
                $(".block_table").html(data);

                $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {
				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    });

    $(".block_search li input").keyup("textchange", function(){
    	var block_search_li_input=$(this).val();
    	var block_search_li_input_class=$(this).attr("class");
    	$.ajax({
            url:"include/search.php",
            method:"POST",
            data: {block_search_li_input:block_search_li_input,block_search_li_input_class:block_search_li_input_class},
            success:function(data)
            {
                 $(".block_table").html(data);

                 $(".tr_top_manager td span").click(function(){
					var tr_top_manager_id=$(this).attr("id");
					var tr_top_manager_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
					$(".button_change_top_manager").click(function(){
						var val_input_change_top_manager=$(".input_change_top_manager").val();
				    	$.ajax({
				            url:"include/change_top_manager.php",
				            method:"POST",
				            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
				            success:function(data)
				            {
				                $('td[id=' + tr_top_manager_id + ']').is(function(){
				                	$('td[class=' + tr_top_manager_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_deputy_director td span").click(function(){
					var tr_deputy_director_id=$(this).attr("id");
					var tr_deputy_director_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
					$(".button_change_deputy_director").click(function(){
						var val_input_change_deputy_director=$(".input_change_deputy_director").val();
				    	$.ajax({
				            url:"include/change_deputy_director.php",
				            method:"POST",
				            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
				            success:function(data)
				            {
				                $('td[id=' + tr_deputy_director_id + ']').is(function(){
				                	$('td[id=' + tr_deputy_director_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_foreman td span").click(function(){
					var tr_foreman_id=$(this).attr("id");
					var tr_foreman_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
					$(".button_change_foreman").click(function(){
						var val_input_change_foreman=$(".input_change_foreman").val();
				    	$.ajax({
				            url:"include/change_foreman.php",
				            method:"POST",
				            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
				            success:function(data)
				            {
				                $('td[id=' + tr_foreman_id + ']').is(function(){
				                	$('td[id=' + tr_foreman_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_brigadier td span").click(function(){
					var tr_brigadier_id=$(this).attr("id");
					var tr_brigadier_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
					$(".button_change_brigadier").click(function(){
						var val_input_change_brigadier=$(".input_change_brigadier").val();
				    	$.ajax({
				            url:"include/change_brigadier.php",
				            method:"POST",
				            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
				            success:function(data)
				            {
				                $('td[id=' + tr_brigadier_id + ']').is(function(){
				                	$('td[id=' + tr_brigadier_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});

				$(".tr_worker td span").click(function(){
					var tr_worker_id=$(this).attr("id");
					var tr_worker_class=$(this).attr("class");
					$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
					$(".button_change_worker").click(function(){
						var val_input_change_worker=$(".input_change_worker").val();
				    	$.ajax({
				            url:"include/change_worker.php",
				            method:"POST",
				            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
				            success:function(data)
				            {
				                $('td[id=' + tr_worker_id + ']').is(function(){
				                	$('td[id=' + tr_worker_class + ']').html(data);
				                });
				                location.reload();
				            }  
				        });
					});
				});
            }  
        });
    });

    $(".button_authorization").click(function() {
		var login_authorization = $(".login_authorization").val();
		var pass_authorization = $(".pass_authorization").val();
		if ($(".checkbox_authorization").prop('checked'))
		{
			auth_rememberme = 'yes';
		}else { auth_rememberme = 'no'; }

		$.ajax({
		  	type: "POST",
		  	url: "include/auth.php",
		  	data: "login="+login_authorization+"&pass="+pass_authorization+"&rememberme="+auth_rememberme,
		  	dataType: "html",
		  	cache: false,
		  	success: function(data) {
			  	if (data == "yes_auth")
			  	{
			      	location.reload();
			  	}
			  	if (data > "")
			  	{
			      	$("#enter_output").html(data);			      
			  	}
			}
		});
	});

	$(".button_logout").click(function(){
		$.ajax({
			type: "POST",
			url: "include/logout.php",
			dataType: "html",
			cache: false,
			success: function(data) {

			  if (data)
			  {
			      location.reload();
			  }
		  
			}
		}); 
	});

	$(".tr_top_manager td span").click(function(){
		var tr_top_manager_id=$(this).attr("id");
		var tr_top_manager_class=$(this).attr("class");
		$(this).replaceWith("<input type='text' class='input_change_top_manager' /> <button class='button_change_top_manager'>Изменить</button>");
		$(".button_change_top_manager").click(function(){
			var val_input_change_top_manager=$(".input_change_top_manager").val();
	    	$.ajax({
	            url:"include/change_top_manager.php",
	            method:"POST",
	            data: {tr_top_manager_id:tr_top_manager_id,tr_top_manager_class:tr_top_manager_class,val_input_change_top_manager:val_input_change_top_manager},
	            success:function(data)
	            {
	                $('td[id=' + tr_top_manager_id + ']').is(function(){
	                	$('td[class=' + tr_top_manager_class + ']').html(data);
	                });
	                location.reload();
	            }  
	        });
		});
	});

	$(".tr_deputy_director td span").click(function(){
		var tr_deputy_director_id=$(this).attr("id");
		var tr_deputy_director_class=$(this).attr("class");
		$(this).replaceWith("<input type='text' class='input_change_deputy_director' /> <button class='button_change_deputy_director'>Изменить</button>");
		$(".button_change_deputy_director").click(function(){
			var val_input_change_deputy_director=$(".input_change_deputy_director").val();
	    	$.ajax({
	            url:"include/change_deputy_director.php",
	            method:"POST",
	            data: {tr_deputy_director_id:tr_deputy_director_id,tr_deputy_director_class:tr_deputy_director_class,val_input_change_deputy_director:val_input_change_deputy_director},
	            success:function(data)
	            {
	                $('td[id=' + tr_deputy_director_id + ']').is(function(){
	                	$('td[id=' + tr_deputy_director_class + ']').html(data);
	                });
	                location.reload();
	            }  
	        });
		});
	});

	$(".tr_foreman td span").click(function(){
		var tr_foreman_id=$(this).attr("id");
		var tr_foreman_class=$(this).attr("class");
		$(this).replaceWith("<input type='text' class='input_change_foreman' /> <button class='button_change_foreman'>Изменить</button>");
		$(".button_change_foreman").click(function(){
			var val_input_change_foreman=$(".input_change_foreman").val();
	    	$.ajax({
	            url:"include/change_foreman.php",
	            method:"POST",
	            data: {tr_foreman_id:tr_foreman_id,tr_foreman_class:tr_foreman_class,val_input_change_foreman:val_input_change_foreman},
	            success:function(data)
	            {
	                $('td[id=' + tr_foreman_id + ']').is(function(){
	                	$('td[id=' + tr_foreman_class + ']').html(data);
	                });
	                location.reload();
	            }  
	        });
		});
	});

	$(".tr_brigadier td span").click(function(){
		var tr_brigadier_id=$(this).attr("id");
		var tr_brigadier_class=$(this).attr("class");
		$(this).replaceWith("<input type='text' class='input_change_brigadier' /> <button class='button_change_brigadier'>Изменить</button>");
		$(".button_change_brigadier").click(function(){
			var val_input_change_brigadier=$(".input_change_brigadier").val();
	    	$.ajax({
	            url:"include/change_brigadier.php",
	            method:"POST",
	            data: {tr_brigadier_id:tr_brigadier_id,tr_brigadier_class:tr_brigadier_class,val_input_change_brigadier:val_input_change_brigadier},
	            success:function(data)
	            {
	                $('td[id=' + tr_brigadier_id + ']').is(function(){
	                	$('td[id=' + tr_brigadier_class + ']').html(data);
	                });
	                location.reload();
	            }  
	        });
		});
	});

	$(".tr_worker td span").click(function(){
		var tr_worker_id=$(this).attr("id");
		var tr_worker_class=$(this).attr("class");
		$(this).replaceWith("<input type='text' class='input_change_worker' /> <button class='button_change_worker'>Изменить</button>");
		$(".button_change_worker").click(function(){
			var val_input_change_worker=$(".input_change_worker").val();
	    	$.ajax({
	            url:"include/change_worker.php",
	            method:"POST",
	            data: {tr_worker_id:tr_worker_id,tr_worker_class:tr_worker_class,val_input_change_worker:val_input_change_worker},
	            success:function(data)
	            {
	                $('td[id=' + tr_worker_id + ']').is(function(){
	                	$('td[id=' + tr_worker_class + ']').html(data);
	                });
	                location.reload();
	            }  
	        });
		});
	});

	$(".toggle_foreman").click(function(){
		$(".tr_foreman").toggle("slow");
	});
	$(".toggle_brigadier").click(function(){
		$(".tr_brigadier").toggle("slow");
	});
	$(".toggle_worker").click(function(){
		$(".tr_worker").toggle("slow");
	});


var button_main_image = $('#butUpload_main_image > span'), interval;
if(button_main_image.length != 0)
{
new AjaxUpload(butUpload_main_image, {
  action: 'include/upload_images.php', 
  onSubmit : function(file, ext){

  if(/^[a-zA-Z1-9]+$/.test(file) == true)
  {
  if (ext && /^(gif|png|jpeg|jpg)$/.test(ext)) {
    button_main_image.text('Загрузка');
    this.disable();
    $("#imgLoad_main_image").show();
    
    interval = window.setInterval(function(){
      var text = button_main_image.text();
      
      if (text.length < 13){
        button_main_image.text(text + '.');          
      } else {
        button_main_image.text('Загрузка');        
      }
    }, 200);
    } else {
      $("<li></li>").appendTo("#files_main_image").text("такой тип файлов не поддерживается");
      return false;
    }
  }
  },
  onComplete: function(file, response){
    if(/^[a-zA-Z1-9]+$/.test(response) === true)
    {
      window.clearInterval(interval);
      this.enable();
      $(".error_p_upload_main_images_li").empty();
      $("#files_main_image").append('<li class="upload_main_images_li">'+file+'</li>');
    }        
  }
});
}

$(".button_upload_image").click(function(){
	var val_button_upload_image=$(".input_fio_upload_image").val();
	var var_upload_main_images_li=$(".upload_main_images_li").text();
	$.ajax({
	    url:"include/sql_upload_image.php",
	    method:"POST",
	    data: {val_button_upload_image:val_button_upload_image,var_upload_main_images_li:var_upload_main_images_li},
	    success:function(data)
	    {
	        $(".upload_image").is(function(){
	        	$('td[id=' + val_button_upload_image + ']').html(data);
	        });
	    }  
	});
});

});