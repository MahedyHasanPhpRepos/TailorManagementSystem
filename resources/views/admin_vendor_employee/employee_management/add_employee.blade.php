@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">নতুন কর্মচারী যোগ</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">


            <div class="accordion" id="accordionExample">
                <div class="accordion-item">

                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed accordion__heading" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <span class=""><i class=" fas fa-search mr-2"></i></span>
                            <span class="ml-2">কর্মচারীর তথ্য</span>

                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body ">
                            <div class="row">

                                <div class="col-md-8 mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">নাম :
                                                    <span style="color:red">*</span></label>
                                                <input type="text" class="form-control" id="order_number"
                                                    name="order_number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important"> মোবাইল
                                                    নাম্বার :
                                                    <span style="color:red">*</span></label>
                                                <input type="text" class="form-control" id="order_number"
                                                    name="order_number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">ইমেইল :

                                                </label>
                                                <input type="text" class="form-control" id="order_number"
                                                    name="order_number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important"> স্কাইপ আইডি
                                                    :

                                                </label>
                                                <input type="text" class="form-control" id="order_number"
                                                    name="order_number">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">পদ / পদবি :
                                                    <span style="color:red">*</span></label>

                                                <select name="" id="" class="form-control">
                                                    <option value="">All</option>
                                                    <option value="">রানিং</option>
                                                    <option value="">রেডি</option>
                                                    <option value="">খালাস</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">যোগদানের
                                                    তারিখ : <span style="color:red">*</span></label>

                                                <input id="datepicker1" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">মাসিক বেতন :
                                                    <span style="color:red">*</span></label>
                                                <input type="text" class="form-control" id="order_number"
                                                    name="order_number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">কন্ট্রাক্টের
                                                    মেয়াদ :
                                                    <span style="color:red">*</span></label>

                                                <select name="" id="" class="form-control">
                                                    <option value="">All</option>
                                                    <option value="">রানিং</option>
                                                    <option value="">রেডি</option>
                                                    <option value="">খালাস</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">ছবি :
                                                    <span style="color:red">*</span></label>
                                                <input type="file" class="form-control" id="order_number"
                                                    name="order_number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">যোগাযোগের ঠিকানা :
                                                    <span style="color:red">*</span></label>

                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="row mt-3">
                                        <div class="d-flex justify-content-end">

                                            <button class="btn btn-primary btn-rounded" style="margin-left: 5px ;"><span
                                                    style="padding-right: 10px ;">Submit</span> <i
                                                    class="fas fa-arrow-right pr-5"></i></button>
                                        </div>
                                    </div>

                                </div>





                                <!-- <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">গ্রাহকের মোবাইল নং :
                                            <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number"
                                            name="order_number">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">শুরুর তারিখ : <span
                                                style="color:red">*</span></label>
                                      
                                        <input id="datepicker1" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important"> শেষের তারিখ : <span
                                                style="color:red">*</span></label>
                                      

                                        <input id="datepicker2" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">অর্ডার স্ট্যাটাস :
                                            <span style="color:red">*</span></label>
                                      
                                        <select name="" id="" class="form-control">
                                            <option value="">All</option>
                                            <option value="">রানিং</option>
                                            <option value="">রেডি</option>
                                            <option value="">খালাস</option>
                                        </select>
                                    </div>
                                </div> -->

                            </div>

                        </div>
                    </div>
                </div>

            </div>




        </div>
    @endsection
