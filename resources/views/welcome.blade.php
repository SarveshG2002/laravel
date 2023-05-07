
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        body {
            margin: 0px;
            background-color: #001a2d;

        }

        .header {
            width: 100%;
            box-sizing: border-box;
            /* background-color: aliceblue; */
            padding: 10px;
            display: grid;
            grid-template-columns: 20% 60% 10% 10%;
            animation-name: up_d;
            animation-duration: 3s;
            margin-top: 10px;
        }

        @keyframes up_d {
            from {
                margin-top: -60px;
            }

            to {
                margin-top: 0px;
            }
        }

        input {
            background: none;
            width: 90%;
            /* display: block; */
            margin: 0px auto;
            font-size: 25px;
            border-radius: 5px;
            border-width: 1px;
            border-color: aliceblue;
        }

        .but {
            font-size: 25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
            color: aliceblue;
        }

        .but:hover {
            cursor: pointer;
        }

        .mid_box {
            /* background-color: aliceblue; */
            width: 100%;
            margin-top: 50px;
            color: aliceblue;
        }

        .mid_box .welcome  div{

            width: fit-content;
            overflow: hidden;
            /* Ensures the content is not revealed until the animation */
            border-right: .15em solid orange;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 50px;
            /* The typwriter cursor */
            white-space: nowrap;
            /* Keeps the content on a single line */
            margin: 0 auto;
            /* Gives that scrolling effect as the typing happens */
            /* letter-spacing: .5em; */
            /* Adjust as needed */
            animation:
                typing 3.5s steps(40, end),
                blink-caret .75s step-end infinite;
        }
        @keyframes typing {
            from { width: 0 }
            to { width: 35% }
        }
        
        /* The typewriter cursor effect */
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: orange; }
        }

        .create{
            background-color: aliceblue;
            padding: 10px;
            border-radius: 10px;
            color: #444654;
            width: fit-content;
            margin: 35px auto;
            font-size: 25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .create:hover{
            cursor: pointer;
            box-shadow: 0 0 10px;
            background-color: rgb(185, 192, 199);
        }
        .why{
            /* color: black; */
            width: 60%;
            margin: 50px auto;
            display: grid;
            grid-template-columns: 25px auto;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .timeline{
            width: 10px;
            height: 100%;
            background-color: aliceblue;
            border-radius: 50px;
        }
        .status{
            margin-top: 20px;
            font-size: 50px;
            height: fit-content;
        }
        .status_disc{
            font-size: 20px;
            margin: 10px 0px 30px 10px;
        }
        .footer{
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            /* background-color: aliceblue; */
            color: aliceblue;
            display: grid;
            grid-template-columns: auto auto auto;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .foot{
            padding: 50px;
            box-sizing: border-box;
            width: 95%;
            margin: 0px auto;
            border-radius: 10px;
            border-width: 1px;
            border-style: ridge;
            border-color: aliceblue;
        }
    </style>
</head>
<body>
    <div>
        <div class="head">
            <div class="header">
                <div class="mypromo">

                </div>
                <div class="search">
                    <input type="search" placeholder="Search">
                </div>
                <div class="about but">
                    About
                </div>
                <div class="login but">
                    Login
                </div>
            </div>
        </div>
        <div class="mid_box">
            <div class="welcome">
                <div>
                    Welcome To MyProfile.com
                </div>
            </div>
            <div class="create">
                <a href="{{url('/')}}/login">Create New Profile</a>
            </div>
            <div class="why">
                <div class="timeline">

                </div>
                <div>
                    <div class="status_who status">
                        <div>
                            What is MyProfile.com?
                        </div>
                        <div class="status_disc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dicta soluta nobis voluptatem expedita, temporibus quod dignissimos totam quaerat eos quibusdam veniam neque, iste ullam nemo, minima necessitatibus cupiditate hic?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero architecto commodi eos corrupti hic nisi laborum vitae. Reiciendis modi, molestias illo ipsam nemo magni odit dolores placeat, necessitatibus consequuntur perspiciatis.
                        </div>
                        
                    </div>
                    <div class="status_why status">

                        <div>
                            Why MyProfile.com?
                        </div>
                        <div class="status_disc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dicta soluta nobis voluptatem expedita, temporibus quod dignissimos totam quaerat eos quibusdam veniam neque, iste ullam nemo, minima necessitatibus cupiditate hic?
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos laudantium, molestiae nesciunt reprehenderit voluptatum voluptatibus eum doloribus quod, natus modi tenetur vitae perspiciatis beatae. Harum cupiditate et laborum deserunt voluptatum?
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="foot">
                <div style="font-size: 25px;">
                    About us
                </div>
                <div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, error ex. Iste repudiandae rerum perferendis dolor. Perferendis sed voluptatibus mollitia nulla, eum saepe, rerum harum eveniet ullam vel alias tenetur?
                </div>
            </div>
            <div class="foot">
                <div style="font-size: 25px;">
                    Contact us
                </div>
                <div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, error ex. Iste repudiandae rerum perferendis dolor. Perferendis sed voluptatibus mollitia nulla, eum saepe, rerum harum eveniet ullam vel alias tenetur?
                </div>
            </div>
            <div class="foot">
                <div style="font-size: 25px;">
                    Future Plans
                </div>
                <div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, error ex. Iste repudiandae rerum perferendis dolor. Perferendis sed voluptatibus mollitia nulla, eum saepe, rerum harum eveniet ullam vel alias tenetur?
                </div>
            </div>
        </div>
    </div>
</body>
</html>