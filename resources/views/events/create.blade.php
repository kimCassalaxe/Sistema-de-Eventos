@extends('layouts.main')
@section('title','criar eventos')
@section('content')
<div class="event-create-container">
  <h1>Crie o seu Evento</h1>
  <form class="form-create" enctype="multipart/form-data" action="/events" method="post">
    @csrf
    <div class="form-grup">
      <label for="txtNome">coloque a imagem do evento</label>
      <input type="file" name="image" class="input" id="txtImg">
    </div>
    <div class="form-grup">
      <label for="txtNome">Evento</label>
      <input type="text" name="txtNome" class="input" id="txtNome" placeholder="Nome do evento">
    </div>
    <div class="form-grup">
      <label for="txtData">Date do Evento</label>
      <input type="date" name="txtData" class="input" id="txtData">
    </div>
    <div class="form-grup">
      <label for="txtCity">Cidade</label>
      <input type="text" name="txtCity" id="txtCity" class="input" placeholder="qual é a cidade do evento ?">
    </div>
    <div class="form-grup">
      <label for="txtPrivate">O seu evento e privado ?</label>
      <select name="txtPrivate" id="txtPrivate">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-grup">
      <label for="txtDescrition">Adiciona itens de estrutura</label>
      <div class="checkbox-grup">
        <div class="checkbox-item">
          <input type="checkbox" name="items[]" value="cadeiras" id=""> Cadeiras
        </div>
        <div class="checkbox-item">
          <input type="checkbox" name="items[]" value="serveja grátis" id=""> Cerveja grátis
        </div>
        <div class="checkbox-item">
          <input type="checkbox" name="items[]" value="palco" id=""> Palco
        </div>
        <div class="checkbox-item">
          <input type="checkbox" name="items[]" value="open food" id=""> Open good
        </div>
        <div class="checkbox-item">
          <input type="checkbox" name="items[]" value="Brindes" id=""> Brindes</div>
        </div>
    </div>
    <div class="form-grup">
      <label for="txtDescrition">Descrição</label>
      <textarea name="txtDescrition" id="txtDescrition" placeholder="O que vai acontecer no evento"></textarea>
    </div>
    <button id="btn-submit" class="btn btn-submit" type="submit">Criar evento</button>
  </form

@endsection