<p>Hallo {{$supporter->data["fname"]}}</p>
<p>Danke, dass du unseren Brief unterschrieben hast. Bitte bestätige deine E-Mail Adresse, damit wir sicherstellen können, dass du ein Mensch und kein Roboter bist.</p>
<div class="my-4">
    <a href="{{__("sr.site.url")}}/verify/{{$supporter->email_verification_token}}?email={{$supporter->email}}" class="sr-button">E-Mail Adresse bestätigen</a>
</div>
<p>Wenn du nicht weißt, warum du diese E-Mail erhalten hast, kannst du sie einfach ignorieren.</p>
<p>Nochmals vielen Dank für deine Unterstützung!</p>
<p>
    Das Komitee «Rammstein-Konzert absagen» <br />
    <a href="{{__("sr.site.url")}}">{{__("sr.site.url")}}</a>
</p>

<p style="margin-top: 3rem">
    Falls du nicht auf den Link klicken kannst, kopiere ihn hier und füge ihn in deinen Browser ein: {{__("sr.site.url")}}/verify/{{$supporter->email_verification_token}}?email={{$supporter->email}}
</p>
