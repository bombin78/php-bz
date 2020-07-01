<section class="page">

	<h1 class="page__content-title content-title"><?php echo $title; ?></h1>

	<div class="description">

		<div class="description__row">
			<a class="bnrc" href="http://rekuperator.ru/">
				<img class="bnrc__img" src="/images/pages/recuperators/rekuperator.ru.jpg">
			</a>
		</div>


		<div class="description__checklist checklist">

			<form class="checklist__form" method="POST" id="order-form" action="/mail.php">

				<h2 class="checklist__title">
					Опросный лист для разработки исходных требований<br> к проектированию  теплообменника типа ОПТ
				</h3>

				<p class="checklist__download">
					(также вы можете <b><a href="/docs/recuperators-form.doc">скачать опросный лист</a></b>,
					заполнить его и отправить нам по факсу)
				</p>

				<ul class="checklist__params params">

					<li class="params__item">
						<div class="params__label">
							<b>1. Название и описание технологического процесса, в котором будет использован теплообменник</b>
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<textarea cols="30" rows="4" name="f1"></textarea>
						</div>
					</li>

					<li class="params__item">
						<div class="params__subtitle">
							<b>2.Теплоноситель</b>
						</div>

						<ul class="params__sublist">
							<li class="params__item">
								<div class="params__label">
									Греющая среда
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<select name="f2_1">
										<option value="газ">газ</option>
										<option value="жидкость">жидкость</option>
										<option value="воздух">воздух</option>
									</select>
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Температура на входе теплообменника ,°C
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<input type="text" name="f2_2">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Температура на выходе теплообменника ,°C
								</div>
								<div class="params__field">
									<input type="text" name="f2_3">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Расход газа (подводимого к теплообменнику), м³ /час, (или кг/час)
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<input type="text" name="f2_4">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Давление на входе теплообменника, МПа
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<input type="text" name="f2_5">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Химический состав
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<input type="text" name="f2_6">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Количество механических примесей, г/м³
								</div>
								<div class="params__field">
									<input type="text" name="f2_7">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Допустимое аэродинамическое сопротивление, мм.вод.ст.
								</div>
								<div class="params__field">
									<input type="text" name="f2_8">
								</div>
							</li>

						</ul>
					</li>

					<li class="params__item">
						<div class="params__subtitle">
							<b>3. Нагреваемая среда</b>
						</div>

						<ul class="params__sublist">
							<li class="params__item">
								<div class="params__label">
									Нагреваемая среда
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<select name="f3_1">
										<option value="газ">газ</option>
										<option value="жидкость">жидкость</option>
									</select>
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Температура на входе теплообменника ,°C
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<input type="text" name="f3_2">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Температура на выходе теплообменника,°C
								</div>
								<div class="params__field">
									<input type="text" name="f3_3">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Расход воздуха (подводимого к теплообменнику), м³/час (или кг/час)
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<input type="text" name="f3_4">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Давление на входе теплообменника, МПа
									<span class="starrequired">*</span>
								</div>
								<div class="params__field">
									<input type="text" name="f3_5">
								</div>
							</li>

							<li class="params__item">
								<div class="params__label">
									Допустимое аэродинамическое сопротивление, мм.вод.ст.
								</div>
								<div class="params__field">
									<input type="text" name="f3_6">
								</div>
							</li>
						</ul>

					</li>
					<li class="params__item">
						<div class="params__label">
							4. Место предполагаемой установки теплообменника (описание, эскизы с размерами, фото)
						</div>
						<div class="params__field">
							<textarea cols="30" rows="4" name="f4"></textarea>
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							5. Присоединительные размеры и сечения подводящих и отводящих магистралей
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<input type="text" name="f5">
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							6. Есть ли ограничения по геометрическим размерам (ширине, глубине, высоте)
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<input type="text" name="f6">
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							7. Режим работы теплообменника
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<select name="f7">
								<option value="односменный">односменный</option>
								<option value="двухсменный">двухсменный</option>
								<option value="непрерывный">непрерывный</option>
							</select>
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							8. Направление движения сред
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<select name="f8">
								<option value="встречное">встречное</option>
								<option value="перекрестное">перекрестное</option>
								<option value="согласное">согласное</option>
							</select>
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							9. Использовались ли ранее в данном технологическом процессе теплообменники?<br>
							<small>Если использовался, то их параметры (габариты, срок службы, недостатки, достоинства, технические характеристики указанные выше)</small>
						</div>
						<div class="params__field">
							<textarea name="f9" cols="30" rows="6"></textarea>
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							10. Откуда предполагается производить забор нагреваемой среды
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<select name="f10">
								<option value="из помещения">из помещения</option>
								<option value="с улицы">с улицы</option>
							</select>
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							11. Назначение нагретой среды, куда производится ее выброс
						</div>
						<div class="params__field">
							<input type="text" name="f11">
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							12. Требуется ли разработка и изготовление теплоизоляции (или она делается «по месту»)?
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<input type="text" name="f12">
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							13. Количество  теплообменников
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<input type="text" name="f13">
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							14. Необходимые сроки поставки
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<input type="text" name="f14">
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							15. Источник информации, из которого узнали о теплообменниках типа ОПТ (Оребренный Пластинчатый Теплообменник)
						</div>
						<div class="params__field">
							<input type="text" name="f15">
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							16. Название и реквизиты предприятия-заказчика
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<textarea cols="30" rows="6" name="f16"></textarea>
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							17. Ф.И.О. контактного лица
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<input type="text" name="f17">
						</div>
					</li>

					<li class="params__item">
						<div class="params__label">
							18. Телефон контактного лица
							<span class="starrequired">*</span>
						</div>
						<div class="params__field">
							<input type="text" name="f18">
						</div>
					</li>

				</ul>

				<div class="checklist__footer">
					<div class="checklist__footer-info">
						<span class="starrequired">*</span>
						— поля, обязательные для заполнения.
					</div>
					<div class="checklist__footer-btns btns">
						<button type="submit" class="btns__submit">
							Отправить заявку
						</button>
						<button type="reset" class="btns__reset">
							Очистить форму
						</button>
					</div>
				</div>

			</form>

		</div>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#order-form").validate({
					rules: {
						f1: {
							required: true,
						},
						f2_1: {
							required: true,
						},
						f2_2: {
							required: true,
						},
						f2_4: {
							required: true,
						},
						f2_5: {
							required: true,
						},
						f2_6: {
							required: true,
						},
						f3_1: {
							required: true,
						},
						f3_2: {
							required: true,
						},
						f3_4: {
							required: true,
						},
						f3_5: {
							required: true,
						},
						f5: {
							required: true,
						},
						f6: {
							required: true,
						},
						f7: {
							required: true,
						},
						f10: {
							required: true,
						},
						f11: {
							required: true,
						},
						f12: {
							required: true,
						},
						f13: {
							required: true,
							digits: true,
						},
						f14: {
							required: true,
						},
						f16: {
							required: true,
						},
						f17: {
							required: true,
						},
						f18: {
							required: true,
						},
					},
					messages: {
						f1: {
							required: 'поле не заполнено',
						},
						f2_1: {
							required: 'поле не заполнено',
						},
						f2_2: {
							required: 'поле не заполнено',
						},
						f2_4: {
							required: 'поле не заполнено',
						},
						f2_5: {
							required: 'поле не заполнено',
						},
						f2_6: {
							required: 'поле не заполнено',
						},
						f3_1: {
							required: 'поле не заполнено',
						},
						f3_2: {
							required: 'поле не заполнено',
						},
						f3_4: {
							required: 'поле не заполнено',
						},
						f3_5: {
							required: 'поле не заполнено',
						},
						f5: {
							required: 'поле не заполнено',
						},
						f6: {
							required: 'поле не заполнено',
						},
						f7: {
							required: 'поле не заполнено',
						},
						f10: {
							required: 'поле не заполнено',
						},
						f11: {
							required: 'поле не заполнено',
						},
						f12: {
							required: 'поле не заполнено',
						},
						f13: {
							required: 'поле не заполнено',
							digits: 'значение должно быть целым числом',
						},
						f14: {
							required: 'поле не заполнено',
						},
						f16: {
							required: 'поле не заполнено',
						},
						f17: {
							required: 'поле не заполнено',
						},
						f18: {
							required: 'поле не заполнено',
						},
					},
				});
			});
		</script>

	</div>

</section>
