<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>
    Bresse Ping
  </title>
  <link rel="shortcut icon" type="image/ico" href="favicon.ico">
  <meta content="Thierry Lachaux" name="author">
  <meta content="Club sportif de tennis de table, ping-pong à Louhans Chateaurenaud, en Bresse, affilié à FFTT"
    name="description">
  <meta name="keywords"
    content="tennis de table, ping-pong, louhans, bresse, oms, chateaurenaud, club sportif, gymnase, lycee agricole, fftt, lbtt">
  <link rel="stylesheet" href="css/base.css">
  <script src="https://kit.fontawesome.com/d559253348.js" crossorigin="anonymous"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-29967241-1');
  </script>
</head>

<body>
  <table class="fond_principal" style="text-align: left; width: 100%; margin-left: auto; margin-right: auto;"
    cellpadding="2" cellspacing="0">
    <tbody>
      <tr>
        <td style="vertical-align: top;">
          <?php
          include("cartouche.php");
          include("menu.php");
          ?>
          <hr style="width: 100%; height: 2px;">
          <div id="titre_page">
            La Compétition<br>
            <br>
          </div>
          <br>
          <table style="text-align: left; width: 70%; margin-left: auto; margin-right: auto;" cellpadding="2"
            cellspacing="2">
            <tbody>
              <tr>
                <td style="vertical-align: middle; width: 25%; text-align: center;">
                  <a href="competition_champ_equipe.php">
                    <img style="border: 0px solid ; width: 150px; height: 114px;"
                      alt="Championnat départemental par équipe" src="competition/Boutons/b_championnat.png">
                  </a>
                  <br>
                </td>
                <td style="vertical-align: middle; width: 25%; text-align: center;">
                  <a href="competition_gpj.php">
                    <img style="border: 0px solid ; width: 150px; height: 114px;"
                      alt="Grand Prix Jeunes, Interclub Jeunes" src="competition/Boutons/b_jeunes.png">
                  </a>
                  <br>
                </td>
                <td style="vertical-align: middle; text-align: center; width: 25%;">
                  <a href="competition_gpd.php">
                    <img src="competition/Boutons/b_detection.png"
                      alt="Grand Prix Détection, Top Régional Détection, p'tits pandas"
                      style="border: 0px solid ; width: 150px; height: 114px;">
                  </a>
                  <br>
                </td>
                <td style="vertical-align: middle; width: 25%; text-align: center;">
                  <a href="competition_autres.php">
                    <img style="border: 0px solid ; width: 150px; height: 114px;" alt="autres competitions"
                      src="competition/Boutons/b_autres.png">
                  </a>
                  <br>
                </td>
              </tr>
            </tbody>
          </table>
          <br>
          La compétition au tennis de table n'est pas réservée à une élite, tout le monde peut y participer quel que
          soit son niveau,
          <span style="font-weight: bold;">
            il suffit de posséder la licence dite "traditionnelle" (compétition)
          </span>.
          Il en ressortira toujours quelque chose de positif! De plus, les points officiels (500 en début de saison)
          augmentent et cela motive!<br>
          La fédération, la ligue de Bourgogne et le Comité Départemental 71 nous fournissent un large panel d'épreuves,
          voici un petit décodage de celles-ci, par âge:<br>
          <br>
          <ul>
            <li>
              <span style="font-weight: bold; text-decoration: underline;">
                Poussins et Benjamins :
              </span>
            </li>
            <ul>
              <li>
                <span style="font-style: italic; text-decoration: underline;">
                  Grand Prix Détection
                </span>
                : 6 dates dans la saison, l'épreuve (individuelle) dure la journée, en général le dimanche, en
                Saône-et-Loire, les enfants rencontrent d'autres enfants dans la même catégorie d'âge, ils sont classés
                par poule, classement intégral. Ils jouent et arbitrent, avec l'aide des encadrants. C'est une épreuve
                très prisée et qui fait beaucoup progresser. Les meilleurs sont "repérés" par les entraîneurs brevetés
                d'état du CD71et se voient proposer un stage...voire sont qualifiés pour le
                <span style="font-style: italic; text-decoration: underline;">
                  Top détection Zone</span><br>
              </li>
              <li>
                <span style="font-style: italic; text-decoration: underline;">
                  Critérium Fédéral
                </span>
                : Epreuve individuelle, l'enfant rencontre d'autres enfants du même âge, s'il termine premier, il "monte
                en régional".
                <span style="text-decoration: underline;">
                  A noter que l'inscription est à la charge du joueur (voir
                </span>
                <a style="text-decoration: underline;" href="tarifs.php">tarifs</a>
                <span style="text-decoration: underline;">
                  )
                </span>
              </li>
            </ul>
            <li>
              <span style="font-weight: bold; text-decoration: underline;">
                Jeunes de 11 à 18 ans (Minimes/Cadets/Juniors):
              </span>
            </li>
            <ul>
              <li>
                <span style="font-style: italic; text-decoration: underline;">
                  Grand Prix Jeunes
                </span>
                : 6 dates dans la saison, par équipe de 2, chaque équipe rencontre une
                autre équipe sous la forme 2 simples, 1 double, 2 simples.
              </li>
              <li style="font-style: italic; text-decoration: underline;">
                Critérium Fédéral.
              </li>
              <li>
                <span style="font-style: italic; text-decoration: underline;">
                  Championnat par équipe (avec les adultes)
                </span>
                : C'est la discipline "reine" pour les adultes mais les jeunes à partir de minime peuvent y prendre
                part. Le Club inscrit une équipe de 4 joueurs en championnat départemental, chaque équipe rencontre les
                autres équipes du département. La rencontre se déroule de la faéon suivante: 8 simples, 2 doubles, 8
                simples. L'épreuve est mixte et tous les âges sont mélangés.
              </li>
            </ul>
            <li style="font-weight: bold; text-decoration: underline;">
              Adultes:
            </li>
            <ul>
              <li style="font-style: italic; text-decoration: underline;">
                Championnat par équipe
              </li>
              <li>
                <span style="font-style: italic; text-decoration: underline;">
                  Critérium fédéral
                </span><br>
              </li>
            </ul>
          </ul>
          <div style="text-align: center;">
            <span style="font-weight: bold; font-style: italic;">
              L'encadrement du Club est à votre disposition si vous avez des questions, n'hésitez pas!
            </span>
            <br>
          </div>
          <br>
          <span style="text-decoration: underline; font-weight: bold;">
            Calendrier des compétitions pour la saison 2021-2022 :
          </span><br>
          <br style="text-decoration: underline; font-weight: bold;">
          <div style="text-align: center;">
            <img style="width: 1385px; height: 901px;" src="competition/Calendrier-condense-2021-2022_V2.jpg"
              alt="Calendrier-condense-2021-2022_V2.jpg">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>