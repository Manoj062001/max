$(document).ready(function() {
    // Contact form submission
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.text();
        
        // Disable submit button and show loading
        submitBtn.prop('disabled', true).text('Sending...');
        
        // Get form data
        var formData = {
            name: form.find('input[name="name"]').val(),
            email: form.find('input[name="email"]').val(),
            address: form.find('input[name="address"]').val(),
            message: form.find('textarea[name="message"]').val(),
            type: 'contact'
        };
        
        // Clear previous messages
        $('.alert').remove();
        
        // Send AJAX request
        $.ajax({
            url: '/forms/contact',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.type === 'success') {
                    // Show success message
                    form.prepend('<div class="alert alert-success">' + response.message + '</div>');
                    form[0].reset();
                } else {
                    // Show error message
                    form.prepend('<div class="alert alert-danger">' + response.message + '</div>');
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = 'An error occurred. Please try again.';
                
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                
                form.prepend('<div class="alert alert-danger">' + errorMessage + '</div>');
            },
            complete: function() {
                // Re-enable submit button
                submitBtn.prop('disabled', false).text(originalText);
                
                // Scroll to top to show message
                $('html, body').animate({
                    scrollTop: form.offset().top - 100
                }, 500);
            }
        });
    });
    
    // Clear alerts when form fields change
    $('input, textarea').on('input', function() {
        $('.alert').fadeOut();
    });
}); 