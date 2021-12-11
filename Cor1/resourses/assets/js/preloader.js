document.body.onload = function () {
    setTimeout(function () {
        if(!$("#preloader").hasClass('done')){
            $("#preloader").addClass('done');
        }
    }, 1000);
}
