<div class="options container">

    <div class="options wrapper">
            <span class="opt settings"><a href="settings.php">Configuración</a></span>
            <span class="opt logout"><a href="/php/logout.php">Salir</a></span>
            <p class="lastconn">Last On: <?php echo $_SESSION["last_conn"]; ?></p>
    </div>
    <div class="options wrapper">
            <div class="search wrapper">
                    <input type="text" placeholder="Search..." />
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>

            </div>
    </div>
</div>
<div class="notification container">
    <ul>
        <li><a href="Javascript:void(0)"><i class="fa fa-envelope" aria-hidden="true"></i> Mensajes <span class="notif qty">0</span></a></li>
        <li><a href="Javascript:void(0)"><i class="fa fa-quote-left" aria-hidden="true"></i> Solicitudes <span class="notif qty">0</span></a></li>
        <li><a href="Javascript:void(0)"><i class="fa fa-ticket" aria-hidden="true"></i> Tickets <span class="notif qty">0</span></a></li>
        <li><a href="Javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Pedidos <span class="notif qty">0</span></a></li>
    </ul>
</div>

nav.vertical div.options.container{
	margin: 1.5em 1em;
	color: rgba(54,163,191,1);
	text-align: center;
}
nav.vertical div.options.container a{
	color: rgba(220,220,220,1);
}
nav.vertical div.options.container a:hover{
	color: #fff;
}
nav.vertical div.options.wrapper{
	margin: 1em 0;
	text-align: right;
}
nav.vertical div.options.wrapper span{
	font-size: 13px;
	padding: 0 0.5em;
	margin: 0;
}
nav.vertical div.options.wrapper p{
	margin-top: 1em;
	font-size: 10px;
	
}
nav.vertical div.options.container img{
	width: 6em;
	margin-bottom: 0.5em;
	background-color: #ccc;
	height: 8.5em;
	width: 8.5em;
	border-radius: 50em;
}
nav.vertical div.options.wrapper span:first-child{
	border-right: 1px solid rgba(220,220,220,1);
}




nav.vertical div.search.wrapper input[type="text"]{
	height: 2.1em;
	padding: 0.2em;
	width: 70%;
	margin-right: -0.3em;
	border: 0;
}
nav.vertical div.search.wrapper button{
	width: 2.5em;
	height: 2.5em;
	margin: 0;
	border: 0;
	background-color: #FF586C;
	color: #fff;
}
nav.vertical div.notification.container{
	position: relative;
	bottom: -7em;
	display: inline-block;
	float: left;
}
nav.vertical div.notification.container ul{
	margin: 1em;
	list-style-type: none;
}
nav.vertical div.notification.container ul li{
	margin: 0.5em 0;
}
nav.vertical div.notification.container ul li a{
	color: #fff;
}