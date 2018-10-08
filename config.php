<?php
/*
 * Global config for VDN features // $VDN_CONFIG['']
 */
$VDN_CONFIG = array(
    'user_action_notification_email' => 'salome.hurel+sitevdn@bibliosansfrontieres.org', // leave blank to disable notification
    'open_fiches_in_new_tab' => true,
    'display_referent_email' => true,
    'vdn_event_types' => array(
        'atelier'=>array(
            'label'=>'Atelier',
            'slug'=>'atelier',
            'color'=>'e95a51',
            'letter'=>'A',
        ),
        'formation_animateurs'=>array(
            'label'=>'Formation d animateurs VDN',
            'slug'=>'formation_animateurs',
            'color'=>'5071b6',
            'letter'=>'F',
        ),
        'apero_VDN'=>array(
            'label'=>'Apéro VDN',
            'slug'=>'apero_VDN',
            'color'=>'f47726',
            'letter'=>'P',
        ),
        'tour_de_france'=>array(
            'label'=>'Tour de France',
            'slug'=>'tour_de_france',
            'color'=>'3e3e60',
            'letter'=>'T',
        ),
    ),
    'vdn_fiche_types' => array(
        'activite'=>array(
            'label'=>'Fiche activité',
            'color'=>'e95a51',
        ),
        'parcours'=>array(
            'label'=>'Parcours pédagogique',
            'color'=>'5071b6',
        ),
        'outil'=>array(
            'label'=>'Conseils et médiation',
            'color'=>'3e3e60',
        ),
    ),
    'coordinateurs_bsf' => array(
        'autre'=>array(
            'label'=>'Autre', 
            'email'=>'voyageursdunumerique+sitevdn@bibliosansfrontieres.org'
        ),
        'PACA'=>array(
            'label'=>'Région PACA', 
            'email'=>'roseline.faliph@bibliosansfrontieres.org'
        ),
        'hauts_de_france'=>array(
            'label'=>'Région Hauts-de-France', 
            'email'=>'adrien.bertrand@bibliosansfrontieres.org'
        ),
        'grand_est'=>array(
            'label'=>'Région Grand-Est', 
            'email'=>'charles.thomassin@bibliosansfrontieres.org'
        ),
        'nouvelle-aquitaine'=>array(
            'label'=>'Région Nouvelle-Aquitaine', 
            'email'=>'charlene.palard@bibliosansfrontieres.org'
        ),
        'belgique'=>array(
            'label'=>'Belgique', 
            'email'=>'dimitri.verboomen@bibliosansfrontieres.org'
        ),
    ),
    'disclaimer_html_content' => "
            <div class='vdn_nonbsf_disclaimer'>
                Cette contribution a été rédigée par un membre de la communauté des Voyageurs du Numérique. <br>
                Afin d'inciter la créativité des participants, l'équipe de Voyageurs du Numérique publie ce contenu sans validation préalable.
                <br><u>Bibliothèques sans Frontières n'engage pas sa responsabilité sur le contenu de ces fiches.</u> <br>
                Si un contenu vous semble inapprorié, merci de nous le signaler depuis la page Ecrivez-nous. <br>
                L'équipe des Voyageurs du Numérique.
            </div>
            "
);
