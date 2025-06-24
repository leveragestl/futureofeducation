export function initEmailTemplateFormSubmissions() {
  const forms = document.querySelectorAll('[data-form-type="email-template"]');
  forms.forEach(form => {
    form.addEventListener('submit', function(event) {
      event.preventDefault();  // Prevent default form submission
      const formData = new FormData(form);
      const recipientEmail = formData.get('form-1-recipient-email') || formData.get('form-2-recipient-email') || '';  // Get recipient's email
      const prefix = formData.get('form-1-prefix') || formData.get('form-2-prefix') || '';  // Get prefix if exists
      const firstName = formData.get('form-1-first-name') || formData.get('form-2-first-name') || '';
      const lastName = formData.get('form-1-last-name') || formData.get('form-2-last-name') || '';
      const email = formData.get('form-1-email') || formData.get('form-2-email') || '';
      const phone = formData.get('form-1-phone') || formData.get('form-2-phone') || '';
      const address = formData.get('form-1-address') || formData.get('form-2-address') || '';
      const zip = formData.get('form-1-zip') || formData.get('form-2-zip') || '';
      
      // Get the letter content (assuming it's in the same page, e.g., from .forms__letter)
      const letterElement = form.closest('.tab-panel').querySelector('.forms__letter');
      if (letterElement) {
        let letterContent = letterElement.textContent.split('\n').map(line => line.trim()).filter(line => line.length > 0).join('\n\n');  // Join with double newlines to add breaks between paragraphs
        
        // Replace placeholders in the letter
        letterContent = letterContent.replace('[Representative\'s Name]', `${prefix} ${lastName}`).replace('[School Administrator\'s Name]', `${prefix} ${lastName}`).replace('[Name]', `${firstName} ${lastName}`);
        
        // Construct email body
        const subject = 'Urgent: Support for Education Reform';
        const body = `${letterContent}\n\nFrom: ${firstName} ${lastName}\nEmail: ${email}\nPhone: ${phone}\nAddress: ${address}, Zip: ${zip}`;
        
        // Open mailto link
        window.location.href = `mailto:${recipientEmail}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
      }
    });
  });
} 