<style>
  <?php
    // GLOBAL
    require '../assets/css/globalStyle.php';
  ?>

  body{
    /* display: flex; */
    position: relative;
  }

  ul{
    list-style: none;
  }

  /* ASIDE  */
  .aside-navigation{
    /* flex: 20%; */
    position: absolute;
    top: 0;
    left: 0;
    width: 20%;
    height: 100vh;
    transition: all .3s ease-in-out;
    /* background-color: gray; */
  }
  .aside-navigation > div{
    width: 100%;
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
    padding: 10px 5px 0 0;
  }
  .aside-navigation ul li{
    font-size: 1.1rem;
    color: var(--text-secondary);
    padding: 10px;
    border-radius: 0 20px 20px 0;
    transition: all .2s ease-in-out;
    cursor: pointer;
    margin-bottom: 10px;
    background-color: rgb(228, 228, 228);
  }
  .aside-navigation ul li:hover{
    background-color: var(--color-main);
    color: white;
  }
  .aside-navigation ul li.active{
    background-color: var(--color-main);
    color: white;
  }

  /* ASIDE RESPONSIVE */
  @media (width <= 1005px) {
    .aside-navigation{
      width: 60px;
    }
    .aside-navigation ul{
      padding: 5px;
    }
    .aside-navigation ul li {
      background-color: cadetblue;
      border-radius: 10px;
    }
    .main{
      width: calc(100% - 60px) !important;
    }
  }
  /* ASIDE RESPONSIVE */
  /* ASIDE  */


  /* HEADER */
  .header-navigator{
    padding-top: 5PX;
  }
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
  .header-navigator ul li .btn-profile-hover ul a{
    color: white ;
  }
  /* HEADER */

  /* MAIN BODY */
  .main-body{
    margin: 20px 0;
  }
  /* MAIN BODY */

  /*  MAIN */
  .main{
    /* flex: 80%; */
    position: absolute;
    top: 0;
    right: 0;
    width: 80%;
    background-color: rgba(235, 235, 235, 0.692);
    padding: 0 20px;
    transition: all .3s ease-in-out;
  }
  /*  MAIN */

  /* INPUT TYPE SEARCH */
  input[type='search']{
    border: none;
    background-color: #fff0;
    border-radius: 30px;
  }
  input[type='search']:focus{
    border: 1px solid gray;
  }
  /* INPUT TYPE SEARCH */

  /* main */
</style>
</head>