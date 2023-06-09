<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <style>
        * {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  
  }
  
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  *p {
    font-family: Lato, Helvetica, sans-serif;
  }
  
  nav {
    background: #00bfb3;
    height: 80px;
  }
  
  .nav-pic,
  .nav-pic img {
    max-width: 100%;
    width: 100%;
    object-fit: fill;
    object-position: center;
    height: 350px;
    position: relative;
  }
  
  .nav-pic::after {
    display: block;
    margin: 0;
    padding: 0;
    content: '';
    position: absolute;
    top: 0%;
    background-color: rgba(0, 0, 0, 0.623);
    width: 100%;
    height: 350px;
    z-index: 1;
    opacity: 1;
    transition: opactity 0.3s ease-in-out;
  }
  
  a:hover {
    color: rgb(244, 152, 0);
  }
  
  .about1 {
    display: flex;
    margin: 80px auto;
    justify-content: space-between;
    padding: 50px 0;
    margin: auto 200px;
    border-bottom: 3px solid;
  }
  
  .about1:last-child{
    border-bottom:0
  }
  
  
  .abouts5 {
    border: none;
  }
  
  .about-img {
    width: 200px;
  }
  
  .about-content {
    max-width: 100%;
    width: 500px;
    display: flex;
    flex-direction: column;
    height: 160px;
    justify-content: space-between;
  }
  
  .heading {
    width: max-content;
    position: absolute;
    top: 14%;
    left: 50%;
    transform: translate(-50%, 50%);
    color: #fff;
    font-size: 60px;
    z-index: 3;
  }
  
  .about-img img {
    max-width: 100%;
    width: 200px;
    height: 200px;
    object-fit: fill;
    object-position: center;
    border-radius: 20px;
    box-shadow: 2px 2px 2px lightgrey;
  }
  
  /* ############# media screen############################ */
  
  @media (max-width:1150px) {
    .about1 {
      margin: auto;
      display: block;
    }
  
    .about-content {
      text-align: center;
      margin: auto;
    }
  
    .about-img img {
      max-width: 100%;
      width: 400px;
      height: 400px;
    }
  
    .about-content p {
      padding: 20px;
    }
  
    .about-img {
      width: 350px;
      margin: 40px auto;
    }
  }
  
  
  @media (max-width:760px) and (min-width:560px){
    .heading {
      width: max-content;
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, 50%);
      color: #fff;
      font-size: 45px;
      z-index: 3;
  }
  }
  @media (max-width:800px) and (min-width:650px) {
    .about-content {
      width: 550px;
    }
    
    .about-img {
      width: 400px;
    }
  }
  
  @media (max-width:560px) and (min-width:320px) {
    .heading {
      top: 35%;
      font-size: 30px;
  }

.about_img img{
      width: 100%;
  }
    
  }
  
  @media (max-width:980px) and (min-width:801px) {
    .about-content {
      width: 750px;
    }
  
    .about-content p {
      padding: 30px;
      font-size: 20px;
    }
  
    .about-img,
    .about-img img {
      width: 500px;
      object-fit: fill;
    }
  
    .footer-logo .footer-content p {
      font-size: 15px;
      margin: 15px 0;
    }
  
  }
  
  @media (max-width:1149px) and (min-width:981px) {
    .about-content {
      width: 850px;
    }
  
    .about-content p {
      font-size: 25px;
    }
  
    .about-img {
      width: 600px;
      margin: 60px auto;
    }
  
    .about-img img {
      width: 600px;
      object-fit: fill;
    }
  }
  
  @media (max-width:1768px) and (min-width:1326px) {
    .about-content p {
      font-size: x-large;
    }
  
    .about-content {
      height: 250px;
    }
  
    .about-img img,
    .about-img {
      width: 400px;
      height: 300px;
    }
  }
  
  @media (max-width:2700px) and (min-width:1769px) {
    .about-content {
      width: 650px;
      height: 400px;
    }
  
    .about-img img,
    .about-img {
      width: 500px;
      height: 400px;
    }
  
    .about-content p {
      font-size: 35px;
    }
  }

    </style>
</body>
</html>