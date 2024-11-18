<?php //die('inn');

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $form_type = $_POST['form_type'];
        //var_dump($_POST['form_type']);
        
        switch ($form_type) {
            case 'get_a_quote_form':
                //code block

                $name = strip_tags(trim($_POST["name"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
                $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
                $number = trim($_POST["number"]);
                $website = strip_tags(trim($_POST["website"]));
                $website = str_replace(array("\r","\n"),array(" "," "),$website);
                $company = strip_tags(trim($_POST["about_company"]));
                $company = str_replace(array("\r","\n"),array(" "," "),$company);
                $message = trim($_POST["message"]);
                $form_submit_url = trim($_POST['form_submit_url']);
                $subject = $name . " - Softianz - Get A Quote Form - " . date("Y-m-d");
                
                // Check that data was sent to the mailer.
                if ( empty($name) OR empty($message) OR empty($number) OR empty($subject) OR !filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    // Set a 400 (bad request) response code and exit.
                    http_response_code(400);
                    echo "Please complete the form and try again.";
                    exit;
                }

                // Set the recipient email address.
                // FIXME: Update this to your desired email address.
                $recipient = "adeel.idl@gmail.com, softianzsoft@gmail.com";                

                // Build the email content.

                $email_content = "A user filled out Get A Quote form with the following details:\n\n";
                $email_content .= "Name: $name\n";
                $email_content .= "Email: $email\n";
                $email_content .= "Contact: $number\n";
                $email_content .= "Website: $website\n";
                $email_content .= "About Company: $company\n\n";
                $email_content .= "Message:\n$message\n\n";
                $email_content .= "Submitted URL:\n$form_submit_url\n\n\n\n";
                
                $email_content .= "Regards:\nSoftianz Quatation Forms";

                // Build the email headers.
                $softianz_form_email = "forms@softianz.com";
                $email_headers = "From: Softianz Forms <$softianz_form_email>";

                // Send the email.
                if (mail($recipient, $subject, $email_content, $email_headers)) {
                    // Set a 200 (okay) response code.
                    http_response_code(200);
                    echo "Thank You! Your message has been sent. Our representative will contact you shortly.";
                } else {
                    // Set a 500 (internal server error) response code.
                    http_response_code(500);
                    echo "Oops! Something went wrong and we couldn't send your message.";
                }

            break;
            case 'contact_form':
                //code block

                $name = strip_tags(trim($_POST["name"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
                $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
                $number = trim($_POST["number"]);
                $website = strip_tags(trim($_POST["website"]));
                $website = str_replace(array("\r","\n"),array(" "," "),$website);
                $company = strip_tags(trim($_POST["about_company"]));
                $company = str_replace(array("\r","\n"),array(" "," "),$company);
                $message = trim($_POST["message"]);
                $form_submit_url = trim($_POST['form_submit_url']);
                $subject = $name . " - Softianz - Contact Form - " . date("Y-m-d");
                
                // Check that data was sent to the mailer.
                if ( empty($name) OR empty($message) OR empty($number) OR empty($subject) OR !filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    // Set a 400 (bad request) response code and exit.
                    http_response_code(400);
                    echo "Please complete the form and try again.";
                    exit;
                }

                // Set the recipient email address.
                // FIXME: Update this to your desired email address.
                $recipient = "adeel.idl@gmail.com, softianzsoft@gmail.com";                

                // Build the email content.

                $email_content = "A user filled out Contact Form with the following details:\n\n";
                $email_content .= "Name: $name\n";
                $email_content .= "Email: $email\n";
                $email_content .= "Contact: $number\n";
                $email_content .= "Website: $website\n";
                $email_content .= "About Company: $company\n\n";
                $email_content .= "Message:\n$message\n\n";
                $email_content .= "Submitted URL:\n$form_submit_url\n\n\n\n";
                
                $email_content .= "Regards:\nSoftianz Quatation Forms";

                // Build the email headers.
                $softianz_form_email = "forms@softianz.com";
                $email_headers = "From: Softianz Forms <$softianz_form_email>";

                // Send the email.
                if (mail($recipient, $subject, $email_content, $email_headers)) {
                    // Set a 200 (okay) response code.
                    http_response_code(200);
                    echo "Thank You! Your message has been sent. Our representative will contact you shortly.";
                } else {
                    // Set a 500 (internal server error) response code.
                    http_response_code(500);
                    echo "Oops! Something went wrong and we couldn't send your message.";
                }

            break;
            case 'appointment_form':
                //code block

                $name = strip_tags(trim($_POST["name"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
                $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
                $number = trim($_POST["number"]);
                $service = trim($_POST["service"]);
                $message = trim($_POST["message"]);
                $form_submit_url = trim($_POST['form_submit_url']);
                $subject = $name . " - Softianz - Appointment Form - " . date("Y-m-d");
                
                // Check that data was sent to the mailer.
                if ( empty($name) OR empty($message) OR empty($number) OR !filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    // Set a 400 (bad request) response code and exit.
                    http_response_code(400);
                    echo "Please complete the form and try again.";
                    exit;
                }

                // Set the recipient email address.
                // FIXME: Update this to your desired email address.
                $recipient = "adeel.idl@gmail.com, softianzsoft@gmail.com";                

                // Build the email content.

                $email_content = "A user filled out Appointment Form with the following details:\n\n";
                $email_content .= "Name: $name\n";
                $email_content .= "Email: $email\n";
                $email_content .= "Contact: $number\n";
                $email_content .= "Services Needed: $service\n\n";
                $email_content .= "Message:\n$message\n\n";
                $email_content .= "Submitted URL:\n$form_submit_url\n\n\n";
                
                $email_content .= "Regards:\nSoftianz Quatation Forms";

                // Build the email headers.
                $softianz_form_email = "forms@softianz.com";
                $email_headers = "From: Softianz Forms <$softianz_form_email>";

                // Send the email.
                if (mail($recipient, $subject, $email_content, $email_headers)) {
                    // Set a 200 (okay) response code.
                    http_response_code(200);
                    echo "Thank You! Your message has been sent. Our representative will contact you shortly.";
                } else {
                    // Set a 500 (internal server error) response code.
                    http_response_code(500);
                    echo "Oops! Something went wrong and we couldn't send your message.";
                }

            break;
            default:
                //code block

                // Get the form fields and remove whitespace.
                $name = strip_tags(trim($_POST["name"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
                $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
                $subject = trim($_POST["subject"]);
                $number = trim($_POST["number"]);
                $message = trim($_POST["message"]);

                // Check that data was sent to the mailer.
                if ( empty($name) OR empty($message) OR empty($number) OR empty($subject) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Set a 400 (bad request) response code and exit.
                    http_response_code(400);
                    echo "Please complete the form and try again ....";
                    exit;
                }

                // Set the recipient email address.
                // FIXME: Update this to your desired email address.
                $recipient = "adeel.idl@gmail.com";

                // Set the email subject.
                $subject = "New contact from $subject";

                // Build the email content.
                $email_content = "Name: $name\n";
                $email_content .= "Subject: $subject\n";
                $email_content .= "Email: $email\n\n";
                $email_content .= "Message:\n$message\n";

                // Build the email headers.
                $email_headers = "From: $name <$email>";

                // Send the email.
                if (mail($recipient, $subject, $email_content, $email_headers)) {
                    // Set a 200 (okay) response code.
                    http_response_code(200);
                    echo "Thank You! Your message has been sent.";
                } else {
                    // Set a 500 (internal server error) response code.
                    http_response_code(500);
                    echo "Oops! Something went wrong and we couldn't send your message.";
                }
            break;


        }


    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
