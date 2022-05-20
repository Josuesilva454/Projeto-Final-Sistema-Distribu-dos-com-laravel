@extends("layout")
@section("conteudo")
     
    <h3>Carrinho</h3>
  @f(isset($cart) && count($cart) > 0)
   
  <table class="table">
      <thead>
          <tr>
              <th>Nome</th>
          </tr>
      </thead>
  </table>
  <tbody>
      @foreach($cart as $p)
      <tr>
          <td>{{ $p->nome}}</td>
      </tr>
      @endforeach
</tbody>
</table>
@else
   <p>Nenhum item no carrinho</p>
   @endif

   @endsection