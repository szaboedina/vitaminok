$(document).ready(function(){
  // save vitamin to database
  $(document).on('click', '#submit_btn', function(){
    var hagyomanyosNev = $('#hagyomanyosNev').val();
    var tudomanyosNev = $('#tudomanyosNev').val();
    var termeszetesForrasok = $('#termeszetesForrasok').val();
    var napiSzukseglet = $('#napiSzukseglet').val();
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'hagyomanyosNev': hagyomanyosNev,
        'tudomanyosNev': tudomanyosNev,
        'termeszetesForrasok': termeszetesForrasok,
        'napiSzukseglet': napiSzukseglet,
      },
      success: function(response){
        $('#hagyomanyosNev').val('');
        $('#tudomanyosNev').val('');
        $('#termeszetesForrasok').val('');
        $('#napiSzukseglet').val('');
        $('#display_area').append(response);
      }
    });
  });
  // delete from database
  $(document).on('click', '.delete', function(){
  	var id = $(this).data('id');
  	$clicked_btn = $(this);
  	$.ajax({
  	  url: 'server.php',
  	  type: 'GET',
  	  data: {
    	'delete': 1,
    	'id': id,
      },
      success: function(response){
        // remove the deleted vitamin
        $clicked_btn.parent().remove();
        $('#hagyomanyosNev').val('');
        $('#tudomanyosNev').val('');
        $('#termeszetesForrasok').val('');
        $('#napiSzukseglet').val('');
      }
  	});
  });
  var edit_id;
  var $edit_vitamin;
  $(document).on('click', '.edit', function(){
  	edit_id = $(this).data('id');
  	$edit_vitamin = $(this).parent();
  	// grab the vitamin to be editted
    var hagyomanyosNev = $(this).siblings('.display_hagyomanyosNev').text();
    var tudomanyosNev = $(this).siblings('.vitamin_tudomanyosNev').text();
    var termeszetesForrasok = $(this).siblings('.vitamin_termeszetesForrasok').text();
  	var napiSzukseglet = $(this).siblings('.vitamin_napiSzukseglet').text();
  	// place vitamin in form
    $('#hagyomanyosNev').val(hagyomanyosNev);
    $('#tudomanyosNev').val(tudomanyosNev);
    $('#termeszetesForrasok').val(termeszetesForrasok);
    $('#napiSzukseglet').val(napiSzukseglet);
  	$('#submit_btn').hide();
  	$('#update_btn').show();
  });
  $(document).on('click', '#update_btn', function(){
  	var id = edit_id;
    var hagyomanyosNev = $('#hagyomanyosNev').val();
    var tudomanyosNev = $('#tudomanyosNev').val();
    var hagyomanyosNev = $('#termeszetesForrasok').val();
  	var napiSzukseglet = $('#napiSzukseglet').val();
  	$.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
      	'update': 1,
      	'id': id,
        'hagyomanyosNev': hagyomanyosNev,
        'tudomanyosNev': tudomanyosNev,
        'termeszetesForrasok': termeszetesForrasok,
        'napiSzukseglet': napiSzukseglet,
      },
      success: function(response){
        $('#hagyomanyosNev').val('');
        $('#tudomanyosNev').val('');
        $('#termeszetesForrasok').val('');
        $('#napiSzukseglet').val('');
      	$('#submit_btn').show();
      	$('#update_btn').hide();
      	$edit_vitamin.replaceWith(response);
      }
  	});		
  });
});