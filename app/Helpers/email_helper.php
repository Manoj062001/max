<?php

if (!function_exists('sendmail')) {
    /**
     * Send email using CodeIgniter's email service
     * 
     * @param string $api_key (not used in this implementation)
     * @param array $email_data
     * @return bool
     */
    function sendmail($api_key, $email_data)
    {
        try {
            $email = \Config\Services::email();
            
            // Set email configuration
            $email->setFrom($email_data['sender']['email'], $email_data['sender']['name']);
            $email->setTo($email_data['to'][0]['email']);
            $email->setSubject($email_data['subject']);
            $email->setMessage($email_data['htmlContent']);
            
            // Send email
            $result = $email->send();
            
            return $result;
        } catch (\Exception $e) {
            // Log the error but don't fail the form submission
            log_message('error', 'Email sending failed: ' . $e->getMessage());
            return false;
        }
    }
} 