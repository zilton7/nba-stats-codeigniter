// change conference/year and auto-load particular data
$(document).ready(function() {

    $('#conference-selector, #year-selector').on('change', function() {

        var conference = $("#conference-selector").val();
        var year = $("#year-selector").val();
        var action_url = '../' + year + '/' +  conference;

        $('#standings-form').attr('action', action_url).submit();


    })
});