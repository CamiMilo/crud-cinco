 /* GLOBAL */
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
  }
  :root{
    --color-main: rgb(52, 52, 216);
    --text-main: rgb(59, 59, 59);
    --text-secondary: rgb(85, 85, 85);
  }
  .con{
    max-width: 1400px;
    margin: 0 auto;
  }
  a{
    text-decoration:none;
  }

  /* INPUT */
  input{
    display: block;
    padding: 10px;
    width: 100%;
    border: none;
    border-bottom: 2px solid gray;
    z-index: 4;
  }
  input:hover{
    border-color: rgb(52, 52, 216);
  }
  input:focus{
    border: none;
    outline: none;
    border-bottom: 2px solid green ;
  }
  input[type='submit']{
    background-color: var(--color-main);
    color: white;
    border: none;
    outline: none;
    transition: all .3s ease-in-out;
    cursor: pointer;
    margin-bottom: 10px;
  }
  input[type='submit']:hover{
    opacity: 7;
    transform: scale(0.98,0.98);
  }
  /* INPUT */

  /* 
   */
  .modal{
    position: fixed;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
    visibility: hidden;
    transition: all .2s ease-in;
    opacity: 0;
    overflow: auto;
  }
  .modal.show{
    visibility: visible;
    opacity: 1;
  }
  .modal .modal-content{
    width: 600px;
    background-color: white;
    border-radius: 20px;
    transform: translateY(-100px);
    opacity: 0;
    transition: all .2s ease-in;
    transform: scale(0.8,0.8);
    margin: 100px;
  } 
  .modal .modal-content.show{
    transform: translateY(0);
    transform: scale(1,1);
    opacity: 1;
  }
  .modal .modal-content .modal-head h2{
    padding: 15px;
  }
  .modal .modal-content .modal-head .btn-close{
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 30px;
    color: gray;
    transition: all .3s ease-in-out ;
    cursor: pointer;
  }
  .modal .modal-content .modal-head .btn-close:hover{
    opacity: 7;
  }
  .modal .modal-content .modal-body{
    padding: 0 15px;
  }
  /* MODAL */

  /* PASSWORD INPUT */
  .password-container{
    position: relative;
  }
  .password-container span{
    position: absolute;
    top: 0;
    right: 0;
    padding: 5px 7px;
    /* border: 1px solid rgb(212, 210, 210); */
    border-radius: 10px;
    transition: all .3s ease-in-out;
    cursor: pointer;
    color: var(--text-secondary);
  }
  .password-container span:hover{
    background-color: rgb(212, 210, 210, 0.5);
  }
  /* PASSWORD INPUT */

  /* LABEL BY INPUT */
  .input-control{
    position: relative;
    margin-bottom: 20px;
  }
  .input-control label {
    position: absolute;
    top: 10px;
    left: 1%;
    transition: all .2s ease-in-out;
    color: var(--text-secondary);
    font-size: 14px;
  }
  .input-control label.active{
    top: -10px;
    left: 0;
    color: green;
  }
  .input-control label.error{
    color: rgba(236, 90, 90);
  }
  /* LABEL BY INPUT */

  /* ERROR CONTAINER TO REGISTER USER */
  .invalid-feedback{
    margin-top: 5px;
    color: rgba(236, 90, 90);
  }
  input.error{
    border-bottom:1px solid  rgba(236, 90, 90);
  }
  /* ERROR CONTAINER TO REGISTER USER */
  /* GLOBAL */