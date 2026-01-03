    <!-- Partners Section -->
    <?php if (!empty($partners)): ?>
    <section class="partners-section bg-light py-5">
        <div class="container">
            
            <div class="row align-items-center justify-content-center g-4">
                <?php foreach ($partners as $partner): ?>
                    <div class="col-6 col-md-4 col-lg-3 text-center">
                        <a href="<?php echo htmlspecialchars($partner['url']); ?>" target="_blank" rel="noopener noreferrer" class="partner-link">
                            <img src="<?php echo SITE_URL; ?>/assets/images/partners/<?php echo htmlspecialchars($partner['logo']); ?>" 
                                 alt="<?php echo htmlspecialchars($partner['name']); ?>" 
                                 class="partner-logo img-fluid">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5><?php echo SITE_NAME; ?></h5>
                    <p class="mb-0"><?php echo SITE_TAGLINE; ?></p>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>Contact</h5>
                    <p class="mb-1">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-2" style="vertical-align: -2px;">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        <a href="mailto:<?php echo COMPANY_EMAIL; ?>" class="text-light text-decoration-none"><?php echo COMPANY_EMAIL; ?></a>
                    </p>
                    <p class="mb-1">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-2" style="vertical-align: -2px;">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.683L13.563 6.2a.68.68 0 0 1 .23.23l3.555 10.933a.678.678 0 0 1-.683.93l-3.073-.081a.68.68 0 0 1-.23-.054L8.5 14.5l-1.5.5-1.5-1.5 1.5-.5 3.5-1.5L3.5 2.5l-1.5 1.5 1.5.5z"/>
                        </svg>
                        <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', COMPANY_PHONE); ?>" class="text-light text-decoration-none"><?php echo COMPANY_PHONE; ?></a>
                    </p>
                    <p class="mb-0">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-2" style="vertical-align: -2px;">
                            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 4zm.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                            <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5v1.5a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5V.5a.5.5 0 0 1 .146-.354z"/>
                        </svg>
                        <?php echo COMPANY_ADDRESS; ?><br>
                        <?php echo COMPANY_CITY; ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <?php foreach ($nav_items as $label => $file): ?>
                            <li><a href="<?php echo SITE_URL; ?>/<?php echo $file; ?>" class="text-light text-decoration-none"><?php echo $label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <hr class="bg-light my-3">
            <div class="text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>
</html>

