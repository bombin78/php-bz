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

		<form method="POST" id="order-form">
			<table width="550px" cellpadding="3" cellspacing="0" border="0">
			<tbody><tr>
			<td><b>1.&nbsp;Название и&nbsp;описание технологического процесса, в&nbsp;котором будет использован теплообменник</b><span class="starrequired">*</span></td>
			<td class="field"><textarea cols="30" rows="4" name="tehprocess" class="required"></textarea></td>
			</tr>
			<tr><td colspan="2"><b>2.&nbsp;Теплоноситель</b></td></tr>
			<tr>
			<td class="label">Греющая среда<span class="starrequired">*</span></td>
			<td class="field"><select name="grsreda" class="required"><option value="газ">газ</option><option value="жидкость">жидкость</option><option value="воздух">воздух</option></select></td>
			</tr>
			<tr>
			<td class="label">Температура на&nbsp;входе теплообменника ,°C<span class="starrequired">*</span></td>
			<td class="field"><input type="text" size="40" class="required" name="grsreda-t1"></td>
			</tr>
			<tr>
			<td class="label">Температура на&nbsp;выходе теплообменника ,°C</td>
			<td class="field"><input type="text" size="40" name="grsreda-t2"></td>
			</tr>
			<tr>
			<td class="label">Расход газа (подводимого к&nbsp;теплообменнику), м³ /час, (или кг/час)<span class="starrequired">*</span></td>
			<td class="field"><input type="text" class="required" size="40" name="grsreda-rashod-gaza"></td>
			</tr>
			<tr>
			<td class="label">Давление на&nbsp;входе теплообменника, МПа<span class="starrequired">*</span></td>
			<td class="field"><input type="text" class="required" size="40" name="grsreda-pression"></td>
			</tr>
			<tr>
			<td class="label">Химический состав<span class="starrequired">*</span></td>
			<td class="field"><input type="text" class="required" size="40" name="grsreda-him-sotav"></td>
			</tr>
			<tr>
			<td class="label">Количество механических примесей, г/м³</td>
			<td class="field"><input type="text" size="40" name="grsreda-kol-primesey"></td>
			</tr>
			<tr>
			<td class="label">Допустимое аэродинамическое сопротивление, мм.вод.ст.</td>
			<td class="field"><input type="text" size="40" name="grsreda-dop-soprot"></td>
			</tr>
			<tr><td colspan="2"><b>3.&nbsp;Нагреваемая среда</b>
			</td></tr>
			<tr>
			<td class="label">Нагреваемая среда<span class="starrequired">*</span></td>
			<td class="field"><select class="required" name="nagrsreda"><option value="газ">газ</option><option value="жидкость">жидкость</option></select></td>
			</tr>
			<tr>
			<td class="label">Температура на&nbsp;входе теплообменника ,°C<span class="starrequired">*</span></td>
			<td class="field"><input class="required" type="text" size="40" name="nagrsreda-t1"></td>
			</tr>
			<tr>
			<td class="label">Температура на&nbsp;выходе теплообменника,°C</td>
			<td class="field"><input type="text" size="40" name="nagrsreda-t2"></td>
			</tr>
			<tr>
			<td class="label">Расход воздуха (подводимого к&nbsp;теплообменнику), м³/час (или кг/час)<span class="starrequired">*</span></td>
			<td class="field"><input class="required" type="text" size="40" name="nagrsreda-razhod-vozd"></td>
			</tr>
			<tr>
			<td class="label">Давление на&nbsp;входе теплообменника, МПа<span class="starrequired">*</span></td>
			<td class="field"><input class="required" type="text" size="40" name="nagrsreda-pression"></td>
			</tr>
			<tr>
			<td class="label">Допустимое аэродинамическое сопротивление, мм.вод.ст.</td>
			<td class="field"><input type="text" size="40" name="nagrsreda-dop-soprot"></td>
			</tr>
			<tr><td class="label">4.&nbsp;Место предполагаемой установки теплообменника (описание, эскизы с&nbsp;размерами, фото)
			</td><td class="field"><textarea cols="30" rows="4" name="place"></textarea></td></tr>
			<tr><td class="label">5.&nbsp;Присоединительные размеры и&nbsp;сечения подводящих и&nbsp;отводящих магистралей<span class="starrequired">*</span></td><td class="field"><input class="required" type="text" size="40" name="magistral-size"></td></tr>
			<tr><td class="label">6.&nbsp;Есть&nbsp;ли ограничения по&nbsp;геометрическим размерам (ширине, глубине, высоте)<span class="starrequired">*</span></td>
			<td class="field"><input class="required" type="text" size="40" name="ogranich"></td></tr>
			<tr><td class="label">7.&nbsp;Режим работы теплообменника<span class="starrequired">*</span>
			</td><td class="field">
			<select name="rezim" class="required">
			<option value="односменный">односменный</option>
			<option value="двухсменный">двухсменный</option>
			<option value="непрерывный">непрерывный</option>
			</select></td></tr>
			<tr><td class="label">8.&nbsp;Направление движения сред<span class="starrequired">*</span>
			</td><td class="field">
			<select name="napravlenie">
			<option value="встречное">встречное</option>
			<option value="перекрестное">перекрестное</option>
			<option value="согласное">согласное</option>
			</select></td></tr>
			<tr>
			<td class="label">9.&nbsp;Использовались&nbsp;ли ранее в&nbsp;данном технологическом процессе теплообменники?<br><small>Если использовался, то&nbsp;их&nbsp;параметры (габариты, срок службы, недостатки, достоинства, технические характеристики указанные выше)</small>
			</td>
			<td class="field">
			<textarea name="used-before" cols="30" rows="6"></textarea></td></tr>
			<tr><td class="label">10.&nbsp;Откуда предполагается производить забор нагреваемой среды<span class="starrequired">*</span>
			</td><td class="field">
			<select name="source" class="required">
			<option value="из помещения">из помещения</option>
			<option value="с улицы">с улицы</option>
			</select></td></tr>
			<tr>
			</tr><tr><td class="label">11.&nbsp;Назначение нагретой среды, куда производится ее&nbsp;выброс
			</td><td class="field">
			<input type="text" size="40" name="destination">
			</td></tr>
			<tr><td class="label">12.&nbsp;Требуется&nbsp;ли разработка и&nbsp;изготовление теплоизоляции (или она делается «по&nbsp;месту»)?<span class="starrequired">*</span>
			</td><td class="field">
			<input type="text" size="40" name="isolation" class="required"></td></tr>
			<tr><td class="label">13.&nbsp;Количество  теплообменников<span class="starrequired">*</span>
			</td><td class="field">
			<input type="text" size="40" name="teploobmenniki" class="required"></td></tr>
			<tr><td class="label">14.&nbsp;Необходимые сроки поставки<span class="starrequired">*</span>
			</td><td class="field">
			<input type="text" size="40" name="term" class="required"></td></tr>
			<tr><td class="label">15.&nbsp;Источник информации, из&nbsp;которого узнали о&nbsp;теплообменниках типа ОПТ (Оребренный Пластинчатый Теплообменник)</td><td class="field">
			<input type="text" size="40" name="info-source"></td></tr>
			<tr><td class="label">16.&nbsp;Название и&nbsp;реквизиты предприятия-заказчика<span class="starrequired">*</span>
			</td><td class="field">
			<textarea cols="30" rows="6" name="name-rekviz" class="required"></textarea></td></tr>
			<tr><td class="label">17.&nbsp;Ф.И.О. контактного лица<span class="starrequired">*</span>
			</td><td class="field">
			<input type="text" size="40" name="fio" class="required"></td></tr>
			<tr><td class="label">18.&nbsp;Телефон контактного лица<span class="starrequired">*</span>
			</td><td class="field">
			<input type="text" size="40" name="phone" class="required"></td></tr>
			<tr><td colspan="2"><span class="starrequired">*</span>— поля, обязательные для заполнения.<br></td></tr>
			<tr><td colspan="2" align="right"><input type="submit" id="submit" name="send" value="Отправить заявку"> <input type="reset" name="clear" value="Очистить форму"></td></tr>
			</tbody></table>
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
