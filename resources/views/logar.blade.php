@extends("layout")
     @section("conteudo")
     
     <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background-image: blue;
        }
     </style> 
     <body>
     <div>
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