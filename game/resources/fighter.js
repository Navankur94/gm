$("#new_hero").click(function() {
    $.ajax({
        type: 'POST',
        url: 'api/modelCreateNewhero.php',
        success: function(data) {

        }
    });
});
 

$("#fight_to_death").click(function() {
    $('.ken').css('display','block');
    $.ajax({
        type: 'POST',
        url: 'api/modelWinner.php',
        success: function(data) {

        }
    });
    
});

$("#champ").click(function() {
    $.ajax({
        type: 'POST',
        url: 'api/modelChampion.php',
        success: function(data) {

        }
    });
    
});


