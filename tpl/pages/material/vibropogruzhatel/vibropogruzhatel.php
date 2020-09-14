<section class="bz-page">

	<h1 class="bz-page__content-title bz-content-title"><?php echo $title; ?></h1>

	<div class="bz-description">

		<div class="bz-description__row">

			<dl class="bz-detail">
                <dt class="bz-detail__label">
                    Разделы:
                </dt>
                <dd class="bz-detail__value">

					<ul class="bz-list">
						<li class="bz-list__item">
							<a class="bz-list__link" href="/<?= $routesParams[7]['items'][2]['items'][0][$linkParam]?>">
								Принцип действия
							</a>
						</li>
						<li class="bz-list__item">
							<a class="bz-list__link" href="/<?= $routesParams[7]['items'][2]['items'][1][$linkParam]?>">
								Технические характеристики
							</a>
						</li>
					</ul>

                </dd>
            </dl>

		</div>

	</div>

</section>
