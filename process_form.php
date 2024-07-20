<?php
  // Configuration
  $to_email = 'anupacharya140@gmail.com'; // Replace with your email address
  $subject = 'New Message from Website';

  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create the email message
  $email_message = "Name: $name\n";
  $email_message .= "Email: $email\n";
  $email_message .= "Message: $message\n";

  // Send the email using PHP's mail function
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  mail($to_email, $subject, $email_message, $headers);

  // Display a success message
  $thankYouMessage = true;
?>

<!-- Display the thank you message -->
<?php if (isset($thankYouMessage) && $thankYouMessage) { ?>
  <div class="thank-you-message">
    <h2>Thank you for contacting me!</h2>
    <p>I'll get back to you soon.</p>
  </div>
<?php } else { ?>
  <!-- Display the original form if there's an error -->
  <form action="process_form.php" method="post">
    <!-- Form fields here -->
  </form>
<?php } ?>