<section class=" w-100 gradient-custom">
    <div class="container  h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <form class="mb-md-5 pb-5" method="POST" action="/admin/login">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <input type="text" id="typeEmailX" class="form-control form-control-lg" placeholder="Felhasználónév" name="name" required/>
                                <label class="form-label" for="typeEmailX">Felhasználó</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" placeholder="Jelszó" required/>
                                <label class="form-label" for="typePasswordX">Jelszó</label>
                            </div>


                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>



                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
</section>