<?php
/** Pied de page commun à l'ensemble du site
 * 
 * @author Mickael Ruau
 * @date 25/05/2016
 * @version 0.2
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div><!-- fin de la div container -->

<!-- VOIR FOOTER https://azure.microsoft.com/fr-fr/overview/what-is-azure/ -->
<footer>
    <div class="app-content">
    <div class="app-spacer">
        <h3>Title 1 (arborescence)</h3>
        <ul>
            <li>Lien 1</li>
            <li>Lien 2</li>
        </ul>
    </div>
    <div class="app-spacer">
        <h3>Programmation</h3>
        <ul>
            <li>
                <a href="/Website/index.php/news" >Animations</a>
            </li>
            <li>Stands</li>
            <li>Concerts</li>
        </ul>
    </div>
    <div class="app-spacer">
        <h3>Infos Pratiques</h3>
        <ul>
            <li>
                <a href="/Website/index.php/news/infos" >Accessibilité</a>
            </li>
            <li>Lien 2</li>
        </ul>
    </div>
    </div>
</footer>

</body>
</html>