$(function() {
    $('.extra-info').click(function(ev) {
        $(this).find('.content').toggle('fast');
    });
    $('.extra-info .content').hide();

    var resizeVfills = function() {
        $('.vfill').each(function(i, el) {
            $(el).height($(window).height() - $(el).position().top);
        });
    };
    $(window).resize(resizeVfills);
    resizeVfills();

    var htmlCodeMirror;

    $('.editor').each(function(i, el) {
        var initial_content = $(el).text();
        $(el).text('');
        var myCodeMirror = CodeMirror(el, {
            value: initial_content,
            mode:  "htmlmixed"
        });

        var update = function() {
            var html = myCodeMirror.getValue();
            $('#preview').attr('src', 'data:text/html;charset=utf-8,' + encodeURIComponent(html));
        };

        myCodeMirror.on('change', update);
        update();

        htmlCodeMirror = myCodeMirror;
    });

    $('#download-button').click(function() {
        var html = htmlCodeMirror.getValue();
        $('#download-button')
            .attr('href', 'data:text/html;charset=utf-8,' + encodeURIComponent(html))
            .attr('download', 'mijn-pagina.html');
    });
});
