  <div class="container-fluid">
    <img src="img/logo.png" alt="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="fa-solid fa-house"></i></a>
        </li>
        <!-- sign -->
        <li>
        <button type="button" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-user"></i>
        </button>
        </li>
        <li class="nav-item position-relative">
            <a class="nav-link position-relative" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <span class="position-absolute  translate-middle badge rounded-pill " style="background-color: #dddd; color: #BE1622; left: 100%; top: 3px;">
              99+
              <span class="visually-hidden">unread messages</span>
            </span>
        </li>
        </ul>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
           <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">تسجيل دخول</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">انشاء حساب</button>
              </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="form-floating mb-3">
                 <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                 <label for="floatingInput">البريد الالكتروني</label>
                </div>
                <div class="form-floating">
                 <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                 <label for="floatingPassword">كلمة المرور</label>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn">تسجيل الدخول</button>
                <button type="button" class="btn cancel" data-bs-dismiss="modal">الغاء</button>
                </div>
               </div>
               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">اسم المستخدم</label>
                </div>
                <div class="form-floating mb-3">
                 <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                 <label for="floatingInput">البريد الالكتروني</label>
                </div>
                <div class="form-floating">
                 <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                 <label for="floatingPassword">كلمة المرور</label>
                </div>
                <div class="modal-footer">
                 <button type="button" class="btn cancel" data-bs-dismiss="modal">الغاء</button>
                 <button type="button" class="btn">انشاء حساب</button>
                </div>
               </div> 
              </div>
            </div>
           </div>
