// initializing editors
var titleEditor = new MediumEditor('.title-editable', {
    buttonLabels: 'fontawesome'
});
var bodyEditor = new MediumEditor('.body-editable', {
    buttonLabels: 'fontawesome'
});
$(function () {
    // initializing insert image on body editor
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN':  $('input[name="_token"]').attr('value') } });
    $('.body-editable').mediumInsert({
        editor: bodyEditor,
        images: true,
        // imagesUploadScript: "{{ URL::to('upload') }}"
        imagesUploadScript: "/post/upload"
    });
    // deactivate editors on show view
    if ($('#hideEditor').length) {
        $('.body-editable').mediumInsert('disable');
        bodyEditor.deactivate();
        titleEditor.deactivate();
    }
});
// hiding messages
$('.error').hide().empty();
$('.success').hide().empty();
 
// create post
$('body').on('click', '#form-submit', function(e){
    e.preventDefault();
    var postTitle = titleEditor.serialize();
    var postContent = bodyEditor.serialize();
 
    $.ajax({
        type: 'POST',
        dataType: 'json',
        // url : "{{ URL::action('PostsController@store') }}",
        url : "/posts",
        headers: {
              'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
        },
        data: { title: postTitle['post-title']['value'], body: postContent['post-body']['value'] },
        success: function(data) {
            if(data.success === false)
            {
                $('.error').append(data.message);
                $('.error').show();
            } else {
                $('.success').append(data.message);
                $('.success').show();
                setTimeout(function() {
                    // window.location.href = "{{ URL::action('PostsController@index') }}";
                    window.location.href = "/posts";
                }, 2000);
            }
        },
        error: function(xhr, textStatus, thrownError) {
            alert('Something went wrong. Please Try again later...');
        }
    });
    return false;
});
 
// update post
$('body').on('click', '#form-update', function(e){
    e.preventDefault();
    var postTitle = titleEditor.serialize();
    var postContent = bodyEditor.serialize();
    
    var url = $(location).attr('href').split("/").splice(0, 5).join("/");
    var segments = url.split( '/' );
    var post_id = segments[4];

    $.ajax({
        type: 'PUT',
        dataType: 'json',
        // url : "{{ URL::action('PostsController@update', array(Request::segment(2))) }}",
        url : "/posts/"+post_id,
        headers: {
              'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
        },
        data: { title: postTitle['post-title']['value'], body: postContent['post-body']['value'] },
        success: function(data) {
            if(data.success === false)
            {
                $('.error').append(data.message);
                $('.error').show();
            } else {
                $('.success').append(data.message);
                $('.success').show();
                setTimeout(function() {
                    // window.location.href = "{{ URL::action('PostsController@index') }}";
                    window.location.href = "/posts";
                }, 2000);
            }
        },
        error: function(xhr, textStatus, thrownError) {
            alert('Something went wrong. Please Try again later...');
        }
    });
    return false;
});