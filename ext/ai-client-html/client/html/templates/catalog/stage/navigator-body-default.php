<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2014
 * @copyright Aimeos (aimeos.org), 2015-2016
 */

$enc = $this->encoder();

?>
<?php $this->block()->start( 'catalog/stage/navigator' ); ?>
<!-- catalog.stage.navigator -->

	<?php if( $this->param( 'd_pos' ) !== null ) : ?>
		<div class="catalog-stage-navigator">
			<nav>

				<?php if( isset( $this->navigationPrev ) ) : ?>
					<a class="prev" href="<?php echo $enc->attr( $this->navigationPrev ); ?>" rel="prev">
						<?php echo $enc->html( $this->translate( 'client', 'Previous' ), $enc::TRUST ); ?>
					</a>
				<?php endif; ?>

				<?php if( isset( $this->navigationNext ) ) : ?>
					<a class="next" href="<?php echo $enc->attr( $this->navigationNext ); ?>" rel="next">
						<?php echo $enc->html( $this->translate( 'client', 'Next' ), $enc::TRUST ); ?>
					</a>
				<?php endif; ?>

			</nav>
		</div>
	<?php endif; ?>

<!-- catalog.stage.navigator -->
<?php $this->block()->stop(); ?>
<?php echo $this->block()->get( 'catalog/stage/navigator' ); ?>
