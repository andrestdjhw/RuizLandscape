import React from "react"

// ── Data ──────────────────────────────────────────────
const services = [
  { label: "Landscape Design & Installation", href: "/services/landscape-design" },
  { label: "Lawn Care & Maintenance",         href: "/services/lawn-care" },
  { label: "Tree & Shrub Care",               href: "/services/tree-shrub-care" },
  { label: "Irrigation Systems",              href: "/services/irrigation" },
  { label: "Synthetic Turf",                  href: "/services/synthetic-turf" },
  { label: "Large Trees Installation",        href: "/services/large-trees" },
  { label: "Low Voltage Lighting",            href: "/services/lighting" },
  { label: "Landscape Design",                href: "/services/landscape-design-2d" },
]

const quickLinks = [
  { label: "Home",       href: "/" },
  { label: "About Us",   href: "/about" },
  { label: "Services",   href: "/services" },
  { label: "Gallery",    href: "/gallery" },
  { label: "Contact Us", href: "/contact" },
]

const counties = ["Los Angeles County", "Orange County", "Imperial County"]

// ── SVG Icons ─────────────────────────────────────────
const PhoneIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.57 3.41 2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.64a16 16 0 0 0 6.29 6.29l.52-.52a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
  </svg>
)

const EmailIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect width="20" height="16" x="2" y="4" rx="2"/>
    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
  </svg>
)

const LocationIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
    <circle cx="12" cy="10" r="3"/>
  </svg>
)

const GlobeIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <circle cx="12" cy="12" r="10"/>
    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
    <path d="M2 12h20"/>
  </svg>
)

const LicenseIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect width="16" height="20" x="4" y="2" rx="2"/>
    <path d="M9 7h6M9 11h6M9 15h4"/>
  </svg>
)

const FacebookIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
  </svg>
)

const TwitterIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
  </svg>
)

const InstagramIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
  </svg>
)

const ArrowRight = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <path d="M5 12h14M12 5l7 7-7 7"/>
  </svg>
)

const LeafIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="currentColor">
    <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2C14 8 17 8 17 8z"/>
  </svg>
)

// ── Component ─────────────────────────────────────────
function Footer() {
  const year = new Date().getFullYear()

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Barlow+Condensed:wght@600;700;800&display=swap');

        .rl-footer * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .rl-footer {
          font-family: 'Barlow', sans-serif;
          color: #b8c4a8;
          position: relative;
          overflow: hidden;
          background:
            radial-gradient(circle, rgba(106,168,60,0.55) 1px, transparent 1px),
            radial-gradient(circle, rgba(106,168,60,0.55) 1px, transparent 1px) 10px 10px,
            linear-gradient(90deg, rgba(106,168,60,0.07) 1px, transparent 1px),
            linear-gradient(0deg,  rgba(106,168,60,0.07) 1px, transparent 1px);
          background-size: 20px 20px;
          background-color: #111a0b;
        }

        .rl-footer::before {
          content: "";
          position: absolute;
          inset: 0;
          background: linear-gradient(
            to bottom,
            transparent 0%,
            rgba(106,168,60,0.04) 50%,
            transparent 100%
          );
          background-size: 100% 4px;
          animation: rl-scanline 2s linear infinite;
          pointer-events: none;
          z-index: 0;
        }

        .rl-footer::after {
          content: "";
          position: absolute;
          inset: 0;
          background: linear-gradient(
            90deg,
            transparent,
            rgba(200,168,75,0.12),
            transparent
          );
          opacity: 0;
          animation: rl-glitch 5s infinite;
          pointer-events: none;
          z-index: 0;
        }

        @keyframes rl-scanline {
          0%   { background-position: 0 0; }
          100% { background-position: 0 4px; }
        }

        @keyframes rl-glitch {
          0%   { transform: translateX(-100%); opacity: 0; }
          20%  { transform: translateX(100%) skewX(4deg); opacity: 1; }
          100% { transform: translateX(100%); opacity: 0; }
        }

        .rl-footer-cta,
        .rl-footer-body,
        .rl-footer-bottom {
          position: relative;
          z-index: 1;
        }

        /* ── CTA BAND ── */
        .rl-footer-cta {
          background: linear-gradient(135deg, #3d5a2a 0%, #4a6e32 60%, #3a5526 100%);
          border-top: 3px solid #c8a84b;
          padding: 48px 24px;
          text-align: center;
          position: relative;
          overflow: hidden;
        }

        .rl-footer-cta::before {
          content: '';
          position: absolute;
          inset: 0;
          background-image: radial-gradient(circle at 20% 50%, rgba(200,168,75,0.06) 0%, transparent 60%),
                            radial-gradient(circle at 80% 50%, rgba(200,168,75,0.06) 0%, transparent 60%);
          pointer-events: none;
        }

        .rl-footer-cta-eyebrow {
          display: inline-flex;
          align-items: center;
          gap: 6px;
          font-size: 11px;
          font-weight: 700;
          letter-spacing: 0.16em;
          text-transform: uppercase;
          color: #c8a84b;
          margin-bottom: 12px;
        }

        .rl-footer-cta h2 {
          font-family: 'Barlow Condensed', sans-serif;
          font-size: clamp(26px, 4vw, 38px);
          font-weight: 800;
          color: #fff;
          letter-spacing: 0.02em;
          text-transform: uppercase;
          margin-bottom: 10px;
          line-height: 1.1;
        }

        .rl-footer-cta p {
          font-size: 15px;
          color: rgba(255,255,255,0.7);
          max-width: 480px;
          margin: 0 auto 28px;
          line-height: 1.6;
        }

        .rl-footer-cta-btn {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          background: #c8a84b;
          color: #2b3e1d;
          font-family: 'Barlow Condensed', sans-serif;
          font-size: 14px;
          font-weight: 700;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          padding: 14px 30px;
          border-radius: 4px;
          text-decoration: none;
          transition: background 0.2s, transform 0.15s;
        }

        .rl-footer-cta-btn:hover {
          background: #d8b85e;
          transform: translateY(-2px);
        }

        /* ── MAIN BODY ── */
        .rl-footer-body {
          padding: 60px 24px 40px;
          max-width: 1200px;
          margin: 0 auto;
          display: grid;
          grid-template-columns: 2fr 1fr 1.4fr 1.5fr;
          gap: 48px;
        }

        /* Column heading */
        .rl-footer-col-title {
          font-family: 'Barlow Condensed', sans-serif;
          font-size: 13px;
          font-weight: 700;
          letter-spacing: 0.14em;
          text-transform: uppercase;
          color: #c8a84b;
          margin-bottom: 20px;
          display: flex;
          align-items: center;
          gap: 7px;
        }

        .rl-footer-col-title::after {
          content: '';
          flex: 1;
          height: 1px;
          background: rgba(200,168,75,0.25);
        }

        /* ── COL 1: Brand ── */
        .rl-footer-brand {
          display: flex;
          flex-direction: column;
        }

        .rl-footer-logo {
          display: flex;
          align-items: center;
          gap: 10px;
          text-decoration: none;
          margin-bottom: 16px;
        }

        .rl-footer-logo-icon {
          width: 48px;
          height: 48px;
          border-radius: 50%;
          border: 2px solid rgba(200,168,75,0.5);
          background: rgba(255,255,255,0.05);
          display: flex;
          align-items: center;
          justify-content: center;
          font-family: 'Barlow Condensed', sans-serif;
          font-weight: 800;
          font-size: 22px;
          color: #c8a84b;
          flex-shrink: 0;
          overflow: hidden;
        }

        .rl-footer-logo-icon img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: 50%;
        }

        .rl-footer-logo-text .name {
          font-family: 'Barlow Condensed', sans-serif;
          font-weight: 700;
          font-size: 19px;
          color: #fff;
          letter-spacing: 0.04em;
          text-transform: uppercase;
          line-height: 1.1;
        }

        .rl-footer-logo-text .sub {
          font-size: 10.5px;
          font-weight: 500;
          color: #c8a84b;
          letter-spacing: 0.12em;
          text-transform: uppercase;
        }

        .rl-footer-tagline {
          font-size: 13.5px;
          color: rgba(255,255,255,0.55);
          line-height: 1.65;
          margin-bottom: 22px;
          font-style: italic;
          border-left: 2px solid rgba(200,168,75,0.4);
          padding-left: 12px;
        }

        .rl-footer-socials {
          display: flex;
          gap: 10px;
        }

        .rl-footer-social-btn {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 36px;
          height: 36px;
          border-radius: 6px;
          background: rgba(255,255,255,0.06);
          border: 1px solid rgba(255,255,255,0.1);
          color: #b8c4a8;
          text-decoration: none;
          transition: all 0.2s ease;
        }

        .rl-footer-social-btn:hover {
          background: #c8a84b;
          border-color: #c8a84b;
          color: #2b3e1d;
          transform: translateY(-2px);
        }

        /* ── COL 2: Quick Links ── */
        .rl-footer-links {
          list-style: none;
          display: flex;
          flex-direction: column;
          gap: 4px;
        }

        .rl-footer-links a {
          display: flex;
          align-items: center;
          gap: 8px;
          color: #b8c4a8;
          text-decoration: none;
          font-size: 13.5px;
          font-weight: 500;
          padding: 5px 0;
          transition: all 0.15s ease;
        }

        .rl-footer-links a .arrow {
          color: #c8a84b;
          opacity: 0;
          transform: translateX(-4px);
          transition: all 0.15s ease;
          flex-shrink: 0;
        }

        .rl-footer-links a:hover {
          color: #fff;
          padding-left: 4px;
        }

        .rl-footer-links a:hover .arrow {
          opacity: 1;
          transform: translateX(0);
        }

        /* ── COL 3: Services ── */
        .rl-footer-services {
          list-style: none;
          display: flex;
          flex-direction: column;
          gap: 2px;
        }

        .rl-footer-services a {
          display: flex;
          align-items: flex-start;
          gap: 7px;
          color: #b8c4a8;
          text-decoration: none;
          font-size: 13px;
          font-weight: 400;
          padding: 5px 0;
          line-height: 1.4;
          transition: color 0.15s;
        }

        .rl-footer-services a::before {
          content: '';
          width: 4px;
          height: 4px;
          border-radius: 50%;
          background: #c8a84b;
          margin-top: 6px;
          flex-shrink: 0;
          opacity: 0.6;
          transition: opacity 0.15s;
        }

        .rl-footer-services a:hover {
          color: #fff;
        }

        .rl-footer-services a:hover::before {
          opacity: 1;
        }

        /* ── COL 4: Contact ── */
        .rl-footer-contact-list {
          list-style: none;
          display: flex;
          flex-direction: column;
          gap: 14px;
          margin-bottom: 24px;
        }

        .rl-footer-contact-item {
          display: flex;
          align-items: flex-start;
          gap: 10px;
        }

        .rl-footer-contact-icon {
          color: #c8a84b;
          margin-top: 2px;
          flex-shrink: 0;
        }

        .rl-footer-contact-item a,
        .rl-footer-contact-item span {
          color: #b8c4a8;
          text-decoration: none;
          font-size: 13.5px;
          line-height: 1.5;
          transition: color 0.15s;
        }

        .rl-footer-contact-item a:hover {
          color: #fff;
        }

        .rl-footer-counties {
          background: rgba(255,255,255,0.04);
          border: 1px solid rgba(255,255,255,0.08);
          border-radius: 6px;
          padding: 12px 14px;
        }

        .rl-footer-counties-title {
          font-size: 10px;
          font-weight: 700;
          letter-spacing: 0.12em;
          text-transform: uppercase;
          color: #c8a84b;
          margin-bottom: 8px;
        }

        .rl-footer-counties-list {
          display: flex;
          flex-wrap: wrap;
          gap: 6px;
        }

        .rl-footer-county-tag {
          background: rgba(200,168,75,0.12);
          border: 1px solid rgba(200,168,75,0.2);
          color: rgba(255,255,255,0.7);
          font-size: 11px;
          font-weight: 500;
          padding: 3px 9px;
          border-radius: 20px;
          white-space: nowrap;
        }

        /* ── BOTTOM BAR ── */
        .rl-footer-bottom {
          border-top: 1px solid rgba(255,255,255,0.07);
          padding: 18px 24px;
        }

        .rl-footer-bottom-inner {
          max-width: 1200px;
          margin: 0 auto;
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 16px;
          flex-wrap: wrap;
        }

        .rl-footer-copyright {
          font-size: 12px;
          color: rgba(255,255,255,0.35);
        }

        .rl-footer-copyright strong {
          color: rgba(255,255,255,0.5);
          font-weight: 600;
        }

        .rl-footer-lic {
          display: flex;
          align-items: center;
          gap: 6px;
          font-size: 12px;
          color: rgba(255,255,255,0.35);
        }

        .rl-footer-lic svg {
          color: #c8a84b;
          opacity: 0.7;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 960px) {
          .rl-footer-body {
            grid-template-columns: 1fr 1fr;
            gap: 36px;
          }

          .rl-footer-brand {
            grid-column: 1 / -1;
          }
        }

        @media (max-width: 560px) {
          .rl-footer-body {
            grid-template-columns: 1fr;
            gap: 28px;
            padding: 40px 20px 28px;
          }

          .rl-footer-brand {
            grid-column: auto;
          }

          .rl-footer-bottom-inner {
            flex-direction: column;
            text-align: center;
            gap: 8px;
          }

          .rl-footer-cta {
            padding: 36px 20px;
          }
        }
      `}</style>

      <footer className="rl-footer">

        {/* ── CTA Band ── */}
        <div className="rl-footer-cta">
          <div className="rl-footer-cta-eyebrow">
            <LeafIcon /> Free Consultation
          </div>
          <h2>Ready to Transform Your Outdoor Space?</h2>
          <p>
            Schedule a consultation with our team and let us bring your landscaping vision to life — one landscape at a time.
          </p>
          <a href="/contact" className="rl-footer-cta-btn">
            Get a Free Quote <ArrowRight />
          </a>
        </div>

        {/* ── Main Grid ── */}
        <div className="rl-footer-body">

          {/* Col 1 — Brand */}
          <div className="rl-footer-brand">
            <a href="/" className="rl-footer-logo">
              <div className="rl-footer-logo-icon">
                {/* Replace with: <img src="<?php echo get_theme_file_uri('/assets/logo.png'); ?>" alt="Ruiz Landscape" /> */}
                R
              </div>
              <div className="rl-footer-logo-text">
                <div className="name">Ruiz Landscape</div>
                <div className="sub">Service, Inc.</div>
              </div>
            </a>

            <p className="rl-footer-tagline">
              Eco-Conscious Landscaping for a Greener Tomorrow
            </p>

            <div className="rl-footer-socials">
              <a href="https://facebook.com/ruiz.landscape.7" target="_blank" rel="noreferrer"
                className="rl-footer-social-btn" aria-label="Facebook">
                <FacebookIcon />
              </a>
              <a href="https://twitter.com/RuizLandscapeOC" target="_blank" rel="noreferrer"
                className="rl-footer-social-btn" aria-label="Twitter / X">
                <TwitterIcon />
              </a>
              <a href="https://instagram.com/ruizlandscapeservices" target="_blank" rel="noreferrer"
                className="rl-footer-social-btn" aria-label="Instagram">
                <InstagramIcon />
              </a>
            </div>
          </div>

          {/* Col 2 — Quick Links */}
          <div>
            <div className="rl-footer-col-title">Navigation</div>
            <ul className="rl-footer-links">
              {quickLinks.map((link) => (
                <li key={link.href}>
                  <a href={link.href}>
                    <span className="arrow"><ArrowRight /></span>
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Col 3 — Services */}
          <div>
            <div className="rl-footer-col-title">Services</div>
            <ul className="rl-footer-services">
              {services.map((s) => (
                <li key={s.href}>
                  <a href={s.href}>{s.label}</a>
                </li>
              ))}
            </ul>
          </div>

          {/* Col 4 — Contact */}
          <div>
            <div className="rl-footer-col-title">Contact Us</div>
            <ul className="rl-footer-contact-list">
              <li className="rl-footer-contact-item">
                <span className="rl-footer-contact-icon"><LocationIcon /></span>
                <span>6 McLaren, Suite H<br />Irvine, CA 92618</span>
              </li>
              <li className="rl-footer-contact-item">
                <span className="rl-footer-contact-icon"><PhoneIcon /></span>
                <a href="tel:9493051605">949-305-1605</a>
              </li>
              <li className="rl-footer-contact-item">
                <span className="rl-footer-contact-icon"><EmailIcon /></span>
                <a href="mailto:office@RuizLandscape.com">office@RuizLandscape.com</a>
              </li>
              <li className="rl-footer-contact-item">
                <span className="rl-footer-contact-icon"><GlobeIcon /></span>
                <a href="https://www.RuizLandscape.com" target="_blank" rel="noreferrer">
                  www.RuizLandscape.com
                </a>
              </li>
            </ul>

            <div className="rl-footer-counties">
              <div className="rl-footer-counties-title">Service Areas</div>
              <div className="rl-footer-counties-list">
                {counties.map((c) => (
                  <span key={c} className="rl-footer-county-tag">{c}</span>
                ))}
              </div>
            </div>
          </div>

        </div>

        {/* ── Bottom Bar ── */}
        <div className="rl-footer-bottom">
          <div className="rl-footer-bottom-inner">
            <p className="rl-footer-copyright">
              &copy; {year} <strong>Ruiz Landscape Service, Inc.</strong> — All rights reserved.
            </p>
            <div className="rl-footer-lic">
              <LicenseIcon />
              CA State License #925207
            </div>
          </div>
        </div>

      </footer>
    </>
  )
}

export default Footer