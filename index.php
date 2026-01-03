<?php
$page_title = 'Home';
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="<?php echo SITE_URL; ?>/assets/images/logo.png" alt="Corvid Tax Logo" class="hero-logo mb-4" height="120">
                    <h1 class="display-4 fw-bold mb-3"><?php echo SITE_NAME; ?></h1>
                    <p class="display-6 fw-bold mb-3"><?php echo SITE_PRINCIPAL; ?></p>
                    <p class="lead mb-4"><?php echo SITE_TAGLINE; ?></p>
                <div class="d-flex gap-3 flex-wrap">
                        <a href="<?php echo SITE_URL; ?>/services.php" class="btn btn-light btn-lg">Services</a>
                        <a href="<?php echo SITE_URL; ?>/contact.php" class="btn btn-outline-light btn-lg">Contact</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="<?php echo SITE_URL; ?>/assets/images/irs-tax-form-1040.jpg" alt="Tax documents and forms" class="img-fluid rounded shadow-lg" style="max-height: 400px; width: auto;">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold mb-3">Professional Tax and Accounting Services</h2>
                    <p class="lead text-muted">Comprehensive tax solutions tailored to your needs</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <svg width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3z"/>
                                </svg>
                            </div>
                            <h3 class="h4 mb-3">Tax Return Preparation</h3>
                            <p class="text-muted">Preparation of Current Year Tax Returns and Filing of Past Year Returns. 
                                <li>Individuals | Businesses | Partnerships | Trust & Estates</li>
                                <li>Catch up on Previous Year Filings</li>
                                <li>Payroll</li>
                                <li>Quickbooks advising</li>
                                <li>State and Local Tax Filing</li>
                            </p>
                            <a href="<?php echo SITE_URL; ?>/services.php#tax-preparation" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="fa-regular fa-handshake"></i>
                            </div>
                            <h3 class="h4 mb-3">Tax Representation</h3>
                            <p class="text-muted">Expert representation before the IRS and state tax authorities. 
                                <li>Speak to the IRS on your behalf</li>
                                <li>Respond to Letters and IRS inquiries</li>
                                <li>Set up payment plans</li>
                                <li>Offer in Compromise</li>
                                <li>Penalty Abatement Requests</li>
                            </p>
                            <a href="<?php echo SITE_URL; ?>/services.php#tax-representation" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <svg width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                            </div>
                            <h3 class="h4 mb-3">Tax Planning</h3>
                            <p class="text-muted">Strategic tax planning to minimize your tax liability and maximize your savings throughout the year.</p>
                            <a href="<?php echo SITE_URL; ?>/services.php#tax-planning" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="display-6 fw-bold mb-3">Ready to Get Started?</h2>
            <p class="lead text-muted mb-4">Reach out today for a consultation</p>
            <a href="<?php echo SITE_URL; ?>/contact.php" class="btn btn-primary btn-lg">Contact</a>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>

