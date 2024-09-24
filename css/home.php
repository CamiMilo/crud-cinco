<style>
  <?php
    // GLOBAL
    require '../css/global.php';
  ?>

  body{
    display: flex;
  }

  ul{
    list-style: none;
  }

  /* ASIDE  */
  .aside-navigation{
    flex: 20%;
    height: 100vh;
  }
  .aside-navigation > div{
    width: inherit;
  }
  .aside-navigation .aside-logo{
    padding: 10px;
    text-align: center;
  }
  .aside-navigation .aside-logo span{
    font-size: 30px;
    letter-spacing: 10px;
    color: var(--text-main);
  }
  .aside-navigation ul{
    padding: 10px 10px 0 0;
  }
  .aside-navigation ul li{
    font-size: 20px;
    color: var(--text-secondary);
    padding: 10px;
    border-radius: 0 20px 20px 0;
    box-shadow: -5px 5px 15px rgba(206, 206, 206);
    transition: all .2s ease-in-out;
    cursor: pointer;
    margin-bottom: 15px;
  }
  .aside-navigation ul li:hover{
    background-color: rgba(148, 148, 148, 0.2);
  }
  .aside-navigation ul li.active{
    background-color: var(--color-main);
    color: white;
  }
  /* ASIDE  */

  /* main */
  .main{
    flex: 80%;
    background-color: rgba(235, 235, 235, 0.692);
    padding: 20px;
  }

  /* HEADER */
  .header-navigator ul{
    display: flex;
    justify-content: center;
    align-items:center ;
  }
  .header-navigator ul li:first-child{
    flex: 90%;
  }
  .header-navigator ul li:first-child input{
    margin: 0;
  }
  .header-navigator ul li:last-child{
    flex: 10%;  
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .header-navigator ul li .btn-profile{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: blueviolet;
    font-size: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    position: relative;
    cursor: pointer;
  }
  .header-navigator ul li .btn-profile-hover{
    position: absolute;
    background-color: rgba(90, 90, 90);
    top: 110%;
    right: 0;
    width: 150px;
    visibility: hidden;
  }
  .header-navigator ul li .btn-profile-hover.show{
    visibility: visible;
  }
  .header-navigator ul li .btn-profile-hover ul{
    display: block;
  }
  .header-navigator ul li .btn-profile-hover ul li{
    font-size: 18px;
    padding: 10px;
    transition: all .3s ease-in-out;
    cursor: pointer;
  }
  .header-navigator ul li .btn-profile-hover ul li:hover{
    background-color: rgba(116, 115, 115);
  }
  .header-navigator ul li .btn-profile-hover ul li a{
    color: white ;
  }
  /* HEADER */

  /* MAIN BODY */
  .main-body{
    margin: 20px 0;
  }
  /* MAIN BODY */

  /* main */
</style>
</head>