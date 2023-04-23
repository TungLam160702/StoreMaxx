
        <!-- content -->
        <style>
            #content {
                min-height: 500px;
            }
        </style>
     
        <div id="content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">login</li>
                    <li class="breadcrumb-item active" aria-current="page">register</li>
                </ol>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-center">ĐĂNG KÝ</h1>
                        <form>
                            <div class="mb-3 form-group">
                                <label for="exampleInputEmail1" class="form-label">Họ và tên:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Nhập họ và tên
                                </div>
                            </div>

                            <div class="mb-3 form-group">
                                <label for="exampleInputEmail1" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.
                                </div>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="exampleInputPassword1" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <select class="form-select form-select-lg mb-3 form-group" aria-label=".form-select-lg example">
                                <option selected>Giới tính</option>
                                <option value="1">Nam</option>
                                <option value="1">Nữ</option>
                                <option value="2">Khác</option>
                            </select>
                            <div class="mb-3 form-group">
                                <label for="exampleFormControlTextarea1" class="form-label">Địa Chỉ</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      