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

    $(".vsplitter").splitter({ type: 'v', sizeLeft: 300, cookie: 'lrsplitter' });
    $(".hsplitter").splitter({ type: 'h', sizeTop: 300, cookie: 'tbsplitter' });

    $('.editor').each(function(i, el) {
        var myCodeMirror = CodeMirror(el, {
            value: "<html>\n  <head>\n  </head>\n  <body>\n  </body>\n</html>\n",
            mode:  "htmlmixed"
        });
    });
    
});
