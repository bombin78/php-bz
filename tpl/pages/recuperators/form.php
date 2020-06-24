<section class="page">

	<h1 class="page__content-title content-title"><?php echo $title; ?></h1>

	<div class="description">

		<div class="description__row">
			<a class="bnrc" href="http://rekuperator.ru/">
				<img class="bnrc__img" src="/images/pages/recuperators/rekuperator.ru.jpg">
			</a>
		</div>


		<h3>Опросный лист для разработки исходных требований к проектированию  теплообменника типа ОПТ </h3>
		<p>
			Также вы можете <b><a href="/media/recuperators-form.doc">скачать опросный лист</a></b>, заполнить его и отправить нам по факсу.<br><br>
		</p>
		<!-- <script type="text/javascript" src="/bitrix/templates/main-template/js/jquery-1.2.6.js"></script>
		<script type="text/javascript" src="/bitrix/templates/main-template/js/jquery.validate.js"></script> -->

		<form method="POST" id="order-form" action="mail.php">
			<table width="550px" cellpadding="3" cellspacing="0" border="0">
			<tbody>

				<tr>
					<td>
						<b>1. Название и описание технологического процесса, в котором будет использован теплообменник</b>
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<textarea cols="30" rows="4" name="f1" class="required"></textarea>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<b>2.Теплоноситель</b>
					</td>
				</tr>

				<tr>
					<td class="label">
						Греющая среда
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<select name="f2_1" class="required">
							<option value="газ">газ</option>
							<option value="жидкость">жидкость</option>
							<option value="воздух">воздух</option>
						</select>
					</td>
				</tr>

				<tr>
					<td class="label">
						Температура на входе теплообменника ,°C
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input type="text" size="40" class="required" name="f2_2">
					</td>
				</tr>

				<tr>
					<td class="label">
						Температура на выходе теплообменника ,°C
					</td>
					<td class="field">
						<input type="text" size="40" name="f2_3">
					</td>
				</tr>

				<tr>
					<td class="label">
						Расход газа (подводимого к теплообменнику), м³ /час, (или кг/час)
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input type="text" class="required" size="40" name="f2_4">
					</td>
				</tr>

				<tr>
					<td class="label">
						Давление на входе теплообменника, МПа
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input type="text" class="required" size="40" name="f2_5">
					</td>
				</tr>

				<tr>
					<td class="label">
						Химический состав
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input type="text" class="required" size="40" name="f2_6">
					</td>
				</tr>

				<tr>
					<td class="label">
						Количество механических примесей, г/м³
					</td>
					<td class="field">
						<input type="text" size="40" name="f2_7">
					</td>
				</tr>

				<tr>
					<td class="label">
						Допустимое аэродинамическое сопротивление, мм.вод.ст.
					</td>
					<td class="field">
						<input type="text" size="40" name="f2_8">
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<b>3. Нагреваемая среда</b>
					</td>
				</tr>

				<tr>
					<td class="label">
						Нагреваемая среда
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<select class="required" name="f3_1">
							<option value="газ">газ</option>
							<option value="жидкость">жидкость</option>
						</select>
					</td>
				</tr>

				<tr>
					<td class="label">
						Температура на входе теплообменника ,°C
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f3_2">
					</td>
				</tr>

				<tr>
					<td class="label">
						Температура на выходе теплообменника,°C
					</td>
					<td class="field">
						<input type="text" size="40" name="f3_3">
					</td>
				</tr>

				<tr>
					<td class="label">
						Расход воздуха (подводимого к теплообменнику), м³/час (или кг/час)
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f3_4">
					</td>
				</tr>

				<tr>
					<td class="label">
						Давление на входе теплообменника, МПа
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f3_5">
					</td>
				</tr>

				<tr>
					<td class="label">
						Допустимое аэродинамическое сопротивление, мм.вод.ст.
					</td>
					<td class="field">
						<input type="text" size="40" name="f3_6">
					</td>
				</tr>

				<tr>
					<td class="label">
						4. Место предполагаемой установки теплообменника (описание, эскизы с размерами, фото)
					</td>
					<td class="field">
						<textarea cols="30" rows="4" name="f4"></textarea>
					</td>
				</tr>

				<tr>
					<td class="label">5.
						Присоединительные размеры и сечения подводящих и отводящих магистралей
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f5"></td>
				</tr>

				<tr>
					<td class="label">
						6. Есть ли ограничения по геометрическим размерам (ширине, глубине, высоте)
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f6">
					</td>
				</tr>

				<tr>
					<td class="label">
						7. Режим работы теплообменника
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<select class="required" name="f7">
							<option value="односменный">односменный</option>
							<option value="двухсменный">двухсменный</option>
							<option value="непрерывный">непрерывный</option>
						</select>
					</td>
				</tr>

				<tr>
					<td class="label">
						8. Направление движения сред
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<select name="f8">
							<option value="встречное">встречное</option>
							<option value="перекрестное">перекрестное</option>
							<option value="согласное">согласное</option>
						</select>
					</td>
				</tr>

				<tr>
					<td class="label">
						9. Использовались ли ранее в данном технологическом процессе теплообменники?<br>
						<small>Если использовался, то их параметры (габариты, срок службы, недостатки, достоинства, технические характеристики указанные выше)</small>
					</td>
					<td class="field">
						<textarea name="f9" cols="30" rows="6"></textarea>
					</td>
				</tr>

				<tr>
					<td class="label">
						10. Откуда предполагается производить забор нагреваемой среды
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<select class="required" name="f10">
							<option value="из помещения">из помещения</option>
							<option value="с улицы">с улицы</option>
						</select>
					</td>
				</tr>

				<tr>
				</tr>
				<tr>
					<td class="label">
						11. Назначение нагретой среды, куда производится ее выброс
					</td>
					<td class="field">
						<input type="text" size="40" name="f11">
					</td>
				</tr>

				<tr>
					<td class="label">
						12. Требуется ли разработка и изготовление теплоизоляции (или она делается «по месту»)?
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f12">
					</td>
				</tr>

				<tr>
					<td class="label">
						13. Количество  теплообменников
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f13">
					</td>
				</tr>

				<tr>
					<td class="label">
						14. Необходимые сроки поставки
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f14">
					</td>
				</tr>

				<tr>
					<td class="label">
						15. Источник информации, из которого узнали о теплообменниках типа ОПТ (Оребренный Пластинчатый Теплообменник)
					</td>
					<td class="field">
						<input type="text" size="40" name="f15">
					</td>
				</tr>

				<tr>
					<td class="label">
						16. Название и реквизиты предприятия-заказчика
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<textarea class="required" cols="30" rows="6" name="f16"></textarea>
					</td>
				</tr>

				<tr>
					<td class="label">
						17. Ф.И.О. контактного лица
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f17">
					</td>
				</tr>

				<tr>
					<td class="label">
						18. Телефон контактного лица
						<span class="starrequired">*</span>
					</td>
					<td class="field">
						<input class="required" type="text" size="40" name="f18">
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<span class="starrequired">*</span>
						— поля, обязательные для заполнения.
					</td>
				</tr>

				<tr>
					<td colspan="2" align="right">
						<input type="submit" id="submit" name="send" value="Отправить заявку">
						<input type="reset" name="clear" value="Очистить форму">
					</td>
				</tr>

			</tbody>
			</table>
		</form>

		<!-- <script type="text/javascript">
			$(document).ready(function(){
				$("#order-form").validate();
			 	$(".required").validate({
			  		rules: { field: "required" }
				});
			});
		</script> -->

		<p>
			Деятельность Бушевецкого завода отражена на основном сайте "
			<a href="http://rekuperator.ru/info12.php" title="Пластинчатые рекуператоры Бушевецкого завода - Производство пластинчатых теплообменников газов. Рекуператоры нового поколения">
				Пластинчатые рекуператоры
			</a>"
		</p>

	</div>

</section>
