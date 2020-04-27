//add data pracheses 
$("#click").click(function () {
    var post1 = $("#n_supplier").val();
    var post2 = $("#product").val();
    var post3 = $("#price").val();
    var post4 = $("#qount").val();
    var post5 = $("#click").val();

    if (post1 !== '' && post2 !== '' && post3 !== '' && post4 !== '' && post5 !== '') {
        $.ajax({
            method: "POST",
            url: "add_pruches.php",
            data: {
                n_supplier: post1,
                product: post2,
                price: post3,
                qount: post4,
                cl_1: post5,

            },
            success: function (data, status, xhr) {
                get();
                alert(status);
            },

            error: function (data, status, xhr) {

                alert(status);

            }


        });
    }


    $('#n_supplier , #product ,#price ,#qount ').click(function () {


        $('#n_supplier , #product ,#price ,#qount ').css('background-color', 'white');


    })

    if (post1 == '') {

        $("#n_supplier").css('background-color', ' coral');

    }
    if (post2 == '') {

        $("#product").css('background-color', ' coral');

    }
    if (post3 == '') {

        $("#price").css('background-color', ' coral');

    }
    if (post4 == '') {

        $("#qount").css('background-color', ' coral');

    }



});
//end

//button setting

$('#o_setting , .close-1').click(function () {


    $(".box_satting").toggle();


});

//end button setting


//button show pruches


$('#show_p').click(function () {


    $('.box_table').toggle();


});




//auto show data table

function get() {

    $.ajax({

        url: 'show_data_praches.php',
        method: 'POST',
        data: {
            tb: 1
        },

        success: function (data) {

            showdel()

            $('#data').html(data);

        }

    });

}

// show del data id select

function showdel() {


    $.ajax({


        url: 'show_data_praches.php',
        method: 'POST',
        data: {
            del: 1
        },

        success: function (data) {

            $('#sel_dat_1,.sel_update_2').html(data);
            update();


        }


    });
}

// delete data

function deldatal() {

    var post1 = $('#sel_dat_1').val(),
        post2 = $('#btn_del_d').val();

    $.ajax({


        url: 'add_pruches.php',
        method: 'POST',
        data: {
            del: post1,
            del_d: post2
        },

        success: function (data, status) {
            get()
            alert(status);

        }


    });

}

// click show box del 


$('#del_o').click(function () {


    $('.box_update').hide(function () {
        $('.box_delete').toggle();

    });



});


//show update data in input
function update() {



    var post1 = $('#sel_update_3').val();
    $.ajax({
        url: 'show_data_praches.php',
        method: 'POST',
        data: {
            sel_data: post1,
            cheack_update: 1,
            cheack: 1,
        },
        success: function (data, status) {
            $('#inp_update_1').val(data);
        }
    });

    $.ajax({
        url: 'show_data_praches.php',
        method: 'POST',
        data: {
            sel_data: post1,
            cheack_update: 1,
            cheack: 2,
        },
        success: function (data, status) {
            $('#inp_update_2').val(data);
        }
    });

    $.ajax({
        url: 'show_data_praches.php',
        method: 'POST',
        data: {
            sel_data: post1,
            cheack_update: 1,
            cheack: 3,
        },
        success: function (data, status) {
            $('#inp_update_3').val(data);
        }
    });

    $.ajax({
        url: 'show_data_praches.php',
        method: 'POST',
        data: {
            sel_data: post1,
            cheack_update: 1,
            cheack: 4,
        },
        success: function (data, status) {
            $('#inp_update_4').val(data);
        }
    });
}
//end show update data

//show update data

$('#mod_o').click(function () {
    $('.box_delete').hide(function () {
        $('.box_update').toggle();
    });
});

// post data update


function postupdatedata() {


    var post1 = $('#inp_update_1').val();
    var post2 = $('#inp_update_2').val();
    var post3 = $('#inp_update_3').val();
    var post4 = $('#inp_update_4').val();
    var post5 = $('#btn_update_3').val();
    var post6 = $('#sel_update_3').val();

    $.ajax({


        url: 'add_pruches.php',
        method: 'POST',
        data: {

            supplier_name: post1,
            product_name: post2,
            price_product: post3,
            quantity: post4,
            cheack_updat_post: post5,
            dat_time: post6,


        },
        success: function (data, status) {

            alert(status);
            get();
        }



    });


}


// close box update


$('.close_update_1').click(function () {


    $('.box_update').hide();




});


//close box delete 

$('.close_delete_1').click(function () {


    $('.box_delete').hide();

});