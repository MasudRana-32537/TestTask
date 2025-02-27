<script>
    // Initialize file input trigger
    function triggerFileInput() {
        document.getElementById('file-upload').click();
    }

    // Handle file drop in container
    function handleFileDrop(event) {
        event.preventDefault();
        const files = event.dataTransfer.files;
        displayFilePreviews({ files });  // Directly pass file list
    }

    // Display file previews and dynamically handle file removal
    function displayFilePreviews(input) {
        const files = input.files || input;
        const filePreviews = document.getElementById('file-previews');

        Array.from(files).forEach(file => {
            const wrapperListItem = document.createElement('div');
            wrapperListItem.classList.add('wrapper-list-item');

            // Add input field for file title
            const titleInput = document.createElement('input');
            titleInput.type = 'text';
            titleInput.name = 'attachment_title[]';
            titleInput.placeholder = 'Title';
            titleInput.classList.add('file-title-input');
            wrapperListItem.appendChild(titleInput);

            // File type previews
            if (file.type.startsWith('image/')) {
                const previewImage = document.createElement('img');
                previewImage.classList.add('preview-image');
                previewImage.src = URL.createObjectURL(file);
                wrapperListItem.appendChild(previewImage);
            } else if (file.type === 'application/pdf') {
                const previewPdf = document.createElement('div');
                previewPdf.classList.add('preview-pdf');
                previewPdf.textContent = 'PDF';
                wrapperListItem.appendChild(previewPdf);
            } else if (file.name.endsWith('.doc') || file.name.endsWith('.docx')) {
                const previewDoc = document.createElement('div');
                previewDoc.classList.add('preview-doc');
                previewDoc.textContent = 'DOC/DOCX';
                wrapperListItem.appendChild(previewDoc);
            } else {
                const previewOther = document.createElement('div');
                previewOther.classList.add('preview-other');
                previewOther.textContent = file.name;
                wrapperListItem.appendChild(previewOther);
            }

            // Add remove button for each preview
            const removeButton = document.createElement('div');
            removeButton.classList.add('remove-button');
            removeButton.textContent = 'Remove';
            removeButton.onclick = () => wrapperListItem.remove();
            wrapperListItem.appendChild(removeButton);

            filePreviews.appendChild(wrapperListItem);
        });
    }

    // Attach remove functionality to existing attachments
    $('body').on('click', '.old-file-remove', function() {
        const oldFileRemove = $(this);
        const attachmentId = oldFileRemove.data('id');

        if (confirm('Are you sure you want to delete this file?')) {
            preloaderToggle(true);

            $.ajax({
                method: "post",
                url: "<?php echo e(route('attachment-delete')); ?>",
                data: { id: attachmentId }
            }).done(function() {
                oldFileRemove.closest('.wrapper-list-item').remove();
                preloaderToggle(false);
            });
        }
    });

    $('body').on('focusout', '.old-file-title-update', function() {
        const oldFileTitleItem = $(this);
        const oldFileTitle = oldFileTitleItem.val();
        const attachmentId = oldFileTitleItem.closest('div').find('.attachment_id').val();

        $.ajax({
            method: "post",
            url: "<?php echo e(route('attachment-title-update')); ?>",
            data: { id: attachmentId, title: oldFileTitle }
        });
    });
</script>
<?php /**PATH D:\PHP-8.2.4\htdocs\test-project\resources\views/layouts/partial/__attachment_script.blade.php ENDPATH**/ ?>