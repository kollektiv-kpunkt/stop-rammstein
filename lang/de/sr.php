<?php

return [

    /**
     * Language Lines for Stop Rammstein petition
     *
     */

    "site" => [
        "title" => "Unterschreibe unsere Petition",
        "url" => "https://stop-rammstein.ch",
    ],
    "landing" => [
        "title" => "Rammstein-Konzert absagen",
        "subtitle" => "Lindemann & Co. stoppen:",
        "lead" => "Die Vorwürfe gegen den Rammstein-Leadsänger Till Lindemann bezüglich sexualisierter Gewalt müssen ernst genommen werden! Wir fordern den Konzertveranstalter auf, die Rammstein-Konzerte in Bern abzusagen! Der Veranstalter muss die Betroffenen ernst nehmen und die Sicherheit der Konzertteilnehmer*innen sicherstellen.<br><b class=\"font-bold\">Unterschreibe die Petition!</b>",
        "petition" => [
            "content" => [
                "Der Frontsänger der Band Rammstein, Till Lindemann, ist mit harten Vorwürfen von sexualisierter Gewalt konfrontiert. Immer mehr Betroffene erzählen in übereinstimmender Art und Weise von Übergriffen und Machtmissbrauch, die sich laut ihren Berichten bei den Konzerten der Band zugetragen haben. Trotzdem hält der Schweizer Konzertveranstalter Gadget abc daran fest, die Rammstein-Konzerte am 17. und 18. Juni im Wankdorfstadion in Bern durchzuführen. Das geht nicht!",
                "Die JUSO Schweiz hat zusammen mit Campax einen offenen Brief an das Management von Gadget abc verfasst und dieses dazu aufgefordert, sich innerhalb von 24 Stunden klar zum Fall Lindemann zu positionieren und entsprechende Massnahmen zu ergreifen. Die Antworten und Massnahmen von Gadget abc reichen selbst nach einer Verlängerung um einen Tag für die Tragweite der Situation  nicht aus. Für uns ist somit klar: Der Veranstalter scheint sich seiner Verantwortung nicht genügend bewusst und kann keine ausreichenden Massnahmen zum Schutz der Teilnehmenden vor sexualisierter Gewalt gewährleisten. So beschloss Gadget ABC nach erheblichem Druck der Medien und Öffentlichkeit bisher lediglich, an den Konzerten kein “Row-Zero”-System zu haben und hat weiter den Einsatz eines Care-Teams zugesichert. Wo und ob der Veranstalter bei Künstler*innen eine klare rote Linie setzen würde und wie genau angemessen mit sexualisierter Gewalt und entsprechenden Vorwürfen umgegangen wird, ist weiterhin unklar. Der Veranstalter Gadget abc nimmt seine gesellschaftliche Verantwortung im Bezug auf den Umgang mit sexualisierter Gewalt und entsprechenden Vorwürfen nicht wahr. Die Durchführung der Konzerte bedeutet eine klare Positionierung hinter Rammstein und ist das falsche Zeichen an Betroffene.",
                "<b>Wir fordern den Konzertveranstalter Gadget abc dazu auf, in dieser Situation die richtigen Konsequenzen zu ziehen, die Rammstein-Konzerte in Bern abzusagen und den Konzertbesucher*innen den vollen Ticketpreis zurückzuerstatten.</b>"
            ],
            "sign" => "Jetzt unterschreiben!",
        ]
    ],
        "form" => [
        "title" => "Hilf mit, damit wir unser Ziel erreichen!",
        "defaultPrivacy" => "Ich bin einverstanden, dass mich das Komitee auf dem Laufenden hält. <a class=\"underline\" href=\"/privacy\">Mehr dazu in unseren Datenschutzbestimmungen</a>.",
        "fields" => [
            [
                "type" => "text",
                "name" => "data[fname]",
                "label" => "Vorname",
                "required" => true
            ],
            [
                "type" => "text",
                "name" => "data[lname]",
                "label" => "Nachname",
                "required" => true
            ],
            [
                "type" => "email",
                "name" => "email",
                "label" => "E-Mail Adresse",
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
        "open" => "Jetzt unterschreiben!",
        "close" => "Schliessen",
        "submit" => "Unterschreiben",
        "successmessage" => "Vielen Dank für deine Unterschrift! Du erhältst in Kürze eine E-Mail mit einem Bestätigungslink. Bitte klicke auf diesen Link, um deine Unterschrift zu bestätigen.",
        "errormessage" => "Es ist ein Fehler aufgetreten. Bitte versuche es nochmals!"
    ],
    "email" => [
        "subject" => "Bitte bestätige deine E-Mail Adresse.",
        "from" => [
            "name" => "Komitee «Rammstein-Konzert absagen»",
            "address" => env('MAIL_FROM_ADDRESS')
        ]
    ],
    "verification" => [
        "verified" => [
            "title" => "Vielen Dank!",
            "text" => "Deine E-Mail Adresse wurde erfolgreich bestätigt.",
            "tohome" => "Zur Startseite"
        ],
        "failed" => [
            "title" => "Es ist etwas schief gelaufen :(",
            "text" => "Deine E-Mail Adresse konnte nicht bestätigt werden. Bitte versuche es später noch einmal oder kontaktiere uns!",
            "tohome" => "Zur Startseite"
        ]
    ],
];
