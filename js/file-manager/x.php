/*!
 * FileInput Persian Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 * @author Milad Nekofar <milad@nekofar.com>
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
<?php 
 $dict2=array(
  "msgPlaceholder",
  "login",
  "phonenum",
  "enterphonenum",
  "pass",
  "logincode"
 );
// $dict= get_text($array);
?>
<script src="js/file-manager/fileinput.min.js"></script>
<script>
(function ($) {
    console.log("<?php echo $dict["cancel"];?>");
    "use strict";
    $.fn.fileinputLocales['x'] = {
        fileSingle: "<?php echo $dict["fileSingle"];?>",
        filePlural: "<?php echo $dict["filePlural"];?>",
        browseLabel: "<?php echo $dict["browseLabel"];?>",
        removeLabel: "<?php echo $dict["removeLabel"];?>",
        removeTitle: "<?php echo $dict["removeTitle"];?>",
        cancelLabel: "<?php echo $dict["cancelLabel"];?>",
        cancelTitle: "<?php echo $dict["cancelTitle"];?>",
        pauseLabel: "<?php echo $dict["pauseLabel"];?>",
        pauseTitle: "<?php echo $dict["pauseTitle"];?>",
        uploadLabel: "<?php echo $dict["uploadLabel"];?>",
        uploadTitle: "<?php echo $dict["uploadTitle"];?>",
        msgNo: "<?php echo $dict["msgNo"];?>",
        msgNoFilesSelected: "<?php echo $dict["msgNoFilesSelected"];?>",
        msgPaused: "<?php echo $dict["msgPaused"];?>",
        msgCancelled: "<?php echo $dict["msgCancelled"];?>",
        msgPlaceholder: "<?php echo $dict["msgPlaceholder"];?>",
        msgZoomModalHeading: "<?php echo $dict["msgZoomModalHeading"];?>",
        msgFileRequired: "<?php echo $dict["msgFileRequired"];?>",
        msgSizeTooSmall: "<?php echo $dict["msgSizeTooSmall"];?>",
        msgSizeTooLarge: "<?php echo $dict["msgSizeTooLarge"];?>",
        msgFilesTooLess: "<?php echo $dict["msgFilesTooLess"];?>",
        msgFilesTooMany: "<?php echo $dict["msgFilesTooMany"];?>",
        msgTotalFilesTooMany: "<?php echo $dict["msgTotalFilesTooMany"];?>",
        msgFileNotFound: "<?php echo $dict["msgFileNotFound"];?>",
        msgFileSecured: "<?php echo $dict["msgFileSecured"];?>",
        msgFileNotReadable: "<?php echo $dict["msgFileNotReadable"];?>",
        msgFilePreviewAborted: "<?php echo $dict["msgFilePreviewAborted"];?>",
        msgFilePreviewError: "<?php echo $dict["msgFilePreviewError"];?>",
        msgInvalidFileName: "<?php echo $dict["msgInvalidFileName"];?>",
        msgInvalidFileType: "<?php echo $dict["msgInvalidFileType"];?>",
        msgInvalidFileExtension: "<?php echo $dict["msgInvalidFileExtension"];?>",
        msgFileTypes: {
            'image': "<?php echo $dict["image"];?>",
            'html': "<?php echo $dict["html"];?>",
            'text': "<?php echo $dict["text"];?>",
            'video': "<?php echo $dict["video"];?>",
            'audio': "<?php echo $dict["audio"];?>",
            'flash': "<?php echo $dict["flash"];?>",
            'pdf': "<?php echo $dict["pdf"];?>",
            'object': "<?php echo $dict["object"];?>"
        },
        msgUploadAborted: "<?php echo $dict["msgUploadAborted"];?>",
        msgUploadThreshold: "<?php echo $dict["msgUploadThreshold"];?>",
        msgUploadBegin: "<?php echo $dict["msgUploadBegin"];?>",
        msgUploadEnd: "<?php echo $dict["msgUploadEnd"];?>",
        msgUploadResume: "<?php echo $dict["msgUploadResume"];?>",
        msgUploadEmpty: "<?php echo $dict["msgUploadEmpty"];?>",
        msgUploadError: "<?php echo $dict["msgUploadError"];?>",
        msgDeleteError: "<?php echo $dict["msgDeleteError"];?>",
        msgProgressError: "<?php echo $dict["msgProgressError"];?>",
        msgValidationError: "<?php echo $dict["msgValidationError"];?>",
        msgLoading: "<?php echo $dict["msgLoading"];?>",
        msgProgress: "<?php echo $dict["msgProgress"];?>",
        msgSelected: "<?php echo $dict["msgSelected"];?>",
        msgFoldersNotAllowed: "<?php echo $dict["msgFoldersNotAllowed"];?>",
        msgImageWidthSmall: "<?php echo $dict["msgImageWidthSmall"];?>",
        msgImageHeightSmall: "<?php echo $dict["msgImageHeightSmall"];?>",
        msgImageWidthLarge: "<?php echo $dict["msgImageWidthLarge"];?>",
        msgImageHeightLarge: "<?php echo $dict["msgImageHeightLarge"];?>",
        msgImageResizeError: "<?php echo $dict["msgImageResizeError"];?>",
        msgImageResizeException: "<?php echo $dict["msgImageResizeException"];?>",
        msgAjaxError: "<?php echo $dict["msgAjaxError"];?>",
        msgAjaxProgressError: "<?php echo $dict["msgAjaxProgressError"];?>",
        msgDuplicateFile: "<?php echo $dict["msgDuplicateFile"];?>",
        msgResumableUploadRetriesExceeded:  "<?php echo $dict["msgResumableUploadRetriesExceeded"];?>",
        msgPendingTime: "<?php echo $dict["msgPendingTime"];?>",
        msgCalculatingTime: "<?php echo $dict["msgCalculatingTime"];?>",
        ajaxOperations: {
            deleteThumb: "<?php echo $dict["deleteThumb"];?>",
            uploadThumb: "<?php echo $dict["uploadThumb"];?>",
            uploadBatch: "<?php echo $dict["uploadBatch"];?>",
            uploadExtra: "<?php echo $dict["uploadExtra"];?>"
        },
        dropZoneTitle: "<?php echo $dict["dropZoneTitle"];?>",
        dropZoneClickTitle: "<?php echo $dict["dropZoneClickTitle"];?>",
        fileActionSettings: {
            removeTitle: "<?php echo $dict["removeTitle"];?>",
            uploadTitle: "<?php echo $dict["uploadTitle"];?>",
            uploadRetryTitle: "<?php echo $dict["uploadRetryTitle"];?>",
            downloadTitle: "<?php echo $dict["downloadTitle"];?>",
            zoomTitle: "<?php echo $dict["zoomTitle"];?>",
            dragTitle: "<?php echo $dict["dragTitle"];?>",
            indicatorNewTitle: "<?php echo $dict["indicatorNewTitle"];?>",
            indicatorSuccessTitle: "<?php echo $dict["indicatorSuccessTitle"];?>",
            indicatorErrorTitle: "<?php echo $dict["indicatorErrorTitle"];?>",
            indicatorPausedTitle: "<?php echo $dict["indicatorPausedTitle"];?>",
            indicatorLoadingTitle:  "<?php echo $dict["indicatorLoadingTitle"];?>"
        },
        previewZoomButtonTitles: {
            prev: "<?php echo $dict["prev"];?>",
            next: "<?php echo $dict["next"];?>",
            toggleheader: "<?php echo $dict["toggleheader"];?>",
            fullscreen: "<?php echo $dict["fullscreen"];?>",
            borderless: "<?php echo $dict["borderless"];?>",
            close: "<?php echo $dict["close"];?>"
        }
    };
})(window.jQuery);
</script>