# UI / INTERACTION REVIEW

## What I saw

Walked all four desktop screenshots (`screenshot-home-desktop.png`,
`screenshot-diventa-socio-desktop.png`, `screenshot-contatti-desktop.png`,
plus `eventi.png`/`home.png`) and the single mobile capture
(`screenshot-home-mobile.png`) top to bottom. Layout integrity is clean
at both widths: the giant Anton headlines bleed off the right edge **by
design** (`.bleed__h { margin-right:-64px }`, `html{overflow-x:clip}`) and
the last word stays readable in every case — "GUIDA / LA STORIA" on home,
"CONTATTI", "DIVENTA / SOCIO", "REVOCAZIONE DI / CAMPIONE D'ITALIA"
(wraps to two lines, no truncation). No body copy is occluded; no column
runs under its neighbour; the duotone hero photos sit in their own grid
column (`cols-media`, 1.05fr/1fr) well clear of the headings. Photos carry
real treatments — taped corner on the home "21 GIUGNO" frame, ±1.5° tilt
and red/green duotone on the accent images — not bare `<img>`. Image reset
(`max-width:100%;height:auto`) plus explicit `width`/`height` attrs and
`aspect-ratio` on frames means no CLS jump.

CTAs read unmistakably as buttons: solid pomodoro-red pills with
`.95rem 1.5rem` padding and `min-height:44px`, distinct from the ghost
"VEDI GLI EVENTI" outline button and from the brass-underlined text links.
Mobile collapses the nav into a black "MENU" text button (`min-height:44px`,
discoverable, not a floating 24px icon) wired to a working JS toggle with
`aria-expanded`. Form labels are real `<span>` labels stacked above each
field (not placeholder-as-label), inputs are `font-size:16px` (no
zoom-on-focus trap), `padding:.8rem .9rem` gives comfortable height. This
build is genuinely strong on my lens.

## Findings

### Ship blockers (must fix before publish)

None. No clipped, occluded, or colliding content at 1440px or 375px; CTAs,
nav, and forms are all usable.

### Important (should fix this revision pass)

- **Both forms — required fields unmarked** —
  `diventa-socio.html:516-531`, `contatti.html:477-483` — inputs carry the
  HTML `required` attr (Nome, Email) but nothing visually distinguishes
  required from optional (Cognome, Ruolo, Messaggio are not required), so a
  user can't tell what's mandatory until the browser blocks submit.
  → Add a visible `*` (or "richiesto") to the `<span>` label of each
  required field and/or a one-line "* campo obbligatorio" note.

### Nice to have (skip if budget tight)

- **Contatti submit button — bare verb** — `contatti.html:482`
  (`<button>Invia</button>`) — "Invia" alone is the "Submit"-class generic;
  the Diventa socio form already does better with "Invia richiesta".
  → Make it specific, e.g. "Invia messaggio", to match the sibling form.
- **Mobile language switcher — inert chip** — `contatti.html:445-447` /
  rendered as `IT EN FR DE` text — the brief calls for a 4-language
  switcher but the chip is a static `<span>` (title says "altre lingue
  presto disponibili"); on mobile it reads like tappable nav but does
  nothing. → Either gray it visibly as "coming soon" or drop the EN/FR/DE
  tokens until wired so it doesn't bait a tap.
- **Route-marker numerals** — home featured block + Eventi plates
  (`.route li::before`, 1.45rem circles) — fine as static labels, but they
  sit close to interactive CTAs; confirm they're never mistaken for
  tappable steps. → No change needed unless usability testing flags it.

## Summary for the synthesiser

Layout integrity, affordances, touch targets, and mobile nav are all
clean — the only real interaction gap is that neither form visually marks
which fields are required.
