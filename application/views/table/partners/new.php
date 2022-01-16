<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Новый партнёр</h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/partners/create/">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name"
                               id="name"
                               required="">
                        <div class="invalid-feedback">
                            Пожалуйста, введите имя партнёра.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phone" class="form-label">Телефон</label>
                        <input type="tel" class="form-control" name="phone"
                               id="phone"
                               required="">
                        <div class="invalid-feedback">
                            Пожалуйста, введите телефон.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <input class="btn btn-success btn-lg btn-block" type="submit"
                       value="Создать">
            </form>
        </div>
    </div>
</main>