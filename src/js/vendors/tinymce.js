export function initTinymce() {
  console.log('initTinymce function called');
  console.log('Quill available:', typeof Quill !== 'undefined');
  
  // Function to convert HTML to formatted text with line breaks and bullets
  function htmlToFormattedText(html) {
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = html;
    
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
      console.log('Found textareas:', textareas.length);
      
      textareas.forEach((textarea, index) => {
        console.log('Processing textarea:', index, textarea);
        
        // Create a container for the Quill editor
        const container = document.createElement('div');
        container.id = `quill-editor-${index}`;
        container.style.height = '200px';
        container.style.marginBottom = '20px';
        
        // Insert the container before the textarea
        textarea.parentNode.insertBefore(container, textarea);
        
        // Hide the original textarea
        textarea.style.display = 'none';
        
        // Initialize Quill with better styling
        const quill = new Quill(container, {
          theme: 'snow',
          modules: {
            toolbar: [
              ['bold', 'italic', 'underline'],
              [{ 'list': 'ordered'}, { 'list': 'bullet' }],
              ['link']
            ]
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
          console.log('Content synced to textarea (formatted text):', textarea.value);
        });
        
        // Also sync on form submission for Gravity Forms
        const form = textarea.closest('form');
        if (form) {
          // Listen for form submit
          form.addEventListener('submit', function() {
            const formattedText = htmlToFormattedText(quill.root.innerHTML);
            textarea.value = formattedText;
            console.log('Form submit - content synced (formatted text):', textarea.value);
          });
          
          // Listen for Gravity Forms specific events
          form.addEventListener('gform_post_render', function() {
            const formattedText = htmlToFormattedText(quill.root.innerHTML);
            textarea.value = formattedText;
            console.log('GF post render - content synced (formatted text):', textarea.value);
          });
          
          // Also sync before any AJAX submission
          const submitButton = form.querySelector('input[type="submit"], button[type="submit"]');
          if (submitButton) {
            submitButton.addEventListener('click', function() {
              const formattedText = htmlToFormattedText(quill.root.innerHTML);
              textarea.value = formattedText;
              console.log('Submit button clicked - content synced (formatted text):', textarea.value);
            });
          }
        }
        
        console.log('Quill editor initialized for:', textarea.id || textarea.name);
      });
      
      console.log('Quill version loaded, initialized', textareas.length, 'editors');
    } else {
      console.log('Quill not loaded, retrying in 500ms...');
      setTimeout(initializeQuill, 500);
    }
  }
  
  initializeQuill();
}