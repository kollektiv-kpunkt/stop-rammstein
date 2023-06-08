<?php

return [

    /**
     * Language Lines for Stop Rammstein petition
     *
     */

    "site" => [
        "title" => "Signe notre pétition",
        "url" => "https://www.stop-rammstein.ch",
    ],
    "landing" => [
        "title" => "Les concerts de Rammstein doivent être annulés !",
        "subtitle" => "Stop à Lindemann & Co. :",
        "lead" => "Les accusations de violences sexuelles portées contre le chanteur principal de Rammstein, Till Lindemann, doivent être prises au sérieux ! Nous demandons à l’entreprise organisatrice d'annuler les concerts de Rammstein à Berne. L'organisation doit prendre les personnes concernées au sérieux et assurer la sécurité des participant·es au concert.<br><b class=\"font-bold\">Signez la pétition !</b>",
        "petition" => [
            "content" => [
                "Le chanteur principal du groupe Rammstein, Till Lindemann, est confronté à de graves accusations de violences sexuelles. De plus en plus de personnes concernées racontent de manière concordante les agressions et les abus de pouvoir qui, selon leurs témoignages, se sont produits lors des concerts du groupe. Malgré cela, l’entreprise suisse d’organisation de concerts Gadget ABC maintient la tenue des concerts de Rammstein les 17 et 18 juin au stade Wankdorf à Berne. C’est inacceptable !",
                "La JS Suisse a rédigé, en collaboration avec Campax, une lettre ouverte à la direction de Gadget ABC en lui demandant de se positionner clairement sur le cas Lindemann dans un délai de 24 heures et de prendre les mesures qui s'imposent. Malgré une prolongation du délai d'un jour, les réponses et les mesures prises par Gadget abc ne suffisent pas au vu de la gravité de la situation. Pour nous, il est donc clair que l'organisation ne semble pas suffisamment consciente de sa responsabilité et ne peut pas mettre en place des mesures suffisantes pour protéger les spectatrice·eurs contre les violences sexistes et sexuelles. Ainsi, après une pression considérable des médias et du public, Gadget ABC a seulement décidé à ce jour de ne pas avoir de système de «row-zero» lors des concerts et a garanti la mise en place d'une «care team». On ne sait toujours pas si l'organisation a fixé des lignes rouges claires pour les artistes et comment exactement les violences sexuelles et les accusations en la matière seront traitées de manière appropriée. L'entreprise Gadget ABC n'assume pas sa responsabilité sociale en ce qui concerne la lutte contre les violences sexistes et sexuelles. Le maintien des concerts signifie que l’organisateur se range de manière claire derrière Rammstein, ce qui constitue un très mauvais signal pour les personnes concernées.",
                "<b>Nous demandons à l'entreprise d’organisation de concerts Gadget ABC de tirer les conséquences qui s'imposent dans cette situation, d'annuler les concerts de Rammstein à Berne et de rembourser intégralement le prix des billets aux spectatrices et spectateurs.</b>"
            ],
            "sign" => "Signez maintenant !",
        ]
    ],
        "form" => [
        "title" => "Aide-nous à atteindre notre objectif !",
        "fields" => [
            [
                "type" => "text",
                "name" => "data[fname]",
                "label" => "Prénom",
                "required" => true
            ],
            [
                "type" => "text",
                "name" => "data[lname]",
                "label" => "Nom",
                "required" => true
            ],
            [
                "type" => "email",
                "name" => "email",
                "label" => "Adresse e-mail",
                "required" => true,
                "class" => "fullwidth"
            ],
            [
                "type" => "checkbox",
                "name" => "optin",
                "label" => supporterPrivacyText(),
                "required" => false,
                "checked" => true,
                "class" => "fullwidth"
            ]
        ],
        "open" => "Signer maintenant !",
        "close" => "Schliessen",
        "submit" => "Unterschreiben",
        "successmessage" => "Merci beaucoup pour ta signature ! Tu recevras sous peu un e-mail avec un lien de confirmation. Merci de cliquer sur ce lien pour confirmer ta signature.",
        "errormessage" => "Une erreur est survenue. Veuillez réessayer !"
    ],
    "email" => [
        "subject" => "Confirme ton adresse e-mail.",
        "from" => [
            "name" => "Comité «Annuler le concert de Rammstein»",
            "address" => env('MAIL_FROM_ADDRESS')
        ]
    ],
    "verification" => [
        "verified" => [
            "title" => "Merci beaucoup !",
            "text" => "Ton adresse e-mail a été confirmée avec succès.",
            "tohome" => "Retour"
        ],
        "failed" => [
            "title" => "Quelque chose s'est mal passé :(",
            "text" => "Ton adresse e-mail n'a pas pu être confirmée. Merci de réessayer plus tard ou de nous contacter !",
            "tohome" => "Retour"
        ]
    ],
];
