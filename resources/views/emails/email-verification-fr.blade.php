<p>Salut {{$supporter->data["fname"]}}</p>
<p>Merci d'avoir signé notre lettre. Merci de confirmer ton adresse e-mail afin que nous puissions nous assurer que tu es bien un être humain et non un robot.</p>
<div class="my-4">
    <a href="{{__("sr.site.url")}}/verify/{{$supporter->email_verification_token}}?email={{$supporter->email}}" class="sr-button">Confirmer l'adresse e-mail</a>
</div>
<p>Si tu ne sais pas pourquoi tu as reçu cet e-mail, tu peux simplement l'ignorer.</p>
<p>Merci encore pour ton soutien !</p>
<p>
    Le comité «Rammstein-Konzert absagen» <br />
    <a href="{{__("sr.site.url")}}">{{__("sr.site.url")}}</a>
</p>
