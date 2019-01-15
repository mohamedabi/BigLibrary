

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="styl.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<title>PHP Live MySQL Database Search</title>
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 700px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
        margin-top: 50px;
        margin-left: 300px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;

        margin-left: 300px;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){

        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){

                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    

    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>

    <nav class="navbar navbar-inverse" style="width:1340px " >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"   href="index.php">BigLibrary</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="contact.php">contact</a></li>
      <li><a href="search-form.php">Search</a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Registeration.php">welcome
<span class="glyphicon glyphicon-user"></span></a></li>
      <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
    </ul>
  </div>
</nav>



<img src="http://avante.biz/wp-content/uploads/Books-Wallpaper/Books-Wallpaper-009.jpg" width="1030px;" height="400px;" style="border-radius: 50px 50px; margin-right: -100px; margin-left: 160px;">
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Book ..." />
        <div class="result"></div>

    </div>
<h1 style="margin-top: -450px; margin-left: 400px; font-size: 50px;">Search About Your Book</h1>
</body>
</html>
