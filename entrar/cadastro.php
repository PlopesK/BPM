<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <div class="container">
      <header>Login</header>
      <div class="progress-bar">
        <div class="step">
          <p>Nome</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="progress-bar">
        <div class="step">
          <p>Contato</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="progress-bar">
        <div class="step">
          <p>Idade</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="progress-bar">
        <div class="step">
          <p>Fim</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
   
      <div class="form-outer">
      <form name="form" method="POST" action="cadastro.php">
          <div class="page slidepage ">
            <div class="title">Basic info</div>
            <div class="field">
            <div class="label">Nome</div>
            <input type="text" name="nome">
            <i><img class="img-success" src="../icons/success-icon.svg" alt=""></i>
            <i><img class="img-error"  src="../icons/error-icon.svg" alt=""></i>
            
          </div>
          <div class="field">
            <div class="label">Sobrenome</div>
            <input type="text" name="sobrenome">
            <i><img class="img-success" src="../icons/success-icon.svg" alt=""></i>
            <i><img class="img-error" src="../icons/error-icon.svg" alt=""></i>
          </div>
          <div class="field nextBtn">
            <button>Next</button>
          </div>
          </div>

          <div class="page">
            <div class="title">Contact info</div>
            <div class="field">
            <div class="label">Email</div>
            <input type="email" name="email">
            <i><img class="img-success" src="../icons/success-icon.svg" alt=""></i>
            <i><img class="img-error"src="../icons/error-icon.svg" alt=""></i>
          </div>
          <div class="field">
            <div class="label">N??mero de telefone</div>
            <input type="text" name="numero">
            <i><img class="img-success" src="../icons/success-icon.svg" alt=""></i>
            <i><img  class="img-error" src="../icons/error-icon.svg" alt=""></i>
          </div>
          <div class="field btns">
           <button class="prev-1">Voltar</button>
           <button class="next-1">Next</button>
          </div>
          </div>

          <div class="page">
            <div class="title">Outras Informa????es</div>
            <div class="field">
            <div class="label">Data de Nascimento</div>
            <input type="text" name="data">
            <i><img class="img-success" src="icons/success-icon.svg" alt=""></i>
            <i><img class="img-error" src="icons/error-icon.svg" alt=""></i>
          </div>
          <div class="field">
            <div class="label">Sexo</div>
            <select>
              <option>Mulher</option>
              <option>Homem </option>
              <option>Outro</option>
            </select>
          </div>
          <div class="field btns">
           <button class="prev-2">Voltar</button>
           <button class="next-2">Next</button>
          </div>
          </div>

          <div class="page">
            <div class="title">Login</div>
            <div class="field">
            <div class="label">Nome de usu??rio</div>
            <input type="text" id="nickname">
            <i><img class="img-success" src="icons/success-icon.svg" alt=""></i>
            <i><img class="img-error"src="icons/error-icon.svg" alt=""></i>
          </div>
          <div class="field">
            <div class="label">Senha</div>
            <input type="password" id="senha">
            <i><img clas="img-success "src="icons/success-icon.svg" alt=""></i>
            <i><img  class="img-error"src="icons/error-icon.svg" alt=""></i>
          </div>
          <div class="field btns">
           <button class="prev-3">Voltar</button>
           <button class="submit">
            <a href="home/home.html">Enviar</a></button>
          </div>
        </div>
        </form>
      </div>
      <script src="js/teste.js"></script>
    </div>
  </body>
</html>