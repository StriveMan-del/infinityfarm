function f() {
   $.ajax({
       url:"top.php",
       method:"GET",
       type:"GET",
       data:{
           rur:1,
       },
       success: function (data) {
           $('#rur').append(data);
       }
   })
    $.ajax({
        url:"top.php",
        method:"GET",
        type:"GET",
        data:{
            buy:1,
        },
        success: function (data) {
            $('#buy').append(data);
        }
    })
};
f();