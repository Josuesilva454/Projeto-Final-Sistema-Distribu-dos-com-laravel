@extends("layout")
     @section("conteudo")

     <style>
        body{
    background-color: aliceblue ;

}
.form{
    
width: 400px;
margin: auto;
padding-top: 40px;    
}
.card

{
    box-shadow: aqua;
    background-color:dimgrey;
    padding: 40px;
    border-radius: 5px;
}
.card-top{
    text-align: center;
}

.card-group{
    margin-bottom: 10px;
}
.card-group > label{
    width: 10%;
    color: rgb(14, 13, 13);
    display: block;

}
.card-group > input{
    border-radius: 5px;
    outline:0;
    width: 100%;
    height: 25 px;
    padding: 5px;

}
.card-group > button{
    background-image: linear-gradient(to right, red, black);
    width: 100%;
    border-radius: 30px;
    padding: 15px;
    color: white;
    border: 0px;
    outline: 0;

}

    .btn button:hover{
        background-image: linear-gradient( right, #4536, red, black);

    }
    

     </style> 
     <body>
     <div class= "login-tela">
       <h1> Login </h1>
       <form action="{{ route('logar')}}" method="post">
      @csrf
      <div class="card-group">
      <label> CPF </label>
      <input type="text" name="login"  placeholder= "Digite seu cpf" />
    </div>
      <div class="card-group">
      <label> Senha </label>
      <input type="password" name="senha" placeholder= "Digite sua senha"/>
      </div>
         <button> Entrar </button>
    </form>
         </div>
     </body>
   

     @endsection
     