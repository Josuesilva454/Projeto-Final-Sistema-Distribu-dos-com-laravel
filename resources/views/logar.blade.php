@extends("layout")
     @section("conteudo")
     
     <style>
        body{
            font-family:Arial, Helvetica, sans-serif; 
        }
          .login-tela{
           background-color: rgba(0,0,0, 0.8);
           position: absolute;
          

        }
     </style> 
     <body>
     <div class= "login-tela">
       <h1> Login </h1>
       <form action="{{ route('logar')}}" method="post">
      @csrf
      <input type="text" name="login"  placeholder= "Nome">
      <br>  </br>

      <input type="password" name="senha" placeholder= "senha">
      <br>  </br>
         <button> Entrar </button>
    </form>
         </div>
     </body>
   

     @endsection
     