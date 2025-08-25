<script>
    $('p.truncate').each(function() {
        const $el = $(this);

        // --- Word-based collapse ---
        const wordLimit = $el.data('collapsed-words');
        if (wordLimit) {
            const words = $el.text().trim().split(' ');
            if (words.length > wordLimit) {
                const visibleText = words.slice(0, wordLimit).join(' ');
                const hiddenText = words.slice(wordLimit).join(' ');
                $el.html(`
                    ${visibleText}
                    <span class="more-text" style="display:none;"> ${hiddenText}</span>
                    <a href="#" class="read-more">Read More</a>
                `);
            }
        }

        // --- Line-based collapse ---
        const lineLimit = $el.data('collapsed-lines');
        if (lineLimit) {
            const lineHeight = parseFloat($el.css('line-height')) || 24;
            const collapsedHeight = lineHeight * lineLimit;

            $el.css({
                'max-height': collapsedHeight + 'px',
                'overflow': 'hidden',
                'position': 'relative'
            });

            if (!$el.find('.read-more').length) {
                $el.after('<a href="#" class="read-more">Read More</a>');
            }
        }
    });

    // Toggle handler
    $(document).on('click', '.read-more', function(e) {
        e.preventDefault();
        const $link = $(this);

        // Identify the related <p>
        const $target = $link.closest('p.truncate').length ?
            $link.closest('p.truncate') :
            $link.prev('p.truncate');

        if ($target.find('.more-text').length) {
            // --- Word-based toggle ---
            const $hidden = $target.find('.more-text');
            const isVisible = $hidden.is(':visible');

            $hidden.slideToggle(200);
            $link.text(isVisible ? 'Read More' : 'Read Less');
        } else {
            // --- Line-based toggle ---
            const lineLimit = $target.data('collapsed-lines');
            const lineHeight = parseFloat($target.css('line-height')) || 24;
            const isCollapsed = $target.css('overflow') === 'hidden'; // current state

            if (isCollapsed) {
                // Expand
                $target.css({
                    'max-height': 'none',
                    'overflow': 'visible'
                });
                $link.text('Read Less');
            } else {
                // Collapse
                $target.css({
                    'max-height': (lineHeight * lineLimit) + 'px',
                    'overflow': 'hidden'
                });
                $link.text('Read More');
            }
        }
    });
</script>