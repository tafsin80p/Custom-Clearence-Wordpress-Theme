<?php
/**
 * Form Handlers for Contact and Quote Forms
 */

// Handle Contact Form Submission
function handle_contact_form_submission() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'contact_form_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
        return;
    }

    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }

    // Prepare email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . get_bloginfo('name');
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email
    );

    // Send email
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_handle_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_nopriv_handle_contact_form', 'handle_contact_form_submission');

// Handle Quote Form Submission
function handle_quote_form_submission() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'quote_form_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $description = sanitize_textarea_field($_POST['description']);

    // Basic validation
    if (empty($name) || empty($email) || empty($description)) {
        wp_send_json_error('Please fill in all required fields.');
        return;
    }

    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }

    // Handle file upload if present
    $attachment_info = '';
    if (!empty($_FILES['attachment']['name'])) {
        $upload = wp_handle_upload($_FILES['attachment'], array('test_form' => false));
        if (!isset($upload['error'])) {
            $attachment_info = "\nAttachment: " . $upload['url'];
        }
    }

    // Prepare email
    $to = get_option('admin_email');
    $subject = 'New Quote Request from ' . get_bloginfo('name');
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Description:\n$description";
    $body .= $attachment_info;

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email
    );

    // Send email
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('Quote request sent successfully!');
    } else {
        wp_send_json_error('Failed to send quote request. Please try again.');
    }
}
add_action('wp_ajax_handle_quote_form', 'handle_quote_form_submission');
add_action('wp_ajax_nopriv_handle_quote_form', 'handle_quote_form_submission');

// Add nonces to forms
function add_form_nonces() {
    ?>
    <script>
        window.contactFormNonce = '<?php echo wp_create_nonce('contact_form_nonce'); ?>';
        window.quoteFormNonce = '<?php echo wp_create_nonce('quote_form_nonce'); ?>';
        window.ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <?php
}
add_action('wp_head', 'add_form_nonces');

