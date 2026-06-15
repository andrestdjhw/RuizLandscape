import React from "react"

// ── Datos (edítalos aquí) ─────────────────────────────
const services = [
  "Landscape Design & Installation",
  "Lawn Care & Maintenance",
  "Tree & Shrub Care",
  "Irrigation Systems",
  "Synthetic Turf",
  "Large Tree Installation",
  "Low Voltage Lighting",
  "Something else",
]

const ArrowRight = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
    fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <path d="M5 12h14M12 5l7 7-7 7" />
  </svg>
)

// ── Componente ────────────────────────────────────────
function ContactForm({
  heading = "Request a Free Estimate",
  subheading = "Tell us about your project — we'll get back to you within one business day.",
  privacyHref = "/privacy-policy",
  termsHref = "/terms-and-conditions",
}) {
  /* ───────────────────────────────────────────────────────────────
     ENVÍO DEL FORMULARIO
     Tal cual, hace un POST normal a la misma URL (action=""). Tienes
     dos caminos para que envíe de verdad:

     1) Plugin (Contact Form 7, WPForms…): renderiza el shortcode del
        plugin en el template y deja este componente solo para páginas
        donde quieras el formulario propio. O reemplaza el <form> de
        abajo por el markup/embed del plugin.

     2) Manejarlo en React sin recargar — descomenta handleSubmit,
        ponlo en <form onSubmit={handleSubmit}> y apúntalo a tu
        endpoint (REST API o admin-ajax):

     // const [status, setStatus] = React.useState("idle")
     // async function handleSubmit(e) {
     //   e.preventDefault()
     //   setStatus("sending")
     //   const data = Object.fromEntries(new FormData(e.currentTarget).entries())
     //   const res = await fetch("/wp-json/ruiz/v1/contact", {
     //     method: "POST",
     //     headers: { "Content-Type": "application/json" },
     //     body: JSON.stringify(data),
     //   })
     //   setStatus(res.ok ? "done" : "error")
     // }
  ─────────────────────────────────────────────────────────────── */

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap');

        .rl-cform * { box-sizing: border-box; margin: 0; padding: 0; }

        .rl-cform {
          /* Paleta de marca */
          --rl-accent:       #996a6c;   /* café (Smoky Rose) */
          --rl-accent-rgb:   153, 106, 108;
          --rl-accent-hover: #ab7d7f;
          --rl-on-accent:    #ffffff;
          --rl-green-dark:   #1a2410;

          font-family: 'Montserrat', sans-serif;
          width: 100%;
          color: #ffffff;
          background: rgba(16, 26, 8, 0.74);
          border: 1px solid rgba(var(--rl-accent-rgb), 0.35);
          -webkit-backdrop-filter: blur(4px);
          backdrop-filter: blur(4px);
          padding: 30px;
          display: flex;
          flex-direction: column;
          gap: 13px;
        }

        .rl-cform-title {
          font-family: 'Montserrat', sans-serif;
          font-size: 25px;
          font-weight: 800;
          text-transform: uppercase;
          letter-spacing: 0.02em;
          line-height: 1.1;
          color: #ffffff;
        }

        .rl-cform-sub {
          font-size: 13px;
          line-height: 1.5;
          color: rgba(255,255,255,0.6);
          margin: -6px 0 4px;
        }

        .rl-cform-row {
          display: grid;
          grid-template-columns: 1fr 1fr;
          gap: 12px;
        }

        .rl-cform input:not([type="checkbox"]),
        .rl-cform select,
        .rl-cform textarea {
          width: 100%;
          background: rgba(255,255,255,0.06);
          border: 1px solid rgba(255,255,255,0.18);
          color: #ffffff;
          font-family: 'Montserrat', sans-serif;
          font-size: 14px;
          padding: 12px 13px;
          border-radius: 0;
          outline: none;
          transition: border-color 0.15s, background 0.15s;
        }

        .rl-cform textarea { resize: vertical; min-height: 132px; }

        .rl-cform input::placeholder,
        .rl-cform textarea::placeholder { color: rgba(255,255,255,0.42); }

        .rl-cform input:not([type="checkbox"]):focus,
        .rl-cform select:focus,
        .rl-cform textarea:focus {
          border-color: var(--rl-accent);
          background: rgba(255,255,255,0.1);
        }

        .rl-cform select {
          -webkit-appearance: none;
          appearance: none;
          cursor: pointer;
          background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='%23996a6c' stroke-width='2.5'><path d='m6 9 6 6 6-6'/></svg>");
          background-repeat: no-repeat;
          background-position: right 13px center;
          padding-right: 38px;
        }
        .rl-cform select option { color: var(--rl-green-dark); }

        .rl-cform-check {
          display: flex;
          align-items: flex-start;
          gap: 10px;
          margin-top: 2px;
          font-size: 12.5px;
          line-height: 1.5;
          color: rgba(255,255,255,0.62);
          cursor: pointer;
        }
        .rl-cform-check input[type="checkbox"] {
          width: 16px;
          height: 16px;
          margin: 1px 0 0;
          flex-shrink: 0;
          accent-color: var(--rl-accent);
          cursor: pointer;
        }
        .rl-cform-check a { color: var(--rl-accent); text-decoration: underline; }

        .rl-cform-btn {
          margin-top: 4px;
          width: 100%;
          justify-content: center;
          border: none;
          cursor: pointer;
          background: var(--rl-accent);
          color: var(--rl-on-accent);
          font-family: 'Montserrat', sans-serif;
          font-size: 12.5px;
          font-weight: 700;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          padding: 15px 28px;
          display: inline-flex;
          align-items: center;
          gap: 10px;
          transition: background 0.18s;
        }
        .rl-cform-btn:hover { background: var(--rl-accent-hover); }

        /* Entrada al montar + flotación bouncy en loop (solo si no hay movimiento reducido) */
        @media (prefers-reduced-motion: no-preference) {
          .rl-cform {
            opacity: 0;
            animation:
              rl-cform-in 0.9s cubic-bezier(0.16, 0.84, 0.34, 1) 0.1s both,
              rl-cform-float 5.5s ease-in-out 1.1s infinite;
          }
          /* Se detiene mientras el usuario interactúa, para no estorbar al escribir */
          .rl-cform:hover,
          .rl-cform:focus-within {
            animation-play-state: paused;
          }
        }
        @keyframes rl-cform-in {
          from { opacity: 0; transform: translateY(30px) scale(0.98); }
          to   { opacity: 1; transform: none; }
        }
        @keyframes rl-cform-float {
          0%   { transform: translateY(0); }
          30%  { transform: translateY(-12px); }
          45%  { transform: translateY(-6px); }
          60%  { transform: translateY(-12px); }
          100% { transform: translateY(0); }
        }

        @media (max-width: 480px) {
          .rl-cform { padding: 22px; }
          .rl-cform-row { grid-template-columns: 1fr; }
        }
      `}</style>

      <form className="rl-cform" name="ruiz_hero_contact" method="post" action="">
        <div className="rl-cform-title">{heading}</div>
        <p className="rl-cform-sub">{subheading}</p>

        <div className="rl-cform-row">
          <input type="text" name="rl_name" placeholder="Full name" aria-label="Full name" required />
          <input type="tel" name="rl_phone" placeholder="Phone" aria-label="Phone" />
        </div>

        <input type="email" name="rl_email" placeholder="Email address" aria-label="Email address" required />

        <select name="rl_service" aria-label="Service of interest" required defaultValue="">
          <option value="" disabled>Service of interest…</option>
          {services.map((s) => (
            <option key={s}>{s}</option>
          ))}
        </select>

        <textarea name="rl_message" placeholder="Tell us a bit about your project (optional)" aria-label="Project details" />

        <label className="rl-cform-check">
          <input type="checkbox" name="rl_consent" required />
          <span>
            I agree to the <a href={privacyHref}>Privacy Policy</a> and{" "}
            <a href={termsHref}>Terms &amp; Conditions</a>.
          </span>
        </label>

        {/* reCAPTCHA: monta aquí el widget cuando lo integres
            (p.ej. <div className="g-recaptcha" data-sitekey="..."></div>) */}

        <button type="submit" className="rl-cform-btn">
          Request a Free Estimate
          <ArrowRight />
        </button>
      </form>
    </>
  )
}

export default ContactForm