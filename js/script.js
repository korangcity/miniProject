$(document).ready(function(){

$("#btn").click(function(e){
    e.preventDefault();
    $("#rslt").html("<img src='../images/loading/loading16.gif'>");
    $.ajax({
        type:'POST',
        url:'actions.php',
        data:{repNmSrch:$("#repNmSrch").val(),proNmSrch:$("#proNmSrch").val(),goodsNum:$("#proNum").val(),sub:$("#btn").val()},
        success : function(response){
            $('#rslt').html(response)
        }
    });
});



$("#btnRep").click(function(e){
    e.preventDefault();
    $("#rsltRep").html("<img src='../images/loading/loading16.gif'>").fadeIn();

    $.ajax({
       type:"POST",
       url:"actions.php",
       data:{repNmSrch:$("#repNmSrch").val(),que:$("#btnRep").val()},
        success:function (response) {
            $("#rsltRep").html(response);
        }
    });
});

    $("#btnPro").click(function(e){
        e.preventDefault();
        $("#rsltPro").html("<img src='../images/loading/loading16.gif'>").fadeIn();

        $.ajax({
            type:"POST",
            url:"actions.php",
            data:{proNmSrch:$("#proNmSrch").val(),qu:$("#btnPro").val()},
            success:function (response) {
                $("#rsltPro").html(response);
            }
        });
    });


    $("#chkRep").click(function () {
        var chkRep=$("#chkRep:checked").val() ? true:false;

         if(chkRep){
            $("#repIdd").css('display','block');
             $("#repDel").css('display','none');
             $("#proIdd").css('display','none');
             $("#proDel").css('display','none');
             $("#proEmp").css('display','none');
             $("#repEmp").css('display','none');

             $("#chkPro").attr('checked',false);
             $("#chkProDel").attr('checked',false);
             $("#chkRepDel").attr('checked',false);
             $("#chkRepEmp").attr('checked',false);
             $("#chkProEmp").attr('checked',false);
        }else{
            $("#repIdd").css('display','none');
         }

    })

    $("#chkRepDel").click(function () {
        var chkRepDel=$("#chkRepDel:checked").val() ? true:false;

        if(chkRepDel){
            $("#repDel").css('display','block');
            $("#proIdd").css('display','none');
            $("#proDel").css('display','none');
            $("#repIdd").css('display','none');
            $("#proEmp").css('display','none');
            $("#repEmp").css('display','none');

            $("#chkRep").attr('checked',false);
            $("#chkPro").attr('checked',false);
            $("#chkProDel").attr('checked',false);
            $("#chkRepEmp").attr('checked',false);
            $("#chkProEmp").attr('checked',false);
        }else{
            $("#repDel").css('display','none');
        }

    })

    $("#chkPro").click(function () {
        var chkPro=$("#chkPro:checked").val() ? true:false;

        if(chkPro){
            $("#proIdd").css('display','block');
            $("#repIdd").css('display','none');
            $("#proDel").css('display','none');
            $("#repDel").css('display','none');
            $("#proEmp").css('display','none');
            $("#repEmp").css('display','none');

            $("#chkRep").attr('checked',false);
            $("#chkProDel").attr('checked',false);
            $("#chkRepDel").attr('checked',false);
            $("#chkRepEmp").attr('checked',false);
            $("#chkProEmp").attr('checked',false);
        }else{
            $("#proIdd").css('display','none');
        }

    })

    $("#chkProDel").click(function () {
        var chkProDel=$("#chkProDel:checked").val() ? true:false;

        if(chkPro){
            $("#proDel").css('display','block');
            $("#proIdd").css('display','none');
            $("#repIdd").css('display','none');
            $("#repDel").css('display','none');
            $("#proEmp").css('display','none');
            $("#repEmp").css('display','none');

            $("#chkRep").attr('checked',false);
            $("#chkPro").attr('checked',false);
            $("#chkRepDel").attr('checked',false);
            $("#chkRepEmp").attr('checked',false);
            $("#chkProEmp").attr('checked',false);
        }else{
            $("#proDel").css('display','none');
        }

    })


    $("#chkRepEmp").click(function () {
        var chkRepEmp=$("#chkRepEmp:checked").val() ? true:false;

        if(chkRepEmp){
            $("#repEmp").css('display','block');
            $("#proDel").css('display','none');
            $("#proIdd").css('display','none');
            $("#repIdd").css('display','none');
            $("#repDel").css('display','none');
            $("#proEmp").css('display','none');


            $("#chkRep").attr('checked',false);
            $("#chkPro").attr('checked',false);
            $("#chkRepDel").attr('checked',false);
            $("#chkProDel").attr('checked',false);
            $("#chkProEmp").attr('checked',false);
        }else{
            $("#repEmp").css('display','none');
        }

    })



    $("#chkProEmp").click(function () {
        var chkProEmp=$("#chkProEmp:checked").val() ? true:false;

        if(chkProEmp){
            $("#proEmp").css('display','block');
            $("#repEmp").css('display','none');
            $("#proDel").css('display','none');
            $("#proIdd").css('display','none');
            $("#repIdd").css('display','none');
            $("#repDel").css('display','none');



            $("#chkRep").attr('checked',false);
            $("#chkPro").attr('checked',false);
            $("#chkRepDel").attr('checked',false);
            $("#chkProDel").attr('checked',false);
            $("#chkRepEmp").attr('checked',false);
        }else{
            $("#proEmp").css('display','none');
        }

    })


$("#btnAddRep").click(function () {
  $("#rsltRepIdd").html("<img src='../images/loading/loading16.gif'>").fadeIn();

  $.ajax({
      url:'actions.php',
      type:'POST',
      data:{repName:$("#repp").val(),btnAdRep:$("#btnAddRep").val()},
      success:function(response){
          $("#rsltRepIdd").html(response);
      }
  })
});

    $("#btnAddPro").click(function () {
        $("#rsltProIdd").html("<img src='../images/loading/loading16.gif'>").fadeIn();

        $.ajax({
            url:'actions.php',
            type:'POST',
            data:{proName:$("#proo").val(),btnAdPro:$("#btnAddPro").val()},
            success:function(response){
                $("#rsltProIdd").html(response);
            }
        })
    });

    $("#btnDelRep").click(function () {
        $("#rsltRepDel").html("<img src='../images/loading/loading16.gif'>").fadeIn();

        $.ajax({
            url:'actions.php',
            type:'POST',
            data:{repNmSrch:$("#repNmSrch").val(),btnDlRep:$("#btnDelRep").val()},
            success:function(response){
                $("#rsltRepDel").html(response);
            }
        })
    });

    $("#btnDelPro").click(function () {
        $("#rsltProDel").html("<img src='../images/loading/loading16.gif'>").fadeIn();

        $.ajax({
            url:'actions.php',
            type:'POST',
            data:{proNmSrch:$("#proNmSrch").val(),btnDlPro:$("#btnDelPro").val()},
            success:function(response){
                $("#rsltProDel").html(response);
            }
        })
    });

    $("#btnEmpRep").click(function (e) {
        e.preventDefault();
        $("#rsltRepEmp").html("<img src='../images/loading/loading16.gif'>").fadeIn();

        $.ajax({
            url:'actions.php',
            type:'POST',
            data:{repNmEmp:$("#repNmEmp").val(),btnEmpRep:$("#btnEmpRep").val()},
            success:function(response){
                $("#rsltRepEmp").html(response);
            }
        });
    });


    $("#btnEmpPro").click(function (e) {
        e.preventDefault();
        $("#rsltProEmp").html("<img src='../images/loading/loading16.gif'>").fadeIn();

        $.ajax({
            url:'actions.php',
            type:'POST',
            data:{proNmEmp:$("#proNmEmp").val(),btnEmpPro:$("#btnEmpPro").val()},
            success:function(response){
                $("#rsltProEmp").html(response);
            }
        })
    });




});