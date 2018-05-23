<!DOCTYPE html>

<html>

<head>

	<title>Php Ajax Form Validation</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>


<div class="container">

  <h1>Php Ajax Formulaire Validation</h1>

  <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">

    <div class="alert alert-danger display-error" style="display: none">

    </div>

    <div class="form-group">

      <div class="controls">

        <input type="text" id="name" class="form-control" placeholder="Nom">

      </div>

    </div>

    <div class="form-group">

      <div class="controls">

        <input type="email" class="email form-control" id="email" placeholder="Email" >

      </div>

    </div>

    <div class="form-group">

      <div class="controls">

        <input type="text" id="msg_subject" class="form-control" placeholder="Sujet" >

      </div>

    </div>

    <div class="form-group">

      <div class="controls">

        <textarea id="message" rows="7" placeholder="Message" class="form-control"></textarea>

      </div>

    </div>

    <button type="submit" id="submit" class="btn btn-success"><i class="fa fa-check"></i>Envoyer</button>

  </form>

</div>


</body>

</html>