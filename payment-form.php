<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registraction Form</title>
  </head>

  <style>
    body {
      background: url("/img/donation.jpg");
      background-size: cover;
      background-position: center;
    }
    form {
      color: white;
      border-radius: 10px;
      width: 50%;
      margin: 100px auto;
      background-color: rgba(20, 20, 20, 0.568);
      padding: 10px;
      height: 340px
    }
    .caption {
      color: white;
      text-align: center;
      text-shadow: 0 1px 2px 1px black;
    }
    .container {
      width: 80%;
      margin: auto;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    input{
      width: 100%;
      padding: 5px 10px;
      outline: none;
      border: none;
      border-radius: 5px;
    }
    .data {
      margin: 10px;
    }
     .button{
               width: 100%;
      padding: 5px 10px;
      outline: none;
      border: none;
      border-radius: 5px;
      padding: 8px 8px;
      font-size: 14px;
      font-weight: bold;
      text-align: center;
      width: 90px;
      outline: none;
      transition: 0.3s;
      border: none;
      text-decoration:none;
      color:black;
      margin: auto;
      background-color:white;
    }
    #btn{
        display: flex;
    }
    .button:hover {
      cursor: pointer;
      background-color: rgba(0, 0, 0, 0.37);
      color: white;
    }
    @media (max-width:1000px){
        .data{
            font-size: 14px;
        }
        .button{
            font-size: 10px;
            width: 80px;
        }
    }
    @media (max-width:530px){
        .caption{
            font-size: 20px;
        }
        .container{
            width: 80%;

        }
        .button{
            width: 70px ;
            font-size: 8px;
        }
    }
  </style>
  <body>
    <form action="pay.php"  method="post">
      <h1 class="caption">Registration</h1>
      <div class="container">
        <div class="data">
          <label for="name">Name : </label><br />
          <input type="text" required name="name" id="name" />
        </div>
        <div class="data">
          <label for="phone">Phone : </label><br />
          <input type="tel" required name="phone" id="phone" />
        </div>
        <div class="data">
          <label for="email">Email : </label><br />
          <input type="email" required name="email" id="email" />
        </div>
        <div class="data">
          <label for="email">Amount : </label><br />
          <input type="number" required name="amount" id="amount" />
        </div>
        <div id="btn" class="data">
          <!--<input  class="button" type="submit" value="Donate Now">-->
          <a class="button" href="https://rzp.io/l/rStqWWNV">Donate Now</a>
        </div>
      </div>
    </form>
  </body>
</html>
