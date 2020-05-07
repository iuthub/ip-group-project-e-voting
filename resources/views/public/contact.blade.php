@extends('public.layout')

@section('content')
<!-- Main content -->
    <section id="main-content">
        <div class="container-fluid">
            <div class="container article-border rounded shadow bg-light mt-4 mb-3 p-5">
                <div class="section-title">
                    <h2 style="font-weight: 600; font-size: 1.8rem;"><span>Get help with Qaqnus.uz</span></h2>
                </div>
                <div class="row">
                    <div class="container col-lg-4 col-sm-12">
                        <div class="mb-4">
                            <h3>Contact Info</h3>
                        </div>
                        <div>
                            <h5><i class="fa fa-map-marker fa-lg text-danger contact-info-icon pl-1"></i>Address</h5>
                            <p class="container contact-info-text">Tashkent, Mirabad, I.Karimov street, 77</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-envelope fa-lg text-info contact-info-icon"></i>Email</h5>
                            <p class="container contact-info-text">qaqnus@umail.uz</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-phone-square fa-lg text-success contact-info-icon"></i>Call</h5>
                            <p class="container contact-info-text">+998 99 73 277 17 71</p>
                        </div>
                    </div>
                    <div class="contact-form container col-lg-8 col-sm-12">
                        <div class="mb-4 email-section">
                            <h3>Email us</h3>
                        </div>
                        <form>
                            <div class="form-group">
                              <input type="text" class="form-control" id="contact-name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="contact-email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="contact-subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" rows="5" id="comment" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success font-weight-bold" disabled>Send request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection