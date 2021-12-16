<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            ul {
              list-style: none;
              display: flex;
            }

            .mx-3 {
              margin: 0 0.75rem
            }

            .fw-bold {
              font-weight: bold;

            }
        </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
      <nav class="links">
        <a href="/">Home</a> 
      </nav>

      <div class="title m-b-md">
        Skate Tricks
      </div>

      <nav class="links">

        <ul>
          @foreach($tricks as $trick)

          <li class="fw-bold">
            {{$trick}}
            @if (!$loop -> last)
             <span class="mx-3">
              -
              </span> 
             @endif 
            </li>
            
          @endforeach
        </ul>
      </nav>
    </div>
  </div>
</body>
</html>