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

    $('.editor').each(function(i, el) {
        var myCodeMirror = CodeMirror(el, {
            value: "<html>\n  <head>\n  </head>\n  <body>\n\n    Wat je hier typt verschijnt in het vak hieronder.\n\n  </body>\n</html>\n",
            mode:  "htmlmixed"
        });

        var update = function() {
            var html = myCodeMirror.getValue();
            $('#preview').attr('src', 'data:text/html;charset=utf-8,' + encodeURIComponent(html));
        };

        myCodeMirror.on('change', update);
        update();
    });
});
