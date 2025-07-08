export function initTinymce() {  
  // Function to sanitize HTML before processing
  function sanitizeHTML(html) {
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = html;
    
    // Remove all script tags and their content
    const scripts = tempDiv.querySelectorAll('script');
    scripts.forEach(script => script.remove());
    
    // Remove all style tags and their content
    const styles = tempDiv.querySelectorAll('style');
    styles.forEach(style => style.remove());
    
    // Remove all event handler attributes
    const allElements = tempDiv.querySelectorAll('*');
    allElements.forEach(element => {
      const attributes = element.attributes;
      for (let i = attributes.length - 1; i >= 0; i--) {
        const attrName = attributes[i].name.toLowerCase();
        // Remove event handlers and potentially dangerous attributes
        if (attrName.startsWith('on') || 
            attrName === 'javascript:' ||
            attrName === 'vbscript:' ||
            attrName === 'data:' ||
            attrName === 'expression' ||
            attrName === 'background' ||
            attrName === 'dynsrc' ||
            attrName === 'lowsrc') {
          element.removeAttribute(attributes[i].name);
        }
      }
    });
    
    // Remove potentially dangerous tags
    const dangerousTags = ['iframe', 'object', 'embed', 'applet', 'form', 'input', 'textarea', 'select', 'button'];
    dangerousTags.forEach(tagName => {
      const elements = tempDiv.querySelectorAll(tagName);
      elements.forEach(element => element.remove());
    });
    
    return tempDiv.innerHTML;
  }
  
  // Function to convert HTML to formatted text with line breaks and bullets
  function htmlToFormattedText(html) {
    // First sanitize the HTML
    const sanitizedHTML = sanitizeHTML(html);
    
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = sanitizedHTML;
    
    // Convert <p> tags to line breaks
    const paragraphs = tempDiv.querySelectorAll('p');
    paragraphs.forEach(p => {
      p.innerHTML = p.innerHTML + '\n';
    });
    
    // Convert <li> tags to bullet points with line breaks
    const listItems = tempDiv.querySelectorAll('li');
    listItems.forEach(li => {
      li.innerHTML = '• ' + li.innerHTML + '\n';
    });
    
    // Convert <br> tags to line breaks
    const brTags = tempDiv.querySelectorAll('br');
    brTags.forEach(br => {
      br.replaceWith('\n');
    });
    
    // Get the text content with preserved line breaks
    let text = tempDiv.textContent || tempDiv.innerText || '';
    
    // Clean up multiple consecutive line breaks
    text = text.replace(/\n\s*\n\s*\n/g, '\n\n');
    
    // Trim extra whitespace
    text = text.trim();
    
    return text;
  }
  
  function initializeQuill() {
    if (typeof Quill !== 'undefined') {
      const textareas = document.querySelectorAll('.wysiwyg-field textarea');
      
      textareas.forEach((textarea, index) => {
        
        // Create a container for the Quill editor
        const container = document.createElement('div');
        container.id = `quill-editor-${index}`;
        container.style.height = '200px';
        container.style.marginBottom = '20px';
        
        // Insert the container before the textarea
        textarea.parentNode.insertBefore(container, textarea);
        
        // Hide the original textarea
        textarea.style.display = 'none';
        
        // Initialize Quill with better styling and security
        const quill = new Quill(container, {
          theme: 'snow',
          modules: {
            toolbar: [
              ['bold', 'italic', 'underline'],
              [{ 'list': 'ordered'}, { 'list': 'bullet' }],
              ['link']
            ],
            clipboard: {
              matchVisual: false // Prevents Quill from trying to match visual formatting
            }
          },
          placeholder: textarea.placeholder || 'Start writing...',
          bounds: container
        });
        
        // Set initial content if textarea has value
        if (textarea.value) {
          quill.root.innerHTML = textarea.value;
        }
        
        // Sync Quill content to textarea on every change (as formatted text)
        quill.on('text-change', function() {
          const formattedText = htmlToFormattedText(quill.root.innerHTML);
          textarea.value = formattedText;
        });
        
        // Also sync on form submission for Gravity Forms
        const form = textarea.closest('form');
        if (form) {
          // Listen for form submit
          form.addEventListener('submit', function() {
            const formattedText = htmlToFormattedText(quill.root.innerHTML);
            textarea.value = formattedText;
          });
          
          // Listen for Gravity Forms specific events
          form.addEventListener('gform_post_render', function() {
            const formattedText = htmlToFormattedText(quill.root.innerHTML);
            textarea.value = formattedText;
          });
          
          // Also sync before any AJAX submission
          const submitButton = form.querySelector('input[type="submit"], button[type="submit"]');
          if (submitButton) {
            submitButton.addEventListener('click', function() {
              const formattedText = htmlToFormattedText(quill.root.innerHTML);
              textarea.value = formattedText;
            });
          }
        }
        
      });
      
    } else {
      setTimeout(initializeQuill, 500);
    }
  }
  
  initializeQuill();
}