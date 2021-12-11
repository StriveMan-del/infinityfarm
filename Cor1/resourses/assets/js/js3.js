function buybutton(id) {
  $.ajax({
        url:'buy.php',
      method:'POST',
      type:'POST',
      data: {'id':id},
      success:function(data){
            +data;
            if(data != 1){
                $("#buyer").text('Вам не хватает денег');
                $("#buyer").addClass('alert-danger');
                $("#buyer").show('blind',{},500);
                setTimeout(()=> $('#buyer').hide('blind',500), 3000);
            } else {
                $("#buyer").text('Вы успешно купили');
                $("#buyer").addClass('alert-success');
                $("#buyer").show('blind',{},500);
                setTimeout(()=> $('#buyer').hide('blind',500), 3000);
                $('.currency').load('index.php?page=main .currency');
            }
      }
  })
}
function collect(){
    $.ajax({
        url:'collect.php',
        method: 'POST',
        type:'POST',
        success:function(){
            $('#collected').text('Вы успешно собрали GGcoins');
            $("#collected").addClass('alert-success');
            $('#collected').show('blind',500);
            $('.para').load('index.php?page=barn .para');
            $('.currency').load('index.php?page=main .currency');
            setTimeout(()=> $('#collected').hide('blind',500), 3000)
        }
    })
};
function exc(){
    $.ajax({
        url:'exchange.php',
        method: 'POST',
        type:'POST',
        success:function(data){
            $('#exchanged').text(data);
            $('#exchanged').show('blind',500);
            $('.para').load('index.php?page=market .para');
            $('.currency').load('index.php?page=main .currency');
            setTimeout(()=> $('#exchanged').hide('blind',500), 3000)
        }
    })
};
$('.register').on('click',register);
function register() {
    $('.zatem').fadeIn(100);
    $('.okno').fadeIn(500);
}
$('#exit').on('click',exit);
function exit() {
    $('.zatem').fadeOut(100);
    $('.okno').fadeOut(500);
    $('#loginerror').hide('blind',100);
    $('#farmerror').hide('blind',100);
    $('#mailerror').hide('blind',100);
    $('#paserror').hide('blind',100);
}
function errors() {
  $('.errors').show(blind,{},1000);
}



