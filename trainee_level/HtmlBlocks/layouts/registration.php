<!-- Main content -->
<div class="py-5 text-center">
    <h2>Регистрация Пользователя</h2>
</div>
<div class="row">
    <div class="col-md-12 order-md-1">
        <h4 class="mb-3">Данные пользователя</h4>
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="firstName">Имя</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Ваше имя" value="" required>
                    <div class="invalid-feedback">
                        Не указано Имя пользователя
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lastName">Фамилия</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Ваша фамилия" value="" required>
                    <div class="invalid-feedback">
                        Фамилия указана не верно
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Никнейм обязателен
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        E-mail указан не верно
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Получать уведомления на почту</label>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address" required>
                <label class="custom-control-label" for="same-address">Соглашаюсь с политикой конфиденциальности</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info" required>
                <label class="custom-control-label" for="save-info">Соглашаюсь на обработку персональных данных</label>
            </div>
            <hr class="mb-4">
            <div class="form-group row">
                <button type="submit" class="btn btn-primary">Регистрация</button>
            </div>
        </form>
    </div>
</div>
<!-- End Main content -->
</div>
