define([], function() {
    'use strict';

/*  | This extension is made with ❤ for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2019 Armin Vieweg <armin@v.ieweg.de>
 */

    // Registers event for CTRL+S shortcut, when TBE_EDITOR is available.
    // When the event is triggered, it performs .blur() on current focused item
    // and submit the current form.

    if (typeof TBE_EDITOR === 'object') {
        window.addEventListener('keydown', function(event) {
            if ((event.ctrlKey || event.metaKey) && String.fromCharCode(event.which).toLowerCase() === 's') {
                event.preventDefault();
                var focusItem = document.querySelector( ':focus' );
                if (focusItem) {
                    focusItem.blur();
                }
                TBE_EDITOR.submitForm();
            }
        });
    }
});
