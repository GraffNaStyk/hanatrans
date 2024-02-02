<div>
  <span>Imię i nazwisko/ Nazwa firmy: &nbsp; <b>{{$name}}</b></span><br>
  <span>Miejsce załadunku: &nbsp; <b>{{$loading_location}}</b></span><br>
  <span>Miejsce rozładunku: &nbsp; <b>{{$unloading_location}}</b></span><br>
  <span>Telefon: &nbsp; <b>{{$phone}}</b></span><br>
  <span>Data załadunku: &nbsp; <b>{{$loading_date}}</b></span><br>
  <span>Data rozładunku: &nbsp; <b>{{$unloading_date}}</b></span><br>
  <span>Waga ładunku (kg): &nbsp; <b>{{$cargo_weight}}</b></span><br>

  @if(isset($additional_information))
    <br>
    <span>Dodatkowe informacje:</span><br>
    <span>{{$additional_information}}</span>
  @endif
</div>