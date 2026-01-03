<?php
$page_title = 'Services';
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Our Services</h1>
            <p class="lead">Professional tax services designed to meet your needs</p>
        </div>
    </section>

    <!-- Services Content -->
    <section class="py-5">
        <div class="container">
            <!-- Tax Return Preparation -->
            <div class="row mb-5" id="tax-preparation">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="service-icon-large me-4">
                                    <svg width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-0">Tax Return Preparation</h2>
                            </div>
                            <p class="lead text-muted mb-4">Comprehensive tax return preparation services for individuals and businesses.</p>
                            
                            <h4 class="mb-3">What We Offer:</h4>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Individual tax return preparation (1040, 1040A, 1040EZ)
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Business tax returns (1120, 1120S, 1065, 1041)
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Partnership and S-Corporation returns
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Estate and trust tax returns
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Amended returns and prior year filings
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Tax planning and strategy consultation
                                </li>
                            </ul>

                            <h4 class="mb-3">Benefits:</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Maximize your deductions and credits
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Ensure accuracy and compliance
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Electronic filing for faster processing
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Year-round support and consultation
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tax Representation -->
            <div class="row mb-5" id="tax-representation">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="service-icon-large me-4">
                                    <svg width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.312-.736 1.312-1.897 0-1.505-1.125-2.811-2.664-2.811-1.3 0-2.066.765-2.288 1.43zm6.755 0a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.312-.736 1.312-1.897 0-1.505-1.125-2.811-2.664-2.811-1.3 0-2.066.765-2.288 1.43z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-0">Tax Representation</h2>
                            </div>
                            <p class="lead text-muted mb-4">Expert representation before the IRS and state tax authorities.</p>
                            
                            <h4 class="mb-3">What We Offer:</h4>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    IRS audit representation
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    State tax audit representation
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Tax appeals and collections
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Offer in Compromise (OIC) preparation
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Installment agreement negotiations
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Penalty abatement requests
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Tax lien and levy resolution
                                </li>
                            </ul>

                            <h4 class="mb-3">Benefits:</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Experienced tax professionals on your side
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Reduced stress and peace of mind
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Knowledge of tax laws and procedures
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Negotiation expertise to minimize liabilities
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tax Planning -->
            <div class="row mb-5" id="tax-planning">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="service-icon-large me-4">
                                    <svg width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-0">Tax Planning</h2>
                            </div>
                            <p class="lead text-muted mb-4">Strategic tax planning services to help you minimize tax liability and maximize savings.</p>
                            
                            <h4 class="mb-3">What We Offer:</h4>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Year-round tax planning and strategy
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Retirement planning and tax optimization
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Business tax strategy and entity selection
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Investment tax planning and strategies
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Estate and gift tax planning
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Quarterly tax estimates and projections
                                </li>
                            </ul>

                            <h4 class="mb-3">Benefits:</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Reduce your overall tax burden
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Avoid surprises at tax time
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Make informed financial decisions
                                </li>
                                <li class="mb-2">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="text-primary me-2" style="vertical-align: -3px;">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.022-1.08z"/>
                                    </svg>
                                    Optimize timing of income and deductions
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="bg-light p-5 rounded">
                        <h3 class="mb-3">Need Help with Your Taxes?</h3>
                        <p class="lead text-muted mb-4">Contact us today to discuss your tax needs</p>
                        <a href="<?php echo SITE_URL; ?>/contact.php" class="btn btn-primary btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>

