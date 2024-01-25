<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>enthusiast page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('build/assets/login.css') }}">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>enthusiast</span></h3>
      <h1>welcome<span>BudayaConnect</span> </h1>
      <p>this is an enthusiast page</p>
      <a href="{{ route('landing/masuk') }}" class="btn">login</a>
      <a href="{{ route('landing/register_form') }}" class="btn">register</a>
   </div>

</div>

</body>
</html>