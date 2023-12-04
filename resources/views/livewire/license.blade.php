<div>
    <h1 class="text-secondary">Votre licence est actuellement pour <strong>{{pluralize($lenght, 'personne' , 'personnes')}}</strong></h1>

    <input type="range" wire:model.live="lenght" class="form-range"  min="1" max="10" value="2">

    <h2 class="mt-5">Montant: {{money($amount)}}</h2>
</div>
 