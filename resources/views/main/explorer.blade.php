@extends('templates.main')
@section('title', 'CAPAG')
@section("script")
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/explorer.css')}}">
@stop
@section("content")
<header>
        <a href="#about" class="logo">CAPAG</a>
        <div class="menuToggle"></div>
    </header>
    <ul class="navigation">
        <li><a href="#home" onclick="toggleMenu();">Home</a></li>
        <li><a href="#about" onclick="toggleMenu();">About</a></li>
        <li><a href="#post" onclick="toggleMenu();">Post</a></li>
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
    </ul>
    <!--Banner :v-->
    <section class="banner" id="home">
        <img src="{{asset('assets/assets_explorer/banner.jpg')}}" class="cover">
        <div class="contentBx">
            <h2>The Soul Of The World</h2>
            <br/>
            <h4>A simple blog Website</h4>
            <a href="#" class="btn">About Us</a>
        </div>
    </section>
    <!--About-->
    <section class="about" id="about">
        <div class="title">
            <h2>About Us</h2>
        </div>
        <div class="contentBx">
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue quam vitae porttitor faucibus. 
                    Donec mattis purus a lectus accumsan commodo. Maecenas cursus risus eu metus bibendum congue. 
                    Quisque nisl ante, rutrum tincidunt erat nec, convallis mollis eros. Duis placerat finibus libero non lacinia. 
                    Vestibulum semper tincidunt nunc vitae vulputate. Nam rutrum, felis sit amet vestibulum volutpat, turpis turpis 
                    finibus nibh, sed vulputate ipsum ipsum sit amet tellus. Curabitur suscipit vel arcu in rhoncus. Proin purus mauris, 
                    Duis vitae viverra diam. Morbi placerat commodo nibh eu hendrerit. Quisque luctus, diam a elementum hendrerit, 
                    nisi neque ultrices ante, nec rhoncus mauris urna quis tellus. Mauris placerat massa ut congue rhoncus. Nulla facilisi. 
                    Pellentesque non ornare libero. Donec lobortis facilisis magna, ut tempor augue fringilla sed. Proin et turpis risus.
                    <br>
                    <br>
                    Suspendisse potenti mam ante tortor, finibus non dui ut, vulputate porttitor nibh. Aliquam non ullamcorper nibh, et hendrerit est. 
                    Proin et nisl Albion es un MMORPG no lineal, auctor dui ac, dignissim sem. Vivamus nec leo posuere, feugiat orci vel, efficitur neque. 
                    Duis auctor urna at est sollicitudin tincidunt. Donec nec sem nisi. Praesent porta sollicitudin risus. Fusce vehicula, 
                    dui non vehicula luctus, ex nisi pulvinar tortor, id facilisis dolor erat nec nunc. Nulla ut auctor nisl. Sed imperdiet 
                    tempor velit vel feugiat. Vestibulum tortor enim, vehicula at accumsan vitae, consequat id diam. Maecenas sed tempus massa. 
                    Curabitur gravida diam nec ipsum consectetur, ut semper tellus vehicula. Donec non sem ac magna mollis vehicula. 
                    Etiam ac diam nisl. Nullam malesuada dui vitae mollis congue.
                    <br>
                    <br>
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit. Aliquam ullamcorper vulputate odio, id fermentum elit aliquam et. Cras congue metus a consectetur varius. 
                    Nulla venenatis non eros consectetur venenatis. Sed et sem massa. Integer et lacus mi. Proin cursus, libero eget faucibus pulvinar, 
                    libero lectus finibus lacus, sit amet vulputate turpis nisi eu augue. amcorper vulputate odio, id fermentum elit aliquam et. Cras congue metus a consectetur varius. 
                    Nulla venenatis non eros consectetur venenatis. Sed et sem massa.
                </p>

            </div>
            <div class="content">
                <div class="imgBx">
                    <img src="{{asset('assets/assets_explorer/img1.jpg')}}" class="cover">
                </div>
            </div>
        </div>
    </section>

    <!--Latest Blog Post-->
    <section class="post" id="post">
        <div class="title">
          <h2>Latest Post</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue quam vitae porttitor faucibus. 
            Donec mattis purus a lectus accumsan commodo. Maecenas cursus risus eu metus bibendum congue. 
            Quisque nisl ante, rutrum tincidunt erat nec, convallis mollis eros. Duis placerat finibus libero non lacinia. 
            Vestibulum semper tincidunt nunc vitae vulputate. Nam rutrum, felis sit amet vestibulum volutpat, turpis turpis 
            finibus nibh, sed vulputate ipsum ipsum sit amet tellus. Curabitur suscipit vel arcu in rhoncus. Proin purus mauris, 

    
            ¿Hotel? Trivago.</p>
        </div>
        <div class="contentBx">
            <div class="postColumn">
               <div class="postBox">
                 <div class="imgBx">
                   <img src="{{asset('assets/assets_explorer/post1.jpg')}}" class="cover">
                 </div>
                 <div class="textBx">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                    <a href="#" class="btn">Read More</a>
                  </div>
               </div>
               <div class="postBox">
                    <div class="imgBx">
                        <img src="{{asset('assets/assets_explorer/post2.jpg')}}" class="cover">
                    </div>
                    <div class="textBx">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
               </div>
                <div class="postBox extraHeight">
                    <div class="imgBx">
                        <img src="{{asset('assets/assets_explorer/post3.jpg')}}" class="cover">
                    </div>
                    <div class="textBx">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                    <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="postColumn">
                <div class="postBox extraHeight">
                    <div class="imgBx">
                        <img src="{{asset('assets/assets_explorer/post4.jpg')}}" class="cover">
                    </div>
                    <div class="textBx">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
                <div class="postBox">
                    <div class="imgBx">
                        <img src="{{asset('assets/assets_explorer/post5.jpg')}}" class="cover">
                    </div>
                    <div class="textBx">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
                <div class="postBox">
                    <div class="imgBx">
                        <img src="{{asset('assets/assets_explorer/post6.jpg')}}" class="cover">
                    </div>
                    <div class="textBx">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="postColumn">
                <div class="postBox">
                    <div class="imgBx">
                        <img src="{{asset('assets/assets_explorer/post7.jpg')}}" class="cover">
                    </div>
                    <div class="textBx">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
                <div class="postBox">
                    <div class="imgBx">
                        <img src="{{asset('assets/assets_explorer/post8.jpg')}}" class="cover">
                    </div>
                    <div class="textBx">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
                <div class="postBox extraHeight">
                    <div class="imgBx">
                        <img src="{{asset('assets/assets_explorer/post9.jpg')}}" class="cover">
                    </div>
                    <div class="textBx">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum consequatur ab laboriosam
                        commodi rem expedita, ullam unde deserunt veniam.</h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="#" class="btn mgt60">Load More</a>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="title">
            <h2>Get in Touch</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi praesentium porro necessitatibus
            vero voluptates reprehenderit, doloribus culpa.</p>
        </div>
        <div class="contactForm">
            <div class="row">
                <input type="text" name="" placeholder="First Name">
                <input type="text" name="" placeholder="Last Name">
            </div>
            <div class="row">
                <input type="text" name="" placeholder="Email Address">
                <input type="text" name="" placeholder="Mobile No.">
            </div>
            <div class="row2">
                <textarea placeholder="Message"></textarea>
            </div>
            <div class="row2">
                <input type="submit" value="Send" class="btn">
            </div>
        </div>
    </section>

    <footer>
        <a href="#" class="logo">CAPAG</a>
        <ul class="footerMenu">
           <li><a href="#home">Home</a></li>
           <li><a href="#about">About</a></li>
           <li><a href="#post">Post</a></li>
          <li><a href="#contact">Contact</a></li>
         </ul>
        <p class="copyrightText">Copyright © 2021 All Right Reserved.</p>
    </footer>

    <script>
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.onclick = function() {
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
        
        window.addEventListener('scroll',function() {
            const header = document.querySelector('header');
            header.classList.toggle('sticky',window.scrollY > 0);
        })

        function toggleMenu(){
            menuToggle.classList.remove ('active');
            navigation.classList.remove('active');
        }
    </script>
@stop
