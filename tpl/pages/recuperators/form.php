<section class="bz-page">

	<h1 class="bz-page__content-title bz-content-title"><?php echo $title; ?></h1>

	<div class="bz-description">

		<div class="bz-description__checklist bz-checklist">

			<form
				id="orderForm"
				class="bz-checklist__form"
				action="/handler-mail.php"
				method="POST">

				<h2 class="bz-checklist__title">
					Опросный лист для разработки исходных требований<br> к проектированию  теплообменника типа ОПТ
				</h3>

				<p class="bz-checklist__download">
					(также вы можете <b><a href="/docs/recuperators-form.doc">скачать опросный лист</a></b>,
					заполнить его и отправить нам по факсу)
				</p>

				<ul class="bz-checklist__params bz-params">

					<li class="bz-params__item">
						<div class="bz-params__label">
							<b>1. Название и описание технологического процесса, в котором будет использован</b>
							 <nobr> <b>теплообменник</b><span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<textarea cols="30" rows="4" name="f1"></textarea>
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__subtitle">
							<b>2.Теплоноситель</b>
						</div>

						<ul class="bz-params__sublist">
							<li class="bz-params__item">
								<div class="bz-params__label">
									Греющая
									 <nobr> среда<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__field">
									<select name="f2_1">
										<option value="газ">газ</option>
										<option value="жидкость">жидкость</option>
										<option value="воздух">воздух</option>
									</select>
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Температура на входе
									 <nobr> теплообменника ,°C<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__field">
									<input type="text" name="f2_2">
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Температура на выходе теплообменника ,°C
								</div>
								<div class="bz-params__field">
									<input type="text" name="f2_3">
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Расход газа (подводимого к теплообменнику),
									 <nobr> Нм³/час (или: м³/час, кг/час)<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__fields">
									<input type="text" name="f2_4">
									<select name="f2_4_1">
										<option value="Нм³/час">Нм³/час</option>
										<option value="м³/час">м³/час</option>
										<option value="кг/час">кг/час</option>
									</select>
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Давление на входе теплообменника,
									 <nobr> мм.вод.ст. (или Па)<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__fields">
									<input type="text" name="f2_5">
									<select name="f2_5_1">
										<option value="мм.вод.ст.">мм.вод.ст.</option>
										<option value="Па">Па</option>
									</select>
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Допустимое аэродинамическое сопротивление, мм.вод.ст. (или Па)
								</div>
								<div class="bz-params__fields">
									<input type="text" name="f2_6">
									<select name="f2_6_1">
										<option value="мм.вод.ст.">мм.вод.ст.</option>
										<option value="Па">Па</option>
									</select>
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Химический
									 <nobr> состав<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__field">
									<input type="text" name="f2_7">
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Количество механических примесей, г/м³
								</div>
								<div class="bz-params__field">
									<input type="text" name="f2_8">
								</div>
							</li>

						</ul>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__subtitle">
							<b>3. Нагреваемая среда</b>
						</div>

						<ul class="bz-params__sublist">
							<li class="bz-params__item">
								<div class="bz-params__label">
									Нагреваемая
									 <nobr> среда<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__field">
									<select name="f3_1">
										<option value="газ">газ</option>
										<option value="жидкость">жидкость</option>
									</select>
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Температура на входе
									 <nobr> теплообменника ,°C<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__field">
									<input type="text" name="f3_2">
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Температура на выходе теплообменника,°C
								</div>
								<div class="bz-params__field">
									<input type="text" name="f3_3">
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Расход воздуха (подводимого к теплообменнику),
									 <nobr> Нм³/час (или: м³/час, кг/час)<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__fields">
									<input type="text" name="f3_4">
									<select name="f3_4_1">
										<option value="Нм³/час">Нм³/час</option>
										<option value="м³/час">м³/час</option>
										<option value="кг/час">кг/час</option>
									</select>
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Давление на входе теплообменника,
									 <nobr> мм.вод.ст. (или Па)<span class="bz-starrequired">*</span></nobr>
								</div>
								<div class="bz-params__fields">
									<input type="text" name="f3_5">
									<select name="f3_5_1">
										<option value="мм.вод.ст.">мм.вод.ст.</option>
										<option value="Па">Па</option>
									</select>
								</div>
							</li>

							<li class="bz-params__item">
								<div class="bz-params__label">
									Допустимое аэродинамическое сопротивление, мм.вод.ст. (или Па)
								</div>
								<div class="bz-params__fields">
									<input type="text" name="f3_6">
									<select name="f3_6_1">
										<option value="мм.вод.ст.">мм.вод.ст.</option>
										<option value="Па">Па</option>
									</select>
								</div>
							</li>
						</ul>

					</li>
					<li class="bz-params__item">
						<div class="bz-params__label">
							4. Место предполагаемой установки теплообменника (описание, эскизы с размерами, фото)
						</div>
						<div class="bz-params__field">
							<textarea cols="30" rows="4" name="f4"></textarea>
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							5. Присоединительные размеры и сечения подводящих и отводящих
							 <nobr> магистралей<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<input type="text" name="f5">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							6. Есть ли ограничения по геометрическим размерам
							 <nobr> (ширине, глубине, высоте)<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<input type="text" name="f6">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							7. Режим работы
							 <nobr> теплообменника<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<select name="f7">
								<option value="односменный">односменный</option>
								<option value="двухсменный">двухсменный</option>
								<option value="непрерывный">непрерывный</option>
							</select>
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							8. Направление движения
							 <nobr> сред<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<select name="f8">
								<option value="встречное">встречное</option>
								<option value="перекрестное">перекрестное</option>
								<option value="согласное">согласное</option>
							</select>
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							9. Использовались ли ранее в данном технологическом процессе теплообменники?<br>
							<small>Если использовался, то их параметры (габариты, срок службы, недостатки, достоинства, технические характеристики указанные выше)</small>
						</div>
						<div class="bz-params__field">
							<textarea name="f9" cols="30" rows="6"></textarea>
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							10. Откуда предполагается производить забор нагреваемой
							 <nobr> среды<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<select name="f10">
								<option value="из помещения">из помещения</option>
								<option value="с улицы">с улицы</option>
							</select>
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							11. Назначение нагретой среды, куда производится ее выброс
						</div>
						<div class="bz-params__field">
							<input type="text" name="f11">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							12. Требуется ли разработка и изготовление теплоизоляции (или она делается
							 <nobr> «по месту»)?<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<input type="text" name="f12">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							13. Количество
							 <nobr> теплообменников<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<input type="text" name="f13">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							14. Необходимые сроки
							 <nobr> поставки<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<input type="text" name="f14">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							15. Источник информации, из которого узнали о теплообменниках типа ОПТ (Оребренный Пластинчатый Теплообменник)
						</div>
						<div class="bz-params__field">
							<input type="text" name="f15">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							16. Название и реквизиты
							 <nobr> предприятия-заказчика<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<textarea cols="30" rows="6" name="f16"></textarea>
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							17. Ф.И.О. контактного
							 <nobr> лица<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<input type="text" name="f17">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							18. Телефон контактного
							<nobr> лица <span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<input type="text" name="f18">
						</div>
					</li>

					<li class="bz-params__item">
						<div class="bz-params__label">
							19. E-mail контактного
							 <nobr> лица<span class="bz-starrequired">*</span></nobr>
						</div>
						<div class="bz-params__field">
							<input type="text" name="f19">
						</div>
					</li>

				</ul>

				<div class="bz-checklist__footer">
					<div class="bz-checklist__footer-info">
						<span class="bz-starrequired">*</span>
						— поля, обязательные для заполнения.
					</div>
					<div class="bz-checklist__footer-btns bz-btns">
						<button type="submit" class="btn btn-outline-primary btn-sm bz-btns__submit">
							Отправить заявку
						</button>
						<button type="reset" class="btn btn-outline-secondary btn-sm bz-btns__reset">
							Очистить форму
						</button>
					</div>
				</div>

			</form>

		</div>

		<script type="text/javascript">
			$(document).ready(function(){

				// Запускаем валидацию формы опросного листа
				var orderFormValidator = $("#orderForm").validate({
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
						f2_7: {
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
						f19: {
							email: true,
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
						f19: {
							email: 'пожалуйста, введите адрес своей электронной почты',
							required: 'поле не заполнено',
						},
					},
				});

				// Отправка данных формы опросного листа
				$('#orderForm').submit(function (e) {

					//отменяем стандартное действие при отправке формы
					e.preventDefault();
					//берем из формы метод передачи данных
					var formMethod = $(this).attr('method');
					//получаем адрес скрипта на сервере, куда нужно отправить форму
					var formAction = $(this).attr('action');
					//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
					//то есть в стандартном формате передачи данных формы + добавляем параметры из адресной строки
					var formData = $(this).serialize();

					if(orderFormValidator.errorList.length === 0) {

						$.ajax({
							type: formMethod,
							url: formAction,
							dataType: 'text',
							data: formData,
							success: function (resp) {
								if (resp) {
									$('#errorMessage').empty();
									$('#errorMessage').append('Необходимо заполнить все обязательные поля опросного листа.');
									$('#errorModal').modal('show');
			    				} else {
									$('#confirmationModal').modal('show');
								}
							}
						});
					} else {

						$('#errorMessage').empty();
						$('#errorMessage').append('Необходимо заполнить все обязательные поля опросного листа.');
						$('#errorModal').modal('show');
					}
				});
			});
		</script>

	</div>

</section>
