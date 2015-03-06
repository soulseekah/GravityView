<?php
/**
 * Display below the entries loop when using a table layout
 *
 * @package GravityView
 * @subpackage GravityView/templates
 */
?>
	<tfoot>
		<tr>
			<?php

			$this->renderZone( 'columns', array(
				'markup' => '<th class="{{class}}">{{label}}</th>',
				'hide_empty' => false, // Always show <th>
			));

			?>
		</tr>
		<?php gravityview_footer(); ?>
	</tfoot>
</table>
</div><!-- end .gv-table-container -->
<?php gravityview_after(); ?>
