<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/yestyle.css">
</head>
<body>
  <div class="preview-back">
    <div class="preview-list">
     
        <div class="nav-bar">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="location.html">Наши локации </a></li>
                <li><a href="#promo">Акции</a></li>
                <li><a href="#3">Отзывы</a></li>
                <li><a href="bronir.html">Забронировать</a></li>
                <li><a href="reg.html"> Войти</a></li>
            </ul>
        </div>
        
    </div> 
      <div class="info">
      <h1 class="textColor">«Праздник в каждый дом»</h1> 
      <br>
     <h2>Предоставляем услуги организации детских праздников
      на нашей территории в очень интересных локациях.
     Главная цель компании – сделать праздник 
     незабываемым для детей и их родителей.
      Клиенты компании «Праздник в каждый дом» имеют возможность 
        забронировать одну из предоставленных локаций для 
        органицации детского праздника. Помимо предоставления
         аренды помещения, компания предоставляет широкий
          спектр услуг, таких как: питание, услуги аниматоров,
           услуги ведущего, детского такси и т.д.</h2>
      </div>
      
  </div>
         <div class="wrapper">
          <div class="card">
           <div class="face face1">
            <div class="content">
             <img src="img/5.jpg">
             <h3>Шатер</h3>
            </div>
           </div>
           <div class="face face2">
            <div class="content">
             <p>Шатер - 2 шт.
              Вместимость - до 50 чел
              5000 р/сутки</p>
             <a href="location.html">Узнать больше</a>
            </div>
           </div>
          </div>
          <div class="card">
           <div class="face face1">
            <div class="content">
             <img src="img/10.jpg">
             <h3>Летний домик</h3>
            </div>
           </div>
           <div class="face face2">
            <div class="content">
             <p>Летний домик- 5 шт
              Вместимость - до 10 чел
              3000 р/сутки</p>
             <a href="location.html">узнать больше</a>
            </div>
           </div>
          </div>
          <div class="card">
           <div class="face face1">
            <div class="content">
             <img src="img/loc1.png">
             <h3>Беседка</h3>
            </div>
           </div>
           <div class="face face2">
            <div class="content">
             <p>Беседка - 10 шт
              Вместимость - до 15 чел
              2000 р/сутки</p>
             <a href="location.html">Узнать больше</a>
            </div>
           </div>
          </div>
         </div>
            </div>
        </div>
    </div>
    <style>
        .preview-list{
    width: 100%;
    height: 50px;
    display: flex;
    background-color: rgba(0,0,0,0.6);
    
    text-align: center;
     position: fixed;
}
.preview-back{
 background: linear-gradient( rgba(255, 255, 255, 0.8), rgba(0, 0, 0, 0.5) ), url(img/back2.jpg) no-repeat center center fixed;
    max-width: 100%;
    height: 100vh;
  
}
.nav-bar{
    width: 100%;  
}
.nav-bar > ul > li{
    list-style-type: none;
    display: inline-block;
}
.nav-bar > ul > li > a{
    text-decoration: none; 
    text-transform: uppercase;
    color: white;
    display:inline-block;
    padding:17px;
    margin-left: 55px;
    font-family: "Sono_Monospace-Medium",sans-serif;
}
.nav-bar > ul > li > a:hover{
 color: rgb(241, 160, 131);
}




.textColor{
    color: rgb(241, 160, 131);
    font-family: "RubikBubbles-Regular",sans-serif;
}


.info{
    width: 50%;
    padding: 5%;

}

.info > h1{
    text-transform: uppercase;
    font-size: 30px;


}
.info > h2{
 background-image: url(img/back-gl.png);
 background-repeat: no-repeat;
    text-transform: uppercase;
    position:relative;
    margin-top: 12px;
    color: rgb(255, 255, 255);
    font-size: 25px;
    /* background-color:rgb(231, 127, 89);
     border: 3px solid rgb(231, 127, 89); */
     border-radius: 15px;
     padding: 13px;
     font-family: "Sono_Monospace-Medium",sans-serif;
}
.wrapper{
    margin-top: 23px;
    width: 100%;
    position: relative;
    display: flex;
    justify-content: space-between;
    width: 100vh;
    padding-left: 25%;
   }
    
   .wrapper .card{
    position: relative;
    cursor: pointer;
   }
    
   .wrapper .card .face{
    width: 300px;
    height: 200px;
    transition: 0.5s;
   }
    
   .wrapper .card .face.face1{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    border-radius: 15px;
    transform: translateY(100px);
   }
    
   .wrapper .card:hover .face.face1{
    background: hotpink;
    transform: translateY(0);
   }
    
   .wrapper .card .face.face1 .content{
    opacity: 0.2;
    transition: 0.5s;
   }
    
   .wrapper .card:hover .face.face1 .content{
    opacity: 1;
   }
    
   .wrapper .card .face.face1 .content img{
    width: 258px;
    height: 134px;
   }
    
   .wrapper .card .face.face1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5em;
   }
    
   .wrapper .card .face.face2{
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 62px;
    border-radius: 15px;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
    transform: translateY(-100px);
   }
    
   .wrapper .card:hover .face.face2{
    transform: translateY(0);
   }
    
   .wrapper .card .face.face2 .content p{
    margin: 0;
    padding: 0;
   }
    
   .wrapper .card .face.face2 .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    font-weight: 900;
    color: #333;
    border-radius: 11px;
    padding: 5px;
    border: 1px solid #333;
   }
    
   .wrapper .card .face.face2 .content a:hover{
    background: #333;
    color: #fff;
   }
  
        </style>
</body>
</html>