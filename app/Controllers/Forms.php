<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Forms extends BaseController
{
    private $contactmodel;

    public function __construct()
    {
        helper(['text', 'form', 'url']);
        $this->contactmodel =  new ContactModel();
    }

    public function contact()
    {
        if ($this->request->is('post')) {
            $post = $this->request->getPost(['name', 'email', 'address', 'message', 'type']);
            $name = strip_tags(trim($post['name']));
            $email = trim($post['email']);
            $address = trim($post['address']);
            $message = trim($post['message']);

            // Basic validation
            if (empty($name) || empty($email) || empty($message)) {
                http_response_code(400);
                echo json_encode(['type' => 'error', 'message' => 'Please fill in all required fields.']);
                exit;
            }

            // Email validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                http_response_code(400);
                echo json_encode(['type' => 'error', 'message' => 'Please enter a valid email address.']);
                exit;
            }

            // Check for spam links in message
            if (strpos($message, "http") !== false) {
                http_response_code(400);
                echo json_encode(['type' => 'error', 'message' => 'Something went wrong!']);
                exit;
            }

            // Insert into database
            $insertflag = $this->contactmodel->save([
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'message' => $message,
                'status' => 'new'
            ]);

            if ($insertflag) {
                $emailMsg = $this->arrayToEmailTable([
                    'Name' => $name,
                    'Email' => $email,
                    'Address' => $address,
                    'Message' => $message,
                ]);

                // Try to send email, but don't fail if it doesn't work
                $emailSent = $this->sendEmail('manoj@ipopi.in', 'Home Page Contact - ' . $name, $emailMsg);

                http_response_code(200);
                echo json_encode(['type' => 'success', 'message' => 'Thank You! Your message has been sent.']);
            } else {
                http_response_code(500);
                echo json_encode(['type' => 'error', 'message' => 'Oops! Something went wrong and we couldn\'t send your message.']);
            }
        } else {
            http_response_code(400);
            echo json_encode(['type' => 'error', 'message' => 'There was a problem with your submission, please try again.']);
        }
    }


    public function arrayToEmailTable($array)
    {
        $content = '<table style="border-collapse: collapse;">';

        foreach ($array as $name => $value) {
            $content .= '<tr>
            <th style="border:1px solid #b4b4b4;padding:10px">' . $name . '</th>
            <td cellmargin="0" style="border:1px solid #b4b4b4;padding:10px">' . $value . '</td>
        </tr>';
        }
        $content .= '</table>';
        return $content;
    }

    public function sendEmail($to, $subject, $message)
    {
        helper('email_helper');
        $email_data = [
            "sender" => [
                "name" => "Ipopi Leads",
                "email" => "leads@ipopi.in"
            ],
            "to" => [
                ["email" => $to],
            ],
            "subject" => $subject,
            "htmlContent" => $message
        ];

        $api_key = '';
        $response = sendmail($api_key, $email_data);

        return $response;
    }

}
