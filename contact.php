<?php
$page_title = 'Contact Us';
require_once 'includes/config.php';

// Handle form submission (placeholder for now)
$form_submitted = false;
$form_message = '';
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic form validation
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($message)) {
        $form_error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Please enter a valid email address.';
    } else {
        // Form is valid - in a real implementation, this would send an email
        // For now, we'll just show a success message
        $form_submitted = true;
        $form_message = 'Thank you for your message! We will get back to you soon.';
        
        // Reset form fields
        $name = $email = $phone = $message = '';
    }
}

require_once 'includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
            <p class="lead">Get in touch with our team</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">
                            <h2 class="mb-4">Send Us a Message</h2>
                            
                            <?php if ($form_submitted): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo htmlspecialchars($form_message); ?>
                                </div>
                            <?php elseif ($form_error): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo htmlspecialchars($form_error); ?>
                                </div>
                            <?php endif; ?>
                            
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required 
                                           value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required 
                                           value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" 
                                           value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Information -->
                <div class="col-lg-5">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-5">
                            <h2 class="mb-4">Get in Touch</h2>
                            <p class="text-muted mb-4">
                                We're here to help with all your tax needs. Reach out to us using any of the methods below.
                            </p>
                            
                            <div class="mb-4">
                                <h5 class="mb-3">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="me-2">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                    Email
                                </h5>
                                <p class="mb-0">
                                    <a href="mailto:<?php echo COMPANY_EMAIL; ?>" class="text-decoration-none">
                                        <?php echo COMPANY_EMAIL; ?>
                                    </a>
                                </p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="mb-3">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="me-2">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.683L13.563 6.2a.68.68 0 0 1 .23.23l3.555 10.933a.678.678 0 0 1-.683.93l-3.073-.081a.68.68 0 0 1-.23-.054L8.5 14.5l-1.5.5-1.5-1.5 1.5-.5 3.5-1.5L3.5 2.5l-1.5 1.5 1.5.5z"/>
                                    </svg>
                                    Phone
                                </h5>
                                <p class="mb-0">
                                    <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', COMPANY_PHONE); ?>" class="text-decoration-none">
                                        <?php echo COMPANY_PHONE; ?>
                                    </a>
                                </p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="mb-3">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="me-2">
                                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 4zm.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                                        <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5v1.5a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5V.5a.5.5 0 0 1 .146-.354z"/>
                                    </svg>
                                    Address
                                </h5>
                                <p class="mb-0">
                                    <?php echo COMPANY_ADDRESS; ?><br>
                                    <?php echo COMPANY_CITY; ?>
                                </p>
                            </div>
                            
                            <div class="mt-4 pt-4 border-top">
                                <p class="text-muted small mb-0">
                                    <strong>Office Hours:</strong><br>
                                    Monday - Friday: 9:00 AM - 5:00 PM<br>
                                    Saturday - Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>

