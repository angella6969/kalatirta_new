<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


<div class="mb-3 mt-3">
    <div style="z-index: 999">
        <textarea hidden id="{{ $body }}" name="{{ $body }}" style="width: 100px;">{{ old('$body', $body) }}</textarea>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#{{ $body }}'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'numberedList', 'blockQuote', 'redo', '|',
                'undo'
            ],
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            }
        })
        .catch(error => {
            console.log(error);
        });
</script>
