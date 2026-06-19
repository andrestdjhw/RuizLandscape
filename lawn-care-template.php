<?php
/**
 * Template Name: Service — Lawn Care & Maintenance
 * Template Post Type: page
 *
 * SEO (configúralo en tu plugin de SEO / Yoast / Rank Math):
 *   Title:       Lawn Care & Maintenance Service in Orange County | Ruiz Landscape
 *   Description: Reliable, eco-friendly lawn care in Orange, LA & Imperial counties — mowing,
 *                fertilization, weed control & seasonal upkeep. Schedule service today.
 *   Keywords:    lawn care service Orange County, lawn maintenance Irvine,
 *                organic lawn care Southern California, weed control Orange County,
 *                lawn fertilization service
 */

/* ══════════════════════════════════════════════
   IMÁGENES DE LA PÁGINA
   Pega las URL de la Biblioteca de Medios (Medios → "File URL").
══════════════════════════════════════════════ */
$lc_images = array(
  'hero-bg' => '/wp-content/uploads/2026/06/LawnCareMaintenance-scaled.jpg', // fondo del hero
);

/* ── Qué incluye (Sección 2) ── */
$lc_included = array(
  array( 't' => 'Mowing and edging',                  'd' => 'On a consistent, dependable schedule.' ),
  array( 't' => 'Fertilization programs',             'd' => 'Matched to your lawn and the season.' ),
  array( 't' => 'Weed control and prevention',        'd' => 'Keeping weeds out so your lawn stays clean and healthy.' ),
  array( 't' => 'Seasonal cleanup and upkeep',        'd' => 'Year-round care that keeps your property looking its best.' ),
  array( 't' => 'Organic and eco-friendly options',   'd' => 'Sustainable lawn care products and methods on request.' ),
  array( 't' => 'Irrigation checks',                  'd' => 'Making sure your lawn stays properly watered.' ),
);

/* ── FAQ (Sección 3) ── */
$lc_faqs = array(
  array(
    'q' => 'Do you offer recurring maintenance plans?',
    'a' => 'Yes. We offer regular maintenance schedules so your landscape stays healthy and beautiful year-round — with the same trusted team every visit.',
  ),
  array(
    'q' => 'Do you use organic or eco-friendly products?',
    'a' => "We do. Organic and eco-friendly lawn care is part of our sustainable approach, and we're happy to build a program around it.",
  ),
  array(
    'q' => "Can you maintain a landscape you didn't install?",
    'a' => 'Of course. We maintain landscapes of all kinds, whether we designed them or not.',
  ),
);

get_header(); ?>

<!-- ══════════════════════════════════════════════
     JSON-LD SCHEMA
══════════════════════════════════════════════ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.ruizlandscape.com/services/lawn-care-maintenance/#service",
      "name": "Lawn Care & Maintenance",
      "serviceType": "Lawn Care and Maintenance",
      "url": "https://www.ruizlandscape.com/services/lawn-care-maintenance",
      "description": "Reliable, eco-friendly lawn care in Orange, LA & Imperial counties — mowing, fertilization, weed control & seasonal upkeep.",
      "provider": { "@id": "https://www.ruizlandscape.com/#org" },
      "areaServed": ["Orange County", "Los Angeles County", "Imperial County"]
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://www.ruizlandscape.com/#org",
      "name": "Ruiz Landscape Service, Inc.",
      "url": "https://www.ruizlandscape.com",
      "telephone": "+1-949-305-1605",
      "email": "office@RuizLandscape.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "6 McLaren, Suite H",
        "addressLocality": "Irvine",
        "addressRegion": "CA",
        "postalCode": "92618",
        "addressCountry": "US"
      },
      "areaServed": ["Orange County", "Los Angeles County", "Imperial County"]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.ruizlandscape.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.ruizlandscape.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Lawn Care & Maintenance", "item": "https://www.ruizlandscape.com/services/lawn-care-maintenance" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Do you offer recurring maintenance plans?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We offer regular maintenance schedules so your landscape stays healthy and beautiful year-round — with the same trusted team every visit." }
        },
        {
          "@type": "Question",
          "name": "Do you use organic or eco-friendly products?",
          "acceptedAnswer": { "@type": "Answer", "text": "We do. Organic and eco-friendly lawn care is part of our sustainable approach, and we're happy to build a program around it." }
        },
        {
          "@type": "Question",
          "name": "Can you maintain a landscape you didn't install?",
          "acceptedAnswer": { "@type": "Answer", "text": "Of course. We maintain landscapes of all kinds, whether we designed them or not." }
        }
      ]
    }
  ]
}
</script>

<main id="rl-svc">
<script>
/* Activa el modo reveal antes de pintar las secciones (sin parpadeo). */
(function () {
  try {
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!reduce) document.getElementById('rl-svc').classList.add('rl-reveal-on');
  } catch (e) {}
})();
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;1,400&family=Barlow+Condensed:wght@600;700;800&display=swap');

/* ── Offset por el navbar fijo ── */
body { padding-top: 104px !important; }

/* ── Base scope ── */
#rl-svc {
  /* ══ PALETA (basada en el logo) ════════════════
     Cambia un valor aquí y se actualiza toda la página. */
  --rl-green:        #3d5a2a;
  --rl-green-dark:   #1a2410;
  --rl-green-mid:    #4a6e32;
  --rl-green-light:  #8fb870;

  --rl-accent:       #996a6c;   /* CAFÉ (Smoky Rose) */
  --rl-accent-rgb:   153, 106, 108;
  --rl-accent-hover: #ab7d7f;
  --rl-on-accent:    #ffffff;

  --rl-cream:        #f4f1ea;

  font-family: 'Barlow', sans-serif;
  color: #2a2a20;
  overflow-x: hidden;
}

/* ── Utilidades ── */
#rl-svc .rsv-section { padding: 92px 0; }
#rl-svc .rsv-container {
  max-width: 1080px;
  margin: 0 auto;
  padding: 0 32px;
  width: 100%;
}

#rl-svc .rl-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--rl-green-mid);
  margin-bottom: 16px;
}
#rl-svc .rl-eyebrow::before {
  content: '';
  width: 24px;
  height: 2px;
  background: var(--rl-accent);
}

#rl-svc .rl-h2 {
  font-family: 'Barlow Condensed', sans-serif;
  font-size: clamp(28px, 3.5vw, 44px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.08;
  color: var(--rl-green-dark);
}

#rl-svc .rl-body-text { font-size: 16px; line-height: 1.75; color: #4a4a3a; }
#rl-svc .rl-divider { width: 48px; height: 3px; background: var(--rl-accent); margin: 20px 0; }

#rl-svc .rsv-head { text-align: center; margin-bottom: 52px; }
#rl-svc .rsv-head .rl-eyebrow { justify-content: center; }
#rl-svc .rsv-head .rl-divider { margin: 20px auto 0; }

/* Botones (café = primario; secundario contorno) */
#rl-svc .rl-btn-primary,
#rl-svc .rl-btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: 'Barlow', sans-serif;
  font-size: 12.5px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 15px 28px;
  text-decoration: none;
  border: 2px solid var(--rl-accent);
  transition: background 0.18s, color 0.18s, border-color 0.18s, transform 0.15s;
}
#rl-svc .rl-btn-primary { background: var(--rl-accent); color: var(--rl-on-accent); }
#rl-svc .rl-btn-primary:hover { background: var(--rl-accent-hover); border-color: var(--rl-accent-hover); transform: translateY(-2px); }
#rl-svc .rl-btn-secondary { background: transparent; border-color: rgba(255,255,255,0.4); color: rgba(255,255,255,0.85); }
#rl-svc .rl-btn-secondary:hover { background: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.7); }

/* ══ SECTION 1 — HERO ══════════════════════════ */
#rl-svc .rsv-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: center;
  background-color: var(--rl-green-dark);
  overflow: hidden;
}
#rl-svc .rsv-hero-bg {
  position: absolute;
  inset: 0;
  background-image: url('<?php echo esc_url( $lc_images['hero-bg'] ); ?>');
  background-size: cover;
  background-position: center;
}
#rl-svc .rsv-hero-overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(20,32,10,0.55) 0%, rgba(20,32,10,0.78) 100%),
    radial-gradient(120% 90% at 30% 40%, rgba(20,32,10,0.30) 0%, rgba(20,32,10,0.82) 100%);
}
#rl-svc .rsv-hero-content {
  position: relative;
  z-index: 2;
  max-width: 820px;
  margin: 0 auto;
  padding: 84px 32px;
  text-align: center;
}
#rl-svc .rsv-hero-content .rl-eyebrow { color: var(--rl-accent); justify-content: center; }
#rl-svc .rsv-hero h1 {
  font-family: 'Barlow Condensed', sans-serif;
  font-size: clamp(32px, 5vw, 58px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.01em;
  line-height: 1.05;
  color: #ffffff;
  margin-bottom: 20px;
}
#rl-svc .rsv-hero h1 span { color: var(--rl-green-light); }
#rl-svc .rsv-hero-sub {
  font-size: clamp(15px, 1.7vw, 17.5px);
  line-height: 1.7;
  color: rgba(255,255,255,0.78);
  max-width: 720px;
  margin: 0 auto 32px;
}

/* ══ SECTION 2 — WHAT'S INCLUDED ═══════════════ */
#rl-svc .rsv-included { background: #ffffff; }
#rl-svc .rsv-incl-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 22px;
}
#rl-svc .rsv-incl-item {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  background: #ffffff;
  border: 1px solid #e7e3d8;
  border-left: 3px solid var(--rl-accent);
  border-radius: 4px;
  padding: 24px 26px;
}
#rl-svc .rsv-incl-icon {
  flex-shrink: 0;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--rl-cream);
  color: var(--rl-green);
}
#rl-svc .rsv-incl-icon svg { width: 20px; height: 20px; }
#rl-svc .rsv-incl-item h3 {
  font-family: 'Barlow Condensed', sans-serif;
  font-size: 19px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.15;
  color: var(--rl-green-dark);
  margin-bottom: 6px;
}
#rl-svc .rsv-incl-item p { font-size: 14px; line-height: 1.6; color: #5a5a48; }

/* ══ SECTION 3 — FAQ (mismo estilo que el home) ══ */
#rl-svc .rsv-faq { background: var(--rl-cream); }
#rl-svc .rl-faq-inner {
  display: grid;
  grid-template-columns: 1fr 1.8fr;
  gap: 80px;
  align-items: start;
}
#rl-svc .rl-faq-left { position: sticky; top: 120px; }
#rl-svc .rl-faq-left .rl-body-text { font-size: 15px; }
#rl-svc .rl-faq-list { display: flex; flex-direction: column; gap: 2px; }
#rl-svc .rl-faq-item {
  border: 1px solid #e8e4da;
  background: #fff;
}
#rl-svc .rl-faq-q {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  padding: 20px 24px;
  background: none;
  border: none;
  text-align: left;
  cursor: pointer;
  font-family: 'Barlow', sans-serif;
  font-size: 15px;
  font-weight: 600;
  color: var(--rl-green-dark);
  transition: background 0.15s;
}
#rl-svc .rl-faq-q:hover { background: #f7f5f0; }
#rl-svc .rl-faq-icon {
  width: 22px;
  height: 22px;
  border: 2px solid var(--rl-green);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--rl-green);
  font-size: 16px;
  font-weight: 400;
  line-height: 1;
  transition: background 0.15s, color 0.15s;
  user-select: none;
}
#rl-svc .rl-faq-item.open .rl-faq-icon {
  background: var(--rl-green);
  color: #fff;
}
#rl-svc .rl-faq-a {
  display: none;
  padding: 0 24px 20px;
  font-size: 14.5px;
  line-height: 1.75;
  color: #5a5a48;
  border-top: 1px solid #e8e4da;
}
#rl-svc .rl-faq-item.open .rl-faq-a { display: block; padding-top: 18px; }

/* ══ RESPONSIVE ════════════════════════════════ */
@media (max-width: 860px) {
  #rl-svc .rl-faq-inner { grid-template-columns: 1fr; gap: 40px; }
  #rl-svc .rl-faq-left { position: static; }
}
@media (max-width: 760px) {
  #rl-svc .rsv-incl-grid { grid-template-columns: 1fr; }
}
@media (max-width: 620px) {
  #rl-svc .rsv-section { padding: 66px 0; }
}

/* ══ SCROLL REVEAL ═════════════════════════════ */
@media (prefers-reduced-motion: no-preference) {
  #rl-svc.rl-reveal-on .rsv-reveal {
    opacity: 0;
    transform: translateY(32px);
    transition: opacity 0.7s cubic-bezier(0.16, 0.84, 0.34, 1),
                transform 0.7s cubic-bezier(0.16, 0.84, 0.34, 1);
  }
  #rl-svc.rl-reveal-on .rsv-reveal.rl-in {
    opacity: 1;
    transform: none;
  }
}
</style>


<!-- ══════════════════════════════════════════════
     SECTION 1 — HERO
══════════════════════════════════════════════ -->
<section class="rsv-hero">
  <div class="rsv-hero-bg"></div>
  <div class="rsv-hero-overlay"></div>
  <div class="rsv-hero-content">
    <span class="rl-eyebrow rsv-reveal">Service</span>
    <h1 class="rsv-reveal">Lawn care that keeps your landscape <span>at its best.</span></h1>
    <p class="rsv-hero-sub rsv-reveal">
      Let us keep your lawn looking its best with comprehensive care — mowing, fertilization,
      weed control, and seasonal upkeep — delivered consistently by a team that treats your
      property like its own.
    </p>
    <div class="rsv-reveal">
      <a href="/contact" class="rl-btn-primary">
        Request a Free Estimate
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 2 — WHAT'S INCLUDED
══════════════════════════════════════════════ -->
<section class="rsv-section rsv-included">
  <div class="rsv-container">
    <div class="rsv-head">
      <span class="rl-eyebrow rsv-reveal">What's Included</span>
      <h2 class="rl-h2 rsv-reveal">What's included.</h2>
      <div class="rl-divider rsv-reveal"></div>
    </div>

    <div class="rsv-incl-grid">
      <?php foreach ( $lc_included as $item ) : ?>
        <div class="rsv-incl-item rsv-reveal">
          <span class="rsv-incl-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
          </span>
          <div>
            <h3><?php echo esc_html( $item['t'] ); ?></h3>
            <p><?php echo esc_html( $item['d'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 3 — FAQ (mismo estilo que el home)
══════════════════════════════════════════════ -->
<section class="rsv-section rsv-faq" aria-labelledby="svc-faq-heading">
  <div class="rsv-container">
    <div class="rl-faq-inner">

      <div class="rl-faq-left">
        <span class="rl-eyebrow rsv-reveal">FAQ</span>
        <h2 class="rl-h2 rsv-reveal" id="svc-faq-heading">Frequently asked questions.</h2>
        <div class="rl-divider rsv-reveal"></div>
        <p class="rl-body-text rsv-reveal">
          Can't find your answer here? <a href="/contact" style="color:var(--rl-green);font-weight:600;">Reach out directly</a> — we're happy to help.
        </p>
      </div>

      <div class="rl-faq-list rsv-reveal">
        <?php foreach ( $lc_faqs as $i => $faq ) : ?>
          <div class="rl-faq-item<?php echo ( 0 === $i ) ? ' open' : ''; ?>">
            <button class="rl-faq-q" aria-expanded="<?php echo ( 0 === $i ) ? 'true' : 'false'; ?>">
              <?php echo esc_html( $faq['q'] ); ?>
              <span class="rl-faq-icon"><?php echo ( 0 === $i ) ? '&minus;' : '+'; ?></span>
            </button>
            <div class="rl-faq-a"><?php echo esc_html( $faq['a'] ); ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     FAQ ACCORDION — VANILLA JS (igual que el home)
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-svc');
  if (!root) return;
  var qs = root.querySelectorAll('.rl-faq-q');
  qs.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.rl-faq-item');
      var isOpen = item.classList.contains('open');

      // Cierra todos
      root.querySelectorAll('.rl-faq-item').forEach(function (el) {
        el.classList.remove('open');
        el.querySelector('.rl-faq-q').setAttribute('aria-expanded', 'false');
        el.querySelector('.rl-faq-icon').textContent = '+';
      });

      // Abre el clicado si estaba cerrado
      if (!isOpen) {
        item.classList.add('open');
        this.setAttribute('aria-expanded', 'true');
        item.querySelector('.rl-faq-icon').textContent = '\u2212';
      }
    });
  });
})();
</script>


<!-- ══════════════════════════════════════════════
     SCROLL REVEAL — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-svc');
  if (!root || !root.classList.contains('rl-reveal-on')) return;

  var targets = Array.prototype.slice.call(root.querySelectorAll('.rsv-reveal'));
  if (!targets.length) return;

  function revealAll() { targets.forEach(function (el) { el.classList.add('rl-in'); }); }
  if (!('IntersectionObserver' in window)) { revealAll(); return; }

  try {
    targets.forEach(function (el) {
      var i = 0, sib = el.previousElementSibling;
      while (sib) {
        if (sib.matches && sib.matches('.rsv-reveal')) i++;
        sib = sib.previousElementSibling;
      }
      el._d = Math.min(i, 6) * 90;
    });

    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        el.style.transitionDelay = el._d + 'ms';
        el.classList.add('rl-in');
        el.addEventListener('transitionend', function clear() {
          el.style.transitionDelay = '';
          el.removeEventListener('transitionend', clear);
        });
        obs.unobserve(el);
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

    targets.forEach(function (el) { obs.observe(el); });
  } catch (e) {
    revealAll();
  }
})();
</script>

<?php get_footer(); ?>