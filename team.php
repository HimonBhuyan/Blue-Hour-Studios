<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Leadership & Studio Collective';
$pageDesc = 'Meet the core leaders of The Blue Hour Studios (Blue Hour Creative Studios) in Guwahati & New Delhi, India: Himon Bhuyan (Founder & Principal Software Architect) and Darshana Das (Partner — Head of Client Growth & Social Media Strategy).';
$activePage = 'team';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- Subpage Architectural Hero Header -->
  <section class="subpage-hero">
    <div class="container">
      <div class="subpage-hero-inner">
        <div class="subpage-breadcrumb">
          <a href="index.php">Home</a>
          <span class="sep">/</span>
          <span class="current">Leadership & Studio Collective</span>
        </div>
        <h1 class="subpage-title">
          Direct Founder Access. <br>
          <span class="text-gradient-champagne">Zero Junior Hand-offs.</span>
        </h1>
        <p class="subpage-lead">
          We reject the bloated agency model of slick sales pitchmen delegating your project to inexperienced junior interns. At Blue Hour Creative Studios, you partner directly with the architects who code your systems and direct your viral campaigns.
        </p>

        <div class="subpage-quick-stats">
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">2</span>
            <span class="subpage-stat-lbl">Studio Partners</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">Direct</span>
            <span class="subpage-stat-lbl">Founder Access</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">Dual</span>
            <span class="subpage-stat-lbl">Guwahati & New Delhi</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">&lt;4 Hrs</span>
            <span class="subpage-stat-lbl">Average Response Time</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       STUDIO LEADERSHIP & TEAM
       ======================================================================== -->
  <section class="team-section" id="team">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>01 // The Core Leadership</span>
        </div>
        <h2 class="section-headline">
          The Minds Behind <br><span class="text-gradient-champagne">Blue Hour Studios</span>
        </h2>
        <p class="section-lead">
          Direct founder access. Zero bloated agency bureaucracy or junior hand-offs. We architect the digital systems and scale the market narratives.
        </p>
      </div>

      <div class="team-editorial-grid">
        <?php foreach ($team as $member): ?>
          <div class="team-card-editorial spotlight-card reveal-on-scroll">
            <div class="team-card-inner">
              
              <!-- Portrait Image Container -->
              <div class="team-photo-wrap">
                <img src="<?= htmlspecialchars($member['image']) ?>?v=<?= file_exists($member['image']) ? filemtime($member['image']) : time() ?>" alt="<?= htmlspecialchars($member['name']) ?>" class="team-photo-img" loading="lazy">
                <div class="team-photo-vignette"></div>
                <div class="team-status-chip">
                  <span class="status-dot-pulse"></span>
                  <span>ONLINE &bull; DIRECT ACCESS</span>
                </div>
                <div class="team-badge-floating">
                  <i class="fa-solid fa-certificate"></i> <?= htmlspecialchars($member['badge']) ?>
                </div>
              </div>

              <!-- Content Meta -->
              <div class="team-details-wrap">
                <div class="team-role-pill"><?= htmlspecialchars($member['role']) ?></div>
                <h3 class="team-name-title"><?= htmlspecialchars($member['name']) ?></h3>
                <?php if (!empty($member['socials']['phone'])): ?>
                  <div style="margin-bottom: 0.65rem; font-family: var(--font-mono); font-size: 0.78rem; color: var(--accent-champagne);">
                    <i class="fa-solid fa-phone" style="font-size: 0.7rem; margin-right: 0.35rem;"></i>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $member['socials']['phone'])) ?>" style="color: inherit; text-decoration: none;"><?= htmlspecialchars($member['socials']['phone']) ?></a>
                  </div>
                <?php endif; ?>
                <p class="team-bio-text"><?= htmlspecialchars($member['bio']) ?></p>

                <!-- Skill Chips -->
                <div class="team-skills-row">
                  <?php foreach ($member['skills'] as $skill): ?>
                    <span class="team-skill-chip"><?= htmlspecialchars($skill) ?></span>
                  <?php endforeach; ?>
                </div>

                <!-- Footer Actions & Direct Socials -->
                <div class="team-card-footer">
                  <div class="team-social-links">
                    <?php if (!empty($member['socials']['github'])): ?>
                      <a href="<?= htmlspecialchars($member['socials']['github']) ?>" target="_blank" rel="noopener noreferrer" class="team-social-btn" title="GitHub"><i class="fa-brands fa-github"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['linkedin'])): ?>
                      <a href="<?= htmlspecialchars($member['socials']['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="team-social-btn" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['instagram'])): ?>
                      <a href="<?= htmlspecialchars($member['socials']['instagram']) ?>" target="_blank" rel="noopener noreferrer" class="team-social-btn" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['whatsapp'])): ?>
                      <a href="<?= htmlspecialchars($member['socials']['whatsapp']) ?>" target="_blank" rel="noopener noreferrer" class="team-social-btn" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['email'])): ?>
                      <a href="mailto:<?= htmlspecialchars($member['socials']['email']) ?>" class="team-social-btn" title="Email"><i class="fa-solid fa-envelope"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['phone'])): ?>
                      <a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $member['socials']['phone'])) ?>" class="team-social-btn" title="Call <?= htmlspecialchars($member['socials']['phone']) ?>"><i class="fa-solid fa-phone"></i></a>
                    <?php endif; ?>
                  </div>

                  <a href="contact.php?consult=<?= urlencode($member['name']) ?>" class="btn btn-ghost-editorial btn-sm magnetic-btn btn-team-consult" data-member-name="<?= htmlspecialchars($member['name']) ?>" data-member-role="<?= htmlspecialchars($member['badge']) ?>">
                    <span>Consult with <?= htmlspecialchars(explode(' ', $member['name'])[0]) ?></span>
                    <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>

              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       STUDIO CULTURE & ENGINEERING ETHOS
       ======================================================================== -->
  <section class="interactive-matrix-section">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>02 // Our Operational Ethos</span>
        </div>
        <h2 class="section-headline">
          Three Non-Negotiable <br><span class="text-gradient-mercury">Studio Principles.</span>
        </h2>
        <p class="section-lead">
          How we ensure your projects are delivered on time, under budget, and built to dominate.
        </p>
      </div>

      <div class="matrix-split-grid reveal-on-scroll" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
        
        <div class="transparency-card spotlight-card">
          <div class="transparency-card-header">
            <div class="transparency-icon"><i class="fa-solid fa-microchip"></i></div>
            <div>
              <h4 class="transparency-title">Zero Dependency Bloat</h4>
              <p class="transparency-sub">Craftsmanship over generic page builders.</p>
            </div>
          </div>
          <p style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6; margin-top: 0.75rem;">
            We don't sell slow WordPress themes or heavy pre-built templates. We write bespoke code (Laravel, React, Node.js, PHP 8+) that scores 95+ on Google PageSpeed Insights and loads in sub-seconds.
          </p>
        </div>

        <div class="transparency-card spotlight-card">
          <div class="transparency-card-header">
            <div class="transparency-icon"><i class="fa-solid fa-key"></i></div>
            <div>
              <h4 class="transparency-title">100% Client IP Ownership</h4>
              <p class="transparency-sub">No hostage code. No vendor lock-in.</p>
            </div>
          </div>
          <p style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6; margin-top: 0.75rem;">
            You own every line of code, every Git commit, every graphic asset, domain, and Meta advertising account. We deliver clean turnkey handovers with complete documentation.
          </p>
        </div>

        <div class="transparency-card spotlight-card">
          <div class="transparency-card-header">
            <div class="transparency-icon"><i class="fa-solid fa-chart-line"></i></div>
            <div>
              <h4 class="transparency-title">Obsession with Direct ROI</h4>
              <p class="transparency-sub">Metrics that actually impact your bottom line.</p>
            </div>
          </div>
          <p style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6; margin-top: 0.75rem;">
            Vanity numbers don't pay bills. We judge our success by real metrics: qualified inbound leads, e-commerce sales conversion rates, customer acquisition costs, and verified ad ROAS.
          </p>
        </div>

      </div>

      <!-- Call to Action Banner -->
      <div class="launchpad-card spotlight-card reveal-on-scroll" style="margin-top: 3.5rem; text-align: center; padding: 2.5rem 1.5rem;">
        <span class="index-num" style="display: block; margin-bottom: 0.5rem;">DIRECT DIALOGUE //</span>
        <h3 style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 700; margin-bottom: 0.75rem; color: var(--text-primary);">
          Speak Directly with Himon or Darshana
        </h3>
        <p style="color: var(--text-secondary); max-width: 600px; margin: 0 auto 1.5rem auto; font-size: 0.95rem;">
          Schedule an introductory strategic discovery session to evaluate your software architecture or scale your viral brand distribution.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Studios,%20I%20would%20like%20to%20consult%20with%20your%20team" target="_blank" rel="noopener noreferrer" class="btn btn-secondary magnetic-btn">
            <i class="fa-brands fa-whatsapp" style="color: #25d366;"></i>
            <span>Instant WhatsApp Connect</span>
          </a>
          <a href="contact.php" class="btn btn-primary magnetic-btn">
            <span>Send Project Brief</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
