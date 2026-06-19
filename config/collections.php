<?php

/**
 * Collections define content shape AND the public routing for Next Heritage.
 *
 * The site is content-light and date-driven, so each editorial page is wired
 * as a collection with its own `list_template`. The list page (e.g. /eventi)
 * renders that template even with zero entries — the brand copy lives in the
 * Twig templates — while the admin still gets a real CRUD surface for when the
 * association wants to manage events, mission text, etc. from /admin.
 */

return [

    'pages' => [
        'label'          => 'Pages',
        'label_singular' => 'Page',
        'icon'           => 'file',
        'route'          => '/{slug}',
        'template'       => 'page.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title'            => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'             => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'             => ['type' => 'markdown', 'label' => 'Body'],
            'meta_description' => ['type' => 'textarea', 'label' => 'Meta description'],
        ],
    ],

    // Eventi 2026 — the three dated rallies are the site's primary content.
    'eventi' => [
        'label'          => 'Eventi',
        'label_singular' => 'Evento',
        'icon'           => 'calendar',
        'route'          => '/eventi/{slug}',
        'template'       => 'event.twig',
        'list_template'  => 'eventi.twig',
        'order_by'       => 'date_start ASC',
        'fields' => [
            'title'      => ['type' => 'text', 'required' => true, 'label' => 'Nome evento'],
            'slug'       => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'date_label' => ['type' => 'text', 'label' => 'Data (testo, es. 21 GIUGNO)'],
            'date_start' => ['type' => 'datetime', 'label' => 'Data inizio'],
            'route'      => ['type' => 'textarea', 'label' => 'Tappe del percorso (una per riga)'],
            'summary'    => ['type' => 'textarea', 'label' => 'Descrizione'],
            'cta_url'    => ['type' => 'url', 'label' => 'Link iscrizione'],
            'featured'   => ['type' => 'boolean', 'label' => 'In evidenza'],
        ],
    ],

    'missione' => [
        'label'          => 'Missione',
        'label_singular' => 'Sezione missione',
        'icon'           => 'flag',
        'route'          => '/missione/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'missione.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Titolo'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'  => ['type' => 'markdown', 'label' => 'Testo'],
        ],
    ],

    'socio' => [
        'label'          => 'Diventa socio',
        'label_singular' => 'Sezione socio',
        'icon'           => 'user-plus',
        'route'          => '/diventa-socio/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'diventa-socio.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Titolo'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'  => ['type' => 'markdown', 'label' => 'Testo'],
        ],
    ],

    'contatti' => [
        'label'          => 'Contatti',
        'label_singular' => 'Sezione contatti',
        'icon'           => 'mail',
        'route'          => '/contatti/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'contatti.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Titolo'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'  => ['type' => 'markdown', 'label' => 'Testo'],
        ],
    ],

    // Public submission endpoints kept for the admin; the static site posts to
    // Formspree (see templates), so these mirror the form fields for reference.
    'richiesta_socio' => [
        'label'          => 'Richieste soci',
        'label_singular' => 'Richiesta',
        'is_form'        => true,
        'fields' => [
            'nome'     => ['type' => 'text', 'required' => true, 'label' => 'Nome'],
            'cognome'  => ['type' => 'text', 'label' => 'Cognome'],
            'email'    => ['type' => 'text', 'required' => true, 'label' => 'Email'],
            'ruolo'    => ['type' => 'select', 'options' => ['Socio', 'Sostenitore'], 'label' => 'Ruolo'],
            'messaggio'=> ['type' => 'textarea', 'label' => 'Messaggio'],
        ],
    ],

    'contact' => [
        'label'          => 'Contatti ricevuti',
        'label_singular' => 'Messaggio',
        'is_form'        => true,
        'fields' => [
            'name'    => ['type' => 'text', 'required' => true, 'label' => 'Nome'],
            'email'   => ['type' => 'text', 'required' => true, 'label' => 'Email'],
            'message' => ['type' => 'textarea', 'required' => true, 'label' => 'Messaggio'],
        ],
    ],

];
