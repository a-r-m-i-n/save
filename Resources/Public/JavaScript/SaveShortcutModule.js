import $ from 'jquery';

/*  | This extension is made with ❤ for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2019-2023 Armin Vieweg <armin@v.ieweg.de>
 */

// Registers event for CTRL+S shortcut, when TBE_EDITOR is available.
// When the event is triggered, it performs .blur() on current focused item
// and submit the current form.

if ($('button[form="EditDocumentController"][name="_savedok"]').length) {
  const submitForm = function () {
    const focusItem = document.querySelector(':focus');
    if (focusItem) {
      focusItem.blur();
    }
    $('button[form="EditDocumentController"][name="_savedok"]').trigger('click');
  };

  window.addEventListener('keydown', function (event) {
    if ((event.ctrlKey || event.metaKey) && String.fromCharCode(event.which).toLowerCase() === 's') {
      event.preventDefault();
      submitForm();
    }
  });

  //CKEditor hook not needed in TYPO3 >=12
}
