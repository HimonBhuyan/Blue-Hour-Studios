<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Founders & Studio Leadership';
$pageDesc = 'Meet the core leaders of Blue Hour Creative Studios in Guwahati & New Delhi, India: Himon Bhuyan (Founder & Principal Software Architect) and Darshana Das (Partner — Head of Client Growth & Social Media Strategy).';
$activePage = 'team';

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
          <span>Leadership &amp; Studio Collective</span>
        </div>

        <h1 style="font-family: var(--font-hand); font-size: clamp(3rem, 5.5vw, 4.5rem); font-weight: 700; color: #FFFDF9; line-height: 1.06; margin-bottom: 1rem;">
          Direct Founder Access. <br>
          <span class="script-highlight">Zero Junior Hand-offs.</span>
          <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon" style="margin-left: 8px;">
        </h1>

        <p style="font-family: var(--font-body); font-size: 1.08rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 2rem;">
          We reject the bloated agency model of slick sales pitchmen delegating your project to inexperienced junior interns. At Blue Hour Creative Studios, you partner directly with the principals who code your systems and direct your viral campaigns.
        </p>

        <!-- Quick Metrics -->
        <div style="display: flex; gap: 2.25rem; flex-wrap: wrap; border-top: 1px dashed rgba(255,255,255,0.12); padding-top: 1.25rem;">
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">02</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Studio Principals</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">Direct</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Founder Onboarding</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">Dual Hub</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Guwahati &amp; New Delhi</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">&lt;4 Hrs</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Response SLA</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Torn Paper Divider (Dark to Kraft) -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <!-- ========================================================================
       2. FOUNDERS POLAROID PORTRAITS (KRAFT PAPER SCRAPBOOK SECTION)
       ======================================================================== -->
  <section class="kraft-disciplines-section" id="team">
    <div class="container">

      <div class="section-head-kraft" style="margin-bottom: 2.75rem;">
        <div>
          <div class="script-kicker" style="color: var(--accent-orange-deep); margin-bottom: 0.25rem;">
            <span>01 // The Core Leadership</span>
          </div>
          <h2 class="disciplines-headline">
            <span>The Minds Behind Blue Hour</span>
            <img src="assets/images/doodle_arrow.svg" alt="Arrow" class="doodle-arrow-icon">
          </h2>
        </div>
        <p style="font-family: var(--font-body); font-size: 0.98rem; color: var(--text-kraft-muted); max-width: 440px;">
          Engineering architecture and high-ROAS creative distribution led hands-on by our founding partners.
        </p>
      </div>

      <!-- Founders Polaroid Dossier Grid -->
      <div class="founders-dossier-grid">
        <?php foreach ($team as $idx => $member): ?>
          <div class="founder-dossier-card" style="position: relative; background: #FFFDF9; border: 1px solid var(--bg-kraft-border); border-radius: 6px; padding: 1.5rem 1.5rem 2rem; box-shadow: 0 18px 40px rgba(70,50,30,0.14); transform: rotate(<?= $idx === 0 ? '-1deg' : '1deg' ?>);">
            <span class="washi-tape washi-tape-top"></span>

            <div class="founder-dossier-inner">
              <!-- Polaroid Portrait Frame -->
              <div style="background: #F7EFE2; padding: 8px 8px 22px 8px; border: 1px solid #DFCEB4; border-radius: 3px; box-shadow: 0 6px 16px rgba(0,0,0,0.12); transform: rotate(-1.5deg);">
                <div style="width: 100%; aspect-ratio: 4/5; overflow: hidden; border-radius: 2px; background: #1A1512;">
                  <img src="<?= htmlspecialchars($member['image']) ?>?v=<?= file_exists($member['image']) ? filemtime($member['image']) : time() ?>" alt="<?= htmlspecialchars($member['name']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <span style="display: block; text-align: center; font-family: var(--font-hand); font-size: 1.05rem; font-weight: 700; color: #2B2118; margin-top: 6px;">
                  <?= htmlspecialchars($member['badge']) ?>
                </span>
              </div>

              <!-- Founder Info -->
              <div>
                <span style="display: inline-block; font-family: var(--font-mono); font-size: 0.68rem; font-weight: 700; color: var(--accent-orange-deep); background: #F4E8D3; padding: 0.2rem 0.6rem; border-radius: 4px; margin-bottom: 0.5rem;">
                  <?= htmlspecialchars($member['role']) ?>
                </span>
                <h3 style="font-family: var(--font-hand); font-size: 2.2rem; font-weight: 700; color: #211913; line-height: 1.05; margin-bottom: 0.4rem;">
                  <?= htmlspecialchars($member['name']) ?>
                </h3>

                <?php if (!empty($member['socials']['phone'])): ?>
                  <div style="font-family: var(--font-mono); font-size: 0.78rem; font-weight: 600; color: #5C4B3A; margin-bottom: 0.65rem;">
                    <i class="fa-solid fa-phone" style="color: var(--accent-orange-deep); margin-right: 4px;"></i>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $member['socials']['phone'])) ?>"><?= htmlspecialchars($member['socials']['phone']) ?></a>
                  </div>
                <?php endif; ?>

                <p style="font-family: var(--font-body); font-size: 0.88rem; color: #4A3E31; line-height: 1.55; margin-bottom: 1rem;">
                  <?= htmlspecialchars($member['bio']) ?>
                </p>
              </div>
            </div>

            <!-- Skills & Social Actions -->
            <div style="margin-top: 1.25rem; padding-top: 1rem; border-top: 1px dashed #DFCEB4;">
              <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 1.2rem;">
                <?php foreach ($member['skills'] as $skill): ?>
                  <span class="polaroid-tag"><?= htmlspecialchars($skill) ?></span>
                <?php endforeach; ?>
              </div>

              <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.75rem;">
                <div style="display: flex; gap: 0.5rem;">
                  <?php if (!empty($member['socials']['github'])): ?>
                    <a href="<?= htmlspecialchars($member['socials']['github']) ?>" target="_blank" rel="noopener noreferrer" style="width: 34px; height: 34px; border-radius: 50%; background: #EFE6D5; color: #2B2118; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-github"></i></a>
                  <?php endif; ?>
                  <?php if (!empty($member['socials']['linkedin'])): ?>
                    <a href="<?= htmlspecialchars($member['socials']['linkedin']) ?>" target="_blank" rel="noopener noreferrer" style="width: 34px; height: 34px; border-radius: 50%; background: #EFE6D5; color: #2B2118; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-linkedin-in"></i></a>
                  <?php endif; ?>
                  <?php if (!empty($member['socials']['instagram'])): ?>
                    <a href="<?= htmlspecialchars($member['socials']['instagram']) ?>" target="_blank" rel="noopener noreferrer" style="width: 34px; height: 34px; border-radius: 50%; background: #EFE6D5; color: #2B2118; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-instagram"></i></a>
                  <?php endif; ?>
                  <?php if (!empty($member['socials']['whatsapp'])): ?>
                    <a href="<?= htmlspecialchars($member['socials']['whatsapp']) ?>" target="_blank" rel="noopener noreferrer" style="width: 34px; height: 34px; border-radius: 50%; background: #EFE6D5; color: #25d366; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-whatsapp"></i></a>
                  <?php endif; ?>
                </div>

                <a href="contact.php?consult=<?= urlencode($member['name']) ?>" class="btn-orange-solid" style="padding: 0.55rem 1.25rem; font-size: 0.88rem;">
                  <span>Consult with <?= htmlspecialchars(explode(' ', $member['name'])[0]) ?></span>
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Torn Paper Divider (Kraft to Dark) -->
  <div class="torn-divider torn-kraft-bottom" aria-hidden="true"></div>

  <!-- ========================================================================
       3. STUDIO ETHOS & NON-NEGOTIABLE PRINCIPLES (DARK SECTION)
       ======================================================================== -->
  <section class="polaroids-showcase-section">
    <div class="container">
      <div class="specials-head-row">
        <div class="specials-title-wrap">
          <div class="script-kicker"><span>02 // Operational Ethos</span></div>
          <div class="specials-main-title">
            <span>Three Non-Negotiable Principles</span>
            <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon">
          </div>
        </div>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        <div style="background: rgba(32,27,23,0.9); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 2rem;">
          <div class="discipline-icon-box"><i class="fa-solid fa-microchip"></i></div>
          <h4 style="font-family: var(--font-hand); font-size: 1.85rem; color: #FFFDF9; margin-bottom: 0.5rem;">01. Zero Dependency Bloat</h4>
          <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">
            We don't sell sluggish pre-built templates. We write bespoke code (Laravel, React, Node.js, PHP 8+) that scores 95+ on Google PageSpeed and loads in sub-seconds.
          </p>
        </div>

        <div style="background: rgba(32,27,23,0.9); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 2rem;">
          <div class="discipline-icon-box"><i class="fa-solid fa-key"></i></div>
          <h4 style="font-family: var(--font-hand); font-size: 1.85rem; color: #FFFDF9; margin-bottom: 0.5rem;">02. 100% Client IP Ownership</h4>
          <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">
            No hostage code and no vendor lock-in. You own every line of code, Git repository, graphic asset, domain, and Meta ad account from day one.
          </p>
        </div>

        <div style="background: rgba(32,27,23,0.9); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 2rem;">
          <div class="discipline-icon-box"><i class="fa-solid fa-chart-line"></i></div>
          <h4 style="font-family: var(--font-hand); font-size: 1.85rem; color: #FFFDF9; margin-bottom: 0.5rem;">03. Obsession with Direct ROI</h4>
          <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">
            Vanity metrics don't pay bills. We measure our success by qualified inbound leads, e-commerce checkout conversion rates, and verified ad ROAS.
          </p>
        </div>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
