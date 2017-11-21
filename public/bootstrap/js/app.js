$(function () {
    getData();
    function getData() {
        $.ajax({
           type: 'get',
            url: 'pre-show',
            success:function (msg) {
                $("#ShowData").html(msg);
            }
        });
    }

    $("#btnSubmit").on('click', function () {
        var title=$("#title").val();
        var price=$("#price").val();
        var _token=$("#_token").val();

        $.ajax({
            type: 'post',
            url : 'new-data',
            data: {title:title, price:price, _token:_token},
            success:function (msg) {
                $("#showInfo").html(msg);
                getData();
                $("#title").val('');
                $("#price").val('');
            }
        });

    });

    $("body").delegate('#del','click', function () {
        var id=$(this).attr('idd');
        var result=confirm("Are you sure delete?");
        if(result){
            $.ajax({
                type: 'get',
                url :'delete',
                data : {id:id},
                success:function (msg) {
                    $("#showInfo").html(msg);
                    getData();
                }
            });
        }
    })


});