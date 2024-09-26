<style>
  <?php
    // GLOBAL
    require '../assets/css/globalStyle.php';
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
  .alert-error span:first-child{
    flex: 95%;
    display: flex;
    align-items: center;
  }
  .alert-error span:last-child{
    font-size: 30px;
    color: black;
    cursor: pointer;
    flex: 5%;
  }
  /* ALERT ERROR */


  /* ALERT SUCCESS */
  .alert-success{
    padding: 10px;
    background-color: rgb(160, 209, 115);
    margin-bottom: 10px;
    justify-content: center;
    display: none;
  }
  .alert-success.show{
    display: flex;
  }
  .alert-error span:first-child{
    flex: 95%;
    display: flex;
    align-items: center;
  }
  .alert-success span:last-child{
    font-size: 30px;
    color: black;
    cursor: pointer;
    flex: 5%;
  }
  /* ALERT SUCCESS */
</style>