<?php
/** Pied de page commun à l'ensemble du site
 * 
 * @author Mickael Ruau
 * @date 25/05/2016
 * @version 0.2
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<p class="footer">On est rapides! Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div><!-- fin de la div container -->

</body>
</html>