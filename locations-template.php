<?php
/**
 * Template Name: Locations
 * Template Post Type: page
 */

/* ══════════════════════════════════════════════
   UBICACIONES
   Edita / agrega condados aquí. Cada uno genera una tarjeta con
   su mapa de Google embebido (sin API key), botón "Open in Google
   Maps" y "Get directions".

   • name        → título de la tarjeta
   • badge       → etiqueta superior (deja '' para ocultarla)
   • badge_color → color de la etiqueta ('' usa el verde por defecto)
   • query       → lo que se busca en Google Maps (centro del mapa)
   • desc        → texto descriptivo
══════════════════════════════════════════════ */
$rl_locations = array(
  array(
    'name'        => 'Orange County',
    'badge'       => 'Headquarters',
    'badge_color' => '',
    'query'       => 'Orange County, CA',
    'desc'        => 'Our home base. Headquartered in Irvine, serving Newport Beach, Irvine, Anaheim, Huntington Beach, and the full OC.',
  ),
  array(
    'name'        => 'Los Angeles County',
    'badge'       => 'Full Service',
    'badge_color' => '#5a7a3a',
    'query'       => 'Los Angeles County, CA',
    'desc'        => 'Full-service landscaping across the LA metro — from coastal communities to inland valleys.',
  ),
  array(
    'name'        => 'Imperial County',
    'badge'       => 'Desert Climate',
    'badge_color' => '#7a6030',
    'query'       => 'Imperial County, CA',
    'desc'        => "Desert-climate landscaping built for Imperial County's heat, with water-wise design front and center.",
  ),
);

get_header(); ?>

<!-- ══════════════════════════════════════════════
     JSON-LD — áreas servidas
══════════════════════════════════════════════ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "@id": "https://www.ruizlandscape.com/#business",
  "name": "Ruiz Landscape Service, Inc.",
  "url": "https://www.ruizlandscape.com",
  "telephone": "+1-949-305-1605",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "15791 Rockfield Blvd Ste O",
    "addressLocality": "Irvine",
    "addressRegion": "CA",
    "postalCode": "92618",
    "addressCountry": "US"
  },
  "areaServed": [
    { "@type": "County", "name": "Orange County" },
    { "@type": "County", "name": "Los Angeles County" },
    { "@type": "County", "name": "Imperial County" }
  ]
}
</script>

<main id="rl-locations">
<style>
/* ══════════════════════════════════════════════
   LOCATIONS PAGE STYLES
══════════════════════════════════════════════ */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&display=swap');

body { padding-top: 104px !important; }

#rl-locations {
  /* Paleta de marca (igual que el home) */
  --rl-green:        #3d5a2a;
  --rl-green-dark:   #1a2410;
  --rl-green-mid:    #4a6e32;
  --rl-green-light:  #8fb870;
  --rl-accent:       #996a6c;
  --rl-accent-rgb:   153, 106, 108;
  --rl-accent-hover: #ab7d7f;
  --rl-on-accent:    #ffffff;
  --rl-cream:        #f4f1ea;

  font-family: 'Montserrat', sans-serif;
  color: #2a2a20;
  overflow-x: hidden;
}

#rl-locations .rl-container {
  max-width: 1760px;
  margin: 0 auto;
  padding: 0 32px;
  width: 100%;
}

/* ── Encabezado / intro ── */
#rl-locations .rl-loc-intro {
  background: var(--rl-cream);
  padding: 80px 0 56px;
  text-align: center;
}

#rl-locations .rl-eyebrow {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--rl-green-mid);
  margin-bottom: 16px;
}

#rl-locations .rl-eyebrow::before {
  content: '';
  width: 24px;
  height: 2px;
  background: var(--rl-accent);
}

#rl-locations .rl-h2 {
  font-size: clamp(23px, 2.8vw, 33px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.1;
  color: var(--rl-green-dark);
}

#rl-locations .rl-divider {
  width: 48px;
  height: 3px;
  background: var(--rl-accent);
  margin: 20px auto;
}

#rl-locations .rl-body-text {
  font-size: 16px;
  line-height: 1.75;
  color: #4a4a3a;
  max-width: 640px;
  margin: 0 auto;
}

/* ── Grid de ubicaciones ── */
#rl-locations .rl-loc-section { padding: 64px 0 88px; background: #ffffff; }

#rl-locations .rl-loc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

#rl-locations .rl-loc-card {
  display: flex;
  flex-direction: column;
  background: #ffffff;
  border: 1px solid #e0dbd0;
  overflow: hidden;
  transition: transform 0.3s cubic-bezier(0.2,0.7,0.2,1), box-shadow 0.3s ease, border-color 0.2s ease;
}

#rl-locations .rl-loc-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 24px 38px -18px rgba(26,36,16,0.4);
  border-color: var(--rl-green);
}

/* Mapa embebido */
#rl-locations .rl-loc-map {
  position: relative;
  width: 100%;
  height: 240px;
  background: #e9e5dc;
  border-bottom: 3px solid var(--rl-accent);
}

#rl-locations .rl-loc-map iframe {
  width: 100%;
  height: 100%;
  border: 0;
  display: block;
  filter: saturate(0.92);
}

/* Cuerpo de la tarjeta */
#rl-locations .rl-loc-body {
  display: flex;
  flex-direction: column;
  flex: 1;
  padding: 28px 28px 30px;
}

#rl-locations .rl-loc-badge {
  display: inline-block;
  align-self: flex-start;
  background: var(--rl-green);
  color: #fff;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 4px 10px;
  margin-bottom: 18px;
}

#rl-locations .rl-loc-title {
  font-size: 22px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  color: var(--rl-green-dark);
  line-height: 1.2;
  margin: 0 0 12px;
}

#rl-locations .rl-loc-desc {
  font-size: 14px;
  line-height: 1.7;
  color: #5a5a48;
  margin: 0 0 22px;
  flex: 1;
}

/* Acciones */
#rl-locations .rl-loc-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  align-items: center;
}

#rl-locations .rl-loc-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: var(--rl-accent);
  color: var(--rl-on-accent);
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 11px 18px;
  text-decoration: none;
  border: 2px solid var(--rl-accent);
  transition: background 0.18s, color 0.18s;
}

#rl-locations .rl-loc-btn:hover {
  background: transparent;
  color: var(--rl-accent);
}

#rl-locations .rl-loc-dir {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--rl-green);
  text-decoration: none;
  border-bottom: 2px solid var(--rl-accent);
  padding-bottom: 2px;
  transition: color 0.15s;
}

#rl-locations .rl-loc-dir:hover { color: var(--rl-accent); }

/* ── CTA inferior ── */
#rl-locations .rl-loc-cta {
  background: var(--rl-green-dark);
  text-align: center;
  padding: 64px 32px;
}

#rl-locations .rl-loc-cta h3 {
  font-size: clamp(20px, 2.4vw, 28px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  color: #fff;
  margin: 0 0 12px;
}

#rl-locations .rl-loc-cta p {
  font-size: 15px;
  color: rgba(255,255,255,0.72);
  max-width: 520px;
  margin: 0 auto 28px;
  line-height: 1.6;
}

#rl-locations .rl-loc-cta a {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: var(--rl-accent);
  color: #fff;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 14px 28px;
  text-decoration: none;
  border: 2px solid var(--rl-accent);
  transition: background 0.18s, color 0.18s;
}

#rl-locations .rl-loc-cta a:hover { background: var(--rl-accent-hover); border-color: var(--rl-accent-hover); }

/* ── Responsive ── */
@media (max-width: 1024px) {
  #rl-locations .rl-loc-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 760px) {
  #rl-locations .rl-loc-grid { grid-template-columns: 1fr; }
}

@media (max-width: 560px) {
  #rl-locations .rl-container { padding: 0 20px; }
  #rl-locations .rl-loc-intro { padding: 56px 0 40px; }
  #rl-locations .rl-loc-section { padding: 48px 0 64px; }
}
</style>

<!-- ══════════════════════════════════════════════
     INTRO
══════════════════════════════════════════════ -->
<section class="rl-loc-intro" aria-labelledby="loc-heading">
  <div class="rl-container">
    <span class="rl-eyebrow">Service Areas</span>
    <h2 class="rl-h2" id="loc-heading">Where we work across Southern California.</h2>
    <div class="rl-divider"></div>
    <p class="rl-body-text">
      From our headquarters in Irvine, Ruiz Landscape brings eco-conscious landscaping to homeowners across three Southern California counties. Find your area on the map below.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     LOCATION CARDS (Google Maps embebido)
══════════════════════════════════════════════ -->
<section class="rl-loc-section">
  <div class="rl-container">
    <div class="rl-loc-grid">

      <?php foreach ( $rl_locations as $loc ) :
        $q     = rawurlencode( $loc['query'] );
        $embed = 'https://www.google.com/maps?q=' . $q . '&output=embed';
        $open  = 'https://www.google.com/maps/search/?api=1&query=' . $q;
        $dir   = 'https://www.google.com/maps/dir/?api=1&destination=' . $q;
        $badge_style = ! empty( $loc['badge_color'] ) ? ' style="background:' . esc_attr( $loc['badge_color'] ) . ';"' : '';
      ?>
        <article class="rl-loc-card">
          <div class="rl-loc-map">
            <iframe
              src="<?php echo esc_url( $embed ); ?>"
              title="Map of <?php echo esc_attr( $loc['name'] ); ?>"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen>
            </iframe>
          </div>

          <div class="rl-loc-body">
            <?php if ( ! empty( $loc['badge'] ) ) : ?>
              <span class="rl-loc-badge"<?php echo $badge_style; ?>><?php echo esc_html( $loc['badge'] ); ?></span>
            <?php endif; ?>

            <h3 class="rl-loc-title"><?php echo esc_html( $loc['name'] ); ?></h3>
            <p class="rl-loc-desc"><?php echo esc_html( $loc['desc'] ); ?></p>

            <div class="rl-loc-actions">
              <a href="<?php echo esc_url( $open ); ?>" target="_blank" rel="noreferrer" class="rl-loc-btn">
                Open in Google Maps
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
              </a>
              <a href="<?php echo esc_url( $dir ); ?>" target="_blank" rel="noreferrer" class="rl-loc-dir">
                Get directions
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>



</main>

<?php get_footer(); ?>