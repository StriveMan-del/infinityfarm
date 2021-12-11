let count;
function autobet(bet) {
 $("#sum").val(bet);
}
$("#reload").on('click',reload);
function reload() {
 $("#sum").val('');
};
$(document).on('click','#start-game',start_game);
function start_game() {
 if(+$('#sum').val() < 50 || isNaN(+$('#sum').val()) || +$('#sum').val() < 0){
  $("#result-game").text('Ставка должна быть не меньше 50Р');
  $("#result-game").addClass('alert-success');
  $("#result-game").show('blind',{},500);
  setTimeout(()=> $('#result-game').hide('blind',500), 3000);
 } else {
  $.ajax({
   url: 'game.php',
   method: 'POST',
   type: 'POST',
   data: {
    id: 1541,
    bet: $("#sum").val(),
   },
   success: function (data) {
    if (data == 'money') {
     $("#result-game").text('У вас недостаточно денег');
     $("#result-game").addClass('alert-success');
     $("#result-game").show('blind',{},500);
     setTimeout(()=> $('#result-game').hide('blind',500), 3000);
    } else {
     count = 0;
     $('#start-game').hide();
     $('#collect-game').show();
     active();
    }
   }
  })
 };
};
function active(){
 count++;
 $(`div.game-cells>div.game-row:nth-child(${count})`).addClass('row-active');
 if (count != 1){
  $(`div.game-cells>div.game-row:nth-child(${count-1})`).removeClass('row-active');
  $(`div.game-cells>div.game-row:nth-child(${count-1})`).addClass('row-suc');
 }
};
function win(mine){
 $(`div.game-row:nth-child(10)`).removeClass('row-active');
 $(`div.game-row:nth-child(10)`).addClass('row-suc');
 for(let i = 0; i<10; i++){
  $('div.game-cells div.game-row:eq('+i+') div.game-cell:eq('+(mine[i]-1)+')').html('<img src="/resourses/img/mole.png" class="mine">');
 };
 $('#collect-game').hide();
 $('#reload-game').show();
 $('.currency').load('index.php?page=main .currency');
};
function lose(mine){
 $(`div.game-row:nth-child(${count})`).removeClass('row-active');
 $(`div.game-row:nth-child(${count})`).addClass('row-lose');
 for(let i = 0; i<10; i++){
  $('div.game-cells div.game-row:eq('+i+') div.game-cell:eq('+(mine[i]-1)+')').html('<img src="/resourses/img/mole.png" class="mine">');
 };
 $('#collect-game').hide();
 $('#reload-game').show();
 $('.currency').load('index.php?page=main .currency');
};
$(document).on('click', '.row-active > div.game-cell', function(e) {
 id = $(e.target).index();
 $.ajax({
  url: 'active.php',
  method: 'POST',
  type: 'POST',
  data: {
   id:id,
  },
  dataType:'json',
  success: function(data){
   switch (data['result']) {
    case '2':
     $('.info-game').show();
    $('#round').html(data['round']);
    $('#mine').html(data['mine']);
    lose(data['mine']);
    break;
    case '1':
     $('.info-game').show();
     $('#sum_bet').html(data['bet']);
     active();
    break;
    case '3':
     win(data['mine']);
     break;
    default:
     break;
   }
  }
 })
});
$(document).on('click', '#collect-game', function () {
 $.ajax({
  url:'collect_mine.php',
  method:'POST',
  type:'POST',
  dataType:'json',
  success:function(data){
    if(data['result'] == 'suc'){
     $(`div.game-row:nth-child(${count})`).removeClass('row-active');
     for(let i = 0; i<10; i++){
      $('div.game-cells div.game-row:eq('+i+') div.game-cell:eq('+(data['mine'][i]-1)+')').html('<img src="/resourses/img/mole.png" class="mine">');
     };
     $("#result-game").text('Вы успешно забрали свой выигрышь');
     $("#result-game").addClass('alert-success');
     $("#result-game").show('blind',{},500);
     setTimeout(()=> $('#result-game').hide('blind',500), 3000);
     $('#collect-game').hide();
     $('#reload-game').show();
     $('.currency').load('index.php?page=main .currency');
    };
  },
 })
});
$(document).on('click','#reload-game',function () {
 $('.game').load('index.php?page=game #game');
});
