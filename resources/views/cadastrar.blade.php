@extends("layout")
@section("conteudo")
    <div class="col-12">
    <h2>Cadaste-se</h2>
    </div>
    <form action= "{{route('cadastrar_cliente')}}" method= "post">
    @csrf  <!-- Adicionando token  -->

   <div class = "row">
      <div class="col-6">
   <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nome</label>

  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome" name="nome">
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Email</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="email" name= "email">
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Cpf</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cpf" name= "cpf" >
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Senha</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Senha" name= "passoword">
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Endereço</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Endereço" name= "endereco">
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Numero</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Numero" name= "numero">
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Complemento</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Complemento" name="complemento">
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Cidade</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cidade" name="cidade">
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Cep</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cep"name="cep">
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Estado</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Estado" name="estado">
</div>
</div>
</form>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  </div>


   @endsection