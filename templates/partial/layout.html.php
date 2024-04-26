<style>
    form:hover .Bu {
        color: white;
    }
    form:hover li {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 60px 110px -30px, rgba(0, 0, 0, 0.3) 0px 40px 70px -40px, rgba(10, 37, 64, 0.35) 0px -4px 8px 0px inset;
    }
</style>
<div class="sticky-cogs">
    <i class="fas fa-cog" ></i>
</div> 
<input type="checkbox" id="sidebar-toggle">
<div class="container">
    <div class="side-bar pl-15 mr-1">
        <div class="sonatel-logo mt-1 mb-2"></div>
        <div class="p-tb-l-r mb-13" style="font-size:25px; background-color:#009187; margin-right:10px; padding-left:50px; color:white; text-align:center;" ><i class="fas fa-minus" style="font-size:25px;" ></i>&nbsp;Menu</div>
        <div class="navigate-link">
            <ul>
                <form action="" method="post">
                    <input type="hidden" name="layout" value="dashboard">
                    <li class="p-tb-l-r mb-13"><button class="Bu" style="border: none; background-color: transparent; font-size: 1.4rem" type=""><i class="fas fa-align-right"></i>&nbsp;Dashboard</button></li>
                </form>
                <form action="" method="post">
                    <input type="hidden" name="layout" value="list-promotion">
                    <li class="p-tb-l-r mb-13"><button class="Bu" style="border: none; background-color: transparent; font-size: 1.4rem" type="submit"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;Promos</button></li>
                </form>
                <form action="" method="post">
                    <input type="hidden" name="layout" value="list-referentiel">
                    <li class="p-tb-l-r mb-13"><button class="Bu" style="border: none; background-color: transparent; font-size: 1.4rem" type="submit"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;Referentiels</button></li>
                </form>
                <form action="" method="post">
                    <input type="hidden" name="layout" value="list-apprenant">
                    <li class="p-tb-l-r mb-13"><button class="Bu" style="border: none; background-color: transparent; font-size: 1.4rem; " type="submit"><i class="far fa-user-circle"></i>&nbsp;&nbsp;Utilisateurs</button></li>
                </form>
                <form action="">
                    <li class="p-tb-l-r mb-13"><button class="Bu" style="border: none; background-color: transparent; font-size: 1.4rem; " type=""><i class="far fa-user-circle"></i>&nbsp;&nbsp;Visiteurs</button></li>
                </form>
                <form action="" method="post">
                    <input type="hidden" name="layout" value="list-presence">
                    <li class="p-tb-l-r mb-13"><button class="Bu" style="border: none; background-color: transparent; font-size: 1.4rem" type="submit"><i class="far fa-user-circle"></i>&nbsp;&nbsp;Présence</button></li>
                </form>
                <form action="">
                    <li class="p-tb-l-r"><button class="Bu" style="border: none; background-color: transparent; font-size: 1.4rem; " type=""><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;Evenement</button></li>
                </form>
            </ul>
        </div>
    </div>
    <div class="right-side mr-15">
        <div class="header d-flex-s-between-align-i-center">
            <div class="left pl-15">
                <form action="" method="post">
                    <label for="sidebar-toggle" class="mr-15" style="cursor: pointer; font-size:30px; position:relative; top:7px;"><i class="fas fa-bars"></i></label>
                    <a href="#" class="mr-15 style-qr"><img src="../public/images/applications.png" width="3.3%" alt="" style="position:relative; left:19px; top:11px; background-color:whitesmoke; padding:5px; border-radius:50%"></a>
                    <?php 
                       if($_POST["layout"] == 'list-referentiel'){
                        echo '<input type="hidden" name="layout" value="list-referentiel">';
                       }else if($_POST["layout"] == 'list-presence'){
                        echo '<input type="hidden" name="layout" value="list-presence">';
                       }else if($_POST["layout"] == 'list-apprenant'){
                        echo '<input type="hidden" name="layout" value="list-apprenant">';
                       }else if($_POST["layout"] == 'promos'){
                        echo '<input type="hidden" name="layout" value="promos">';
                       }
                    ?>
                    <button type="submit" class="btn-search-header"><i  class="fas fa-search" style="font-size: 1.1rem;margin-left:60px; color: #009187;"></i></button>
                    <input type="text" name="global_search" class="form-control-global-header" placeholder="Recherche" style="margin-left:60px;" >
                </form>
            </div>
            <div class="right">
                <a href="#" class="border-calandar" style="margin-right:10px;background-color:whitesmoke;"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;22 Avril 2024</a></a>
                <a href="#" class="style-minus" style="margin-right:15px; background:transparent; width:55px;height:55px; display:flex;justify-content:center;align-items:center;"><img style="width:50px;height:50px;border-radius:50%;" src="/projet/public/images/moi.jpg" alt=""></i></a>
                <div style="margin-right:10px;margin-top:10px;" >
                    <p><?=$_SESSION["role"]?></p>
                    <p><span style="color: #009187;"><?=$_SESSION["nom"]?>&nbsp;<?=$_SESSION["prenom"]?></span>&nbsp;<i class="fas fa-angle-down"></i></p>
                    <form action="">
                    <i class="fa-solid fa-power-off" style="position:absolute; left:114em;color:red;"><button style="padding:7px; position:absolute;left:0;background-color:transparent;border:none;" ></button></i>
                </form>
                </div>
            </div>
        </div>

        <div class="d-flex-s-between-align-i-center mt-15  mb-15">
            <h3>Promotion: <?php echo "<span style='color: #009187;'>$activeNumberPromo</span>" ?></h3>
            <div class="d-flex-align-i-center">
                <div class="d-flex-align-i-center">
                    <h4>Promos</h4>&nbsp;
                    <p style="margin-bottom: 10px; font-weight: bold; font-size: 25px;">.</p>&nbsp;
                    <h4>Création</h4> 
                </div>
            </div>
        </div>

        <div class="main-content">
            <?php
                switch($_POST['layout']){
                    case 'list-promotion':  
                        include('list-promotion.html.php');
                        break;
                    case 'dashboard':  
                        include('dashboard.html.php');
                        break;
                    case 'list-apprenant':
                        include('list-apprenant.html.php');
                        break;
                    case 'list-referentiel':
                        include('list-referentiel.html.php');
                        break;
                    case 'list-presence':
                        include('list-presence.html.php');
                        break;
                    default: 
                        include('list-promotion.html.php');
                    
                }
            ?>
        </div>
        <div class="footer">
            <h5>©&nbsp;Sonatel Academy</h5>
        </div>
    </div>
</div>
</body>
</html>
