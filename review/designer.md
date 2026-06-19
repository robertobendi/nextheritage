# GRAPHIC DESIGNER REVIEW

## What I saw

Home desktop (`screenshot-home-desktop.png` / `home.png`): a tall saturated pomodoro-red top banner with the crest centered on it (with a soft drop-shadow glow) and a tracked "YOUNG4VINTAGE · TICINO · SVIZZERA" caption; checkered-flag squares sit in the header strip and banner corners. Below on crema, the hero H1 runs FOUR lines — "BORN 2 LATE / 4 CLASSIC — / GUIDA / LA STORIA" — in big condensed Anton caps, with "GUIDA / LA STORIA" in red, the rest near-black. The em-dash dangles at the end of line 2. The whole heading block sits left-aligned and clearly *contained* — there is open cream gutter to its right; nothing crops off the viewport edge. A full-bleed gold rule runs under it. "Prossimo evento" shows "21 GIUGNO" as a large red Anton stamp beside a taped 4:3 car photo in a gold-ringed frame with green numbered route chips. Inner pages (`screenshot-contatti-desktop.png`, `screenshot-diventa-socio-desktop.png`) repeat the pattern: "CONTATTI" and "DIVENTA SOCIO" set huge in red/black Anton, again left-aligned and contained, eyebrow above; Socio/Sostenitore cards and the forms wear gold double-ring borders; footer is a Bordò band with checkered corners and a Swiss-cross chip.

Typography reads with genuine three-way contrast — heavy condensed Anton display, warm Spectral serif body, tracked Archivo caps for eyebrows/labels — it does NOT run monotone. Decorative motifs largely render: checkered corners, brass pinstripe rules, gold double-frames (`box-shadow: 0 0 0 4px crema, 0 0 0 6px ottone`, index.html:138), tape on the featured photo (`.tape--tl/--br`, :154), green route markers, Swiss-cross chips. The system is present. The composition signature is the problem.

## Findings

### Ship blockers (must fix before publish)

- **Hero / all page H1s — the layout signature** — `.bleed__h { margin: 0 -64px 0 0 }` (index.html:115) lives inside `.wrap { max-width: 1180px; margin-inline: auto }` (:96), and the heading sits in `.wrap hero-body` (:479) — screenshot-home-desktop.png hero region — at a 1440px viewport the 1180 container leaves ~130px gutter each side, so a −64px right margin only eats half the gutter and the heading stops ~66px short of the viewport edge. BRIEF §5/§6 fingerprint 1 commits hard: heading "bleeding ~64px past the RIGHT edge of the viewport"; §5 "What NOT to do" warns "a tidy ... Anton heading kills the poster." The one bold move renders as a tidy, fully-contained left-aligned block on every page — the poster's defining gesture is invisible. → Pull the bleed heading out of the 1180 container (anchor it to a left gutter / full-viewport-width wrapper) so it actually overshoots and crops past the right viewport edge.

### Important (should fix this revision pass)

- **Hero H1 line breaking** — screenshot-home-desktop.png, `<h1>` markup index.html:481 (`Born 2 Late<br>4 Classic — <span>Guida<br>la Storia</span>`) — the hard `<br>`s plus `text-wrap: balance` produce four ragged lines with the em-dash stranded at the end of line 2 and the color split landing mid-phrase; reads scattered, not one confident poster block. → Re-break to a controlled 3-line set with the dash leading the red phrase (e.g. "BORN 2 LATE / 4 CLASSIC / — GUIDA LA STORIA") so red carries the full sub-phrase.
- **Hero banner crest treatment** — `.hero-banner__crest { filter: drop-shadow(0 6px 14px rgba(0,0,0,.35)) }` (index.html:291), visible as a soft glow on the red banner — a glossy floating-logo shadow fights the flat 1960s-affiche idiom the brief picks (graphic confidence, "mechanical like a poster coming off the press," §5 Motion). → Drop the blur shadow; if separation is needed, use a hard 2px brass/nero keyline so the emblem reads as printed-on, not Photoshopped-on.

### Nice to have (skip if budget tight)

- **Double-crest stacking** — header crest (~44px) and the ~200px banner crest sit within one viewport height at the top of the home page (screenshot-home-desktop.png) — two near-identical shields competing close together slightly dilutes the "emblem on the start banner" focal moment. → Consider a wordmark-only or smaller mark in the header on the home route so the banner crest owns the top.
- **Double-frame order inverted** — `.frame` box-shadow stacks crema gap then ottone *outside* a nero inner border (index.html:137-138); BRIEF §6.4 specifies "2px Nero outer + 2px Ottone inner." Visually still a clean double frame, but the brass ends up as the outermost ring rather than the black. → Swap so the nero is the outer edge if matching the spec exactly matters.

## Summary for the synthesiser

The decorative system, palette discipline and type contrast all ship cleanly, but the build's ONE defined bold move — the display heading bleeding off the right viewport edge — is invisible because the bleed heading is trapped inside the 1180px centered container; without freeing it the whole page reads as a competent-but-tidy poster instead of the signature affiche the brief committed to.
