jQuery(function(){

    count = 0;
    wordsArray = ['Project', 'Web', 'Nomade'];
    setInterval(function () {
        count++;
        $("#changeWord").css('color', '#C00').fadeOut(400, function () {
            $(this).text(wordsArray[count % wordsArray.length]).css('color', '#292929').fadeIn(400);
        });
    }, 2000);

});