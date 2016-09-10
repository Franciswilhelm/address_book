<?php
    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
    $_SESSION['list_of_contacts'] = array();
    }

    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();

    $app->get("/", function() {

      return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll()));

    });

    $app->post("/contacts", function() use ($app) {
        $contact = new Contact($_POST['description']);
        $contact->save();
        return $app['twig']->render('create_contact.html.twig', array('newcontact' => $contact));
    });

    $app->post("/delete_contacts", function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('delete_contacts.html.twig');
    });

    return $app;
  ?>

       "<!DOCTYPE html>
       <html>
       <head>
           <title>Contacts</title>
           <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
       </head>
       <body>
           <div class='container'>
            <h1>Contacts</h1>
            <p>Enter a new contact</p>
            <form action='/view_contacts'>
              <div class='form-group'>
                <label for='name'>Enter a name:</label>
                <input id='name' name='name' class='form-control' type='text'>
              </div>
              <div class='form-group'>
                <label for='number'>Enter a phone number:</label>
                <input id='number' name='number' class='form-control' type='number'>
              </div>
              <div class='form-group'>
                <label for='address'>Enter the contact's address:</label>
                <input id='address' name='address' class='form-control' type='text'>
              </div>
              <button type='submit' class='btn-success'>Create contact</button>
            </form>
           </div>
         </body>
       </html>"
       ;
   });
