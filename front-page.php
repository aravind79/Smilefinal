<?php get_header(); ?>

<main id="main-content">
    <section class="hero">
        <div class="hero__container">
            <!-- Top Video Area -->
            <div class="hero__media" aria-hidden="true">
                <video class="hero__video hero__video--desktop" autoplay muted loop playsinline preload="metadata">
                    <source src="<?php echo esc_url( get_theme_file_uri( 'assets/videos/smile-glow-up-16x9.mp4' ) ); ?>" type="video/mp4">
                </video>
                <video class="hero__video hero__video--mobile" autoplay muted loop playsinline preload="metadata">
                    <source src="<?php echo esc_url( get_theme_file_uri( 'assets/videos/smile-glow-up-vertical.mp4' ) ); ?>" type="video/mp4">
                </video>
            </div>
            
            <!-- Content Section Below Image -->
            <div class="hero__content">
                <h1 class="hero__heading">
                    Same-Day <br class="mobile-only-break"><span class="mobile-nowrap">Smile <span class="hero__heading-accent">Glow Up</span></span>
                </h1>
                
                <p class="hero__subtext">
                    Ready for a big event? <span class="desktop-only-break"><br></span>
                    Get a same-day <br class="mobile-only-break">
                    smile glow up and transform your look in <br class="mobile-only-break">
                    just one visit.
                </p>
                
                <a href="#suitability" class="hero__btn">
                    Check Your Suitability
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hero__btn-icon" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="suitability" id="suitability">
        <div class="suitability__container">
            <div class="suitability__grid">
                
                <!-- Left Column -->
                <div class="suitability__col suitability__col--left">
                    <h2 class="suitability__heading">
                        A Natural Refresh <span class="desktop-only-inline">Before</span><br>
                        <span class="mobile-only-inline">Before </span>Your <span class="suitability__heading-accent">Big Moment</span>
                    </h2>
                    <picture class="suitability__picture">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/natural-refresh-big-moment.webp" 
                            alt="Patient smiling after cosmetic dental treatment" 
                            class="suitability__image" 
                            width="560" 
                            height="370" 
                            loading="lazy" 
                            decoding="async">
                    </picture>
                </div>

                <!-- Right Column -->
                <div class="suitability__col suitability__col--right">
                    <p class="suitability__intro">This treatment may be suitable for <br class="mobile-only-break">people with</p>
                    <div class="suitability__card">
                        <ul class="suitability__list">
                            <li class="suitability__item">
                                <svg class="suitability__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" fill="transparent" stroke="#B78556" stroke-width="1.5"/>
                                    <path d="M8 12.5L11 15.5L16 9" stroke="#B78556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Small chips / Broken teeth</span>
                            </li>
                            <li class="suitability__item">
                                <svg class="suitability__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" fill="transparent" stroke="#B78556" stroke-width="1.5"/>
                                    <path d="M8 12.5L11 15.5L16 9" stroke="#B78556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Stained fillings/Old composite bonding</span>
                            </li>
                            <li class="suitability__item">
                                <svg class="suitability__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" fill="transparent" stroke="#B78556" stroke-width="1.5"/>
                                    <path d="M8 12.5L11 15.5L16 9" stroke="#B78556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Minor unevenness in front teeth</span>
                            </li>
                            <li class="suitability__item">
                                <svg class="suitability__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" fill="transparent" stroke="#B78556" stroke-width="1.5"/>
                                    <path d="M8 12.5L11 15.5L16 9" stroke="#B78556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Yellow teeth</span>
                            </li>
                            <li class="suitability__item">
                                <svg class="suitability__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" fill="transparent" stroke="#B78556" stroke-width="1.5"/>
                                    <path d="M8 12.5L11 15.5L16 9" stroke="#B78556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Missing teeth</span>
                            </li>
                            <li class="suitability__item">
                                <svg class="suitability__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" fill="transparent" stroke="#B78556" stroke-width="1.5"/>
                                    <path d="M8 12.5L11 15.5L16 9" stroke="#B78556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Too small/too big teeth</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bottom Information Bar -->
            <div class="suitability__info">
                <p>When appropriate, we can achieve a natural, refined result without committing to more complex treatment.</p>
            </div>

            <!-- CTA Button -->
            <div class="suitability__cta">
                <a href="#consultation" class="suitability__btn">
                    Check Your Suitability
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="suitability__btn-icon" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="patient-stories" id="patient-stories">
        <div class="patient-stories__container">
            
            <h2 class="patient-stories__heading">
                Patient <span class="patient-stories__heading-accent">Stories</span>
            </h2>

            <div class="patient-stories__grid">
                
                <!-- Card 1 -->
                <article class="patient-card">
                    <div class="patient-card__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpeg" alt="Lifestyle Smiles" class="patient-card__logo" loading="lazy" decoding="async">
                    </div>
                    <div class="patient-card__image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/before-after-01.png" alt="Patient before and after treatment" class="patient-card__image" width="504" height="398" loading="lazy" decoding="async">
                    </div>
                    <div class="patient-card__content">
                        <p class="patient-card__description">After photo taken approximately 7 months after procedure.</p>
                        <div class="patient-card__doctor">
                            <p class="patient-card__doctor-label">Treatment done by:</p>
                            <h3 class="patient-card__doctor-name">Dr. Rosana Prada</h3>
                            <p class="patient-card__doctor-reg">Reg no. DEN0002551420</p>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="patient-card">
                    <div class="patient-card__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpeg" alt="Lifestyle Smiles" class="patient-card__logo" loading="lazy" decoding="async">
                    </div>
                    <div class="patient-card__image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/before-after-01.png" alt="Patient before and after treatment" class="patient-card__image" width="504" height="398" loading="lazy" decoding="async">
                    </div>
                    <div class="patient-card__content">
                        <p class="patient-card__description">After photo taken approximately 7 months after procedure.</p>
                        <div class="patient-card__doctor">
                            <p class="patient-card__doctor-label">Treatment done by:</p>
                            <h3 class="patient-card__doctor-name">Dr. Rosana Prada</h3>
                            <p class="patient-card__doctor-reg">Reg no. DEN0002551420</p>
                        </div>
                    </div>
                </article>

            </div>
            
            <div class="patient-stories__dots">
                <span class="patient-stories__dot patient-stories__dot--active"></span>
                <span class="patient-stories__dot"></span>
            </div>

            <div class="patient-stories__disclaimer">
                <p>These photos show a real patient of Lifestyle Smiles with their written consent; images are genuine, and taken under consistent conditions without filters, have not been digitally altered with AI tools, or artificial lighting effects.</p>
            </div>

        </div>
    </section>

    <section class="why-lifestyle" id="why-lifestyle">
        <div class="why-lifestyle__container">
            
            <div class="why-lifestyle__header">
                <h2 class="why-lifestyle__title">
                    Why <span class="why-lifestyle__title-accent">Lifestyle Smiles?</span>
                </h2>
                <p class="why-lifestyle__subtitle">Lifestyle Smiles provides comprehensive dental care with a focus on appropriate, evidence-based cosmetic treatment.</p>
            </div>

            <div class="why-lifestyle__grid">
                
                <div class="why-lifestyle__experience">
                    <h3 class="why-lifestyle__experience-title">OUR TEAM OFFERS EXPERIENCE IN:</h3>
                    <ul class="why-lifestyle__list">
                        <li class="why-lifestyle__list-item">
                            <svg class="why-lifestyle__star" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#C8A97E"/>
                            </svg>
                            General and restorative dentistry
                        </li>
                        <li class="why-lifestyle__list-item">
                            <svg class="why-lifestyle__star" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#C8A97E"/>
                            </svg>
                            Digital smile planning
                        </li>
                        <li class="why-lifestyle__list-item">
                            <svg class="why-lifestyle__star" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#C8A97E"/>
                            </svg>
                            Composite bonding
                        </li>
                        <li class="why-lifestyle__list-item">
                            <svg class="why-lifestyle__star" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#C8A97E"/>
                            </svg>
                            Porcelain veneers
                        </li>
                        <li class="why-lifestyle__list-item">
                            <svg class="why-lifestyle__star" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#C8A97E"/>
                            </svg>
                            Invisalign
                        </li>
                        <li class="why-lifestyle__list-item">
                            <svg class="why-lifestyle__star" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#C8A97E"/>
                            </svg>
                            Dental implants
                        </li>
                        <li class="why-lifestyle__list-item">
                            <svg class="why-lifestyle__star" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#C8A97E"/>
                            </svg>
                            All-on-4 Plus
                        </li>
                    </ul>
                </div>

                <div class="why-lifestyle__card">
                    <h3 class="why-lifestyle__card-title">Our Approach to Care</h3>
                    <p class="why-lifestyle__card-desc">Each patient is assessed individually to determine whether treatment is suitable, and to ensure options are explained clearly.</p>
                    
                    <div class="why-lifestyle__inner-box">
                        <h4 class="why-lifestyle__inner-title">FOR SAME-DAY TREATMENTS</h4>
                        <p class="why-lifestyle__inner-desc">We focus on conservative approaches, careful planning, and outcomes aligned with your dental health and goals.</p>
                    </div>
                </div>

            </div>

            <div class="why-lifestyle__cta-wrapper">
                <a href="#consultation" class="why-lifestyle__btn">
                    Check Your Suitability
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="why-lifestyle__btn-icon" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

        </div>
    </section>

    <section class="doctor-profile" id="doctor-profile">
        <div class="doctor-profile__container">
            
            <!-- LEFT PROFILE CARD -->
            <div class="doctor-profile__left">
                <div class="doctor-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dr-Julie-Taing.jpg" alt="Dr Julie Taing" class="doctor-profile__image" loading="lazy" decoding="async">
                    
                    <div class="doctor-next-arrow">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 5l7 7-7 7"
                        />
                        </svg>
                    </div>
                </div>
                
                <div class="doctor-profile__slider-nav">
                    <div class="doctor-profile__dot doctor-profile__dot--active"></div>
                    <div class="doctor-profile__dot"></div>
                    <div class="doctor-profile__dot"></div>
                    <div class="doctor-profile__dot"></div>
                    <div class="doctor-profile__dot"></div>
                    <div class="doctor-profile__dot"></div>
                </div>

                <h2 class="doctor-profile__name">
                    Meet <span class="doctor-profile__name-italic">Dr Julie Taing</span>
                </h2>
                <p class="doctor-profile__subtitle">COSMETIC DENTIST</p>
            </div>

            <!-- RIGHT CONTENT COLUMN -->
            <div class="doctor-profile__right">
                <p class="doctor-profile__intro">Dr Julie Taing is a general dentist at Lifestyle Smiles with an interest in cosmetic and restorative dentistry, including composite bonding, veneers and smile enhancement.</p>
                
                <h3 class="doctor-profile__focus-heading">She provides patient-centred care with a focus on:</h3>
                
                <div class="doctor-profile__benefits">
                    <div class="doctor-profile__benefit-item">
                        <svg class="doctor-profile__benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#C89963"/>
                        </svg>
                        <span class="doctor-profile__benefit-text">Clear communication</span>
                    </div>
                    <div class="doctor-profile__benefit-item">
                        <svg class="doctor-profile__benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#C89963"/>
                        </svg>
                        <span class="doctor-profile__benefit-text">Minimally invasive treatment where appropriate</span>
                    </div>
                    <div class="doctor-profile__benefit-item">
                        <svg class="doctor-profile__benefit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#C89963"/>
                        </svg>
                        <span class="doctor-profile__benefit-text">Maintaining natural tooth structure</span>
                    </div>
                </div>

                <blockquote class="doctor-profile__quote">
                    “Dr Julie works closely with patients to understand their concerns and to determine suitable treatment options based on their individual needs and oral health.”
                </blockquote>

                <div class="doctor-profile__cta-wrapper">
                    <button class="doctor-profile__btn">Apply Now &rarr;</button>
                </div>
            </div>

        </div>
    </section>

    <section class="check-suitability-section" style="background: #F9F8F5;">
        <div class="check-suitability-wrapper">
            <!-- LEFT COLUMN -->
            <div class="check-left-column">
                <div>
                    <h2 class="check-suitability-title">
                        Check Your<br>Suitability <span class="highlight">Online</span>
                    </h2>
                    <p class="check-suitability-description">
                        If you are considering a <strong>same-day smile treatment</strong>, you can begin with an online assessment.
                    </p>
                </div>

                <!-- STEP CARDS -->
                <div class="check-steps-wrapper">
                <!-- Step 1 -->
                <div class="check-step-card active">
                    <div class="check-step-icon-wrapper check-step-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <span class="check-step-label">Step 1:</span>
                    <h3 class="check-step-title">Complete a Short Questionnaire</h3>
                    <p class="check-step-description">Share your details for a callback within 24 hours</p>
                </div>

                <!-- Step 2 -->
                <div class="check-step-card">
                    <div class="check-step-icon-wrapper check-step-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                    </div>
                    <span class="check-step-label">Step 2:</span>
                    <h3 class="check-step-title">Upload Four Smile Photos</h3>
                    <p class="check-step-description">Upload front, left side, right side, and tilted smile photos.</p>
                </div>

                <!-- Step 3 -->
                <div class="check-step-card">
                    <div class="check-step-icon-wrapper check-step-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 3v4a4 4 0 108 0V3m-4 8v6m-2 2a2 2 0 104 0 2 2 0 00-4 0z"></path></svg>
                    </div>
                    <span class="check-step-label">Step 3:</span>
                    <h3 class="check-step-title">Clinical Review</h3>
                    <p class="check-step-description">Our team will review your information and advise whether this treatment may be suitable.</p>
                </div>
                </div>
            </div>

            <!-- RIGHT COLUMN — FORM CARD -->
            <div class="check-form-card">
                <div style="display: flex; flex-direction: column; align-items: center; gap: 8px;">
                    <svg class="check-form-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span class="check-form-step">Step 1:</span>
                    <h3 class="check-form-title">Complete a Short Questionnaire</h3>
                    <p class="check-form-description">Share your details for a callback within 24 hours</p>
                </div>

                <form action="#" method="POST" style="display: flex; flex-direction: column; flex: 1;">
                    <div class="check-form-group" style="margin-top: 32px;">
                        <label class="check-form-label">FIRST NAME*</label>
                        <input type="text" class="check-form-input" placeholder="Enter your first name">
                    </div>

                    <div class="check-form-group">
                        <label class="check-form-label">LAST NAME*</label>
                        <input type="text" class="check-form-input" placeholder="Enter your last name">
                    </div>

                    <div class="check-form-group" style="position: relative;">
                        <label class="check-form-label">DATE OF BIRTH*</label>
                        <input type="text" class="check-form-input" placeholder="DD/MM/YYYY">
                        <svg style="position: absolute; right: 0; bottom: 12px; width: 20px; height: 20px; color: #B9B9B9;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>

                    <div class="check-form-group">
                        <label class="check-form-label">GENDER*</label>
                        <div class="check-gender-group">
                            <label class="check-gender-label"><input type="radio" name="gender" style="accent-color: #B78556; margin-right: 8px;"> MALE</label>
                            <label class="check-gender-label"><input type="radio" name="gender" style="accent-color: #B78556; margin-right: 8px;"> FEMALE</label>
                            <label class="check-gender-label"><input type="radio" name="gender" style="accent-color: #B78556; margin-right: 8px;"> OTHER</label>
                        </div>
                    </div>

                    <div class="check-form-group">
                        <label class="check-form-label">PHONE NUMBER*</label>
                        <input type="tel" class="check-form-input" placeholder="+61 Enter number">
                    </div>

                    <div class="check-form-group">
                        <label class="check-form-label">EMAIL*</label>
                        <input type="email" class="check-form-input" placeholder="Enter your email address">
                    </div>

                    <div class="check-form-actions">
                        <button type="button" class="check-next-button">Next &rarr;</button>
                        <p class="check-form-note">Your information is transmitted securely.</p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>