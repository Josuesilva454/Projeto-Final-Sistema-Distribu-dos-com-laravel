
              @if(isset($lista))
              <div class ="row">
                  @foreach($lista as $prod1)
                  
              <div class="col-3 mb-3 d-flex align-itens-stretch">
                  <div class="card">
                      <img src="{{ asset($prod1->foto) }}" class="card-img-top"/>
                         <div class="card-body">

                                       <!-- Adicionado nome e valor  -->
                                                <h6 class="corde-title">{{$prod1->nome}} - R${{$prod1->valor}}</h6>
                             <a href="{{route('adicionar_carrinho', ['idproduto' => $prod1->id ])}}" class="btn btn-sm btn-secondary">Adicionar item</a>
    
                         </div>
                  </div>
              </div> 
              @endforeach
              </div>
         
    
         @endif


