<?php
$page_title = 'Client Portal';
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Client Portal</h1>
            <p class="lead">Access your tax documents and information</p>
        </div>
    </section>

    <!-- Portal Placeholder Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow-sm border-0 text-center">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <svg width="80" height="80" fill="currentColor" viewBox="0 0 16 16" class="text-primary mb-3">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                </svg>
                            </div>
                            
                            <h2 class="mb-4">Coming Soon</h2>
                            
                            <p class="lead text-muted mb-4">
                                Our client portal is currently under development. We're working hard to bring you a secure, convenient way to access your tax documents, communicate with our team, and manage your account online.
                            </p>
                            
                            <div class="alert alert-info mb-4" role="alert">
                                <h5 class="alert-heading">What to Expect</h5>
                                <p class="mb-0">
                                    Once available, the client portal will allow you to:
                                </p>
                                <ul class="text-start mt-3 mb-0">
                                    <li>Securely access your tax documents</li>
                                    <li>Upload documents and information</li>
                                    <li>Track the status of your tax returns</li>
                                    <li>Communicate with our team</li>
                                    <li>View your account history</li>
                                </ul>
                            </div>
                            
                            <p class="mb-4">
                                In the meantime, please feel free to contact us directly if you need assistance with your tax matters.
                            </p>
                            
                            <div class="d-flex gap-3 justify-content-center flex-wrap">
                                <a href="<?php echo SITE_URL; ?>/contact.php" class="btn btn-primary btn-lg">Contact Us</a>
                                <a href="<?php echo SITE_URL; ?>/services.php" class="btn btn-outline-primary btn-lg">View Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>

