
        <style>
            #content {
                min-height: 500px;
            }
        </style>
        <!-- End: header -->
        <!-- start content -->
        <div id="content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
                </ol>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-center text-danger">Thông tin khách hàng</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 form-group">
                                    <label for="fullname" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" id="fullname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 form-group">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 form-group">
                                    <label for="phone" class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Địa Chỉ</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h4 class="text-center text-danger">Thông tin đơn hàng</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sản phẩm </th>
                                            <th scope="col" colspan="2">Số lượng </th>
                                            <th scope="col">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>Áo thun</td>
                                            <td colspan="2">1</td>
                                            <td>800.000 vnđ</td>
                                        </tr>
                                        <tr>

                                            <td>Tủ lạnh</td>
                                            <td colspan="2">1</td>
                                            <td>20.000.000 vnđ</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Tổng đơn hàng: </th>
                                            <th scope="col"></th>
                                            <th scope="col" colspan="2">20.800.000 vnđ</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p class="text-secondary">Phương thức thanh toán</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group ml-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioDisabled" >
                                        <label class="form-check-label" for="flexRadioDisabled">
                                            Thanh toán khi nhận hàng
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioCheckedDisabled" checked >
                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                            Thanh toán online
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Xác nhận thanh toán</button>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>



