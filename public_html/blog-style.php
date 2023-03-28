<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        
.blog1,.blog1 img{
    max-width: 100%;
    width: 300px;
    border-radius: 12px;
}
.blog1{
    box-shadow: 0px 6px 10px 0px rgb(0 0 0 / 57%);
}

.most-viewed-blogs{
    display: flex;
}
.most-viewed-blog h1.main-blog-heading{
    margin: 50px auto;
    text-align: center;
}
.blog1-content{
    padding: 10px;
    text-align: center;
}
.blog-1,.blog-2{
    display: flex;
    flex-wrap:wrap;
    /* justify-content: space-around; */
    width: 100%;
    margin: 0 15px;
}
.blog1 {
    margin: 15px 15px;
    width: calc(25% - 30px) !important;
}
.blog1-content p{
    padding: 10px 0;
    font-size: 15px;
}
.blog1-content a{
    color: #00ffee;
}
.most-viewed-blogs{
    margin: 50px 0;
}

.blog1 img {
    width: 100%;
}
/* ###### media queris###################### */
@media (max-width:2700px) and (min-width:2101px){
    .blog1, .blog1 img {
        max-width: 100%;
        width: 500px;
}
.blog1-content h1{
    font-size: 60px;
}
.blog1-content p{
    font-size: 25px;
}
.blog1-content a{
    font-size: 40px;
}
}
@media (max-width:2100px) and (min-width:1769px){
    .blog1, .blog1 img {
        width: 415px;
    }
    .blog1-content h1{
        font-size: 50px;
    }
    .blog1-content p{
        font-size: 22px;
    }
    .blog1-content a {
        font-size: 30px;
    }
}
@media (max-width:1768px) and (min-width:1420px){
    .blog1, .blog1 img {
        width: 350px;
    }
    
}
@media (max-width:1260px) and (min-width:999px){
    .most-viewed-blogs{
        flex-direction: column;
    }
    .blog-1,.blog-2{
        margin: 50px 0px;
    }
    .blog1, .blog1 img {
        max-width: 100%;
        width: 450px;
    }
    .blog1-content {
        padding: 30px;
        text-align: center;
    }
    .blog1 {
    width: calc(33.33% - 30px) !important;
}
}
@media (max-width:998px) {
    .most-viewed-blogs{
        flex-direction: column;
    }
    .blog-1,.blog-2{
        margin: 50px 0px;
    }
    .blog1 {
    width: calc(50% - 30px) !important;
}
}
@media (max-width:620px){
    .blog-1,.blog-2{
        align-items: center;
        flex-direction: column;
        margin: 0 ;
        padding: 0 15px;
    }
    .blog1{
        margin: 30px 0;
    }
    .blog1 {
    width: calc(100% - 0px) !important;
}
}

    </style>
</body>
</html>