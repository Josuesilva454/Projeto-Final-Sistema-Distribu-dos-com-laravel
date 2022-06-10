@extends("layout")
@section("scriptjs")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
  //Ao carrega a página
  $(function(){
    $("#cfp").mask("000.000.000-00")
  })
</script>

@section("conteudo")
    <div class="col-12">
    <h2>Cadastre-se</h2>
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
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cpf" name= "cpf" id="cpf" >
</div>
</div>
<div class="col-6">
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Senha</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Senha" name= "password">
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