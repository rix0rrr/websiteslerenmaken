/**
 * Module to make splittable panes
 *
 * Searches for divs with classes 'h-split' and 'v-split', and inserts
 * a splitter between its first two children.
 *
 * Positions are remembered in localStorage based on the id of the parent element.
 */
$(function() {
    var getPosition = function(el, def) {
        var pos;
        var id = $(el).attr('id');
        if (id && window.localStorage) pos = window.localStorage.getItem('splitterpos-' + id);
        return pos ? parseInt(pos, 10) : def;
    }

    var savePosition = function(el, pos) {
        var id = $(el).attr('id');
        if (id && window.localStorage) window.localStorage.setItem('splitterpos-' + id, pos);
    }

    $('.h-split, .v-split').each(function(i, el) {
        var horizontal = $(el).hasClass('h-split');

        var evPosition = horizontal ? 'pageX' : 'pageY';

        var left  = $(el).children().eq(0);
        var right = $(el).children().eq(1);
        var splitter = $('<div></div>').addClass(horizontal ? 'h-splitter' : 'v-splitter').appendTo(el);

        var splitSize  = 8;
        var splitMargin = 50;
        var pos = getPosition(el, horizontal ? $(el).width() / 2 : $(el).height() / 2);

        function updatePositions() {
            pos = Math.max(splitMargin, Math.min(pos, $(el).width() - splitMargin));

            left.css({
                position: 'absolute',
                left:   0,
                top:    0,
                bottom: 0,
                width:  horizontal ? pos       : undefined,
                height: horizontal ? undefined : pos,
                overflow: 'auto'
            });
            right.css({
                position: 'absolute',
                left:   horizontal ? pos + splitSize : 0,
                top:    horizontal ?               0 : pos + splitSize,
                bottom: 0,
                right:  0,
                overflow: 'auto'
            });

            if (horizontal) {
                splitter.css({
                    position: 'absolute',
                    left:   pos,
                    width:  splitSize,
                    top:    0,
                    bottom: 0,
                    cursor: 'col-resize'
                });
            } else {
                splitter.css({
                    position: 'absolute',
                    left:   0,
                    right:  0,
                    top:    pos,
                    height: splitSize,
                    cursor: 'row-resize'
                });
            }
        }

        var dragging = false;
        var ofs;

        var moveHandler = function(ev) {
            pos = ev[evPosition] - ofs;
            updatePositions();
            return false;
        };

        var upHandler = function(ev) {
            if (dragging) {
                $(window).unbind('mousemove', moveHandler);
                $(window).unbind('mouseup',   upHandler);
            }
            dragging = false;
            savePosition(el, pos);
            return false;
        };

        splitter.mousedown(function(ev) {
            dragging = true;
            ofs      = ev[evPosition] - pos;

            $(window).bind('mousemove', moveHandler);
            $(window).bind('mouseup',   upHandler);
            return false;
        });

        updatePositions();
        $(window).resize(updatePositions);
    });
});
