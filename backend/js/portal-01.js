/* ============== START: Helper Functions ======================= */
"use strict";

var error_msg = 'Oops! Couldn\'t connect to the server. Refresh page and try again';

function my_notify (msg, type){
    $.notify({
        message: msg
    }, {
        type: type
    });
}

function bootstrap_alert($msg, $type){
    if($type === undefined) $type = 'danger';

    return '<div class="alert alert-'+ $type+ ' alert-rounded">'+ $msg+ '<button type="button" class="close"' +
    ' data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>';
}


function dob_to_age(dob){
    var timestamp = new Date().getTime() / 1000;
    var dob_timestamp = Date.parse(dob) / 1000;
    var a = timestamp - dob_timestamp;
    return Math.round(a / 3.154e+7);
}


function gender(gender){
    if(gender === 'M'){
        return 'Male';
    }else if(gender === 'F'){
        return 'Female';
    }else{
        return null;
    }
}


function ajax_error(message) {
    if (!message) message = error_msg;
    var a = '<p style="color: #b60f0f"><img src="' + base_url + '/assets/img/warning.png" width="20" height="20"> ' + message +'</p>';
    return a;
}


function ajax_loader (){
    var a = '<img src="'+base_url+'/assets/img/giphy.gif" width="30" height="30">';
    return a;
}


function check_all(a){
    if($(a).is(':checked')){
        $('.chk:visible').attr('checked', 'checked');
    }else{
        $('.chk').removeAttr('checked');
    }
}


function submit_form(form_id, silent){
    if(silent === undefined) silent = false;

    var form = $(form_id);
    var form_data = form.serializeArray();
    var processor = $('.processor'); // <span></span> to hold loader image

    processor.html(ajax_loader());
    $('#DivOverlay').show();

    var url = form.attr('action');

    return $.post(url, form_data, function (result) {
        if(!silent) my_notify(result.msg, result.type);
        $('.processor').html('');
    }, 'json').fail(function () {
        processor[0].scrollIntoView({behavior: "smooth"});
        processor.html(ajax_error());
    }).always(function(){
        $('#DivOverlay').fadeOut();
    });
}

function submit_form2(form_id, silent){
    if(silent === undefined) silent = false;

    var form = $(form_id);
    var form_data = form.serializeArray();

    $('.preloader').show();
    var url = form.attr('action');

    return $.post(url, form_data, function (result) {
        if(!silent) my_notify(result.msg, result.type);
    }, 'json').fail(function () {
        my_notify(error_msg, 'danger');
    }).always(function(){
        $('.preloader').hide();
    });
}


function submit_form_multipart(form_id, silent){
    if(silent === undefined) silent = false;

    var form  = $(form_id);
    var form_data = new FormData(form[0]);
    $('.preloader').show();

    return $.ajax({
        url:		form.attr('action'),
        type:		'POST',
        data:		form_data,
        contentType: false,
        processData: false,
        dataType:	'json',
        cache:		false,
        success: function (result, status) {
            if(!silent) my_notify(result.msg, result.type);
        },
        error: function () {
            my_notify(error_msg, 'danger');
        },
        complete: function(){
            $('.preloader').hide();
        }
    });
}


function auto_submit_form(form_id, silent){
    if(silent === undefined) silent = false;

    var form = $(form_id);
    var form_data = form.serializeArray();
    var url = form.attr('action');

    return $.post(url, form_data, function (result) {
        if(!silent) my_notify(result.msg, result.type);
    }, 'json').fail(function(){
        my_notify('Oh noes! we could not automatically save this page, try saving manually', 'danger');
    }).always(function(){
        if($('#auto-save').is(':checked')){
            setTimeout(auto_submit_form, 5000, form_id);
        }
    });

}


function get_request(url, silent){
    if(silent === undefined) silent = false;

    $('.preloader').show();

    return $.get(url, function (result) {
        if(!silent) my_notify(result.msg, result.type);
    }, 'json').fail(function (result) {
        my_notify(error_msg, 'danger');
    }).always(function(){
        $('.preloader').hide();
    });
}

/* ============== END: Helper Functions ======================= */


function student_list(){
    var form = $('form#student-list');
    var formArray = form.serializeArray();

    $('#student-list-table').html(ajax_loader()); 

    $('#DivOverlay').css({display: 'block'});
    var url = form.attr('action') + ' div.resp-tbl'; //Load just the table, Nothing else

    $('#student-list-table').load(url, formArray, function(resp,status,xhr){
        $('#DivOverlay').fadeOut();
        $('html, body').animate({scrollTop: 0});

        if (status === 'success') {
            //Did something return?
            if ($('tr').length > 0) {
                $('#print-pdf').show();
                var heading = $('#head').val();
                $('#page-title').html('Student List (' + heading + ')');
            }

            if ($('tr').length > 100) {
                $('.table').DataTable({"iDisplayLength": 50});
            }
        }else{
            $('#student-list-table').html(ajax_error());
        }
    });
}


function students_for_subject_registration(session_id, class_arm_id, subject_id){

    var a = $('#ajax-response');
    a.html(ajax_loader());

    $('#DivOverlay').css({display: 'block'});

    var url = site_url+'classes/students-for-subject-registration/'+session_id+'/'+class_arm_id+'/'+subject_id+' table';

    a.load(url, function(resp,status,xhr){
        $('#DivOverlay').fadeOut();
        $('html, body').animate({scrollTop: 0});

        if (status === 'success') {
            $('button[type=submit]').removeAttr('disabled');

        }else{
            a.html(ajax_error());
        }
    });
}


function register_student_subject(){
    var form = $('#register-subj');
    var form_data = form.serializeArray();

    $('.processor').html(ajax_loader());
    $('#DivOverlay').css({display: 'block'});

    var url = form.attr('action');

    $.post(url, form_data, function (result) {
        my_notify(result.msg, result.type);

        if (result.type === 'success') {
            $('form input:checkbox:checked.chk').parent().parent().parent().parent().fadeOut(2000, function () {
                $(this).remove();

                //Reorder table numbering after removing some row
                $('.sn').each(function (i) {
                    $(this).text(i + 1);
                });

                //If all table rows are removed, append this...
                if ($('td').length < 1) {
                    $("tbody").append('<tr><td colspan="5"><i>Looks like all students are already registered for this subject.</i></td></tr>');
                }
            });
        }

        $('.processor').html('');
    }, 'json').fail(function () {
        $('.processor').html(ajax_error());
    }).always(function(){
        $('#DivOverlay').fadeOut();
    });
}


function students_registered_for_subject(session_id, class_arm_id, subject_id){

    var a = $('#ajax-response');
    a.html(ajax_loader());

    $('#DivOverlay').css({display: 'block'});

    var url = site_url+'classes/students-registered-for-subject/'+session_id+'/'+class_arm_id+'/'+subject_id+' table';

    a.load(url, function(resp,status,xhr){
        $('#DivOverlay').fadeOut();
        $('html, body').animate({scrollTop: 0});

        if (status === 'success') {
            $('button[type=submit]').removeAttr('disabled');

        }else{
            a.html(ajax_error());
        }
    });
}


function deregister_student_subject(){
    var form = $('#deregister-subj');
    var form_data = form.serializeArray();

    $('.processor').html(ajax_loader());
    $('#DivOverlay').css({display: 'block'});

    var url = form.attr('action');

    $.post(url, form_data, function (result) {
        my_notify(result.msg, result.type);

        if (result.type === 'success') {
            $('form input:checkbox:checked.chk').parent().parent().parent().parent().fadeOut(2000, function () {
                $(this).remove();

                //Reorder table numbering after removing some row
                $('.sn').each(function (i) {
                    $(this).text(i + 1);
                });

                //If all table rows are removed, append this...
                if ($('td').length < 1) {
                    $("tbody").append('<tr><td colspan="5"><i>Looks like NO students is registered for this' +
                        ' subject.</i></td></tr>');
                }
            });
        }

        $('.processor').html('');
    }, 'json').fail(function () {
        $('.processor').html(ajax_error());
    }).always(function(){
        $('#DivOverlay').fadeOut();
    });
}


function fetch_parent_info(parent_username){
    $('#p-processor').html(ajax_loader());
    $('#DivOverlay').show();

    $('.parent').val('');
    $('.parent').attr('readonly', 'readonly');

    var url = site_url+'student/parent-info-json/' + parent_username;

    $.get(url, function (result) {
        var a = $('#parent-username');
        if(result.status === 'ok'){

            a.removeClass('form-control-danger');
            a.addClass('form-control-success');
            a.parent().removeClass('has-danger');
            a.parent().addClass('has-success');
            a.siblings('small').html('');


            $('#parent-title').val(result.title);
            $('#parent-surname').val(result.surname);
            $('#parent-first-name').val(result.first_name);
            $('#parent-sec-name').val(result.sec_name);
            $('#parent-email').val(result.email);
            $('#parent-phone').val(result.phone);
            $('#parent-occup').val(result.occup);
            $('#parent-house-address').val(result.house_address);
            $('#parent-office-address').val(result.office_address);
            $('#parent-next-kin').val(result.next_kin);
            $('#parent-next-kin-phone').val(result.next_kin_phone);
            $('.parent').attr('readonly', 'readonly');
            $('#p-processor').html('');
        }else{
            a.removeClass('form-control-success');
            a.addClass('form-control-danger');
            a.parent().removeClass('has-success');
            a.parent().addClass('has-danger');
            a.siblings('small').html('Oh no! We couldn\'t find a parent with that username. Ensure it is spelt' +
                ' correctly');
        }
        $('#p-processor').html('');
    }, 'json').fail(function () {
        $('#p-processor').html(ajax_error('Oops! Something isn\'t right! we couldn\'t reach the server'));
    }).always(function(){
        $('#DivOverlay').fadeOut();
    });
}