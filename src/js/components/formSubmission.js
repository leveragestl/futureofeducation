export function initEmailTemplateFormSubmissions() {
  const forms = document.querySelectorAll('[data-form-type="email-template"]');
  forms.forEach(form => {
    form.addEventListener('submit', function(event) {
      event.preventDefault();  // Prevent default form submission
      const formData = new FormData(form);
      const recipientEmail = formData.get('recipient-email');  // Get recipient's email
      const prefix = formData.get('legislator-prefix') || formData.get('administrator-prefix') || '';  // Get prefix if exists
      const firstName = formData.get('legislator-first-name') || formData.get('administrator-first-name') || '';
      const lastName = formData.get('legislator-last-name') || formData.get('administrator-last-name') || '';
      const email = formData.get('legislator-email') || formData.get('administrator-email') || '';
      const phone = formData.get('legislator-phone') || formData.get('administrator-phone') || '';
      const address = formData.get('legislator-address') || formData.get('administrator-address') || '';
      const zip = formData.get('legislator-zip') || formData.get('administrator-zip') || '';
      
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