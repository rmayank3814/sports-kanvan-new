
$(document).ready(function() { 
    $('#doctor_yes').click(function() { 
        $('#explain').show(); 
    }); 
    $('#doctor_no').click(function() { 
        $('#explain').hide(); 
    });
    $('#stress_yes').click(function() { 
        $('#result').show(); 
    }); 
    $('#stress_no').click(function() { 
        $('#result').hide(); 
    });
    $('#stress_dont_know').click(function() { 
        $('#result').hide(); 
    }); 
    $('#regular_yes').click(function() { 
        $('#medication').show(); 
    }); 
    $('#regular_no').click(function() { 
        $('#medication').hide(); 
    }); 
    $('#hospitalized_yes').click(function() { 
        $('#relation').show(); 
    }); 
    $('#hospitalized_no').click(function() { 
        $('#relation').hide(); 
    });
});