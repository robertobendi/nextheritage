# BRIEF

## 0 · Selected direction
- **Picked**: Candidate A — Italian poster × motorsport heritage
- **Justification**: Ticino is Italian-speaking and the brand literally *is* motorsport, so the 1960s period-poster idiom makes the locked racing red/gold/black crest feel native rather than bolted on — it solves the generational-bridge tension ANALYSIS.md names as the core brief (saturated brights + candid photos read young; the heraldic crest, laurel and Swiss cross carry federation-grade heritage). It beats Candidate C (Riso zine), which is bolder but risks the credibility the Swiss Federation backing and donor/journalist secondary audience demand, and depends on a multi-photo candid library we don't have (only one real snapshot exists). It beats Candidate B (mid-century print), whose muted restraint is the safe "tasteful average" failure mode this stage exists to defeat and which throws away the logo's saturated red/gold energy.

## 1 · Analysis
- **Business**: Next Heritage is a Ticino-based Swiss non-profit association (the Young4Vintage initiative under the Federazione Svizzera dei Veicoli Storici) that brings younger generations into classic and historic motoring through events and rallies.
- **Primary audience**: Young classic-car enthusiasts in Italian-speaking Switzerland (late-teens to 30s) and the parents/older enthusiasts who bring them in, landing here to find the next event, register, or become a member.
- **Primary objective**: Convert passionate young enthusiasts and their families into members or participants — get them to **join (diventa socio)** or **register for the next event**.
- **Hard facts**: Next Heritage (association); tagline "Born 2 Late 4 Classic"; Ticino, Switzerland (Lugano, Locarno, Ascona, Giubiasco, Campione d'Italia); parent Federazione Svizzera dei Veicoli Storici / initiative Young4Vintage; languages IT (default), EN, FR, DE; domain nextheritage.ch; Gottardo Classic — 8th ed., 21 June `[year not stated, likely 2026 — verify]`; Rievocazione Storica del Circuito di Campione d'Italia — 3–6 September 2026 (incl. Progetto Giovani day/night sessions); Lugano Classic 2026 — 17–18 October 2026; contact by email only `[verify — no phone/email string captured]`.
- **Voice**: Passionate, heritage-proud, generational — warm insider Italian that keeps the pride but cuts the lyrical haze, committing to concrete dates and a single clear invitation to join.
- **Constraints**: Logo palette (red/gold/near-black/cream + Swiss white-cross-on-red) is brand truth; the legacy plum `#370031` header is off-brand and may only return as a justified accent; layout must tolerate long IT/DE strings and a 4-language switcher; aesthetic must read young *and* credible at once.

## 2 · Aesthetic family

- **Family**: Italian poster × motorsport heritage
- **One-line signature**: A pomodoro-red top band with the crest centered like a rally start banner, then the event name set in 9rem condensed Anton caps bleeding off the right edge over a cream field ruled with thin brass pinstripes and corner ornaments — reads instantly as a 1960s Ticino racing poster.

This family treats every page like a printed event affiche from the Gottardo/Ceresio racing circuit: saturated pomodoro red against warm crema, brass pinstripe frames, checkered-flag corners, and dates set enormous in condensed caps. Touchstone is the mid-century Italian Gran Premio / Mille Miglia poster — Cinzano-and-Pirelli graphic confidence, not Toiletpaper chaos and not flat Swiss-International restraint — because the audience is enthusiast-buyers and federation partners who must trust the org while feeling the youthful energy. The candid snapshot photography (currently a weakness) gets disciplined inside black-and-gold double frames so it reads as documented heritage rather than a casual phone dump. The heraldic crest is the recurring "emblem on the start banner" motif, anchoring credibility on every page while the saturated palette and oversized type keep it fast and young.

## 3 · Brand

### Verdict
keep-and-polish — ANALYSIS.md §Brand assets observed calls the heraldic crest "the dominant, polished brand asset [that] should anchor the rebuild," so the rebuild keeps the real logo and only resolves the off-brand plum header by returning to the logo's own red/gold/black/cream palette.

### Logo asset
- **Source file**: `source/images/img-00.png` (there is no `source/images/og-image.*`; `favicon.ico` is a low-detail derivative — `img-00.png` is the full high-resolution crest and is the correct asset).
- **How the build should use it**: copy `source/images/img-00.png` to `assets/img/logo.png` and place the REAL bitmap directly. It is a shield lockup, not a slim wordmark, so: place it at ~44–48px height in the left of the header (the shield scales down cleanly as a badge), show it LARGE and centered (~160–220px) on the pomodoro start-banner in the home hero as the "finish-line emblem," and again in the footer band. Do NOT trace it to SVG or swap it for a text wordmark — the polished bitmap is usable as-is at every size.
- **What the logo actually looks like**: A full racing-crest shield — a small red Swiss-cross shield flanked by crossed black-and-white checkered flags up top, a cream ribbon banner reading "NEXT HERITAGE" in bold black slab caps, a chrome steering wheel with classic-car silhouettes (a red coupé) in the center, and a gold laurel wreath framing a curved gold "Born 2 Late 4 Classic" ribbon below.

### Palette
- `#f4efe2` — Crema — surface (dominant background)
- `#1a1410` — Nero Pista — ink (body text)
- `#c1272d` — Pomodoro Rosso — accent 1 / primary CTA + hero banner
- `#d4a017` — Ottone — accent 2 / pinstripe rules + corner ornaments
- `#1f6412` — Pistacchio Ticino — highlight / secondary tags + route markers
- `#7a1e22` — Bordò — decorative / deep frame borders
- `#ffffff` — Bianco Croce — Swiss cross + checkered-flag squares

### Typography
- **Display**: Anton at weight 400 (condensed poster caps, set huge)
- **Body**: Spectral at weight 400 / 500
- **Accent / eyebrow**: Archivo at weight 700 (tracked-out small caps)

Anton gives the affiche shout for dates and event names, Spectral keeps the heritage-Italian warmth readable across long IT/DE strings, and tracked Archivo caps supply the clean catalog labels that keep the loud poster organized.

### Voice
Passionate, heritage-proud, insider — confident poster copy in short declarative event lines, dates carried in display caps, warmth delivered through one-sentence pull quotes rather than long lyrical paragraphs, addressing young enthusiasts as fellow believers ("vieni a guidare con noi"), never as spectators.

### Sample copy
- **Hero headline**: Born 2 Late 4 Classic — Guida la Storia
- **Hero subhead**: Associazione ticinese del Young4Vintage: portiamo le nuove generazioni al volante delle auto storiche, evento dopo evento.
- **Primary CTA**: Diventa socio

## 4 · Plan

### Site map
- **Home** (`/`) — pitch the mission and headline the next dated event — click Diventa socio or jump to Eventi
- **Eventi** (`/eventi`) — list the three real events with dates, routes and registration — register / "Più informazioni"
- **Diventa socio** (`/diventa-socio`) — convert to member or supporter — submit the membership form
- **Missione** (`/missione`) — the generational-bridge story + federation credibility + photo gallery strip — build trust, route to join
- **Contatti** (`/contatti`) — reach the association — send a message / email

### Navigation
- **Header nav**: Eventi, Missione, Diventa socio, Galleria (anchor on Missione), Contatti — plus a compact IT/EN/FR/DE language switcher chip at the right.
- **Footer**: Next Heritage crest + "Born 2 Late 4 Classic"; email `info@nextheritage.ch` `[verify]`; Federazione Svizzera dei Veicoli Storici / Young4Vintage Ticino credit line with Swiss-cross chip; secondary links (Eventi, Diventa socio, Contatti); © Next Heritage + language switcher.

### Page content briefs

**Home** (`/`) — Single goal: send the visitor to join or to the next event.
- Hero: pomodoro start-banner with centered crest, giant Anton headline bleeding off-right, subhead, one red "Diventa socio" pill + ghost "Vedi gli eventi".
- "Prossimo evento" featured block: Gottardo Classic — 21 GIUGNO set huge with route line and a framed candid photo.
- Mission teaser: two-sentence "ponte tra generazioni" pull quote + link to Missione.
- Three-event mini-grid (cards) with dates and "Più informazioni".
- Credibility band: Swiss-cross chip + federation line.
- Closing CTA band: "Diventa parte della comunità" + red pill.

**Eventi** (`/eventi`) — Single goal: get registration/interest on dated events.
- Eyebrow + H1 "Eventi 2026".
- Three stacked event plates (Gottardo Classic, Rievocazione Campione d'Italia, Lugano Classic), each: Anton event name, date stamp, numbered route markers (●1 ●2 ●3) for the itinerary, one-line factual description, framed photo, "Iscriviti / Più informazioni" CTA.
- Progetto Giovani callout inside the Campione d'Italia plate (day/night driving sessions).
- Closing join band.

**Diventa socio** (`/diventa-socio`) — Single goal: capture a membership/supporter signup.
- Hero band: "Diventa socio" + why-join one-liner.
- Two framed cards: Socio vs. Sostenitore (donor), each with a short benefit list.
- Membership form (Formspree placeholder): nome, cognome, email, ruolo (select: Socio / Sostenitore), messaggio, submit "Invia richiesta".
- Reassurance line + federation credibility chip.

**Missione** (`/missione`) — Single goal: build trust and route to join.
- Hero band + Anton headline "Un ponte tra generazioni".
- Two-three editorial sections: heritage/continuity, youth/renewal, belonging — each an eyebrow + H2 + one warm paragraph (no haze).
- `#galleria` photo strip: framed candid event photos in a row (the gallery folds in here).
- Federation authority section with Swiss-cross chip.
- CTA band to Diventa socio.

**Contatti** (`/contatti`) — Single goal: open a line to the association.
- Hero band + H1 "Contatti".
- Left: contact intent copy + email `[verify]`; right: short contact form (Formspree placeholder) — nome, email, messaggio, "Invia".
- Region line: Ticino, Svizzera + Swiss-cross chip.

### Collections
Default `pages`, `posts`, `contact` suffice. Add one:
- `events` — justified because the three dated rallies are the site's primary content and recur seasonally; fields: `title` (text), `slug` (slug), `date_label` (text), `date_start` (datetime), `route` (textarea), `summary` (textarea), `cta_url` (url), `featured` (boolean).

### Forms
- **Formspree placeholder**: `action="https://formspree.io/f/REPLACE_ME"` on both the Diventa socio and Contatti forms, each with an adjacent `<!-- TODO: replace REPLACE_ME with the real Formspree form ID; or swap to mailto:info@nextheritage.ch [verify] -->` comment. (No real email/phone was captured, so a mailto fallback can't be hardcoded with confidence — Formspree is the safe default.)

## 5 · Design

### Direction
Treat every page as a printed 1960s Ticino Gran Premio affiche — saturated pomodoro red on warm crema, brass pinstripe frames and checkered-flag corners, dates blown up in condensed Anton caps. Touchstone is the Mille Miglia / Cinzano poster's graphic confidence (not Swiss-International coolness, not Riso-zine mess), so the brand's racing crest reads native and the whole thing feels young yet federation-credible. The candid photos are disciplined inside black-and-gold double frames so documentary warmth survives without looking like a casual phone dump.

### Layout signature
Each page's primary heading is set in Anton condensed caps at clamp(3.5rem, 9vw, 9rem) with line-height 0.92, bleeding ~64px past the RIGHT edge of the viewport (`margin-right: -64px; overflow-x: clip` on desktop), underscored by a single 2px Ottone brass pinstripe rule that runs full-bleed left-to-right beneath it.

### Type scale
Ratio 1.5 (perfect fifth). Weights loaded: Anton 400, Spectral 400/500, Archivo 700.
- Display (hero h1): `clamp(3.5rem, 9vw, 9rem)` / line-height 0.92 / Anton 400
- H1: `clamp(2.75rem, 5vw, 4rem)` / Anton 400
- H2: `clamp(2rem, 3.5vw, 2.75rem)` / Anton 400
- H3: 1.5rem / Archivo 700
- Body: 1.0625rem / Spectral 400 / line-height 1.6
- Small/caption eyebrow: 0.8125rem / Archivo 700 / `letter-spacing: 0.12em` / UPPERCASE

### Spacing & rhythm
- Container max-width: **1180px** (generous — poster needs air but stays anchored).
- Section vertical padding: small 3.5rem / large 7rem.
- Grid gutters: 2rem desktop, 1.25rem mobile.
- No strict baseline grid; rhythm comes from the repeated brass pinstripe rules acting as horizontal anchors between sections.

### Decorative system
- Brass pinstripe double-rules (2px Ottone) — framing the hero, every card, and under every bleeding heading.
- Checkered-flag corner ornaments (inline SVG, B/W squares) — top corners of the hero band and the footer band.
- Eyebrow labels in tracked Archivo caps — above every H2/H3.
- Swiss white-cross chip (red rounded square + white cross, inline SVG) — beside every federation/credibility line.
- Numbered route markers (●1 ●2 ●3 in Pistacchio Ticino) — on every event itinerary on Eventi and the home featured block.

### Components
- **Header/nav**: thin crema bar, real crest bitmap at ~44px left, Archivo tracked-caps nav links center/right, IT/EN/FR/DE switcher chip far right; a 2px brass pinstripe sits under the whole bar.
- **Hero**: pomodoro-red start-banner spanning the top with the crest centered like a finish-line emblem; below on crema, the giant Anton headline bleeds off-right with a date stamp, subhead, and one filled red pill.
- **Content section**: crema field, eyebrow + Anton/Archivo heading, Spectral body in a max ~62ch measure, bounded above by a full-bleed brass pinstripe.
- **Card**: crema panel inside a black-and-gold double border (2px Nero outer, 2px Ottone inner with ~4px gap), event name in Anton, date stamp, numbered route markers, framed photo; on hover the brass rule thickens, no shadow-pop.
- **Footer**: Bordò band with checkered-flag corners, crest + "Born 2 Late 4 Classic" ribbon line, federation credit with Swiss-cross chip, secondary links, language switcher.
- **Buttons**: primary = solid Pomodoro Rosso pill, Archivo tracked caps, white text, square-ish (4px radius); secondary = ghost with 2px Nero outline; both lift only via a 1px brass underline on hover.
- **Forms**: crema fields with 2px Nero borders and brass focus ring, Archivo tracked-caps labels above each field, submit as the primary red pill.

### Per-page layout

**Home** (`/`)
- Order: header → hero (start-banner + crest + bleeding headline) → "Prossimo evento" featured block → mission teaser pull quote → three-event mini-grid → credibility band → closing CTA band → footer.
- Signature moment: the hero headline "BORN 2 LATE 4 CLASSIC — GUIDA LA STORIA" is the one that bleeds 64px off the right edge under a full-bleed brass rule; the "Prossimo evento" date "21 GIUGNO" is the secondary giant Anton moment.
- One-off: crest sits centered and largest (~200px) on the pomodoro start-banner here only.

**Eventi** (`/eventi`)
- Order: header → "EVENTI 2026" hero heading (bleeds right) → three stacked event plate cards → Progetto Giovani callout within the Campione plate → closing join band → footer.
- Signature moment: each event-name (e.g. "GOTTARDO CLASSIC") in Anton bleeds off-right inside its plate, brass rule under it; numbered Pistacchio route markers run the itinerary.

**Diventa socio** (`/diventa-socio`)
- Order: header → "DIVENTA SOCIO" hero heading (bleeds right) → Socio vs. Sostenitore two-card row → membership form → reassurance + Swiss-cross chip → footer.
- Signature moment: the H1 bleeds off-right; the two cards wear the black-and-gold double border, and the submit pill is the dominant red.

**Missione** (`/missione`)
- Order: header → "UN PONTE TRA GENERAZIONI" hero heading (bleeds right) → three editorial sections → `#galleria` framed-photo strip → federation authority section → CTA band → footer.
- Signature moment: the hero heading bleeds right; the gallery strip photos each sit in black-and-gold double frames, alternating a subtle ±1.5° rotation for poster-paste-up feel.

**Contatti** (`/contatti`)
- Order: header → "CONTATTI" hero heading (bleeds right) → two-column (intent copy + email | contact form) → region line with Swiss-cross chip → footer.
- Signature moment: the H1 bleeds right; the form's submit is the red pill, labels in tracked Archivo caps.

### Imagery plan

| Page | Slot | Treatment | Source | Search query (if photo) | Aspect |
|------|------|-----------|--------|--------------------------|--------|
| Home | Hero crest emblem | `untouched` on red banner | Source asset `source/images/img-00.png` | — | square |
| Home | Prossimo evento photo | `taped` in black-gold double frame | Photograph | vintage car rally Switzerland alpine pass | 4:3 |
| Home | Event mini-grid (×3) | black-gold framed thumbs | Photograph | classic car Mille Miglia Italy 1960s | 3:2 |
| Eventi | Gottardo Classic plate | `rotated(-1.5deg)` framed | Photograph | classic sports car mountain road Gotthard | 4:3 |
| Eventi | Campione d'Italia plate | framed | Photograph | historic racing circuit lake Lugano | 4:3 |
| Eventi | Lugano Classic plate | framed | Photograph | vintage cars town square Lugano Ticino | 4:3 |
| Missione | Generational story photo | `untouched` framed | Source asset `source/screenshot.png` (the real candid "DanKe Dani" group) | — | 4:3 |
| Missione | Gallery strip (×3) | `rotated(±1.5deg)` framed | Photograph | classic car club young enthusiasts event | 3:2 |
| Diventa socio | Hero side accent | `duotone(#c1272d, #1a1410)` | Photograph | vintage car steering wheel detail | 16:9 |
| Contatti | Region accent | `duotone(#1f6412, #f4efe2)` | Photograph | Lugano lake Ticino landscape | 16:9 |
| All | Footer crest | `untouched` | Source asset `source/images/img-00.png` | — | square |

### Motion
CSS-only, restrained and mechanical like a poster coming off the press: sections fade-and-rise 12px on scroll via `@media (prefers-reduced-motion: no-preference)` with a 0.5s ease-out; the primary red pill nudges 1px and grows a brass underline on hover; checkered-flag corners and brass rules are static. The only `<script>` is a tiny vanilla toggle for the mobile nav and the language switcher dropdown — no animation libraries, no parallax.

### What NOT to do
- Do NOT let the legacy plum `#370031` become a surface or header color — it is at most a tiny deliberate accent; the header is crema with brass.
- Do NOT redraw or "clean up" the crest as a flat SVG wordmark — place the real `img-00.png` bitmap.
- Do NOT center the hero headline or keep it inside the container — it MUST bleed off the right edge; a tidy centered Anton heading kills the poster.
- Do NOT bury the dates in prose — every event date is a giant Anton stamp, not a sentence.
- Avoid every default-Claude failure: centered hero on white over generic stock with an Inter heading and one button; palette = 3 neutrals + 1 muted accent; Inter + Lora; a 3-card home page as the whole site; `border-radius: 8px` as the only decoration; a 5rem heading on white at modular scale 1.25.

## 6 · Fingerprint

1. Every page's primary heading is Anton condensed caps at `clamp(3.5rem, 9vw, 9rem)`, line-height 0.92, bleeding ~64px past the right viewport edge (`margin-right:-64px; overflow-x:clip`), with a 2px `#d4a017` brass pinstripe rule full-bleed beneath it.
2. The home hero is a saturated `#c1272d` Pomodoro start-banner spanning the top edge with the real `source/images/img-00.png` crest centered on it at ~200px like a finish-line emblem.
3. Every H2 and H3 carries an UPPERCASE tracked eyebrow label above it set in Archivo 700 at 0.8125rem, `letter-spacing:0.12em`, color `#7a1e22` (Bordò).
4. Every card and the hero frame wear a black-and-gold DOUBLE border: 2px `#1a1410` outer + 2px `#d4a017` inner separated by a ~4px gap.
5. Checkered-flag corner ornaments (inline SVG black/white squares) sit in the top corners of the hero band and in the `#7a1e22` Bordò footer band.
6. Each event itinerary (Home featured block + all three Eventi plates) uses numbered route markers rendered ●1 ●2 ●3 in `#1f6412` Pistacchio Ticino.
7. A Swiss white-cross chip (inline SVG: `#c1272d` rounded square + white cross) appears beside every federation/credibility line and in the footer.
8. Body text is Spectral at 1.0625rem, line-height 1.6, on the `#f4efe2` Crema surface — never pure white.
9. The primary CTA is a solid `#c1272d` pill with Archivo tracked-caps white text and ~4px radius; its only hover is a 1px brass underline, no drop shadow.
10. The Missione gallery strip photos and the Eventi Gottardo photo sit in the black-and-gold double frame and are rotated ±1.5° for a poster-paste-up feel.

BRIEF.md written.
