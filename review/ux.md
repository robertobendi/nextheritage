# USER EXPERIENCE REVIEW

## What I saw

Home desktop (`screenshot-home-desktop.png` / `home.png`): a saturated pomodoro-red top band carries the crest centered and the tracked caps "YOUNG4VINTAGE · TICINO · SVIZZERA"; below on crema, a giant black/red Anton headline "BORN 2 LATE 4 CLASSIC — GUIDA LA STORIA", a one-line subhead naming the association and its mission, then two buttons — red "DIVENTA SOCIO" pill + ghost "VEDI GLI EVENTI". Scrolling: a "PROSSIMO EVENTO" block with "21 GIUGNO" huge in red, a route list, and a framed photo of a silver BMW 328 race car; then a "LA NOSTRA MISSIONE / UN PONTE TRA GENERAZIONI" pull-quote band; then "CALENDARIO / EVENTI 2026". **Both home screenshots are truncated at the "EVENTI 2026" heading** — I verified the rest from `docs/index.html`: a three-card mini-grid (Gottardo Classic reusing the *same* `bmw328-race.jpg`, plus two Alfa Romeo stock shots), a Swiss-cross federation credibility line, a black closing "DIVENTA PARTE DELLA COMUNITÀ" CTA band, and a Bordò footer with crest, email, and federation credit.

Inner pages render cleanly and on-message: `diventa-socio` has a "DIVENTA SOCIO" hero, a "SCEGLI IL TUO RUOLO" Socio-vs-Sostenitore card pair, and a membership form; `contatti` leads with the on-voice "VIENI A GUIDARE CON NOI", an email line, a form, and a "IL TICINO DELLE AUTO STORICHE" region block (the green-duotone lake photo renders as a murky dark slab). Critically: across the entire home page and both sub-pages there is **not one photograph of a person, a member, or an actual Next Heritage event** — every image is a depopulated classic-car beauty shot.

## Findings

### Ship blockers (must fix before publish)

- **Home trust/social proof** — all photos (`screenshot-home-desktop.png` PROSSIMO EVENTO frame + the three EVENTI 2026 cards in `docs/index.html:512,540,549,558`) are depopulated stock car shots, and `bmw328-race.jpg` is reused twice (hero featured block AND first mini-card) — the page's whole objective (BRIEF §1: convert young enthusiasts *and their families* to *become members*) hinges on "join this community," yet a first-time visitor sees zero people, zero faces, zero testimonials, and an image repeated like a placeholder, so there is no evidence anyone is actually a member → put at least one real candid event/group photo (the brief's "DanKe Dani" snapshot, `source/screenshot.png`) on the home page and stop reusing the BMW shot across two slots.

### Important (should fix this revision pass)

- **Mission copy** — `docs/index.html:527` (rendered in the "UN PONTE TRA GENERAZIONI" band) — "La vera eredità non è soltanto conservare ciò che abbiamo ricevuto, ma renderlo vivo e rilevante per chi verrà dopo di noi. Favoriamo l'incontro tra esperienza e innovazione, trasformando la memoria in opportunità." is exactly the lyrical haze BRIEF §1/§3 voice said to cut ("trasformando la memoria in opportunità" is generic abstract filler) → rewrite in concrete insider voice naming what actually happens (parents and kids driving the rallies together), e.g. lead with the real activity, not "esperienza e innovazione".
- **Duplicate next-event** — `screenshot-home-desktop.png` PROSSIMO EVENTO block vs. the first EVENTI 2026 mini-card (`docs/index.html:494-516` and `538-546`) — Gottardo Classic / 21 Giugno appears twice, with the identical photo and both CTAs pointing to `/eventi`, wasting the prime scan path and reading as thin content → drop Gottardo from the mini-grid (or show only the two *other* events there) so the featured block and the calendar don't repeat the same event.
- **Hero headline scent** — `screenshot-home-desktop.png` hero (`docs/index.html:481`) — the dominant element a first-timer reads is the slang/bilingual tagline "BORN 2 LATE 4 CLASSIC — GUIDA LA STORIA", which alone does not say what the org *does* or who it's *for*; the 5-second test only passes because the smaller subhead rescues it → this is brief-sanctioned copy, but ensure the subhead stays immediately adjacent and never drops below the fold on smaller viewports, since it is carrying the entire value prop.

### Nice to have (skip if budget tight)

- **Contact/trust facts** — footer + `contatti` page — only an email and "Ticino, Svizzera" are given; no phone, no address, no "attiva dal / X edizioni" longevity stat on the home page (the "8ª edizione" tag in the featured block is the only one) → surface an established-since or member/edition count near the closing CTA to reinforce the join decision for the parent/federation audience.

## Summary for the synthesiser

A membership-conversion home page that shows zero people and recycles one stock car photo gives a first-time visitor no reason to believe a community exists to join — fixing the trust/social-proof gap is the single highest-leverage UX change.
