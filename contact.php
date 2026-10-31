<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Strategic Intake Desk & Inquiries';
$pageDesc = 'Initiate your project brief with The Blue Hour Studios (Blue Hour Creative Studios) in Guwahati & New Delhi, India. Direct founder consultation, transparent packages, and sub-4-hour response time.';
$activePage = 'contact';

// Read query params for intelligent pre-fill
$prefillPackage = isset($_GET['package']) ? trim($_GET['package']) : '';
$prefillConsult = isset($_GET['consult']) ? trim($_GET['consult']) : '';
$prefillService = isset($_GET['service']) ? trim($_GET['service']) : '';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- Subpage Architectural Hero Header -->
  <section class="subpage-hero">
    <div class="container">
      <div class="subpage-hero-inner">
        <div class="subpage-breadcrumb">
          <a href="index.php">Home</a>
          <span class="sep">/</span>
          <span class="current">Strategic Intake Desk</span>
        </div>
        <h1 class="subpage-title">
          Initiate Your Brief. <br>
          <span class="text-gradient-champagne">Let's Build Something Iconic.</span>
        </h1>
        <p class="subpage-lead">
          Have an ambitious web platform in mind? Ready to accelerate your brand's presence on social media with hyper-targeted marketing? Brief us on your vision. We respond within 4 hours with an architectural blueprint.
        </p>

        <div class="subpage-quick-stats">
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">&lt;4 Hrs</span>
            <span class="subpage-stat-lbl">Average Response Time</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">Direct</span>
            <span class="subpage-stat-lbl">Founder Intake Desk</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">Guwahati</span>
            <span class="subpage-stat-lbl">Studio & Engineering Hub</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">New Delhi</span>
            <span class="subpage-stat-lbl">Strategic Growth Desk</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       CONTACT & STRATEGIC INTAKE DESK
       ======================================================================== -->
  <section class="contact-section" id="contact" style="padding-top: 40px;">
    <div class="container">
      
      <div class="contact-card-editorial spotlight-card reveal-on-scroll">
        <div class="contact-editorial-grid">
          
          <div class="contact-left-editorial">
            <div class="section-kicker">
              <span class="kicker-line"></span>
              <span>Direct Studio Channels</span>
            </div>
            <h2>Turn Vision Into <br><span class="text-gradient-champagne">Engineered Reality.</span></h2>
            <p class="contact-intro">
              Whether you need turnkey software delivery or an aggressive social media growth campaign, you communicate directly with our principals.
            </p>

            <div class="editorial-contact-rows">
              <div class="contact-item-row">
                <div class="contact-item-icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="contact-item-data">
                  <strong>Direct Inquiries</strong>
                  <span><?= htmlspecialchars($agency['email'] ?? 'hello@bluehourcreativestudios.com') ?></span>
                </div>
              </div>

              <div class="contact-item-row">
                <div class="contact-item-icon"><i class="fa-solid fa-phone"></i></div>
                <div class="contact-item-data">
                  <strong>Consultation & WhatsApp</strong>
                  <span><?= htmlspecialchars($agency['phone'] ?? '+91 7002201534') ?></span>
                </div>
              </div>

              <div class="contact-item-row">
                <div class="contact-item-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="contact-item-data">
                  <strong>Studio Hubs</strong>
                  <span><?= htmlspecialchars($agency['location'] ?? 'Guwahati & New Delhi, India') ?></span>
                </div>
              </div>
            </div>

            <div class="social-pills-row">
              <a href="<?= htmlspecialchars($agency['socials']['instagram'] ?? '#') ?>" target="_blank" rel="noopener noreferrer" class="social-pill-link" aria-label="Instagram">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="<?= htmlspecialchars($agency['socials']['linkedin'] ?? '#') ?>" target="_blank" rel="noopener noreferrer" class="social-pill-link" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
              <a href="<?= htmlspecialchars($agency['socials']['github'] ?? '#') ?>" target="_blank" rel="noopener noreferrer" class="social-pill-link" aria-label="GitHub">
                <i class="fa-brands fa-github"></i>
              </a>
              <a href="https://wa.me/917002201534" target="_blank" rel="noopener noreferrer" class="social-pill-link" aria-label="WhatsApp">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
            </div>

            <div style="margin-top: 2rem; padding: 1.25rem; border-radius: var(--radius-md); background: rgba(59, 130, 246, 0.06); border: 1px solid var(--border-subtle);">
              <div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.5rem; color: var(--accent-champagne); font-size: 0.85rem; font-weight: 600;">
                <i class="fa-brands fa-whatsapp"></i>
                <span>Need Instant Answers?</span>
              </div>
              <p style="font-size: 0.8rem; color: var(--text-secondary); line-height: 1.5; margin-bottom: 0.8rem;">
                Connect directly with our team on WhatsApp for immediate feedback on project availability, timelines, and scope.
              </p>
              <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Studios,%20I%20have%20a%20project%20inquiry" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" style="font-size: 0.78rem; padding: 0.45rem 0.9rem;">
                <i class="fa-brands fa-whatsapp" style="color: #25d366;"></i>
                <span>Chat on WhatsApp</span>
              </a>
            </div>
          </div>

          <!-- Sleek Interactive Inquiry Form with Scope & Sprint Estimator -->
          <div class="contact-right-form">
            <form id="agencyInquiryForm" class="inquiry-form-editorial" method="POST">
              
              <div class="form-feedback-alert" id="formAlert"></div>

              <!-- Interactive Project Scope & Timeline Estimator Widget -->
              <div class="scope-estimator-wrap" id="scopeEstimatorWrap">
                <div class="estimator-header-row">
                  <span class="estimator-title"><i class="fa-solid fa-sliders"></i> Interactive Sprint & Timeline Calculator</span>
                </div>

                <div class="scope-chips-cluster">
                  <label class="scope-checkbox-label is-checked">
                    <input type="checkbox" name="scope_items[]" value="Custom Web App" data-weeks="3" checked>
                    <span>Full-Stack Web App (+3w)</span>
                  </label>
                  <label class="scope-checkbox-label">
                    <input type="checkbox" name="scope_items[]" value="Luxury E-Commerce" data-weeks="2">
                    <span>E-Commerce Portal (+2w)</span>
                  </label>
                  <label class="scope-checkbox-label is-checked">
                    <input type="checkbox" name="scope_items[]" value="Social Media Engine" data-weeks="2" checked>
                    <span>Social Media Engine (+2w)</span>
                  </label>
                  <label class="scope-checkbox-label">
                    <input type="checkbox" name="scope_items[]" value="Enterprise ERP" data-weeks="4">
                    <span>Enterprise ERP / CRM (+4w)</span>
                  </label>
                  <label class="scope-checkbox-label">
                    <input type="checkbox" name="scope_items[]" value="Paid Ads Funnel" data-weeks="1">
                    <span>Paid Meta Ads (+1w)</span>
                  </label>
                  <label class="scope-checkbox-label">
                    <input type="checkbox" name="scope_items[]" value="Mobile App" data-weeks="4">
                    <span>Mobile App Native (+4w)</span>
                  </label>
                </div>

                <div class="estimator-calc-bar">
                  <div class="calc-timeline-data">
                    <strong id="estimatedTimelineText">4 — 5 WEEKS SPRINT</strong>
                    <span id="estimatedTierText">EXPEDITED TURNKEY DELIVERY // ACTIVE ONBOARDING</span>
                  </div>
                  <span class="calc-badge-sprint" id="sprintBadgeStatus">FAST-TRACK</span>
                </div>
              </div>

              <div class="form-group-editorial">
                <label class="form-label-editorial">Select Primary Discipline</label>
                <div class="chips-editorial-grid">
                  <label class="chip-editorial-option">
                    <input type="radio" name="service" value="Custom Web & SaaS Development" <?= empty($prefillService) || stripos($prefillService, 'web') !== false ? 'checked' : '' ?>>
                    <span class="chip-editorial-box"><i class="fa-solid fa-code"></i> Web & SaaS Dev</span>
                  </label>
                  <label class="chip-editorial-option">
                    <input type="radio" name="service" value="Social Media & Performance Marketing" <?= stripos($prefillService, 'social') !== false ? 'checked' : '' ?>>
                    <span class="chip-editorial-box"><i class="fa-solid fa-chart-line"></i> Social Marketing</span>
                  </label>
                  <label class="chip-editorial-option">
                    <input type="radio" name="service" value="Enterprise ERP & CRM Suite" <?= stripos($prefillService, 'erp') !== false ? 'checked' : '' ?>>
                    <span class="chip-editorial-box"><i class="fa-solid fa-network-wired"></i> Enterprise ERP</span>
                  </label>
                  <label class="chip-editorial-option">
                    <input type="radio" name="service" value="Brand Identity & Creative Direction" <?= stripos($prefillService, 'brand') !== false ? 'checked' : '' ?>>
                    <span class="chip-editorial-box"><i class="fa-solid fa-wand-magic-sparkles"></i> Brand Identity</span>
                  </label>
                </div>
              </div>

              <div class="form-row-2-editorial">
                <div class="form-group-editorial">
                  <label for="clientName" class="form-label-editorial">Your Name *</label>
                  <input type="text" id="clientName" name="name" class="input-editorial" placeholder="e.g. Rahul Sharma" required>
                </div>
                <div class="form-group-editorial">
                  <label for="clientEmail" class="form-label-editorial">Corporate Email *</label>
                  <input type="email" id="clientEmail" name="email" class="input-editorial" placeholder="rahul@company.com" required>
                </div>
              </div>

              <div class="form-row-2-editorial">
                <div class="form-group-editorial">
                  <label for="clientPhone" class="form-label-editorial">Phone / WhatsApp</label>
                  <input type="tel" id="clientPhone" name="phone" class="input-editorial" placeholder="+91 98765 43210">
                </div>
                <div class="form-group-editorial">
                  <label for="clientBudget" class="form-label-editorial">Selected Package / Scope Tier</label>
                  <select id="clientBudget" name="budget" class="input-editorial">
                    <option value="Website Starter — ₹8,000 – ₹10,000" <?= stripos($prefillPackage, 'Starter') !== false ? 'selected' : '' ?>>Website Starter (₹8,000 – ₹10,000 one-time)</option>
                    <option value="Website + CMS & Payments — ₹16,000" <?= stripos($prefillPackage, 'CMS') !== false || empty($prefillPackage) ? 'selected' : '' ?>>Website + CMS & Payments (₹16,000 one-time)</option>
                    <option value="Social Media Management — ₹5,000/mo" <?= stripos($prefillPackage, 'Social Media') !== false ? 'selected' : '' ?>>Social Media Management (₹5,000 / month)</option>
                    <option value="Complete Digital Growth — ₹8,000+/mo" <?= stripos($prefillPackage, 'Growth') !== false ? 'selected' : '' ?>>Complete Digital Growth (₹8,000+ / month)</option>
                    <option value="Mobile App (Android + iOS) — From ₹25,000" <?= stripos($prefillPackage, 'Mobile') !== false ? 'selected' : '' ?>>Mobile App (Android + iOS) (From ₹25,000)</option>
                    <option value="Custom Enterprise / Retainer" <?= stripos($prefillPackage, 'Enterprise') !== false ? 'selected' : '' ?>>Custom Enterprise / Multi-Service Retainer</option>
                  </select>
                </div>
              </div>

              <div class="form-group-editorial">
                <label for="clientMessage" class="form-label-editorial">Project Scope & Objectives *</label>
                <textarea id="clientMessage" name="message" class="input-editorial" placeholder="Detail your target launch date, software architecture needs, or social marketing goals..." required><?= !empty($prefillConsult) ? "Hi, I would like to schedule an architectural consultation with " . htmlspecialchars($prefillConsult) . ". " : '' ?></textarea>
              </div>

              <button type="submit" class="btn btn-primary submit-btn-monolith magnetic-btn" id="submitBtn">
                <span>Submit Strategic Brief</span>
                <i class="fa-solid fa-arrow-right" style="font-size: 0.8rem;"></i>
              </button>
            </form>
          </div>

        </div>
      </div>

    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
