import React from "react"

// ── Ícono ─────────────────────────────────────────────
const PhoneIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
    fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.57 3.41 2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.64a16 16 0 0 0 6.29 6.29l.52-.52a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
  </svg>
)

// ── Componente ────────────────────────────────────────
// Props (todas opcionales):
//   phone    → número para la llamada (solo dígitos)         · default "9493051605"
//   display  → cómo se muestra el número                     · default "949-305-1605"
//   label    → texto del botón al expandirse                 · default "Call Us"
//   position → "right" | "left" — esquina donde se ancla      · default "right"
function CallButton({
  phone = "9493051605",
  display = "949-305-1605",
  label = "Call Us",
  position = "right",
}) {
  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap');

        .rl-callbtn {
          /* Paleta de marca */
          --rl-accent:       #996a6c;   /* café (Smoky Rose) */
          --rl-accent-rgb:   153, 106, 108;
          --rl-accent-hover: #ab7d7f;

          position: fixed;
          bottom: 24px;
          z-index: 990;            /* debajo del navbar (1000), encima del contenido */
          display: inline-flex;
          align-items: center;
          height: 60px;
          background: var(--rl-accent);
          color: #ffffff;
          border-radius: 999px;
          text-decoration: none;
          box-shadow: 0 10px 28px -8px rgba(0,0,0,0.45);
          font-family: 'Montserrat', sans-serif;
          transition: background 0.2s ease, box-shadow 0.2s ease, padding 0.28s ease;
        }
        .rl-callbtn--right { right: 24px; }
        .rl-callbtn--left  { left: 24px; }

        .rl-callbtn:hover {
          background: var(--rl-accent-hover);
          box-shadow: 0 16px 36px -8px rgba(0,0,0,0.55);
          padding-right: 24px;     /* aire a la derecha cuando aparece el texto */
        }

        /* Ícono (siempre 60×60 → círculo en reposo) */
        .rl-callbtn-icon {
          width: 60px;
          height: 60px;
          flex-shrink: 0;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        /* Texto: oculto en reposo, se despliega al hover */
        .rl-callbtn-text {
          display: flex;
          flex-direction: column;
          justify-content: center;
          line-height: 1.15;
          max-width: 0;
          opacity: 0;
          overflow: hidden;
          white-space: nowrap;
          font-size: 13px;
          font-weight: 700;
          letter-spacing: 0.06em;
          text-transform: uppercase;
          transition: max-width 0.3s ease, opacity 0.25s ease, margin 0.3s ease;
        }
        .rl-callbtn-text small {
          font-size: 11px;
          font-weight: 600;
          letter-spacing: 0.03em;
          text-transform: none;
          opacity: 0.9;
        }
        .rl-callbtn:hover .rl-callbtn-text {
          max-width: 220px;
          opacity: 1;
          margin-left: 4px;
        }

        /* Anillo de pulso (atención) — se pausa al hover y con movimiento reducido */
        .rl-callbtn::after {
          content: '';
          position: absolute;
          inset: 0;
          border-radius: 999px;
          pointer-events: none;
        }
        @media (prefers-reduced-motion: no-preference) {
          .rl-callbtn::after { animation: rl-callbtn-pulse 2.4s ease-out infinite; }
        }
        .rl-callbtn:hover::after { animation: none; }

        @keyframes rl-callbtn-pulse {
          0%   { box-shadow: 0 0 0 0 rgba(var(--rl-accent-rgb), 0.45); }
          70%  { box-shadow: 0 0 0 16px rgba(var(--rl-accent-rgb), 0); }
          100% { box-shadow: 0 0 0 0 rgba(var(--rl-accent-rgb), 0); }
        }

        /* Entrada suave al montar */
        @media (prefers-reduced-motion: no-preference) {
          .rl-callbtn {
            animation: rl-callbtn-in 0.5s cubic-bezier(0.16, 0.84, 0.34, 1) 0.4s both;
          }
        }
        @keyframes rl-callbtn-in {
          from { opacity: 0; transform: translateY(16px) scale(0.9); }
          to   { opacity: 1; transform: none; }
        }

        /* Móvil: un poco más compacto y pegado a la esquina */
        @media (max-width: 560px) {
          .rl-callbtn { height: 56px; bottom: 18px; }
          .rl-callbtn--right { right: 18px; }
          .rl-callbtn--left  { left: 18px; }
          .rl-callbtn-icon { width: 56px; height: 56px; }
        }
      `}</style>

      <a
        href={`tel:${phone}`}
        className={`rl-callbtn rl-callbtn--${position}`}
        aria-label={`${label}: ${display}`}
      >
        <span className="rl-callbtn-icon"><PhoneIcon /></span>
        <span className="rl-callbtn-text">
          {label}
          <small>{display}</small>
        </span>
      </a>
    </>
  )
}

export default CallButton