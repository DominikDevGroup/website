<?php
// Például az oldal címét és dinamikus részeit különálló PHP változókban is tárolhatjuk.
$pageTitle = "GradeNetwork";
$menuItems = [
    "Főoldal" => "#home",
    "Közösség" => "#discord",
    "Rólunk" => "#about",
    "Csatlakozz!" => "#join",
    "Szabályzat" => "https://docs.google.com/document/d/1vrFPtF-qx0texmIEYlHhWFF-HIXU0bHv5_M34csZ518/pub"
];
$servers = [
    "ComboFly" => "Megpróbáltuk az OG dolgokat vissza hozni és az OG élményeket!",
    "HCF" => "Hardcore Faction",
    "Prison" => "Indok kifejtése",
    "SoupPvP" => "Régen elérhető volt egy szerveren, és ezt az élményt próbáljuk visszahozni"
];
$discordLink = "https://discord.gg/aatpPZUe6n"; // Discord meghívó link
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="img/style.css">
    <link href="https://fonts.bunny.net/css?family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Navigáció -->
    <nav class="desktop_navbar">
        <a href="#"><img class="desktop_navbar_logo_img" src="img/mini_logo.png" alt="logo"></a>
        <?php foreach ($menuItems as $name => $link): ?>
            <a href="<?php echo $link; ?>" class="desktop_navbar_link"><?php echo $name; ?></a>
        <?php endforeach; ?>
        <div class="desktop_navbar_link2_div">
            <a href="#join" class="desktop_navbar_link2 scroll">Csatlakozz!</a>
        </div>
    </nav>

    <!-- Mobil navigáció -->
    <div class="mobile_navbar">
        <a href="#" class="mobile_navbar_logo_img_a"><img class="mobile_navbar_logo_img" src="img/mini_logo.png" alt="logo"></a>
        <div id="mobile_navbar_links">
            <?php foreach ($menuItems as $name => $link): ?>
                <a class="mobile_navbar_link scroll" onclick="mobile_navbar_link_hider()" href="<?php echo $link; ?>"><?php echo $name; ?></a>
            <?php endforeach; ?>
        </div>
        <div class="icon" onclick="mobile_navbar_link_hider()">
            <i class="fa fa-bars"></i>
        </div>
        <script>
            function mobile_navbar_link_hider() {
                var x = document.getElementById("mobile_navbar_links");
                if (x.style.display === "flex") {
                    x.style.display = "none";
                } else {
                    x.style.display = "flex";
                }
            }
        </script>
    </div>

    <!-- Fő rész -->
    <div class="mainflex">
        <div class="main1">
            <a class="main1_logo_a" href="#"><img class="main1_logo" src="img/logo.png" alt="logo"></a>
            <div class="main1_description">
                <a>Próbáltuk a legegyedibbre csinálni a <br></a>
                <a class="main1_actcent">minecraft szervert!</a>
            </div>
            <div class="main1_ipcopier_div">
                <button class="main1_ipcopier" onclick="copyText()" type="button">
                    <span class="main1_ipcopier_text1">play.gradenetwork.hu</span><br>
                    <span class="main1_ipcopier_text2">Click a másoláshoz!</span>
                </button>
                <script>
                    function copyText() {
                        navigator.clipboard.writeText("play.gradenetwork.hu");
                    }
                    $(document).ready(function() {
                        $('.main1_ipcopier').click(function() {
                            var popup = $('<div>', { class: 'main1_popup' })
                            .append($('<h3 class="copy_confirm">').text('Vágólapra másolva'));
                            $(this).after(popup);
                            setTimeout(function() {
                                popup.remove();
                            }, 1000);
                        });
                    });
                </script>
            </div>
            <a href="#more" class="scroll">
                <img alt="downarrow" class="main1_downarrow" src="img/downarrow.png">
            </a>
        </div>

        <!-- Szerverek -->
        <div id="more"></div>
        <div class="main2">
            <a class="headline">Szervereink</a>
            <div class="main2_features_div">
                <?php foreach ($servers as $server => $desc): ?>
                    <div class="main2_feature">
                        <img class="main2_feature_img" alt="Feature Image" src="img/szöveg.png">
                        <a class="main2_feature_headline"><?php echo $server; ?></a>
                        <a class="main2_feature_text"><?php echo $desc; ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Discord szekció -->
        <div id="discord"></div>
        <div class="main4">
            <a class="headline">Csatlakozz a discrodra!</a>
            <div class="main4_dc_div">
                <iframe class="main4_dc_widget" src="https://images-eds-ssl.xboxlive.com/image?url=4rt9.lXDC4H_93laV1_eHHFT949fUipzkiFOBH3fAiZZUCdYojwUyX2aTonS1aIwMrx6NUIsHfUHSLzjGJFxxsG72wAo9EWJR4yQWyJJaDb6rYcBtJvTvH3UoAS4JFNDaxGhmKNaMwgElLURlRFeVkLCjkfnXmWtINWZIrPGYq0-&format=source&h=210" width="210" height="210" title="discord" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                <div class="main4_dc_description_div">
                    <a class="main4_dc_description_title">Csatlakozz a discordra!</a>
                    <a class="main4_dc_description">
                        ・Ismerj meg új embereket! <br>
                        ・Szerezz barátokat! <br>
                        ・Értesülj a frissítésekről <br>
                        ・Játsz a többi játékossal! <br><br>
                        &amp; és még sok más!
                    </a>
                    <a href="<?php echo $discordLink; ?>" class="main4_dc_button_a">
                        <div class="main4_dc_button">Csatlakozz!</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Rólunk szekció -->
        <div id="about"></div>
        <div class="main5">
            <a class="headline">A csapat</a>
            <div class="main5_admin_div">
                <div class="main5_admins_div main5_admins_dev_type2">
                    <img class="main5_admins_img" alt="admin member img" src="img/member_placeholder.webp">
                    <div class="main5_admins_description_div">
                        <a class="main5_admins_description_rank main5_admins_description_rank_owner">Tulajdonos</a>
                        <a class="main5_admins_description_title">DomyDev</a>
                        <a class="main5_admins_description">Ő az első szerver tulajdonosa!</a>
                    </div>
                </div>
                <div class="main5_admins_div main5_admins_dev_type1">
                    <img class="main5_admins_img" alt="admin member img" src="img/member_placeholder.webp">
                    <div class="main5_admins_description_div">
                        <a class="main5_admins_description_rank main5_admins_description_rank_admin">Manager</a>
                        <a class="main5_admins_description_title">Anti16</a>
                        <a class="main5_admins_description">Manager.</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Csatlakozási szekció -->
        <div id="join"></div>
        <div class="main3">
            <a class="headline">Hogyan csatlakozz?</a>
            <div class="main3_join_div_div">
                <div class="main3_join_div">
                    <a class="main3_join_title">Java & Crackelt</a>
                    <div class="main3_join_content_div">
                        <div class="main3_join_categories">
                            <a>IP:</a>
                            <a>Verzió:</a>
                        </div>
                        <div class="main3_join_values">
                            <a>play.gradenetwork.hu</a>
                            <a>1.8x</a>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lábjegyzet -->
    <footer class="copyright_div">
        <a href="<?php echo $discordLink; ?>" class="copyright">© Copyright GradeNetwork. All Rights Reserved</a>
    </footer>
</body>
</html>
