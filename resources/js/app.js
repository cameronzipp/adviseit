require('./bootstrap');

$('#newPlan').click(function() {
    $.ajax({
      type: "POST",
      url: "plan.php",
    }).done(function( msg ) {
      alert( "Data Saved: " + msg );
    });
  });