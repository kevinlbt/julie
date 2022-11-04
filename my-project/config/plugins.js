module.exports = () => {
    return {
      ckeditor: {
       enabled: true,
       config:{
          editor:{ // editor default config
  
            // https://ckeditor.com/docs/ckeditor5/latest/features/markdown.html
            // if you need markdown support and output set: removePlugins: [''],
            // default is 
            // removePlugins: ['Markdown'],
  
            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html
            toolbar: {
              items: [
                'paragraph',
                'heading2',
                '|',
                'bold',
                'italic',
                'underline',
                'removeFormat',
                '|',
                'blockQuote',
                'link',
                '|',
                'alignment',
                'outdent',
                'indent',
                'horizontalLine',,
                'bulletedList',
                'todoList',
                'numberedList',
                '|',
                "fullScreen",
                'undo',
                'redo'
              ]
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html
            fontSize: {
              options: [
                  9,
                  11,
                  13,
                  'default',
                  17,
                  19,
                  21,
                  27,
                  35,
              ],
              supportAllValues: false
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html
            heading: {
              options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
              ]
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html
            // Regular expressions (/.*/  /^(p|h[2-4])$/' etc) for htmlSupport does not allowed in this config
            htmlSupport: {
              allow: [
                  {
                    name: 'img',
                    attributes: {
                        sizes:true,
                        loading:true,
                    }
                  },
              ]
            },
          }
        }
      }
    }
  }