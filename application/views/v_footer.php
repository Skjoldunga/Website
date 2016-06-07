<?php
/** Pied de page commun à l'ensemble du site
 * 
 * @author Adrien Pironneau
 * @date 03/06/2016
 * @version 0.2
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

</div><!-- fin de la div container -->


<footer>
<div class="footer-row">
    <div class="footer-widget">
        <div class="footer-title">Fest'Esaip</div>
        <div class="footer-body">
            <li>
                <a href="Historique/c1" >Historique</a>
            </li>
            <li>Equipes / Contact</li>
            <li>Sponsors</li>
        </div>
    </div>
    <div class="footer-widget">
        <div class="footer-title">Programmation</div>
        <div class="footer-body">
            <li>
                <a href="" >Animations</a>
            </li>
            <li>Stands</li>
            <li>Concerts</li>
        </div>
    </div>
    <div class="footer-widget">
        <div class="footer-title">Infos Pratiques</div>
        <div class="footer-body">
            <li>Camping</li>
            <li>
                <a href="" >Accessibilité</a>
            </li>
            <li>Venir au Fest'Esaip</li>
        </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="footer-spacer">
        
=======
    <div class="footer-widget footer-widget-text">
        Page rendered in <strong>{elapsed_time}</strong> seconds.</br>
        <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
>>>>>>> origin/development
=======
    <div class="footer-widget footer-widget-text">
        <p>Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
        <p><?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
>>>>>>> parent of fce7f41... Footer
    </div>
</div>
</footer>

</body>
</html>