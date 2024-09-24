<style>
  <?php
    // GLOBAL
    require '../css/global.php';
  ?>

  body{
    background-color: rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  
  /* CARD LOGIN */
  .card-login{
    width: 450px;
    border: 1px solid rgb(223, 223, 223);
    padding: 10px;
    border-radius: 10px;
    box-shadow: 5px 5px 20px gray;
    background-color: rgba(255, 255, 255, 0.836);
  }
  .card-login h1{
    text-align: center;
    padding: 5px;
    color: var(--text-main);
  }
  .card-login p{
    text-align: center;
    padding: 10px;
  }
  .card-login form input{
    display: block;
    padding: 10px;
    width: 100%;
    margin-bottom: 15px;
    border: none;
    border-bottom: 2px solid gray;
  }
  .card-login form input:hover{
    border-color: rgb(52, 52, 216);
  }
  .card-login form input:focus{
    border: none;
    outline: none;
    border-bottom: 2px solid green ;
  }
  .card-login form input[type='submit']{
    background-color: var(--color-main);
    color: white;
    border: none;
    outline: none;
    transition: all .3s ease-in-out;
    cursor: pointer;
  }
  .card-login form input[type='submit']:hover{
    opacity: 7;
    transform: scale(0.98,0.98);
  }
  .s-seconday{
    display: block;
    text-align: center;
    padding: 5px;
  }
  .s-primary{
    color: var(--color-main);
    cursor: pointer;
  }
  /* CARD LOGIN */


  /* CARD REGISTRATION */
  #modalRegistrateUser .modal-body > p{
    margin-bottom: 10px;
  }
  #modalRegistrateUser .modal-body h3{
    margin-bottom: 15px;
  }
  /* CARD REGISTRATION */

  /* ALERT ERROR */
  .alert-error{
    padding: 10px;
    background-color: rgba(245, 112, 112, 0.692);
    margin-bottom: 10px;
    justify-content: center;
    display: none;
  }
  .alert-error.show{
    display: flex;
  }
  .alert-error span:last-child{
    font-size: 30px;
    color: black;
    cursor: pointer;
  }
  /* ALERT ERROR */
</style>
</head>