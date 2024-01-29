<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color:#80006B;
            color: #fff;
            padding: 20px;
            text-align: right;
            height:89px;
        }

        
     
        nav {
            width: 250px;
            height: 100vh;
            background-color:#80006B;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        nav a {
            padding: 15px 15px 15px 30px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.3s;
        }

        nav a:hover {
            background-color: #ddd;
            color: #333;
        }

        .dropdown {
            display: services;
        }

        main {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.5s;
        }

        #toggle-btn {
            font-size: 20px;
            cursor: pointer;
            padding:20px;
            position: fixed;
            left: 20px;
            top: 20px;
            z-index: 2;
        }
    
    

/* Rest of your existing styles */



    </style> 
</head>

<body>
        
    <header>
        <i class="fa fa-bell" style="font-size:24px;margin-right:100px;"></i>
      

    </header>
    
    
    <nav id="sidebar">
      
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                <a href="{{route('zones.dashboard')}}" style="margin-top:-37px;font-size:28px;">ERT Dashboard</a>
              </div>
       
        <a href="{{route('zones.dashboard')}}">Dashboard</a>

       
        
        
          <script>
            document.addEventListener('DOMContentLoaded', function () {
              var servicesDropdown = document.getElementById('servicesDropdown');
              var services1Link = document.getElementById('services1Link');
          
              servicesDropdown.addEventListener('click', function () {
                // Open Services 1 page when the Services dropdown is clicked
                window.location.href = services1Link.getAttribute('href');
              });
            });
          </script>

      <a href="{{route('zones.index')}}">Zone Master</a>
      <a href="{{route('specialization.index')}}">Specialization</a>
      <a href="{{route('ert.index')}}">ERT Members</a>
      <a href="{{route('report.index')}}">Reports</a>
     
    </nav>


    <style>
        main {
            text-align: center; /* Aligns the text within the main element to the center */
        }
    
        h1 {
            display: inline-block; /* Makes the h1 element behave like an inline block */
        }
    </style>
    
    <main>
      
    </main>
    <

      
     

    <script>
        
       
        document.querySelectorAll('.dropdown').forEach(function (item) {
            item.addEventListener('click', function () {
                this.classList.toggle('active');
            });
        });
  


    <script>
     

        function scrollToTop() {
            // Use document.documentElement or document.body depending on browser compatibility
            var scrollToTop = window.requestAnimationFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
            var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

            if (scrollTop > 0) {
                scrollToTop(scrollToTop);
                window.scrollTo(0, scrollTop - scrollTop / 8);
            }
        }

        document.querySelectorAll('.dropdown').forEach(function (item) {
            item.addEventListener('click', function () {
                this.classList.toggle('active');
            });
        });
    </script>

    <main>


                
@yield('content')
</main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 

