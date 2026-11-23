<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Reserve a Brief & Strategic Intake Desk';
$pageDesc = 'Initiate your project brief with Blue Hour Creative Studios in Guwahati & New Delhi, India. Direct founder consultation, transparent packages, and sub-4-hour response time.';
$activePage = 'contact';

$prefillPackage = isset($_GET['package']) ? trim($_GET['package']) : '';
$prefillConsult = isset($_GET['consult']) ? trim($_GET['consult']) : '';
$prefillService = isset($_GET['service']) ? trim($_GET['service']) : '';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- ========================================================================
       1. SUBPAGE HERO HEADER (ROOT BARREL SCRAPBOOK STYLE)
       ======================================================================== -->
  <section style="padding: 4.5rem 0 3.5rem; position: relative; z-index: 2;">
    <div class="container">
      <div style="max-width: 780px;">
        <div class="script-kicker" style="font-size: 1.45rem; margin-bottom: 0.4rem;">
          <a href="index.php" style="color: var(--text-muted);">Home</a>
          <span style="color: var(--accent-orange);">&bull;</span>
          <span>Strategic Intake Desk</span>
        </div>

        <h1 style="font-family: var(--font-hand); font-size: clamp(3rem, 5.5vw, 4.5rem); font-weight: 700; color: #FFFDF9; line-height: 1.06; margin-bottom: 1rem;">
          Reserve Your Digital Brief. <br>
          <span class="script-highlight">Let's Build Something Iconic.</span>
          <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon" style="margin-left: 8px;">
        </h1>

        <p style="font-family: var(--font-body); font-size: 1.08rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 2rem;">
          Have an ambitious web platform, luxury e-commerce storefront, or high-ROAS social campaign in mind? Brief us on your vision. Our founders respond within 4 hours with a tailored architectural roadmap.
        </p>
      </div>
    </div>
  </section>

  <!-- Torn Paper Divider (Dark to Kraft) -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <!-- ========================================================================
       2. RESERVATION DESK & BRIEF FORM (KRAFT PAPER SCRAPBOOK SECTION)
       ======================================================================== -->
  <section class="kraft-disciplines-section" id="contact">
    <div class="container">
      
      <div style="display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 3rem; align-items: start;" class="timeline-grid">
        
        <!-- Left: Pinned Studio Channels & Guarantee Memo -->
        <div>
          <div class="pinned-event-sheet" style="transform: rotate(-1deg); margin-bottom: 2rem;">
            <img src="assets/images/doodle_pushpin.svg" alt="Pin" class="pinned-pushpin">
            <div class="pinned-title">Direct Studio Channels</div>

            <div style="display: flex; flex-direction: column; gap: 1.25rem; margin-bottom: 1.75rem;">
              <div style="display: flex; gap: 1rem; align-items: center;">
                <div class="discipline-icon-box" style="margin-bottom: 0; width: 46px; height: 46px; font-size: 1.1rem;">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                  <strong style="display: block; font-size: 0.75rem; font-family: var(--font-mono); color: #7D6B58; text-transform: uppercase;">Direct Email Desk</strong>
                  <a href="mailto:<?= htmlspecialchars($agency['email'] ?? 'bluehourcreativestudio8@gmail.com') ?>" style="font-weight: 700; color: #211913; font-size: 0.95rem;">
                    <?= htmlspecialchars($agency['email'] ?? 'bluehourcreativestudio8@gmail.com') ?>
                  </a>
                </div>
              </div>

              <div style="display: flex; gap: 1rem; align-items: center;">
                <div class="discipline-icon-box" style="margin-bottom: 0; width: 46px; height: 46px; font-size: 1.1rem;">
                  <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div>
                  <strong style="display: block; font-size: 0.75rem; font-family: var(--font-mono); color: #7D6B58; text-transform: uppercase;">Founder Hotline &amp; WhatsApp</strong>
                  <a href="https://wa.me/917002201534" target="_blank" rel="noopener noreferrer" style="font-weight: 700; color: #211913; font-size: 1.02rem;">
                    <?= htmlspecialchars($agency['phone'] ?? '+91 7002201534') ?>
                  </a>
                </div>
              </div>

              <div style="display: flex; gap: 1rem; align-items: center;">
                <div class="discipline-icon-box" style="margin-bottom: 0; width: 46px; height: 46px; font-size: 1.1rem;">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                  <strong style="display: block; font-size: 0.75rem; font-family: var(--font-mono); color: #7D6B58; text-transform: uppercase;">Studio Hubs</strong>
                  <span style="font-weight: 700; color: #211913; font-size: 0.95rem;">
                    <?= htmlspecialchars($agency['location'] ?? 'Guwahati & New Delhi, India') ?>
                  </span>
                </div>
              </div>
            </div>

            <div style="padding-top: 1.1rem; border-top: 1px dashed rgba(160,130,90,0.45);">
              <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Studios,%20I%20have%20a%20project%20inquiry" target="_blank" rel="noopener noreferrer" class="btn-orange-solid" style="width: 100%; justify-content: center;">
                <i class="fa-brands fa-whatsapp" style="font-size: 1.15rem;"></i>
                <span>Instant WhatsApp Connect</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Right: Pinned Kraft Brief Reservation Form -->
        <div style="position: relative; background: #FFFDF9; border: 1px solid var(--bg-kraft-border); border-radius: 10px; padding: 2.5rem 2.25rem; box-shadow: 0 18px 42px rgba(70,50,30,0.14);">
          <span class="washi-tape washi-tape-top"></span>

          <div class="script-kicker" style="color: var(--accent-orange-deep);">
            <span>Project Intake Clipboard</span>
          </div>
          <h2 style="font-family: var(--font-hand); font-size: 2.3rem; font-weight: 700; color: #211913; margin-bottom: 1.25rem;">
            Tell Us About Your Build
          </h2>

          <div id="formAlert" style="display: none; padding: 0.9rem 1rem; border-radius: 6px; margin-bottom: 1.25rem; font-size: 0.9rem; font-weight: 600;"></div>

          <form id="scrapbookInquiryForm" method="POST" action="api/contact.php">
            <div class="contact-form-row-2">
              <div>
                <label for="clientName" style="display: block; font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; color: #5C4B3A; text-transform: uppercase; margin-bottom: 0.35rem;">Your Name *</label>
                <input type="text" id="clientName" name="name" required placeholder="e.g. Rahul Sharma" style="width: 100%; padding: 0.75rem 0.9rem; border-radius: 6px; border: 1.5px solid #D8C6AA; background: #FAF5EC; font-family: var(--font-body); font-size: 0.92rem; color: #211913;">
              </div>
              <div>
                <label for="clientEmail" style="display: block; font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; color: #5C4B3A; text-transform: uppercase; margin-bottom: 0.35rem;">Email Address *</label>
                <input type="email" id="clientEmail" name="email" required placeholder="rahul@company.com" style="width: 100%; padding: 0.75rem 0.9rem; border-radius: 6px; border: 1.5px solid #D8C6AA; background: #FAF5EC; font-family: var(--font-body); font-size: 0.92rem; color: #211913;">
              </div>
            </div>

            <div class="contact-form-row-2">
              <div>
                <label for="clientPhone" style="display: block; font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; color: #5C4B3A; text-transform: uppercase; margin-bottom: 0.35rem;">Phone / WhatsApp</label>
                <input type="tel" id="clientPhone" name="phone" placeholder="+91 98765 43210" style="width: 100%; padding: 0.75rem 0.9rem; border-radius: 6px; border: 1.5px solid #D8C6AA; background: #FAF5EC; font-family: var(--font-body); font-size: 0.92rem; color: #211913;">
              </div>
              <div>
                <label for="clientService" style="display: block; font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; color: #5C4B3A; text-transform: uppercase; margin-bottom: 0.35rem;">Primary Discipline</label>
                <select id="clientService" name="service" style="width: 100%; padding: 0.75rem 0.9rem; border-radius: 6px; border: 1.5px solid #D8C6AA; background: #FAF5EC; font-family: var(--font-body); font-size: 0.92rem; color: #211913;">
                  <option value="Custom Web & SaaS Development" <?= stripos($prefillService, 'web') !== false ? 'selected' : '' ?>>Custom Web &amp; SaaS Development</option>
                  <option value="Luxury E-Commerce Storefront" <?= stripos($prefillService, 'commerce') !== false ? 'selected' : '' ?>>Luxury E-Commerce Storefront</option>
                  <option value="Social Media & Performance Marketing" <?= stripos($prefillService, 'social') !== false ? 'selected' : '' ?>>Social Media &amp; Performance Ads</option>
                  <option value="Enterprise ERP & CRM Suite" <?= stripos($prefillService, 'erp') !== false ? 'selected' : '' ?>>Enterprise ERP &amp; CRM Suite</option>
                  <option value="Mobile App (iOS & Android)" <?= stripos($prefillService, 'mobile') !== false ? 'selected' : '' ?>>Mobile App (iOS &amp; Android)</option>
                </select>
              </div>
            </div>

            <div style="margin-bottom: 1.1rem;">
              <label for="clientBudget" style="display: block; font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; color: #5C4B3A; text-transform: uppercase; margin-bottom: 0.35rem;">Selected Package / Scope Tier</label>
              <select id="clientBudget" name="budget" style="width: 100%; padding: 0.75rem 0.9rem; border-radius: 6px; border: 1.5px solid #D8C6AA; background: #FAF5EC; font-family: var(--font-body); font-size: 0.92rem; color: #211913;">
                <option value="Website Starter — ₹8,000 – ₹10,000" <?= stripos($prefillPackage, 'Starter') !== false ? 'selected' : '' ?>>Website Starter (₹8,000 – ₹10,000 one-time)</option>
                <option value="Website + CMS & Payments — ₹16,000" <?= stripos($prefillPackage, 'CMS') !== false || empty($prefillPackage) ? 'selected' : '' ?>>Website + CMS &amp; Payments (₹16,000 one-time)</option>
                <option value="Social Media Management — ₹10,000/mo" <?= stripos($prefillPackage, 'Social Media') !== false ? 'selected' : '' ?>>Social Media Management (₹10,000 / month)</option>
                <option value="Complete Digital Growth — ₹20,000/mo" <?= stripos($prefillPackage, 'Growth') !== false ? 'selected' : '' ?>>Complete Digital Growth + Brand Shoots (₹20,000 / month)</option>
                <option value="Mobile App (Android + iOS) — From ₹25,000" <?= stripos($prefillPackage, 'Mobile') !== false ? 'selected' : '' ?>>Mobile App (Android + iOS) (From ₹25,000)</option>
                <option value="Custom Enterprise / Retainer" <?= stripos($prefillPackage, 'Enterprise') !== false ? 'selected' : '' ?>>Custom Enterprise / Multi-Service Retainer</option>
              </select>
            </div>

            <div style="margin-bottom: 1.4rem;">
              <label for="clientMessage" style="display: block; font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; color: #5C4B3A; text-transform: uppercase; margin-bottom: 0.35rem;">Project Scope &amp; Objectives *</label>
              <textarea id="clientMessage" name="message" rows="4" required placeholder="Detail your target launch date, website requirements, or social marketing goals..." style="width: 100%; padding: 0.8rem 0.9rem; border-radius: 6px; border: 1.5px solid #D8C6AA; background: #FAF5EC; font-family: var(--font-body); font-size: 0.92rem; color: #211913; resize: vertical;"><?= !empty($prefillConsult) ? "Hi, I would like to schedule a consultation with " . htmlspecialchars($prefillConsult) . ". " : '' ?></textarea>
            </div>

            <button type="submit" id="submitBtn" class="btn-orange-solid" style="width: 100%; justify-content: center; padding: 1rem; font-size: 1.02rem;">
              <span>Submit Strategic Brief</span>
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </form>
        </div>

      </div>

    </div>
  </section>

  <!-- Torn Paper Divider (Kraft to Dark) -->
  <div class="torn-divider torn-dark-top" aria-hidden="true"></div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('scrapbookInquiryForm');
      const alertBox = document.getElementById('formAlert');
      const submitBtn = document.getElementById('submitBtn');
      if (form) {
        form.addEventListener('submit', function(e) {
          e.preventDefault();
          submitBtn.disabled = true;
          submitBtn.innerHTML = '<span>Dispatching Brief...</span>';
          const formData = new FormData(form);
          fetch('api/contact.php', {
            method: 'POST',
            body: formData
          })
          .then(function(r) { return r.json(); })
          .then(function(res) {
            alertBox.style.display = 'block';
            if (res.success) {
              alertBox.style.background = '#DCFCE7';
              alertBox.style.color = '#166534';
              alertBox.style.border = '1px solid #86EFAC';
              alertBox.textContent = res.message || 'Brief received! Redirecting to WhatsApp desk...';
              if (res.whatsapp_url) {
                setTimeout(function() { window.open(res.whatsapp_url, '_blank'); }, 900);
              }
              form.reset();
            } else {
              alertBox.style.background = '#FEE2E2';
              alertBox.style.color = '#991B1B';
              alertBox.textContent = res.message || 'Please check your inputs and try again.';
            }
          })
          .catch(function() {
            alertBox.style.display = 'block';
            alertBox.style.background = '#DCFCE7';
            alertBox.style.color = '#166534';
            alertBox.textContent = 'Opening direct WhatsApp founder desk...';
            const name = document.getElementById('clientName').value;
            const msg = document.getElementById('clientMessage').value;
            window.open('https://wa.me/917002201534?text=' + encodeURIComponent('Hi Blue Hour Studios! I am ' + name + '. ' + msg), '_blank');
          })
          .finally(function() {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span>Submit Strategic Brief</span> <i class="fa-solid fa-arrow-right"></i>';
          });
        });
      }
    });
  </script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
