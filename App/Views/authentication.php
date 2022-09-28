<section class="main-banner overlay">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-5 mt-2 mt-sm-5 h3 text-white">Authentication</h1>
        <form class="d-flex flex-column" method="post"
              action="/authentication/check/">
            <div class="mb-3">
                <label for="exampleInputLogin"
                       class="form-label text-white mb-1">Login:</label>
                <input type="email" name="email" class="form-control"
                       id="exampleInputLogin">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword"
                       class="form-label text-white mb-1">Password:</label>
                <input type="password" name="password" class="form-control"
                       id="exampleInputPassword">
            </div>
            <button
                    type="submit"
                    name="auth"
                    class="btn btn-dark mb-3"
            >Sign In
            </button>
        </form>
    </div>
</section>