<div
    id="callbackModal"
    class="bz-modal-callback modal fade"
    tabindex="-1"
    role="dialog"
    data-backdrop="true"
    aria-labelledby="callbackModal"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 id="callbackModalLabel" class="modal-title">Заказ обратного звонка</h5>

                <button
                    class="close"
                    type="button"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form
                        id="callbackModalForm"
                        class="bz-modal-callback__form bz-callback-form"
                        action="handler-order.php"
                        method="POST">

                        <div class="row justify-content-end form-group bz-callback-form__phone">

                            <label
                                class="col-3 col-form-label col-form-label-sm pl-0 pr-0"
                                for="callbackPhone">
                                Телефон <span class="bz-starrequired">*</span>
                            </label>

                            <input
                                type="text"
                                id="callbackPhone"
                                class="col-9 form-control form-control-sm"
                                name="phone"
                                aria-describedby="phoneHelp"
                                placeholder="Введите Ваш телефон">

                            <small id="phoneHelp" class="col-9 form-text text-muted pl-0 pr-0 bz-callback-form__phone-text">
                                Номер должен содеражать код города/оператора
                            </small>

                        </div>

                        <div class="form-group row bz-callback-form__timezone">

                            <label
                                class="col-3 col-form-label col-form-label-sm pl-0 pr-0"
                                for="callbackTimezone">
                                Часовой пояс
                            </label>

                            <select
                                id="callbackTimezone"
                                class="col-9 form-control form-control-sm"
                                name="timezone">
                                <option value=""> Укажите часовой пояс </option>
                                <option value="GMT +02 (Украина)"> GMT +02 (Украина) </option>
                                <option value="GMT +03 (Калининград, Украина)"> GMT +03 (Калининград, Украина) </option>
                                <option value="GMT +04 (Москва)"> GMT +04 (Москва) </option>
                                <option value="GMT +05 (Казахстан)"> GMT +05 (Казахстан) </option>
                                <option value="GMT +06 (Екатеринбург, Казахстан)"> GMT +06 (Екатеринбург, Казахстан) </option>
                                <option value="GMT +07 (Омск, Новосибирск)"> GMT +07 (Омск, Новосибирск) </option>
                                <option value="GMT +08 (Красноярск)"> GMT +08 (Красноярск) </option>
                                <option value="GMT +09 (Иркутск)"> GMT +09 (Иркутск) </option>
                                <option value="GMT +10 (Якутск)"> GMT +10 (Якутск) </option>
                                <option value="GMT +11 (Владивосток)"> GMT +11 (Владивосток) </option>
                                <option value="GMT +12 (Магадан)"> GMT +12 (Магадан) </option>
                            </select>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-auto pr-0">
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Отменить</button>
                                <button type="submit" class="btn btn-outline-primary btn-sm">Позвоните мне</button>
                            </div>
                        </div>

                    </form>
                    <p id="ajaxResult" class="col-12 text-center bz-modal-callback__message"></p>
                </div>
            </div>
            <div id="callbackModalFooter" class="modal-footer">
                <div class="container-fluid">
                    <div class="row">
                        <small class="col-12 text-muted text-center bz-modal-callback__notice">
                            Заказ обратного звонка возможен круглосуточно.<br>
                            Менеджер перезвонит Вам в рабочее время.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
