<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Новая роль</h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/roles/create/">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name"
                               class="form-label">Наименование</label>
                        <input type="text" class="form-control" name="name"
                               id="name"
                               required="">
                        <div class="invalid-feedback">
                            Пожалуйста, введите наименование роли.
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