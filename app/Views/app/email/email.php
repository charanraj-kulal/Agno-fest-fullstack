<!doctype html>
<html lang="en">
  <head>
    <title>Send Email in CodeIgniter 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid py-4">
    
    <?php $validation =  \Config\Services::validation(); ?>

    <h3 class="display-6 text-center font-weight-bold">Send Email in CodeIgniter 4 Using Gmail SMTP </h3>
        <div class="row pt-4 border border-bottom-0">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 m-auto">
                <form action="<?= base_url('email') ?>" method="POST">
                
                    <?= csrf_field() ?>

                    <?= (session()->getFlashdata('message')) ? 
                    '<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>'
                           .session()->getFlashdata('message').
                        '</div>': '' ?>
                        

                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold">Send Email </h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>To <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control <?= $validation->getError('email') ? 'is-invalid': ''?>" placeholder="Email Recipient"/>
                                <?= $validation->getError('name') ? '<div class="invalid-feedback">'.$validation->getError("email") .'</div>': ''?>
                            </div>

                            <div class="form-group">
                                <label>Subject <span class="text-danger">*</span></label>
                                <input type="text" name="subject" class="form-control <?= $validation->getError('subject') ? 'is-invalid': ''?>" placeholder="Subject"/>
                                <?= $validation->getError('subject') ? '<div class="invalid-feedback">'.$validation->getError("subject") .'</div>': ''?>
                            </div>

                            <div class="form-group">
                                <label>Message <span class="text-danger">*</span> </label>
                                <textarea name="message" class="form-control <?= $validation->getError('message') ? 'is-invalid': ''?>" placeholder="Your Message"></textarea>
                                <?= $validation->getError('message') ? '<div class="invalid-feedback">'.$validation->getError("message") .'</div>': ''?>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Send Email </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>