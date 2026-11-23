<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Blue Hour Creative Studios | Artisanal Web & Growth Studio';
$pageDesc = 'Blue Hour Creative Studios is an artisanal software engineering and viral growth studio in Guwahati & New Delhi, India. Handcrafted websites, luxury e-commerce, and high-ROAS marketing.';
$activePage = 'home';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- ========================================================================
       1. HERO SECTION (ROOT BARREL "MORE THAN A CAFE" AESTHETIC)
       ======================================================================== -->
  <section class="hero-craft-section" id="hero">
    <div class="container">
      <div class="hero-craft-grid">
        
        <!-- Left Hero Copy -->
        <div class="hero-main-title">
          <div class="hero-kicker-row">
            <span class="hero-kicker-text">More than a Studio</span>
            <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon">
          </div>

          <h1 class="hero-big-heading">
            Good Code. <br>
            Great Design. <br>
            <span style="position: relative; display: inline-block;">
              <span class="script-highlight">Iconic Brands.</span>
            </span>
          </h1>

          <p class="hero-subheading">
            Blue Hour Creative Studios bridges deep full-stack engineering with high-converting brand marketing &mdash; delivering bespoke digital storefronts, mobile architectures, and high-ROAS campaigns.
          </p>

          <div class="hero-cta-buttons">
            <a href="#flagships" class="btn-orange-solid">
              <span>Explore Our Crafts</span>
              <i class="fa-solid fa-arrow-right" style="font-size: 0.85rem;"></i>
            </a>
            <a href="contact.php" class="btn-craft-outline">
              <i class="fa-regular fa-calendar-check" style="color: var(--accent-orange);"></i>
              <span>Reserve a Brief</span>
            </a>
            <a href="brochure.php" class="btn-craft-outline" style="border-color: rgba(255,255,255,0.2);">
              <i class="fa-regular fa-file-pdf" style="color: var(--accent-orange);"></i>
              <span>Rate Card (PDF)</span>
            </a>
          </div>

          <!-- Quick Metrics Strip -->
          <div style="display: flex; gap: 2rem; flex-wrap: wrap; border-top: 1px dashed rgba(255,255,255,0.12); padding-top: 1.5rem;">
            <div>
              <strong style="font-family: var(--font-display); font-size: 1.6rem; color: #FFFDF9; display: block; line-height: 1;">50+</strong>
              <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Shipped Builds</span>
            </div>
            <div>
              <strong style="font-family: var(--font-display); font-size: 1.6rem; color: #FFFDF9; display: block; line-height: 1;">10M+</strong>
              <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Social Reach</span>
            </div>
            <div>
              <strong style="font-family: var(--font-display); font-size: 1.6rem; color: #FFFDF9; display: block; line-height: 1;">4.8X</strong>
              <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Average ROAS</span>
            </div>
            <div>
              <strong style="font-family: var(--font-display); font-size: 1.6rem; color: #FFFDF9; display: block; line-height: 1;">99.9%</strong>
              <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">System SLA</span>
            </div>
          </div>
        </div>

        <!-- Right Hero Pinned Kraft Sticky Note (Root Barrel Memo Pad) -->
        <div class="hero-notepad-wrap">
          <div class="hero-notepad">
            <!-- Translucent Washi Tape at Top -->
            <span class="washi-tape washi-tape-top"></span>

            <div class="notepad-title-bar">
              <span class="notepad-title">Studio Guarantee</span>
              <img src="assets/images/doodle_starburst.svg" alt="Star" style="width: 22px; height: 22px;">
            </div>

            <ul class="notepad-checklist">
              <li class="notepad-item"><i class="fa-solid fa-check"></i> 100% Bespoke Code</li>
              <li class="notepad-item"><i class="fa-solid fa-check"></i> 0% Page-Builder Bloat</li>
              <li class="notepad-item"><i class="fa-solid fa-check"></i> High-ROAS Commerce</li>
              <li class="notepad-item"><i class="fa-solid fa-check"></i> Sub-Second Edge Latency</li>
              <li class="notepad-item"><i class="fa-solid fa-check"></i> 1 Year Free Maintenance</li>
              <li class="notepad-item"><i class="fa-solid fa-check"></i> Direct Founder Onboarding</li>
            </ul>

            <div style="margin-top: 1.4rem; padding-top: 0.8rem; border-top: 1px dashed rgba(160, 130, 90, 0.4); text-align: center;">
              <span style="font-family: var(--font-hand); font-size: 1.1rem; color: #5C4B3A; font-weight: 700;">
                Guwahati &bull; New Delhi &bull; Pan-India
              </span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       TORN PAPER DIVIDER 1 (DARK TO KRAFT)
       ======================================================================== -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <!-- ========================================================================
       2. "EXPLORE OUR DISCIPLINES" (ROOT BARREL "EXPLORE OUR MENU" KRAFT SECTION)
       ======================================================================== -->
  <section class="kraft-disciplines-section" id="disciplines">
    <div class="container">
      
      <div class="section-head-kraft">
        <div>
          <div class="script-kicker" style="color: var(--accent-orange-deep); margin-bottom: 0.25rem;">
            <span>01 // Handcrafted Core Services</span>
          </div>
          <h2 class="disciplines-headline">
            <span>Explore Our Disciplines</span>
            <img src="assets/images/doodle_arrow.svg" alt="Arrow" class="doodle-arrow-icon">
          </h2>
        </div>
        <p style="font-family: var(--font-body); font-size: 0.98rem; color: var(--text-kraft-muted); max-width: 440px;">
          From raw code architecture to viral brand marketing &mdash; six specialized craft disciplines built under one studio roof.
        </p>
      </div>

      <!-- 6 Disciplines Grid -->
      <div class="disciplines-grid">
        
        <a href="/website-development/" class="discipline-card">
          <div class="discipline-icon-box">
            <i class="fa-solid fa-code"></i>
          </div>
          <h3 class="discipline-name">Web &amp; SaaS</h3>
          <span class="discipline-sub">Bespoke Code</span>
        </a>

        <a href="/ecommerce-development/" class="discipline-card">
          <div class="discipline-icon-box">
            <i class="fa-solid fa-bag-shopping"></i>
          </div>
          <h3 class="discipline-name">E-Commerce</h3>
          <span class="discipline-sub">High Conversion</span>
        </a>

        <a href="services.php#mobile" class="discipline-card">
          <div class="discipline-icon-box">
            <i class="fa-solid fa-mobile-screen-button"></i>
          </div>
          <h3 class="discipline-name">Mobile Apps</h3>
          <span class="discipline-sub">iOS &amp; Android</span>
        </a>

        <a href="/social-media-management/" class="discipline-card">
          <div class="discipline-icon-box">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h3 class="discipline-name">Social Growth</h3>
          <span class="discipline-sub">4.8X Ad ROAS</span>
        </a>

        <a href="/branding-design/" class="discipline-card">
          <div class="discipline-icon-box">
            <i class="fa-solid fa-palette"></i>
          </div>
          <h3 class="discipline-name">Branding</h3>
          <span class="discipline-sub">Luxury Identity</span>
        </a>

        <a href="/seo-digital-marketing/" class="discipline-card">
          <div class="discipline-icon-box">
            <i class="fa-solid fa-network-wired"></i>
          </div>
          <h3 class="discipline-name">Enterprise ERP</h3>
          <span class="discipline-sub">Fleet &amp; Portals</span>
        </a>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       TORN PAPER DIVIDER 2 (KRAFT TO DARK)
       ======================================================================== -->
  <div class="torn-divider torn-kraft-bottom" aria-hidden="true"></div>

  <!-- ========================================================================
       3. "TODAY'S FLAGSHIPS" (ROOT BARREL "TODAY'S SPECIALS" POLAROID SECTION)
       ======================================================================== -->
  <section class="polaroids-showcase-section" id="flagships">
    <div class="container">
      
      <div class="specials-head-row">
        <div class="specials-title-wrap">
          <div class="specials-main-title">
            <span>Today's Flagships</span>
            <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon">
          </div>
          <p class="specials-sub-title">
            Fresh builds, client <span class="circled-text">favourites</span>, and high-conversion creations just for you.
          </p>
        </div>

        <a href="works.php" class="btn-craft-outline">
          <span>Browse All 20+ Archive</span>
          <i class="fa-solid fa-arrow-right" style="font-size: 0.75rem; margin-left: 4px;"></i>
        </a>
      </div>

      <!-- 6 Authentic Tilted Polaroids Grid -->
      <div class="polaroids-grid">
        <?php foreach (array_slice($projects, 0, 6) as $idx => $proj): ?>
          <div class="polaroid-card" data-project-open="<?= htmlspecialchars($proj['id']) ?>" id="projCard_<?= htmlspecialchars($proj['id']) ?>">
            
            <!-- Translucent Masking Tape at Top -->
            <span class="washi-tape washi-tape-top"></span>

            <!-- Polaroid Photo Frame -->
            <div class="polaroid-photo-frame">
              <img src="<?= htmlspecialchars($proj['image']) ?>?v=<?= file_exists($proj['image']) ? filemtime($proj['image']) : time() ?>" alt="<?= htmlspecialchars($proj['title']) ?>" loading="lazy">
              <span class="polaroid-badge"><?= htmlspecialchars($proj['category_label'] ?? 'Flagship') ?></span>
              <span class="polaroid-stamp">PRJ // <?= sprintf('%02d', $idx + 1) ?></span>
            </div>

            <!-- Polaroid Lower Chin -->
            <div class="polaroid-chin">
              <span class="polaroid-client"><?= htmlspecialchars($proj['client'] ?? 'Client Confidential') ?></span>
              <h3 class="polaroid-title"><?= htmlspecialchars($proj['title']) ?></h3>
              <p class="polaroid-desc"><?= htmlspecialchars($proj['description']) ?></p>

              <div class="polaroid-tags">
                <?php foreach (array_slice($proj['tags'], 0, 3) as $tag): ?>
                  <span class="polaroid-tag"><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
              </div>

              <div class="polaroid-actions">
                <button type="button" class="btn-open-case" data-project-open="<?= htmlspecialchars($proj['id']) ?>">
                  <span>Inspect Blueprint</span>
                  <i class="fa-solid fa-arrow-right" style="font-size: 0.8rem; margin-left: 4px;"></i>
                </button>

                <?php if (!empty($proj['live']) && $proj['live'] !== '#'): ?>
                  <a href="<?= htmlspecialchars($proj['live']) ?>" target="_blank" rel="noopener noreferrer" class="btn-live-circle" title="Open Live Site" aria-label="Open Live Site" onclick="event.stopPropagation();">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                  </a>
                <?php endif; ?>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>

      <!-- Big Button to View Complete Archive -->
      <div style="text-align: center; margin-top: 4rem;">
        <a href="works.php" class="btn-orange-solid" style="padding: 1rem 2.6rem; font-size: 1.05rem;">
          <span>Explore All 20+ Digital Blueprints</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       4. "WHAT'S HAPPENING AT BLUE HOUR?" (ROOT BARREL EVENT TIMELINE SECTION)
       ======================================================================== -->
  <section class="timeline-section" id="timeline">
    <div class="container">
      <div class="timeline-grid">
        
        <!-- Left: Featured Spotlight -->
        <div>
          <div class="script-kicker" style="font-size: 1.6rem; margin-bottom: 0.5rem;">
            <span>Studio Milestones</span>
            <img src="assets/images/doodle_crown.svg" alt="Crown" style="width: 28px; height: 22px;">
          </div>
          <h2 style="font-family: var(--font-hand); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 700; color: #FFFDF9; line-height: 1.1; margin-bottom: 1rem;">
            What's Happening at Blue Hour?
          </h2>
          <p style="font-family: var(--font-body); font-size: 1rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 2rem;">
            Live launches, high-ROAS ad campaigns, bespoke e-commerce drops, and continuous SLA support. There is always something brewing in our studios.
          </p>

          <!-- Spotlight Card with Washi Tape -->
          <div style="position: relative; background: var(--bg-dark-card); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 1.5rem; box-shadow: 0 16px 40px rgba(0,0,0,0.5);">
            <span class="washi-tape washi-tape-top"></span>
            <div style="width: 100%; aspect-ratio: 16/9; overflow: hidden; border-radius: 4px; margin-bottom: 1rem;">
              <img src="assets/images/project_moh_studios.jpg" alt="MOH Atelier" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <span class="polaroid-tag" style="background: rgba(232,141,56,0.15); color: var(--accent-orange); border-color: rgba(232,141,56,0.3); margin-bottom: 0.5rem; display: inline-block;">FLAGSHIP LAUNCH</span>
            <h4 style="font-family: var(--font-hand); font-size: 1.6rem; font-weight: 700; color: #FFF; margin-bottom: 0.35rem;">MOH Atelier &bull; Ahmedabad</h4>
            <p style="font-family: var(--font-body); font-size: 0.88rem; color: var(--text-muted); line-height: 1.5;">
              Bespoke luxury bridal maison storefront featuring pure silk handloom showcase and private salon suite booking desk.
            </p>
          </div>
        </div>

        <!-- Right: Pinned Kraft Sheet (Event Timeline) -->
        <div>
          <div class="pinned-event-sheet">
            <!-- Red Pushpin at Top Right -->
            <img src="assets/images/doodle_pushpin.svg" alt="Pin" class="pinned-pushpin">

            <div class="pinned-title">Studio Timeline</div>

            <div class="event-timeline-list">
              
              <div class="event-row">
                <div class="event-badge-box">
                  <span class="event-date-num">2026</span>
                  <span class="event-date-mon">Q4 Drop</span>
                </div>
                <div class="event-info">
                  <h5>D2C Modest &amp; Handloom Drops</h5>
                  <p>Shipped Pahervesh (Jaipur Cotton), TehNoor Veils (UAE Abayas), and Cup2Eat (Edible Innovation).</p>
                </div>
              </div>

              <div class="event-row">
                <div class="event-badge-box">
                  <span class="event-date-num">2026</span>
                  <span class="event-date-mon">Q3 Drop</span>
                </div>
                <div class="event-info">
                  <h5>Haute Couture &amp; Royal Groomswear</h5>
                  <p>Architected MOH Atelier (Ahmedabad) &amp; Raahat by Paritha (Chennai &amp; Bangalore).</p>
                </div>
              </div>

              <div class="event-row">
                <div class="event-badge-box">
                  <span class="event-date-num">2026</span>
                  <span class="event-date-mon">Q2 Drop</span>
                </div>
                <div class="event-info">
                  <h5>Heritage Hospitality Engine</h5>
                  <p>Live room reservation suite &amp; pilgrimage tour desk for historic T.M. Hotel Madurai (Est. 1950).</p>
                </div>
              </div>

              <div class="event-row">
                <div class="event-badge-box">
                  <span class="event-date-num">24/7</span>
                  <span class="event-date-mon">Active</span>
                </div>
                <div class="event-info">
                  <h5>Production SLA &amp; Founder Support</h5>
                  <p>Zero downtime guarantees, rapid security patching, and automated performance monitors.</p>
                </div>
              </div>

            </div>

            <div style="margin-top: 2rem; text-align: center;">
              <a href="works.php" class="btn-orange-solid" style="padding: 0.75rem 1.75rem; font-size: 0.92rem; width: 100%; justify-content: center;">
                <span>View Full Production Archive</span>
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       5. "STUDIO MOMENTS / CLIENT WALL" (ROOT BARREL "CAFE MOMENTS" STYLE)
       ======================================================================== -->
  <section style="background: var(--bg-dark); padding: 5rem 0 4.5rem; position: relative;">
    <div class="container">
      
      <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-bottom: 2.5rem;">
        <div>
          <div class="script-kicker" style="font-size: 1.6rem;">
            <span>Client Moments</span>
            <img src="assets/images/doodle_heart.svg" alt="Heart" style="width: 22px; height: 20px;">
          </div>
          <h2 style="font-family: var(--font-hand); font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 700; color: #FFFDF9; line-height: 1.1;">
            A Peek into Our Live Partner Brands.
          </h2>
        </div>
        <a href="works.php" class="script-highlight" style="font-size: 1.25rem; text-decoration: none;">
          Explore All Partner Brands &rarr;
        </a>
      </div>

      <!-- Partner Logos Strip -->
      <div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 1.25rem;">
        
        <a href="https://paherveshbyakshree.vercel.app/" target="_blank" rel="noopener noreferrer" style="background: #FCE4E2; border-radius: 8px; padding: 1rem; display: flex; align-items: center; justify-content: center; aspect-ratio: 1; box-shadow: 0 4px 14px rgba(0,0,0,0.3); transition: transform 0.2s ease;">
          <img src="assets/images/client_pahervesh_sq.jpg" alt="Pahervesh" style="max-height: 75%; object-fit: contain;">
        </a>

        <a href="https://tehnoorveils.vercel.app/" target="_blank" rel="noopener noreferrer" style="background: #F1E7DD; border-radius: 8px; padding: 1rem; display: flex; align-items: center; justify-content: center; aspect-ratio: 1; box-shadow: 0 4px 14px rgba(0,0,0,0.3); transition: transform 0.2s ease;">
          <img src="assets/images/client_tehnoor_veils_sq.jpg" alt="TehNoor Veils" style="max-height: 75%; object-fit: contain;">
        </a>

        <a href="https://mohstudios.vercel.app/" target="_blank" rel="noopener noreferrer" style="background: #140E0A; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 1rem; display: flex; align-items: center; justify-content: center; aspect-ratio: 1; box-shadow: 0 4px 14px rgba(0,0,0,0.3); transition: transform 0.2s ease;">
          <img src="assets/images/client_moh_studios_sq.svg" alt="MOH Atelier" style="max-height: 75%; object-fit: contain;">
        </a>

        <a href="https://tmhotel.vercel.app/" target="_blank" rel="noopener noreferrer" style="background: #16080D; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 1rem; display: flex; align-items: center; justify-content: center; aspect-ratio: 1; box-shadow: 0 4px 14px rgba(0,0,0,0.3); transition: transform 0.2s ease;">
          <img src="assets/images/client_tm_hotel_sq.svg" alt="TM Hotel" style="max-height: 75%; object-fit: contain;">
        </a>

        <a href="https://raahatbyparitha-two.vercel.app/" target="_blank" rel="noopener noreferrer" style="background: #0E0B0A; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 1rem; display: flex; align-items: center; justify-content: center; aspect-ratio: 1; box-shadow: 0 4px 14px rgba(0,0,0,0.3); transition: transform 0.2s ease;">
          <img src="assets/images/client_raahat_sq.svg" alt="Raahat by Paritha" style="max-height: 75%; object-fit: contain;">
        </a>

        <a href="https://cup-2-eat-ochre.vercel.app/" target="_blank" rel="noopener noreferrer" style="background: #081B13; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 1rem; display: flex; align-items: center; justify-content: center; aspect-ratio: 1; box-shadow: 0 4px 14px rgba(0,0,0,0.3); transition: transform 0.2s ease;">
          <img src="assets/images/client_cup2eat_sq.svg" alt="Cup2Eat" style="max-height: 75%; object-fit: contain;">
        </a>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       TORN PAPER DIVIDER 3 (DARK TO KRAFT)
       ======================================================================== -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <!-- ========================================================================
       6. "RESERVE YOUR BRIEF" (ROOT BARREL "RESERVE TABLE" KRAFT SECTION)
       ======================================================================== -->
  <section class="reserve-table-section" id="contact">
    <div class="container">
      
      <div class="reserve-table-card">
        <span class="washi-tape washi-tape-top"></span>

        <div class="reserve-copy">
          <div class="script-kicker" style="color: var(--accent-orange-deep); margin-bottom: 0.35rem;">
            <span>Let's Build Together</span>
            <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon" style="width: 28px; height: 22px;">
          </div>
          <h2>Reserve Your Digital Build</h2>
          <p>
            Planning a product launch, website redesign, custom e-commerce store, or viral social media campaign? We'd love to host your brand vision. Submit a brief or speak directly with our founders today.
          </p>
        </div>

        <div class="reserve-actions">
          <a href="contact.php" class="btn-orange-solid" style="padding: 1rem 2.25rem;">
            <span>Book Founder Consultation</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Studios,%20I%20would%20like%20to%20discuss%20a%20project" target="_blank" rel="noopener noreferrer" class="btn-craft-outline" style="color: #2B2118; border-color: rgba(90,70,50,0.45); padding: 0.95rem 1.85rem;">
            <i class="fa-brands fa-whatsapp" style="color: #25d366; font-size: 1.15rem;"></i>
            <span>Instant WhatsApp Desk</span>
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       TORN PAPER DIVIDER 4 (KRAFT TO DARK)
       ======================================================================== -->
  <div class="torn-divider torn-dark-top" aria-hidden="true"></div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
