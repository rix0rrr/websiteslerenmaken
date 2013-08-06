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

    /**
     * We need an additional on-top invisible DIV to capture drag events
     * on the iframes
     */
    var dragLayer = (function() {
        var layer;

        var create = function() {
            if (layer) return;

            layer = $('<div></div>').css({
                position: 'absolute',
                left: 0,
                top: 0,
                bottom: 0,
                right: 0,
                zIndex: 1000,
                display: 'none'
            }).appendTo(document.body);
        }

        return {
            activate: function() {
                create();
                layer.css({ display: 'block' });
            },
            deactivate: function() {
                if (layer) layer.css({ display: 'none' });
            }
        }
    }());

    $('.h-split, .v-split').each(function(i, el) {
        var horizontal = $(el).hasClass('h-split');

        var evPosition = horizontal ? 'pageX' : 'pageY';

        var left  = $(el).children().eq(0);
        var right = $(el).children().eq(1);
        var splitter = $('<div></div>').addClass(horizontal ? 'h-splitter' : 'v-splitter').appendTo(el);

        var max = function() {
            return horizontal ? $(el).width() : $(el).height();
        }

        var splitSize  = 8;
        var splitMargin = 50;
        var pos = getPosition(el, max() / 2);

        function updatePositions() {
            pos = Math.max(splitMargin, Math.min(pos, max() - splitMargin));

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

        var upHandler = function() {
            window.removeEventListener('mousemove', moveHandler, true);
            window.removeEventListener('mouseup',   upHandler, true);

            dragging = false;

            savePosition(el, pos);
            dragLayer.deactivate();

            return false;
        };

        splitter.mousedown(function(ev) {
            dragging = true;
            ofs      = ev[evPosition] - pos;

            window.addEventListener('mousemove', moveHandler, true);
            window.addEventListener('mouseup',   upHandler, true);

            dragLayer.activate();

            return false;
        });

        updatePositions();
        $(window).resize(updatePositions);
    });
});
